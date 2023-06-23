<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BdoReceipt;
use Carbon\Carbon;

class BdoReceiptController extends Controller
{
    public function timestamp()
    {
        $bdoReceipts = BdoReceipt::orderBy('posting_datetime', 'desc')->paginate(100);
        $latestUploadTimestamp = BdoReceipt::latest('created_at')->value('created_at');
        
        return view('bdo-receipts', [
            'latestUploadTimestamp' => $latestUploadTimestamp,
            'bdoReceipts' => $bdoReceipts
        ]);
    }
    
    public function upload(Request $request)
{
    $file = $request->file('csv_file');

    if (!$file) {
        return redirect()->back()->withErrors(['Please upload a file.']);
    }

    if (!in_array($file->getClientOriginalExtension(), ['csv', 'txt'])) {
        return redirect()->back()->withErrors(['File must be a CSV or TXT.']);
    }

    $handle = fopen($file->getPathname(), 'r');

    if (!$handle) {
        return redirect()->back()->withErrors(['Unable to open file.']);
    }

    while (($data = fgetcsv($handle)) !== false) {
        if (count($data) < 7) {
            // Handle invalid data format (less than 7 elements)
            continue;
        }

        $description = isset($data[2]) ? $data[2] : null;

        // Check if the description is set and is not empty
        if (empty($description)) {
            // Handle missing description
            continue;
        }

        // Check if the record already exists in the database based on the description field
        $existingRecord = BdoReceipt::where('description', $description)->first();
        if ($existingRecord) {
            continue; // Skip uploading the record
        }

        BdoReceipt::create([
            'posting_datetime' => $data[0],
            'branch' => $data[1],
            'description' => $description,
            'debit' => $data[3],
            'credit' => $data[4],
            'running_balance' => $data[5],
            'check_number' => $data[6],
        ]);
    }

    fclose($handle);

    return redirect()->back()->with('success', 'File uploaded successfully!');
}

    
    
        

    

}

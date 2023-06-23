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
    
        $uploadedDescriptions = []; // Array to store uploaded descriptions
    
        while (($data = fgetcsv($handle)) !== false) {
            $description = $data[2];
    
            // Check if the description already exists in the uploaded descriptions array
            if (in_array($description, $uploadedDescriptions)) {
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
    
            $uploadedDescriptions[] = $description; // Add the description to the uploaded descriptions array
        }
    
        fclose($handle);
    
        return redirect()->back()->with('success', 'File uploaded successfully!');
    }
    

    

}

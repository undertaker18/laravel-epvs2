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
        $bdoReceipts = BdoReceipt::orderBy('posting_datetime', 'desc')->paginate(10);
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
         

            BdoReceipt::create([
                'posting_datetime' =>  $data[0],
                'branch' => $data[1],
                'description' => $data[2],
                'debit' => $data[3],
                'credit' => $data[4],
                'running_balance' => $data[5],
                'check_number' => $data[6],
            ]);
            
        }

        fclose($handle);

        return redirect()->back()->with('success', 'File uploaded successfully!');

    }

    public function search(Request $request)
    {
    $query = $request->input('query');
    $bdoReceipts = BdoReceipt::where('description', 'LIKE', "%$query%")
        ->orderBy('posting_datetime', 'desc')
        ->paginate(10);
    return view('bdo-receipts-table', ['bdoReceipts' => $bdoReceipts])->render();
    }

}

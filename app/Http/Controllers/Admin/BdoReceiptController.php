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
        $bdoReceipts = BdoReceipt::all();
        $latestUploadTimestamp = BdoReceipt::latest('created_at')->value('created_at');
        
        return view('bdo-receipts', [
            'latestUploadTimestamp' => $latestUploadTimestamp,
            'bdoReceipts' => $bdoReceipts
        ]);
    }
    
    public function upload(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'csv_file' => 'required|file|mimes:csv,txt',    
        ]);
    
        // Get the uploaded file from the request
        $file = $request->file('csv_file');
    
        // Open the file for reading
        $handle = fopen($file, 'r');
    
        // Check if the file was successfully opened
        if ($handle !== false) {
            // Loop through each line of the file and parse it as a CSV row
            while (($data = fgetcsv($handle)) !== false) {
                // Check if the record already exists
                $existingRecord = BdoReceipt::where('description', $data[2])->exists();
    
                if (!$existingRecord) {
                    // Create a new instance of the BdoReceipt model and save the data
                    BdoReceipt::create([
                        'posting_datetime' => $data[0],
                        'branch' => $data[1],
                        'description' => $data[2],
                        'debit' => $data[3],
                        'credit' => $data[4],
                        'running_balance' => $data[5],
                        'check_number' => $data[6],
                    ]);
                }
            }
    
            // Close the file when you're done
            fclose($handle);
    
            // Redirect back to the form with a success message
            return redirect()->back()->with('success', 'File uploaded successfully.');
        } else {
            // Redirect back to the form with an error message
            return redirect()->back()->with('error', 'An error occurred while opening the file.');
        }
    }

}

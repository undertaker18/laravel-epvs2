<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        // Get the uploaded file from the request
        $file = $request->file('csv_file');

        // Open the file for reading
        $handle = fopen($file, 'r');

        // Loop through each line of the file and parse it as a CSV row
        while (($data = fgetcsv($handle)) !== false) {
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

        // Close the file when you're done
        fclose($handle);

        // Redirect back to the form with a success message
        return redirect()->back()->with('success', 'File uploaded successfully.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\data as ModelsData;
use Illuminate\Http\Request;

class data extends Controller
{
    public function data(Request $request)
    {

        $data = ModelsData::create([
            'date' => $request->input('date'),
            'data' => $request->input('data'),
        ]);

        if ($data) {
            // Redirect with success message
            return redirect()->back()->with('success', 'Patient data has been successfully stored.');
        } else {
            // Redirect with error message
            return redirect()->back()->with('error', 'Failed to store patient data.');
        }
    }
}

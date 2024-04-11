<?php

// app/Http/Controllers/DonorController.php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;

class DonorController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'country' => 'required',
            'contact' => 'required',
            'dob' => 'required|date',
            'name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'blood_group' => 'required',
            'address' => 'required',
            'state' => 'required',
            'district' => 'required',
            'tehsil' => 'required',
        ]);

        Donor::create($validatedData);
        return redirect()->back()->with('success', 'Donor registered successfully.');
    }

    public function profile_preview(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'country' => 'required',
            'contact' => 'required',
            'dob' => 'required|date',
            'name' => 'required',
            'gender' => 'required',
            'age' => 'required',
            'blood_group' => 'required',
            'address' => 'required',
            'state' => 'required',
            'district' => 'required',
            'tehsil' => 'required',
        ]);


        // Pass the validated data directly to the view
        return view('profile-preview', compact('validatedData'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Donor;

class DonorController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->session()->get('validatedData');

        if (!$validatedData) {
            return redirect()->route('donors-registration')->with('error', 'Validation failed. Please fill the form again.');
        }

        // Store the validated data in the database
        Donor::create($validatedData);

        // Clear the validated data from the session
        $request->session()->forget('validatedData');

        return redirect()->route('donors-registration')->with('success', 'Donor registered successfully.');
    }

    public function profile_preview(Request $request)
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

        // Store the validated data in the session
        $request->session()->put('validatedData', $validatedData);

        return view('profile-preview', compact('validatedData'));
    }
}

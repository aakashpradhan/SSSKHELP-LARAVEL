<?php

// LoginController.php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Donor;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'country' => 'required',
            'contact' => 'required',
            'dob' => 'required',
        ]);

        // Retrieve the donor based on the provided credentials
        $user = Donor::where([
            'country' => $request->country,
            'contact' => $request->contact,
            'dob' => $request->dob,
        ])->first();

        // Check if user exists and credentials are valid
        if ($user) {
            // Authentication successful
            // You can log in the user here, for example, using Laravel's Auth facade
            Auth::login($user);

            // Redirect the user to their dashboard or any other desired page
            return redirect()->route('my-account')->with('success', 'Login successful.');
        } else {
            // Authentication failed
            // Redirect back to the login page with an error message
            return redirect()->route('donor-login')->with('error', 'Invalid credentials. Please try again.');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}

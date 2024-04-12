<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = json_decode($request->validatedData, true);


        $user = User::create($validatedData);


        event(new Registered($user));

        Auth::login($user);

        return redirect(route('view-profile', absolute: false));
    }


    public function profile_preview(Request $request): \Illuminate\View\View
    {
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'country' => ['nullable', 'string', 'max:255'],
            'contact' => ['nullable', 'string', 'max:255'],
            'dob' => ['nullable', 'date'],
            'gender' => ['nullable', 'string', 'max:255'],
            'age' => ['nullable', 'integer'],
            'blood_group' => ['nullable', 'string', 'max:255'],
            'address' => ['nullable', 'string', 'max:255'],
            'state' => ['nullable', 'string', 'max:255'],
            'district' => ['nullable', 'string', 'max:255'],
            'tehsil' => ['nullable', 'string', 'max:255'],
        ]);


        return view('profile-preview', compact('validatedData'));
    }
}

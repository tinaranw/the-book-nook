<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    //Show register form
    public function register(Request $request)
    {
        return view('register');
    }

    //Save registration data/ add user to the database
    public function createuser(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6',
            'remember_token' => Str::random(60)
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        $user = User::create($formFields);

        //If user registers
        // Login
        auth()->login($user);
        return redirect('/');
    }

    public function index()
    {
        return view('admin.dashboard.user.index', [
            'users' => User::all()
        ]);
    }

    public function admincreateuser(Request $request)
    {
        $formFields = $request->validate([
            'name' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'phone_number' => 'nullable',
            'password' => 'required|confirmed|min:6',
            'address' => 'nullable',
            'city' => 'nullable',
            'birthdate' => 'nullable',
            'remember_token' => Str::random(60)
        ]);

        // Hash Password
        $formFields['password'] = bcrypt($formFields['password']);

        // Create User
        User::create([
            'name' => $formFields['name'],
            'email' => $formFields['email'],
            'phone_number' => $formFields['phone_number'],
            'password' => $formFields['password'],
            'address' => $formFields['address'],
            'city' => $formFields['city'],
            'birthdate' => $formFields['birthdate'],
        ]);

         //If admin
         return redirect('/dashboard/users');
    }

    public function edit(user $user)
    {
        return view('admin.dashboard.user.edit', ['user' => $user]);
    }

    public function update(Request $request, user $user)
    {
        //Data Validation
        $formFields = $request->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'city' => 'required',
            'birthdate' => 'required',
        ]);

        $user->update($formFields);

        return redirect('/dashboard/users');
    }

    public function destroy(user $user)
    {
        $user->books()->delete();
        $user->delete();
        return redirect('/dashboard/users');
    }
}

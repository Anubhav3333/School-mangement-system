<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TestController extends Controller
{

    public function Register()
    {
        return view('Register');
    }







    public function ragisterStore(Request $request)
    {
        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role'     => 'nullable|string',
            'status'   => 'nullable|string',
        ]);

        User::create([
            'name'     => $validated['name'],
            'email'    => $validated['email'],
            'password' => Hash::make($validated['password']),
            'role'     => $validated['role'] ?? 'student',
            'status'   => $validated['status'] ?? 'active',
        ]);

        return redirect()
            ->route('login')
            ->with('success', 'Registration successful!');
    }

    public function login()
    {
        return view('login');
    }


    public function loginStore(Request $request)
    {
        $validated = $request->validate([
            'email'    => 'required|email',
            'password' => 'required',
        ]);

        $user = User::where('email', $validated['email'])->first();

        if (!$user || !Hash::check($validated['password'], $user->password)) {


            return back()
                ->withErrors([
                    'email' => 'Invalid email or password.'
                ])
                ->withInput();
        }


        if ($user->role == 'ADMIN') {
            return redirect('/admin');
        } else if ($user->role == 'TEACHER') {
            return redirect('/teacher');
        } else  return redirect('/student');
    }

    
public function Teacher()
    {
        return view('Teacher');
    }

    public function Student()
    {
        return view('Student');
    }
}



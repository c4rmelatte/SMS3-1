<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // find user
    public function loginUser(Request $request)
    {

        $email = $request->input('email');
        $password = $request->input('password');

        // Validate the request
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $user = DB::table('users')->where('email', $email)->where('password', $password)->first();

        if (!$user) {
            // placeholder return
            return redirect()->back()->withErrors(['email' => 'Invalid credentials.']);
        }

        // Save user ID in the session
        $request->session()->put('user', $user);
        $request->session()->put('userID', $user->id);

        $userRole = $user->position;

        if ($userRole == 'students') {
            return redirect()->route('student');

        } elseif ($userRole == 'program_head') {
            return redirect()->route('programhead');

        } elseif ($userRole == 'professors') {
            // return view of professor

        } elseif ($userRole == 'hr') {
            // return view of hr

        } elseif ($userRole == 'admin') {
            // return view of admin

            return redirect()->route('admin');
        } elseif ($userRole == 'treasury') {
            return redirect()->route('treasuryView');

        } elseif ($userRole == 'registrar') {
            // return view of registrar

        }
    }

    // logout user
    public function logout(Request $request)
    {
        // Clear the session
        $request->session()->flush();

        // Redirect to login page
        return redirect()->route('login');
    }
}

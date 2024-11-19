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

        $user = DB::table('users')->where('email', $email)->where('password', $password)->first();

        if (!$user) {
            // placeholder return
            return 'user not found (User not found or incorrect credentials)';
        }

        $userID = $user->id;
        $userRole = $user->position;

        if ($userRole == 'students') {
            // return view of student ['user' => $userID]
        } elseif ($userRole == 'program_heads') {
            // return view of program head ['user' => $userID]
            return redirect()->route('programhead');
        } elseif ($userRole == 'professors') {
            // return view of professor ['user' => $userID]
        } elseif ($userRole == 'hr') {
            // return view of hr ['user' => $userID]
        } elseif ($userRole == 'admin') {
            // return view of admin ['user' => $userID]
            return redirect()->route('admin');
        } elseif ($userRole == 'treasury') {
            // return view of treasury ['user' => $userID]
        } elseif ($userRole == 'registrar') {
            // return view of registrar ['user' => $userID]
        }
    }
}

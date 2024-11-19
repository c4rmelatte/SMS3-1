<?php

namespace App\Http\Controllers;
use App\Http\Models\Deparment;
use App\Http\Models\Employee;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class HRController extends Controller
{
    // update
    // delete

    // create employee *******************************************************************************************
    public function createEmployee(Request $request)
    {

        // function generateRandomNumber() {
        //     $part1 = str_pad(mt_rand(0, 99), 2, '0', STR_PAD_LEFT); // Generate 2 digits
        //     $part2 = str_pad(mt_rand(0, 99999), 5, '0', STR_PAD_LEFT); // Generate 5 digits
        //     $part3 = str_pad(mt_rand(0, 999), 3, '0', STR_PAD_LEFT); // Generate 3 digits

        //     return "{$part1}-{$part2}-{$part3}";
        // }

        // $generatedID = generateRandomNumber();

        $firstName = $request->input('fname');
        $middleName = $request->input('middleName');
        $surname = $request->input('surName');

        $fullName = "{$surname}, {$firstName} {$middleName}";

        $category = $request->input('employeeCategory');
        $position = $request->input('employeePosition');
        $age = $request->input('age');
        $address = $request->input('address');
        $username = $request->input('username');
        $email = $request->input('email');
        $password = $request->input('password');
        $department = 'to be coded';
        $accountNumber = $request->input('accountNumber');

        $timeIn = $request->input('timeIn');
        $timeOut = $request->input('timeOut');
        $rate = $request->input('rate');

        // check for existing email
        $existingEmail = DB::table('users')->where('email', $email)->first();

        if ($existingEmail) {
            // placeholder
            return "email already existing";
        }

        DB::table('users')->insert([

            'name' => $fullName,
            'age' => $age,
            'address' => $address,
            'username' => $username,
            'email' => $email,
            'password' => $password,
            'department' => $department,
            'category' => $category,
            'position' => $position,
            'account_number' => $accountNumber

        ]);

        // find id of user through given email value
        $employeeID = DB::table('users')->where('email', $email)->first();

        // insert into position and category tables
        // category
        DB::table($category)->insert([

            'user_id' => $employeeID->id,


        ]);

        // position
        DB::table($position)->insert([

            'user_id' => $employeeID->id,
            'time_in_schedule' => $timeIn,
            'time_out_schedule' => $timeOut,
            'rate' => $rate

        ]);

        return redirect()->back();
    }
    // END CREATE EMPLOYEE FUNCTION **************************************************************************

}
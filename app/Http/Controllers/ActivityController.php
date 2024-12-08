<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\User;
use App\Models\AssignSubject;
use Illuminate\Support\Facades\Redirect;

class ActivityController extends Controller
{
    public function index()
    {
        // Get user session data
        $userID = session('userID');
        $user = session('user');
        $userDepartment = session('userDepartment');
        $userPosition = session('userPosition');

        // Ensure the user is logged in and has assigned subjects
        if ($userPosition !== 'program_heads' && !$userID) {
            return redirect()->back()->with('alert', 'Unauthorized access.');
        }

        // Fetch assigned subjects for the logged-in user
        $assignedSubjects = AssignSubject::where('prof_id', $userID)
                                         ->with('subject')
                                         ->get();

        // Return view with the full subject objects (not just names)
        return view('professor.pages.activities', [
            'subjects' => $assignedSubjects, // Pass the whole assignedSubject model
            'user' => $user,
            'userDepartment' => $userDepartment,
            'userPosition' => $userPosition,
        ]);
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\User;
use App\Models\AssignSubject;
// use Illuminate\Support\Facades\DB;

class AssignSubjectController extends Controller
{

    public function index(AssignSubject $assignSubject, Subject $subject)
    {
        // Get the currently logged-in user
        // $programHead = session('user');

        $userID = session('userID');
        // dd($userID);
        $user = session('user');
        $userDepartment = session('userDepartment');
        $userPosition = session('userPosition');
        
        // subject
        
        $subjects = Subject::latest()->get();
        $professors = User::where('position', 'professors')->latest()->get();

        $subs = $assignSubject->get();

        // Ensure the user is a program head
        if ($userPosition !== 'program_heads') {
            return redirect()->back()->with('alert', 'Unauthorized access.');
        } else {

            return view('programhead.pages.assignsubject', [
                'professorID' => $userID,
                'professors' => $professors,
                'subjects' => $subjects,
            ]);
        }
    }


    // assign prof to a specific subject only thos who have matching department of the programhead
    public function assign_subject(Request $request)
    {
        
        $userPosition = session('userPosition');
        if ($userPosition !== 'program_heads') {
            return redirect()->back()->with('alert', 'Unauthorized access.');
        }

        $fields = $request->validate([
            'subject_id' => 'required',
            'prof_id' => 'required',
            'assigned_by' => 'required',
        ]);
        
        AssignSubject::create($fields);
        return back();
    }

}


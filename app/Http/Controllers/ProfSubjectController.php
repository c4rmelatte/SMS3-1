<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AssignSubject; 
use App\Models\Subject; 
use App\Models\Activity; 

class ProfSubjectController extends Controller
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
        return view('professor.pages.subjects', [
            'profID' => $userID,
            'subjects' => $assignedSubjects, // Pass the whole assignedSubject model
            'user' => $user,
            'userDepartment' => $userDepartment,
            'userPosition' => $userPosition,
        ]);
    }


    public function getIdSubject($id)
    {
        // Fetch user session data
        $userID = session('userID');
        $user = session('user');
        $userDepartment = session('userDepartment');
        $userPosition = session('userPosition');
    
        // Unauthorized access check
        if ($userPosition !== 'program_heads' && !$userID) {
            return redirect()->back()->with('alert', 'Unauthorized access.');
        }
    
        // Find the specific assigned subject
        $subject = AssignSubject::with('subject')->find($id);
    
        // If not found, redirect back with error
        if (!$subject) {
            return redirect()->back()->with('error', 'Subject not found.');
        }
    
        // Fetch all subjects assigned to the professor
        $assignedSubjects = AssignSubject::where('prof_id', $userID)->with('subject')->get();

        $activity = Activity::where('subject_id', $subject->id)->latest()->get();
    
        // Return the activities view
        return view('professor.pages.activities', [
            'activity' => $activity,
            'profID' => $userID,
            'subject' => $subject,
            'subjects' => $assignedSubjects,
            'user' => $user,
            'userDepartment' => $userDepartment,
            'userPosition' => $userPosition,
        ]);
    }


    public function getIdActivity($id)
    {
        // Fetch user session data
        $userID = session('userID');
        $user = session('user');
        $userDepartment = session('userDepartment');
        $userPosition = session('userPosition');
    
        // Unauthorized access check
        if ($userPosition !== 'program_heads' && !$userID) {
            return redirect()->back()->with('alert', 'Unauthorized access.');
        }
    
        // Find the specific activity
        $activity = Activity::find($id);
    
        // If not found, redirect back with error
        if (!$activity) {
            return redirect()->back()->with('error', 'Activity not found.');
        }
    
        // Return the scores view
        return view('professor.pages.scores', [
            'activity' => $activity,
            'user' => $user,
            'userDepartment' => $userDepartment,
            'userPosition' => $userPosition,
        ]);
    }
    
    

    public function insertData(Request $request, $id)
    {
        $activity = new Activity();
        $activity->name = $request->get('name');
        $activity->label_activity = $request->get('label_activity');
        $activity->label_student = $request->get('label_student');
        $activity->label_term = $request->get('label_term');
        $activity->max_score = $request->get('max_score');
        $activity->user_id = $request->get('user_id');
        $activity->subject_id = $id;
    
        $activity->save();
    
        return redirect()->back()->with('success', 'Activity created successfully!');
    }
    
    

    

}

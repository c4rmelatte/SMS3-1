<?php

namespace App\Http\Controllers;
use App\Models\Building;
use App\Models\Department;
use App\Models\announcements;
use App\Models\Curriculum;
use App\Models\Courses;
use App\Models\Subject;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showStats() {
        $building = Building::count();
        $department = Department::count();
        $announcement = announcements::count();
        $curriculum = Curriculum::count();
        $courses = Courses::count();
        $subject = Subject::count();
        

        return view('admin.admin.admin')->with([
            'building' => $building,
            'department' => $department,
            'announcement' => $announcement,
            'curriculum' => $curriculum,
            'courses' => $courses,
            'subject' => $subject,
        ]); 
    }
}

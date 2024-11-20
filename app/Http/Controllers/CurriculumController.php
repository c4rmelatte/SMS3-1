<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Courses;
use App\Models\Subject;
use App\Models\Curriculum;
use Illuminate\Support\Facades\Redirect;

class CurriculumController extends Controller
{
    public function index()
    {
        $curriculums = Curriculum::orderByDesc('id')->get();
        $courses = Courses::orderBy('id', 'DESC')->get();
        return view('admin.pages.curriculum')->with(['courses' => $courses, 'curriculums' => $curriculums]);
    }

    public function store(Request $request)
    {
        $curriculums = new Curriculum();
        $curriculums->code = $request->get('code');
        $curriculums->name = $request->get('name');
        $curriculums->course_id = $request->get('course_id');
        $curriculums->save();

        return Redirect::to('/admin/curriculum');
    }

    public function destroy(Curriculum $curriculum)
    {
        $curriculum->delete();
        return Redirect::to('/admin/curriculum');
    }

    public function showCourses(Courses $courses, Curriculum $curriculum)
    {
        $curriculums = Curriculum::findOrFail($curriculum->id);
        $courses = Courses::where('id', $curriculums->course_id)->get('name');
        $subjects = Subject::where('curriculum_id', $curriculum->id)->latest()->get();
        return view('admin.curriculum.components.viewcurriculum')->with(
            [ 'courses' => $courses, 
              'curriculums' => $curriculums,
              'subjects' => $subjects,
        ]);
    }

    public function update(Request $request, $id)
    {
        // Find the curriculums by its ID
        $curriculum = Curriculum::findOrFail($id);

        // Update curriculums with the new data
        $curriculum->update([
            'code' => $request->get('code'),
            'name' => $request->get('name'),
            'course_id' => $request->get('course_id'),
        ]);

        // Redirect to the departments list or other relevant page
        return Redirect::to('/admin/curriculum');
    }

}

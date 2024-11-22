<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\TreasuryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BuildingController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\DTRController;
use App\Http\Controllers\HRController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\PayrollController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Middleware\TreasuryMiddleware;
use App\Http\Controllers\AssignSubjectController;
use App\Models\Building;
use App\Models\Room;
use App\Models\Department;
use App\Models\Purpose;
use App\Models\TotalFunds;
use App\Models\Payment;


// STARTING PAGE HERE ¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤¤

Route::get('/', function () {
   return redirect('/login');
});

// ADMIN *************************************************************************************

Route::get('/admin', [AdminController::class, 'showStats'])->name('admin');

Route::get('/admin/announcement', function () {
   return view('admin.pages.announcement');
});


// ******** buildings
Route::get('/admin/building', function () {
   $buildings = Building::latest()->get();
   return view('admin.pages.building')->with('buildings', $buildings);
});

Route::get('/admin/building/{building}', [BuildingController::class, 'showRooms'])->name('show_rooms');


// *****Courses
Route::get('/admin/courses', [CourseController::class, 'index']);


// *** CURRICULUM
Route::get('/admin/curriculum', [CurriculumController::class, 'index']);
Route::get('/admin/curriculum/{curriculum}', [CurriculumController::class, 'showCourses'])->name('show_courses');


// ******* departments
Route::get('/admin/departments', function () {
   $buildings = Building::orderBy('id', 'DESC')->get();
   $departments = Department::orderBy('id', 'DESC')->get();
   return view('admin.pages.department')->with(['buildings' => $buildings, 'departments' => $departments]);
});

Route::get('/admin/departments/{department}', [DepartmentController::class, 'showCourses'])->name('show_course');

//************ Subjects

Route::get('/admin/subject', [SubjectController::class, 'index']);

// admin dtr
Route::get('/admin/dtr/{userID}/showDTR', [DTRController::class, 'getDTR'])->name('admin.show.dtr');
Route::get('/admin/dtr/getDateDTR', [DTRController::class, 'getDateDTR'])->name('admin.show.dateDTR');

// STUDENT *************************************************************************************

Route::get('/student', function () {
   return view('student.studentindex');
})->name('student');

Route::get('/student/announcements', function () {
   return view('student.pages.announcement');
});

// ******************** AAActiviteis ******

Route::get('/student/subjects', function () {
   return view('student.pages.subjects');
});

Route::get('/student/activities', function () {
   return view('student.pages.activities');
});



//****************************** ENROLLMENT****************/

Route::get('/student/enrollmentform', [EnrollmentController::class, 'indexStudent']);

Route::get('/student/attendance', function () {
   return view('student.pages.attendance');
});



// TREASURY *************************************************************************************

Route::get('/treasury', function () {
   $purpose = Purpose::all();
   $payments = Payment::all();
   $funds = TotalFunds::firstOrCreate(
      ['funds' => 0]
   );

return view('treasury.pages.treasury')->with('products', $purpose)->with('funds', $funds)->with('payments',$payments);

   // nawawala yung products dito ata kaya di nagloload

})->name('treasury');

Route::get('/treasury/announcement', function () {
   return view('treasury.pages.announcement');
});

Route::get('/treasury/purpose', function () {
   return view('treasury.pages.createpurpose');

});

// Route::get('/treasury', [TreasuryController::class, 'dashboard']);
Route::post('/treasury/store/purpose', [TreasuryController::class, 'storePurpose'])->name('store_purpose');
Route::get('/treasury/create/purpose', [TreasuryController::class, 'createPurpose'])->name('create_purpose');
Route::get('/treasury/edit/purpose/{id}', [TreasuryController::class, 'editPurpose'])->name('edit_purpose');
Route::put('/treasury/update/purpose/{id}', [TreasuryController::class, 'updatePurpose'])->name('update_purpose');
Route::delete('/treasury/delete/purpose/{id}', [TreasuryController::class, 'deletePurpose'])->name('delete_purpose');

Route::get('/treasury/payment', function () {
   return view('treasury.treasuryindex');
});

// treasury dtr ********** ORTEGA *******************
Route::get('/treasury/dtr/{userID}/showDTR', [DTRController::class, 'getDTR'])->name('tresury.show.dtr');
Route::get('/treasury/dtr/getDateDTR', [DTRController::class, 'getDateDTR'])->name('tresury.show.dateDTR');

// treasury payroll dtr ********** ORTEGA *******************
Route::get('/treasury/managePayroll', [PayrollController::class, 'managePayroll'])->name('manage.payslip');
// creating a payslip
Route::get('/treasury/createPayslip', [PayrollController::class, 'createPayslip'])->name('create.payslip');
Route::post('/treasury/insertPayslip', [PayrollController::class, 'insertPayslip'])->name('insert.payslip');
// find employee
Route::get('/treasury/findEmployee', [PayrollController::class, 'findEmployee'])->name('find.employee');
// updating a payslip
Route::get('/treasury/updatePayslip', [PayrollController::class, 'updatePayslip'])->name('update.payslip');
Route::put('/treasury/insertUpdatedPayslip', [PayrollController::class, 'insertUpdatedPayslip'])->name('insert.updated.payslip');
// show payslip
Route::get('/treasury/showPayslip', [PayrollController::class, 'showPayslip'])->name('show.payslip');
// back to manange_payslip
Route::get('/treasury/backPayslip', [PayrollController::class, 'backPayslip'])->name('back.payslip');
// delete payslip
Route::delete('/treasury/deletePayslip', [PayrollController::class, 'deletePayslip'])->name('delete.payslip');



// PROGRAM HEAD *************************************************************************************

Route::get('/programhead', function () {
   return view('programhead.programheadindex');
})->name('programhead');

Route::get('/programhead/announcement', function () {
   return view('programhead.pages.announcement');
});



// ********* roooms 
Route::get('/programhead/room', [RoomController::class, 'index']);

// ***************8888

Route::get('/programhead/schedule', function () {
   return view('programhead.pages.schedule');
});

// show students
Route::get('/programhead/students', [StudentController::class, 'showStudents'])->name('programhead_show_students');


// add student
Route::post('/programhead/students/create', [StudentController::class, 'createStudent'])->name('programhead_create_student');

// update student
Route::put('/programhead/students/update/{id}', [StudentController::class, 'updateStudent'])->name('programhead_update_student');

// delete student
Route::delete('/programhead/students/delete/{id}', [StudentController::class, 'deleteStudent'])->name('programhead_delete_student');

// programhead dtr
Route::get('/programhead/dtr/{userID}/showDTR', [DTRController::class, 'getDTR'])->name('programhead.show.dtr');
Route::get('/programhead/dtr/getDateDTR', [DTRController::class, 'getDateDTR'])->name('programhead.show.dateDTR');

// assign subj
Route::get('/programhead/assignsubject', [AssignSubjectController::class, 'index']);
Route::post('/programhead/assignsubject', [AssignSubjectController::class, 'assign_subject'])->name('assign_subject');

// REGISTRAR *************************************************************************************

// ...

// PROFESSOR *************************************************************************************

Route::get('/professor', function () {
   return view('professor.professorindex');
})->name('professor');

Route::get('/professor/announcement', function () {
   return view('professor.pages.announcement');
});


Route::get('/professor/attendance', function () {
   return view('professor.pages.attendance');
});

//********************* AAAActivities */

Route::get('/professor/subjects', function () {
   return view('professor.pages.subjects');
});

Route::get('/professor/activities', function () {
   return view('professor.pages.subjects');
});

//************************ */

Route::get('/professor/schedule', function () {
   return view('professor.pages.schedule');
});

// professor dtr
Route::get('/professor/dtr/{userID}/showDTR', [DTRController::class, 'getDTR'])->name('professor.show.dtr');
Route::get('/professor/dtr/getDateDTR', [DTRController::class, 'getDateDTR'])->name('professor.show.dateDTR');


// ***GENERAL*** (DTR/LOGIN) ****************************************************************************************************
// ******************************************************************************************************************************

// DTR ********************************************************************************************
// show dtr input page
Route::get('/dtr/input', function () {
   return view('dtr.dtr_input');
});
// (dtr input page) check role and insert data
Route::get('/dtr/input/check', [DTRController::class, 'checkRole'])->name('check.id');
Route::post('/dtr/input/logTime', [DTRController::class, 'logTime'])->name('input.time');
// show dtr table of employee
Route::get('/dtr/input/{userID}/showDTR', [DTRController::class, 'getDTR'])->name('show.dtr');
Route::get('/dtr/input/getDateDTR', [DTRController::class, 'getDateDTR'])->name('show.dateDTR');



// LOGIN ********************************************************************************************


Route::get('/login', function () {
   return view('login.loginindex');
})->name('login');

// login function with authentication
Route::get('/login/find', [LoginController::class, 'loginUser'])->name('login_user');
Route::get('/logout', [LoginController::class, 'logoutUser'])->name('logout_user');




// HR ********************************************************************************************

Route::get('/hr', function () {
   return view('hr.hrindex');
})->name('hr');

Route::get('/hr/announcement', function () {
   return view('hr.pages.announcement');
});

// HR employee *************************************

// edit employee
Route::put('/hr/employee/update/{id}', [HRController::class, 'updateEmployee'])->name('hr_update_employee');

// show employees
Route::get('/hr/employee', [HRController::class, 'showEmployees'])->name('hr_show_employee');

// create employee
Route::post('/hr/employee/create', [HRController::class, 'createEmployee'])->name('hr_create_employee');

// delete employee
Route::delete('/hr/employee/delete/{id}', [HRController::class, 'deleteEmployee'])->name('hr_delete_employee');

// hr dtr
Route::get('/hr/dtr/{userID}/showDTR', [DTRController::class, 'getDTR'])->name('hr.show.dtr');
Route::get('/hr/dtr/getDateDTR', [DTRController::class, 'getDateDTR'])->name('hr.show.dateDTR');

// ENROLLMENT ********************************************************************************************


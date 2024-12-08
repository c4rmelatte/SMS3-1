<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\TreasuryController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\AnnouncementsController;
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
use App\Http\Controllers\ProfSubjectController;
use App\Http\Controllers\EnrollmentController;
use App\Http\Middleware\TreasuryMiddleware;
use App\Http\Controllers\AssignSubjectController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\AttendanceController;
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
Route::prefix('admin')
   ->group(function () {


      //admin
      Route::get('/', [AdminController::class, 'showStats'])->name('admin');


      //announcement*******************************************************
      Route::controller(AnnouncementsController::class)
         ->group(function () {

         //show annoucements
         Route::get('/announcement', 'index');

         
         // crud
         // create
         Route::post('/announcement/store', 'store')
            ->name('announcement.store');


         // update
         Route::put('/announcement/{id}/update', 'update')
            ->name('announcement.update');


         //delete
         Route::delete('/announcement/{id}/delete', 'destroy')
            ->name('announcement.delete');

      });


      //=============== building
      Route::get('/building', function () {
         $buildings = Building::latest()->get();
         return view('admin.pages.building')->with('buildings', $buildings);
      });


      Route::get('/building/{building}', [BuildingController::class, 'showRooms'])->name('show_rooms');


      // ****************** Courses
      Route::get('/courses', [CourseController::class, 'index']);


      // *** CURRICULUM
      Route::controller(CurriculumController::class)
         ->group(function () {
         Route::get('/curriculum', 'index');
         Route::get('/curriculum/{curriculum}', 'showCourses')->name('show_courses');
      });


      // ******* departments
      Route::get('/departments', function () {
         $buildings = Building::latest()->get();
         $departments = Department::latest()->get();
         return view('admin.pages.department')
            ->with([
               'buildings' => $buildings,
               'departments' => $departments
            ]);
      });

      Route::get(
         '/departments/{department}',
         [DepartmentController::class, 'showCourses']
      )
         ->name('show_course');

      //************ Subjects
   
      Route::get('/subject', [SubjectController::class, 'index']);

      // admin dtr
      Route::controller(DTRController::class)
         ->group(function () {

         Route::get('/dtr/{userID}/showDTR', 'getDTR')
            ->name('admin.show.dtr');


         Route::get('/dtr/getDateDTR', 'getDateDTR')
            ->name('admin.show.dateDTR');

      });

      //=============== section
      Route::get('/section', [SectionController::class, 'index']);

   });

      Route::get('/schedule', [SectionController::class, 'index']);




// STUDENT *************************************************************************************
Route::prefix('student')->group(function () {


   Route::get('/', function () {
      return view('student.studentindex');
   })->name('student');

   Route::get('/announcements', function () {
      return view('student.pages.announcement');
   });

   // ******************** AAActiviteis ******

   Route::get('/subjects', function () {
      return view('student.pages.subjects');
   });

   Route::get('/activities', function () {
      return view('student.pages.activities');
   });


   //****************************** ENROLLMENT****************/
   Route::get('/enrollmentform', [EnrollmentController::class, 'indexStudent']);

   Route::get('/attendance', function () {
      return view('student.pages.attendance');
   });
});






// TREASURY *************************************************************************************
Route::prefix('treasury')->group(function () {

   Route::get('/', function () {
      $purpose = Purpose::all();
      $payments = Payment::all();
      $funds = TotalFunds::firstOrCreate(
         ['funds' => 0]
      );

      return view('treasury.pages.treasury')->with('products', $purpose)->with('funds', $funds)->with('payments', $payments);

      // nawawala yung products dito ata kaya di nagloload
   })->name('treasury');


   Route::get('/announcement', function () {
      return view('treasury.pages.announcement');
   });


   Route::get('/purpose', function () {
      return view('treasury.pages.createpurpose');

   });


   // Route::get('/treasury', [TreasuryController::class, 'dashboard']);
   // TreasuryController *************
   Route::controller(TreasuryController::class)
      ->group(function () {
         Route::post('/store/purpose', 'storePurpose')
            ->name('store_purpose');


         Route::get('/create/purpose', 'createPurpose')
            ->name('create_purpose');


         Route::get('/edit/purpose/{id}', 'editPurpose')
            ->name('edit_purpose');


         Route::put('/update/purpose/{id}', 'updatePurpose')
            ->name('update_purpose');


         Route::delete('/delete/purpose/{id}', 'deletePurpose')
            ->name('delete_purpose');
      });


   //*********** payment
   Route::get('/payment', function () {
      return view('treasury.treasuryindex');
   });


   // treasury dtr ********** ORTEGA *******************
   // *********** DTRController
   Route::controller(DTRController::class)
      ->group(function () {

         Route::get('/dtr/{userID}/showDTR', 'getDTR')
            ->name('tresury.show.dtr');

         Route::get('/dtr/getDateDTR', 'getDateDTR')
            ->name('tresury.show.dateDTR');
      });


   // treasury payroll dtr ********** ORTEGA *******************
   // PayrollController *****************
   Route::controller(PayrollController::class)
      ->group(function () {
         Route::get('/managePayroll', 'managePayroll')
            ->name('manage.payslip');


         // creating a payslip
         Route::get('/createPayslip', 'createPayslip')
            ->name('create.payslip');


         Route::post('/insertPayslip', 'insertPayslip')
            ->name('insert.payslip');


         // find employee
         Route::get('/findEmployee', 'findEmployee')
            ->name('find.employee');



         // updating a payslip
         Route::get('/updatePayslip', 'updatePayslip')
            ->name('update.payslip');


         Route::put('/insertUpdatedPayslip', 'insertUpdatedPayslip')
            ->name('insert.updated.payslip');


         // show payslip
         Route::get('/showPayslip', 'showPayslip')
            ->name('show.payslip');


         // back to manange_payslip
         Route::get('/backPayslip', 'backPayslip')
            ->name('back.payslip');


         // delete payslip
         Route::delete('/deletePayslip', 'deletePayslip')
            ->name('delete.payslip');
      });
});




// PROGRAM HEAD *************************************************************************************

Route::prefix('programhead')->group(function () {


   Route::get('/', function () {
      return view('programhead.programheadindex');
   })->name('programhead');


   // announcementss ****************
   Route::get(
      '/announcement',
      [AnnouncementsController::class, 'showAnnouncementToProgramHead']
   );

   // ********* roooms 
   Route::get('/room', [RoomController::class, 'index']);



   // ***************8888


   Route::get('/schedule/blk', [SectionController::class, 'indexProg']);


   Route::get('/schedule/blk/sched', function () {
      return view('programhead.pages.blkyr');
   });

   

   



   // show students
   // ************ StudentController
   Route::controller(StudentController::class)
      ->group(function () {


         Route::get('/programhead/students', 'showStudents')
            ->name('programhead_show_students');


         // add student
         Route::post('/students/create', 'createStudent')
            ->name('programhead_create_student');


         // update student
         Route::put('/students/update/{id}', 'updateStudent')
            ->name('programhead_update_student');


         // delete student
         Route::delete('/students/delete/{id}', 'deleteStudent')
            ->name('programhead_delete_student');

      });


   // programhead dtr
   Route::controller(DTRController::class)
      ->group(function () {

         Route::get('/dtr/{userID}/showDTR', 'getDTR')
            ->name('programhead.show.dtr');


         Route::get('/dtr/getDateDTR', 'getDateDTR')
            ->name('programhead.show.dateDTR');

      });



   // assign subj
   // ***************** AssignSubjectController
   Route::controller(AssignSubjectController::class)
      ->group(function () {

         Route::get('/assignsubject', 'index');


         Route::post('/assignsubject', 'assign_subject')
            ->name('assign_subject');

         //Route::delete('/programhead/assignsubject', [AssignSubjectController::class, 'destroy'])->name('delete_assign_subject');
   
      });

});



// event/program attendance ************* ORTEGA ***************
// show program head events
// ************* AttendanceController
Route::controller(AttendanceController::class)
   ->prefix('programHead')
   ->group(function () {

      Route::get('/{userID}/showEvents', 'showEvents')
         ->name('show.events');


      // show create event page
      Route::get('/createEvents', 'createEvents')
         ->name('create.events');


      // insert created event
      Route::post('/insertEvents', 'insertEvents')
         ->name('insert.events');


      // show event attendance
      Route::get('/showEventAttendance', 'showEventAttendance')
         ->name('show.event.events');


      // save/update event attendance
      Route::put('/updateEventAttendance', 'updateEventAttendance')
         ->name('update.event');


      // show edit event info page
      Route::get('/editEventAttendance', 'editEventAttendance')
         ->name('edit.event');


      // insert edit event info
      Route::put('/insertEditEventAttendance', 'insertEditEventAttendance')
         ->name('insert.edit.event');


      // delete event
      Route::delete('/deleteEventAttendance', 'deleteEventAttendance')
         ->name('delete.event');

   });


// REGISTRAR *************************************************************************************

// ...

// PROFESSOR *************************************************************************************
Route::prefix('professor')->group(function () {


   Route::get('/', function () {
      return view('professor.professorindex');
   })->name('professor');


   Route::get('/announcement', function () {
      return view('professor.pages.announcement');
   });


   Route::get('/attendance', function () {
      return view('professor.pages.attendance');
   });

   //********************* AAAActivities */




// Display professor subjects
Route::get('/subjects', [ProfSubjectController::class, 'index'])->name('professor.pages.subjects');

// Display activities for a specific subject
Route::get('/subjects/{id}/activities', [ProfSubjectController::class, 'getIdSubject'])->name('activities');

Route::get('/activity/{id}', [ProfSubjectController::class, 'getIdActivity'])->name('scores');

// Handle activity creation
Route::post('/subjects/{id}/activities', [ProfSubjectController::class, 'insertData'])->name('insertData');




   //************************ */


   Route::get('/schedule', function () {
      return view('professor.pages.schedule');
   });

   // CLASS ATTENDANCE *************************************************
   // class attendance
   // prof view
   // show subjects
   Route::get('/professor/{userID}/showSubjects', [AttendanceController::class, 'showSubjects'])->name('show.subjects');
   // show subject attendance
   Route::get('/professor/showAttendance', [AttendanceController::class, 'showProfAttendance'])->name('show.prof.attendance');
   // add date subject attendance
   Route::post('/professor/addAttendance', [AttendanceController::class, 'addProfAttendance'])->name('add.prof.attendance');
   // find attendance
   Route::get('/professor/findAttendance', [AttendanceController::class, 'findAttendance'])->name('find.prof.attendance');
   // update attendance
   Route::put('/professor/updateAttendance', [AttendanceController::class, 'updateAttendance'])->name('update.prof.attendance');
   // delete attendance
   Route::delete('/professor/deleteAttendance', [AttendanceController::class, 'deleteAttendance'])->name('delete.prof.attendance');



   // professor dtr
   // DTRController
   Route::controller(DTRController::class)
      ->group(function () {

         Route::get('/dtr/{userID}/showDTR', 'getDTR')
            ->name('professor.show.dtr');


         Route::get('/dtr/getDateDTR', 'getDateDTR')
            ->name('professor.show.dateDTR');

      });

});



// ***GENERAL*** (DTR/LOGIN) ****************************************************************************************************
// ******************************************************************************************************************************

// DTR ********************************************************************************************
// show dtr input page
Route::prefix('dtr')->group(function () {

   Route::get('/input', function () {
      return view('dtr.dtr_input');
   });


   // (dtr input page) check role and insert data
   // ********** DTRController
   Route::controller(DTRController::class)
      ->group(function () {

         Route::get('/input/check', 'checkRole')
            ->name('check.id');


         Route::post('/input/logTime', 'logTime')
            ->name('input.time');


         // show dtr table of employee
         Route::get('/input/{userID}/showDTR', 'getDTR')
            ->name('show.dtr');


         Route::get('/input/getDateDTR', 'getDateDTR')
            ->name('show.dateDTR');

      });

});



// LOGIN ********************************************************************************************


Route::get('/login', function () {
   return view('login.loginindex');
})->name('login');

// login function with authentication
Route::get('/login/find', [LoginController::class, 'loginUser'])->name('login_user');
Route::get('/logout', [LoginController::class, 'logoutUser'])->name('logout_user');




// HR ********************************************************************************************
Route::prefix('hr')->group(function () {

   Route::get('/', function () {
      return view('hr.hrindex');
   })->name('hr');

   // Route::get('/', function () {
   //    return view('hr.hr');
   // })->name('hr');

   Route::get('/announcement', function () {
      return view('hr.pages.announcement');
   });



   // HR employee *************************************
   // ************ HRController
   Route::controller(HRController::class)
      ->group(function () {

         // edit employee
         Route::put('/employee/update/{id}', 'updateEmployee')
            ->name('hr_update_employee');


         // show employees
         Route::get('/employee', 'showEmployees')
            ->name('hr_show_employee');


         // create employee
         Route::post('/employee/create', 'createEmployee')
            ->name('hr_create_employee');


         // delete employee
         Route::delete('/employee/delete/{id}', 'deleteEmployee')
            ->name('hr_delete_employee');

      });


   // hr dtr
   // DTRController **********
   Route::controller(DTRController::class)
      ->group(function () {

         Route::get('/dtr/{userID}/showDTR', 'getDTR')
            ->name('hr.show.dtr');


         Route::get('/dtr/getDateDTR', 'getDateDTR')
            ->name('hr.show.dateDTR');

      });

});


// ENROLLMENT ********************************************************************************************

Route::post('student/enrollmentform/pay', [EnrollmentController::class, 'payEnrollment'])->name('pay_enrollment');

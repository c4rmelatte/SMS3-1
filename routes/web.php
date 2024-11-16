<?php

use Illuminate\Support\Facades\Route;

// ADMIN *************************************************************************************

Route::get('/admin', function () {
    return view('index');
});

Route::get('/admin/announcement', function () {
    return view('admin.pages.announcement');
});

Route::get('/admin/building', function () {
    return view('admin.pages.building');
});

Route::get('/admin/courses', function () {
    return view('admin.pages.courses');
});

Route::get('/admin/curriculum', function () {
    return view('admin.pages.curriculum');
});

Route::get('/admin/departments', function () {
    return view('admin.pages.department');
});

Route::get('/admin/employee', function () {
    return view('admin.pages.employee');
});

Route::get('/admin/subject', function () {
    return view('admin.pages.subject');
});


// STUDENT *************************************************************************************

Route::get('/student', function () {
   // return view('index');
});



// TREASURY *************************************************************************************

Route::get('/treasury', function () {
    return view('treasury.treasuryindex');
 });

 Route::get('/treasury/announcement', function () {
    return view('treasury.pages.announcement');
 });


 Route::get('/treasury/payment', function () {
    return view('treasury.treasuryindex');
 });

// PROGRAM HEAD *************************************************************************************

Route::get('/programhead', function () {
    return view('programhead.programheadindex');
 });

 Route::get('/programhead/announcement', function () {
    return view('programhead.pages.announcement');
 });


 Route::get('/programhead/room', function () {
    return view('programhead.pages.room');
 });

 Route::get('/programhead/schedule', function () {
    return view('programhead.pages.schedule');
 });

 Route::get('/programhead/students', function () {
    return view('programhead.pages.student');
 });

// REGISTRAR *************************************************************************************

// ...
 
// PROFESSOR *************************************************************************************

Route::get('/professor', function () {
    return view('professor.professorindex');
 });

 Route::get('/professor/announcement', function () {
    return view('professor.pages.announcement');
 });


 Route::get('/professor/attendance', function () {
    return view('professor.pages.attendance');
 });

 Route::get('/professor/activities', function () {
    return view('professor.pages.activities');
 });

 Route::get('/professor/schedule', function () {
    return view('professor.pages.schedule');
 });


// ***GENERAL*** (DTR/LOGIN) *************************************************************************************

// ...
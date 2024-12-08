<?php

use App\Http\Controllers\BuildingController;
use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\CurriculumController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SubjectController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\ScheduleController;
// use App\Http\Controllers\AssignSubjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::apiResource('building', BuildingController::class);

Route::apiResource('curriculum', CurriculumController::class);
// Route::apiResource('assignsubject', AssignSubjectController::class);

Route::apiResource('course', CourseController::class);
Route::apiResource('announcements', AnnouncementsController::class);
Route::apiResource('department', DepartmentController::class);
Route::apiResource('room', RoomController::class);
Route::apiResource('subject', SubjectController::class);
Route::apiResource('section', SectionController::class);
Route::apiResource('schedule', ScheduleController::class);
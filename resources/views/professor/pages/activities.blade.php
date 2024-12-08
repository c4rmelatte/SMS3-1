@extends('professor.professorindex')
@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-4  dark:border-gray-700">
      <div class="flex w-full items-center justify-between">
         <h1 class="text-3xl text-[#37584F] font-bold">Activities</h1>
         @include('professor.activities.createmodal')
      </div>
      <hr class="w-full mb-3">
      
      
    <!-- Filters -->
    <div class="flex gap-4 mb-4">
      
      <select class="w-1/2 px-4 py-2 bg-gray-100 border border-gray-300 rounded-md text-gray-700 focus:ring focus:ring-green-200 focus:outline-none">
        <option>ALL</option>
        <option>Prelim</option>
        <option>Midterm</option>
        <option>Finals</option>
      </select>
      
      <select class="w-1/2 px-4 py-2 bg-gray-100 border border-gray-300 rounded-md text-gray-700 focus:ring focus:ring-green-200 focus:outline-none">
        <option>ALL</option>
        <option>Assignment</option>
        <option>Quiz</option>
        <option>Term Exam</option>
      </select>
    </div>



      <div class="grid grid-cols-1 gap-3">
         @include('professor.activities.activitiescard')
      </div>
   </div>
</div>
@endsection
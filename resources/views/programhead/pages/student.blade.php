@extends('programhead.programheadindex')
@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-4  dark:border-gray-700">
      <div class="flex w-full items-center justify-between">
         <h1 class="text-3xl text-[#37584F] font-bold">Student</h1>
         @include('programhead.students.createmodal')
      </div>
      <hr class="w-full mb-4">

      <div class="w-full">
      @include('programhead.students.studentcard')
      </div>
   </div>
</div>
@endsection
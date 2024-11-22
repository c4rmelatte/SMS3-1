@extends('student.studentindex')
@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-4  dark:border-gray-700">
   <h1 class="text-3xl text-[#37584F] font-bold">Activities</h1>

      <div class="grid grid-cols-3 gap-3">
         @include('student.activities.subjectscard')
      </div>

   </div>
</div>
@endsection
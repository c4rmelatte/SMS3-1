@extends('professor.professorindex')
@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-4  dark:border-gray-700">
   <h1 class="text-3xl text-[#37584F] font-bold">Activities</h1>

      <hr class="w-full mb-3">

      <div class="grid grid-cols-3 gap-3">
         @include('professor.activities.subjectscard')
      </div>
   </div>
</div>
@endsection
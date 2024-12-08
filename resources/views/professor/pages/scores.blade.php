@extends('professor.professorindex')
@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-4  dark:border-gray-700">
      <div class="flex w-full items-center justify-between">
         <h1 class="text-3xl text-[#37584F] font-bold">Activities</h1>
      </div>
      <hr class="w-full mb-3">

      <div class="grid grid-cols-1 lg:grid-cols-3 gap-4">
      <div class="col-span-1 lg:col-span-3">
         @include('professor.activities.scorescard')
      </div>
   </div>
</div>
@endsection
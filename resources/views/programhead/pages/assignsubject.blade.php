@extends('programhead.programheadindex')
@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-4  dark:border-gray-700">
      <div class="flex w-full items-center justify-between">
         <h1 class="text-3xl text-[#37584F] font-bold">Subject</h1>
         @include('programhead.assignsubject.createmodal')
      </div>
      <hr class="w-full mb-3">

      <div class="grid grid-cols-3 gap-3">
         @include('programhead.assignsubject.assignsubjectcard')
      </div>
   </div>
</div>
@endsection
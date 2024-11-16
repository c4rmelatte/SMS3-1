@extends('index')
@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-4  dark:border-gray-700">
      <div class="flex w-full items-center justify-between">
         <h1 class="text-3xl text-[#37584F] font-bold">Employee List</h1>
         @include('admin.employee.createmodal')
      </div>
      <hr class="w-full mb-3">

      <div class="w-full flex">
         @include('admin.employee.employeecard')
      </div>
   </div>
</div>
@endsection
@extends('index')
@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-4  dark:border-gray-700">
      <div class="flex w-full items-center justify-between">
         <h1 class="text-3xl text-[#37584F] font-bold">Buildings</h1>
         @include('admin.building.createmodal')
      </div>
      <hr class="w-full mb-3">

      <div class="grid grid-cols-3 gap-3">
         @include('admin.building.buildingcard')
      </div>
   </div>
</div>
@endsection
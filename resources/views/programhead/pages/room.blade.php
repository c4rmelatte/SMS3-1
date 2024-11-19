@extends('programhead.programheadindex')
@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-4  dark:border-gray-700">
      <div class="flex w-full items-center justify-between">
         <h1 class="text-3xl text-[#37584F] font-bold">ROOM</h1>
         @include('programhead.room.createmodal')
      </div>
      <hr class="w-full mb-4">

      <div class="w-full">
         @include('programhead.room.roomcard')
      </div>
   </div>
</div>
@endsection
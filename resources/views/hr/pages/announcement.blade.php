@extends('hr.hrindex')
@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-4  dark:border-gray-700">
      <div class="flex w-full items-center justify-between">
         <h1 class="text-3xl text-[#37584F] font-bold">Announcement</h1>
         @include('hr.announcement.createmodal')
      </div>
      <hr class="w-full mb-3">

      <div class="grid grid-cols-3 gap-3">
         @include('hr.announcement.announcementcard')
      </div>
   </div>
</div>
@endsection
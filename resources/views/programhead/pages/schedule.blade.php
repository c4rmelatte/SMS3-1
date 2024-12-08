@extends('programhead.programheadindex')
@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-4  dark:border-gray-700">
      <div class="flex w-full items-center justify-between">
         <h1 class="text-3xl text-[#37584F] font-bold">Schedule</h1>
         @include('programhead.schedule.createmodal')
      </div>
      <hr class="w-full mb-3">

      <div class="w-full">
      @include('programhead.schedule.schedulecard')
      </div>
   </div>
</div>
@endsection


{{-- dalawa yung schedule, pacheck na nga din alin yung working --}}
{{-- ahhh okay okay --}}

{{-- patanggal na yung isa --}}
@extends('index')
@section('content')
<div class="p-4 sm:ml-64">
   <div class="p-4  dark:border-gray-700">
      <div class="flex w-full items-center justify-between">
         <h1 class="text-3xl text-[#37584F] font-bold">Rooms</h1>
      </div>
      <hr class="w-full mb-3">
      <div class="">
            <ul class="space-y-4 mt-4 text-gray-500 dark:text-gray-400">
      @if ($count > 0)
         @foreach ($rooms as $room)
            <li class="flex items-center space-x-3 rtl:space-x-reverse">
               <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true"
               xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
               d="M1 5.917 5.724 10.5 15 1.5" />
            </svg>
            <span>
            {{$room->name}}
            </span>
            </li>
        
         @endforeach
      @else
         <li class="flex items-center space-x-3 rtl:space-x-reverse">No Rooms Added.</li>
      @endif
   </ul>
      </div>
   </div>
</div>
@endsection
@extends('index')
@section('content')
<div class="p-4 sm:ml-64">
 <div class="p-4  dark:border-gray-700">
  <div class="flex w-full items-center justify-between">
   <h1 class="text-3xl text-[#37584F] font-bold">Course</h1>
  </div>
  <hr class="w-full mb-4">
  <div class="w-full">
   @foreach ($courses as $course)
    <h1 class="text-2xl font-bold">- {{$course->name}}</h1>
   @endforeach


   <h1 class="text-3xl mt-4 text-[#37584F] font-bold">Subjects</h1>

   <ul class="space-y-4 mt-4 text-gray-500 dark:text-gray-400">
      @if ($count > 0)
         @foreach ($subjects as $subject)
            <li class="flex items-center space-x-3 rtl:space-x-reverse">
               <svg class="flex-shrink-0 w-3.5 h-3.5 text-green-500 dark:text-green-400" aria-hidden="true"
               xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 12">
               <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
               d="M1 5.917 5.724 10.5 15 1.5" />
            </svg>
            <span>
            {{$subject->code}} - {{$subject->name}} 
            </span>
            </li>
        
         @endforeach
      @else
         <li class="flex items-center space-x-3 rtl:space-x-reverse">No Subject Added.</li>
      @endif
   </ul>
  </div>
 </div>
</div>
@endsection
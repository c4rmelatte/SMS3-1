@extends('index')
@section('content')
<div class="p-4 sm:ml-64">
 <div class="p-4  dark:border-gray-700">
  <div class="flex w-full items-center justify-between">
   <h1 class="text-3xl text-[#37584F] font-bold">Dashboard</h1>
  </div>
  <hr class="w-full mb-3">
  <!-- Building Created: {{$building}} <br> -->
  <!-- Buildings Created: {{$building}} <br>
  Departments Created: {{$department}} <br>
  Courses Created: {{$courses}} <br>
  Curriculums Created: {{$curriculum}} <br>
  Subjects Created: {{$subject}} <br> -->


  <section class="bg-white dark:bg-gray-900">
   <div class="w-full px-4 py-8 mx-auto text-center lg:py-16 lg:px-6">
    <dl class="grid max-w-screen-md gap-8 mx-auto text-gray-900 sm:grid-cols-4 dark:text-white">
     <div class="flex flex-col items-center justify-center col-span-4 bg-gray-200 py-3 rounded-lg shadow">
      <dt class="mb-2 text-3xl md:text-4xl font-extrabold">
       @if ($department > 5)
     {{$department}} <i class="fa-solid text-lg text-green-500 fa-arrow-up"></i>
    @elseif($department < 5)
     {{$department}} <i class="fa-solid text-lg text-red-500 fa-arrow-down"></i>
    @else
     {{$department}}
    @endif
      </dt>
      <dd class="font-light text-gray-500 dark:text-gray-400">Departments</dd>
     </div>
     <div class="flex flex-col items-center justify-center bg-gray-200 py-3 rounded-lg">
      <dt class="mb-2 text-3xl md:text-4xl font-extrabold">
       @if ($building > 5)
     {{$building}} <i class="fa-solid text-lg text-green-500 fa-arrow-up"></i>
    @elseif($building < 5)
     {{$building}} <i class="fa-solid text-lg text-red-500 fa-arrow-down"></i>
    @else
     {{$building}}
    @endif
      </dt>
      <dd class="font-light text-gray-500 dark:text-gray-400">Buildings</dd>
     </div>
     <div class="flex flex-col items-center justify-center bg-gray-200 py-3 rounded-lg">
      <dt class="mb-2 text-3xl md:text-4xl font-extrabold">
       @if ($courses > 5)
     {{$courses}} <i class="fa-solid text-lg text-green-500 fa-arrow-up"></i>
    @elseif($courses < 5)
     {{$courses}} <i class="fa-solid text-lg text-red-500 fa-arrow-down"></i>
    @else
     {{$courses}}
    @endif
      </dt>
      <dd class="font-light text-gray-500 dark:text-gray-400">Courses</dd>
     </div>
     <div class="flex flex-col items-center justify-center bg-gray-200 py-3 rounded-lg">
      <dt class="mb-2 text-3xl md:text-4xl font-extrabold">
       @if ($curriculum > 5)
     {{$curriculum}} <i class="fa-solid text-lg text-green-500 fa-arrow-up"></i>
    @elseif($curriculum < 5)
     {{$curriculum}} <i class="fa-solid text-lg text-red-500 fa-arrow-down"></i>
    @else
     {{$curriculum}}
    @endif
      </dt>
      <dd class="font-light text-gray-500 dark:text-gray-400">Curriculums</dd>
     </div>
     <div class="flex flex-col items-center justify-center bg-gray-200 py-3 rounded-lg">
      <dt class="mb-2 text-3xl md:text-4xl font-extrabold">
       @if ($subject > 5)
     {{$subject}} <i class="fa-solid text-lg text-green-500 fa-arrow-up"></i>
    @elseif($subject < 5)
     {{$subject}} <i class="fa-solid text-lg text-red-500 fa-arrow-down"></i>
    @else
     {{$subject}}
    @endif
      </dt>
      <dd class="font-light text-gray-500 dark:text-gray-400">Subjects</dd>
     </div>
    </dl>
   </div>
  </section>
 </div>
</div>
@endsection
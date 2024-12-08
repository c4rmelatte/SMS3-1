@extends('index')
@section('content')
<div class="p-4 sm:ml-64">
  <div class="p-4 dark:border-gray-700">
    <div class="flex w-full items-center justify-between">
      <h1 class="text-3xl text-[#375735] font-bold">Dashboard</h1>
    </div>
    <hr class="w-full mb-3">

    <section class="bg-white dark:bg-gray-900">

      <div class="grid grid-cols-4 gap-4">
        @include('admin.admin.card.buildings')
        @include('admin.admin.card.course')
        @include('admin.admin.card.curriculum')
        @include('admin.admin.card.subjects')





        <div class="relative col-span-3 border border-gray-200 w-full overflow-x-auto shadow-md sm:rounded-lg">
          @include('admin.admin.card.table')
        </div>
        @include('admin.admin.card.announcements')
        <div class="relative col-span-3 border border-gray-200 w-full overflow-x-auto shadow-md sm:rounded-lg">
          @include('admin.admin.card.user')
        </div>

      </div>
    </section>
  </div>
</div>
@endsection
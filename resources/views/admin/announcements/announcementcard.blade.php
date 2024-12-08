@forelse ($announcements as $announcement)
  <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-between items-center">
    <!-- title -->
    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{ $announcement->title }}</h5>
    <!-- edit delete -->
    <div class="flex items-center justify-center gap-1">
      @include('admin.announcements.updatemodal')
      @include('admin.announcements.delete')
    </div>
    <!-- ... -->
    </div>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{ $announcement->description }}</p>
    <p class="font-normal text-gray-500 dark:text-gray-400">This Announce to:</p>
    @foreach ($announcement->target as $target)
    <small class="mb-3 font-normal text-[15px] text-gray-500 dark:text-gray-400">{{ $target }} <br></small>
  @endforeach
  </div>
@empty
  <h1 class="text-xl text-gray-800 font-regular">No annoucement displayed.</h1>
@endforelse
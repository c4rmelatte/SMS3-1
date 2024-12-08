<div
    class="py-2 px-3 row-span-2 bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl dark:border-gray-700 dark:bg-gray-800">
    <h1 class="text-xl mb-4 mt-4">Announcements</h1>
    <ul class="w-full divide-y p-2 divide-gray-200 dark:divide-gray-700">
        @forelse ($announcements as $announcement)
            <li class="pb-3 sm:pb-4">
                <div class="flex items-center space-x-4 rtl:space-x-reverse">
                    <div class="flex-shrink-0">
                        <i class="fa-solid text-yellow-500 text-2xl fa-bell"></i>
                    </div>
                    <div class="flex-1 flex items-center justify-between min-w-0">
                        <span>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                {{$announcement->title}}
                            </p>
                            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                {{$announcement->description}}
                            </p>
                        </span>
                        <a href="{{url('/admin/announcement')}}">
                            <i class="fa-solid fa-up-right-from-square text-sm"></i>
                        </a>
                    </div>
                </div>
            </li>

        @empty
            <li class="pb-3 sm:pb-4">
                <div class="flex items-center space-x-4 rtl:space-x-reverse">
                    <div class="flex-shrink-0">
                        <i class="fa-solid text-yellow-500 text-2xl fa-bell"></i>
                    </div>
                    <div class="flex-1 min-w-0">
                        <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                            No announcements.
                        </p>
                    </div>
                </div>
            </li>
        @endforelse
    </ul>
</div>
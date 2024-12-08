@php
    // Group sections by course
    $groupedSections = $sections->groupBy(function ($section) {
        return $section->courses->name; // Group by course name
    });
@endphp

@foreach ($groupedSections as $courseName => $sections)
    <div class="w-full mb-8">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-200 mb-6">
            {{ $courseName }}
        </h1>

        @foreach ($sections as $section)
            <div class="flex justify-between items-center p-4 mb-4 bg-gray-50 rounded-lg shadow-md dark:bg-gray-800">
                <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                        Year Level: {{ $section->year_level }}
                    </h2>
                    <p class="mt-1 text-gray-700 dark:text-gray-300">
                        Block/Section: {{ $section->block }}
                    </p>
                </div>

                <div class="flex items-center space-x-4">
                    
                    <form action="{{route('section.destroy', $section->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="p-2 text-red-600 hover:text-red-800 dark:text-red-400 dark:hover:text-red-600">
                            <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
@endforeach
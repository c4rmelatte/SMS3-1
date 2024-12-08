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
              <a href="{{route('schedule.index', $section->id)}}">
                <div>
                    <h2 class="text-lg font-semibold text-gray-900 dark:text-gray-100">
                        Year Level: {{ $section->year_level }}
                    </h2>
                    <p class="mt-1 text-gray-700 dark:text-gray-300">
                        Block/Section: {{ $section->block }}
                    </p>
                </div>
              </a>
                <div class="flex items-center space-x-4">
                </div>
            </div>
        @endforeach
    </div>
@endforeach
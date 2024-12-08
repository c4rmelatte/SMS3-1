@foreach ($assigned_subjects as $assigned_subject)
<div
    class="w-full p-4 flex mb-4 justify-between items-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <span>
        <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white hover:text-[#37584F]">
            {{ $assigned_subject->subject->name ?? 'N/A' }}
        </h5>
        <p class="text-sm text-gray-600 dark:text-gray-400">
            Prof. {{ $assigned_subject->professor->surname ?? 'N/A' }},
            {{ $assigned_subject->professor->firstname ?? 'N/A' }}
            {{ $assigned_subject->professor->middlename ?? '' }}
        </p>
    </span>

    <span class="flex flex-col items-end space-y-2">
        @include('programhead.assignsubject.updatemodal')

        <form action="{{}}" method="POST">
            @csrf
            @method("DELETE")
            <button type="submit" class="flex items-center text-red-700 hover:text-red-900 dark:text-white">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                    viewBox="0 0 24 24">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
                </svg>
            </button>
        </form>
    </span>
</div>
@endforeach

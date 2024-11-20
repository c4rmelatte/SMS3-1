@foreach ($subjects as $subject)
  <div
    class="w-full p-4 flex mb-4 justify-between items-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <span>
    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white hover:text-[#37584F]">
      {{$subject->name}} | Curriculum: {{$curriculums->firstWhere('id', $subject->curriculum_id)->name}}
    </h5>
    <!-- {{-- {{$subject->curriculum ? $subject->curriculum->name : $curriculum_id}} --}} -->
    <p class="text-sm text-gray-600 dark:text-gray-400">
      {{$subject->code}}
      <br>
      {{$subject->description}}
      <br>
    </p>
    </span>

    <span class="flex flex-col">
    @include('admin.subject.updatemodal')

    <form action="{{route('subject.destroy', $subject->id)}}" method="POST">
      @csrf
      @method("DELETE")
      <button type="submit">
      <svg class="w-6 h-6 text-red-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
        width="24" height="24" fill="none" viewBox="0 0 24 24">
        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z" />
      </svg>
      </button>
    </form>
    </span>
  </div>
@endforeach
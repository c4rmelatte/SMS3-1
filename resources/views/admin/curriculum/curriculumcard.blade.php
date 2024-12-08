@foreach ($curriculums as $curriculum)


    <div
    class="w-full p-4 flex mb-4 justify-between items-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <span>
    <a href="{{route('show_courses', $curriculum->id)}}">
      <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white hover:text-[#37584F]">
      {{$curriculum->name}} ({{$curriculum->level}})
      </h5>
    </a>
    </span>
    <span class="grid grid-cols-3 gap-2">
    @include('admin.curriculum.updatemodal')
    <form action="{{route('curriculum.destroy', $curriculum->id)}}" method="POST">
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
    <a href="{{route('show_courses', $curriculum->id)}}">
      <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
      width="24" height="24" fill="none" viewBox="0 0 24 24">
      <path stroke="currentColor" stroke-width="2"
      d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z" />
      <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
      </svg>
    </a>
    </span>
    </div>
@endforeach
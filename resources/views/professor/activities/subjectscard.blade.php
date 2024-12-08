@foreach($subjects as $assignedSubject)
  <div class="w-full p-4 flex mb-4 justify-between items-center bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <span class="flex-grow">
      <a href="#">
        <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">
          {{ $assignedSubject->subject->name }} <!-- Accessing subject name -->
        </h5>
      </a>
    </span>
    <a href="{{ url('professor/subjects/'.$assignedSubject->subject->id.'/activities') }}" class="text-gray-500 dark:text-white text-2xl hover:text-gray-700 dark:hover:text-gray-300">
      >
    </a>
  </div>
@endforeach
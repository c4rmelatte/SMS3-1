@foreach ($departments as $department)
    <div
    class="w-full flex items-center mb-5 justify-between p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <span>
    <a href="{{route('show_course', $department->id)}}">
      <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$department->name}}</h5>
    </a>

    <p class="text-sm text-gray-600 dark:text-gray-400">
      {{$department->description}} - Building: {{ $department->building ? $department->building->name : 'N/A' }}
    </p>
    </span>


    <span class="flex gap-2">
    @include('admin.department.updatemodal')

    <form action="{{route('department.destroy', $department->id)}}" method="POST">
      @csrf
      @method("DELETE")
      <button type="submit" class="fa-solid fa-trash text-xl text-red-600 dark:text-red-500">
      </button>
    </form>

    </span>
    </div>
@endforeach
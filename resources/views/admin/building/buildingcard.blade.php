@foreach ($buildings as $building)

  <div class="max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <a href="{{route('show_rooms', $building->id)}}">
    <h5 class="mb-2 text-2xl font-semibold tracking-tight text-gray-900 dark:text-white">{{$building->name}}</h5>
    </a>
    <p class="mb-3 font-normal text-gray-500 dark:text-gray-400">{{$building->description}}</p>


    <div class="flex items-between justify-end">
    <span class="flex gap-2">
      @include('admin.building.updatemodal')

      <form action="{{route('building.destroy', $building->id)}}" method="POST">
      @csrf
      @method("DELETE")

      <button type="submit" class="fa-solid fa-trash text-xl text-red-600 dark:text-red-500">
      </button>
      </form>


    </span>
    </div>
  </div>

@endforeach
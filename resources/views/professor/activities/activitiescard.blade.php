

@foreach ($activity as $item)
<div class="w-full p-6 flex mb-4 justify-between items-center bg-[#90BDB1] px-8 py-5 text-gray-800 rounded-lg shadow-lg hover:shadow-xl transition-all">
  <span class="flex-1">
    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 dark:text-white hover:text-green-700">
      {{ $item->name }} 
    </h5>
  </span>

  <a href="{{ url('professor/activity/'.$item->id) }}" class="text-gray-500 dark:text-white text-2xl hover:text-gray-700 dark:hover:text-gray-300">
      >
    </a>
</div>
@endforeach


</div>

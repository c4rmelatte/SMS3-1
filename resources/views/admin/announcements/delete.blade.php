<form action="{{route('announcement.delete', $announcement->id)}}" method="post">
 @csrf
 @method('delete')
 <button type="submit" class="fa-solid fa-trash text-xl text-red-600 dark:text-red-500">
 </button>
</form>
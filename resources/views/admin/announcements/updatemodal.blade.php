<!-- Modal toggle -->
<button 
    id="updateProductButton" 
    data-modal-target="{{$announcement->id}}-updateProductModal"
    data-modal-toggle="{{$announcement->id}}-updateProductModal"
    class="fa-solid  fa-file-pen text-xl text-[#5A8277] dark:text-white">
</button>

<!-- Main modal -->
<div 
    id="{{$announcement->id}}-updateProductModal" 
    tabindex="-1" 
    aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    Update Annoucement
                </h3>
                <button 
                    type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="{{$announcement->id}}-updateProductModal">
                    <svg 
                        aria-hidden="true" 
                        class="w-5 h-5" 
                        fill="currentColor" 
                        viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path 
                            fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form 
                action="{{route('announcement.update', $announcement->id)}}" 
                method="post">
                @csrf
                @method('put')
                <div class="grid gap-4 mb-4 grid-cols-1">

                    <!-- announcement title -->
                    <div>
                        <label 
                            for="title"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Announcement
                            Title</label>
                        <input 
                            type="text" 
                            name="title" 
                            id="title" 
                            value="{{$announcement->title}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            placeholder="Type announcement title">
                    </div>

                    <!-- description -->
                    <div>
                        <label 
                            for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <input 
                            type="text" 
                            name="description" 
                            id="description" 
                            value="{{$announcement->description}}"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            placeholder="Type announcement description">
                    </div>

                    <!-- targets -->
                    <!-- all -->
                    <div>
                        <label 
                        class="block mb-2 text-lg font-medium text-gray-900 dark:text-white">
                        Announce to
                        </label>
                        <div class="grid grid-cols-3">
                            <div class="space-y-2">
                                <input 
                                    type="checkbox" 
                                    id="all" 
                                    name=" targets[]" 
                                    value="all"
                                    class="h-4 w-4 text-green-500 focus:ring-green-500 border-gray-300 rounded"
                                    {{ in_array('all', $announcement->target ?? [])
    ? 'checked' : '' }}>
                                <label 
                                for="all" 
                                class="text-sm font-medium text-gray-900 dark:text-white">
                                    All
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- department -->
                    <div>
                        <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">
                            Departments
                        </label>
                        <div class="grid grid-cols-3">
                            @forelse ($departments as $department)
                                <div class="space-y-2">
                                    <input type="checkbox" id="{{$department->name}}" name=" targets[]"
                                        value=" {{$department->name}}"
                                        class="h-4 w-4 text-green-500 focus:ring-green-500 border-gray-300 rounded"
                                        {{ in_array($department->name, $announcement->target ?? []) ? 'checked' : '' }}>
                                    <label for="{{$department->name}}"
                                        class="text-sm font-medium text-gray-900 dark:text-white">{{$department->name}}</label>
                                </div>
                            @empty
                                <div class="space-y-2">
                                    <p>No Departments Added.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>

                    <!-- building -->
                    <div>
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Buildings</label>
                        <div class="grid grid-cols-3">
                            @forelse ($buildings as $building)
                                <div class="space-y-2">
                                    <input type="checkbox" id="{{$building->name}}" name=" targets[]"
                                        value="{{$building->name}}"
                                        class="h-4 w-4 text-green-500 focus:ring-green-500 border-gray-300 rounded"
                                        {{ in_array($building->name, $announcement->target ?? []) ? 'checked' : '' }}>
                                    <label for="{{$building->name}}"
                                        class="text-sm font-medium text-gray-900 dark:text-white">{{$building->name}}</label>
                                </div>
                            @empty
                                <div class="space-y-2">
                                    <p>No Buildings Added.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>


                    <!-- subject -->
                    <div>
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Subjects</label>
                        <div class="grid grid-cols-3">
                            @forelse ($subjects as $subject)
                                <div class="space-y-2">
                                    <input type="checkbox" id="{{$subject->name}}" name=" targets[]"
                                        value="{{$subject->name}}"
                                        class="h-4 w-4 text-green-500 focus:ring-green-500 border-gray-300 rounded"
                                         {{ in_array($subject->name, $announcement->target ?? []) ? 'checked' : '' }}>
                                    <label for="{{$subject->name}}"
                                        class="text-sm font-medium text-gray-900 dark:text-white">{{$subject->name}}</label>
                                </div>
                            @empty
                                <div class="space-y-2">
                                    <p>No Subject Added.</p>
                                </div>
                            @endforelse
                        </div>
                    </div>
                    <!-- .... -->


                </div>
                <button type="submit"
                    class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    UPDATE ANNOUNCEMENT
                </button>
            </form>
        </div>
    </div>
</div>
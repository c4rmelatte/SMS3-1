<!-- Modal toggle -->

<span id="updateProductButton" class="cursor-pointer" data-modal-target="{{$curriculum->id}}-updateProductModal"
    data-modal-toggle="{{$curriculum->id}}-updateProductModal">
    <svg class="w-6 h-6 text-[#5A8277] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
        height="24" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd"
            d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
            clip-rule="evenodd" />
        <path fill-rule="evenodd"
            d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
            clip-rule="evenodd" />
    </svg>
</span>

<!-- Main modal -->
<div id="{{$curriculum->id}}-updateProductModal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    UPDATE CURRICULUM
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="{{$curriculum->id}}-updateProductModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="{{route('curriculum.update', $curriculum->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid gap-4 mb-4 grid-cols-1">
                    <div>
                        <label for="code"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Curriculum Code</label>
                        <input type="text" name="code" id="code"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            placeholder="Type curriculum code" required="" value="{{$curriculum->code}}">
                    </div>

                    <div class="">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Curriculum Name</label>
                        <input type="text" name="name" id="name"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            placeholder="Type curriculum name" required="" value="{{$curriculum->name}}">
                    </div>

                    <div>
                        <label for="course_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course</label>
                        <select id="course_id" name="course_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                            @foreach ($courses as $course)
                                <option value="{{$course->id}}" {{ $curriculum->course_id == $course->id ? 'selected' : '' }}>
                                    {{$course->name}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div>
                    <label for="curri_level"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year Level</label>
                    <select id="curri_level" name="curri_level"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                        
                        <option value="Pre-Elementary">Pre-Elementary</option>
                        <option value="Grade_1">Grade 1</option>
                        <option value="Grade_2">Grade 2</option>
                        <option value="Grade_3">Grade 3</option>
                        <option value="Grade_4">Grade 4</option>
                        <option value="Grade_5">Grade 5</option>
                        <option value="Grade_6">Grade 6</option>
                        <option value="Grade_7">Grade 7</option>
                        <option value="Grade_8">Grade 8</option>
                        <option value="Grade_9">Grade 9</option>
                        <option value="Grade_10">Grade 10</option>
                        <option value="Grade_11">Grade 11</option>
                        <option value="Grade_12">Grade 12</option>
                        <option value="First_year">1st Year College</option>
                        <option value="Second_year">2nd Year College</option>
                        <option value="Third_year">3rd Year College</option>
                        <option value="Fourth_year">4th Year College</option>
                
                    </select>
                </div>

                <button type="submit"
                    class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    UPDATE CURRICULUM
                </button>
            </form>
        </div>
    </div>
</div>
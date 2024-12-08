<div
    class="flex items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
    <div class="flex justify-between w-full items-center  p-4 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-[#375735] dark:text-[#375735]"> <i
                class="fa-solid fa-book-open-reader mr-2"></i>Subjects
        </h5>
        <h5 class="
        {{$subject > 0 ? 'text-2xl font-bold' : 'text-md font-base' }}
        mb-2 tracking-tight text-[#375735] dark:text-[#375735]">
        {{$subject > 0 ? $subject : 'No Subjects' }}
        </h5>
    </div>
</div>
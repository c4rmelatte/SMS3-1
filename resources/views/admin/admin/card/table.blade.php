<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <caption
        class="p-5 text-2xl font-bold text-left rtl:text-right text-[#375735] bg-white dark:text-white dark:bg-gray-800">
        <i class="fa-solid fa-landmark mr-2"></i>
        Departments
    </caption>
    <thead class="text-base text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                View
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($departments as $department)
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" class="px-6 py-4 font-medium text-lg text-gray-900 whitespace-nowrap dark:text-white">
                {{$department->name}}
            </th>
            <td class="px-6 py-4">
            <i class="fa-solid fa-arrow-up-right-from-square text-lg"></i>
            </td>
        </tr>        
        @empty
        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
            <th scope="row" colspan="2" class="px-6 py-4 text-center font-medium text-lg text-gray-900 whitespace-nowrap dark:text-white">
                No departments.
            </th>
        </tr>
        @endforelse
    </tbody>
</table>
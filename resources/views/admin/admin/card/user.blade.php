<table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
    <caption
        class="p-5 text-2xl font-bold text-left rtl:text-right text-[#375735] bg-white dark:text-white dark:bg-gray-800">
        <i class="fa-solid fa-users mr-2"></i></i>
        Users
    </caption>
    <thead class="text-base text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
        <tr>
            <th scope="col" class="px-6 py-3">
                Name
            </th>
            <th scope="col" class="px-6 py-3">
                Department
            </th>
            <th scope="col" class="px-6 py-3">
                Role
            </th>
        </tr>
    </thead>
    <tbody>
        @forelse ($users as $user)
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{$user->surname}}, {{$user->firstname}} {{$user->middlename}}
                </th>
                <td class="px-6 py-4">
                    {{$user->department}}
                </td>
                <td class="px-6 py-4">
                    {{$user->positiion}}
                </td>
            </tr>

        @empty
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <th colspan="3" scope="row" class="px-6 text-center py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    No Users.
                </th>
            </tr>
        @endforelse
    </tbody>
</table>
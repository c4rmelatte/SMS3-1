<!-- Modal toggle -->
<button id="updateProductButton" data-modal-target="updateProductModal-{{ $employee->id }}" data-modal-toggle="updateProductModal-{{ $employee->id }}">
    <svg class="w-6 h-6 text-[#5A8277] dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
        height="24" fill="currentColor" viewBox="0 0 24 24">
        <path fill-rule="evenodd"
            d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z"
            clip-rule="evenodd" />
        <path fill-rule="evenodd"
            d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z"
            clip-rule="evenodd" />
    </svg>
</button>

<div id="updateProductModal-{{ $employee->id }}" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    UPDATE EMPLOYEE
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="updateProductModal">
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

            <form class="p-4 md:p-5" action="{{ route('hr_update_employee', ['id' => $employee->id]) }}" method="POST">
                @csrf
                @method("PUT")
                <!-- SELECT FIRST NAME -->
                <div class="grid gap-4 mb-4 grid-cols-4">
                    <div class="col-span-4 sm:col-span-1">
                        <label for="firstName"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>

                        <input type="text" name="fname" id="fname"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="First Name" required="" value="{{ $employee->firstname }}"/>
                    </div>

                    <!-- SELECT MIDDLE NAME -->
                    <div class="col-span-4 sm:col-span-1">
                        <label for="middleName"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle Name</label>
                        <input type="text" name="middleName" id="middleName"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Middle Name" required="" value="{{ $employee->middlename }}"/>
                    </div>

                    <!-- SELECT SURNAME -->
                    <div class="col-span-4 sm:col-span-1">
                        <label for="surName"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Surname</label>

                        <input type="text" name="surName" id="surName"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Surname" required="" value="{{ $employee->surname }}" />
                    </div>

                    <!-- SELECT CATEGORY -->
                    <div class="col-span-4 sm:col-span-2">
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <input type="text" name="employeeCategory" id="employeeCategoryUpdate"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="" required="" value="{{ $employee->category }}" readonly/>
                    </div>

                    <!-- SELECT POSITION -->
                    <div class="col-span-4 sm:col-span-2">
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                        <input type="text" name="employeePosition" id="employeePositionUpdate"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="" required="" value="{{ $employee->position }}" readonly/>

                    </div>

                    <!-- DEPARTMENT -->
                     
                    <div class="col-span-4 sm:col-span-2">
                        <label for="department"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>

                            <input type="text" name="employeePosition" id="employeePositionUpdate"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="" required="" value="{{ $employee->department }}" readonly/>
                    </div>
                    

                    <!-- ACCOUNT NUMBER -->
                    <div class="col-span-4 sm:col-span-1">
                        <label for="accountNumber"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Number</label>
                        <input type="number" name="accountNumber" id="accountNumber"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Account Number" required="" value="{{ $employee->account_number }}" />

                    </div>

                    <!-- age -->
                    <div class="col-span-4 sm:col-span-1">
                        <label for="age"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age:</label>

                        <input type="number" name="age" id="age"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Age" required value="{{ $employee->age }}" />
                    </div>

                    <!-- address -->
                    <div class="col-span-4 sm:col-span-4">
                        <label for="address"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address:</label>

                        <input type="text" name="address" id="address"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Address" required value="{{ $employee->address }}"/>
                    </div>

                    <!-- username -->
                    <div class="col-span-4 sm:col-span-4">
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username:</label>

                        <input type="text" name="username" id="username"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Username" required value="{{ $employee->username }}" />
                    </div>

                    <!-- email -->
                    <div class="col-span-4 sm:col-span-4">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email:</label>

                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Email" required value="{{ $employee->email }}"/>
                    </div>

                    <!-- password -->
                    <!-- <div class="col-span-4 sm:col-span-4">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password:</label>

                        <input type="password" name="password" id="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Password" required />
                    </div> -->

                    <!-- time in -->
                    <div class="col-span-4 sm:col-span-2">
                        <label for="timeIn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time In:</label>

                        <input type="time" name="timeIn" id="timeIn"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="HH:MM" required />
                    </div>

                    <!-- time out -->
                    <div class="col-span-4 sm:col-span-2">
                        <label for="timeOut" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time
                            Out:</label>

                        <input type="time" name="timeOut" id="timeOut"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="HH:MM" required />
                    </div>

                    <!-- rate per hour -->
                    <div class="col-span-4 sm:col-span-1">
                        <label for="rate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Rate per
                            Hour</label>

                        <input type="number" name="rate" id="rate"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="$$$" required />
                    </div>

                    <!-- insurance -->
                    <div class="col-span-4 sm:col-span-1">
                        <label for="insurance" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Insurance</label>

                        <input type="number" name="insurance" id="insurance"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="$" required />
                    </div>

                    <!-- retirement -->
                    <div class="col-span-4 sm:col-span-2">
                        <label for="retirement" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Retirement Contribution</label>

                        <input type="number" name="retirement" id="retirement"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="$" required />
                    </div>

                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        UPDATE EMPLOYEE
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
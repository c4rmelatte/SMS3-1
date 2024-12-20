<!-- Modal toggle -->
<div class="flex justify-center m-5">
    <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
        class="block flex items-center gap-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
        type="button">

        <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd"
                d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                clip-rule="evenodd" />
        </svg>
        ADD EMPLOYEE
    </button>
</div>

<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    ADD EMPLOYEE
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="defaultModal">
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

            <form class="p-4 md:p-5" action="{{ route('hr_create_employee') }}" method="post">
                @csrf
                <!-- SELECT FIRST NAME -->
                <div class="grid gap-4 mb-4 grid-cols-4">
                    <div class="col-span-4 sm:col-span-2">
                        <label for="firstName"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label>

                        <input type="text" name="fname" id="fname"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="First Name" required="" />
                    </div>

                    <!-- SELECT MIDDLE NAME -->
                    <div class="col-span-4 sm:col-span-1">
                        <label for="middleName"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle Name</label>
                        <input type="text" name="middleName" id="middleName"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Middle Name" required="" />
                    </div>

                    <!-- SELECT SURNAME -->
                    <div class="col-span-4 sm:col-span-1">
                        <label for="surName"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Surname</label>

                        <input type="text" name="surName" id="surName"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Surname" required="" />
                    </div>

                    <!-- SELECT CATEGORY -->
                    <div class="col-span-4 sm:col-span-2">
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                        <select name="employeeCategory" id="employeeCategory"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="" disabled>Select Category</option>
                            <option value="faculty">Faculty</option>
                            <option value="staff">Staff</option>
                        </select>
                    </div>

                    <!-- SELECT POSITION -->
                    <div class="col-span-4 sm:col-span-2">
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>

                        <select name="employeePosition" id="employeePosition"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            <option selected="">Select a Category First</option>
                        </select>
                    </div>

                    <!-- DEPARTMENT -->


                    <div class="col-span-4 sm:col-span-2">
                        <label for="department"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>

                        <select name="department" id="department"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                            @foreach ($departments as $department)
                                <option selected="{{$department->id}}">{{$department->name}}</option>
                            @endforeach
                        </select>

                        <input type="hidden" name="department_id" id="department_id">
                    </div>


                    <!-- ACCOUNT NUMBER -->
                    <div class="col-span-4 sm:col-span-1">
                        <label for="accountNumber"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Number</label>
                        <input type="number" name="accountNumber" id="accountNumber"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="####" required="" value="" />

                    </div>

                    <!-- age -->
                    <div class="col-span-4 sm:col-span-1">
                        <label for="age"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Age:</label>

                        <input type="number" name="age" id="age"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Age" required value="" />
                    </div>

                    <!-- address -->
                    <div class="col-span-4 sm:col-span-4">
                        <label for="address"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address:</label>

                        <input type="text" name="address" id="address"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Address" required />
                    </div>

                    <!-- username -->
                    <div class="col-span-4 sm:col-span-4">
                        <label for="username"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Username:</label>

                        <input type="text" name="username" id="username"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Username" required />
                    </div>

                    <!-- email -->
                    <div class="col-span-4 sm:col-span-4">
                        <label for="email"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email:</label>

                        <input type="email" name="email" id="email"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Email" required />
                    </div>

                    <!-- password -->
                    <div class="col-span-4 sm:col-span-4">
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password:</label>

                        <input type="password" name="password" id="password"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="Password" required />
                    </div>

                    <!-- time in -->
                    <div class="col-span-4 sm:col-span-2">
                        <label for="timeIn" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time
                            In:</label>

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
                            Hour:</label>

                        <input type="number" name="rate" id="rate"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="$" required />
                    </div>

                    <!-- insurance -->
                    <div class="col-span-4 sm:col-span-1">
                        <label for="insurance"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Insurance</label>

                        <input type="number" name="insurance" id="insurance"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="$" required />
                    </div>

                    <!-- retirement -->
                    <div class="col-span-4 sm:col-span-2">
                        <label for="retirement"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Retirement
                            Contribution</label>

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
                        ADD EMPLOYEE
                    </button>
                </div>
            </form>
        </div>
    </div>


    <!-- dynamically change dropdown -->
    <script>

        const roleDropdown = document.querySelector('#employeeCategory')
         positionDropdown = document.querySelector('#employeePosition');

        const positions = {
            faculty: [
                { value: 'program_heads', text: 'Program Head' },
                { value: 'professors', text: 'Professor' },
            ],
            staff: [
                { value: 'hr', text: 'HR' },
                { value: 'admin', text: 'Admin' },
                { value: 'treasury', text: 'Treasury' },
                { value: 'registrar', text: 'Registrar' }
            ],
        };
        
        function change() {
            // Clear existing options in the position dropdown
            positionDropdown.innerHTML = '<option value="" selected disabled>Select Position</option>';

            // Get the selected role
            const selectedRole = roleDropdown.value;

            // Populate the position dropdown based on the selected role
            if (positions[selectedRole]) {
                positions[selectedRole].forEach(position => {
                    const option = document.createElement('option');
                    option.value = position.value;
                    option.textContent = position.text;
                    positionDropdown.appendChild(option);
                });
            }
        }

        roleDropdown.addEventListener('change', change);


        // Set the hidden input value to the selected department's ID when the dropdown changes
        document.getElementById('department').addEventListener('change', function() {
             const departmentId = this.value;  // This should be the ID, not the name
             document.getElementById('department_id').value = departmentId;  // Save the department ID in the hidden field
        });



    </script>

</div>
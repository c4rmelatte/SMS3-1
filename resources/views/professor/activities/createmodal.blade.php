<!-- Modal toggle -->
<div class="flex justify-center m-5">
    <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
        class="block flex items-center gap-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
        type="button">

        <svg class="w-4 h-4 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
            height="24" fill="currentColor" viewBox="0 0 24 24">
            <path
                d="M7.833 2c-.507 0-.98.216-1.318.576A1.92 1.92 0 0 0 6 3.89V21a1 1 0 0 0 1.625.78L12 18.28l4.375 3.5A1 1 0 0 0 18 21V3.889c0-.481-.178-.954-.515-1.313A1.808 1.808 0 0 0 16.167 2H7.833Z" />
        </svg>
        CREATE ACTIVITY
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
                    ADD ACITIVITY
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
            <form action="{{ route('insertData', ['id' => $subject]) }}" method="post">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-1">

                    <div class="">
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Activity Name</label>
                        <input type="text" name="name" id="name"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            placeholder="Type curriculum name" required="">
                    </div>


                    <div>
                        <label for="label_activity"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of Activity</label>
                        <select id="label_activity" name="label_activity"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                            <option value="Quiz">Quiz</option>
                            <option value="Assignment">Assignment</option>
                            <option value="Exam">Exam</option>
                        </select>
                    </div>

                    <div>
                        <label for="label_student"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Label of Student </label>
                        <select id="label_student" name="label_student"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                            <option value="Pre-Elementary">Pre-Elementary</option>
                            <option value="Grade School">Grade School</option>
                            <option value="Junior High School">Junior High School</option>
                            <option value="Senior High School">Senior High School</option>
                            <option value="College">College</option>
                        </select>
                    </div> 

                    <div>
                        <label for="label_term"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Label of Term </label>
                        <select id="label_term" name="label_term"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                            <option value="" selected disabled>Select a Label of Student First</option>
                        </select>
                    </div> 

                    <div class="">
                        <label for="max_score"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Max Score</label>
                        <input type="number" name="max_score" id="max_score"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            placeholder="0" required="">
                    </div>

                    <input type="hidden" name="user_id" id="{{$profID}}" value="{{$profID}}">


                    


                </div>
                <button type="submit"
                    class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    ADD ACTIVITY
                </button>
            </form>
        </div>
    </div>

    <script>
    const studentSelect = document.getElementById('label_student');
    const termSelect = document.getElementById('label_term');

    const termOptions = {
        quarters: [
            { value: '1st Quarter', text: '1st Quarter' },
            { value: '2nd Quarter', text: '2nd Quarter' },
            { value: '3rd Quarter', text: '3rd Quarter' },
            { value: '4th Quarter', text: '4th Quarter' }
        ],
        terms: [
            { value: 'Prelim', text: 'Prelim' },
            { value: 'Midterm', text: 'Midterm' },
            { value: 'Finals', text: 'Finals' }
        ]
    };

    studentSelect.addEventListener('change', () => {
        const selectedValue = studentSelect.value;
        const isQuarterSystem = ['Pre-Elementary', 'Grade School', 'Junior High School'].includes(selectedValue);

        // Clear existing options
        termSelect.innerHTML = '';

        // Add new options based on selection
        const options = isQuarterSystem ? termOptions.quarters : termOptions.terms;
        options.forEach(option => {
            const opt = document.createElement('option');
            opt.value = option.value;
            opt.textContent = option.text;
            termSelect.appendChild(opt);
        });
    });
</script>
</div>
<!-- Modal toggle -->
<div class="flex justify-center m-5">
    <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal"
        class="block flex items-center gap-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"
        type="button">

        <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="10"
            height="10" fill="currentColor" viewBox="0 0 24 24">
            <path
                d="M17.133 12.632v-1.8a5.406 5.406 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.955.955 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175ZM6 6a1 1 0 0 1-.707-.293l-1-1a1 1 0 0 1 1.414-1.414l1 1A1 1 0 0 1 6 6Zm-2 4H3a1 1 0 0 1 0-2h1a1 1 0 1 1 0 2Zm14-4a1 1 0 0 1-.707-1.707l1-1a1 1 0 1 1 1.414 1.414l-1 1A1 1 0 0 1 18 6Zm3 4h-1a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
        </svg> ASSIGN SUBJECT
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
                    ASSIGN SUBJECT
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
            <form action="{{route('assign_subject')}}" method="post">
                @csrf
                <div class="grid gap-4 mb-4 grid-cols-1">
                    <input type="hidden" name="assigned_by" id="{{$professorID}}" value="{{$professorID}}">

                    <div>
                        <label for="department_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SELECT
                            DEPARTMENT</label>
                        <select id="department_id" name="department_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                            <option value="" selected disabled>Select a Department</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">
                                    {{ $department->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <div>
                        <label for="course_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SELECT COURSE</label>
                        <select id="course_id" name="course_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                            <option value="" selected disabled>Select a Course</option>
                        </select>
                    </div>

                    <div>
                        <label for="curriculum_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SELECT
                            CURRICULUM</label>
                        <select id="curriculum_id" name="curriculum_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                            <option value="" selected disabled>Select a Curriculum</option>
                        </select>
                    </div>

                    <div>
                        <label for="year_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SELECT
                            YEAR LEVEL</label>
                        <select id="year_id" name="year_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                            <option value="" selected disabled>Select a Year Level</option>
                        </select>
                    </div>

                    <div>
                        <label for="subject_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SELECT SUBJECT</label>
                        <select id="subject_id" name="subject_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">

                            <option value="" selected disabled>Select a Subject</option>

                        </select>
                    </div>


                    <div>
                        <label for="prof_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SELECT
                            PROFESSOR</label>
                        <select id="prof_id" name="prof_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">
                            @foreach ($professors as $professor)
                                <option value="{{ $professor->id }}">
                                    {{ $professor->surname }}, {{ $professor->firstname }} {{ $professor->middlename }}
                                </option>
                            @endforeach

                        </select>
                    </div>


                    <div>
                        <label for="section_id"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">SELECT STUDENT'S YEAR AND BLOCK/SECTION
                        </label>
                        <select id="section_id" name="section_id"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500">

                                <option value="" selected disabled> Select a Year and Block/Section

                                </option>

                        </select>
                    </div>

                </div>
                <button type="submit"
                    class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>
                    ASSIGN SUBJECT
                </button>
            </form>
        </div>
    </div>
</div>
<script>
    // JavaScript Variables
    const departmentDropdown = document.querySelector('#department_id');
    const courseDropdown = document.querySelector('#course_id');
    const curriculumDropdown = document.querySelector('#curriculum_id');
    const yearLevelDropdown = document.querySelector('#year_id');
    const subjectDropdown = document.querySelector('#subject_id');
    const sectionDropdown = document.querySelector('#section_id');

    // Assuming this data is passed from the backend
    const courses = @json($courses);
    const curriculums = @json($curriculums);
    const subjects = @json($subjects);
    const departments = @json($departments);
    const sections = @json($section);  // Pass the array of sections from PHP to JavaScript

    let sectionsArray = Object.values(sections); // Converts object to an array of values
    console.log(sectionsArray);  // Check what the array looks like



    // Update the course dropdown when a department is selected
    function updateCourseDropdown() {
        // Clear the course dropdown
        courseDropdown.innerHTML = '<option value="" selected disabled>Select a Course</option>';
        curriculumDropdown.innerHTML = '<option value="" selected disabled>Select a Curriculum</option>';
        yearLevelDropdown.innerHTML = '<option value="" selected disabled>Select a Year Level</option>';
        subjectDropdown.innerHTML = '<option value="" selected disabled>Select a Subject</option>';
        sectionDropdown.innerHTML = '<option value="" selected disabled>Select a Year and Block/Section</option>';

        const selectedDepartmentId = departmentDropdown.value;
        const filteredCourses = courses.filter(course => course.department_id == selectedDepartmentId);

        filteredCourses.forEach(course => {
            const option = document.createElement('option');
            option.value = course.id;
            option.textContent = course.name;
            courseDropdown.appendChild(option);
        });


    }

    // Update the curriculum dropdown when a course is selected
    function updateCurriculumDropdown() {

        curriculumDropdown.innerHTML = '<option value="" selected disabled>Select a Curriculum</option>';
        yearLevelDropdown.innerHTML = '<option value="" selected disabled>Select a Year Level</option>';
        subjectDropdown.innerHTML = '<option value="" selected disabled>Select a Subject</option>';

        const selectedCourseId = courseDropdown.value;
        const filteredCurriculums = curriculums.filter(curriculum => curriculum.course_id == selectedCourseId);

        filteredCurriculums.forEach(curriculum => {
            const option = document.createElement('option');
            option.value = curriculum.id;
            option.textContent = curriculum.name;
            curriculumDropdown.appendChild(option);
        });

    }


    // Update the year level dropdown when a curriculum is selected
    function updateYearLevelDropdown() {

        yearLevelDropdown.innerHTML = '<option value="" selected disabled>Select a Year Level</option>';
        subjectDropdown.innerHTML = '<option value="" selected disabled>Select a Subject</option>';


        const selectedCurriculumId = curriculumDropdown.value;
        const selectedCurriculum = curriculums.find(curriculum => curriculum.id == selectedCurriculumId);
        const filteredYearLevels = [selectedCurriculum]; // Assuming year level is embedded in the curriculum object

        filteredYearLevels.forEach(curriculum => {
            const option = document.createElement('option');
            option.value = curriculum.id;
            option.textContent = curriculum.level; // Adjust if necessary
            yearLevelDropdown.appendChild(option);
        });

    }

    // Update the subject dropdown when a year level is selected
    function updateSubjectDropdown() {

        subjectDropdown.innerHTML = '<option value="" selected disabled>Select a Subject</option>';


        const selectedCurriculumId = curriculumDropdown.value;
        const filteredSubjects = subjects.filter(subject => subject.curriculum_id == selectedCurriculumId);

        filteredSubjects.forEach(subject => {
            const option = document.createElement('option');
            option.value = subject.id;
            option.textContent = subject.name;
            subjectDropdown.appendChild(option);
        });

    }


    function updateSectionDropdown() {

        sectionDropdown.innerHTML = '<option value="" selected disabled>Select a Year and Block/Section</option>';
    
    const selectedCourseId = courseDropdown.value;
    console.log("Selected course ID:", selectedCourseId); // Check if course is selected
    
    if (!selectedCourseId) return;

    const filteredSections = sections.filter(section => section.course_id == selectedCourseId);
    console.log("Filtered Sections:", filteredSections); // Log filtered sections

    filteredSections.forEach(section => {
        const option = document.createElement('option');
        option.value = section.id;
        option.textContent = `${section.year_level} - Block/Section ${section.block}`;
        sectionDropdown.appendChild(option);
    });
}




    // Event listeners
    departmentDropdown.addEventListener('change', updateCourseDropdown);
    courseDropdown.addEventListener('change', updateCurriculumDropdown);
    curriculumDropdown.addEventListener('change', updateYearLevelDropdown);
    yearLevelDropdown.addEventListener('change', updateSubjectDropdown);
    courseDropdown.addEventListener('change', updateSectionDropdown);

</script>
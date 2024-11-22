<!-- Modal toggle -->
<div class="flex justify-center m-5">
    <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block flex items-center gap-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">
     
    <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="10" height="10" fill="currentColor" viewBox="0 0 24 24">
              <path d="M17.133 12.632v-1.8a5.406 5.406 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.955.955 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175ZM6 6a1 1 0 0 1-.707-.293l-1-1a1 1 0 0 1 1.414-1.414l1 1A1 1 0 0 1 6 6Zm-2 4H3a1 1 0 0 1 0-2h1a1 1 0 1 1 0 2Zm14-4a1 1 0 0 1-.707-1.707l1-1a1 1 0 1 1 1.414 1.414l-1 1A1 1 0 0 1 18 6Zm3 4h-1a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z"/>
            </svg> CREATE ANNOUNCEMENT
    </button>
</div>

<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    ADD ANNOUNCEMENT
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form action="#">
                <div class="grid gap-4 mb-4 grid-cols-1">
                    <div>
                        <label for="name"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Announcement
                            Title</label>
                        <input type="text" name="name" id="name"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-green-600 focus:border-green-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            placeholder="Type announcement title" required="">
                    </div>

                    <div>
                        <label for="category"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Recipient/s</label>
                        <div class="grid grid-cols-3">
                            <div class="space-y-2">
                                <input type="checkbox" id="students" name="students" value="students"
                                    class="h-4 w-4 text-green-500 focus:ring-green-500 border-gray-300 rounded">
                                <label for="students"
                                    class="text-sm font-medium text-gray-900 dark:text-white">STUDENTS</label>
                            </div>

                            <div class="space-y-2">
                                <input type="checkbox" id="registrar" name="registrar" value="registrar"
                                    class="h-4 w-4 text-green-500 focus:ring-green-500 border-gray-300 rounded">
                                <label for="registrar"
                                    class="text-sm font-medium text-gray-900 dark:text-white">REGISTRAR</label>
                            </div>

                            <div class="space-y-2">
                                <input type="checkbox" id="programhead" name="programhead" value="programhead"
                                    class="h-4 w-4 text-green-500 focus:ring-green-500 border-gray-300 rounded">
                                <label for="programhead"
                                    class="text-sm font-medium text-gray-900 dark:text-white">PROGRAM
                                    HEAD</label>
                            </div>

                            <div class="space-y-2">
                                <input type="checkbox" id="professor" name="professor" value="professor"
                                    class="h-4 w-4 text-green-500 focus:ring-green-500 border-gray-300 rounded">
                                <label for="professor"
                                    class="text-sm font-medium text-gray-900 dark:text-white">PROFESSOR</label>
                            </div>

                            <div class="space-y-2">
                                <input type="checkbox" id="hr" name="hr" value="hr"
                                    class="h-4 w-4 text-green-500 focus:ring-green-500 border-gray-300 rounded">
                                <label for="hr" class="text-sm font-medium text-gray-900 dark:text-white">HR</label>
                            </div>

                            <div class="space-y-2">
                                <input type="checkbox" id="all" name="all" value="all"
                                    class="h-4 w-4 text-green-500 focus:ring-green-500 border-gray-300 rounded">
                                <label for="all" class="text-sm font-medium text-gray-900 dark:text-white">ALL</label>
                            </div>
                        </div>


                    </div>

                    <div class="">
                        <label for="description"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Description</label>
                        <textarea id="description" rows="4"
                            class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-green-500 focus:border-green-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-green-500 dark:focus:border-green-500"
                            placeholder="Write announcement here"></textarea>
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
                    ADD ANNOUNCEMENT
                </button>
            </form>
        </div>
    </div>
</div>
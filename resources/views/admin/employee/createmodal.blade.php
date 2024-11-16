<!-- Modal toggle -->
<div class="flex justify-center m-5">
    <button id="defaultModalButton" data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="block flex items-center gap-2 text-white bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800" type="button">
     
    <svg class="w-5 h-5 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z" clip-rule="evenodd"/>
                    </svg>
 ADD EMPLOYEE
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
                    ADD EMPLOYEE
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->

            <form class="p-4 md:p-5">

      <div class="grid gap-4 mb-4 grid-cols-4">
        <div class="col-span-4 sm:col-span-1">
            <label for="firstName"class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First Name</label> 
            <input type="text" name="fname"id="fname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" 
            placeholder="First Name"required=""/>
       </div>

       <div class="col-span-4 sm:col-span-1">
            <label for="middleName"class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Middle Name</label>
            <input type="text" name="middleName"id="middleName"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="Middle Name"required=""/>
       </div>

       <div class="col-span-4 sm:col-span-1">
            <label for="surName" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Surname</label>
            <input type="text" name="surName"id="surName"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="Surname" required=""/>
       </div>

       <div class="col-span-4 sm:col-span-1">
            <label for="prefix" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prefix</label>
            <input type="text" name="prefix" id="prefix" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="ex. Mr, Ms." required=""/>
       </div>

       <div class="col-span-4 sm:col-span-4">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Role</label>
            <select id="category" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <option selected="">Select Role</option>
                <option value="Faculty">Faculty</option>
                <option value="Staff">Staff</option>
            </select>
       </div>

       <div class="col-span-4 sm:col-span-4">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
            <select id="category"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <option selected="">Select Position</option>
                <option value="ProgramHead">Program Head</option>
                <option value="Proffessor">Proffessor</option>
                <option value="Hr">Hr</option>
                <option value="AdminPH">Admin</option>
        </select>
       </div>

       <div class="col-span-4 sm:col-span-4">
            <label for="category" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Department</label>
            <select id="category"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                <option selected="">Select Department</option>
                <option value="CECT">College of Engineering and Computer Technology</option>
                <option value="CON">College of Nursing</option>
                <option value="CBA">College of Business and Accountacy</option>
                <option value="CAMS">College of Allied Medical Sciences</option>
                <option value="COED">College of Education</option>
                <option value="CCJE">CCollege of Criminal Justice Education</option>
                <option value="CAS">College of Arts and Sciences</option>
                <option value="CHTM">College of Hospitality and Tourism Management</option>
        </select>
       </div>

       <div class="col-span-4 sm:col-span-1">
            <label for="accountNumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Account Number</label>
            <input type="number" name="accountNumber"id="accountNumber"class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
            placeholder="Account Number" required=""/>
            
       </div>


      </div>
      <div class="flex justify-center">
       <button type="submit" class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                    <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path></svg>
                    ADD EMPLOYEE
                </button>
      </div>
     </form>
        </div>
    </div>
</div>
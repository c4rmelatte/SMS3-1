<button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button"
   class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-white rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
      <path clip-rule="evenodd" fill-rule="evenodd"
         d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
      </path>
   </svg>
</button>

<aside id="logo-sidebar"
   class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0"
   aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-[#38574F] dark:bg-gray-800">
      <a href="{{url('/hr')}}" class="flex items-center text-white ps-2.5 mb-5">
         <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">HR</span>
      </a>
      <ul class="space-y-2 font-medium">
         <li>
            <a href="{{url('/hr/announcement')}}"
               class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-[#1F342E] dark:hover:bg-gray-700 group {{ request()->is('hr/announcement') ? 'bg-[#1F342E]' : '' }}">
               <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd"
                     d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h11.5c.07 0 .14-.007.207-.021.095.014.193.021.293.021h2a2 2 0 0 0 2-2V7a1 1 0 0 0-1-1h-1a1 1 0 1 0 0 2v11h-2V5a2 2 0 0 0-2-2H5Zm7 4a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm-6 4a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM7 6a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H7Zm1 3V8h1v1H8Z"
                     clip-rule="evenodd" />
               </svg>

               <span class="ms-3">ANNOUNCEMENT</span>
            </a>
         </li>


         <li>
            <a href="{{url('/hr/employee')}}"
               class="flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-[#1F342E] dark:hover:bg-gray-700 group {{ request()->is('hr/employee') ? 'bg-[#1F342E]' : '' }}">
               <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd"
                     d="M8 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4H6Zm7.25-2.095c.478-.86.75-1.85.75-2.905a5.973 5.973 0 0 0-.75-2.906 4 4 0 1 1 0 5.811ZM15.466 20c.34-.588.535-1.271.535-2v-1a5.978 5.978 0 0 0-1.528-4H18a4 4 0 0 1 4 4v1a2 2 0 0 1-2 2h-4.535Z"
                     clip-rule="evenodd" />
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">EMPLOYEE</span>
            </a>
         </li>
      </ul>
   </div>
</aside>
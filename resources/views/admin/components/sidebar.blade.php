<style>
   .menu-item {
      position: relative;
      display: flex;
      align-items: center;
      padding: 10px 16px;
      transition: background-color 0.1s ease-in-out;
   }

   .menu-item::before {
      content: "";
      position: absolute;
      left: 0;
      top: 0;
      bottom: 0;
      width: 4px;
      background-color: #fff;
      transform: scaleY(0);
      transition: transform 0.3s ease-in-out;
   }

   .menu-item:hover,
   .menu-item.active {
      /* background-color: #548C7D; */
      background: #2F4A2D;
   }

   .menu-item:hover::before,
   .menu-item.active::before {
      transform: scaleY(1);
   }
</style>

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
   <div class="h-full px-3 py-4 overflow-y-auto bg-[#375735] dark:bg-gray-800">
      <div class="flex justify-center mb-6">
         <img src="{{ asset('images/L2.png')}}" alt="School-Logo" class="h-48 w-auto">
      </div>
      <a href="{{url('/admin')}}" class="flex items-center text-white ps-2.5 mb-5">
         <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">REGISTRAR</span>
      </a>
      <ul class="space-y-2 font-medium">
         <li>
            <a href="{{url('/admin/announcement')}}"
               class="menu-item flex items-center p-2 text-white rounded-r-lg dark:text-white hover:bg-[#1F342E] dark:hover:bg-gray-700 group {{ request()->is('admin/announcement') ? 'active' : '' }}">
               <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path
                     d="M17.133 12.632v-1.8a5.406 5.406 0 0 0-4.154-5.262.955.955 0 0 0 .021-.106V3.1a1 1 0 0 0-2 0v2.364a.955.955 0 0 0 .021.106 5.406 5.406 0 0 0-4.154 5.262v1.8C6.867 15.018 5 15.614 5 16.807 5 17.4 5 18 5.538 18h12.924C19 18 19 17.4 19 16.807c0-1.193-1.867-1.789-1.867-4.175ZM6 6a1 1 0 0 1-.707-.293l-1-1a1 1 0 0 1 1.414-1.414l1 1A1 1 0 0 1 6 6Zm-2 4H3a1 1 0 0 1 0-2h1a1 1 0 1 1 0 2Zm14-4a1 1 0 0 1-.707-1.707l1-1a1 1 0 1 1 1.414 1.414l-1 1A1 1 0 0 1 18 6Zm3 4h-1a1 1 0 1 1 0-2h1a1 1 0 1 1 0 2ZM8.823 19a3.453 3.453 0 0 0 6.354 0H8.823Z" />
               </svg>

               <span class="ms-3">ANNOUNCEMENTS</span>
            </a>
         </li>

         <li>
            <a href="{{url('/admin/building')}}"
               class="menu-item flex items-center p-2 text-white rounded-r-lg dark:text-white hover:bg-[#1F342E] dark:hover:bg-gray-700 group {{ request()->is('admin/building') ? 'active' : '' }}">
               <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd"
                     d="M4 4a1 1 0 0 1 1-1h14a1 1 0 1 1 0 2v14a1 1 0 1 1 0 2H5a1 1 0 1 1 0-2V5a1 1 0 0 1-1-1Zm5 2a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1h-1Zm-5 4a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1H9Zm5 0a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1h1a1 1 0 0 0 1-1v-1a1 1 0 0 0-1-1h-1Zm-3 4a2 2 0 0 0-2 2v3h2v-3h2v3h2v-3a2 2 0 0 0-2-2h-2Z"
                     clip-rule="evenodd" />
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">BUILDINGS</span>
            </a>
         </li>


         <li>
            <a href="{{url('/admin/departments')}}"
               class="menu-item flex items-center p-2 text-white rounded-r-lg dark:text-white hover:bg-[#1F342E] dark:hover:bg-gray-700 group {{ request()->is('admin/departments') ? 'active' : '' }}">
               <svg class="w-6 h-6 text-text-white dark:text-white" aria-hidden="true"
                  xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd"
                     d="M10.915 2.345a2 2 0 0 1 2.17 0l7 4.52A2 2 0 0 1 21 8.544V9.5a1.5 1.5 0 0 1-1.5 1.5H19v6h1a1 1 0 1 1 0 2H4a1 1 0 1 1 0-2h1v-6h-.5A1.5 1.5 0 0 1 3 9.5v-.955a2 2 0 0 1 .915-1.68l7-4.52ZM17 17v-6h-2v6h2Zm-6-6h2v6h-2v-6Zm-2 6v-6H7v6h2Z"
                     clip-rule="evenodd" />
                  <path d="M2 21a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1Z" />
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">DEPARTMENTS</span>
            </a>
         </li>



         <li>
            <a href="{{url('/admin/courses')}}"
               class="menu-item flex items-center p-2 text-white rounded-r-lg dark:text-white hover:bg-[#1F342E] dark:hover:bg-gray-700 group {{ request()->is('admin/courses') ? 'active' : '' }}">
               <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd"
                     d="M11 4.717c-2.286-.58-4.16-.756-7.045-.71A1.99 1.99 0 0 0 2 6v11c0 1.133.934 2.022 2.044 2.007 2.759-.038 4.5.16 6.956.791V4.717Zm2 15.081c2.456-.631 4.198-.829 6.956-.791A2.013 2.013 0 0 0 22 16.999V6a1.99 1.99 0 0 0-1.955-1.993c-2.885-.046-4.76.13-7.045.71v15.081Z"
                     clip-rule="evenodd" />
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">COURSES</span>
            </a>
         </li>

         <li>
            <a href="{{url('/admin/curriculum')}}"
               class="menu-item flex items-center p-2 text-white rounded-r-lg dark:text-white hover:bg-[#1F342E] dark:hover:bg-gray-700 group {{ request()->is('admin/curriculum') ? 'active' : '' }}">
               <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path
                     d="M7.833 2c-.507 0-.98.216-1.318.576A1.92 1.92 0 0 0 6 3.89V21a1 1 0 0 0 1.625.78L12 18.28l4.375 3.5A1 1 0 0 0 18 21V3.889c0-.481-.178-.954-.515-1.313A1.808 1.808 0 0 0 16.167 2H7.833Z" />
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">CURRICULUM</span>
            </a>
         </li>



         <li>
            <a href="{{url('/admin/subject')}}"
               class="menu-item flex items-center p-2 text-white rounded-r-lg dark:text-white hover:bg-[#1F342E] dark:hover:bg-gray-700 group {{ request()->is('admin/subject') ? 'active' : '' }}">
               <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd"
                     d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z"
                     clip-rule="evenodd" />
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">SUBJECTS</span>
            </a>
         </li>


         <li>
            <a href="{{url('/admin/section')}}"
               class="menu-item flex items-center p-2 text-white rounded-r-lg dark:text-white hover:bg-[#1F342E] dark:hover:bg-gray-700 group {{ request()->is('admin/section') ? 'active' : '' }}">
               <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                  width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd"
                     d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z"
                     clip-rule="evenodd" />
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">SECTION</span>
            </a>
         </li>

         @php
         $userID = session('userID');
         $userPosition = session('userPosition');
        @endphp

         @if ($userID && $userPosition == 'admin')

          <li>
            <a href="{{ route('admin.show.dtr', ['userID' => $userID]) }}"
               class="menu-item flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-[#1F342E] dark:hover:bg-gray-700 group {{ request()->routeIs('admin.show.dtr') ? '' : '' }}">
               <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                 width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                 <path fill-rule="evenodd"
                   d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z"
                   clip-rule="evenodd" />
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">DTR</span>
            </a>
          </li>

       @endif

      </ul>
   </div>

   <!-- <div id="logo-sidebar">
      <div style="height: 2000px; background: linear-gradient(to bottom, #fff, #ccc);">
         Dummy content to test scrolling.
      </div>
   </div> -->

</aside>
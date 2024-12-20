<style>
   .menu-item {
      position: relative;
      display: flex;
      align-items: center;
      padding: 14px 16px;
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
   <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar" aria-controls="logo-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-white rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
   <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>

@php
    $userID = session('userID');
    $userPosition = session('userPosition');
@endphp

<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-[#375735] dark:bg-gray-800">
      <div class="flex justify-center mb-6">
         <img src="{{ asset('images/L2.png')}}" alt="School-Logo" class="h-48 w-auto">
      </div>
      <a href="{{url('/professor')}}" class="flex items-center text-white ps-2.5 mb-5">
         <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">PROFESSOR</span>
      </a>
      <ul class="space-y-2 font-medium">      


         <li>
            <a href="{{url('/professor/announcement')}}" class="menu-item flex items-center p-2 text-white rounded-r-lg dark:text-white hover:bg-[#1F342E] dark:hover:bg-gray-700 group {{ request()->is('professor/announcement') ? 'active' : '' }}">
            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd"/>
                    </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">ANNOUNCEMENT</span>
            </a>
         </li>

               <li>
               <a href="{{ route('show.subjects', ['userID' => $userID]) }}" class="menu-item flex items-center p-2 text-white rounded-r-lg dark:text-white hover:bg-[#1F342E] dark:hover:bg-gray-700 group {{ request()->routeIs('show.subjects') ? 'active' : '' }}">
                <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                   <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
               </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">ATTENDANCE</span>
            </a>
               </li>

               <li>
            <a href="{{url('/professor/subjects')}}" class="menu-item flex items-center p-2 text-white rounded-r-lg dark:text-white hover:bg-[#1F342E] dark:hover:bg-gray-700 group {{ request()->is('professor/activities') ? 'active' : '' }}">
            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                  <path fill-rule="evenodd" d="M5 3a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h11.5c.07 0 .14-.007.207-.021.095.014.193.021.293.021h2a2 2 0 0 0 2-2V7a1 1 0 0 0-1-1h-1a1 1 0 1 0 0 2v11h-2V5a2 2 0 0 0-2-2H5Zm7 4a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h.5a1 1 0 1 1 0 2H13a1 1 0 0 1-1-1Zm-6 4a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1Zm0 3a1 1 0 0 1 1-1h6a1 1 0 1 1 0 2H7a1 1 0 0 1-1-1ZM7 6a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h3a1 1 0 0 0 1-1V7a1 1 0 0 0-1-1H7Zm1 3V8h1v1H8Z" clip-rule="evenodd"/>
            </svg>

            <span class="flex-1 ms-3 whitespace-nowrap">SUBJECTS</span>
            </a>
         </li>

         <li>
         <a href="{{url('/professor/schedule')}}" class="menu-item flex items-center p-2 text-white rounded-r-lg dark:text-white hover:bg-[#1F342E] dark:hover:bg-gray-700 group {{ request()->is('professor/schedule') ? 'active' : '' }}">
         <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
               <path fill-rule="evenodd" d="M5 5a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1h1a1 1 0 0 0 1-1 1 1 0 1 1 2 0 1 1 0 0 0 1 1 2 2 0 0 1 2 2v1a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a2 2 0 0 1 2-2ZM3 19v-7a1 1 0 0 1 1-1h16a1 1 0 0 1 1 1v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2Zm6.01-6a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm-10 4a1 1 0 1 1 2 0 1 1 0 0 1-2 0Zm6 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0Zm2 0a1 1 0 1 1 2 0 1 1 0 0 1-2 0Z" clip-rule="evenodd"/>
                  </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">SCHEDULE</span>
            </a>
         </li>

@if ($userID && $userPosition == 'professors')

         <li>
            <a href="{{ route('professor.show.dtr', ['userID' => $userID]) }}" class="menu-item flex items-center p-2 text-white rounded-lg dark:text-white hover:bg-[#1F342E] dark:hover:bg-gray-700 group {{ request()->routeIs('professor.show.dtr') ? 'active' : '' }}">
            <svg class="w-6 h-6 text-white dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M6 2a2 2 0 0 0-2 2v15a3 3 0 0 0 3 3h12a1 1 0 1 0 0-2h-2v-2h2a1 1 0 0 0 1-1V4a2 2 0 0 0-2-2h-8v16h5v2H7a1 1 0 1 1 0-2h1V2H6Z" clip-rule="evenodd"/>
                    </svg>
               <span class="flex-1 ms-3 whitespace-nowrap">DTR</span>
            </a>
         </li>  

@endif

      </ul>
   </div>
</aside>

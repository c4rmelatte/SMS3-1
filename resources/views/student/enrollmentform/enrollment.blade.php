<div class="mt-4">

  <button type="button" id="print" onclick="window.print()"
    class="focus:outline-none text-white bg-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 mb-2 dark:focus:ring-yellow-900">PRINT</button>

  <div class="grid grid-cols-1">

    <div class="">
      <label for="lastname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name:</label>
      <div class="grid grid-cols-3 gap-3 mb-3">
        <input type="text" id="lastname" placeholder="Last name" value="{{$lastName}}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          readonly />

        <input type="text" id="firstname" placeholder="First name" value="{{$firstName}}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          readonly />

        <input type="text" id="middlename" placeholder="Middle name" value="{{$middleName}}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          readonly />
      </div>
    </div>


    <div class="grid grid-cols-3 gap-3">
      <div>
        <label for="user-id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Student
          Id:</label>
        <input placeholder="XX-XXXX-XX" type="text" id="user-id" value="{{$studentId}}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          readonly />
      </div>
      <div>
        <label for="gender" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Gender:</label>
        <input id="gender" readonly  value="{{$Gender}}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </input>
      </div>
      <div>
        <label for="course" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Course/Major:</label>
        <input id="course" readonly value="{{$Course}}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </input>
      </div>
      <div>

        <label for="semester" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Semester:</label>
        <input id="semester" readonly value="{{$Semester}}"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
        </input>
      </div>
      <div>
        <label for="yearSection" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Year &
          Section:</label>
        <input type="text" id="yearSection" value="{{$yearSection}}" placeholder="year & section"
          class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
          readonly />
      </div>
    </div>

    <hr class="my-7">




    <div class="mt-4">
      <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
            <th id="subject-code" scope="col" class="px-6 py-3">
              SUBJECT CODE
            </th>
            <th id="subject-title" scope="col" class="px-6 py-3">SUBJECT TITLE</th>
            <th id="schedule" scope="col" class="px-6 py-3">SCHEDULE</th>
            <th id="room" scope="col" class="px-6 py-3">ROOM #</th>
            <th id="lec-lab-units" scope="col" class="px-6 py-3">LEC/LAB UNITS</th>
            <th id="total-units" scope="col" class="px-6 py-3">TOTAL UNITS</th>
            <th id="rate-per-unit" scope="col" class="px-6 py-3">RATE/UNIT</th>
            <th id="total-subject-fee" scope="col" class="px-6 py-3">TOTAL SUBJECT FEE</th>
          </tr>
        </thead>
        <tbody>
          <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
              GEC3
            </th>
            <td class="px-6 py-4">
              Secret
            </td>
            <td class="px-6 py-4">
              TTH 8:00-10:00
            </td>
            <td class="px-6 py-4">
              209
            </td>
            <td class="px-6 py-4">
              2/3
            </td>
            <td class="px-6 py-4">
              5
            </td>
            <td class="px-6 py-4">
              $536
            </td>
            <td class="px-6 py-4">
              $3,000
            </td>
          </tr>
        </tbody>
      </table>
    </div>


    <div class="max-w-sm mt-5">
      <label for="total-units" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total Units:</label>
      <input type="text" name="totalUnits" id="totalUnits"
        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
        readonly>
    </div>
  </div>
</div>
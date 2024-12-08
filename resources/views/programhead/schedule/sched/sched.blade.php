@extends('programhead.programheadindex')
@section('content')

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
            
          </tr>
        </thead>
      </table>
    </div>

  @endsection

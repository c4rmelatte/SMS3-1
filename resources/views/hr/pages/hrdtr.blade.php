@extends('hr.hrindex')
@section('content')

<style>
    body {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
        background: #fff;
    }

    #dtrContainer {
        margin: 25px 50px 0 300px;
    }

    .name-line {
        display: flex;
        align-items: left;
        flex-direction: column;
        gap: 5px;
        background-color: #e0e0e0;
        padding: 10px;
        border-radius: 8px;
        font-weight: bold;
        color: #333;
        width: 450px;
        border: solid 1px gray;
        margin-bottom: 17px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .name-line span {
        background-color: transparent;
        border: none;
        font-weight: bold;
        color: #333;
        text-align: left;
    }

    .date-picker {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
        justify-content: space-between;

    }

    .date-picker .inputs {
        display: flex;
        gap: 10px;
        align-items: center;
    }

    .date-picker label {
        font-weight: bold;
        background-color: #e0e0e0;
    }

    .date-picker select,
    .date-picker button {
        padding: 5px 10px;
        font-weight: bold;
        color: #333;
        background-color: #e0e0e0;
        border: none;
        border-radius: 5px;
    }

    .date {
        background-color: #e0e0e0;
        border-radius: 5px;
        border: solid 1px gray;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-submit {
        background-color: #2f725f !important;
        color: #e0e0e0 !important;
        width: 80px;
        padding: 8px 20px;
        font-weight: bold;
        border: none;
        border-radius: 10px;
        cursor: pointer;
        font-size: 16px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }


    .btn-print {
        background-color: #F1CA57 !important;
        color: white !important;
        width: 80px;
        padding: 8px 10px;
        font-weight: bold;
        border: none;
        margin-bottom: 20px;
        border-radius: 10px;
        cursor: pointer;
        font-size: 16px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    }

    .date-picker {
        display: flex;
        align-items: center;
        gap: 10px;
        margin-bottom: 20px;
        justify-content: space-between;

    }

    table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 20px;
        background-color: #f2f2f2;
    }

    thead th {
        background-color: #1F342E;
        color: #fff;
        font-weight: bold;
        padding: 10px;
        text-align: center;
        border: 1px solid #1F342E;
    }

    tbody td {
        text-align: center;
        padding: 10px;
        border: 1px solid #ccc;
    }

    tbody td:nth-child(1),
    tbody td:nth-child(7) {
        color: black;
        font-weight: bold;
    }

    tbody tr:hover {
        background-color: #e9e9e9;
    }

    #salaryPeriodLabel {
        font-weight: bold;
    }
</style>

<div id="dtrContainer">

@if($employee->isEmpty())
    <p style="font-weight:bold; font-size: 20px">no employee dtr data.</p>
@else

    <!-- info & print -->
    <div id="salaryPeriodLabel">Salary Period:</div>
    <div class="date-picker">
            <form id="dropdownForm" action="{{ route('show.dateDTR') }}" method="get">
                <select id="dropdown" name="selected_date" onchange="submitForm()">
                    <option disabled selected>Select a date</option>
                    @foreach($monthYears as $monthYear)

                        <option>{{ $monthYear }}</option>

                    @endforeach
                </select>
                <input type="hidden" name="employeeID" value="{{ $id }}">
            </form>
        <button class="btn-print" id="print" onclick="window.print()">PRINT</button>
    </div>

    <!-- table -->

        <table>
            <thead>
                <tr>
                    <th>DATE</th>
                    <th>TIME IN</th>
                    <th>LATE</th>
                    <th>TIME OUT</th>
                    <th>UNDERTIME</th>
                    <th>OVERTIME</th>
                    <th>HOURS WORKED</th>
                </tr>
            </thead>
            <tbody>
                @foreach($employee as $dtr)

                    <tr>
                        <td>{{ $dtr->day }}</td>
                        <td>{{ $dtr->time_in }}</td>
                        <td>{{ $dtr->late }}</td>
                        <td>{{ $dtr->time_out }}</td>
                        <td>{{ $dtr->undertime }}</td>
                        <td>{{ $dtr->overtime }}</td>
                        <td>{{ $dtr->hours_worked }}</td>
                    </tr>

                @endforeach
            </tbody>

        </table>

    <!-- SCRIPT -->
    <script>

        const dropdown = document.querySelector("#dropdown");

        dropdown.value = '{{ $monthYearDisplay }}'

        function submitForm() {

            const selectedOption = dropdown.options[dropdown.selectedIndex];
            const selectedText = selectedOption.text;

            document.querySelector("#dropdownForm").submit();
        }

    </script>
@endif
</div>



@endsection
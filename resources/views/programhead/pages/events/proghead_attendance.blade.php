@extends('programhead.programheadindex')
@section('content')
<div>
<head>

    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>


        body {
           
            margin-left: 15%;
            flex-wrap: wrap;
            padding: 0;
            font-family: "Poppins", sans-serif;
            background: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
            padding: 20px;
            gap: 15px;
        }

        .top {
            all: revert;
            display: flex;
            justify-content: center;
            flex-direction: row;
        }

        /* Styles for the program head section */
        .progHead {
            all: revert;
            display: flex;
            flex-direction: column;
            gap: 5px;
            background-color: #e0e0e0;
            padding: 10px;
            border-radius: 8px;
            font-weight: bold;
            color: #333;
            width: 450px;
            border: solid 1px gray;
            margin: 20px 10px 17px 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .progHead span {
            all: revert;
            display: block;
            color: #333;
        }

        /* Styles for the event section */
        .event {
            all: revert;
            display: flex;
            flex-direction: column;
            gap: 5px;
            background-color: rgba(var(--bs-white-rgb), var(--bs-bg-opacity)) !important;
            padding: 10px;
            border-radius: 8px;
            font-weight: bold;
            color: #333;
            font-size: 25px;
            margin-left: 30px;
        }

        .event #eventName {
            all: revert;
            font-size: 1.2em;
            color: #3b5547;
        }

        .event #courseSec {
            all: revert;
            font-size: .9em;
            font-weight: bold;
            color: #3b5547;
            margin-top: 0;
        }


        
        /* Additional style for the bottom container */
        .bottom {
            all: revert;
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 10px;  
           
        }

        .buttons {
            all: revert;
            margin: 0 10px;
            background-color: #3b5547;
            color: #e0e0e0;
            padding: 10px 20px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1em;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        .dateTime {
            all: revert;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            gap: 5px;
            background-color: #e0e0e0;
            padding-left: 10px;
            padding-top: 10px;
            border-radius: 8px;
            font-weight: bold;
            color: #333;
            width: 180px;
            border: solid 1px gray;
            margin: 4px 10px 17px 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            
        }

        .dateTime span {
            all: revert;
            font-size: 14px;
            color: #333;
        }

        /* New style for time container */
        .timeContainer {
            all: revert;
            display: flex;
            align-items: center;
            gap: 5px;
        }



        /* Styles for the button */
        #viewEvent {
            all: revert;
            background-color: #3b5547;
            color: #e0e0e0;
            padding: 10px 20px;
            font-weight: bold;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            font-size: 1em;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
        }

        #viewEvent:hover {
            all: revert;
            background-color: #2f4537;
        }


        table {
            all: revert;
            width: 99%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #f2f2f2;
            margin-left: 10px;
            margin-right: 10px;
        }

        thead th {
            all: revert;
            background-color: #1F342E;
            color: #fff;
            font-weight: bold;
            padding: 10px;
            text-align: center;
            border: 1px solid #1F342E;
        }

        tbody td {
            all: revert;
            text-align: center;
            padding: 10px;
            border: 1px solid #ccc;
        }

        tbody tr:hover {
            all: revert;
            background-color: #e9e9e9;
        }
    </style>
</head>
<body>

    <div class="top">
       
        <div class="event">
            <span id="eventName">{{ $eventChecklist[0]->event_name }}</span>
        </div>
    </div>

    <div class="progHead">
            <span id="name">{{ $programHeadName->surname }}, {{ $programHeadName->firstname }} {{ $programHeadName->middlename }} (Program Head)</span>
            <span id="id">{{ $eventChecklist[0]->program_head }}</span>
    </div>
    

    <div class="bottom">
        <div class="dateTime">
            <span id="date">{{ $eventChecklist[0]->date }}</span>
            <div class="timeContainer">
                <span id="startTime">{{ $eventChecklist[0]->time_start }}</span>
                <p>_</p>
                <span id="endTime">{{ $eventChecklist[0]->time_end }}</span>
            </div>
        </div>

        <div>
    
        <button class="buttons" data-bs-toggle="modal" data-bs-target="#descriptionModal">DESCRIPTION</button>
        <button class="buttons" onclick="document.getElementById('updateEventAttendanceForm').submit()" class="btn-add" id="add">SAVE</button>
        <button class="buttons" data-bs-toggle="modal" data-bs-target="#editModal" class="btn-add" id="add">EDIT</button>
        <button class="buttons" onclick="if(confirm('Are you sure you want to delete this?')) { document.getElementById('deleteEventAttendanceForm').submit() }" class="btn-add" id="add">DELETE</button>

        
        </div>
    </div>

    <!-- TABLE -->

    <form id="updateEventAttendanceForm" action="{{ route('update.event') }}" method="post">
    @csrf
    @method('PUT')
        <input type="hidden" name="eventName" value="{{ $eventChecklist[0]->event_name ?? '' }}">
        <div class="table">
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>BLOCK</th>
                        <th>NAME</th>
                        <th>CHECKLIST</th>
                    </tr>
                </thead>
                <tbody>
        
                    @if($eventChecklist->isEmpty())
                            <tr>
                                <td>NO DATA</td>
                                <td>NO DATA</td>
                                <td>NO DATA</td>
                            </tr>
                        @else
                            @foreach($eventChecklist as $student)
                                <tr>
                                    <td>{{ $student->student_id }}</td>
                                    <td>{{ $student->course_year_block }}</td>
                                    <td>{{ $student->student_name }}</td>
                                    <td>
                                        <input type="checkbox" name="attended[]" value="{{ $student->student_id }}" {{ $student->checklist ? 'checked' : '' }}>
                                    </td>
                                </tr>
                            @endforeach
                        @endif

                </tbody>
            </table>
        </div>
    </form>

    <form id="editEventAttendanceForm" action="{{ route('edit.event') }}" method="get">
        <input type="hidden" name="eventName" value="{{ $eventChecklist[0]->event_name ?? '' }}">
    </form>

    <form id="deleteEventAttendanceForm" action="{{ route('delete.event') }}" method="post">
    @csrf
    @method('DELETE')
        <input type="hidden" name="eventName" value="{{ $eventChecklist[0]->event_name ?? '' }}">
    </form>

    <!-- description modal -->
    <div class="modal fade" id="descriptionModal" tabindex="-1" aria-labelledby="descriptionModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="descriptionModalLabel">Event Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>  
                    <div class="modal-body">
                        <div class="mb-3">
                        <textarea id="eventDescription" class="form-control" rows="4" style="height: 500px; overflow-y: auto; resize: none;" readonly>{{ $eventChecklist[0]->event_description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- description modal -->
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Event</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>  
                    <div class="modal-body">
                    <form id="insertUpdatedEventForm" action="{{ route('insert.edit.event') }}" method="post">
                    @csrf
                    @method('PUT')
                        <div class="container">
                        <label for="eventName">EVENT NAME: 
                            @if(session('alert'))
                                <span style="color: red;">{{ session('alert') }}</span>
                            @endif
                        </label>
                            <input type="text" id="eventName" name="eventName" value="{{ $event->event_name }}" readonly required>

                            <div class="date-time-group">
                                <div>
                                    <label for="date">DATE:</label>
                                    <input type="date" id="date" name="date" value="{{ $event->date }}" required>
                                </div>
                                
                                <div class="time">
                                    <label for="time">TIME:</label>
                                    <div style="display: flex; gap: 10px;">
                                        <input type="time" id="startTime" name="timeStart" value="{{ $event->time_start }}" required>
                                        <p>-</p>
                                        <input type="time" id="endTime" name="timeEnd" value="{{ $event->time_end }}" required>
                                    </div>
                                </div>
                            </div>

                            <label for="description">DESCRIPTION:</label>
                            <textarea id="description" name="description" rows="4" required>{{ $event->event_description }}</textarea>

                            </div>
                        </form>

                        <div class="create mt-3 text-end">
                            <button onclick="document.getElementById('insertUpdatedEventForm').submit()" class="btn-create" id="btnCreate">Update Event</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Function to convert 24-hour format to 12-hour format with AM/PM
        function convertTo12HourFormat(hour, minute) {
            let hours = parseInt(hour, 10);
            const ampm = hours >= 12 ? 'PM' : 'AM';
            hours = hours % 12;
            hours = hours ? hours : 12; // The hour '0' should be '12'
            return `${hours}:${minute} ${ampm}`;
        }

        // Convert both start and end times when the page loads
        window.onload = function() {    
            // Get the start time and end time elements
            const startTimeElement = document.getElementById('startTime');
            const endTimeElement = document.getElementById('endTime');

            // Get the time values from the spans
            const startTime = startTimeElement.textContent.trim();
            const endTime = endTimeElement.textContent.trim();

            // Split the time into hour and minute
            const [startHour, startMinute] = startTime.split(':');
            const [endHour, endMinute] = endTime.split(':');

            // Convert both times to 12-hour format
            const formattedStartTime = convertTo12HourFormat(startHour, startMinute);
            const formattedEndTime = convertTo12HourFormat(endHour, endMinute);

            // Set the new formatted time back to the spans
            startTimeElement.textContent = formattedStartTime;
            endTimeElement.textContent = formattedEndTime;
        };

        // Function to convert date from yyyy-MM-dd to "M. d, Y"
        function formatDateToReadable(dateStr) {
            const date = new Date(dateStr);
            
            // Array of month abbreviations
            const months = ["Jan.", "Feb.", "Mar.", "Apr.", "May.", "Jun.", "Jul.", "Aug.", "Sep.", "Oct.", "Nov.", "Dec."];
            
            // Format the date as "M. d, Y"
            const formattedDate = `${months[date.getMonth()]} ${date.getDate()}, ${date.getFullYear()}`;
            return formattedDate;
        }

        // Apply the function on page load
        window.onload = function() {
            const dateElement = document.getElementById('date');
            const originalDate = dateElement.textContent.trim();
            
            // Format and update the text content
            dateElement.textContent = formatDateToReadable(originalDate);
        };
    </script>

</body>
</div>
@endsection
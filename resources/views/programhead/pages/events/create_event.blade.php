<div>
<head>

    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">

    <style>
        body {
            margin: 10px;
            padding: 10px;
            font-family: "Poppins", sans-serif;
            background: #f2f3ed;
        }

        .container {
            width: 100%; 
            margin: 0 auto;
            background-color: #90BDB1;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            margin-top: 10px;
            display: block;
        }

        input[type="text"], input[type="date"], input[type="time"], textarea, select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
        }

        input[type="time"] {
            width: 50%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.1);
        }

        p{
            margin-top: 13px;
        }

        .btn-create {
            background-color: #2f725f;
            color: #e0e0e0;
            width: 10%;
            padding: 10px;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
            transition: background-color 0.3s;
            margin-right: 7%;
        }

        .btn-create:hover {
            background-color: #245d4a;
        }

        .date-time-group {
            display: flex;
            gap: 10px;
            align-items: flex-start; 
        }

        .date-time-group div {
            flex: 1; 
        }

        .time {
            display: flex;
            flex-direction: column;
        }
        
        .selected-participants {
            margin: 10px;
            padding: 5px;
            background-color: #f2f2f2;
            border-radius: 5px;
            display: inline-block;
            cursor: pointer;
        }
    </style>
</head>
<body>

<form id="insertEventForm" action="{{ route('insert.events') }}" method="post">
@csrf
    <div class="container">
    <label for="eventName">EVENT NAME: 
        @if(session('alert'))
            <span style="color: red;">{{ session('alert') }}</span>
        @endif
    </label>
        <input type="text" id="eventName" name="eventName" required>

        <div class="date-time-group">
            <div>
                <label for="date">DATE:</label>
                <input type="date" id="date" name="date" required>
            </div>
            
            <div class="time">
                <label for="time">TIME:</label>
                <div style="display: flex; gap: 10px;">
                    <input type="time" id="startTime" name="timeStart" required>
                    <p>-</p>
                    <input type="time" id="endTime" name="timeEnd" required>
                </div>
            </div>
        </div>

        <label for="description">DESCRIPTION:</label>
        <textarea id="description" name="description" rows="4" required></textarea>

        <label for="participants">SELECT PARTICIPANTS:</label>
            <select id="participants" name="participants">
                <option value="">Select</option>
                @foreach($courseYearBlocks as $courseYearBlock)
                    <option value="{{ $courseYearBlock }}">{{ $courseYearBlock }}</option>
                @endforeach
            </select>
            
            <p>Selected Participants:</p>
            <!-- Display selected participants here -->
            <div id="selectedParticipantsContainer"></div>

            <input type="hidden" name="programHeadID" value="{{ $programHeadID }}">
        </div>
    </form>

    <div class="create mt-3 text-end">
        <button onclick="document.getElementById('insertEventForm').submit()" class="btn-create" id="btnCreate">+ Add Event</button>
    </div>

    <script>

    const participantsSelect = document.getElementById('participants');
    const selectedParticipantsContainer = document.getElementById('selectedParticipantsContainer');
    let selectedParticipantsArray = [];

    // Add selected participant
    participantsSelect.addEventListener('change', () => {
        const selectedOption = participantsSelect.options[participantsSelect.selectedIndex];
        const selectedValue = selectedOption.value;
        if (selectedValue) {
            // Add to array
            selectedParticipantsArray.push(selectedValue);

            // Remove from dropdown
            selectedOption.remove();

            // Add hidden input for each selected value
            const hiddenInput = document.createElement('input');
            hiddenInput.type = 'hidden';
            hiddenInput.name = 'selectedParticipants[]';
            hiddenInput.value = selectedValue;
            selectedParticipantsContainer.appendChild(hiddenInput);

            // Add to display container
            const participantDiv = document.createElement('div');
            participantDiv.className = 'selected-participants';
            participantDiv.textContent = selectedValue;
            participantDiv.onclick = () => {
                // Reinsert to dropdown
                const option = document.createElement('option');
                option.value = selectedValue;
                option.textContent = selectedValue;
                participantsSelect.appendChild(option);

                // Remove from array
                selectedParticipantsArray = selectedParticipantsArray.filter(p => p !== selectedValue);

                // Remove hidden input and display div
                selectedParticipantsContainer.removeChild(hiddenInput);
                participantDiv.remove();
            };
            selectedParticipantsContainer.appendChild(participantDiv);
        }
    });
</script>
</body>
</div>
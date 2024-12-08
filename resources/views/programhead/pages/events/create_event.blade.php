@extends('programhead.programheadindex')
@section('content')
<head>
    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">




</head>


<body class="m-2 p-2 font-sans bg-[   rgba(var(--bs-white-rgb), var(--bs-bg-opacity))]">
    <form id="insertEventForm" action="{{ route('insert.events') }}" method="post">
        @csrf
        <div class="container mx-auto bg-[#90BDB1] p-6 rounded-lg shadow-lg">
            <label for="eventName" class="font-bold mt-2 block">EVENT NAME:
                @if(session('alert'))
                    <span class="text-red-500">{{ session('alert') }}</span>
                @endif
            </label>
            <input type="text" id="eventName" name="eventName" required
                class="w-full p-3 mt-1 mb-3 border border-gray-300 rounded-lg shadow-sm">

            <div class="date-time-group flex gap-4 mb-4">
                <div class="flex-1">
                    <label for="date" class="block font-bold">DATE:</label>
                    <input type="date" id="date" name="date" required
                        class="w-full p-3 mt-1 mb-3 border border-gray-300 rounded-lg shadow-sm">
                </div>

                <div class="flex-1">
                    <label for="time" class="block font-bold">TIME:</label>
                    <div class="flex gap-2">
                        <input type="time" id="startTime" name="timeStart" required
                            class="w-1/2 p-3 mt-1 mb-3 border border-gray-300 rounded-lg shadow-sm">
                        <p class="mt-3">-</p>
                        <input type="time" id="endTime" name="timeEnd" required
                            class="w-1/2 p-3 mt-1 mb-3 border border-gray-300 rounded-lg shadow-sm">
                    </div>
                </div>
            </div>

            <label for="description" class="block font-bold">DESCRIPTION:</label>
            <textarea id="description" name="description" rows="4" required
                class="w-full p-3 mt-1 mb-3 border border-gray-300 rounded-lg shadow-sm"></textarea>

            <label for="participants" class="block font-bold">SELECT PARTICIPANTS:</label>
            <select id="participants" name="participants"
                class="w-full p-3 mt-1 mb-3 border border-gray-300 rounded-lg shadow-sm">
                <option value="">Select</option>
                @foreach($courseYearBlocks as $courseYearBlock)
                    <option value="{{ $courseYearBlock }}">{{ $courseYearBlock }}</option>
                @endforeach
            </select>

            <p class="mt-4">Selected Participants:</p>
            <div id="selectedParticipantsContainer" class="space-y-2"></div>

            <input type="hidden" name="programHeadID" value="{{ $programHeadID }}">
        </div>

        <!-- Submit Button -->
        <div class="mt-5 flex justify-center">
            <button type="button" onclick="document.getElementById('insertEventForm').submit()"
                class="bg-[#2f725f] text-[#e0e0e0] py-3 px-6 font-bold rounded-xl shadow-lg hover:bg-[#245d4a] transition-all">
                + Add Event
            </button>
        </div>
    </form>

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
                participantDiv.className = 'selected-participants bg-[#f2f2f2] p-2 rounded cursor-pointer inline-block';
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
@endsection
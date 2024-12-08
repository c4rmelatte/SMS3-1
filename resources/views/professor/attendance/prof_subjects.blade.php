<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>

    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" />

    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: "Poppins", sans-serif;
            background: #f2f3ed;
        }

        .course {
            font-size: 20px;
            font-weight: 600;
            color: #6b837b;
            padding: 20px;
            text-align: left;
            margin-bottom: 10px;
            
        }

        /* Card styles */
        .card {
            background-color: #a7d4c2; /* Light green background for odd cards */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin: 10px 300px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Adjustments for the text inside the card */
        .card p {
            margin: 0;
            color: white;
            font-style: italic;
            font-size: 16px;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }

        /* Style for alternative card color */
        .card:nth-child(even) {
            background-color: white;
        }

        .card:nth-child(even) span {
            color: black;
        }

    </style>

</head>
<body>

    <div class="course">
        <span id="departmentDisplay">PROFESSOR</span><br>
        <span id="ProfessorName">{{ $professor->surname }}, {{ $professor->firstname }} {{ $professor->middlename }}</span>
    </div>

    @foreach($subjectSectionCollection as $subjectSection)

        <div class="card" onclick="document.getElementById('{{ $loop->index }}').submit()">
            <form action="{{ route('show.prof.attendance') }}" method="GET" id="{{ $loop->index }}">
                
                <!-- Hidden input for subject ID -->
                <input type="hidden" name="subjectID" value="{{ $subjectSection['subject']->id }}">
                <input type="hidden" name="course" value="{{ $subjectSection['course'] }}">
                <input type="hidden" name="year" value="{{ $subjectSection['year'] }}">
                <input type="hidden" name="block" value="{{ $subjectSection['block'] }}">

                <div>
                    <span id="subjectSched">{{ $subjectSection['subject']->code }} / {{ $subjectSection['course'] }}{{ $subjectSection['year'] }}-{{ $subjectSection['block'] }}</span>
                </div>
                
            </form>
        </div>

    @endforeach


    <!-- <div class="card">
        <span id="subjectSched"></span>
    </div>

    <div class="card">
        <span id="subjectSched"></span>
    </div>

    <div class="card">
        <span id="subjectSched"></span>
    </div> -->

    <script>

    </script>
</body>
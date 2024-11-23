
<div>
<head>

    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        body {
            margin: 0;
            padding: 20px;
            font-family: "Poppins", sans-serif;
            background: #f2f3ed;
        }

        .create{
            
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
            margin-bottom: 20px;
        }



        .btn-create{
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
        }

        .btn-create:hover {
            background-color: #245d4a;
        }


        .card {
            background-color: #a7d4c2; /* Light green background for odd cards */
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin: 10px 0;
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
        
<body>

<div class="employee">
    <span id="programHead">{{ $programHead->surname }}, {{ $programHead->firstname }} {{ $programHead->middlename }}</span><br>
    <span id="programHeadName">{{ $programHeadID }}</span>
</div>

<form action="{{ route('create.events') }}" method="get">
    <div class="create mt-3">
        
        <input type="hidden" name="programHeadID" value="{{ $programHeadID }}">
        <button type="submit" class="btn-create" id="btnCreate">+ CREATE</button>
        
    </div>
</form>

@foreach($events as $event)

    <div class="card" onclick="document.getElementById('{{ $event->event_name }}').submit()">

        <form id="{{ $event->event_name }}" action="{{ route('show.event.events') }}" method="get">

            <input type="hidden" name="eventName" value="{{ $event->event_name }}">

            <span id="eventSched">{{ $event->event_name }}</span>

        </form>

    </div>

@endforeach
    
</body>
</div>

@extends('programhead.programheadindex')
@section('content')
<head>
    <!-- Tailwind CSS CDN link -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Fonts (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <!-- Icons (Font Awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-[#f2f3ed] font-poppins p-6">

    <div class="employee mb-6">
        <span id="programHead" class="text-lg font-semibold">{{ $programHead->surname }}, {{ $programHead->firstname }} {{ $programHead->middlename }}</span><br>
        <span id="programHeadName" class="text-gray-700">{{ $programHeadID }}</span>
    </div>

    <form action="{{ route('create.events') }}" method="get">
        <div class="flex justify-center items-center mt-6 mb-6">
            <input type="hidden" name="programHeadID" value="{{ $programHeadID }}">
            <button type="submit" class="bg-[#2f725f] text-[#e0e0e0] w-[10%] py-2 px-4 font-bold rounded-lg shadow-md hover:bg-[#245d4a] transition-colors">+ CREATE</button>
        </div>
    </form>

    @foreach($events as $index => $event)
    <div class="bg-{{ $index % 2 == 0 ? '[#2f725f]' : 'white' }} 
                {{ $index % 2 == 0 ? 'text-white' : 'text-black' }} 
                rounded-lg shadow-md mb-4 p-4 cursor-pointer hover:shadow-lg transition-shadow"
         onclick="document.getElementById('{{ $event->event_name }}').submit()">
        <form id="{{ $event->event_name }}" action="{{ route('show.event.events') }}" method="get">
            <input type="hidden" name="eventName" value="{{ $event->event_name }}">
            <span class="font-medium text-lg">{{ $event->event_name }}</span>
        </form>
    </div>
@endforeach


</body>

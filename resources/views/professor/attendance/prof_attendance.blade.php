<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>

    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            font-family: "Poppins";
            background: #f2f3ed;
        }

        .top {
            display: flex;
            flex-direction: row;
        }

        .name-line {
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

        .subSched {
            display: flex;
            flex-direction: column;
            gap: 5px;
            background-color: #f2f3ed;
            padding: 10px;
            border-radius: 8px;
            font-weight: bold;
            color: #333;
            font-size: 25px;
            margin-left: 30px;
        }

        .subSched span {
            color: #37584F;
            margin-top: 10px;
        }

        .mid {
            display: flex;
            justify-content: left;
            margin: 10px;
        }

        .addDate {
            margin-left: 600px;
        }

        .btn-add {
            background-color: #2f725f !important;
            color: white !important;
            width: 120px;
            height: 32px;
            margin: 0 10px;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        #save {
            background-color: #2f725f !important;
            color: white !important;
            width: 120px;
            height: 32px;
            font-weight: bold;
            border: none;
            margin-left: 10px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .findDate,
        .dropdown,
        .addDate {
            border: 2px solid #555;
            height: 32px;
        }

        table {
            width: 99%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: #f2f2f2;
            margin-left: 10px;
            margin-right: 10px;
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

        tbody tr:hover {
            background-color: #e9e9e9;
        }
    </style>
</head>

<body>
    <div class="top">
        <!-- Sample input -->
        <!-- <input type="hidden" id="lastName" value="GABRIEL">
        <input type="hidden" id="firstName" value="RANIEL">
        <input type="hidden" id="middleInitial" value="R.">
        <input type="hidden" id="role" value="Instructor">
        <input type="hidden" id="idNumber" value="123-1323-123"> -->

        <div class="name-line">
            <span id="nameRole">{{ session('user')->surname }}, {{ session('user')->firstname }} {{ session('user')->middlename }}</span>
            <span id="idNo">{{ session('userID') }}</span>
        </div>
        
        <!-- Sample subject -->
        
        <div class="subSched">
            <span id="subj">{{ $subject->code }}</span>
            <span id="subjectSchedDisplay">{{ $course }}{{ $year }}-{{ $block }}</span>
        </div>
    </div>

    <!-- For dates -->
    <div class="mid">
        <div>
            <form action="{{ route('find.prof.attendance') }}" method="get">

                <input type="hidden" name="subjectID" value="{{ $subject->id }}">
                <input type="hidden" name="course" value="{{ $course }}">
                <input type="hidden" name="year" value="{{ $year }}">
                <input type="hidden" name="block" value="{{ $block }}">
                <input class="findDate" id="findDate" type="date" name="date" placeholder="mm/dd/yyyy" value="{{ $students[0]->date ?? '' }}" required>
                <select class="dropdown" id="term" name="term" required>
                    <option value="prelims">Prelims</option>
                    <option value="midterms">Midterms</option>
                    <option value="finals">Finals</option>
                </select>

                <button type="submit" class="btn-add">FIND</button>

            </form>
            
        </div>

            <button onclick="document.getElementById('updateProfAttendanceForm').submit()" class="btn-add" id="add">SAVE</button>

            <button onclick="if(confirm('Are you sure you want to delete this?')) { document.getElementById('deleteProfAttendanceForm').submit() }" class="btn-add" id="add">DELETE</button>
        
            <button class="btn-add" id="add" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Date</button>

    </div>

    <!-- Table -->
    <form id="updateProfAttendanceForm" action="{{ route('update.prof.attendance') }}" method="post">
    @csrf
    @method('PUT')
        <input type="hidden" name="subjectID" value="{{ $students[0]->subject_id ?? '' }}">
        <input type="hidden" name="date" value="{{ $students[0]->date ?? '' }}">
        <input type="hidden" name="term" value="{{ $students[0]->term ?? '' }}">
        <div class="table">
            <table>
                <thead>
                    
                    <tr>
                        <th id="StudentID">ID</th>
                        <th id="StudentName">STUDENT NAME</th>
                        <th id="Checklist">CHECKLIST</th>
                    </tr>
                
                </thead>
                <tbody>
                @if($students == '')
                <tr>
                        <td>NO DATA</td>
                        <td>NO DATA</td>
                        <td>NO DATA</td>
                    </tr>
                @elseif($students->isEmpty())
                    <tr>
                        <td>NO DATA</td>
                        <td>NO DATA</td>
                        <td>NO DATA</td>
                    </tr>
                @else
                    @foreach($students as $student)
                        <tr>
                            <td>{{ $student->id_number }}</td>
                            <td>{{ $student->studentName }}</td>
                            <td>
                                <input type="checkbox" name="attended[]" value="{{ $student->id_number }}" {{ $student->checklist ? 'checked' : '' }}>
                            </td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
        </div>        
    </form>

    

    <!-- modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Submit Form</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                    <div class="modal-body">
                        <form id="addProfAttendanceForm" action="{{ route('add.prof.attendance') }}" method="POST">
                        @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label><br>
                                <select class="dropdown" id="term" name="term" required>
                                    <option value="prelims">Prelims</option>
                                    <option value="midterms">Midterms</option>
                                    <option value="finals">Finals</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="date" class="form-label">Date</label><br>
                                <input type="date" name="date" placeholder="mm/dd/yyyy" required>
                            </div>
                            <input type="hidden" name="subjectID" value="{{ $subject->id }}">
                            <input type="hidden" name="course" value="{{ $course }}">
                            <input type="hidden" name="year" value="{{ $year }}">
                            <input type="hidden" name="block" value="{{ $block }}">
                            <button type="submit" class="btn-add">ADD</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <form id="deleteProfAttendanceForm" action="{{ route('delete.prof.attendance') }}" method="post">
    @csrf
    @method('DELETE')
        <input type="hidden" name="subjectID" value="{{ $students[0]->subject_id ?? '' }}">
        <input type="hidden" name="date" value="{{ $students[0]->date ?? '' }}">
        <input type="hidden" name="term" value="{{ $students[0]->term ?? '' }}">
    </form>
    
    <script>
        
        document.addEventListener('DOMContentLoaded', function() {
        const alertMessage = '{{ session('alert') }}';
        
        if (alertMessage) {
            alert(alertMessage);
        }
    });

    </script>
</body>
</html>
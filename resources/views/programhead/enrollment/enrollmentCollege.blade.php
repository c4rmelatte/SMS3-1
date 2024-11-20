<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COLLEGE ENROLLMENT</title>

    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>

    select {
            all: revert;
            height: 39px;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Poppins", sans-serif;
            background: #f2f3ed;
            width: 100vw;
            height: auto;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .form-container {
            margin-top: 40px;
            background-color: #faf9f4;
            border-radius: 8px;
            width: 95%;
            height: 100%;
            padding: 20px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        }

        form {
            display: flex;
            flex-direction: column;
        }

        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }

        .information input, select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
        }

        .information input::placeholder {
            font-style: italic;
            color: #999;
        }

        .print {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            margin-bottom: 20px;
            justify-content: end;
        }

        .create{
            display: flex;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
            justify-content: end;
        }

        .btn-print, .btn-create {
            padding: 8px 0px;
            font-weight: bold;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            font-size: 16px;
            box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
        }

        .btn-create {
            background-color: #2f725f;
            color: #e0e0e0;
            width: 100px;

        }

        .btn-print {
            background-color: #F1CA57;
            color: white;
            width: 80px;
        }


        .name {
            margin-bottom: 20px;
        }

        .name-inputs {
            display: flex;
            gap: 10px;
        }

        .name-inputs input {
            flex: 1;
        }

        .id-gender, .course-sem {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }


        .id-gender > div, .course-sem > div {
            flex: 1;
        }

        /* Align student ID and course with first name */
        .id-gender > div:nth-child(1), .course-sem > div:nth-child(1) {
            flex: 2;
        }

        .total-units {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
            margin-top: 20px;
            margin-bottom: 40px;
        }

        .total-units label {
            margin-bottom: 0;
        }


        .total-units input{
            border: none;
            background-color: #faf9f4;
        }




        .subject table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            font-size: 12px;
            background-color: #f2f2f2;
        }

        .subject  thead th {
            background-color: #1F342E;
            color: #fff;
            font-weight: bold;
            padding: 10px;
            text-align: center;
            border: 0.5px solid #1F342E;
        }

        .subject tbody td {
            text-align: center;
            padding: 10px;
            border: 0.5px solid #ccc;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <div class="print">
            <button class="btn-print" id="print" onclick="window.print()">PRINT</button>
        </div>

        <form>

            <div class="information">
                <div class="name">
                    <label for="lastname">Name:</label>
                    <div class="name-inputs">
                        <input type="text" id="lastname" placeholder="Last name">
                        <input type="text" id="firstname" placeholder="First name">
                        <input type="text" id="middlename" placeholder="Middle name">
                    </div>
                </div>


                <!-- Student ID and Gender -->
                <div class="id-gender">
                    <div>
                        <label for="user-id">Student Id:</label>
                        <input placeholder="XX-XXXX-XX"  type="text" name="user-id" id="user-id">
                    </div>
                    <div>
                        <label for="gender">Gender:</label>
                        <select id="gender">
                            <option value="">Select</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                </div>

                <!-- Course and sem Level -->
                <div class="course-sem">
                    <div>
                        <label for="course">Course/Major:</label>
                        <select id="course">
                            <option value="">Select</option>
                        </select>
                    </div>
                    <div>
                        <label for="semester">Semester:</label>
                        <select id="semester">
                            <option value="">Select</option>
                            <option value="">1st Semester</option>
                            <option value="">2nd Semester</option>
                            <option value="">3rd Semester</option>
                        </select>
                    </div>




                    <div>
                        <label for="yearSection">Year & Section:</label>
                        <input type="text" id="yearSection">
                    </div>
                </div>

                <!-- Add Subject -->
                <div>
                    <label for="add-subject">Add Subject:</label>
                    <select id="add-subject">
                        <option value="">Select</option>
                    </select>
                </div>
            </div>


            <div class="subject">
                <table>
                    <thead>
                        <tr>
                            <th id="subject-code" width="10%">SUBJECT CODE</th>
                            <th id="subject-title" width="26%">SUBJECT TITLE</th>
                            <th id="schedule" width="21%">SCHEDULE</th>
                            <th id="room" width="15%">ROOM #</th>
                            <th id="lec-lab-units" width="5%">LEC/LAB UNITS</th>
                            <th id="total-units" width="5%">TOTAL UNITS</th>
                            <th id="rate-per-unit" width="6%">RATE/UNIT</th>
                            <th id="total-subject-fee" width="7%">TOTAL SUBJECT FEE</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr></tr>
                    </tbody>
                </table>
            </div>


            <div class="total-units">
                <label for="total-units">Total Units:</label>
                <input type="text" name="totalUnits" id="totalUnits">
            </div>
            <!-- 
            -ipakita yung tuition w/ price
            -foreach nung mga miscellaneous na purpose w/ price
            -sum ng price ng mga miscellaneous
            -foreach nung mga other charges
            -total sum ng lahat lahat -->
            <div class="create">
                <button class="btn-create" id="create">Create</button>
            </div>


        </form>
    </div>

    <script>

    </script>
</body>
</html>

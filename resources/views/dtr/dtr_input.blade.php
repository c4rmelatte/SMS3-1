<body>
    <div class="container">

        <div class="box">
            <div class="dateTime">
                <div id="time">00:00</div>
                <div id="date">Jan 10, 2024</div>
            </div>


            <!-- input -->
            @if ($errors->any())
                <div style="color: red; margin: 15px;">
                    @foreach ($errors->all() as $error)
                        <div>{{ $error }}</div>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('check.id') }}" method="get" class="form-container">

                <input type="hidden" name="currentDateCheck" id="currentDateCheck">

                <input type="text" name="idInput" value="{{ session('idInput') }}" placeholder="Insert ID Number"
                    class="input-field">
                <button type="submit" id="enterButton" class="submit-button">ENTER</button>

            </form>

            <!-- id owner -->
            <form action="{{ route('input.time') }}" method="post">
                @csrf

                <input type="hidden" name="currentTime" id="currentTime">
                <input type="hidden" name="currentDate" id="currentDate">

                <input type="hidden" name="idInputHidden" value="{{ session('idInput') }}">

                <div id="employeeName" hidden>{{ session('name') }}</div>
                <button id="timeInButton" type="submit" hidden>{{ session('timeInOut') }}</button>

            </form>

            <!-- alert -->
            <div id="alert">{{ session('alert') }}</div>


        </div>

        <script>
            function updateTime() {
                const now = new Date();

                // Get hours, minutes, and seconds in 24-hour format
                let hours = now.getHours();
                let minutes = now.getMinutes();
                let seconds = now.getSeconds();

                // Format hours, minutes, and seconds with leading zeros
                hours = hours < 10 ? '0' + hours : hours;
                minutes = minutes < 10 ? '0' + minutes : minutes;
                seconds = seconds < 10 ? '0' + seconds : seconds;

                // Display time in 24-hour format
                document.getElementById('time').textContent = `${hours}:${minutes}:${seconds}`;

                // Display the date in a readable format
                const options = { year: 'numeric', month: 'short', day: 'numeric' };
                document.getElementById('date').textContent = now.toLocaleDateString('en-US', options);
            }

            // Update the time immediately and set it to update every second
            updateTime(); // Call once to set the initial time
            setInterval(updateTime, 1000); // Update every second

            const employeeName = document.querySelector('#employeeName');
            const timeInButton = document.querySelector('#timeInButton');
            const enterButton = document.querySelector('#enterButton');
            const alert = document.querySelector('#alert');

            if (employeeName.innerText !== "") {
                employeeName.removeAttribute('hidden');
                timeInButton.removeAttribute('hidden');
            }
            else {
                employeeName.setAttribute('hidden', true);
                timeInButton.setAttribute('hidden', true);
            }

            timeInButton.addEventListener('click', function () {
                const now = new Date();

                // Format time as HH:MM:SS
                const formattedTime = now.toTimeString().slice(0, 8);
                document.getElementById('currentTime').value = formattedTime;

                // Format date as YYYY-MM-DD
                const formattedDate = now.toISOString().slice(0, 10);
                document.getElementById('currentDate').value = formattedDate;
            });

            enterButton.addEventListener('click', function () {
                const now = new Date();

                // Format date as YYYY-MM-DD
                const formattedDate = now.toISOString().slice(0, 10);
                document.getElementById('currentDateCheck').value = formattedDate;
            });

        </script>

        <!-- CSS -->
        <style>
            body {
                margin: 0;
                padding: 0;
                font-family: "Poppins", sans-serif;
                background: #f2f3ed;
                display: flex;
                justify-content: center;
                align-items: center;
                height: 100vh;
                color: #333;
            }

            .container {
                width: 80%;
                max-width: 600px;
                background-color: #a7d4c2;
                padding: 30px;
                border-radius: 15px;
                box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
            }

            .box {
                width: 100%;
                text-align: center;
            }

            .dateTime {
                font-weight: bold;
                font-size: 1.2em;
                color: green;
                margin-bottom: 20px;
            }

            .error-messages {
                color: #d9534f;
                margin-bottom: 15px;
                font-weight: bold;
            }

            .form-container {
                display: flex;
                flex-direction: column;
                gap: 10px;
            }

            .input-field {
                width: 100%;
                padding: 10px;
                border: 1px solid #bfc0c0;
                border-radius: 8px;
                box-shadow: inset 0px 1px 3px rgba(0, 0, 0, 0.1);
            }

            .submit-button,
            #timeInButton {
                background-color: #2f725f;
                color: white;
                padding: 10px;
                font-weight: bold;
                border: none;
                border-radius: 8px;
                cursor: pointer;
                transition: background-color 0.3s;
            }

            .submit-button:hover,
            #timeInButton:hover {
                background-color: #245d4a;
            }

            #employeeName {
                margin: 30px;
            }

            #alert {
                margin-top: 15px;
                font-size: 0.9em;
                color: #6c757d;
            }
        </style>

    </div>

    </div>
</body>
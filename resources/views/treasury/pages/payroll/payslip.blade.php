<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title>

    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

 
 <style>
    body {
        font-family: 'Poppins', sans-serif;
        margin: 20px;
        background-color: #f4f4f4;
    }

    .payroll-container {
        display: flex;
        justify-content: space-between;
        border-radius: 10px;
        padding: 20px;
        background-color: #D9D9D9;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        max-width: 900px;
        margin: auto;
    }

    .payroll-section {
        width: 45%;
    }

    .payroll-section h2 {
        margin-top: 0;
        font-size: 1.5em;
        margin-bottom: 10px;
    }

    .payroll-section label {
        font-weight: bold;
        margin-top: 5px;
        display: block;
    }

    .payroll-section input {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-sizing: border-box;
    }

    .button-container {
        text-align: right;
    }

    .back-button {
        background-color: #ffcc00;
        color: #333;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-weight: bold;
        margin-top: 20px;
    }

    .back-button:hover {
        background-color: #ff9900;
    }


</style>
</head>
<body>

    <div class="payroll-container">
        <!-- Employee Details Section -->
        <div class="payroll-section">
            <h2>Employee Details</h2>
            <label for="employeeName">Employee Name:</label>
            <input type="text" id="employeeName" name="employeeName" value="{{ $employeeName->surname }}, {{ $employeeName->firstname }} {{ $employeeName->middlename }}"  required readonly>
            
            <label for="employeeID">Employee ID:</label>
            <input type="text" id="employeeID" name="employeeID" value="{{ $employee->user_id }}" required readonly>
            
            <label for="department">Department:</label>
            <input type="text" id="department" name="department" value="{{ $employee->department }}" required readonly>
            
            <label for="position">Position:</label>
            <input type="text" id="position" name="position" value="{{ $employee->position }}" required readonly>
            
            <label for="payPeriod">Pay Period:</label>
            <input type="text" id="payPeriod" name="payPeriod" value="{{ $employee->pay_period }}" required readonly>
            
            <label for="payDate">Pay Date:</label>
            <input type="date" id="payDate" name="payDate" value="{{ $employee->pay_date }}" required readonly>
    
            <!-- Earnings -->
            <h2>Earnings</h2>
            <label for="baseSalary">Base Salary:</label>
            <input type="text" id="baseSalary" name="baseSalary" value="₱{{ $employee->base_salary }}" required readonly>
            
            <!-- <label for="additionalHours">Additional Hours:</label> -->
            
            <label for="bonus">Bonus:</label>
            <input type="text" id="bonus" name="bonus" value="₱{{ number_format($employee->bonus, 2) }}" readonly>
            
            <label for="totalEarnings">Total Earnings:</label>
            <input type="text" id="totalEarnings" name="totalEarnings" value="₱{{ number_format($totalEarnings, 2) }}" readonly>
        </div>
    
        <!-- Deductions and Payment Info -->
        <div class="payroll-section">
            <h2>Deductions</h2>
            <!-- <label for="federalTax">Federal Tax:</label> -->
            
            <label for="healthInsurance">Health Insurance:</label>
            <input type="text" id="healthInsurance" name="healthInsurance" value="-₱{{ number_format($employee->insurance, 2) }}" readonly>
            
            <label for="retirementContribution">Retirement Contribution:</label>
            <input type="text" id="retirementContribution" name="retirementContribution" value="-₱{{ number_format($employee->retirement_contribution, 2) }}" readonly>
            
            <label for="totalDeductions">Total Deductions:</label>
            <input type="text" id="totalDeductions" name="totalDeductions" value="-₱{{ number_format($totalDeductions, 2) }}" readonly>
    
            <h2>Payment Information</h2>

            <label for="netPay">Net Pay:</label>
            <input type="text" id="netPay" name="netPay" value="₱{{ number_format($netPay, 2) }}" readonly>
    
            <label for="paymentMethod">Payment Method:</label>
            <input type="text" id="paymentMethod" name="paymentMethod" value="Direct Deposit" readonly>
            
            <label for="accountDigits">Account Last 4 Digits:</label>
            <input type="text" id="accountDigits" name="accountDigits" value="{{ $employee->account_number }}" readonly required pattern="\d{4}">
    
            <form action="{{ route('back.payslip')}}" method="get">

                <input type="text" name="id" id="idBack" hidden>
                <input type="text" name="month" id="monthBack" hidden>

                <div class="button-container">
                    <button class="back-button" id="print" onclick="window.print()">PRINT</button> <br>
                    <button class="back-button">BACK</button>
                </div>

            </form>
            
        </div>
    </div>
    
    <script>

        // hidden inputs
        const idBack = document.querySelector("#idBack");
        const monthBack = document.querySelector("#monthBack");

        // id and date data
        const employeeID = document.querySelector("#employeeID");
        const payPeriod = document.querySelector("#payPeriod");

        idBack.value = employeeID.value;
        monthBack.value = payPeriod.value;

    </script>

</body>
</html>
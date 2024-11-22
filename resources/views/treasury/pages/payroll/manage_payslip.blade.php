<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SMS</title> -->
  
    <!-- CSS bootstrap -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> -->
  
    <!-- Google Fonts -->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet"> -->
  
    <!-- Icons -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

@extends('treasury.treasuryindex')
@section('content')

    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: "Poppins", sans-serif;
        background: #fff;
      }

      #payrollPage {
        display: flex;
        justify-content: center;
        align-items: center;
        margin: 100px 0 0 50px;
      }

      .container {
        background-color: #f0f0ed;
        border-radius: 8px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        width: 900px;
        height: 300px;
        display: flex;
        justify-content: space-around;
      }
      

      .box {
        display: flex;
        flex-direction: column;
        gap: 15px;
      }
      
      .box label {
        font-size: 14px;
        font-weight: 500;
        color: #555;
      }
      
      .empid, .date input {
        width: 450px;
        padding: 10px;
        border-radius: 5px;
        border: 1px solid #ddd;
        font-size: 14px;
      }

      .date {
        display: flex;
        gap: 5px;
      }

      .btn {
        width: 100px;
        padding: 8px 10px;
        font-weight: bold;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 14px;
        box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
      }

      .btn-find {
        background-color: #2f725f;
        color: #ffffff;

        
      }

      .btn-show {
        background-color: #2f725f;
        color: #ffffff;
        
        
      }

      .btn-create {
        background-color: #2f725f;
        color: #ffffff;
        
        
      }

      .btn-update {
        background-color: #2f725f;
        color: #ffffff;
        margin-bottom: 20px;
      }

      .btn-delete {
        background-color: #e72929;
        color: #ffffff;
      }

      .button-group {
        display: flex;
        flex-direction: column;
        gap: 10px;
        margin-top: 20px;
      }

    </style>
<!-- </head> -->
<div id="payrollPage">
    
    <div class="container">
    <form id="findPayslipForm" action="{{ route('find.employee') }}" method="get">
    <div class="box">
        <div>{{ session('alert') }}</div>
        <label for="idName">EMP. ID</label>
        <input type="text" class="empid" id="id" name="id" value="{{ old('id', $idBacked ?? '') }}" placeholder="##-####-###">
        
        <label for="monthYear">DATE</label>
        <input type="month" class="empid" id="date" name="month" value="{{ old('month', $monthBacked ?? '') }}">
      </div>
    </form>
      <div class="button-group">
      <!-- Modal toggle -->
      <button data-modal-target="defaultModal" data-modal-toggle="defaultModal" class="btn btn-create" id="btnCreate">+ CREATE</button>

        <button class="btn btn-find" id="btnFind" onclick="document.getElementById('findPayslipForm').submit()">FIND</button>
        <button class="btn btn-show" id="btnShow" onclick="document.getElementById('showPayslipForm').submit()" hidden>SHOW</button>
        
        <button data-modal-target="updateModal" data-modal-toggle="updateModal" class="btn btn-update" id="btnUpdate" onclick="document.getElementById('updatePayslipForm').submit()" hidden>UPDATE</button>
        <button  class="btn btn-delete" id="btnDelete" onclick="if(confirm('Are you sure you want to delete this?')) { document.getElementById('deletePayslipForm').submit() }" hidden>DELETE</button>
      </div>
    </div>

    <!-- <form id="createPayslipForm" action="{{ route('create.payslip') }}" method="get">   -->
        <!-- can pass in something -->
    <!-- </form> -->

    <form id="showPayslipForm" action="{{ route('show.payslip') }}" method="get">

        <input type="text" name="id" id="idShow" hidden>
        <input type="text" name="month" id="monthShow" hidden>

    </form>

    <!-- <form id="updatePayslipForm" action="{{ route('update.payslip') }}" method="get">

        <input type="text" name="id" id="idUpdate" hidden>
        <input type="text" name="month" id="monthUpdate" hidden>

    </form> -->

    <form id="deletePayslipForm" action="{{ route('delete.payslip') }}" method="post">
    @csrf
    @method('DELETE')

        <input type="text" name="id" id="idDelete" hidden>
        <input type="text" name="month" id="monthDelete" hidden>

    </form>

    <!-- create modal -->
  <div id="defaultModal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    ISSUE PAYSLIP
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->

            <form class="p-4 md:p-5" action="{{ route('insert.payslip') }}" method="post">
                @csrf

                <div class="grid gap-4 mb-4 grid-cols-4">
                    <!-- Employee ID -->
                    <div class="col-span-4 sm:col-span-2">
                        <label for="employeeID"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Employee ID:</label>

                        <input type="text" name="employeeID" id="employeeID"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="ID" required="" />
                    </div>

                    <!-- Bonus -->
                    <div class="col-span-4 sm:col-span-2">
                        <label for="bonus"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bonus:</label>

                        <input type="text" name="bonus" id="bonus"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="$" required="" />
                    </div>

                    <!-- Pay Period -->
                    <div class="col-span-4 sm:col-span-2">
                        <label for="payPeriod" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pay Period:</label>

                        <input type="month" name="payPeriod" id="payPeriod"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="$" required />
                    </div>

                    <!-- Pay Date -->
                    <div class="col-span-4 sm:col-span-2">
                        <label for="payDate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pay Date:</label>

                        <input type="date" name="payDate" id="payDate"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="$" required />
                    </div>

                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        CREATE PAYSLIP
                    </button>
                </div>
            </form>
        </div>
    </div>
  </div>

  <!-- UPDATE MODAL -->
  <div id="updateModal" tabindex="-1" aria-hidden="true"
    class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <!-- Modal header -->
            <div class="flex justify-between items-center pb-4 mb-4 rounded-t border-b sm:mb-5 dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                    ISSUE PAYSLIP
                </h3>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                    data-modal-toggle="updateModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                        xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->

            <form class="p-4 md:p-5" action="{{ route('insert.updated.payslip') }}" method="post">
                @csrf
                @method("put")

                <div class="grid gap-4 mb-4 grid-cols-4">

                <input type="text" name="id" id="idUpdate" hidden>
                <input type="text" name="month" id="monthUpdate" hidden>

                    <!-- Bonus -->
                    <div class="col-span-4 sm:col-span-2">
                        <label for="bonus"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Bonus:</label>

                        <input type="text" name="bonus" id="bonus"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="$" required="" />
                    </div>

                    <!-- Pay Date -->
                    <div class="col-span-4 sm:col-span-2">
                        <label for="payDate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pay Date:</label>

                        <input type="date" name="payDate" id="payDate"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                            placeholder="$" required />
                    </div>

                </div>
                <div class="flex justify-center">
                    <button type="submit"
                        class="text-white inline-flex items-center bg-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                        <svg class="mr-1 -ml-1 w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        UPDATE PAYSLIP
                    </button>
                </div>
            </form>
        </div>
    </div>
  </div>

    <script>

        // Update label text with alertMessage
        //document.querySelector("#employeeIDLabel").innerText = alertMessage;

        const idDate = "{{ session('id') }}";
        const monthData = "{{ session('month') }}";

        console.log(idDate);
        console.log(monthData);

        const idUpdate = document.querySelector("#idUpdate");
        const monthUpdate = document.querySelector("#monthUpdate");

        const idDelete = document.querySelector("#idDelete");
        const monthDelete = document.querySelector("#monthDelete");

        const idShow = document.querySelector("#idShow");
        const monthShow = document.querySelector("#monthShow");

        const btnUpdate = document.querySelector("#btnUpdate");
        const btnDelete = document.querySelector("#btnDelete");
        const btnShow = document.querySelector("#btnShow");

        if (idDate && monthData) {

            idUpdate.value = "{{ session('id') }}";
            monthUpdate.value = "{{ session('month') }}";

            idDelete.value = "{{ session('id') }}";
            monthDelete.value = "{{ session('month') }}";
            
            idShow.value = "{{ session('id') }}";
            monthShow.value = "{{ session('month') }}";

            btnUpdate.hidden = false;
            btnDelete.hidden = false;
            btnShow.hidden = false;

        }

    </script>

</div>
<!-- </html> -->
@endsection
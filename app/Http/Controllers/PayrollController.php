<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class PayrollController extends Controller   // ORTEGA *******************************
{

    // view main payroll dashboard
    public function managePayroll()
    {

        return view('pages/manage_payslip');

    }

    // view create payslip page
    public function createPayslip()
    {

        return view('pages/create_payslip');

    }

    // insert payslip data to table
    public function insertPayslip(Request $request)
    {

        $id = $request->input('employeeID');

        // find the employee and check its role
        $employee = DB::table('users')->where('role', '!=', 'student')->where('user_id', $id)->first();

        // get salary from dtr

        // could add function for reducing funds on treasury

        if (!$employee) {
            return redirect()->back()->with('alert', 'Employee ID: *employee not found.*')->withInput();
        }

        // $department = $request->input('department');
        // $position = $request->input('position');
        $payPeriod = $request->input('payPeriod');
        $payDate = $request->input('payDate');
        $salary = $request->input('salary');
        // $additionalHours = $request->input('additionalHours');
        $bonus = $request->input('bonus');
        // $federalTax = $request->input('federalTax');
        // $healthInsurance = $request->input('healthInsurance');
        // $retirementContribution = $request->input('retirementContribution');
        // $accountDigits = $request->input('accountDigits');

        DB::table('payroll')->insert([

            'user_id' => $id,
            // 'department' => $department,
            // 'position' => $position,
            'pay_period' => $payPeriod,
            'pay_date' => $payDate,
            'salary' => $salary,
            // 'additional_hours' => $additionalHours,
            'bonus' => $bonus,
            // 'tax' => $federalTax,
            // 'insurance' => $healthInsurance,
            // 'retirement_contribution' => $retirementContribution,
            // 'account_number' => $accountDigits

        ]);

        return redirect()->route('manage.payslip');

    }

    // find employee payslip
    public function findEmployee(Request $request)
    {

        $id = $request->input('id');
        $month = $request->input('month');

        $employee = DB::table('payroll')->where('user_id', $id)->where('pay_period', $month)->first();

        if ($employee) {

            return redirect()->back()->with(['found' => 'found', 'id' => $id, 'month' => $month, 'alert' => '*payslip found.*'])->withInput();

        } else {

            return redirect()->back()->with('alert', '*employee or payslip not found.*')->withInput();

        }


    }

    // go to update page with payslip data
    public function updatePayslip(Request $request)
    {

        $id = $request->input('id');
        $month = $request->input('month');

        $employee = DB::table('payroll')->where('user_id', $id)->where('pay_period', $month)->first();

        if (!$employee) {
            return "Employee not found for this ID and pay period.";
        }

        return view('pages/update_payslip', ['employee' => $employee]);

    }

    // update payslip with new data
    public function insertUpdatedPayslip(Request $request)
    {

        $employeeID = $request->input('employeeID');
        // $department = $request->input('department');
        // $position = $request->input('position');
        // $payPeriod = $request->input('payPeriod');
        // $payDate = $request->input('payDate');
        // $baseSalary = $request->input('baseSalary');
        // $additionalHours = $request->input('additionalHours');
        $bonus = $request->input('bonus');
        // $federalTax = $request->input('federalTax');
        // $healthInsurance = $request->input('healthInsurance');
        // $retirementContribution = $request->input('retirementContribution');
        // $accountDigits = $request->input('accountDigits');

        // DB::table('payroll')->where('user_id', $employeeID)->where('pay_period', $payPeriod)->update([

        //     'user_id' => $employeeID,
        //     'department' => $department,
        //     'position' => $position,
        //     'pay_period' => $payPeriod,
        //     'pay_date' => $payDate,
        //     'base_salary' => $baseSalary,  
        //     'additional_hours' => $additionalHours,
        //     'bonus' => $bonus,
        //     'tax' => $federalTax,
        //     'insurance' => $healthInsurance,
        //     'retirement_contribution' => $retirementContribution,
        //     'account_number' => $accountDigits

        // ]);

        return redirect()->back();

    }

    // show data of payslip
    public function showPayslip(Request $request)
    {

        $id = $request->input('id');
        $month = $request->input('month');

        $employee = DB::table('payroll')->where('user_id', $id)->where('pay_period', $month)->first();

        $employeeName = DB::table('example_user')->where('role', '!=', 'student')->where('user_id', $id)->first();

        $totalEarnings = $employee->base_salary + $employee->additional_hours + $employee->bonus;

        $totalDeductions = $employee->tax + $employee->insurance + $employee->retirement_contribution;

        $netPay = $totalEarnings - $totalDeductions;

        return view('pages/payslip', [
            'employee' => $employee,
            'employeeName' => $employeeName,
            'totalEarnings' => $totalEarnings,
            'totalDeductions' => $totalDeductions,
            'netPay' => $netPay
        ]);

    }

    // back to manage_payslip
    public function backPayslip(Request $request)
    {

        $id = $request->input('id');
        $month = $request->input('month');

        return view('pages/manage_payslip', ['idBacked' => $id, 'monthBacked' => $month]);

    }

    // delete payslip
    public function deletePayslip(Request $request)
    {

        $id = $request->input('id');
        $month = $request->input('month');

        DB::table('payroll')->where('user_id', $id)->where('pay_period', $month)->delete();

        return redirect()->back();

    }

}

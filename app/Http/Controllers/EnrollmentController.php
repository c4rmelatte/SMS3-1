<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\TotalFunds;
use App\Models\purpose;
use App\Models\User;

class EnrollmentController extends Controller
{

    public function payEnrollment(Request $request)
    {
        $money = $request->input("amount");
        $totalMiscPrice = purpose::where('type', 'miscellaneous')->sum('price');
        $totalPrice = purpose::whereIn('type', ['tuition', 'Other_Charges'])->sum('price');
        $price = $totalMiscPrice + $totalPrice;
        $change = $money - $price;
        $isPaid = FALSE;


        if ($money == $price) {
            $change = $money - $price;
            $isPaid = TRUE;
        } elseif ($money < $price) {
            $change =  $money - $price;
            return response()->json(['message' => 'Not enough money'], 404);
        } elseif ($money > $price) {
            $change =  $money - $price;
            $isPaid = TRUE;
        }

        Payment::create([
        'name' => 'name nung nagbayad kayo nalang mag ayos pls di ko alam pano to',
        'amount' => $money,
        'price' => $price,
        'change' => $change,
        'type' => 'Enrollment',
        'isPaid' => $isPaid
        ]);


        $funds = totalFunds::first();
        $totalAmount = $money - $change;

         $funds->increment(
            'funds',$totalAmount
         );

         return redirect()->to('page nung enrollment basta');


        }




    public function index(){

        $userId = 1;

        $user = User::where('id', $userId)->get();
        $purposes = purpose::where('id',$userId)->get();
        


    }

    
}

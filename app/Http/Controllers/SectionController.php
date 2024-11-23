<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Section;
class SectionController extends Controller
{
    public function index(){

        //Gusto ko hanapin ng index ang course nya automatically, itatapon nung unang page yung course id papunta rito para makuha


        // Gusto ko ilagay ang section "year_level" at "block"
        $testitem = 'tulog na ta :D';

        // itatapon natin ang year_level at section sa susunod na php para madaling mahanap ang subjects or dito na natin gawin para subjects na ang itapon sa kabila :D


        return view('programhead.pages.blockyr')->with('message', $testitem);
    }
}

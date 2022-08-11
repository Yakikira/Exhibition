<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExhibitController extends Controller
{
    public function top(){return view('top');}
    public function exhibition(){return view('exhibition');}
    public function user(){return view('user');}
    public function user_company(){return view('user_company');}
    //public function exhibition(){return view('exhibition')};
}

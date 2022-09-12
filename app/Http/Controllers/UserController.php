<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exhibition;
use App\Models\Booth;
use App\Models\Item;
use App\Models\User;
use App\Models\Company_user;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function user(User $user){
        return view('user')->with(['users'=>$user->get()]);
    }
    public function top(User $user, Exhibition $exhibition){
        return view('user_top')->with(['users'=>$user->get(), 'exhibitions'=>$exhibition->get()]);
    }
}

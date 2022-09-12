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

class CompanyUserController extends Controller
{
    public function user(User $user){
        return view('user')->with(['users'=>$user->get()]);
    }
    public function top(Company_user $company_user, Exhibition $exhibition){
        return view('company_user_top')->with(['company_users'=>$company_user->get(),'exhibitions'=>$exhibition->get()]);
    }
    
}

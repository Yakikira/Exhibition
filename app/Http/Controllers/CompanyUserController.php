<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Exhibition;
use App\Models\Booth;
use App\Models\Item;
use App\Models\User;
use App\Models\Company_user;
use App\Models\Company;
use App\Models\History;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CompanyUserController extends Controller
{
    public function user(User $user){
        return view('user')->with(['users'=>$user->get()]);
    }
    public function top(Company_user $company_user, Exhibition $exhibition){
        return view('company_user_top')->with(['company_users'=>$company_user->get(),'exhibitions'=>$exhibition->get()]);
    }
    public function member(Company_user $company_user){
        return view('member')->with(['company_user'=>$company_user]);
    }
    public function invite(){
        return view('invite');    
    }
    public function company_user(Company_user $company_user){
        $company_id=Auth::user()->company_id;
        //$item_id = DB::select('select id from items  where company_id=?',[$company_id]);
        //dd($item_id);
        $histories=DB::select('select * from (histories left join users on user_id=users.id) left join items on item_id=items.id where item_id in (select id from items  where company_id=?)',[$company_id]);
        //dd($histories);
        //$histories=DB::select('select * from histories where item_id in (select id from items  where company_id=?)',[$company_id]);
        
        return view('company_user')->with(['company_user'=>$company_user, "histories"=>$histories]);
    }
}

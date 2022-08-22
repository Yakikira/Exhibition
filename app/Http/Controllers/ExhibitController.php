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

class ExhibitController extends Controller
{
    public function top(Exhibition $exhibition){
        return view('top')->with(['exhibitions'=>$exhibition->get()]);
    }
    public function exhibition(Exhibition $exhibition){
        return view('exhibition')->with(['exhibition'=>$exhibition]);
    }
    public function booth(Exhibition $exhibition){
        return view('booth')->with(['exhibition'=>$exhibition]);
    }    
    public function user(User $user){
        return view('user')->with(['users'=>$user->get()]);
    }
    public function company_user(Company_user $company_user){
        return view('company_user')->with(['company_users'=>$company_user->get()]);
    }
    public function createItem(Booth $booth){
        return view('create')->with(['booths'=>$booth->get()]);
    }
    public function save(Request $request, Item $item){
        dd(Auth::company_user());
        $input = $request['Item'];
        $item->fill($input)->save();
        
        return redirect('/exhibition'. $item->id);
    }
}

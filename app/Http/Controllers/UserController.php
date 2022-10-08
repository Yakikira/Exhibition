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
    public function top(User $user, Exhibition $exhibition){
        return view('user.top')->with(['users'=>$user->get(), 'exhibitions'=>$exhibition->get()]);
    }
    public function exhibition(Exhibition $exhibition){
        return view('user.exhibition')->with(['exhibition'=>$exhibition]);
    }
    public function booth(Booth $booth){
        return view('user.booth')->with(['booth'=>$booth]);
    }    
    public function query(Request $request){
        $keyword = $request->input('keyword');
        $query = Item::query();
        if(!empty($keyword)) {
            $query->where('item_name', 'LIKE', "%{$keyword}%")
                ->orWhere('item_head', 'LIKE', "%{$keyword}%")
                ->orWhere('item_body', 'LIKE', "%{$keyword}%");
        $items = $query->get();
        }
        return view('user.query')->with(['items'=>$items]);
    }   
    public function user_info(User $user){
        return view('user.user_info')->with(['users'=>$user->get()]);
    }

}

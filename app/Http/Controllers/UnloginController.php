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
use App\Models\Invite_mails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\InviteMail;

use Illuminate\Support\Facades\URL;

class UnloginController extends Controller
{
    public function top(Exhibition $exhibition){
        return view('unlogin.top')->with(['exhibitions'=>$exhibition->get()]);
    }
    public function exhibition(Exhibition $exhibition){
        return view('unlogin.exhibition')->with(['exhibition'=>$exhibition]);
    }
    public function booth(Booth $booth){
        return view('unlogin.booth')->with(['booth'=>$booth]);
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
        return view('unlogin.query')->with(['items'=>$items]);
    }     
}
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
use Illuminate\Support\Facades\Mail;
use App\Mail\InviteMail;

class ExhibitController extends Controller
{
    public function top(Exhibition $exhibition){
        return view('top')->with(['exhibitions'=>$exhibition->get()]);
    }
    public function exhibition(Exhibition $exhibition){
        return view('exhibition')->with(['exhibition'=>$exhibition]);
    }
    public function booth(Booth $booth){
        return view('booth')->with(['booth'=>$booth]);
    }    
    public function user(User $user){
        return view('user')->with(['users'=>$user->get()]);
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
    public function createItem(Booth $booth){
        return view('create')->with(['booths'=>$booth->get()]);
    }
    public function member(Company_user $company_user){
    return view('member')->with(['company_user'=>$company_user]);
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
        return view('query')->with(['items'=>$items]);
    }     
    public function invite(){
        return view('invite');    
    }
    
    public function send3(Request $request){
    
        $invite_url = "http://127.0.0.1/register";
        $companyName = "宛名";
        $mail="rx782akira@gmail.com";
        
        //どのメールモデルを使用するかを選び、引数に定義した変数を入れておく。
        Mail::to($mail)->send(new InviteMail($invite_url, $companyName));
        
        //flashメッセージでも付与してviewを返してあげる。
        return redirect()->back()->with('flash_message', '招待メールを送信しました。');    
    }
    
    public function send(Request $request) {
        $urls = URL::temporarySignedRoute(
                'hello.hi',
                now()->addMinutes(1),  // 1分間だけ有効
                ['from' => "name"]
            );
        $mail = new HelloMail($request, $urls);
        Mail::to($request->email)->send($mail);
        return 'sent';
    }

}
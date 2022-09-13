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

    public function createItem(Booth $booth){
        return view('create')->with(['booths'=>$booth->get()]);
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
    public function send(Request $request, Invite_mails $invite_mails, InviteMail $invitemail, Company $company){
    
        //$companyName = $company->where("id",Auth::user()->company_id);
        $mail=$request->email;
        $url="url";
        $companyName="comp";
        /*$url=URL::temporarySignedRoute(
                'invite',
                now()->addMinutes(30),  // 1分間だけ有効
                ['company_id' => Auth::user()->company_id]
            );*/
        $input["url"]=$url;
        $input["company_id"]=Auth::user()->company_id;
        $input["expired_at"]=date("Y-m-d H:i:s",strtotime("+2 hour"));
        $invite_mails->fill($input)->save();
        
        //どのメールモデルを使用するかを選び、引数に定義した変数を入れておく。
        Mail::to($mail)->send(new InviteMail($url, $companyName));
        
        //flashメッセージでも付与してviewを返してあげる。
        return redirect()->back()->with('flash_message', '招待メールを送信しました。');    
    }
    
    public function send3(Request $request) {
        $urls = URL::temporarySignedRoute(
                'invite',
                now()->addMinutes(30),  // 1分間だけ有効
                ['company_id' => $company_id]
            );
        $mail = new HelloMail($request, $urls);
        Mail::to($request->email)->send($mail);
        return 'sent';
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreItemRequest;
use App\Models\Exhibition;
use App\Models\Booth;
use App\Models\Item;
use App\Models\User;
use App\Models\Company_user;
use App\Models\Company;
use Illuminate\Support\Facades\Auth;
use Storage;

class ItemController extends Controller
{
    
    public function createItem(Booth $booth){
        return view('create')->with(['booths'=>$booth->get()]);
    }
    public function save(StoreItemRequest $request, Item $item){
        $input = $request['item'];
        $input['company_id']=Auth::user()->company_id;
        $image=$request->file('image');
        $img_path=Storage::disk('s3')->putFile('myprefix', $image, 'public');
        $file=$request->file('file');
        $file_path=Storage::disk('s3')->putFile('files', $file, 'public');
        $item->img_url=Storage::disk('s3')->url($img_path);
        $item->file_url=Storage::disk('s3')->url($file_path);
        $item->fill($input)->save();
        return redirect('/');
    }    
    public function show(Item $item){
        $company_id=Auth::user()->company_id;
        return view('items')->with(['items'=>$item->where('company_id',$company_id)->get()]);
    }
    public function edit(Item $item, Company $company, Booth $booth){
        $company_id=Auth::user()->company_id;
        return view('itemEdit')->with(['item'=>$item, 'booths'=>$booth->where('company_id',$company_id)->get()]);
    }
    public function update(Item $item){
        $company_id=Auth::user()->company_id;
        return view('items')->with(['items'=>$item->where('company_id',$company_id)->get()]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Item;
use App\Models\History;
use Illuminate\Support\Facades\Auth;

class DownloadController extends Controller
{
    public function index(History $history, Item $item, Request $request){
        $input['user_id']=Auth::user()->id;
        $input['item_id']=$item->id;
        $history->fill($input)->save();
    }
     
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class History extends Model
{
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
    
    public function item(){
        return $this->belongsTo('App\Models\Item');
    }
    
    protected $fillable=[
        "user_id", "item_id"    
    ];
}

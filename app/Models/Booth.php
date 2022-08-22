<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booth extends Model
{
    use SoftDeletes;
    
    public function exhibition(){
        return $this->belongsTo('App\Models\Exhibition');
    }
    
    public function items(){
        return $this->hasMany('App\Models\Item');
    }
    
    public function company(){
        return $this->belongsTo('App\Models\Company');
    }
}

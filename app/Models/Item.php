<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;
    
    public function company(){
        return $this->belongsTo('App\Models\Company');
    }
    
    public function booth(){
        return $this->belongsTo('App\Models\Booth');
    }    
}

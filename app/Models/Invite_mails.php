<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Invite_mails extends Model
{
        protected $fillable=[
        "url", "company_id", "expired_at"    
    ];
}

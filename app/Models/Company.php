<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Model;
//use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    //use Notifiable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'company_name', 'company_adress',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    /**protected $hidden = [
        
    ];**/

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    /**protected $casts = [
        'email_verified_at' => 'datetime',
    ];**/
    public function company_users(){
        return $this->hasMany('App\Models\Company_user');
    }
    
    public function items(){
        return $this->hasMany('App\Models\Item');
    }
}

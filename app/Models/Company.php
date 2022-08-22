<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{
    use Notifiable;
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
    public function Company_users(){
        return $this->hasMany('App\Models\Company_user');
    }
}

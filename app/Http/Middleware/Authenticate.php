<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Route;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected $user_route='user.login';
    protected $company_user_route='company_user.login';
    
    protected function redirectTo($request)
    {
        if (! $request->expectsJson()) {
            if (Route::is('user.*')){
                return route($this->user_route);
            }
            elseif(Route::is('company_user.*')){
                return route($this->company_user_route);
            }
        }
    }
}

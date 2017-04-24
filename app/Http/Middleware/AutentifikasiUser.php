<?php

namespace App\Http\Middleware;
use Closure;

use Auth;
class AutentifikasiUser
{
  private $auth;
  public function _construct()
{
    $this->auth=app('auth');
}


    public function handle($request, Closure $next){
            if (Auth::check()){
                return $next($request);
            }
            return redirect('login')->withErrors('Silahkan Login Terlebih Dahulu');
        }       
    }


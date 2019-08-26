<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;
use Session;

class adminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $userID = Auth::user()->id;
        $user = User::find($userID);

        if($user->role != 'admin' and $user->role != 'super_admin' ){
            return redirect()->route('welcome');
        }   

        return $next($request);
    }
}

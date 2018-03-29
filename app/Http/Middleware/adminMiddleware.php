<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class adminMiddleware
{
  
    public function handle($request, Closure $next)
    {

        if (Auth::check()) 
        {
            if ($request->user()->user_type !=0)
            {
                return redirect('/');
            }
        }
		 
        
        return $next($request);
    }
}

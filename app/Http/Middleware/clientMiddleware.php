<?php
namespace App\Http\Middleware;
use Closure;
use Auth;
use Toastr;
class clientMiddleware
{
     public function handle($request, Closure $next)
    {
        if (Auth::check()) 
        {
            if ($request->user()->user_type ===2 || $request->user()->user_type === 0  )
            {
              return $next($request);
            } else{
                return redirect('/');
            }

        }else{
            
             Toastr::error('Access Denied', 'OOSMV', ["positionClass" => "toast-top-right"]);
             return redirect('/');
       
        }
    }
}

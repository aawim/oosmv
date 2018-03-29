<?php

namespace App\Http\Middleware;

use Closure;
use Toastr;
class activeUserMiddleware
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
       
       if ( $request->user()->is_active !=1 )
        {
            Toastr::warning('Product cannot be created, Create a store first', 'OOSMV', ["positionClass" => "toast-top-right"]);
            return redirect('/');
        }
       
        return $next($request);
    }
}

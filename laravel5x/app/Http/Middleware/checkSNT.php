<?php

namespace App\Http\Middleware;

use Closure;

class checkSNT
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
        /*$number = $request->number;
        if($this->myCheckNum($number)){
            return $next($request);
        }
        return redirect()->route('notFound');*/
        
        // after middleware
        $respone = $next($request);
        $number = $request->number;
        if($this->myCheckNum($number)){
            return redirect()->route('notFound');
        }
        return $respone;
    }
    private function myCheckNum($num){
        if($num % 2 == 0){
            return true;
        }
        return false;
    }
}

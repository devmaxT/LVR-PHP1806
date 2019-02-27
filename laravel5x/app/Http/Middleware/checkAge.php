<?php

namespace App\Http\Middleware;

use Closure;

class checkAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $params = null)
    {
        // $params duoc goi la tham so truyen vao middleware
        
        // kiem tra tham so tu request trong route
        $age = $request->age;
        if($age < 18 && $params !== 'annhii'){
            return redirect()->route('notFound');
        }
        //cho phep thuc thi tiep cac request
        // before middleware
        return $next($request);
    }
}

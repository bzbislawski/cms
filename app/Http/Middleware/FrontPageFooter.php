<?php

namespace App\Http\Middleware;

use Closure;
use App\Photography;

class FrontPageFooter
{
    public $attributes;
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $photos = Photography::latest('created_at')
               ->take(16)
               ->get();
        $request->attributes->add(['photos' => $photos]);
        
        return $next($request);
    }
}

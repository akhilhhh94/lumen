<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;




class MyMiddleware
{






  public function handle($request, Closure $next)
    {
        // Make sure current locale exists.
        $locale = $request->segment(1);

        if ( ! in_array($locale, ['en','sv'])) {
            //$segments = $request->segments();
            //array_unshift($segments,"en");
            //return redirect()->to(implode('/', $segments));
            app('translator')->setLocale(  'en');
        } else {
            app('translator')->setLocale( $locale);
        }

        return $next($request);
    }
}


  

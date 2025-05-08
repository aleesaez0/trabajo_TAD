<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;

class EstablecerIdioma
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {

        if (Auth::check()) {
            $user = Auth::user()->load('cliente');
            $locale = $user->cliente->locale ?? 'NO LOCALE';


            if ($user->cliente && in_array($locale, ['es', 'en', 'fr'])) {
                App::setLocale($locale);
            }
        }

        return $next($request);
    }

}

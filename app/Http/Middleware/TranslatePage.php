<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Stichoza\GoogleTranslate\GoogleTranslate;

class TranslatePage
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        // Solo traducir si el usuario está autenticado
        if (Auth::check() && $response->isSuccessful() && $response->headers->get('Content-Type') === 'text/html; charset=UTF-8') {
            $locale = Auth::cliente()->locale ?? 'en';
            $tr = new GoogleTranslate($locale);

            $content = $response->getContent();
            $translated = $tr->translate($content);

            $response->setContent($translated);
        }

        return $response;
    }
}

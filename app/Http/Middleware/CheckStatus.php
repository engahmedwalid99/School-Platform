<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckStatus
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (auth()->check() && auth()->user()->is_active != 1) {
            Auth::logout();

            request()->session()->invalidate();
            request()->session()->regenerateToken();

            abort(403, 'تم حظر حسابك يا كبدس ');
        }
        return $next($request);
    }
}

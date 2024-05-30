<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class Login
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        Log::info('Middleware executed');

        if (auth()->check()) {
            Log::info('User is authenticated.');
            return redirect()->route('todo.index'); // Redirect to /index
        } else {
            Log::info('User is not authenticated.');
            return redirect()->route('login'); // Redirect to login page
        }
    }
}

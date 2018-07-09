<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Log;
use Closure;

class CleanHeader
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        // Log::info('the handle was called');
        ob_end_clean(); //fixes a glitch where spaces are added to the header of the response which corrupts cetain file types
        return $response;
    }
}
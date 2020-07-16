<?php

namespace App\Http\Middleware;

use Closure;

class CheckChickenTrust
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
        // Check if the user is trusted
        if ($request->chicken_trust != true) {
            return redirect('chicken/fee');
        }

        // Check if the session is still valid
        // if (session->expiry < now) {
        // we demand new sacrifice, but less, because loyalty
    // }

        return $next($request);
    }
}

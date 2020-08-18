<?php

declare(strict_types=1);

namespace Cortex\Auth\Http\Middleware;

use Closure;

class UpdateTimezone
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     *
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if (! $request->ajax() && $user = app('request.user')) {
            $timezone = geoip($request->getClientIp())->timezone;

            if (! $user->timezone) {
                $user->fill(['timezone' => $timezone])->save();
                $request->session()->flash('success', trans('cortex/auth::messages.account.updated_timezone', ['timezone' => $timezone]));
            }
        }

        return $next($request);
    }
}

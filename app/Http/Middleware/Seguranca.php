<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Toastr;

class Seguranca
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
        if(Auth::check()) {
            if ($request->user()->usr_papel == "admin" ) {
                return $next($request);
            }
        }

        Toastr::error('Você não tem permissão para acessar este recurso. Contate o Administrador do Sistema.');
        return redirect()->back();
    }
}

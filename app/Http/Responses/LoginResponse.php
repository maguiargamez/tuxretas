<?php
namespace App\Http\Responses;

use App\Providers\RouteServiceProvider;
use Laravel\Fortify\Contracts\LoginResponse as ContractsLoginResponse;

class LoginResponse implements ContractsLoginResponse
{
    public function toResponse($request)
    {
        //dd($request->user());
        return redirect(RouteServiceProvider::HOME);
    }
}
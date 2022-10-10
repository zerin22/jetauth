<?php

<<<<<<< HEAD
namespace App\Http\Responses;
=======
namespace Laravel\Fortify\Http\Responses;
>>>>>>> 3032d69e82fae0e079d28f62954b46acbcb94cdd

use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use Laravel\Fortify\Fortify;

class LoginResponse implements LoginResponseContract
{
    /**
     * Create an HTTP response that represents the object.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function toResponse($request)
    {
        return $request->wantsJson()
                    ? response()->json(['two_factor' => false])
                    : redirect()->intended('admin/dashboard');
    }
}

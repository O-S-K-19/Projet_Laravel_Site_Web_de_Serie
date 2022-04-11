<?php

//app/Http/Responses/LoginResponse.php
namespace App\Http\Responses;



use Illuminate\Support\Facades\Auth;
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;

class LoginResponse implements LoginResponseContract
{

    /**
     * @param  \Illuminate\Http\Request $request
     * @return \Symfony\Component\HttpFondation\Response
     */
    public function toResponse($request)
    {
        // replace this with your own code
        // the user can be located with Auth facade

       if( Auth::user()){

            return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->route('homePage');
       }

    }

}


?>

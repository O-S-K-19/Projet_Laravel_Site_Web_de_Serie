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
        $user = Auth::user();
       if($user->is_admin){
           //return $user;
            return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->route('adminDashboard');
       }

       else {
           //Producer
           if($user->role_id == 1){
               // return $user;
                return $request->wantsJson()
                ? response()->json(['two_factor' => false])
                : redirect()->route('producerDashboard');
           }
           //Subscriber
           else if($user->role_id == 2){
               //return $user;
                return $request->wantsJson()
                ? response()->json(['two_factor' => false])
                : redirect()->route('dashboard');
           }

        }
        /*
        else{
            return $request->wantsJson()
            ? response()->json(['two_factor' => false])
            : redirect()->route('dashboard');
           }
        */
       }

}


?>

<?php 
namespace App\Http\Controllers;
use Socialite;
use App\User;


class AuthController extends Controller
{
    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
    	$error = \Request::input('error');
    	if($error != "access_denied"){
        	$user = Socialite::driver('facebook')->user();
        	
            $us = User::find( \Auth::user()->id );
            $us->avatar = $user->getAvatar();
            $us->idSocial = $user->getId();
            $us->save();

        	return redirect('/');
    	}
        else
        	return redirect('/');

    }
}
?>
<?php
/**
 * Created by PhpStorm.
 * User: songminseok
 * Date: 27/7/17
 * Time: 9:55 PM
 */
namespace App\Helper;

use Illuminate\Http\Request;
use App\Helper\TribeHelper;

class SessionHelper
{

	/**
	 * Put necessary info into session.
	 * 
	 * @param  Request $request [description]
	 * @return [type]           [description]
	 */
	public static function putInfoIntoSession(Request $request){
		
		// Get email
		$email = $request['email'];

		// Get a list of tribes that the user created
		$tribeList = TribeHelper::getUserTribe($email);

        $request->session()->put('userCreatedTribesCount', count($tribeList));
        $request->session()->put('userTribes', $tribeList);
        $request->session()->put('email', $email);
	}
}
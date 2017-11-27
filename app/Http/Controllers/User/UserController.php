<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;


class UserController extends Controller
{

    public function __construct()
    {
//        $this->middleware('guest');
    }

    /**
     * Retrieve personal profile.
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function profilePage(Request $request){

    	$email = $request->session()->get('email');
    	$query = DB::table('users');
        $query->where('email', $email);

        $user = $query->first();


        $query = DB::table('user_interest');
        $query->where('user_id', $email);

        $user_interests = $query->get();

        $interests = Config::get('code.interests');

        $user_selected_interests = array();



        foreach ($interests as $i_key => $interest) {
        	$selected = 0;
        	foreach ($user_interests as $ui_key => $user_interest) {
        		if($interest === $user_interest->interest){
        			$selected = 1;
        		}
        	}
        	$item = array(
        		'interest' => $interest,
        		'selected' => $selected,
        	);
        	array_push($user_selected_interests, $item);
    	}
        

    	return view('pages.user.user-profile', ['user'=>$user,
    		'interests'=>$user_selected_interests]);
    }

    /**
     * Profile update
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function profileUpdate(Request $request){

    	DB::table('users')
            ->where('email', $request->session()->get('email'))
            ->update(['name' => $request['user-name'],
        			  'suburb' => $request['user-suburb'],
        			  'state' => $request['user-state'],
        			  'description' => $request['user-description']
        			]);


        DB::table('user_interest')->where('user_id', '=', $request->session()->get('email'))->delete();	

        $interest_input = $request['user-interest'];

        foreach ($interest_input as $key => $selected_interest) {
        	DB::table('user_interest')->insert([
        		'user_id'=>$request->session()->get('email'), 'interest'=>$selected_interest
        	]);
        }
        

        $email = $request->session()->get('email');
    	$query = DB::table('users');
        $query->where('email', $email);

        $user = $query->first();


        $query = DB::table('user_interest');
        $query->where('user_id', $email);
        $user_interests = $query->get();

        $interests = Config::get('code.interests');
        
        $user_selected_interests = array();
        foreach ($interests as $i_key => $interest) {
        	$selected = 0;
        	foreach ($user_interests as $ui_key => $user_interest) {
        		if($interest === $user_interest->interest){
        			$selected = 1;
        		}
        	}
        	$item = array(
        		'interest' => $interest,
        		'selected' => $selected,
        	);
        	array_push($user_selected_interests, $item);
    	}
        
    	return view('pages.user.user-profile', ['user'=>$user,
    		'interests'=>$user_selected_interests]);

    }
}

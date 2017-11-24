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

    public function profilePage(Request $request){

    	$email = $request->session()->get('email');
    	$query = DB::table('users');
        $query->where('email', $email);

        $user = $query->first();
    	return view('pages.user.profile-detail', ['user'=>$user]);
    }
}

<?php

namespace App\Http\Controllers\Profile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;


class ProfileSetController extends Controller
{

    public function __construct()
    {
//        $this->middleware('guest');
    }

    public function settingMain(Request $request){
    	return view('pages.member.profile-main');
    }
}

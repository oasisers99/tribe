<?php

namespace App\Http\Controllers\Common;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class CommonController extends Controller
{

    /**
     * TribeController constructor.
     */
    public function __construct()
    {
//        $this->middleware('guest');
    }


    /**
     *
     * 
     */
    public function redirectToLoginPageWithMessage(Request $request){
        $message = $request['message'];
        return view('pages.login.login', ['message'=>$message]);
    }

}
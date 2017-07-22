<?php

namespace App\Http\Controllers\Tribe;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;

class TribeController extends Controller
{


    /**
     * TribeController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * @param Request $request
     */
    public function getTribes(Request $request){
        Log::info($request['number']);
        echo $request['number'];

    }

}
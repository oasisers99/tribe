<?php

namespace App\Http\Controllers\Tribe;

use App\Helper\TribeHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class TribeSetController extends Controller
{

    /**
     * TribeSetController constructor.
     */
    public function __construct()
    {
//        $this->middleware('guest');
    }


    /**
     * Move to tribe's setting page.
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function settingMain(Request $request){
        $tribeId = $request['tribe_id'];
        $tribe = TribeHelper::getTribeMainContentsByTribeId($tribeId);

        $userId = $request->session()->get('email');
        $tribe['isTribeMember']  = TribeHelper::checkIfTribeMember(TribeHelper::getTribeMembers($tribeId), $userId);

        return view('pages.tribe.profile', ["tribe"=>$tribe]);
    }




}
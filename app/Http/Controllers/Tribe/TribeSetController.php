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
        $tribe['selected'] = 'main';
        return view('pages.tribe.setting.main', ["tribe"=>$tribe]);
    }

    /**
     * Profile edit form
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function profileEditForm(Request $request){
        $tribeId = $request['tribe_id'];
        $tribe = TribeHelper::getTribeMainContentsByTribeId($tribeId);

        $userId = $request->session()->get('email');
        $tribe['isTribeMember']  = TribeHelper::checkIfTribeMember(TribeHelper::getTribeMembers($tribeId), $userId);
        $tribe['selected'] = 'profile-edit';

        return view('pages.tribe.setting.profile', ["tribe"=>$tribe]);
    }

    /**
     * Save profile change
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function profileUpdate(Request $request){

        $tribeId = $request['tribe_id'];
        $name = $request['name'];
        $summary = $request['summary'];
        $topic1 = $request['topic1'];
        $region = $request['region'];

        DB::table('tribe')
            ->where('id', $tribeId)
            ->update(['name'=>$name, 
                        'summary'=>$summary,
                        'topic1'=>$topic1,
                        'region'=>$region]);

        /////////////////////////////////////
        
        $tribe = TribeHelper::getTribeMainContentsByTribeId($tribeId);

        $userId = $request->session()->get('email');
        $tribe['isTribeMember']  = TribeHelper::checkIfTribeMember(TribeHelper::getTribeMembers($tribeId), $userId);
        $tribe['selected'] = 'profile-edit';

        return view('pages.tribe.setting.profile', ["tribe"=>$tribe]); 
    }


}
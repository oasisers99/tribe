<?php

namespace App\Http\Controllers\Tribe;

use App\Helper\TribeHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;

class TribeSetController extends Controller
{

    const JOIN_REQUEST_PENDING = 0;
    const JOIN_REQUEST_ACCEPT = 1;
    const JOIN_REQUEST_DECLINE = 2; 

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

        $interests = Config::get('code.interests');

        return view('pages.tribe.setting.profile', ["tribe"=>$tribe, "interests"=>$interests]);
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

        $interests = Config::get('code.interests');

        return view('pages.tribe.setting.profile', ["tribe"=>$tribe, "interests"=>$interests]); 
    }

    /**
     * Get message list
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function joinRequest(Request $request){

        $tribeId = $request['tribe_id'];

        $requests = self::getJoinRequest($tribeId);

        $userId = $request->session()->get('email');
        $tribe = TribeHelper::getTribeMainContentsByTribeId($tribeId);
        $tribe['isTribeMember']  = TribeHelper::checkIfTribeMember(TribeHelper::getTribeMembers($tribeId), $userId);
        $tribe['selected'] = 'join-request';

        return view('pages.tribe.setting.join-request', ["tribe"=>$tribe, "requests"=>$requests]);  
    }

    /**
     *  Accept join request.
     * 
     */
    public function acceptJoin(Request $request){
        
        $requestId = $request['requestId'];
        $requestUserId = $request['userId'];
        $tribeId = $request['tribe_id'];

        DB::update('UPDATE tribe_join
                    SET 
                        status = ?
                    WHERE
                        id = ?',
                    [self::JOIN_REQUEST_ACCEPT, $requestId]
            );
        
        $requests = self::getJoinRequest($tribeId);

        $userId = $request->session()->get('email');
        $tribe = TribeHelper::getTribeMainContentsByTribeId($tribeId);

        DB::insert('INSERT INTO tribe_member
                    (tribe_id, user_id, active, member_type)
                    VALUES
                    (?,?,?,?)',[$tribeId, $requestUserId, 'Y', '2']);

        $tribe['isTribeMember']  = TribeHelper::checkIfTribeMember(TribeHelper::getTribeMembers($tribeId), $userId);
        $tribe['selected'] = 'join-request';

        return view('pages.tribe.setting.join-request', ["tribe"=>$tribe, "requests"=>$requests]);  
    }

    /**
     *  Deline join request.
     * 
     */
    public function declineJoin(Request $request){
        
        $requestId = $request['requestId'];
        $tribeId = $request['tribe_id'];

        DB::update('UPDATE tribe_join
                    SET 
                        status = ?
                    WHERE
                        id = ?',
                    [self::JOIN_REQUEST_DECLINE, $requestId]
            );
        
        $requests = self::getJoinRequest($tribeId);

        $userId = $request->session()->get('email');
        $tribe = TribeHelper::getTribeMainContentsByTribeId($tribeId);
        $tribe['isTribeMember']  = TribeHelper::checkIfTribeMember(TribeHelper::getTribeMembers($tribeId), $userId);
        $tribe['selected'] = 'join-request';

        return view('pages.tribe.setting.join-request', ["tribe"=>$tribe, "requests"=>$requests]);  
    }

    /**
     * Get join requests for the tribe.
     * 
     * @return [type] [description]
     */
    private static function getJoinRequest($tribeId){
        $query = DB::table("tribe_join")
                    ->join("users", "tribe_join.user_id", "=", "users.email")
                    ->select("users.name","tribe_join.user_id", "users.email","users.name","tribe_join.id","tribe_join.message","tribe_join.created_at")
                    ->where(["tribe_join.tribe_id"=>$tribeId, "tribe_join.status"=>0]);
        $result = $query->get();
        return $result;
    }

}
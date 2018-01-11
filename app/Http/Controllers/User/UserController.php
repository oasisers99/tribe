<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Helper\MemberHelper;

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
        
        $msgCount = Self::getMessageCount($request);

    	return view('pages.user.user-profile', ['user'=>$user,
    		'interests'=>$user_selected_interests, 
            'menu'=>'profile-edit',
            'msgCount'=>$msgCount]);
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
        
        $msgCount = Self::getMessageCount($request);

    	return view('pages.user.user-profile', ['user'=>$user,
    		'interests'=>$user_selected_interests, 
            'menu'=>'profile-edit',
            'msgCount'=>$msgCount]);

    }

    /**
     *	Projects that the user is in.
     * 
     */
    public function projectListPage(Request $request){
    	$user_id = $request->session()->get('email');

    	$projects = DB::table('member_project')
            ->join('tribe_project', 'member_project.project_id', '=', 'tribe_project.id')
            ->select('tribe_project.title', 'tribe_project.description', 
                        'tribe_project.created_at','tribe_project.id')
            ->where('member_project.user_id', '=', $user_id)
            ->orderByRaw('tribe_project.created_at DESC')
            ->get();

        $msgCount = Self::getMessageCount($request);

        return view('pages.user.project-list', ['projects'=>$projects,
    		'menu'=>'project-list',
            'msgCount'=>$msgCount]);

    }

    public function messageListPage(Request $request){
        $user_id = $request->session()->get('email');

        $messages = DB::table('messages')
            ->where([['sent_to', '=', $user_id], 
                ['status', '=', MemberHelper::MESSAGE_STATUS_NEW]
            ])->orderBy('created_at', 'desc')
            ->get();

        $msgCount = Self::getMessageCount($request);

        return view('pages.user.message-list', ['messages'=>$messages,
            'menu'=>'message-list',
            'msgCount'=>$msgCount]);
    }

    /**
     * [userDetail description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function userDetail(Request $request){
        $userId = $request['userId'];

        $query = DB::table('users');
        $query->where('email', $userId);
        $user = $query->first();

        $user_interests = array();
        $query = DB::table('user_interest');
        $query->where('user_id', $userId);
        $user_interests = $query->get();

        $user->interests = $user_interests;

        return response(["user"=>$user]); 
    }

    /**
     * Send message to other user.
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function sendMessage(Request $request){
        $userId = $request->session()->get('email');
        $recipient = $request['recipient'];
        $message = $request['message'];

        DB::table('messages')->insert([
            'sent_from'=>$userId, 'sent_to'=>$recipient, 'message'=>$message, 'status'=>MemberHelper::MESSAGE_STATUS_NEW
        ]);

        return response(["result"=>'success']); 
    }

    /**
     * Message count
     * 
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    private function getMessageCount($request){
        $msgCount = 0;
        if (Auth::check()) {
            $msgCount = MemberHelper::countNewMessage($request->session()->get('email'));
        }
        return $msgCount;
    }

    /**
     * Mark the message as read
     * 
     * @param  [type] $request [description]
     * @return [type]          [description]
     */
    public function messageMarkAsRead(Request $request){

        $messageId = $request['messageId'];

        DB::table('messages')
            ->where('id', $messageId)
            ->update(
                ['status' => MemberHelper::MESSAGE_STATUS_READ]
                );
        return response(["result"=>'success']); 
    }
}

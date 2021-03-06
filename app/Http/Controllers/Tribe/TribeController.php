<?php

namespace App\Http\Controllers\Tribe;

use App\Helper\TribeHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;

class TribeController extends Controller
{

    /**
     * TribeController constructor.
     */
    public function __construct()
    {
//        $this->middleware('guest');
    }



    /**
     * move to tribe create form
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createTribeForm(Request $request){

        //Get area of interest from the config file.
        // config/code.php
        $interests = Config::get('code.interests');

        return view('pages.tribe.create', ["interests"=>$interests]);
    }

    /**
     * Create tribe
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createTribe(Request $request){

        $this->validator($request->all())->validate();

        //when validated
        $tribe_id = uniqid(date("Ymd"));
        $name = $request['name'];
        $summary = $request['summary'];
        $topic1 = $request['topic1'];
        $topic2 = $topic1;
        $region = $request['region'];
        $country = 'Australia'; //$request['country'];
        $created_by = $request->session()->get('email');


        DB::insert('INSERT INTO tribe
                 (ID, NAME, SUMMARY, TOPIC1, TOPIC2, REGION, COUNTRY, CREATED_BY)
                 VALUES
                 (?,?,?,?,?,?,?,?)', [$tribe_id, $name, $summary, $topic1, $topic2, $region, $country, $created_by]);

        $insertObject = array(
            "tribe_id" => $tribe_id,
            "member_id" => $created_by,
        );

        //Add this person into the tribe
        TribeHelper::insertNewMemberIntoTribe($insertObject);
        $tribe = TribeHelper::getTribeMainContentsByTribeId($tribe_id);
        $tribe['isTribeMember']  = TribeHelper::checkIfTribeMember(TribeHelper::getTribeMembers($tribe_id), $created_by);

        return view('pages.tribe.main', ["tribe"=>$tribe]);
    }

    /**
     * Visit a tribe.
     * 
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function mainPage(Request $request){


        $tribeId = $request['tribe_id'];
        $tribe = TribeHelper::getTribeMainContentsByTribeId($tribeId);

        $userId = $request->session()->get('email');
        $tribe['isTribeMember']  = TribeHelper::checkIfTribeMember(TribeHelper::getTribeMembers($tribeId), $userId);

        return view('pages.tribe.main', ["tribe"=>$tribe]);
    }

    /**
     * Go to tribe posting form page.
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function createPostingForm(Request $request){

        $tribeId = $request['tribeId'];
        $tribe = TribeHelper::getTribeMainContentsByTribeId($tribeId);
        
        $userId = $request->session()->get('email');
        $tribe['isTribeMember']  = TribeHelper::checkIfTribeMember(TribeHelper::getTribeMembers($tribeId), $userId);

        return view('pages.tribe.create-posting', ["tribe"=>$tribe]);
    }

    /**
     * Go to project creation form page.
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function createProjectForm(Request $request){

        $tribeId = $request['tribeId'];
        $tribe = TribeHelper::getTribeMainContentsByTribeId($tribeId);
        
        $userId = $request->session()->get('email');
        $tribe['isTribeMember']  = TribeHelper::checkIfTribeMember(TribeHelper::getTribeMembers($tribeId), $userId);

        $interests = Config::get('code.interests');

        return view('pages.tribe.create-project', ["tribe"=>$tribe, "interests"=>$interests]);
    }

    /**
     * Create posting
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function createPosting(Request $request){

        $tribeId = $request['tribeId'];
        $userId = $request->session()->get('email');
    
        $content = $request['content'];
        
        DB::insert('INSERT INTO tribe_posting
                 (TRIBE_ID, CONTENT, CREATED_BY)
                 VALUES
                 (?,?,?)', [$tribeId, $content, $userId]);

        $postings = DB::select('SELECT post.id, post.tribe_id, post.content, post.created_by, user.name as user_name, post.created_at
                    FROM tribe_posting post, users user
                    WHERE post.created_by = user.email
                    AND tribe_id = (?)
                    ORDER BY created_at DESC', [$tribeId]);

        return response($postings);
    }

    /**
     * Update posting
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function updatePosting(Request $request){

        $postId = $request['postId'];
        $tribeId = $request['tribeId'];
        $content = $request['content'];

        DB::update('UPDATE tribe_posting
                    SET 
                        content = (?),
                        updated_at = NOW()
                    WHERE
                        id = (?)', [$content, $postId]);

        $postings = DB::select('SELECT post.id, post.tribe_id, post.content, post.created_by, user.name as user_name, post.created_at
                    FROM tribe_posting post, users user
                    WHERE post.created_by = user.email
                    AND tribe_id = (?)
                    ORDER BY created_at DESC', [$tribeId]);

        return response($postings);
    }

    /**
     * [deletePosting description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function deletePosting(Request $request){ 
        $postId = $request['postId'];
        $tribeId = $request['tribeId'];

        DB::table('tribe_posting')->where('id', '=', $postId)->delete();

        $postings = DB::select('SELECT post.id, post.tribe_id, post.content, post.created_by, user.name as user_name, post.created_at
                    FROM tribe_posting post, users user
                    WHERE post.created_by = user.email
                    AND tribe_id = (?)
                    ORDER BY created_at DESC', [$tribeId]);

        return response($postings);
    }
    /**
     * Get tribe postings
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function getTribePostings(Request $request){

        $tribeId = $request['tribeId'];
        $postings = DB::select('SELECT post.id, post.tribe_id, post.content, post.created_by, user.name as user_name, post.created_at
                    FROM tribe_posting post, users user
                    WHERE post.created_by = user.email
                    AND tribe_id = (?)
                    ORDER BY created_at DESC', [$tribeId]);
        return response($postings);
    }

    /**
     * Create a project
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function createProject(Request $request){

        $title = $request['title'];
        $description = $request['description'];
        $member_no = $request['member_no'];
        $topic = $request['topic'];
        $location = $request['location'];
        $tribeId = $request['tribe_id'];
        $userId = $request->session()->get('email');

        $project_id = DB::table('tribe_project')->insertGetId(
            ['title'      => $title,     'description' => $description, 
             'member_no'  => $member_no, 'topic'       =>  $topic,
             'location'   => $location,  'country'     => 'Australia',
             'created_by' => $userId,    'tribe_id'    => $tribeId]
        );


        DB::insert('INSERT INTO member_project
                    (project_id, user_id, status)
                    VALUES
                    (?,?,?)', [$project_id, $userId, '1']);

        $tribeId = $request['tribe_id'];
        $tribe = TribeHelper::getTribeMainContentsByTribeId($tribeId);

        $userId = $request->session()->get('email');
        $tribe['isTribeMember']  = TribeHelper::checkIfTribeMember(TribeHelper::getTribeMembers($tribeId), $userId);

        return view('pages.tribe.main', ["tribe"=>$tribe]);
    }


    
    /**
     * Get random 25 tribes and move to tribe search page.
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function searchTribeFull(Request $request){

        $interest = $request['interest'];
        $area = $request['area'];

        $query = DB::table('tribe')
                    ->select(DB::raw('id, name, summary, 
                                      topic1, topic2, image1, 
                                      region, country, 
                                      (SELECT COUNT(user_id) FROM tribe_member WHERE tribe_id = id AND active = "Y") AS member_no') );
        if($interest != ''){
            $query->where('topic1', $interest);
        }

        if($area != ''){
            $query->where('region', $area);
        }
        
        if($interest == '' && $area == ''){
            $query->inRandomOrder();
        }

        $tribes = $query->get();

        $interests = Config::get('code.interests');

        return view('pages.front.tribe-search', ['tribes' => $tribes, "interests" => $interests]);
    }


    /**
     * Request join
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function requestJoin(Request $request){

        $tribeId = $request['tribe_id'];
        $userId = $request->session()->get('email');
        $alreadyRequested = TribeHelper::checkIfAlreadyRequested($tribeId, $userId);
        $message = "Your request has been successfully sent to the tribe leader.";

        if(!$alreadyRequested){
            DB::table('tribe_join')->insert(
                ['tribe_id'=>$tribeId, 
                 'user_id'=>$userId]
            );
        }else{
            $message = "You have already sent a request.";
        }


        $tribe = TribeHelper::getTribeMainContentsByTribeId($tribeId);
        $tribe['isTribeMember']  = TribeHelper::checkIfTribeMember(TribeHelper::getTribeMembers($tribeId), $userId);

        return response(["message"=>$message]);
    }

    /**
     * Request join for the project.
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function projectJoinRequest(Request $request){

        $userId = $request->session()->get('email');
        $projectId = $request['project_id'];

        

        DB::table('member_project')->insert([
            ['project_id' => $projectId, 'user_id' => $userId, 'status' => '1']
        ]);

        return response(["status"=>'success']);
    }



    /**
     * Validate inputs to create a tribe.
     * 
     * @param array $data
     * @return mixed
     */
    protected function validator(array $data)
    {
        $rules = [
            'name' => 'required|string|max:128',
            'summary' => 'required|string|max:512',
            'topic1' => 'required|string|max:25',
            'region' => 'required|string|max:45',
        ];

        return Validator::make($data, $rules);
    }


}
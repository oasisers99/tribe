<?php
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
/**
 * Created by PhpStorm.
 * User: songminseok
 * Date: 27/7/17
 * Time: 9:39 PM
 */


class FrontController extends Controller
{



    /**
     * Search Tribe for the main front page.
     * 
     * @param Request $request
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function main(Request $request){


        $tribes = DB::select("SELECT  
                                    trb.id, trb.name, trb.summary, trb.topic1, trb.topic2, trb.image1, trb.topic1, trb.region, trb.country
                                    , (SELECT COUNT(user_id) FROM tribe_member mem WHERE mem.tribe_id = trb.id AND mem.active = 'Y') as member_no
                                FROM tribe trb
                                ORDER BY rand() LIMIT 4");
        
        return view('pages.front.front', ['tribes' => $tribes]);
    }

    /**
     * [moreTribeSearchForm description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function moreTribeSearchForm(Request $request){
        return view('pages.front.tribe-search');
    }

    /**
     * About us
     * 
     * @param  Reuqest $request [description]
     * @return [type]           [description]
     */
    public function aboutUs(Request $request){
        return view('pages.front.aboutus');
    }

    /**
     * Move to project search page.
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function projectSearchPage(Request $request){
        $projects = DB::select("SELECT 
            id, title, description, member_no, topic, location, country, created_by, tribe_id, updated_at, created_at
            FROM 
                tribe_project
            ORDER BY rand() LIMIT 20");

        $interests = Config::get('code.interests');

        return view('pages.front.project-search', ['projects' => $projects, 'interests' => $interests]);
    }

    /**
     * Project search
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function searchProject(Request $request){


        $topic = $request['topic'];
        $area = $request['area'];

        $query = DB::table('tribe_project')
                    ->select(DB::raw('id, title, description, member_no, 
                        topic, location, country, created_by, 
                        tribe_id, updated_at, created_at' ) );

        if($topic != ''){
            $query->where('topic', $topic);
        }

        if($area != ''){
            $query->where('location', $area);
        }
        
        if($topic == '' && $area == ''){
            $query->inRandomOrder();
        }

        $projects = $query->get();

        $interests = Config::get('code.interests');

        return view('pages.front.project-search', ['projects' => $projects, 'interests' => $interests, 'topic' => $topic]);
    }

    /**
     * View project detail
     * 
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function viewProject(Request $request){
        $projectId = $request['projectId'];

        $query = DB::table('tribe_project');
        $query->where('id', $projectId);

        $project = $query->first();

        return view('pages.front.project-detail', ['project' => $project]);
    }
}
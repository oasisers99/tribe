<?php
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

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
    public function getFrontTribes(Request $request){

        $topic = $request['topic'];
        $region = $request['region'];
        $limit = $request['limit'];



        if(isset($limit) && $limit > 0){
            $result = DB::select('SELECT  
                id, name, summary, topic1, topic2, image1, topic1, region, country
                FROM tribe WHERE topic1 = ? AND region = ? LIMIT ?', [$topic, $region, $limit]
            );
        }
        
        return response($result);
    }

    public function moreTribeSearchForm(Request $request){
        return view('pages.front.tribe-search');
    }
}
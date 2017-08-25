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
    public function main(Request $request){


        $tribes = DB::select("SELECT  
                                    trb.id, trb.name, trb.summary, trb.topic1, trb.topic2, trb.image1, trb.topic1, trb.region, trb.country
                                    , (SELECT COUNT(user_id) FROM tribe_member mem WHERE mem.tribe_id = trb.id AND mem.active = 'Y') as member_no
                                FROM tribe trb
                                ORDER BY rand() LIMIT 4");
        
        return view('pages.front.front', ['tribes' => $tribes]);
    }




    public function moreTribeSearchForm(Request $request){
        return view('pages.front.tribe-search');
    }
}
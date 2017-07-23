<?php

namespace App\Http\Controllers\Tribe;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

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
     * @return \Illuminate\Contracts\Routing\ResponseFactory|\Symfony\Component\HttpFoundation\Response
     */
    public function getTribes(Request $request){

        $topic = $request['topic'];
        $region = $request['region'];
        $limit = $request['limit'];

        if(isset($limit) && $limit > 0)
        $result = DB::select('SELECT  
                id, name, summary, image1, topic1, region, country
                FROM tribe LIMIT ?', [$limit]
        );

        return response($result);
    }

    /**
     *
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createTribeForm(Request $request){
        return view('pages.tribe.create');
    }
}
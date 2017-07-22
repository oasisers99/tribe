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
     */
    public function getTribes(Request $request){

        $topic = $request['topic'];
        $region = $request['region'];
        $limit = $request['limit'];

        $result = DB::select('SELECT  
                id, name, summary, image1, topic1, region, country
                FROM tribe LIMIT ?', [$limit]);

        return response($result);
    }

}
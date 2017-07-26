<?php

namespace App\Http\Controllers\Tribe;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

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
     * move to tribe create form
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function createTribeForm(Request $request){
        return view('pages.tribe.create');
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
        $id = uniqid(date("Ymd"));
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
                 (?,?,?,?,?,?,?,?)', [$id, $name, $summary, $topic1, $topic2, $region, $country, $created_by]);

        return redirect(route('tribe.mainPage'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function mainPage(Request $request){
        return view('pages.tribe.whole');
    }



    /**
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
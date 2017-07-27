<?php
/**
 * Created by PhpStorm.
 * User: songminseok
 * Date: 27/7/17
 * Time: 9:55 PM
 */
namespace App\Helper;

use Illuminate\Support\Facades\DB;

class TribeHelper
{

    /**
     * @param $user
     * @return int
     */
    public static function countTribesCreatedBy($user){

        $count = 0;

        $count = DB::select('select count(*) as count from tribe where created_by = ?', [$user]);

        return $count[0]->count;
    }
}
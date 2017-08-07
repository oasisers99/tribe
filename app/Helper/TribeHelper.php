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


    /**
     * Check how many members in the tribe.
     * 
     * @param  [type] $tribeId [description]
     * @return [type]          [description]
     */
    public static function checkMemberNumberInTribe($tribeId){
    	$count = 0;

        $count = DB::select('select count(*) as count from tribe_member where tribe_id = ?', [$tribeId]);

        return $count[0]->count;
    }

    /**
     * Insert a new member into the tribe
     * 
     * @param  [type] $memObject [description]
     * @return [type]            [description]
     */
    public static function insertNewMemberIntoTribe($insertObject){
    	DB::insert('insert into tribe_member
    				(tribe_id, user_id)
    				values
    				(?,?)',
    				[$insertObject['tribe_id'], $insertObject['member_id']]
    		);
    }

    /**
     * Return tribe object
     * 
     * @param  [type] $tribeId [description]
     * @return [type]          [description]
     */
    public static function getTribeMainContents($tribeId){
    	
    	// Get the main content for the tribe
    	$tribe_content = DB::select('SELECT 
    							   id,
							       name,
							       summary,
							       description,
							       image1,
							       image2,
							       image3,
							       topic1,
							       topic2,
							       region,
							       country,
							       created_by,
							       updated_at,
							       created_at
							FROM tribe
							WHERE
							    id = ?', [$tribeId]);

    	// Get all active members for the tribe
    	$tribe_members = DB::select('SELECT 
    								tribe_id,
    								user_id,
    								created_at
    							FROM tribe_member
    							WHERE
    								tribe_id = ? AND active = "Y"', [$tribeId]);

    	$tribe = array(
    		"tribe"=> $tribe_content[0],
    		"members" => $tribe_members,
    	);

    	return $tribe;
	}

	
}
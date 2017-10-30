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

	const MEMBER_TYPE_ADMINISTRATOR = 1;
	const MEMBER_TYPE_LEADER = 2;
	const MEMBER_TYPE_MEMBER = 3;
	const MEMBER_TYPE_ORGANIZATION = 4;
	const MEMBER_TYPE_SPONSOR = 5;

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
    				(tribe_id, user_id, member_type)
    				values
    				(?,?,?)',
    				[$insertObject['tribe_id'], $insertObject['member_id'],'1,2']
    		);
    }

    /**
     * Return tribe object
     * 
     * @param  [type] $tribeId [description]
     * @return [type]          [description]
     */
    public static function getTribeMainContentsByTribeId($tribeId){
    	
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
									FROM 
										tribe
									WHERE
									    id = ?', [$tribeId]);

    	// Get all active members for the tribe
    	$tribe_members = DB::select('SELECT 
	    								mem.tribe_id tribe_id,
	    								mem.user_id user_id,
	    								user.name user_name,
	    								mem.member_type member_type,
	    								"" AS member_type_name,
	    								mem.created_at created_at
	    							FROM 
	    								tribe_member mem, users user
	    							WHERE
	    								mem.user_id = user.email
	    							AND
	    								mem.tribe_id = ? AND mem.active = "Y"
                                    ORDER by
                                        mem.created_at ASC', [$tribeId]);
    	
    	// Define member type names
    	foreach($tribe_members as $mkey=>$member){
    		$memberTypes = $member->member_type;
            $memberTypes = str_replace('1', 'Leader', $memberTypes);
            $memberTypes = str_replace('2', ' Member', $memberTypes);
            $tribe_members[$mkey]->member_type_name = $memberTypes;
    	}

    	$tribe = array(
    		"tribe"=> $tribe_content[0],
    		"members" => $tribe_members,
    	);
    	
    	return $tribe;
	}

	/**
	 * Get a list of tribes that the user belongs to
	 * 
	 * @param  [type] $userId [description]
	 * @return [type]         [description]
	 */
	public static function getUserTribe($userId){
		$user_tribe = DB::select('
				SELECT
					tribe_id,
					user_id,
					member_type
				FROM
					tribe_member
				WHERE
					user_id = ?', [$userId]);
		return $user_tribe;
	}

    /**
     * Get tribe members
     * 
     * @param  [type] $userId  [description]
     * @param  [type] $tribeId [description]
     * @return [type]          [description]
     */
    public static function getTribeMembers($tribeId){

        $tribe_members = DB::select('SELECT 
                                        mem.tribe_id tribe_id,
                                        mem.user_id user_id,
                                        user.name user_name,
                                        mem.member_type member_type,
                                        "" AS member_type_name,
                                        mem.created_at created_at
                                    FROM 
                                        tribe_member mem, users user
                                    WHERE
                                        mem.user_id = user.email
                                    AND
                                        mem.tribe_id = ? AND mem.active = "Y"', [$tribeId]);
        
        return $tribe_members;
    }

    /**
     * Check if the user is in the tribe.
     * 
     * @param  [type] $tribeMembers [description]
     * @param  [type] $userId       [description]
     * @return [type]               [description]
     */
    public static function checkIfTribeMember($tribeMembers, $userId){

        foreach ($tribeMembers as $key => $member) {
            if($member->user_id === $userId){
                return true;
            }
        }

        return false;
    }

    /**
     * Check if the user has already requested join.
     * 
     * @param  [type] $tribeId [description]
     * @param  [type] $userId  [description]
     * @return [type]          [description]
     */
    public static function checkIfAlreadyRequested($tribeId, $userId){
        
        $query = DB::table('tribe_join')
                    ->where(['tribe_id'=>$tribeId, 'user_id'=>$userId, 'status'=>0]);
        $result = $query->get();

        if(count($result) > 0){
            return true;
        }else{
            return false;
        }

        return true;
    }

}
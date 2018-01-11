<?php
/**
 * Created by PhpStorm.
 * User: songminseok
 * Date: 27/7/17
 * Time: 9:55 PM
 */
namespace App\Helper;

use Illuminate\Support\Facades\DB;

class MemberHelper
{

	const MESSAGE_STATUS_NEW = 1;
    const MESSAGE_STATUS_READ = 2;
    const MESSAGE_STATUS_DELETED = 3;

    /**
     * Get count of unread new messages
     * 
     * @param  [type] $user [description]
     * @return [type]       [description]
     */
    public static function countNewMessage($user){

       return DB::table('messages')->where([
            ['sent_to', '=', $user],
            ['status', '=', Self::MESSAGE_STATUS_NEW]
        ])->count();
    }

    /**
     * Get unread messages to the user
     * 
     * @param  [type] $user [description]
     * @return [type]       [description]
     */
    public static function getNewMessages($user){
        return DB::table('messages')->where(
            ['sent_to', '=', $user],
            ['status', '=', Self::MESSAGE_STATUS_NEW]
        )->get();
    }
    

}
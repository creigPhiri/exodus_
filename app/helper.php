<?php
/**
 * Created by PhpStorm.
 * User: fortunephiri
 * Date: 2018-09-07
 *
 *
 *Time: 2:22 PM
 */


function relationshipExists($follower_id, $followee_id)
    //function confirms if users are related in user followers table
    //returns boolean
    {

        if ($result=App\User::find($follower_id)){
            if(count($result->userFollowers->where('followee_id',$followee_id))<= 1);
            {
                return true;
            }
        }
        return false;
    }


    function buttonType($follower_id, $followee_id)
    {
        App\UserFollower::where('follower_id',$follower_id)->where('followee_id',$followee_id)->get();
        if(!count(App\UserFollower::where('follower_id',$follower_id)->where('followee_id',$followee_id)->get()))
        {
            return $button = ['type'=> 'follow'];
        }
        return   $button = ['type'=> 'unfollow'];

    }
<?php

namespace App\Http\Controllers;

use App\UserFollower;
use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    public function showAll()
    //shows all the users in the database
    {
        $users = User::all();
        return view('users.users',compact('users'));
    }

    public function viewProfile(User $user)
    {
        $is_friend = null;
        return view('users.user_profile',compact('user'));
    }

    public function follow(Request $request)
    {
        $follow = new UserFollower;
        $follow->follower_id = request('follower_id');
        $follow->followee_id = request('followee_id');
        $follow->save();
        return back();
    }

    public function unfollow()
    {

    }


}

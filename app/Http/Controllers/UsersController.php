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

            $button =buttonType(request('follower_id'),$user->user_id);
            return view('users.user_profile',compact(['user','button']));
        }

    public function follow(Request $request)
        {
            $follower_id = request('follower_id');
            $followee_id = request('followee_id');

            #commented out to allow for new function that only creates on condition that record doesnt already exist
            //                    $follow = new UserFollower;
            //                    $follow->follower_id = $follower_id;
            //                    $follow->followee_id = $followee_id;
            //                    $follow->save();

        #start of function

            if($follower =User::find($follower_id)){
                $follower = $follower->userFollowers()->firstOrCreate(['follower_id'=>$follower_id,'followee_id'=>$followee_id],['follower_id'=>$follower_id,'followee_id'=>$followee_id]);
            };

            return redirect('/user/'.$followee_id)->with($followee_id);



        }

    public function unfollow(Request $request)
        {
            $delete = UserFollower::where('follower_id',request('follower_id'))->where('followee_id',request('followee_id'));
            $delete->delete();
            return redirect('user/'.$request->followee_id);
        }


}

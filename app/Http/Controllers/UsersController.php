<?php

namespace App\Http\Controllers;

use App\UserFollower;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

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

        #start of function

            if($follower =User::find($follower_id)){
                $follower = $follower->userFollowers()->firstOrCreate(['follower_id'=>$follower_id,'followee_id'=>$followee_id],['follower_id'=>$follower_id,'followee_id'=>$followee_id]);
            };

            return back();

            #commented out to allow for new function that only creates on condition that record doesnt already exist
            //                    $follow = new UserFollower;
            //                    $follow->follower_id = $follower_id;
            //                    $follow->followee_id = $followee_id;
            //                    $follow->save();

        }

    public function unfollow(Request $request)
        {
            $delete = UserFollower::where('follower_id',request('follower_id'))->where('followee_id',request('followee_id'));
            $delete->delete();
            return redirect('user/'.$request->followee_id);
        }

    public function test(){
        return view('test_folder.profile');
    }

    public function imageUpload(Request $request)
        //param: request object which gets the image file
        //action: uploads a user image
    {
        $this->validate($request, [
            'imageFile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('imageFile')) {
            $image = $request->file('imageFile');
            $name = 'user_'.Auth::user()->user_id.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/images');
            $image->move($destinationPath, $name);

            $user = Auth::user();
            $user->image_url = $name;
            $user->save();
            return back()->with('success','Image Upload successfully');
        }

    }
}

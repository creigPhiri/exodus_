<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UsersController extends Controller
{
    public function showAll()
    //shows all the users in the database
    {
        $users = User::all();
        return view('Users.users',compact('users'));
    }

    public function viewProfile(User $user)
    {
        return view('users.user_profile',compact('user'));
    }

}

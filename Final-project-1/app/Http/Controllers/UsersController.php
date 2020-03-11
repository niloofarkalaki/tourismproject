<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function getPrivilege()
    {

        $user = User::class();
        if($user->Privilge()->find(1)!= null || $user->Privilege()->find(2)!= null )
        {
            return view('panel');
        }
        else {
            return redirect(url('/'));
        }
    }
}

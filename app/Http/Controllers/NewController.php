<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class NewController extends Controller
{
    //
    public function records()
    {
        $user = User::find(1);	
 
        dd($user->roles);
        $role = Role::find(1);	
         
        dd($role->users);    }
}


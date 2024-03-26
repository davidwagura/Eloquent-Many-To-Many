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
        // $user = User::find(1);	
        // dd($user->roles);

        $role = Role::find(1);	
        dd($role->users);    
    }
    public function create()
    {
        $user = User::find(2);	
 
        $roleIds = [1, 2];
        $user->roles()->attach($roleIds);


        $user = User::find(3);	
        $roleIds = [1, 2];
        $user->roles()->sync($roleIds);

        $role = Role::find(1);
        $userIds = [4, 2];
        $role->users()->attach($userIds);

        $role = Role::find(2);

        $userIds = [3, 1];
        $role->users()->sync($userIds);
    }
    
}


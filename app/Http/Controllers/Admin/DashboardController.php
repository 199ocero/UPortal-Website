<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class DashboardController extends Controller
{
    public function adminRoles(){
        $users = User::all();
        return view('admin.admin')->with('users',$users);
    }

    public function adminEdit($id){
        $users = User::findorFail($id);
        return view('admin.admin-edit')->with('users', $users);
    }

    public function adminCreate()
    {
        return view('auth.register');
    }

        
}

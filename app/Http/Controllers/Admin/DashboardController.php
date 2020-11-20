<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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

    public function adminCreate(Request $request)
    {
        $admin = new User();

        $admin->id = $request->input('id');
        $admin->fname = $request->input('fname');
        $admin->lname = $request->input('lname');
        $admin->mname = $request->input('mname');
        $admin->usertype = $request->input('usertype');
        $admin->email = $request->input('email');
        $passhash= Hash::make($request->input('password'));
        $admin->password = $passhash;

        $admin->save();
        return redirect('/admin');
    }

    public function adminDelete($id){
        $user = User::findOrFail($id);
        $user->delete();
        return redirect('/admin');
    }

    

        
}

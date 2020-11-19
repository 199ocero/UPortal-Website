<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    public function adminRoles(){
        $users = Admin::all();
        return view('admin.admin')->with('users',$users);
    }

    public function adminEdit($id){
        $users = Admin::findorFail($id);
        return view('admin.admin-edit')->with('users', $users);
    }

    public function adminCreate(Request $request)
    {
        $admin = new Admin();

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

    public function accountValidate(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $emaildb = DB::table('admins')->where('email', $email)->value('email');

        if(!empty($emaildb)){
            $passwordb = DB::table('admins')->where('email', $email)->value('password');
            if (password_verify($password, $passwordb)) {
                $fnamedb = DB::table('admins')->where('email', $email)->value('fname');
                return redirect('/dashboard')->with('fnamedb',$fnamedb);
            } else {
                echo 'Its not working nigga!';
            }
        }
        else{
            echo "wala sa database";
        }
        


    }

        
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Agent;
use App\Models\Notary;
class AdminController extends Controller
{
    public function login()
    {
        return view('admin/login', [
            "title" => "Welcome Admin",
            "subtitle" => "Masukkan kredensialmu untuk akses akunmu."
        ]);
    }


    public function loginPost(Request $request)
    {
        // if($_SERVER["REQUEST_METHOD"] == "POST")
        /* $username = $_POST["username"]; */

        $username = $request->input("username");
        $password = $request->input("password");

        /* $user = "select * from user where username=$username and password=$password"; */
        /* if ($user != null) { */

        $isSuccessLogin = Auth::attempt([
            "username" => $username,
            "password" => $password
        ]);

        if ($isSuccessLogin) {
            /* header("Location: /admin/home.php"); */
            return redirect("/admin/home");

            /* $_SESSION["key"] = "value"; */
            /**/
            /* session([ */
            /*     "key" => "value" */
            /* ]); */
        } else {
            return redirect("/admin/login")
                ->with("loginStatus", "Username atau password salah");
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect("/admin/login")
            ->with("loginStatus", "Logout berhasil");
    }

    public function accountManage() {
         return view('admin/manage-acc', [
            "pageTitle" => "Registrasi Agen dan Notaris"
        ]);
    }

    public function home() {
        $stat = [
            [
                "title" => "Total Agen",
                "count" => Agent::count()
            ],
            [
                "title" => "Total Notaris",
                "count" => Notary::count()
            ]
        ];

        return view('admin/home-admin', [
            "pageTitle" => "Dashboard",
            "stat" => $stat
        ]);
    }

    public function user() {
        $users = User::all();
    
         return view('admin/user', [
            "pageTitle" => "Daftar Pengguna",
            "users" => $users
        ]);

    }

    public function homePost(Request $request){
        $fullname = $request->input("fullname");
        $email = $request->input("email");
        $call = $request->input("call");
        $username = $request->input("username");
        $password = $request->input("password");
        $role = $request->input("role");

        if($request->hasFile("profile_image")){
            $file = $request->file("profile_image");
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('profile'), $filename);
        } else{
            $filename = 'default.png';     
        }
       
        $user = User::create([
            "fullname" => $fullname,
            "email" => $email,
            "telp_number" => $call,
            "username" => $username,
            "password" => bcrypt($password),
            "role" => $role,
            "profile" => $filename
        ]);

        return redirect('/admin/user');
        $agent = Agent::Create([
            "user_id" => $user->id
        ]);
    }
}

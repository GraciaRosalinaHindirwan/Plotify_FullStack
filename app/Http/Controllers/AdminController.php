<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function accountManage() {}

    public function home() {}

    public function user() {}
}

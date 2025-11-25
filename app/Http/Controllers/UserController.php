<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function username($name){
        // return "THis is call from cconteller";
        $name = "Vivek";
        $users = ["Vivek", "Sam", "John", "Doe"];
        return view('user', ['name' => $name, 'users' => $users]);
    }
    function adminLogin(){
        return view('admin.login');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($user='me')
    {
        echo $user;
        echo ',  This is Userw Controller!!!';
        echo "\n";
        // return ['name'=>'ABC', 'age'=>'123'];
        return $this->loadView($user);
    }

    public function loadView($user)
    {
        $data=['ali','abu','siti'];
        return view('user',['user'=>$user, 'datas'=>$data]);
    }
}

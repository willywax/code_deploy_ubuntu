<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{

    public function index(){
        return view('index');
    }

    public function getUser(){
        $users = User::all();

        return view('users',compact('users'));
    }

    public function createUser(\Illuminate\Http\Request $request){
        $data = $request->all();
        $user = User::createUser($data);

        return $this->getUser();
    }

    public function getUserForm(){
        return view('new_user');
    }
}

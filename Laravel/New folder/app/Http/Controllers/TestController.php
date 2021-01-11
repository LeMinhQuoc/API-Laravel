<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class TestController extends Controller
{
    //
    public function getUser(){
        $user = UserModel::all();
        return $user;
        // return $type;
     }

     public function addUser(Request $request){
        return $request;
      
     }
}

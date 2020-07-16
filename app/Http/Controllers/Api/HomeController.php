<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequests;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function index(UserRequests $request){
//        dd($request->all());
        $count = $request->get('paginate');
        $users = User::paginate($count);

        return $users;

    }
}

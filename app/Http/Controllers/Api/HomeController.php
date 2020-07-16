<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public  function index(Request $request){
//        dd($request->all());
        $count = $request->get('paginate');
        $users = User::take($count)->get();

        return $users;

    }
}

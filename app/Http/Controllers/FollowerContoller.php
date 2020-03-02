<?php

namespace App\Http\Controllers;

use App\Follower;
use App\Follwer;
use Illuminate\Http\Request;

class FollowerContoller extends Controller
{
    //
    public function index()
    {
        $followers = Follower::all();

        return view('follwers.index', compact('followers'));
    }
}

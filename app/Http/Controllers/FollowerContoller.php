<?php

// namespace = 苗字やクラス（学校）名のイメージ
//class名 = 名前
//classめいは重複してはいけない

namespace App\Http\Controllers;

use App\Follower;
use App\Follwer; //as で略称ができる //クラスで同じ名前を使いたい時
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

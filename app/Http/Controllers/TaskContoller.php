<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TaskContoller extends Controller
{
    //
    public function index()
    {
        //データの取得
        //データの取得はModelにお願いする
        //all = デーブルのレコードを全て取得
        //Class Taskに対応しているテーブルのレコード
        $tasks = Task::all();
        //dd($tasks);


        //viweを返す
        return view('tasks.index', compact('tasks'));

        dd(123);
    }
}



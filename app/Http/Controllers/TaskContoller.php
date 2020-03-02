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

    }

    public function create()
    {
        return view('tasks.create');
    }

    public function store(Request $request)
    {
        $request->all();

        //データの保存（model）
        Task::create([
            'tel' => $request->input('tel'),
        ]);

        //一覧に戻る（view）
        return redirect()->to('list');

    }
}



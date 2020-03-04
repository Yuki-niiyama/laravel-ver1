<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtask;
use App\Http\Requests\Updatetask;
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

    public function store(Createtask $request)
    {
        $request->all();

        //バリデーション
        // $request->validate([
        //     'tel' => 'numeric'
        // ]);

        //データの保存（model）
        Task::create([
            'tel' => $request->input('tel'),
        ]);

        //一覧に戻る（view）
        return redirect()->to('list');

    }

    public function edit(int $id)
    {
        //編集対象のデータを取得する
        $task = Task::find($id);

        //編集画面を表示する
        return view('tasks.edit', compact('task'));
        //tasks/edit.blade.php
        //$tasksは渡す
        //create.php.phpをコピーでOK
    }

    public function update(Updatetask $request, int $id)
    {
        //更新する対象のデータを取得
        $task = Task::find($id);
        //更新
        $task->update([
            'tel' => $request->tel,
        ]);

        //一覧に戻り
        return redirect()->to('list');

    }

    //引数＄id int(条件)
    public function delete(int $id)
    {
        //選択されたデータの取得
        $task = Task::find($id);


        //選択データの削除
        $task -> delete();

        //
        return redirect()->to('list');
    }



}

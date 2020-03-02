<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\comment;

class commentContoller extends Controller
{
    //
    public function index()
    {
        $comments = comment::all();

        return view('comment.index', compact('comments'));

    }
    

}

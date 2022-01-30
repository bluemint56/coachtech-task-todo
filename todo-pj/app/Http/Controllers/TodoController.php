<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
  //indexを表示
    public function index()
    {
        $items = Todo::all();
        return view('index', ['items' => $items]);
    }
  //createメソッド
    public function create(Request $request)
    {
        $items = $request->all();
        $this->validate($request, Todo::$rules);
        $items = Todo::create($items);
        return redirect('/');
    }
}

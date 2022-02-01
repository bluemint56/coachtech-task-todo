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
        $form = $request->all();
        $this->validate($request, Todo::$rules);
        $items = Todo::create($form);
        return redirect('/');
    }

  //updateメソッド
    public function update(Request $request)
    {
        $form = $request->all();
        $this->validate($request, Todo::$rules);
        unset($form['_token']);
        Todo::where('id', $request->id)->update($form);
        return redirect('/');
    }
}

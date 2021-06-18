<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

use Auth;

class TodoController extends Controller
{
    public  function home(){
        $userid = Auth::user()->id;
        $todos = Todo::where(['userid' => $userid])->get();
        //dd($todo);
        return view('home',['todos'=>$todos]);
    }

    public function store(Request $request){
        //dd($request->post('title'));
        $validatedData = $request->validate([
            'title' => 'required|max:124',
         ]);
        //dd($validatedData);
        //Todo::create($validatedData);

        $todo = new Todo;
        $todo->title  = $request->title;
        $todo->userid = Auth::user()->id;
        $todo->save();
        return redirect(route('home'));
        //return back();
    }

    public function edit(Todo $todo)
    {
        return view('update',compact('todo'));
    }

    public function update(Request $request, Todo $todo)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:124'
        ]);
        $todo->update($validatedData);
        return redirect(route('home'));
    }

    public function delete(Todo $todo)
    {
        $todo->delete();
        return back();
    }
}

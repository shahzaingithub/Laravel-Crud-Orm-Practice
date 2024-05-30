<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\todo;
use Illuminate\Support\Facades\Hash;
class todocontroller extends Controller
{
    public function insert(Request $req){
        $todo = new todo();
        $todo->name = $req->name;
        $todo->email = $req->email;
        $todo->password =Hash::make($req->password); 
        $todo->save();
        return redirect()->route('todo.index');
    }
    public function showdata(){
        $todos = todo::all();
        return view('todo/index', compact('todos')); 
    }

    public function updateget(string $id){
        $todosupd = todo::find($id);
        return view('todo/update', compact('todosupd')); 
    }

    public function updatepost($id,Request $req){
        $todo=todo::find($id);
        $todo->name = $req->name;
        $todo->email = $req->email;
        $todo->password =Hash::make($req->password); 
        $todo->save();
        return redirect()->route('todo.index');
    }

    public function deletetodo($id){
        $todo=todo::find($id);
        $todo->delete();
        return redirect()->route('todo.index');
    }


}

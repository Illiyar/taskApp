<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tasks;
use App\Http\Requests\taskRequest;

class taskController extends Controller
{
    public function showTasks(taskRequest $req){
      $tasks = new tasks();
      $tasks->task = $req->name;
      $tasks->save();
      return redirect()->route('home')->with('success', 'Данные добавлены');
    }

    public function taskDelete($id){
      tasks::find($id)->delete();

      return redirect()->route('home')->with('success', 'Задача удалена');
    }

      public function allTasks(){
        return view('home', ['tasks' => tasks::all()]);
      }
}

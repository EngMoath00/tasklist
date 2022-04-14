<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TaskController extends Controller
{
    public function index()
    {
        //this function retrive data from DB
        $tasks = $this->retriveData();
        return view('tasks.index', compact('tasks'));
    }


    public function store(Request $request)
    {
        DB::table('tasks')->insert(
            [
                'name' => $request->name
            ]
        );

        return redirect()->back();
    }

    public function destroy($id)
    {
        DB::table('tasks')
            ->where('id', '=', $id)
            ->delete();

        return redirect()->back();
    }

    public function edite(Request $request)
    {

        $task = DB::table('tasks')
            ->select('id', 'name')
            ->find($request->id);

        $tasks = $this->retriveData();

        return view('tasks.index', compact('task', 'tasks'));
    }


    public function update(Request $request)
    {
        DB::table('tasks')
            ->where('id', '=', $request->id)
            ->update(['name' => $request->name]);

        return redirect()->route('tasksIndex');
    }

    public function retriveData()
    {
        $tasks = DB::table('tasks')
            ->orderBy('name', 'asc')
            ->get();

        return $tasks;
    }
}

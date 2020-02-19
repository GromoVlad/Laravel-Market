<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \DB;

class TasksController extends Controller
{
    public function showTasks()
    {
        $tasks = DB::table('tasks')->get();
        return view('tasks', compact('tasks'));
    }

    public function sendTask(Request $request)
    {
        DB::table('tasks')->where('id', $request->id)->update(['counter' => $this->incrementCounter($request)]);
        DB::insert('insert into logs (task_id, status) values (?, ?)', [$request->id, 0]);
        return redirect()->action('TasksController@showTasks');
    }

    public function turn()
    {
        $logs = DB::table('logs')->where('status', 0)->orderBy('created_at', 'desc')->get();
        return view('turn', compact('logs'));
    }

    public function takeToWork()
    {
        $firstLog = DB::table('logs')->where('status', 0)->get()->first();
        DB::table('logs')->where('id', $firstLog->id)->update(['status' => 1]);
        return redirect()->action('TasksController@showTasks');
    }

    private function incrementCounter($request)
    {
        $counter = DB::table('tasks')->where('id', $request->id)->value('counter');
        $counter++;
        return $counter;
    }

}

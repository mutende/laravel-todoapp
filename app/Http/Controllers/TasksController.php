<?php

namespace App\Http\Controllers;

use App\Model\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;


class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        if(Auth::check()){
             //get all tasks
        $tasks = Task::where('user_id', Auth::user()->id)->orderBy('due_date', 'asc')->paginate(6);

        return view('tasks.index')->withTasks($tasks);
        }else{
            return redirect('/');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::check()){
            return view('tasks.create');
        }else{
            return redirect('/');
        }

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if(Auth::check()){
           //validate data
        $this->validate($request,[
            'name' => 'required|string|max:100|min:5',
            'description' => 'required|string|max:1000|min:10',
            'due_date' => 'required|date',
        ]);

        //create a new task
        $task = new Task;
        $task->name = $request->name;
        $task->description = $request->description;
        $task->due_date = $request->due_date;
        $task->user_id = Auth::user()->id;

        // save the task
        $task->save();

        //alert user
        Session::flash('success', 'New task added');

        //redirect
        return redirect()->route('task.index');

        }else{

            return redirect('/');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if(Auth::check()){
            $task = Task::find($id);
            return view('tasks.update')->withTask($task);
        }else{
            return redirect('/');
        }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if(Auth::check()){

            //validate data
        $this->validate($request,[
            'name' => 'required|string|max:100|min:5',
            'description' => 'required|string|max:1000|min:10',
            'due_date' => 'required|date',
        ]);

        //find related task
        $task = Task::find($id);
        $task->name = $request->name;
        $task->description = $request->description;
        $task->due_date = $request->due_date;

        // save the task
        $task->save();

        //alert user
        Session::flash('success', 'Task updated successfully');

        //redirect
        return redirect()->route('task.index');

        }else{

            return redirect('/');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        if(Auth::check()){
           //get task to delete
            $task= Task::find($id);
            $task->delete();
         //alert user
         Session::flash('success', 'Task was deleted');
          //redirect
        return redirect()->route('task.index');
        }else{
            return redirect('/');
        }


    }
}

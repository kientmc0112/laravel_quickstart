<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Task;
use App\Http\Requests\TaskRequest;


class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Task::all();
        return view('task.index')->with('tasks', $tasks);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('task.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TaskRequest $request)
    {
        $data = $request->all();
        $task = new Task();
        $task->name = $data['name'];
        $task->save();
        return redirect('/list_task');
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
        $task = $this->search($id);
        return view('task.edit')->with('task', $task;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TaskRequest $request, $id)
    {
        $data = $request->all();
        $task = $this->search($id);
        $task->name = $data['name'];
        $task->save();
        return redirect('/list_task');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = $this->search($id);
        $task->delete();
        return redirect('/list_task');
    }

    public function search($id)
    {
        try {
            $task = Task::findOrFail($id);
            return $task;
        }
        catch (ModelNotFoundException $e) {
            echo $e->getMessage();
        }
    }
}

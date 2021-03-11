<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\User;
use App\Models\TaskGroup;
use App\Models\Status;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $task;

    public function __construct(Task $task)
    {
        $this->task = $task;
    }

    public function index()
    {
        $tasks = $this->task->paginate(4);

        return view('tasks.index', compact(['tasks']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all(['id', 'name']);
        $taskgroups = TaskGroup::all(['id', 'name']);
        $status = Status::all(['id', 'name']);
        
        return view('tasks.create', compact(['users', 'taskgroups', 'status']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        
        $user = User::find($data['user_id']);
        $taskGroup = TaskGroup::find($data['taskgroup_id']);
        $status = Status::find($data['status_id']);
        
        $data['taskgroup_id'] = (string)$taskGroup->id;
        $data['status_id'] = (string)$status->id; 

        $user->tasks()->create($data);
        // $taskGroup->tasks()->create($data);
        // $status->tasks()->create($data);

        flash("Tarefa Cadastrada com sucesso")->success();
        return redirect()->route('tasks.index');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

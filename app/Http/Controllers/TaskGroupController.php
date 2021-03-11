<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaskGroup;

class TaskGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $taskGroup;

    public function __construct(TaskGroup $taskGroup)
    {
        $this->taskGroup = $taskGroup;
    }

    public function index()
    {
        $taskGroups = $this->taskGroup->paginate(4);
        
        return view('taskgroups.index', compact(['taskGroups']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('taskgroups.create');
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
        $this->taskGroup->create($data);

        flash('Grupo de Tarefa cadastrado com sucesso.')->success();
        return redirect()->route('taskgroups.index');
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
        $taskGroup = $this->taskGroup->find($id);

        return view('taskgroups.edit', compact(['taskGroup']));
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
        $data = $request->all();
        $taskGroup = $this->taskGroup->find($id);
        $taskGroup->update($data);

        flash('Grupo de Tarefa atualizado com sucesso.')->success();
        return redirect()->route('taskgroups.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $taskGroup = $this->taskGroup->find($id);
        $taskGroup->delete();

        flash('Grupo de Tarefa removido com sucesso.')->success();
        return redirect()->route('taskgroups.index');
    }
}

@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <h4 class="display-5">Tarefas</h4>
        </div>
    </div>

    <div class="row">
        <div class="container my-2">
            <a href="{{ route('tasks.create') }}" class="btn btn-success">Cadastrar Tarefa</a>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <td width="5%">Id.</td>
                        <td width="15%">Tarefa</td>
                        <td width="45%">Observação</td>
                        <td width="20%">Ações</td>
                    </tr>
                </thead>
                <tbody>
                    @if(count($tasks))
                        @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>                            
                            <td>{{ $task->description }}</td>
                            <td>{{ $task->note }}</td>
                            <td>
                                <a href="{{ route('tasks.edit', ['id' => $task->id]) }}" class="btn btn-primary btn-sm">Editar</a>
                                <a href="{{ route('tasks.destroy', ['id' => $task->id]) }}" class="btn btn-danger btn-sm">Remover</a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class='text-center'>Nenhuma Tarefa Cadastrada</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
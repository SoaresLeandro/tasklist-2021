@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <h4 class="display-5">Grupos de Tarefas</h4>
        </div>
    </div>

    <div class="row">
        <div class="container my-2">
            <a href="{{ route('taskgroups.create') }}" class="btn btn-success">Cadastrar Grupo de Tarefa</a>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <td width="5%">Id.</td>
                        <td width="15%">Grupo de Tarefa</td>
                        <td width="45%">Descrição</td>
                        <td width="20%">Ações</td>
                    </tr>
                </thead>
                <tbody>
                    @if(count($taskGroups))
                        @foreach($taskGroups as $taskgroup)
                        <tr>
                            <td>{{ $taskgroup->id }}</td>
                            <td>{{ $taskgroup->name }}</td>
                            <td>{{ $taskgroup->description }}</td>
                            <td>
                                <a href="{{ route('taskgroups.edit', ['id' => $taskgroup->id]) }}" class="btn btn-primary btn-sm">Editar</a>
                                <a href="{{ route('taskgroups.destroy', ['id' => $taskgroup->id]) }}" class="btn btn-danger btn-sm">Remover</a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class='text-center'>Nenhum Grupo de Tarefa Cadastrado</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
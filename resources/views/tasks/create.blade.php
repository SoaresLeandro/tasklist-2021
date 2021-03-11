@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <h5 class="alert alert-dark">Criação Tarefa</h5>
    </div>

    <form class="container" action="{{ route('tasks.store') }}" method="post">
        @csrf 

        <div class="row form-group">
            <div class="col-sm-12">
                <label for="description">Tarefa</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>
        </div>

        <div class="row form-group">
            <div class="container">
                <label for="note">Observação</label>
                <input type="text" name="note" id="note" class="form-control">
            </div>
        </div>

        
            <div class="row form-group">
                @if(count($users))
                    <div class="col-sm-4">
                        <label for="user_id">Usuário</label>
                        <select name="user_id" id="user_id" class="form-control">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif

                @if(count($taskgroups))
                    <div class="col-sm-4">
                        <label for="taskgroup_id">Grupo de Tarefa</label>
                        <select name="taskgroup_id" id="taskgroup_id" class="form-control">
                            @foreach($taskgroups as $taskgroup)
                                <option value="{{ $taskgroup->id }}">{{ $taskgroup->name }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif

                @if(count($status))
                    <div class="col-sm-4">
                        <label for="status_id">Status</label>
                        <select name="status_id" id="status_id" class="form-control" readonly>
                            @foreach($status as $s)
                                @if($s->name == 'Aberto')
                                <option value="{{ $s->id }}" selected>{{ $s->name }}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                @endif
            </div>
        

        

        <div class="form-group">
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
    </form>

@endsection
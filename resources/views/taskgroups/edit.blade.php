@extends('layouts.app')

@section('content')

    <div class="container-fluid">
        <h5 class="alert alert-dark">Edição de Grupo de Tarefa</h5>
    </div>

    <form class="container" action="{{ route('taskgroups.update', ['id' => $taskGroup->id]) }}" method="post">
        @csrf 

        <div class="row form-group">
            <div class="col-sm-4">
                <label for="name">Grupo de Tarefa</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $taskGroup->name }}">
            </div>

            <div class="col-sm-8">
                <label for="description">Descrição</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ $taskGroup->description }}">
            </div>
        </div>

        <div class="row form-group">
            <div class="container">
                <label for="note">Observação</label>
                <input type="text" name="note" id="note" class="form-control" value="{{ $taskGroup->note }}">
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>

@endsection
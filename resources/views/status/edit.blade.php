@extends('layouts.app')

@section('content')


    <div class="container-fluid">
        <h4 class="alert alert-dark">Edição de Status</h4>
    </div>




    <form class="container" action="{{ route('status.update', ['id' => $status->id]) }}" method="post">
        @csrf 

        <div class="row form-group">
            <div class="col-sm-4">
                <label for="name">Status</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ $status->name }}">
            </div>

            <div class="col-sm-8">
                <label for="description">Descrição</label>
                <input type="text" name="description" id="description" class="form-control" value="{{ $status->description }}">
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Salvar</button>
        </div>
    </form>

@endsection
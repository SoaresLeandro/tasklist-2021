@extends('layouts.app')

@section('content')

<div class="row">
    <form class="container" action="{{ route('status.store') }}" method="post">
        @csrf 

        <div class="row form-group">
            <div class="col-sm-4">
                <label for="name">Status</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="col-sm-8">
                <label for="description">Descrição</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
    </form>
</div>

@endsection
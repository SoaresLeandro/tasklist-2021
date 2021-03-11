@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="container">
            <h4 class="display-5">Status</h4>
        </div>
    </div>

    <div class="row">
        <div class="container my-2">
            <a href="{{ route('status.create') }}" class="btn btn-success">Cadastrar Status</a>
        </div>
    </div>

    <div class="row">
        <div class="container">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <td width="5%">Id.</td>
                        <td width="15%">Status</td>
                        <td width="45%">Descrição</td>
                        <td width="20%">Ações</td>
                    </tr>
                </thead>
                <tbody>
                    @if(count($status))
                        @foreach($status as $s)
                        <tr>
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->description }}</td>
                            <td>
                                <a href="{{ route('status.edit', ['id' => $s->id]) }}" class="btn btn-primary btn-sm">Editar</a>
                                <a href="{{ route('status.destroy', ['id' => $s->id]) }}" class="btn btn-danger btn-sm">Remover</a>
                            </td>
                        </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="4" class='text-center'>Nenhum Status Cadastrado</td>
                        </tr>
                    @endif
                </tbody>
            </table>
        </div>
    </div>
@endsection
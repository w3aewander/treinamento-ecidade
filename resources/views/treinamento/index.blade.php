@extends('layouts.treinamento')

@section('content')

<header-component></header-component>

    <div class="container">
        <h1>Treinamento</h1>
        <p>Bem-vindo à página de treinamento!</p>


            <div class="card mb-3">
                <div class="card-header">
                    <h5 class="card-title">Treinamentos</h5>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Nome</th>
                                <th>Descricao</th>
                                <th>Carga horária</th>
                                <th colspan="2">Ações</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($treinamentos as $treinamento)
                                <tr>
                                    <td>{{ $treinamento->id }}</td>
                                    <td>{{ $treinamento->nome }}</td>
                                    <td>{{ $treinamento->descricao }}</td>
                                    <td>{{ $treinamento->carga_horaria}}</td>
                                    <td>
                                        <a href="{{ route('treinamento.show', $treinamento->id) }}" class="btn btn-info btn-sm">Visualizar</a>
                                        <a href="{{ route('treinamento.edit', $treinamento->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                        <form action="{{ route('treinamento.destroy', $treinamento->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr><td cols-span="4" class="text-center">Total de Treinamentos: {{ $treinamentos->count() }}</td></tr>
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="{{route('welcome')}}" class="btn btn-secondary"><i class="fa fa-home"></i> Voltar</a>
                    <a href="{{route('treinamento.create')}}" class="btn btn-primary">Adicionar Treinamento</a>
                </div>

            </div>

    </div>

    <footer-component></footer-component>
@endsection

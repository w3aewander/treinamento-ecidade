@extends('layouts.treinamento')

@section('content')
<header-component></header-component>
<div class="container">
    <h1>Detalhes do Treinamento</h1>
    <div class="card mb-3">
        <div class="card-header">
            <h5 class="card-title">{{ $treinamento->nome }}</h5>
        </div>
        <div class="card-body">
            <p><strong>Descrição:</strong> {{ $treinamento->descricao }}</p>
            <p><strong>Local:</strong> {{ $treinamento->local }}</p>
            <p><strong>Instrutor:</strong> {{ $treinamento->instrutor }}</p>
            <p><strong>Data de Início:</strong> {{ $treinamento->data_inicio }}</p>
            <p><strong>Data de Término:</strong> {{ $treinamento->data_fim }}</p>
            <p><strong>Carga Horária:</strong> {{ $treinamento->carga_horaria }} horas</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('treinamento.edit', $treinamento->id) }}" class="btn btn-warning">Editar</a>
            <form action="{{ route('treinamento.destroy', $treinamento->id) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Excluir</button>
            </form>
            <a href="{{ route('treinamentos.index') }}" class="btn btn-secondary">Voltar</a>
        </div>
    </div>
</div>

<footer-component></footer-component>

@endsection

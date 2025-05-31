@extends('layouts.treinamento')
@section('content')
<header-component></header-component>
<div class="container">
    <h1>Novo Treinamento</h1>
    <form action="{{ route('treinamento.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" required>
        </div>
        <div class="mb-3">
            <label for="descricao" class="form-label">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="local" class="form-label">Local</label>
            <input type="text" class="form-control" id="local" name="local" required />
        </div>

        <div class="mb-3">
            <label for="instrutor" class="form-label">Instrutor</label>
            <input type="text" class="form-control" id="instrutor" name="instrutor" required />
        </div>

        <div class="mb-3">
            <label for="data_inicio" class="form-label">Inicio</label>
            <input type="date" class="form-control" id="data_inicio" name="data_inicio" required />
        </div>

        <div class="mb-3">
            <label for="data_fim" class="form-label">Término</label>
            <input type="date" class="form-control" id="data_fim" name="data_fim" required />
        </div>

        <div class="mb-3">
            <label for="carga_horaria" class="form-label">Carga Horária</label>
            <input type="number" class="form-control" id="carga_horaria" name="carga_horaria" required>
        </div>
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a href="{{ route('treinamentos.index') }}" class="btn btn-secondary">Voltar</a>
    </form>
</div>
<footer-component></footer-component>
@endsection

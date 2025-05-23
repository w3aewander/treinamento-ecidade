@extends('layouts.treinamento')


@section('content')

 <header-component></header-component>

<div class="container">

    <h2>Equipe de Ouro - DevTeam</h2>
    <equipe-component></equipe-component>

    <div class="row my-5">
        <div class="col-md-12">
            <a class="btn btn-primary" href="{{ route('treinamentos.index') }}">Treinamentos</a>
        </div>
    </div>

</div>

@endsection

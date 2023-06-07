@extends('app.layouts.base')
@section('titulo')
    Super Gestor - Fornecedor - Edite
@endsection
@section('conteudo')
    <div class="conteudo-pagina">
        <div class="titulo-pagina-2">
            <h1>Editar Fornecedor</h1>
        </div>
        <div class="menu">
            <ul>
                <li> <a href="{{ route('app.fornecedores.create') }}">Novo</a> </li>
                <li> <a href="{{ route('app.fornecedores.show') }}">Consultar</a> </li>
            </ul>
        </div>

        <div class="informacao-pagina">
            @include('app.fornecedor._form')
        </div>  
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection
@extends('app.layouts.base')
@section('titulo')
    Super Gestor - Cliente
@endsection

@section('conteudo')

    <div class="row">
        <div class="titulo-pagina-2">
            <h1>Clientes</h1>
        </div>
        <div class="col-md-12" style="width: 70%; margin-left: auto; margin-right: auto">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> {{$cliente->nome}} </h3>
                    <div class="card-tools">
                    </div>
                </div>
                <div class="card-body">
                    {{-- <div class="row"> --}}
                        {{-- <div class="col-md-6"> --}}
                            <div class="callout callout-info">
                                <b>ID: </b> {{$cliente->id}}<br>
                                <b>E-mail: </b> {!!($cliente->email) ? '<span class="text-primary">' . $cliente->email . '</span>' : '<span class="text-danger">Não informado</span>'!!}<br>
                                {{-- <b>Usuário autoriza pelo setor de engenharia ?: </b>
                                    @if ($cliente->pessoa->engenharia == 1)
                                        SIM
                                    @else
                                        NÃO
                                    @endif
                                <br> --}}
                                {{-- <b>Usuário autoriza pelo setor de segurança no trabalho ?: </b>
                                    @if ($cliente->pessoa->seguranca == 1)
                                        SIM
                                    @else
                                        NÃO
                                    @endif
                                <br> --}}
                                <b>Uf: </b> {{ $cliente->uf }}<br>
                                <b>Site: </b> {{$cliente->site}}<br>
                            </div>
                            <br>
                            <div class="card">
                                <div class="card-header bg-primary font-weight-bold">
                                    <h5 style="color: white">Pedidos</h5>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-striped table-responsive-md">
                                        <thead class="table-info">
                                            <tr>
                                                <th>Nome</th>
                                                <th>Peso</th>
                                                <th>Unidade</th>
                                                <th>Descrição</th>
                                                <th>Ações</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($cliente->pedidos as $pedido)
                                            <tr>
                                                <td>{{ $pedido->nome}}</td>
                                                <td>{{ $pedido->peso}}</td>
                                                <td>{{ $pedido->unidade_id}}</td>
                                                <td>{{ $pedido->descricao}}</td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button class="btn btn-light" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                                            <i class="fas fa-ellipsis-v"></i>
                                                        </button>
                                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenu2">
                                                            <a href="{{ route('app.pedidos.show', $pedido->id) }}" class="dropdown-item"><i class="fas fa-eye"></i> Visualizar</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                            @empty
                                            <div class="">
                                                <ul class="nav nav-pills">
                                                    <li class="nav-item">
                                                        <a href="{{ route('app.pedidos.create') }}" class="nav-link active"><i class="fas fa-plus-circle"></i> NOVO PEDIDO</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <tr><td colspan="4"><span class="text-danger">Nenhum registro encontrado.</span></td></tr>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            {{-- <div class="callout callout-info">
                                <b>Estado </b> 
                                {!!($usuario->active) ? '<span class="badge badge-pill badge-success">ATIVO</span>' : '<span class="badge badge-pill badge-danger">INATIVO</span>'!!}
                                    
                                { {--<br>
                                <b>Perfil </b> {!!($perfil) ? $perfil->nome : '<span class="badge badge-pill badge-danger">NÃO INFORMADO</span>' !!} --} }
                                
                                <br>
                            </div> --}}
                        {{-- </div> --}}
                        
                        {{-- <div class="callout callout-info col-md-6 border p-2 text-center">
                            <img class="img-fluid" src="{{env('APP_URL_GESTOR')}}/{{str_replace('public', 'storage', $usuario->imagem)}}" width="500" alt="{{mb_strtoupper($usuario->nome)}}" title="{{mb_strtoupper($usuario->nome)}}">
                            @if($usuario->where('imagem_origem', 'c'))
                                <img class="img-fluid" src="{{url('/')}}/storage/{{$usuario->imagem}}" width="500" alt="{{mb_strtoupper($usuario->nome)}}" title="{{mb_strtoupper($usuario->nome)}}">    
                            @else
                                <img class="img-fluid" src="{{env('APP_URL_GESTOR')}}/storage/{{$usuario->imagem}}" width="500" alt="{{mb_strtoupper($usuario->nome)}}" title="{{mb_strtoupper($usuario->nome)}}">    
                            @endif
                            
                        </div> --}}
                    {{-- </div> --}}
                    <hr>
                    <div class="dropdown-divider"></div>
                    <div class="row col-md-12">
                        <div class="mr-2">
                            <a href="{{route('app.fornecedores.index', $cliente->id)}}" class="btn btn-outline-danger"><i class="fas fa-undo"></i> Voltar</a>
                                        
                            {{-- @if (($cliente->id == auth()->usuario()->id ) || ( auth()->usuario()->companies->firstWhere('superadmin', 1))) --}}
                                
                                <a href="{{ route('app.fornecedores.edite', $cliente->id) }}" class="btn btn-outline-success"><i class="fas fa-edit"></i> Editar </a>
                            
                            {{-- @endif --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


{{-- Removendo o registro --}}
<script>
    function remover(fornecedor){
        $confirmacao = confirm('Tem certeza que deseja remover este Funcionário?');

        if($confirmacao){
            window.location.href = "{{url('/')}}/construtoras/"+company+"/funcionarios/"+funcionario+"/destroy"
        }
    }
</script>

@extends('layouts.sb-admin-2.projeto.corpo')
@section('content')
@include('layouts.sb-admin-2.topo_msg')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-users"></i> Listar Clientes</h1>
    <nav aria-label="breadcrumb-sistema">
        <ol class="breadcrumb-sistema">
            <li class="breadcrumb-sistema-item"><a href="{{ route('home') }}"><i class="fas fa-fw fa-home"></i> Inicio</a></li>
            <li class="breadcrumb-sistema-item"><a href="{{ route('clientes.index') }}"><i class="fas fa-users"></i> Clientes</a></li>
            <li class="breadcrumb-sistema-item active">Listar</li>
        </ol>
    </nav>
</div>
@include('clientes.index_topo')
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered data-table-padrao" id="data-table-clientes" width="100%" cellspacing="0">
                <thead >
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>End. de instalação</th>
                        <th class="text-center">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    @if(!empty($clientes))
                        @foreach ($clientes as $cliente)
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->nome_cliente }}</td>
                            <td>{{ $cliente->endereco_instalacao }}</td>
                            <td class="text-center">
                                <a data-toggle="tooltip" data-placement="top"  title="Visualzar"class="btn btn-info btn-sm " href="{{ route('clientes.visualizar',$cliente->id) }}"><i class="fas fa-search"></i></a>
                                <a data-toggle="tooltip" data-placement="top"  title="Editar" class="btn btn-warning btn-sm" href="{{ route('clientes.editar',$cliente->id) }}"><i class="fas fa-pen"></i></a>
                                <a href="#" data-action="{{ route('clientes.deletar',$cliente->id) }}" data-msg="Deseja remover o cliente  <b>{{ $cliente->nome }}</b> ?"  data-toggle="tooltip" data-placement="top"  title="Deletar" class="btn btn-danger btn-sm botao-deletar">
                                    <i class="fas fa-times-circle"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach            
                    @endif
                </tbody>
            </table>  
            <div class="float-left">
                <div class="dataTables_info">
                    <i> Mostrando {!! $clientes->firstItem() !!} a {!!$clientes->lastItem() !!} de um total de {!!$clientes->total() !!}  </i>
                </div>
            </div>
            <div class="float-right">
                {!! $clientes->appends($_GET)->links() !!}
            </div>
        </div>    
    </div>    
</div> 
@include('layouts.sb-admin-2.index_modals', ['titulo' => 'Remover Cliente', 'mensagem' => 'Selecione "Sim" para remover o Cliente.'])
<script type="text/javascript" src="{{asset('js/clientes/index.js')}}"></script> 
@endsection
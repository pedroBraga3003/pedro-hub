@extends('layouts.sb-admin-2.projeto.corpo')
@section('content')
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-users"></i> Visualizar cliente</h1>
        <nav aria-label="breadcrumb-sistema">
            <ol class="breadcrumb-sistema">
                <li class="breadcrumb-sistema-item"><a class="" href="{{ route('home') }}"><i class="fas fa-fw fa-home"></i> Inicio</a></li>
                <li class="breadcrumb-sistema-item"><a class="" href="{{ route('clientes.index') }}"><i class="fas fa-users"></i> Clientes</a></li>
                <li class="breadcrumb-sistema-item active">Editar</li>
            </ol>
        </nav>
    </div>
    
    <div class="row pt-4">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nome:</strong>
                {{ $cliente->nome_cliente }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Galc:</strong>
                {{ $cliente->galc }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Endereço de instalação:</strong>
                {{ $cliente->endereco_instalacao }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Porta:</strong>
                {{ $cliente->porta }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Velocidade:</strong>
                {{ $cliente->velocidade }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Ativo:</strong>
                {{ ($cliente->ativo == 'S' ? 'Sim' : 'Não') }}
            </div>
        </div>
    </div>
@endsection
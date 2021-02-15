@extends('layouts.sb-admin-2.projeto.corpo')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><i class="fas fa-users"></i> Adicionar Cliente</h1>
    <nav aria-label="breadcrumb-sistema">
        <ol class="breadcrumb-sistema">
            <li class="breadcrumb-sistema-item"><a href="{{ route('home') }}"><i class="fas fa-fw fa-home"></i> Inicio</a></li>
            <li class="breadcrumb-sistema-item"><a href="{{ route('clientes.index') }}"><i class="fas fa-users"></i> Clientes</a></li>
            <li class="breadcrumb-sistema-item active">Adicionar</li>
        </ol>
    </nav>
</div>
<div class="alert alert-warning margin-top-0">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
    Os campos marcados com <b class="text-danger">*</b> são de preenchimento obrigatório.
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
        <strong>Atenção!</strong> Ocorreram erros no formulário.
    </div>
@endif
<div class="card shadow mb-4">
    <div class="card-body">
        <form action="{{ route('clientes.salvar') }}" method="POST">
            @csrf
            @include('clientes.campos')
            <button type="submit" class="btn btn-success btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-check"></i>
                </span>
                <span class="text">Cadastrar</span>
            </button>
            <a href="{{ route('clientes.index') }}" class="btn btn-danger btn-icon-split">
                <span class="icon text-white-50">
                    <i class="fas fa-times-circle"></i>
                </span>
                <span class="text">Cancelar</span>
            </a>
        </form>
    </div>
</div>
@endsection
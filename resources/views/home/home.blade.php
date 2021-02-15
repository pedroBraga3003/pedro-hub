@extends('layouts.sb-admin-2.projeto.corpo')
@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4 ">
    <h1 class="h3 mb-0 text-info"><i class="fas fa-laugh-wink rotate-n-15 "></i> Bem vindo!!</h1>
</div>
<!-- Content Row -->
<div class="row">
    <div class="card shadow col-lg-12">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Olá! <strong>seja bem vindo.</strong></h6>
        </div>
        <div class="card-body">
            <p>O sistema está a sua disposição para uso, você já pode cadastrar seus dados facilmente.</p>
            <p class="mb-0">Obrigado por nos escolher. <i class="text-primary fas fa-laugh-beam rotate-n-15"></i></p>
        </div>
    </div>
</div>
<!-- Page level plugins -->
<script src="{{asset('sb-admin-2-assets/vendor/chart.js/Chart.min.js')}}"></script>
<!-- Page level custom scripts -->
@endsection

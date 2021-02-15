<style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    font-size: 10px;
    }
    .text-left {
        text-align: left !important;
    }
    .text-center {
        text-align: center !important;
    }
    .td-25{
        width:25% !important;
    }
    .td-50{
        width:50% !important;
    }
    .td-5{
        width:5% !important;
    }
    .td-2{
        width:2% !important;
    }
</style>
<h1>{{ $titulo }}</h1>
<table width="100%" cellspacing="0" cellpadding="0">
    <thead >
        <tr>
            <th class="text-left" >Nome</th>
            <th class="text-left" >Galc</th>
            <th class="text-left" >End. de instalação</th>
            <th class="text-center" >Porta</th>
            <th class="text-center" >Vel.</th>
        </tr>
    </thead>
    <tbody>
        @if(!empty($clientes))
            @foreach ($clientes as $cliente)
            <tr>
                <td class="td-25">{{ $cliente->nome_cliente }}</td>
                <td class="td-25">{{ $cliente->galc }}</td>
                <td class="td-50">{{ $cliente->endereco_instalacao }}</td>
                <td class="td-5 text-center">{{ $cliente->porta }}</td>
                <td class="td-5 text-center">{{ $cliente->velocidade }}</td>
            </tr>
            @endforeach            
        @endif
    </tbody>
</table>  

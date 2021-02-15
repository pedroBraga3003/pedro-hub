<div class="form-row ">
    <div class="form-group col-md-6">
        <a href="{{ route('clientes.adicionar') }}" class=" m-0  btn btn-success btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-plus-circle"></i>
            </span>
            <span class="text">Adicionar </span>
        </a> 
        <a href="{{ route('clientes.relatorio') }}" class=" m-0  btn btn-dark btn-icon-split">
            <span class="icon text-white-50">
                <i class="fas fa-list"></i>
            </span>
            <span class="text">Relatório de ativos</span>
        </a> 
    </div>
    <div class="form-group col-md-6">
        <form id="form-busca-padrao" class="form-inline float-lg-right" action="{{ route('clientes.index') }}" method="GET" >
            @csrf
            @method('GET')
            <input type="hidden" id="busca-padrao" name="busca_padrao" value="true" autocomplete="off" >
            <div class="input-group mb-2 mr-sm-2">
                <input type="text" id="busca" name="busca" value="{{ app('request')->input('busca') }}" class="form-control" placeholder="Buscar"  aria-label="Buscar" aria-describedby="basic-addon2">
                <div class="input-group-append">
                    <button type="submit" class="btn btn-dark" type="button"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </form>    
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6 required">
        <label for="nome_cliente">Nome</label>
        <input type="text" id="nome-cliente" name="nome_cliente" value="{{ old('nome_cliente',$cliente->nome_cliente ?? '' ?? '') }}"   class="form-control @error('nome_cliente') is-invalid @enderror"  placeholder="Nome do cliente" maxlength="50">
        @error('nome_cliente')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-6 required">
        <label for="galc">Galc</label>
        <input type="text" id="galc" name="galc" value="{{ old('galc',$cliente->galc ?? '' ?? '') }}"   class="form-control @error('galc') is-invalid @enderror"  placeholder="Galc" maxlength="50">
        @error('galc')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-8 required">
        <label for="endereco_instalacao">Endereço de instalação</label>
        <input type="text" id="endereco-instalacao" name="endereco_instalacao" value="{{ old('endereco_instalacao',$cliente->endereco_instalacao ?? '' ?? '') }}"   class="form-control @error('endereco_instalacao') is-invalid @enderror"  placeholder="Endereço de instalação" maxlength="100">
        @error('endereco_instalacao')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-2 ">
        <label for="porta">Porta</label>
        <input type="number" id="porta" name="porta" value="{{ old('porta',$cliente->porta ?? '' ?? '') }}"   class="form-control @error('porta') is-invalid @enderror">
        @error('porta')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-2 required">
        <label for="velocidade">Velocidade</label>
        <input type="number" id="velocidade" name="velocidade" value="{{ old('velocidade',$cliente->velocidade ?? '' ?? '') }}"   class="form-control @error('velocidade') is-invalid @enderror">
        @error('velocidade')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
</div>
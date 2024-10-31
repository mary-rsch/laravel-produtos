@extends('layouts.app')

@section('content')
    <h1 class="mb-4">Criar Produto</h1>
    <form action="{{ route('produtos.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label>Nome:</label>
            <input type="text" name="nome" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label>SKU:</label>
            <input type="text" name="sku" class="form-control" required>
        </div>
        
        <div class="form-group">
            <label>Unidade de Medida:</label>
            <input type="text" name="unidade_medida" class="form-control">
        </div>
        
        <div class="form-group">
            <label>Valor:</label>
            <input type="number" name="valor" class="form-control" step="0.01" required>
        </div>
        
        <div class="form-group">
            <label>Quantidade em Estoque:</label>
            <input type="number" name="quantidade_estoque" class="form-control" required>
        </div>

        <div class="form-group">
            <label>Categoria:</label>
            <select name="categoria" class="form-control" required>
                <option value="-">Selecionar</option>
                <option value="Eletrônicos">Eletrônicos</option>
                <option value="Roupas">Roupas</option>
                <option value="Alimentos">Alimentos</option>
                <option value="Móveis">Móveis</option>
                <option value="Beleza">Beleza</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Salvar</button>
    </form>
@endsection

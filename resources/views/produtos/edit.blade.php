@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <h1 class="mb-4">Editar Produto</h1>

        <form action="{{ route('produtos.update', $produto->id) }}" method="POST">
            @csrf
            @method('PUT')
            
            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" name="nome" id="nome" class="form-control" value="{{ old('nome', $produto->nome) }}" required>
            </div>
            
            <div class="form-group">
                <label for="sku">SKU:</label>
                <input type="text" name="sku" id="sku" class="form-control" value="{{ old('sku', $produto->sku) }}" required>
            </div>
            
            <div class="form-group">
                <label for="unidade_medida">Unidade de Medida:</label>
                <input type="text" name="unidade_medida" id="unidade_medida" class="form-control" value="{{ old('unidade_medida', $produto->unidade_medida) }}">
            </div>
            
            <div class="form-group">
                <label for="valor">Valor:</label>
                <input type="number" name="valor" id="valor" class="form-control" value="{{ old('valor', $produto->valor) }}" step="0.01" required>
            </div>
            
            <div class="form-group">
                <label for="quantidade_estoque">Quantidade em Estoque:</label>
                <input type="number" name="quantidade_estoque" id="quantidade_estoque" class="form-control" value="{{ old('quantidade_estoque', $produto->quantidade_estoque) }}" required>
            </div>
            
            <div class="form-group">
                <label for="categoria">Categoria:</label>
                <select name="categoria" id="categoria" class="form-control" required>
                    <option value="-" {{ $produto->categoria === '-' ? 'selected' : '' }}>-</option>
                    <option value="Eletrônicos" {{ $produto->categoria === 'Eletrônicos' ? 'selected' : '' }}>Eletrônicos</option>
                    <option value="Roupas" {{ $produto->categoria === 'Roupas' ? 'selected' : '' }}>Roupas</option>
                    <option value="Alimentos" {{ $produto->categoria === 'Alimentos' ? 'selected' : '' }}>Alimentos</option>
                    <option value="Móveis" {{ $produto->categoria === 'Móveis' ? 'selected' : '' }}>Móveis</option>
                    <option value="Beleza" {{ $produto->categoria === 'Beleza' ? 'selected' : '' }}>Beleza</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Salvar Alterações</button>
            <a href="{{ route('produtos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection

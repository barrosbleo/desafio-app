@extends('layout.index')

@section('content')
<div class="container border rounded p-0 text-center">
    <kbd class="ms-6 pe-6 mt-2 h4">Editar Produto</kbd>
    <form action="{{route('editProductPost')}}" method="post" class="mt-5">
        @csrf
        @if (count($products) < 1)
        <p class="badge text-dark border">Não foi encontrado nenhum produto no sistema.</p>
        @else
        <div class="ms-auto me-auto col-sm-4 mb-3">
            <label for="" class="form-label">Produto</label>
            <select class="form-select text-center" name="id" id="id">
                <option selected></option>
                @foreach ($products as $product)
                <option value="{{$product->id}}">{{$product->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="ms-auto me-auto col-sm-4 mb-3">
            <label for="" class="form-label">Novo nome</label>
            <input type="text" value="" class="form-control" name="name" id="name">
        </div>
        <div class="ms-auto me-auto col-sm-4 mb-3">
            <label for="" class="form-label">Novo valor</label>
            <input type="text" class="form-control" name="price" id="price">
        </div>
        <div class="ms-auto me-auto col-sm-4 mb-3">
            <label for="" class="form-label">Categoria</label>
            <select class="form-select text-center" name="category_id" id="category_id">
                <option selected></option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="ms-auto me-auto col-sm-4 mb-3">
            <button type="submit" class="btn btn-primary">Alterar</button>
        </div>
        @endif
    </form>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</div>
@endsection
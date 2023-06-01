@extends('layout.index')

@section('content')
<div class="container border rounded p-0 text-center">
    <kbd class="ms-6 pe-6 mt-2 h4">Listar Produtos</kbd>
    <div class="container mt-5">
        <div class="ms-auto me-auto col-sm-4 mb-3">
            @if (count($products) < 1)
            <p class="badge text-dark border">Não foi encontrado nenhum produto no sistema.</p>
            @else
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nome do produto</th>
                    <th>Valor</th>
                    <th>Categoria</th>
                    <th>Ação</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                    <tr>
                      <td>{{$product->name}}</td>
                      <td>{{$product->price}}</td>
                    @foreach ($categories as $category)
                        @if ($category->id == $product->category_id)
                        <td>{{$category->name}}</td>
                        @else
                        <td>Categoria excluída</td>
                        @endif
                    @endforeach
                      <td><a href="{{route('deleteProduct', [$product->id])}}" class="btn btn-dark">Apagar</a></td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            @endif
        </div>
    </div>
</div>
@endsection
@extends('layout.index')

@section('content')
<div class="container border rounded p-0 text-center">
    <kbd class="ms-6 pe-6 mt-2 h4">Listar Categorias</kbd>
    <div class="container mt-5">
        <div class="ms-auto me-auto col-sm-4 mb-3">
            @if (count($categories) < 1)
            <p class="badge text-dark border">Não foi encontrada nenhuma categoria no sistema.</p>
            @else
            <table class="table table-bordered">
                <thead>
                  <tr>
                    <th>Nome da categoria</th>
                    <th>Ação</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                      <td>{{$category->name}}</td>
                      <td><a href="{{route('deleteCategory', [$category->id])}}" class="btn btn-dark">Apagar</a></td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            @endif
        </div>
    </div>
</div>
@endsection
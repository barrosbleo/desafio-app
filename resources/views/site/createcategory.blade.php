@extends('layout.index')

@section('content')
<div class="container border rounded p-0 text-center">
    <kbd class="ms-6 pe-6 mt-2 h4">Adicionar nova Categoria</kbd>
    <form action="{{route('addCategoryPost')}}" method="post" class="mt-5">
        @csrf
        <div class="ms-auto me-auto col-sm-4 mb-3">
          <label for="" class="form-label">Nome da categoria</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="">
        </div>
        <div class="ms-auto me-auto col-sm-4 mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
        </div>
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
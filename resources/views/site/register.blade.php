@extends('layout.index')

@section('content')
<div class="container border rounded p-0 text-center">
    <kbd class="ms-6 pe-6 mt-2 h4">Cadastro</kbd>
    <form action="{{route('registerPost')}}" method="post" class="mt-5">
        @csrf
        <div class="ms-auto me-auto col-sm-4 mb-3">
          <label for="" class="form-label">Nome</label>
          <input type="text" class="form-control text-center" name="name" id="name" placeholder="" value="{{old('name')}}">
        </div>
        <div class="ms-auto me-auto col-sm-4 mb-3">
          <label for="" class="form-label">Email</label>
          <input type="email" class="form-control text-center" name="email" id="email" placeholder="" value="{{old('email')}}">
        </div>
        <div class="ms-auto me-auto col-sm-4 mb-3">
            <label for="" class="form-label">Senha</label>
            <input type="password" class="form-control text-center" name="password" id="password" placeholder="">
        </div>
        <div class="ms-auto me-auto col-sm-4 mb-3">
            <label for="" class="form-label">Repetir senha</label>
            <input type="password" class="form-control text-center" name="password2" id="password2" placeholder="">
        </div>
        <div class="ms-auto me-auto col-sm-4 mb-3">
            <button type="submit" class="btn btn-primary">Enviar</button>
            <a href="{{route('login')}}" class="btn btn-dark">Voltar</a>
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
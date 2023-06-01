@extends('layout.index')

@section('content')
<div class="container border rounded p-0 text-center">
    <kbd class="ms-6 pe-6 mt-2 h4">Login</kbd>
    <form action="{{route('loginPost')}}" method="post" class="mt-5">
        @csrf
        <div class="ms-auto me-auto col-sm-4 mb-3">
          <label for="" class="form-label">Email</label>
          <input type="email" class="form-control text-center" name="email" id="email" placeholder="" value="{{old('email')}}">
        </div>
        <div class="ms-auto me-auto col-sm-4 mb-3">
            <label for="" class="form-label">Senha</label>
            <input type="password" class="form-control text-center" name="password" id="password" placeholder="">
        </div>
        <div class="ms-auto me-auto col-sm-4 mb-3">
            <button type="submit" class="btn btn-primary">Entrar</button>
            <a href="{{route('register')}}" class="btn btn-dark">Cadastrar</a>
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
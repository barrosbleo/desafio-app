@php
    $logado = false;
@endphp
@if (auth()->user())
<div class="container border rounded-bottom text-center mb-5">
    <nav class="navbar">
        <a class="nav-link" href="{{route('listProduct')}}">Listar produtos</a>
        <a class="nav-link" href="{{route('addProduct')}}">Cadastrar produto</a>
        <a class="nav-link" href="{{route('editProduct')}}">Editar produto</a>
        <a class="nav-link" href="{{route('listCategory')}}">Listar categorias</a>
        <a class="nav-link" href="{{route('addCategory')}}">Criar categoria</a>
        <a class="nav-link" href="{{route('editCategory')}}">Editar categoria</a>
        <a class="nav-link" href="{{route('logout')}}">Sair</a>
    </nav>
</div>
@else
<div class="container border rounded-bottom text-center mb-5">
    <h3>Sistema de gerenciamento de produtos</h3>
</div>
@endif
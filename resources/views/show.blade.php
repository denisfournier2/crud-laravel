@extends('templates.template')

@section('content')
    <h1 class="text-center">Visualizar</h1>
    <hr>

    <div class="col-8 m-auto">
        @php
            $user=$book->find($book->id)->relUsers;
        @endphp
        Titulo: {{$book->title}} <br>
        Paginas: {{$book->pages}} <br>
        Preco: R$ {{$book->price}} <br>
        Autor: {{$user->name}}<br>
        Email do Autor: {{$user->email}}
    </div>
@endsection

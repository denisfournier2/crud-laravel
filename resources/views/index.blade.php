@extends('templates.template')

@section('content')
    <h1 class="text-center mt-4">CRUD</h1>
    <hr>

    <div class="text-center">
        <a href="{{url('books/create')}}">
            <button class="btn btn-success m-4">Cadastrar</button>
        </a>
    </div>
    <div class="col-8 m-auto text-center">
        @csrf
        <table class="table text-center">
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Preco</th>
                    <th scope="col">Acoes</th>
                </tr>
            </thead>
            <tbody>
            @foreach($book as $books)
                @php
                $user=$books->find($books->id)->relUsers;
                @endphp
                <tr>
                    <th scope="row">{{$books->id}}</th>
                    <td>{{$books->title}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$books->price}}</td>
                    <td>
                        <a href="{{url("books/$books->id")}}">
                            <button class="btn btn-dark">Visualizar</button>
                        </a>
                        <a href="{{url("books/$books->id/edit")}}">
                            <button class="btn btn-primary">Editar</button>
                        </a>
                        <a href="{{url("books/$books->id")}}" class="js-del">
                            <button class="btn btn-danger">Deletar</button>
                        </a>
                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>
        {{$book->links()}}
    </div>
@endsection

@extends('templates.template')

@section('content')
    <h1 class="text-center">@if(isset($book))Editar @else Cadastrar @endif</h1>
    <hr>

    <div class="col-8 m-auto">

        @if(isset($errors) && count($errors) > 0)
            <div class="text-center mx-4 alert-danger">
                @foreach($errors->all() as $error)
                    {{$error}}<br>
                @endforeach
            </div>
        @endif

        @if(isset($book))
            <form name="formEdit" id="formEdit" method="post" action="{{url("books/$book->id")}}">
                @method('PUT')
        @else
            <form name="formCad" id="formCad" method="post" action="{{url('books')}}">
        @endif

            @csrf
            <input type="text" class="form-control" name="title" id="title" value="{{$book->title ?? ''}}" placeholder="Titulo:" required><br>
            <select name="id_user" id="id_user" class="form-control" required>
                <option value="{{$book->relUsers->id ?? ''}}">{{$book->relUsers->name ?? 'Autor'}}</option>
                @foreach($users as $user)
                    <option value="{{$user->id}}">{{$user->name}}</option>
                @endforeach
            </select><br>
            <input type="text" class="form-control" name="pages" id="pages" value="{{$book->pages ?? ''}}" placeholder="Paginas:" required><br>
            <input type="text" class="form-control" name="price" id="price" value="{{$book->price ?? ''}}" placeholder="Preco" required><br>
            <input type="submit" value="@if(isset($book))Editar @else Cadastrar @endif" class="btn btn-primary">
        </form>
    </div>
@endsection

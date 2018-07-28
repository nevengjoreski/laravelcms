@extends('layouts.app')

@section('content')

    <h1>Todos</h1>

    <div class="card">
        <div class="card-body text-center">
            <div class="card-title">
                <h3>Todo-list</h3>
            </div>
            <div class="card-text">
                <ul>
                    <li class="mt-1">
                        <a class="btn text-dark" href="todo/{{$todo->id}}">
                            {{$todo->text}}
                            <span class="badge-danger p-1 rounded-left rounded-right">{{$todo->due}}</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>


@endsection

@section('sidebar')
    @parent
    <a class="btn btn-outline-danger btn-block" href="/todo/{{$todo->id}}/edit">Edit</a>
    <form action="/todo/{{$todo->id}}" method="POST">
        {{ csrf_field() }}
        @method('DELETE')
        <input type="submit" class="btn btn-outline-danger btn-block" value="Delete">
    </form>

@endsection
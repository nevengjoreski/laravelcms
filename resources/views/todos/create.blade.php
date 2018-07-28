@extends('layouts.app')

@section('content')

    @if(isset($todo))
        <h1>Edit Todo</h1>
    @else
        <h1>Create Todo</h1>
    @endif



    <form action="/todo{{ isset($todo->id) ? "/$todo->id" : ''}}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="text">Text</label>
            <input class="form-control" type="text" id="text" name="text" value="{{$todo->text ?? ''}}">

        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea class="form-control" name="body" id="body" cols="30" rows="10">{{$todo->body ?? ''}}</textarea>
        </div>
        <div class="form-group">
            <label for="due">Due Date</label>
            <input class="form-control" type="date" id="due" name="due" value="{{$todo->due ?? ''}}">
        </div>

        @if(isset($todo))
            @method('PUT')

            <button class="form-control btn-outline-dark" type="submit" >Update Todo</button>
        @else
            <button class="form-control btn-outline-dark" type="submit" >Create Todo</button>
        @endif
    </form>



@endsection


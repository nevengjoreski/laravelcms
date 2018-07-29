@extends('layouts.app')

@section('content')
    <h1>Home</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto eos in maiores soluta unde. Aut dolore doloribus ducimus eligendi fugiat incidunt modi, nulla quae quas sequi similique suscipit? Ea, sed!</p>
@endsection

@section('sidebar')
    @parent
    <p>This is appended to the sidebar</p>
@endsection

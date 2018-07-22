@extends('layouts.app')

@section('content')
    <h1>Contact</h1>


    <form action="contact/submit" method="post">
        {{ csrf_field() }}
        <div class="modal-body">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Email" aria-describedby="emailHelp" value="asd@asd.asd" autocomplete='email'>

            </div>
            <div class="form-group forgot-password-hide">
                <label for="name">Password</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Name">
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" class="form-control"></textarea>
            </div>
        </div>

        <div class="modal-footer">
            <button type="submit" class="btn btn-outline-dark">Log In</button>
        </div>
    </form>


@endsection
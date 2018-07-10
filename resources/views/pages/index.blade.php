@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center" style="margin-top:1rem;">
    <h1>{{$title}}welcome to my laravel app</h1>
    <p>This is an laravel application that can post blog. Welcome to play around. <br>
        username:test@test.com <br>
        password:123456 <br>
    </p>
    <br>
    <p>So far this app has the basic functions of CRUD, user account login and register, and also access control. <br>
    I will keep working on it and add some more functions.</p>
    </div>
@endsection

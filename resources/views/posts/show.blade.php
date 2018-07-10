@extends('layouts.app')

@section('content')
    <a href="/posts" class="btn btn-secondary">Go Back</a>
    <h1>{{$posts->title}}</h1>
    <img style="width:50%; height:50%" src="/storage/cover_images/{{$posts->cover_image}}">
        <div>
            {!!$posts->body!!}
        </div>
        <small>Written on {{$posts->created_at}}</small>
        <hr>
        @if(!Auth::guest())
            @if(Auth::user()->id == $posts->user_id)
            <a href="/posts/{{$posts->id}}/edit" class="btn btn-default">Edit</a>
            {!!Form::open(['action' => ['PostsController@destroy', $posts->id], 'method' => 'POST', 'class' => 'float-right']) !!}
                {{Form::hidden('_method', 'DELETE')}}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
            @endif
        @endif
    @endsection
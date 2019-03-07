@extends('layouts.app')
@section('title', 'bbs')

@section('content')
    <div>
        @foreach($posts as $post)
            <a href="/posts/{{$post->id}}" class="m-b-md">
                <h1>{{$post->title}}</h1>
                <h3>{{$post->subtitle}}</h3>
                <h4>{{$post->published_on}}</h4>
            </a>
        @endforeach
    </div>
@stop
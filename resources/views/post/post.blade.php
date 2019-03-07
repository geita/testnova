@extends('layouts.app')
@section('title', 'bbs')

@section('content')
    <div>
        <h1>{{$post->title}}</h1>
        <h3>{{$post->description}}</h3>
        <h4>Written by {{$post->user->name}} on {{$post->published_at}}</h4>
    </div>
    <article>{{$post->content}}</article>
@stop
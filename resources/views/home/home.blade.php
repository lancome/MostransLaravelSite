@extends('layouts.app')

@section('content')

    @foreach($articles as $article)
    <h1>{{$article->title}}</h1>
    <hr>
    {!! $article->content !!}
    <hr>
    @endforeach

@endsection

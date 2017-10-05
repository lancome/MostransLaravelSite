@extends('layouts.app')

@section('content')
    <h1>Edit: {{$article->title}}</h1>
    <hr>

    {{--{!! Form::open(['method' => 'PATCH', 'url' => 'articles/' . $article->id]) !!}--}}
    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
    @include('user.articles._form')
    <div class="form-group">
        {!! Form::submit('Edit Article', ['class' => 'btn btn-primary']) !!}
        <a href="{{url('articles/'.$article->id)}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}


@stop
@extends('layouts.app')

@section('content')
    <h1>Write a new Article</h1>
    <hr>
    {!! Form::open(['url' => 'articles/']) !!}
    @include('user.articles._form')
    <div class="form-group">
        {!! Form::submit('Add Article', ['class' => 'btn btn-primary']) !!}
        <a href="{{url('articles/')}}" class="btn btn-primary">Back</a>
    </div>
    {!! Form::close() !!}



@stop
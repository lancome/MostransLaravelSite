@extends('layouts.app')
@section('content')
    <h1>{{$article->title}}</h1>
    <hr>
        {!! $article->content !!}
        <br>
        <p>Posted {{ $article->created_at->diffForHumans()}} by <b>{{ $article->user->name }}</b></p>
    <hr>
    <div class="form-group">
        {!! Form::open(['method' => 'DELETE', 'action' => ['ArticlesController@destroy', $article->id]]) !!}
        <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
        @if(!Auth::guest())
            @if(Auth::user()->admin || $article->user_id == Auth::user()->id )
                <a href="{{url('articles/' . $article->id . '/edit')}}" class="btn btn-primary">Edit</a>
                {!! Form::submit('Delete', ['class' => 'btn btn-primary btn-danger pull-right']) !!}
            @endif
        @endif
            {!! Form::close() !!}
    </div>



@stop
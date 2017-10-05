@extends('layouts.app')
@section('content')

    {{--{!! Form::model(['method' => 'PATCH', 'action' => ['PagesController@profile', Auth::user()->id]]) !!}--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::label('name', 'Name: ') !!}--}}
        {{--{!! Form::text('name', null, ['class' => 'form-control']) !!}--}}
    {{--</div>--}}
    {{--<div class="form-group">--}}
        {{--{!! Form::submit('Edit User', ['class' => 'btn btn-primary']) !!}--}}
        {{--<a href="{{url('articles/}}" class="btn btn-primary">Back</a>--}}
    {{--</div>--}}
    {{--{!! Form::close() !!}--}}

@stop
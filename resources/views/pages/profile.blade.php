@extends('layouts.app')
@section('content')
<h1>Profile page</h1>
<table class="table">
    <tr>
        <th>Name</th>
        <th>e-mail</th>
        {{--<th>Action</th>--}}
        <th>Admin</th>
    </tr>
    <tr>
        <!-- Task Name -->
        <td class="table-text">
            <div>{{ Auth::user()->name }}</div>
        </td>
        <td class="table-text">
            <div>{{ Auth::user()->email }}</div>
        </td>
        @if(Auth::user()->admin)
            <td>Yes</td>
        @else
            <td>No</td>
        @endif
        {{--<td>--}}
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
        {{--</td>--}}
    </tr>
</table>
@stop
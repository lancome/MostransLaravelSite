{{--{!! Form::hidden('user_id',1) !!}--}}
<div class="form-group">
    {!! Form::label('title', 'Title: ') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('slug', 'Slug: ') !!}
    {!! Form::textarea('slug', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content', 'Content: ') !!}
    {!! Form::textarea('content', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('published_at', 'Published on: ') !!}
    {!! Form::input('date', 'published_at', date('Y-m-d') , ['class' => 'form-control']) !!}
</div>

{{--<div class="form-group">--}}
    {{--{!! Form::label('homepage', 'Add to homepage: ') !!}<br>--}}
    {{--{!! Form::label('homepage', 'Yes:') !!}{!! Form::radio('homepage', 1) !!}<br>--}}
    {{--{!! Form::label('homepage', 'No:') !!}{!! Form::radio('homepage', 0) !!}<br>--}}
{{--</div>--}}



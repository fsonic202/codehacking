@extends('layouts.admin')



@section('content')
    <div class="container">
        <h1>Edit Post</h1>
        {!! Form::model($post, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $post->id], 'files'=>true]) !!}


        <div class="form-group">
            {!! Form::label('title', 'Title:') !!}
            {!! Form::text('title', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('category_id', 'Category:') !!}
            {!! Form::select('category_id',  $categories, null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('photo_id', 'Photo:') !!}
            {!! Form::file('photo_id', ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('body', 'Description:') !!}
            {!! Form::textarea('body', null,  ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::submit('Update Post', ['class'=>'btn btn-primary'])!!}
        </div>

        {!! Form::close() !!}
        @Include('includes.form_error')
    </div>




@stop

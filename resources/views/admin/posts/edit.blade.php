@extends('layouts.admin')



@section('content')
    <div class="container">
        <h1>Edit Post</h1>
        <div class="row">

            <div class="col-md-3">
                <img src="{{$post->photo ?  $post->photo->file : 'http://placehold.it/400x400'}}" width="250px" alt="" class="img-responsive img-rounded">
            </div>

            <div class="col-md-6">
                {!! Form::model($post, ['method'=>'PATCH', 'action'=> ['AdminPostsController@update', $post->id],'files'=>true]) !!}


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
                    {!! Form::submit('Update Post', ['class'=>'btn btn-primary col-sm-6'])!!}
                </div>

                {!! Form::close() !!}

                {!! Form::model($post,['method'=>'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id],'files'=>true]) !!}
                <div class="form-group">
                    {!! Form::submit('Delete Post', ['class'=>'btn btn-danger col-sm-6'])!!}
                </div>

                {!! Form::close() !!}
                @Include('includes.form_error')
            </div>
        </div>
    </div>




@stop

@extends('layouts.admin')



@section('content')
    <div class="container">
        <h2 class="text-center">Edit Categories</h2>
        <div class="row">
            <div class="col-sm-6">
                {!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id], 'files'=>true]) !!}


                <div class="form-group">
                    {!! Form::label('name', 'Name:') !!}
                    {!! Form::text('name', null, ['class'=>'form-control'])!!}
                </div>
                <div class="form-group">
                    {!! Form::submit('Update Category', ['class'=>'btn btn-primary'])!!}
                </div>

                {!! Form::close() !!}


                {!! Form::model($category, ['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id], 'files'=>true]) !!}
                <div class="form-group">
                    {!! Form::submit('Delete Category', ['class'=>'btn btn-danger'])!!}
                </div>

                {!! Form::close() !!}

                @Include('includes.form_error')
            </div>
        </div>
    </div>

@stop

@extends('layouts.admin')



@section('content')


<div class="container">
    <h1 class="text-center"> Edit Users </h1>
        <div class="row">

                    <div class="col-md-3">
                         <img src="{{$user->photo ?  $user->photo->file : 'http://placehold.it/400x400'}}" width="250px" alt="" class="img-responsive img-rounded">
                    </div>

                <div class="col-md-6">
                    {!! Form::model($user, ['method'=>'PATCH', 'action'=> ['AdminUsersController@update', $user->id],'files'=>true]) !!}


                    <div class="form-group">
                        {!! Form::label('name', 'Name:') !!}
                        {!! Form::text('name', null, ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('email', 'Email:') !!}
                        {!! Form::email('email', null, ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('role_id', 'Role:') !!}
                        {!! Form::select('role_id', [''=>'Choose Options']+ $roles ,null, ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('is_active', 'Status:') !!}
                        {!! Form::select('is_active', array(1 => 'Active', 0 =>'Not Active'), null,['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('photo_id', 'Photo:') !!}
                        {!! Form::file('photo_id', ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::label('password', 'Password:') !!}
                        {!! Form::password('password', ['class'=>'form-control'])!!}
                    </div>

                    <div class="form-group">
                        {!! Form::submit('Create Post', ['class'=>'btn btn-primary'])!!}
                    </div>

                    {!! Form::close() !!}

                    @Include('includes.form_error')
                </div>




        </div>
</div>
@stop

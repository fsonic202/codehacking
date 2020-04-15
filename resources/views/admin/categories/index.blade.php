@extends('layouts.admin')



@section('content')
    <div class="container">
        <h2>Categories</h2>
        <div class="row">
        <div class="col-sm-6">
            {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoriesController@store', 'files'=>true]) !!}


            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class'=>'form-control'])!!}
            </div>
            <div class="form-group">
                {!! Form::submit('Create Category', ['class'=>'btn btn-primary'])!!}
            </div>

            {!! Form::close() !!}

            @Include('includes.form_error')
        </div>
       <div class="col-sm-6">
           @if(Session::has('deleted_category'))

               <div class="alert alert-danger"> {{session('deleted_category')}}</div>
           @endif

           @if($categories)
               <table class="table table-hover">
                   <thead>
                   <tr>
                       <th>Id</th>
                       <th>Name</th>
                       <th>Created</th>
                       <th>Update</th>
                   </tr>
                   </thead>
                   <tbody>

                   @foreach($categories as $category)
                       <tr>
                           <td>{{$category->id}}</td>
                           <td><a href="{{url('admin/categories/' .$category->id. '/edit')}}">{{$category->name}}</a></td>
                           <td>{{$category->created_at->diffForHumans()}}</td>
                           <td>{{$category->updated_at->diffForHumans()}}</td>
                       </tr>
                   @endforeach
                   @endif
                   </tbody>
               </table>
            </div>
        </div>
    </div>

@stop


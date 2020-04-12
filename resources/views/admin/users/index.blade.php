@extends('layouts.admin')



@section('content')
<div class="container">
<h1>Users</h1>
<table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Role</th>
        <th>Status</th>
        <th>Created</th>
        <th>Update</th>
        <th>Photo</th>
      </tr>
    </thead>
    <tbody>
        @if($users)

            @foreach($users as $user)
      <tr>
        <td>{{$user->id}}</td>
        <td><a href="{{url('admin/users/' .$user->id. '/edit')}}">{{$user->name}}</a></td>
        <td>{{$user->email}}</td>
        <td>{{$user->role->name}}</td>
        <td>{{$user->is_active == 1 ? 'Active' : 'Not Active'}}</td>
        <td>{{$user->created_at->diffForHumans()}}</td>
        <td>{{$user->updated_at->diffForHumans()}}</td>
        <td><img height="50" src="{{$user->photo ?  $user->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsiive img-rounded"></td>
      </tr>
            @endforeach
       @endif
    </tbody>
  </table>
</div>

@stop

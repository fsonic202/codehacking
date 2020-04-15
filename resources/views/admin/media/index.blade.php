@extends('layouts.admin')



@section('content')
    <div class="container">

        <div class="row">


<h2>Media</h2>

    @if($photos)

    <table class="table table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Created</th>
                <th>Email</th>
            </tr>
        </thead>
    <tbody>

    @foreach($photos as $photo)
        <tr>
            <td>{{$photo->id}}</td>
            <td><img height="50" src="{{$photo->file}}" alt=""></td>
            <td>{{$photo->create_at ? $photo->create_at  : 'no date'}}</td>
        </tr>
    @endforeach
        </tbody>
    </table>

    @endif
        </div>
    </div>
    @stop

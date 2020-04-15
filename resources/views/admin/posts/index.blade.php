@extends('layouts.admin')



@section('content')
<div class="container">
    <h1>Post</h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Category</th>
            <th>Title</th>
            <th>Post</th>
            <th>Created</th>
            <th>Update</th>
        </tr>
        </thead>
        <tbody>
        @if($posts)

            @foreach($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td><img height="50" src="{{$post->photo ?  $post->photo->file : 'http://placehold.it/400x400'}}" alt="" class="img-responsiive img-rounded"></td>
                    <td><a href="{{url('admin/posts/' .$post->id. '/edit')}}">{{$post->user->name}}</a></td>
                    <td>{{$post->category ? $post->category->name: 'Uncategorized'}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
                    <td>{{$post->created_at->diffForHumans()}}</td>
                    <td>{{$post->updated_at->diffForHumans()}}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

</div>

@stop

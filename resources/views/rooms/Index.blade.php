@extends('rooms.layout')

@section('content')
<div class="pull-left">
    <h2>CRUD with database</h2>
</div>

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-right">
            <a href="{{ route('rooms.create')}}" class="btn btn-success my-3">Create new</a>
        </div>
    </div>
</div>

@if($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{$message}}</p>
</div>
@endif

<table class="table table-bordered">
    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Description</th>
        <th>Price</th>
        <th>Image</th>
        <th>Action</th>
    </tr>
    @foreach($rooms as $room)
    <tr>
        <td>{{++$i}}</td>
        <td>{{$room -> name}}</td>
        <td>{{$room -> desc}}</td>
        <td>{{$room -> price}}</td>
        <td>{{$room -> image}}</td>
        <td>
            <form action="{{route('rooms.destroy',$room->id)}}" method="post">
                <a href="{{route('rooms.show',$room->id)}}" class="btn btn-info">Show</a>
                <a href="{{route('rooms.edit',$room->id)}}" class="btn btn-primary">Edit</a>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

@extends('rooms.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <a href="{{ route('rooms.index') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</div>
<h1>Room Detailed</h1>
<div class="card bg-dark text-white" style="width:700px">
    <img class="card-img-top" src="{{$room->image}}" alt="" width="500px">
    <div class="card-body">
      <h4 class="card-title"> {{$room->name}}</h4>
      <p class="card-text"> {{$room->desc}}</p>
      <p class="card-text text-danger">{{$room->price}}</p>
      <a href="#" class="btn btn-primary">Detailed</a>
    </div>
  </div>



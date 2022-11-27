@extends('navbar')
{{--homepage--}}
@section('title','Category')


@section('content')

<div class="d-block bg-primary" style="margin-top: 35px">
    <h2 class="booklist-title" style="background-color: #979A9A ; color:white;font-size:55px;font-family:sans-serif;" id="categorytxt">{{$categories[0]->name}} Page</h2>
</div>

@foreach ($books as $x )

<div class="card d-inline-block" style="width: 300px; box-shadow:5px 5px 10px black;margin-right:10px; margin-left:55px">
    <img src="{{$x->image}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="margin-bottom: 0px">{{$x->title}}</h5>
      <p class="card-text" style="margin-bottom: 0px">by</p>
      <p class="card-text">{{$x->author}}</p>
      <a href="/bookdetail/{{$x->id}}" class="btn btn-primary" style="color: white" id="detailBtn">Detail</a>
    </div>
  </div>
@endforeach


@endsection

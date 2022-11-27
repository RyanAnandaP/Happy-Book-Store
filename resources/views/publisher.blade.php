@extends('navbar')
{{--Publisher Page--}}

@section('title','publishers')

@section('content')


<div class="d-block" style="margin-top: 35px;background-color: #979A9A">
    <h2 class="card-text" style="margin-bottom: 2px;color:white;font-size:40px">Publishers Detail</h2>
</div>

@foreach ($publishers as $y )
<div class="card d-inline-block" style="width: 350px; box-shadow:5px 5px 10px black;margin-right:15px; margin-left:75px">
    <img src="{{$y->image}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title" style="margin-bottom: 0px">{{$y->name}}</h5>
      <p class="card-text" style="margin-bottom: 0px">{{$y->address}}</p>
      <p class="card-text">{{$y->email}}</p>
      <a href="#" class="btn btn-primary" style="color: white" id="detailBtn">Detail</a>
    </div>
  </div>
@endforeach




@endsection

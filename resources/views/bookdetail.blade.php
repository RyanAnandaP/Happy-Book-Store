@extends('navbar')
{{--Book Detail--}}
@section('title','Book Detail')

@section('content')

<div class="d-block bg-primary" style="margin-top: 35px">
    <h2 class="booklist-title" style="background-color: #979A9A ; color:white;font-size:55px;font-family:sans-serif;">Book Detail</h2>
</div>

<div class=" d-flex justify-content-center">
    <div class="card d-inline-block " style="width: 75rem; box-shadow:5px 5px 10px black;margin-right:15px; margin-left:30px">
        <img src="{{$books[0]->image}}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title text-left" style="margin-bottom: 1px; text-alignment:left">Title: {{$books[0]->title}}</h5>
          <p class="card-text" style="margin-bottom: 1px">Author: {{$books[0]->author}}</p>
          <p class="card-text" style="margin-bottom: 1px">Publisher: {{$publishers[0]->name}}</p>
          <p class="card-text" style="margin-bottom: 1px">Year: {{$books[0]->year}}</p>
          <p class="card-text" style="margin-bottom: 3px">Synopsis: </p>
          <p class="card-text">{{$books[0]->synopsis}}</p>
        </div>
      </div>
</div>

@endsection

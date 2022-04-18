@extends('layouts.layout')
@section('content')

@foreach($courses as $course)
<div class="card" style="width: 18rem ";>
 
  <div class="card-body">
    <h5 class="card-title">{{$course->name}} </h5>
    <p class="card-text"> <b> The Ultimate 2022 Course </b>  <br>Instructor: Mac babaz,Radek wilk</p>
    <span> Ratings <span> 

    
    <span class="fa fa-star checked"></span>
    <span class="fa fa-star checked"></span>
     <span class="fa fa-star checked"></span>
     <span class="fa fa-star"></span>
    <span class="fa fa-star"></span> <br> 
    <a href="{{route('course.details')}}" class="btn btn-primary">view Details </a>
    <a href="{{route('course.purchase',['cid'=>$course->id,'uid'=>session('id')])}}" class="btn btn-primary"> Purchase </a>
  </div>
@endforeach
  @endsection
  

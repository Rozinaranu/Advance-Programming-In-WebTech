<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Dashboard</title>
</head>
<body>
    <center> <h1>Student Dashboard - {{$username}}</h1> </center>
    <a href="{{route('student.profile')}}"> My profile </a> 
    <a href="{{route('course.list')}}"> Available courses </a> 

    @extends('layouts.layout')
@section('content')
<h2>Purchased Courses</h2>
@foreach($courses as $course)
<div class="card" style="width: 18rem ";>
 <!-- <img class="card-img-top" src="img/download.jpg" alt="Card image cap"> --> 
  <div class="card-body">
    <h5 class="card-title">{{$course->name}} </h5>
    <p class="card-text"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus minima placeat quam ullam molestiae consectetur consequatur debitis, architecto natus sapiente?</p>
 
    <a href="{{route('course.purchase',['cid'=>$course->id,'uid'=>session('id')])}}" class="btn btn-primary"> Start now </a>
  </div>
@endforeach
  @endsection
  
</body>
</html>
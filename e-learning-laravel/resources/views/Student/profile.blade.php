@extends('layouts.layout')
@section('content')
<head>
    
    <title> student profile </title>
</head>
<body>
    <h3> welcome  {{session('username')}}</h3>


   <center>  <a href="{{route('student.changepass')}}">Change Password</a> </center>



    
</body>
</html>
@endsection
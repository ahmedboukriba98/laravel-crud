@extends('students.layout')
@section('content')
<div class="row">
    <div class="col-6 h2">
        Viewing product details
    </div>
    <div class="col">
        <a class="btn btn-primary" href="{{route('students.index')}}">Back</a>
    </div>
</div>

<div class="row">
    <div class="col-1 h5">ID:</div>
    <div class="col">{{$student->id}}</div>
</div>


<div class="row">
    <div class="col-1 h5">Name:</div>
    <div class="col">{{$student->name}}</div>
</div>


<div class="row">
    <div class="col-1 h5">Email:</div>
    <div class="col">{{$student->email}}</div>
</div>


<div class="row">
    <div class="col-1 h5">Phone:</div>
    <div class="col">{{$student->phone}}</div>
</div>

<div class="row">
    <div class="col-1 h5">Password:</div>
    <div class="col">{{$student->password}}</div>
</div>

<div class="row">
    <div class="col-1 h5">Image:</div>
    <div class="col">{{$student->image}}</div>
</div>



@endsection
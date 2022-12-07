@extends('students.layout')
@section('content')
<style>
  .push-top {
    margin-top: 50px;
  }
</style>
<div class="row">
    <div class="col-10">
        <h2>ISIMS</h2>


    </div>
    <div class="col">
        <a class="btn btn-success" href="{{route('students.create')}}"> Add</a>
    </div>
</div>
<div class="push-top">
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div><br />
  @endif
  <table class="table">
    <thead>
        <tr class="table-warning">
          <td>ID</td>
          <td>Name</td>
          <td>Email</td>
          <td>Phone</td>
          <td>Password</td>
          <td>Image</td>
          <td class="text-center">Action</td>
        </tr>
    </thead>
    <tbody>
        @foreach($student as $students)
        <tr>
            <td>{{$students->id}}</td>
            <td>{{$students->name}}</td>
            <td>{{$students->email}}</td>
            <td>{{$students->phone}}</td>
            <td>{{$students->password}}</td>
            <td><img src="{{asset('public/images/'.$students->image)}}" width="100px"></td>
            <td class="text-center">
                <a href="{{ route('students.edit', $students->id)}}" class="btn btn-primary btn-sm">Edit</a>
                <a class="btn btn-warning" href="{{ route('students.show', $students->id)}}">Show</a>
    
                <form action="{{ route('students.destroy', $students->id)}}" method="post" style="display: inline-block">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm" type="submit">Delete</button>
                  </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>{{$student->links()}}
<div>
  
@endsection
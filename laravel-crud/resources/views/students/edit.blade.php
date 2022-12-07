@extends('students.layout')
@section('content')
<style>
    .container {
      max-width: 450px;
    }
    .push-top {
      margin-top: 50px;
    }
</style>
<div class="row">
  <div class="col-lg-12 margin-tb">
      <div class="pull-left">
          <h2>Edit Student</h2>
      </div>
      <div class="pull-right">
          <a class="btn btn-primary" href="{{ route('students.index') }}"> Back</a>
      </div>
  </div>
</div>
<div class="card push-top">
  <div class="card-header">
    Edit & Update
  </div>
  <div class="card-body">
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('students.update', $student->id) }} "enctype="multipart/form-data">
          <div class="form-group">
              @csrf
              @method('PUT')
              
              <label for="name">Name</label>
              <input type="text" class="form-control" name="name" value="{{ $student->name }}"/>
          </div>
          <div class="form-group">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" value="{{ $student->email }}"/>
          </div>
          <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" name="phone" value="{{ $student->phone }}"/>
          </div>
          <div class="form-group">
              <label for="password">Password</label>
              <input type="password" class="form-control" name="password" value="{{ $student->password }}"/>
          </div>
          <div class="form-group">
            <label for="image">Image</label>
            <input type="file" class="form-control" name="image"/>
            <img src="{{asset('public/images/'.$student->image)}}" width="100px">
        </div>
          <button type="submit" class="btn btn-block btn-danger">Update User</button>
      </form>
  </div>
</div>
@endsection
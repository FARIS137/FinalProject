@extends('admin.layouts.app')
@section('konten')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Input Users</h1>
<form method="POST" action="{{route('users.store')}}" enctype="multipart/form-data">
    @csrf

<form>
  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Username</label> 
    <div class="col-8">
      <input id="text" name="username" type="text" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="text1" name="password" type="password" class="form-control">
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text3" name="email" type="email" class="form-control">
    </div>
  </div>

  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Pilihan Hak akses</label> 
    <div class="col-8">
      <select id="select" name="hak_akses" class="custom-select">
        @foreach($users as $user)
        <option value="{{$user->hak_akses}}">{{$user->hak_akses}}</option>

       @endforeach  
      </select>
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
      <button name="submit" type="submit" class="btn btn-primary">Submit</button>
    </div>
  </div>
</form>
</form>
@endsection
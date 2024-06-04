@extends('admin.layouts.app')
@section('konten')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<h1 align="center">Input Users</h1>
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
  </ul>
</div>
@endif
<form method="POST" action="{{route('pengguna.store')}}" enctype="multipart/form-data">
    @csrf

  <div class="form-group row">
    <label for="text" class="col-4 col-form-label">Username</label> 
    <div class="col-8">
      <input id="text" name="username" type="text" 
      class="form-control @error('username') is-invalid @enderror">
      @error('username')
      <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="text1" class="col-4 col-form-label">Password</label> 
    <div class="col-8">
      <input id="text1" name="password" type="password" 
      class="form-control @error('password') is-invalid @enderror">
      @error('password')
      <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="text3" class="col-4 col-form-label">Email</label> 
    <div class="col-8">
      <input id="text3" name="email" type="email"
       class="form-control @error('email') is-invalid @enderror">
       @error('email')
      <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
    </div>
  </div>
  <div class="form-group row">
    <label for="text5" class="col-4 col-form-label">Foto</label> 
    <div class="col-8">
      <input id="text5" name="foto" type="file" 
      class="form-control @error('foto') is-invalid @enderror">
      @error('foto')
      <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
    </div>
  </div>

  <div class="form-group row">
    <label for="select" class="col-4 col-form-label">Pilihan Hak akses</label> 
    <div class="col-8">
      <select id="select" name="hak_akses" 
      class="custom-select @error('hak_akses') is-invalid @enderror">
      @error('hak_akses')
      <div class="invalid-feedback">
      {{$message}}
    </div>
    @enderror
        @foreach($pengguna as $user)
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
@endsection
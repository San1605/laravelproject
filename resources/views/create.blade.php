

@extends('layout')

@section('content')
<h1>create account</h1>


<form action="/createsubmit" method="POST">
    @csrf
    <div class="form-group">
    <label for="exampleInputEmail1">name</label>
    <input  name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter name">

  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input  name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection

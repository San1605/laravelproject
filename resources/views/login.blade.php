@extends('layout')

@section('content')
<h1>login page</h1>
<form action="/loginsubmit" method="POST">
    @csrf
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


<!-- <button class="btn btn-primary">click on mw</button> -->
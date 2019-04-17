@extends('index')

@section('content')
  <form action="/users" method="post">
    {{csrf_field()}}
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" class="form-control" id="firstName" name="first_name" aria-describedby="emailHelp" placeholder="Enter First Name" required>
    <small id="emailHelp" class="form-text text-muted">Enter First Name</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="text" class="form-control" id="lastName" placeholder="Last Name" name="last_name" required>
    <small id="emailHelp" class="form-text text-muted">Enter Last Name</small>
  </div>
  <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection
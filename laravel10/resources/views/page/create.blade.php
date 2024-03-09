@extends('page.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Registration Page</div>
  <div class="card-body">
      
      <form action="{{ url('page') }}" method="post">
        {!! csrf_field() !!}
        
        <label>firstname</label></br>
        <input type="text" name="fname" id="fname" class="form-control"></br>

        <label>lastname</label></br>
        <input type="text" name="lname" id="lname" class="form-control"></br>
        
        <label>email</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        
        <label>phonenumber</label></br>
        <input type="text" name="phonenumber" id="phonenumber" class="form-control"></br>
        
        <label>gender</label></br>
        <input type="text" name="gender" id="gender" class="form-control"></br>
        
        <label>age</label></br>
        <input type="text" name="age" id="age" class="form-control"></br>
        
        <label>address</label></br>
        <input type="text" name="address" id="address" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
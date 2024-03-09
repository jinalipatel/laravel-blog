@extends('page.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('page/' .$page->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$page->id}}" id="id" />
        
        <label>firstname</label></br>
        <input type="text" name="fname" id="fname" value="{{$page->firstname}}" class="form-control"></br>
        
        <label>lastname</label></br>
        <input type="text" name="lname" id="lname" value="{{$page->lastname}}" class="form-control"></br>
        
        <label>email</label></br>
        <input type="text" name="email" id="email" value="{{$page->email}}" class="form-control"></br>
        
        <label>phonenumber</label></br>
        <input type="text" name="phonenumber" id="phonenumber" value="{{$page->phonenumber}}" class="form-control"></br>
        
        <label>gender</label></br>
        <input type="text" name="gender" id="gender" value="{{$page->gender}}" class="form-control"></br>
        
        <label>age</label></br>
        <input type="text" name="age" id="age" value="{{$page->age}}" class="form-control"></br>
        
        <label>address</label></br>
        <input type="text" name="address" id="address" value="{{$page->address}}" class="form-control"></br>
        
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
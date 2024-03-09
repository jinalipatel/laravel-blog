@extends('page.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Laravel Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">firstname : {{ $page->firstname }}</h5>
        <p class="card-text">lastname : {{ $page->lastname }}</p>
        <p class="card-text">email : {{ $page->email }}</p>
        <p class="card-text">phonenumber : {{ $page->phonenumber }}</p>
        <p class="card-text">gender : {{ $page->gender }}</p>
        <p class="card-text">age : {{ $page->age }}</p>
        <p class="card-text">address : {{ $page->address }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
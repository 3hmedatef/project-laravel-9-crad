
@extends('students.layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Show Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Name : {{ $students->name }}</h5>
        <p class="card-text">password : {{ $students->password }}</p>
        
  </div>
       
    </hr>
  
  </div>
</div>
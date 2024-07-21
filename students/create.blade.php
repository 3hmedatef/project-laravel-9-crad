@extends('students.layout')
@section('content')
 
<div class="card">
  <div class="card-header">Data Page</div>
  <div class="card-body">
      
      <form action="{{ url('student') }}" method="post">
        {!! csrf_field() !!}
        <label>Name</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Password</label></br>
        <input type="password" name="password" id="password" class="form-control"></br>
      
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
   
  </div>
</div>
 
@stop
@extends('phones.layout')
@section('content')
<div class="card">
  <div class="card-header">phones Page</div>
  <div class="card-body">
      
      <form action="{{ url('phones') }}" method="post">
        {!! csrf_field() !!}
        <label>phone</label></br>
        <input type="text" name="phone" id="phone" class="form-control"></br>
        
        <input type="submit" value="Save" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
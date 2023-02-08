@extends('parents.layout')
@section('content')
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('parents/' .$parents->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$parents->id}}" id="id" />
        <label>Name</label></br>
        <input type="text" name="name" id="name" value="{{$parents->name}}" class="form-control"></br>
        <label>Address</label></br>
        <input type="text" name="address" id="address" value="{{$parents->address}}" class="form-control"></br>
        <label>Mobile</label></br>
        <input type="text" name="mobile" id="mobile" value="{{$parents->mobile}}" class="form-control"></br>
        <label>Email</label></br>
        <input type="email" name="email" id="email" value="{{$parents->email}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
@extends('phones.layout')
@section('content')phone
<div class="card">
  <div class="card-header">Contactus Page</div>
  <div class="card-body">
      
      <form action="{{ url('phones/' .$phones->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$phones->id}}" id="id" />
        <label>phone</label></br>
        <input type="text" name="phone" id="phone" value="{{$phones->phone}}" class="form-control"></br>
                <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
  
  </div>
</div>
@stop
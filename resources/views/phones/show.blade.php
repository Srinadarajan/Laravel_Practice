@extends('phones.layout')
@section('content')
<div class="card">
  <div class="card-header">phones Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $phones->name }}</h5>
        <p class="card-text">phone : {{ $phones->phone }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
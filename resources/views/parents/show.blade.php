@extends('parents.layout')
@section('content')
<div class="card">
  <div class="card-header">parents Page</div>
  <div class="card-body">
  
        <div class="card-body">
        <h5 class="card-title">Name : {{ $parents->name }}</h5>
        <p class="card-text">Address : {{ $parents->address }}</p>
        <p class="card-text">Mobile : {{ $parents->mobile }}</p>
        <p class="card-text">Email : {{ $parents->email }}</p>
  </div>
      
    </hr>
  
  </div>
</div>
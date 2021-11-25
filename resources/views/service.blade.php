@extends('Layout.app')
@section('title','Service')
@section('content')
<div class="container">
<div class="row">
<div class="col-md-4 p-1">
<div class="card" style="width: 100%;">
  <img src="{{asset('image/laravel.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="col-md-4 p-1">
<div class="card" style="width: 100%;">
  <img src="{{asset('image/laravel.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
<div class="col-md-4 p-1">
<div class="card" style="width: 100%;">
  <img src="{{asset('image/laravel.jpg')}}" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
</div>
</div>


<div class="container mt-5 mb-5">
<div class="row">
<div class="col-md-6">
<form>
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">User Name</label>
    <input type="text" class="form-control" id="UserName">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Mobile Number</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">We'll never share your mobile number with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Ypur Massage</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Enter your message here.</div>
  </div>
  <button type="submit" class="btn btn-block">send Now</button>
</form>
</div>
<div class="col-md-6">
    <h5>Address</h5>
    <p>55 K.C Roy Road,Mymensingh</p>
    <p>sifatfahim2@gmail.com</p>
    <p>+8801946566305</p>
</div>
</div>
</div>
@endsection
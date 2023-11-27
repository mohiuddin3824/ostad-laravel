@extends('frontend.master')

@section('content')


<section class="pb-5 bg-light"><div class="container pt-5">
<div class="container">
<h3>Get In Tuch</h3>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Your Name</label>
    <input type="email" class="form-control"  placeholder="Enter your Name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">E-mail</label>
    <input type="email" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Subject</label>
    <input type="email" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="form-group">
    <label for="messate">Write Your Message</label>
    <textarea name="" id="" cols="30" class="form-control" rows="10"></textarea>
  </div>

  <button type="submit" class="btn btn-primary mt-2">Send me</button>
</form>
</div>
</section>

@endsection
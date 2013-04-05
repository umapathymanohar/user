@extends('layouts.master')
@section('navigation')
@parent
<li>
  <a href="about">
    About
  </a>
</li>
@stop
@section('content')
<div class="row ">
  <div class="offset4 span3">

     @if (Session::has('error'))
    <div class="alert alert-error">
  <a class="close" data-dismiss="alert" href="#">×</a>
  <h4 class="alert-heading">Oh Snap!</h4>
 
    @if (Session::has('error'))
    {{ trans(Session::get('reason')) }}
    @endif   
 
</div>
    
      @endif
    <form class="well" method="post" action="{{URL::to('password/remind')}}">
      <legend>
        Forgot Password
      </legend>
      <label for="email">
        Email
      </label>
      <input type="email" placeholder="Your Email Address" name="email" id="email" />
      <hr>
      <button type="submit" class="btn btn-success">
        Send Mail
      </button>
    </form>

       </div>
</div>



@stop

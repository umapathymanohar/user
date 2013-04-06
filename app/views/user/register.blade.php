@extends('layouts.master')

@section('navigation')
@parent
 
@stop

@section('content')


<div class="row ">
  <div class="offset5 span3">
    
    
      <form class="well" method="POST" action="registerAccount">
         @include('plugins.status')
        <legend>
          Register
        </legend>
        <label for="email">
          Email
        </label>
        <input type="email" placeholder="Your Email Address" name="email" id="email" />
        <label for="password">
          Password
        </label>
        <input type="password" placeholder="Your Password" name="password" id="password" />
        <label for="password">
          Confirm Password
        </label>
        <input type="password" placeholder="Re-type Password" name="password_confirmation" id="password_confirmation" />
 
 
        <button type="submit" style="width:215px;" class="btn btn-success">
          Sign up
        </button> Already registerd ? <a href="{{URL::to('home')}}">
            Sign in
          </a>
        
        
        
      </form>
  
    
    
    
  </div>
</div>



@stop
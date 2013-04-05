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
<div class="">
  
  
  <div class="row ">
    <div class="span3">
      
  @if (isset($message))
    <div class="alert alert-success">
  <a class="close" data-dismiss="alert" href="#">×</a>
  <h4 class="alert-heading">Yeppe!</h4>
 
    
    {{$message}}
    
 
</div>
    
      @endif

      <form class="well" method="POST" action="user/authenticate">
        <legend>
          Login
        </legend>
        <label for="email">
          Email
        </label>
        <input type="email" placeholder="Your Email Address" name="email" id="email" />
        <label for="password">
          Password
        </label>
        <input type="password" placeholder="Your Password" name="password" id="password" />
        <label class="checkbox" for="new_user">
          <input type="checkbox" name="new_user" id="new_user">
          I am a new user
        </label>
        
        <label>
          <a href="user/forgotPassword">
            Forgot Password ?
          </a>
          
        </label>
        <hr>
        <button type="submit" class="btn btn-success">
          Login or Register
        </button>
        
        
        
      </form>
    </div>
    <div class="span8">
      <h2>
        Welcome!
      </h2>
      <p>
        <em>
          Laravel is a clean and classy framework for PHP web development. Freeing you from spaghetti code, Laravel helps you
          create wonderful applications using simple, expressive syntax. Development should be a creative experience
          that you enjoy, not something that is painful. Enjoy the fresh air..
        </em>
      </p>
      
      
      <p>
        <em>
          Laravel is a PHP framework committed to elegance and simplicity. Programming doesn't have to be painful. In fact, it can be enjoyable with the right tools. Laravel is one of those tools. Dig into its wonderful documentation to learn more.
          
          Laravel is for all PHP programmers, even beginners. In fact, Laravel's documentation makes Laravel a great choice for both beginning and advanced PHP programmers. In addition to the documentation, Laravel's friendly community is always willing to help answer questions that aren't covered in the documentation. Just ask in the forums!
        </em>
      </p>
      <p>
        
        <em>
          Bundles are a great way to package and share 
          <b>
            Laravel code
          </b>
          . They can be anything - from a complete ORM or simple debugging tools, and it's a 
          <b>
            breeze
          </b>
          to drop them into your application!. Ubercool :-)
        </em>
      </p>
      
      
      <p>
        <em>
          It's the time we've all been waiting for. The very first gathering of Laravel artisans! Laracon is a two-day event where you will meet other members of the Laravel community, listen to engaging presentations, and learn how Laravel will make your PHP development more enjoyable.
        </em>
      </p>
    </div>
    
    
    
    
    
  </div>
  
  
</div>

<div class="container testimonials">
  
  
  <div class="row">
    <div class="span4">
      <blockquote>
        <p>
          "It's totally awesome, we're could imagine life without it!"
        </p>
        <small>
          <img src="assets/img/jimi.jpg" alt="Jimi Bloggs" class="img-circle" />
          Jimi Bloggs 
          <span class="spacer">
            /
          </span>
          
          <a href="#">
            @mrjimi
          </a>
        </small>
        
      </blockquote>
    </div>
    <div class="span4">
      <blockquote>
        <p>
          "10 out of 10, highly recommended!"
        </p>
        <small>
          <img src="assets/img/jobs.jpg" alt="Jimi Bloggs" class="img-circle" />
          Steve Bloggs 
          <span class="spacer">
            /
          </span>
          
          <a href="#">
            Founder of Apple
          </a>
        </small>
        
      </blockquote>
    </div>
    <div class="span4">
      <blockquote>
        <p>
          "Our productivity & sales are up! Couldn't be happier with this product!"
        </p>
        <small>
          <img src="assets/img/adele.jpg" alt="Adele Bloggs" class="img-circle" />
          Adele Bloggs 
          <span class="spacer">
            /
          </span>
          
          <a href="#">
            @iamadele
          </a>
        </small>
        
      </blockquote>
    </div>
  </div>
  
  
</div>

@stop
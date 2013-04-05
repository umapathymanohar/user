@extends('layouts.master')

@section('navigation')
@parent
 
@stop

@section('content')


<div class="row ">

  <div class="span12">
    
      <h2>Password reset successfully!</h2>
      <a href="{{URL::to('home')}}"  class="btn btn-success">Please login to continue <i class="icon icon-white  icon-circle-arrow-right"> </i></a>
      <hr>
      <p>
        <em>Note:  Laravel is a clean and classy framework for PHP web development. Freeing you from spaghetti code, Laravel helps you create wonderful applications using simple, expressive syntax. Development should be a creative experience that you enjoy, not something that is painful. Enjoy the fresh air..
        
        Laravel is a PHP framework committed to elegance and simplicity. Programming doesn't have to be painful. In fact, it can be enjoyable with the right tools. Laravel is one of those tools. Dig into its wonderful documentation to learn more. Laravel is for all PHP programmers, even beginners. In fact, Laravel's documentation makes Laravel a great choice for both beginning and advanced PHP programmers. In addition to the documentation, Laravel's friendly community is always willing to help answer questions that aren't covered in the documentation. Just ask in the forums!

      Laravel is a clean and classy framework for PHP web development. Freeing you from spaghetti code, Laravel helps you create wonderful applications using simple, expressive syntax. Development should be a creative experience that you enjoy, not something that is painful. Enjoy the fresh air..
        
        Laravel is a PHP framework committed to elegance and simplicity. Programming doesn't have to be painful. In fact, it can be enjoyable with the right tools. Laravel is one of those tools. Dig into its wonderful documentation to learn more. Laravel is for all PHP programmers, even beginners. In fact, Laravel's documentation makes Laravel a great choice for both beginning and advanced PHP programmers. In addition to the documentation, Laravel's friendly community is always willing to help answer questions that aren't covered in the documentation. Just ask in the forums!
      </em>
      </p>
      
       </div>
</div>



@stop

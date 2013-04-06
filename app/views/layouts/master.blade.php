<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>
      Time-Labs
    </title>
    
    
    <link rel="stylesheet" href="{{URL::to('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/css/bootstrap-responsive.min.css')}}">
    <link rel="stylesheet" href="{{URL::to('assets/css/jquery.xdretroclock.css')}}">
    
    
    <script src="{{URL::to('assets/js/jquery-min.js')}}">
    </script>
    <script src="{{URL::to('assets/js/bootstrap.min.js')}}">
    </script>
    
    
    <script src="{{URL::to('assets/js/jquery.xdretroclock.js')}}">
    </script>
  </head>
  
  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="home">
            TimeSheet
          </a>
          @section('post_navigation')
          @if (Auth::check())
          @include('plugins.loggedin_postnav')
          @endif
          
        </div>
      </div>
    </div>
    
    <div  style="padding-top:60px"  class="container">
     
      @yield('content')
      
    </div>
    
    <!-- /container -->
    
    
    
    
    <footer>
      
      <div class="container">
        <p>
          &copy; Icelabs 2012
        </p>
        
      </div>
      
    </footer>
  </body>
</html>


<script>
  $(function(){
    $('#retroclockbox1').xdretroclock();
    }
     )
</script>

<script>
  
  $(document).on('click', '.showUsers', function(e){
    e.preventDefault();

    $('.userTable').toggle();
  });
</script>
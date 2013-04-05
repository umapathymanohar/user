@extends('layouts.master')
@section('content')
<div class="row">
    <div class="span12">
    <h2>Yikes!</h2>
            <p><em>Hmm.. Laravel is a clean and classy framework for PHP web development. Freeing you from spaghetti code, Laravel helps you
create wonderful applications using simple, expressive syntax. Development should be a creative experience
that you enjoy, not something that is painful. Enjoy the fresh air..</em></p>
            <p> <em>Bundles are a great way to package and share <b>Laravel code</b>. They can be anything - from a complete ORM or simple debugging tools, and it's a <b>breeze</b> to drop them into your application!. Ubercool :-)</em></p>
</div>
    <div class="span7 ">
        <table style="margin-bottom:0; border-bottom:none;" class="table  table-bordered table-striped">
            <thead>
                <td style="width:220px;">Date</td>
                <td style="width:109px;">Check In</td>
                <td style="width:110px;">Check Out</td>
                <td>Working Hours</td>
            </thead>
            
            
        </table>
    <div class="entries">

        <table class="table  table-bordered table-striped">
                <tbody>
                <?php $out_time = false; $in_time = false;?>
          
                @foreach ($timesheet as $time)
                <tr>
                    <td style="width:220px;"> <?php 
        
        
                    $entry_dt =  strtotime($time->check_in_date);
                    $dt =  date("j M, Y (D)", $entry_dt);
                    echo $dt;
        
                    ?>
        
                       </td>
                    <td style="width:109px;"> @if ($time->check_in_time)
                        {{$time->check_in_time}}
                        @else
                        -
                          @endif  </td>
                    <td style="width:110px;"> @if ($time->check_out_time)
                        {{$time->check_out_time}}
                        @else
                        -
                          @endif  
                     </td>
        
                    <?php 
                        $working_hours = strtotime($time->check_out_time) - strtotime($time->check_in_time);
                        $working_hours =  date("H:i" , mktime(0,0,$working_hours));
                        if ($time->check_in_date == date('Y-m-d')){
                        if ($time->check_in_time) {
                            $in_time = true;
                        }
                        else
                        {
                            $in_time = false;
                        }
                        if ($time->check_out_time) {
                            $out_time = true;
                        }
                        else
                        {
                            $out_time = false;   
                        }
        
                        }
        
        
        
                    ?>
                    <td><?php if ($time->check_out_time) {echo $working_hours . ' hours';} else { echo '-'; } ?> </td>
           
                </tr>
              @endforeach
                </tbody>
            
        </table>
    </div>

 
    </div>
    
    <div class="span5">
        
    <div class="well">
    <div id="retroclockbox1"></div>

        @if ($in_time != true)

    <form id = "checkin" method="POST" action="timesheet/checkin">
        <button style="width:100%; margin-top:20px;" class=" btn btn-large btn-success"  >Check in</button>
    </form>
    @endif
    @if ($out_time != true && $in_time == true) 
    
    <form method="POST" action="timesheet/checkout">
        <button style="width:100%; margin-top:20px;" class=" btn btn-large btn-success ">Check out</button>
    </form>
    
    @endif

    @if ($out_time == true)
    <div class="text-center">
    <h4>Yikes! You have been successfully logged out!</h4>
    </div>
    @endif




    </div>
 </div>
    
</div>


@stop
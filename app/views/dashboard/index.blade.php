@extends('layouts.master')

@section('navigation')
@parent
<li><a href="about">About</a></li>
@stop

@section('content')


<div class="row ">
	<div class="span12">


		<h2>Welcome {{ $role }}</h2>
		<p>Wanna see Timesheet <a href="timesheet"><em>click here</em></a></p>
		





	</div>
	<div class="span4">
		@if ($role == "superadmin")
		<p>Wanna see Users <a class="showUsers" href="#"><em>click here</em></a></p>
		<table style="margin-bottom:0; border-bottom:none;" class="hide table userTable  table-bordered table-striped">
			<thead>
				<td style="width:160px;">User Name</td>
				<td >Role </td>

			</thead>
			<tbody>

 
@foreach (User::all() as $user)
                <tr>
                    <td >  
        
        
                    {{$user->email}}

                    </td>

                      <td >  
        
           @foreach ($user->role as $roleSpecified)
                    {{$roleSpecified->path}}
			@endforeach
                    </td>
                  </tr>
				@endforeach

  
			</tbody>

		</table>


		@endif
	</div>
</div>



@stop



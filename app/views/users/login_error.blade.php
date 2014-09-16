@extends('layouts.main')
@section('content')
  @if(isset($message))
       <p style='background-color:lightgreen;color:purple;padding:10px;margin:20px 5px 0 5px;border-radius:10px'> {{$message .' '.'. ! Check your email and click on the link provided in your email to log in'}}</p>
       @endif
<div class="row">

  <div class="large-4 columns signupform">
   
      {{ Form::open(array('url'=>'/users/processlogin'))}}
       <h3>Login Error</h3>

    <!-- if there are login errors, show them here -->
        <p >
          {{ $errors->first('email', '<p style="background-color:red;color:white;border:1px solid white;padding:10px;">:message</p>') }}
          {{ $errors->first('password','<p style="background-color:red;color:white;border:1px solid white;padding:10px;">:message</p>') }}
        </p>  
           @if(isset($login_error))
              <p style='background-color:red;color:white;border:1px solid white;padding:10px;'> {{$login_error}} </p>
            @endif
       

       <p>
         {{ Form::label('email', 'Email Address') }}
         {{ Form::email('email', Input::old('email'), array('placeholder' => 'awesome@awesome.com')) }}
      </p>

       <p>
        {{ Form::label('password', 'Password') }}
        {{ Form::password('password') }}
       </p>

     <p>{{ Form::submit('Submit!',array('class'=>'button')) }}</p>
       {{ Form::close() }}

       </div>   
    
  </div>  
</div>  
 
@stop
		 
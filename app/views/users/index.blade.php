@extends('layouts.main')
@section('content')
  @if(isset($message))
       <p style='background-color:lightgreen;color:purple;padding:10px;margin:20px 5px 0 5px;border-radius:10px'> {{$message .' '.'. ! Check your email and click on the link provided in your email to log in'}}</p>
       @endif
<div class="row">

  <div class="large-4 columns signupform">
    <h3>Create your Account</h3>
      
       {{Form::open(array('route' =>'users.store')) }}
       {{Form::label('username','username')}}  
       {{Form::text('username')}} 
       {{Form::label('password','password')}}  
       {{Form::password('password')}} 
       {{Form::label('email','email')}}  
       {{Form::email('email')}}  
       {{Form::label('name','name')}}  
       {{Form::text('name')}}
       {{Form::label('surname','surname')}}  
       {{Form::text('surname')}}  
       {{$errors->first('username','<small class="error">:message</small>')}}
       {{$errors->first('password','<small class="error">:message</small>')}}
       {{$errors->first('email','<small class="error">:message</small>')}}
       {{Form::submit('submit',array('class'=>'button'))}}  
       {{FORM::close()}}
      <a href="{{url('users/list')}}">List of users</a>
    
  </div>  
</div>  
 
@stop
		 


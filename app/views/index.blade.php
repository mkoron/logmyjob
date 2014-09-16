@extends('layouts.main')
@section('content')
<div class="container">
  <div class="row">

      <div class="large-12 columns" data-orbit>
           <div>
             <h1 class="orbit-h1">LOGMYJOB ALLOWS YOU TO</h1>
              <h4 class="log-image-after orbit-h4">Access and Keep track of your job information from anywhere</h4>
          </div>

           <div>
              <h1 class="orbit-h1">Create an account</h1>
                  <h4 class="orbit-h4">and get rid of all those annoying spreadsheets </h4>
                  <a href="{{url('/users')}}" class="signup-button button medium">Signup</a>
           </div>
           <div>
             <h1 class="orbit-h1">LOGMYJOB</h1>
                <h4 class="orbit-h4">Allows you to notify and alert users to changes in your job status.</h4>
                <h4 class="orbit-h4">Users can comment or edit your information based on permissions.</h4>
                      
          </div>
    </div> 

  </div>
<div class="subcontainer">
        <div class="row">
           <div class="large-8 columns">
                     <h4>Login to your accout</h4>
                     <p>Add jobs and tasks to your schedule. Set up and invite others to view or edit your schedule.</p>
                      <a href="#" class="button medium" data-reveal-id="form-modal">LOGIN HERE</a>  
            </div>
            <div class="large-4  columns">
                <img src="{{asset('img/schedule.png')}}" class="schedule-image">    
            </div>
       </div>
        <div class="row">
                <div class="large-8 columns">
                    <h4>LOGMYJOB enables you to</h4>
                    <p>Save your information online securely and in an organized manner.</p>
                     <img class="save-your-info-image" src="{{asset('img/Hd_bg_removed.png')}}" alt="hard drive image">
                    <p>Create reports, analyse information.</p>
                </div>
                         
         </div>     
                      
       </div>  
</div>  
      <div id="form-modal" class="reveal-modal tiny">
          <a href="#" class="close-reveal-modal">&#215</a>
          
          {{ Form::open(array('url'=>'/users/processlogin'))}}
    <h1>Login</h1>

    <!-- if there are login errors, show them here -->
    <p>
      {{ $errors->first('email') }}
      {{ $errors->first('password') }}
    </p>

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
   
@stop
		 


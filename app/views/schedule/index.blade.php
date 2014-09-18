@extends('layouts.main')
@section('content')
<div class="row shedule-styling">

    <div class="large-12 columns" >
      
        <h1>Welcome to your Workspace.</h1>
        <h4>Place to manage and organise yours tasks</h4>
        <a class="button small"  data-reveal-id="form-modal">ADD A TASK</a>  
        
     
      
          
    </div> 

  </div>
  <div id="form-modal" class="reveal-modal tiny">
          <a href="#" class="close-reveal-modal">&#215</a>
          
          {{ Form::open(array('url'=>'/tasks/create'))}}
      <p><bold>Add a new Task</bold></p>

    <!-- if there are login errors, show them here -->
    <p>
      {{ $errors->first('email') }}
      {{ $errors->first('password') }}
    </p>
       
       <p>{{ Form::text('name','Task Name')}}</p>
       <p>{{ Form::text('name','Task Title')}}</p>
       <p>{{ Form::text('name','Task Status')}}</p>
   
      

    <p>{{ Form::submit('Submit!',array('class'=>'button')) }}</p>
       {{ Form::close() }}

  </div>   

@stop()
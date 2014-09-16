@extends('layouts.main')
@section('content')
<div class="row">
  <div class="large-12 columns">
    <div class="container">
      <table style="margin-top:50px;">
        <thead>
          <tr>
            <th width="200">Username</th>
            <th>Password</th>
            <th width="150">email</th>
            <th width="150">name</th>
          </tr>
        </thead>
        <tbody>
           @foreach($users as $user)
           <tr>
              <td>{{{$user->username}}}</td>
              <td>{{{$user->password}}}</td>
              <td>{{{$user->email}}}</td>
              <td>{{{$user->name}}}</td>
           </tr>
           @endforeach
              
        </tbody>
     </table>
     
    </div> 
  </div>  
</div>  
 
@stop
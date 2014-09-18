<!DOCTYPE html>
<html>
  <head>
    <title>LOGMYJOB</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('css/normalize.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('css/foundation.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('css/my-styles.css')}}" rel="stylesheet" media="screen">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet" media="screen">
    <script src="{{asset('js/vendor/custom.modernizr.js')}}"></script>
  </head>
  <body>

    <!-- Navigation -->
    <div class="contain-to-grid fixed">    
      <nav class="top-bar">
        <ul class="title-area">
          <li class="name">
            <h1>
              <a href="{{url('/')}}">LOGMYJOB</a>
            </h1>
          </li>
          <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
        </ul>
        <section class="top-bar-section">
          <ul class="right">
            <li><a href="{{url('/')}}">HOME</a></li>
            <li><a href="#">FORUM</a></li>
            <li><a href="#">SUPPORT</a></li>
            <li class="has-dropdown">
           <?php  $Is_logged_in=Auth::check();?>
             <?php if($Is_logged_in){?>
              <a href="#">ACCOUNT</a>
              <ul class="dropdown">
                <li><a href="#">PROFILE</a></li>
                <li><a href="#">SETTINGS</a></li>
                <li class="divider"></li>
                <li><a href="#">FAQ'S</a></li>
               <li><a href="{{url('users/logout')}}">LOGOUT</a></li> 
             <?php }?>
                   
              </ul>
            
          </ul>
        </section>
      </nav>
    </div>
  
        <!-- End Navigation -->

    <!-- body content goes here-->
      
           @yield('content')
           
    <!-- body content -->
   <div class="row">
     <footer>
       <?php  echo '&copy'.' '.DATE('Y').' '.'LOGMYJOB all right reserved';?>
    </footer>
  </div>
    <script>
     document.write('<script src=' +
      ('__proto__' in {} ? '{{asset("js/vendor/zepto")}}' : '{{asset("js/vendor/jquery")}}') +
      '.js><\/script>')
    </script>
    {{HTML::script('js/foundation.min.js')}}
    <script>
      $(document).foundation();
    </script>  
  </body>
</html>
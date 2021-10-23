<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  </head>
  <body>
    <nav class="navbar">
      <div class="nav-wrapper">
        <a href="/"><img src="{{asset('images/ih.png')}}" class="brand-img"></a>
        <input type="text" class="search-box" placeholder="Search">
      </div>
      <div class="nav-items">
        
        <img src="{{asset('images/ihome.png')}}" class="icon">
        <img src="{{asset('images/im.png')}}" class="icon">
        <img src="{{asset('images/iee.png')}}" class="icon">
        <img src="{{asset('images/f.png')}}" class="icon">
        
        
        
        <div class="btn-group" role="group">
          @guest
          <a href="" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="{{asset('images/wallpaper.jpg')}}" class="icon user-profile" ></a>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
          @else

          <a href="" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img class=" icon user-profile" src="/storage/cover_images/{{Auth::user()->profileimg}}"></a>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="/profile"><img src="{{asset('images/profile.png')}}" class="icon">Profile</a>
            <a class="dropdown-item" href=""><img src="{{asset('images/save.png')}}" class="icon">Saved</a>
            <a class="dropdown-item" href="/editprofile"><img src="{{asset('images/st.png')}}" class="icon">Setting</a>
            <a class="dropdown-item" href=""><img src="{{asset('images/sa.png')}}" class="icon">Switch accounts</a>
            <div style="border-top: #DEDBDC 1px solid;"></div>

          @endguest
          
            @guest
            
            
            
            
            
            
            <!-- Authentication Links -->
            
            <li class="nav-item">
              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
              <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            
            
            
            <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault();
              document.getElementById('logout-form').submit();">
              {{ __('Logout') }}
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
            </a>
            
            
            
            
            
          </div>
        </div>
      </div>
      
    </div>
    <div class="custom-control custom-switch dark-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitches"onclick="myFunction()">
      <label class="custom-control-label" for="customSwitches"></label>
    </div>
  </nav>
  
  @yield('content')
  @endguest
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
  <script type="text/javascript">
  var myDiv = $('#lmt');
  myDiv.text(myDiv.text().substring(0,120))
  </script>
  <script>
  function myFunction() {
  var element = document.body;
  element.classList.toggle("dark-mode");
  }
  </script>
  @yield('js')
  
  
  
</body>
</html>
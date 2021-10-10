<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Indie+Flower|Overpass+Mono" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/login.css') }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  </head>
  <body>
    
    <div id="wrapper">
      <div class="main-content">
        <div class="header">
          <img src="https://i.imgur.com/zqpwkLQ.png" />
        </div>
        <form method="POST" action="{{ route('login') }}">
          @csrf
          <div class="l-part">
            <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Username" class="input-1"  autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
            @enderror
            
            <div class="overlap-text">
              <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" class="input-2">
              @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
              @enderror
              @if (Route::has('password.request'))
              <a  href="{{ route('password.request') }}">
                {{ __('Forgot?') }}
              </a>
              @endif
              
            </div>
            <button type="submit" class="btn" />Login</button>
          </div>
        </form>
      </div>
      <div class="sub-content">
        <div class="s-part">
          Don't have an account?<a href="#">Sign up</a>
        </div>
      </div>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    
    
  </body>
</html>
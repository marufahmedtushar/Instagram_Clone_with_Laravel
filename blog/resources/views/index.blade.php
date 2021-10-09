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
        <img src="images/ih.png" class="brand-img">
        <input type="text" class="search-box" placeholder="Search">
      </div>
      <div class="nav-items">
        <img src="images/ihome.png" class="icon">
        <img src="images/im.png" class="icon">
        <img src="images/iee.png" class="icon">
        <img src="images/f.png" class="icon">
        
        
        
        <div class="btn-group" role="group">
          <a href="" id="btnGroupDrop1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="images/wallpaper.jpg" class="icon user-profile" ></a>
          <div class="dropdown-menu" aria-labelledby="btnGroupDrop1">
            <a class="dropdown-item" href="/profile">Profile</a>
            <a class="dropdown-item" href=""><img src="images/save.png" class="icon">Saved</a>
            <a class="dropdown-item" href=""><img src="images/st.png" class="icon">Setting</a>
            <a class="dropdown-item" href="">Switch accounts</a>
            <div style="border-top: #DEDBDC 1px solid;"></div>
            <!-- <a type="button" class="dropdown-item">
              <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
              </form>Log out
            </a> -->
            <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
          </div>
        </div>
      </div>
      
    </div>
    <div class="custom-control custom-switch dark-switch">
      <input type="checkbox" class="custom-control-input" id="customSwitches"onclick="myFunction()">
      <label class="custom-control-label" for="customSwitches"></label>
    </div>
  </nav>
  
  <div class="container" >
    
    
    <div class="maincontent">
      
      <div class="story-gallery">
        
        <div class="stories">
          <img class="rounded-circle" src="images/wallpaper.jpg" >
          <div class="story-woner">
            <p>marufahmedtushar</p>
          </div>
        </div>
        <div class="stories">
          <img class="rounded-circle" src="images/wallpaper.jpg" >
          <div class="story-woner">
            <p>tushar</p>
          </div>
        </div><div class="stories">
        <img class="rounded-circle" src="images/wallpaper.jpg" >
        <div class="story-woner">
          <p>tushar</p>
        </div>
      </div>
      <div class="stories">
        <img class="rounded-circle" src="images/wallpaper.jpg" >
        <div class="story-woner">
          <p>maruf</p>
        </div>
      </div>
      <div class="stories">
        <img class="rounded-circle" src="images/wallpaper.jpg" >
        <div class="story-woner">
          <p>ahmed</p>
        </div>
      </div>
      <div class="stories">
        <img class="rounded-circle" src="images/wallpaper.jpg" >
        <div class="story-woner">
          <p>tushar</p>
        </div>
      </div>
      <div class="stories">
        <img class="rounded-circle" src="images/wallpaper.jpg" >
        <div class="story-woner">
          <p>maruf</p>
        </div>
      </div><div class="stories">
      <img class="rounded-circle" src="images/wallpaper.jpg" >
      <div class="story-woner">
        <p>ahmed</p>
      </div>
    </div><div class="stories">
    <img class="rounded-circle" src="images/wallpaper.jpg" >
    <div class="story-woner">
      <p>tushar</p>
    </div>
  </div>
  
</div>
<div class="modal fade  " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modalstyle">
      
      <div class="modal-body">
        <div class="modal-element">
          <button type="button" class="btn " >Report</button><div class="btnborder"></div>
          <button type="button" class="btn " >Unfollow</button><div class="btnborder"></div>
          <button type="button" class="btn " >Go to Post</button><div class="btnborder"></div>
          <button type="button" class="btn " data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
</div>
<section>
  <div class= 'insta fade-scroll'>
    <div class='top-insta'>
      <div class="top-insta-wrapper">
        <a href='' target='_blank'><img src='images/wallpaper.jpg'></a>
        <a href='' target='_blank' class='user'>uncle_oreo1
        </a>
      </div>
      <div class="option">
        <span class= 'dot'><img src='images/dot1.png'data-toggle="modal" data-target="#exampleModalCenter"></span>
      </div>
    </div>
    <div class='post'>
      
      <img src='images/wallpaper.jpg' >
    </div>
    <div class='footer'>
      
      <div class='react'>
        <a href='#' role='button'><span class='love'><img src="images/f.png" class="icon"></span></a>
        <a href='#' role='button'><span class='comment'><img src="images/cmt.png" class="icon"></span></a>
        <a href='#' role='button'><span class='love'><img src="images/im.png" class="icon"></span></a>
        
        <a href='#' role='button'><span class='save'><img src="images/save.png" class="icon"></span></a>
        
      </div>
      
      <div class='caption'>
        <span class="react-like"><a href="">23,330 likes</a></span>
        <a href='#'>uncle_oreo</a><span id="lmt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in fermentum leo. Sed ornare leo velit, ut varius sapien cursus et. Suspendisse vel pellentesque turpis, eleifend convallis massa. Duis commodo ut mauris sit amet venenatis. Maecenas pharetra mauris nisl, eu lobortis lorem sollicitudin nec. Sed in ligula egestas, porttitor urna ac, congue erosLorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
        <div class="commentviwer">
          <span class="commentcounter"><a href="">View all 807 comments</a></span>
          <span class="viwercmt"><a href="">uncle_oreo</a>Lorem ipsum dolor sit amet</span>
          <span class="posttimer">16 HOURS AGO</span>
        </div>
        
      </div>
      
      <div class='comment-section'>
        <input type='text' id='cmnt' placeholder='Add a comment...'>
        <span class='dot02'></span>
      </div>
      
      </div> <!-- end Footer -->
      
      </div> <!-- end Insta -->
      <div class= 'insta fade-scroll'>
        <div class='top-insta'>
          <div class="top-insta-wrapper">
            <a href='' target='_blank'><img src='images/wallpaper.jpg'></a>
            <a href='' target='_blank' class='user'>uncle_oreo1
            </a>
          </div>
          <div class="option">
            <span class= 'dot'><img src='images/dot1.png'data-toggle="modal" data-target="#exampleModalCenter"></span>
          </div>
        </div>
        <div class='post'>
          
          <img src='images/wallpaper.jpg' >
        </div>
        <div class='footer'>
          
          <div class='react'>
            <a href='#' role='button'><span class='love'><img src="images/f.png" class="icon"></span></a>
            <a href='#' role='button'><span class='comment'><img src="images/cmt.png" class="icon"></span></a>
            <a href='#' role='button'><span class='love'><img src="images/im.png" class="icon"></span></a>
            
            <a href='#' role='button'><span class='save'><img src="images/save.png" class="icon"></span></a>
            
          </div>
          
          <div class='caption'>
            <span class="react-like"><a href="">23,330 likes</a></span>
            <a href='#'>uncle_oreo</a><span id="lmt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in fermentum leo. Sed ornare leo velit, ut varius sapien cursus et. Suspendisse vel pellentesque turpis, eleifend convallis massa. Duis commodo ut mauris sit amet venenatis. Maecenas pharetra mauris nisl, eu lobortis lorem sollicitudin nec. Sed in ligula egestas, porttitor urna ac, congue erosLorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
            <div class="commentviwer">
              <span class="commentcounter"><a href="">View all 807 comments</a></span>
              <span class="viwercmt"><a href="">uncle_oreo</a>Lorem ipsum dolor sit amet</span>
              <span class="posttimer">16 HOURS AGO</span>
            </div>
            
          </div>
          
          <div class='comment-section'>
            <input type='text' id='cmnt' placeholder='Add a comment...'>
            <span class='dot02'></span>
          </div>
          
          </div> <!-- end Footer -->
          
          </div> <!-- end Insta -->
          <div class= 'insta fade-scroll'>
            <div class='top-insta'>
              <div class="top-insta-wrapper">
                <a href='' target='_blank'><img src='images/wallpaper.jpg'></a>
                <a href='' target='_blank' class='user'>uncle_oreo1
                </a>
              </div>
              <div class="option">
                <span class= 'dot'><img src='images/dot1.png'data-toggle="modal" data-target="#exampleModalCenter"></span>
              </div>
            </div>
            <div class='post'>
              
              <img src='images/wallpaper.jpg' >
            </div>
            <div class='footer'>
              
              <div class='react'>
                <a href='#' role='button'><span class='love'><img src="images/f.png" class="icon"></span></a>
                <a href='#' role='button'><span class='comment'><img src="images/cmt.png" class="icon"></span></a>
                <a href='#' role='button'><span class='love'><img src="images/im.png" class="icon"></span></a>
                
                <a href='#' role='button'><span class='save'><img src="images/save.png" class="icon"></span></a>
                
              </div>
              
              <div class='caption'>
                <span class="react-like"><a href="">23,330 likes</a></span>
                <a href='#'>uncle_oreo</a><span id="lmt">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur in fermentum leo. Sed ornare leo velit, ut varius sapien cursus et. Suspendisse vel pellentesque turpis, eleifend convallis massa. Duis commodo ut mauris sit amet venenatis. Maecenas pharetra mauris nisl, eu lobortis lorem sollicitudin nec. Sed in ligula egestas, porttitor urna ac, congue erosLorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                <div class="commentviwer">
                  <span class="commentcounter"><a href="">View all 807 comments</a></span>
                  <span class="viwercmt"><a href="">uncle_oreo</a>Lorem ipsum dolor sit amet</span>
                  <span class="posttimer">16 HOURS AGO</span>
                </div>
                
              </div>
              
              <div class='comment-section'>
                <input type='text' id='cmnt' placeholder='Add a comment...'>
                <span class='dot02'></span>
              </div>
              
              </div> <!-- end Footer -->
              
              </div> <!-- end Insta -->
              
              </section> <!-- end section -->
            </div>
            <div class="right-bar ">
              <div class="sidebar">
                <img class="rounded-circle" src="images/wallpaper.jpg" >
                <div class="title">
                  
                  <a href="">marufahmedtushar</a>
                  <h6>marufahmedtushar</h6>
                </div>
                <div class="switch">
                  <a href="">Switch</a>
                </div>
                
                
              </div>
              <div class="suggetion">
                <h4>Suggestions for you</h4>
                <a href="">See all</a>
              </div>
              <div class="suggested-item">
                <img class="rounded-circle" src="images/wallpaper.jpg" >
                
                <div class="sg-title">
                  <a href="">marufahmedtushar</a>
                  <h6>marufahmedtushar</h6>
                </div>
                <div class="sg-follow">
                  <a href="">Follow</a>
                </div>
              </div>
              <div class="suggested-item">
                <img class="rounded-circle" src="images/wallpaper.jpg" >
                
                <div class="sg-title">
                  <a href="">marufahmedtushar</a>
                  <h6>marufahmedtushar</h6>
                </div>
                <div class="sg-follow">
                  <a href="">Follow</a>
                </div>
              </div>
              <div class="suggested-item">
                <img class="rounded-circle" src="images/wallpaper.jpg" >
                
                <div class="sg-title">
                  <a href="">marufahmedtushar</a>
                  <h6>marufahmedtushar</h6>
                </div>
                <div class="sg-follow">
                  <a href="">Follow</a>
                </div>
              </div>  <div class="suggested-item">
              <img class="rounded-circle" src="images/wallpaper.jpg" >
              
              <div class="sg-title">
                <a href="">marufahmedtushar</a>
                <h6>marufahmedtushar</h6>
              </div>
              <div class="sg-follow">
                <a href="">Follow</a>
              </div>
            </div>
            <div class="ifooter">
              <div class="ifooter-item">
                <ul>
                  <li><a href="">About</a></li>
                  <li><a href="">Help</a></li>
                  <li><a href="">Press</a></li>
                  <li><a href="">API</a></li>
                  <li><a href="">Jobs</a></li>
                  <li><a href="">Privacy</a></li>
                  <li><a href="">Terms</a></li>
                  <li><a href="">Locations</a></li>
                  <li><a href="">Top accounts</a></li>
                  <li><a href="">Hashtags</a></li>
                  <li><a href="">Language</a></li>
                </ul>
              </div>
              <div class="copyright">
                <span>© 2021 INSTAGRAM FROM FACEBOOK</span>
              </div>
              
            </div>
          </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
        <script type="text/javascript">
        var myDiv = $('#lmt');
        myDiv.text(myDiv.text().substring(0,120))
        </script>
        
        
        
        
        
      </body>
    </html>
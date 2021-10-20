@extends('layouts.master')
@section('content')
<div class="container content" >
  
  
  <div class="maincontent">
    
    <div class="story-gallery">
      @foreach($users as $user)
      <div class="stories">
        <img class="rounded-circle" src="/storage/cover_images/{{$user->profileimg}}" >
        <div class="story-woner">
          <p>{{$user->name}}</p>
        </div>
      </div>
      @endforeach
      
      
      
      
      
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
                  @foreach($posts as $post)

                  <div class= 'insta fade-scroll'>
                <div class='top-insta'>
                  <div class="top-insta-wrapper">
                    <a href='' target='_blank'><img src="/storage/cover_images/{{$post->user->profileimg}}"></a>
                    <a href='' target='_blank' class='user'>{{$post->user->username}}
                    </a>
                  </div>
                  <div class="option">
                    <span class= 'dot'><img src='images/dot1.png'data-toggle="modal" data-target="#exampleModalCenter"></span>
                  </div>
                </div>
                <div class='post'>
                  
                  <img src="/storage/cover_images/{{$post->post_image}}" >
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
                    <a href='#'>{{$post->user->username}}</a><span id="lmt">{{$post->post_title}}</span>
                    <div class="commentviwer">
                      <span class="commentcounter"><a href="">View all 807 comments</a></span>
                      <span class="viwercmt"><a href="">uncle_oreo</a>Lorem ipsum dolor sit amet</span>
                      <span class="posttimer">{{$post->created_at}}</span>
                    </div>
                    
                  </div>
                  
                  <div class='comment-section'>
                    <input type='text' id='cmnt' placeholder='Add a comment...'>
                    <span class='dot02'></span>
                  </div>
                  
                  </div> <!-- end Footer -->
                  
                  </div> <!-- end Insta -->
                  @endforeach
                  </section> <!-- end section -->
                </div>
                <div class="right-bar ">
                  <div class="sidebar">
                    @guest
                    @else
                    <img class="rounded-circle" src="/storage/cover_images/{{Auth::user()->profileimg}}" >
                    <div class="title">
                      
                      <a href="/profile">{{ str_replace(' ', '', Auth::user()->name ) }}</a>
                      <h6>{{ Auth::user()->name }}</h6>
                      
                    </div>
                    <div class="switch">
                      <a href="">Switch</a>
                    </div>
                    
                    
                  </div>
                  <div class="suggetion">
                    <h4>Suggestions for you</h4>
                    <a href="">See all</a>
                  </div>
                  @foreach($users as $user)
                  @if(Auth::user()->id != $user->id)
                  <div class="suggested-item">
                    <img class="rounded-circle" src="/storage/cover_images/{{$user->profileimg}}" >
                    
                    <div class="sg-title">
                      <a href="/userprofile/{{$user->id}}">{{$user->username}}</a>
                      <h6>Suggested for you</h6>
                    </div>
                    <div class="sg-follow">
                      <a href="">Follow</a>
                    </div>
                  </div>
                  @endif
                  @endforeach
                  
                  @endguest
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
              @endsection
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
        <img src="images/wallpaper.jpg" class="icon user-profile">
      </div>
      <div class="custom-control custom-switch dark-switch">
        <input type="checkbox" class="custom-control-input" id="customSwitches"onclick="myFunction()">
        <label class="custom-control-label" for="customSwitches"></label>
      </div>
    </nav>
    
    <div class="container">
      
      
      <div class="profilecontent">
        <div class="imagecontent">
          <img class="rounded-circle" src="images/wallpaper.jpg" >
        </div>
        <div class="flexclmn">
          <div class="profiletitle">
            <a href="">marufahmedtushar</a>
            <button class="btn btn-secondary btn-sm">Edit Profile</button>
            <a href="index.html" class="setting"><img src="images/st.png" class="icon"></a>
          </div>
          <div class="postfollowercounter ">
            <span><h6>33 posts</h6></span>
            <span><h6>33 followers</h6></span>
            <span><h6>33 following</h6></span>
          </div>
          <div class="discription">
            <span><h6>Maruf Ahmed Tushar</h6></span>
            <span><h5>ffffffffffffff</h5></span>
          </div>
        </div>
        
        
      </div>
      
    </div>
    <div class="container cntr" style="" >
      <div class="postnav">
        <ul class="postnavul nav" id="pills-tab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><img src="images/gg.png">POSTS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false"><img src="images/ig.png">IGTV</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false"><img src="images/save.png">SAVED</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="pills-tagged-tab" data-toggle="pill" href="#pills-tagged" role="tab" aria-controls="pills-tagged" aria-selected="false"><img src="images/tg.png">TAGGED</a>
          </li>
        </ul>
        
        <div class="tab-content" id="pills-tabContent">
          <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
            <div class="tabimg">
              <span>
                
                <a href="" data-toggle="modal" data-target="#exampleModal"><img src='images/wallpaper.jpg' ></a>
                <a href=""><img src='images/wallpaper1.jpg' ></a>
                <a href=""><img src='images/wallpaper2.jpg' ></a>
              </span>
              <span>
                <a href=""><img src='images/wallpaper.jpg' ></a>
                <a href=""><img src='images/wallpaper3.jpg' ></a>
                <a href=""><img src='images/wallpaper.jpg' ></a>
                <a href=""><img src='images/wallpaper3.jpg' ></a>
                <a href=""><img src='images/wallpaper.jpg' ></a>
              </span>
              
            </div>
            
          </div>
          <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            <div class="tabimg">
              
              <span>
                <a href=""><img src='images/wallpaper.jpg' ></a>
                <a href=""><img src='images/wallpaper3.jpg' ></a>
                <a href=""><img src='images/wallpaper.jpg' ></a>
              </span>
              <span>
                <a href=""><img src='images/wallpaper.jpg' ></a>
                <a href=""><img src='images/wallpaper1.jpg' ></a>
                <a href=""><img src='images/wallpaper2.jpg' ></a>
              </span>
              
            </div>
          </div>
          <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
            <div class="tabimg">
              
              <span>
                
                <a href=""><img src='images/wallpaper3.jpg' ></a>
                <a href=""><img src='images/wallpaper.jpg' ></a>
                <a href=""><img src='images/wallpaper.jpg' ></a>
              </span>
              <span>
                <a href=""><img src='images/wallpaper1.jpg' ></a>
                <a href=""><img src='images/wallpaper2.jpg' ></a>
                <a href=""><img src='images/wallpaper.jpg' ></a>
                
              </span>
              
            </div>
          </div>
          <div class="tab-pane fade" id="pills-tagged" role="tabpanel" aria-labelledby="pills-tagged-tab">
            <div class="tabimg">
              
              <span>
                
                <a href=""><img src='images/wallpaper3.jpg' ></a>
                <a href=""><img src='images/wallpaper.jpg' ></a>
                <a href=""><img src='images/wallpaper.jpg' ></a>
              </span>
              <span>
                <a href=""><img src='images/wallpaper1.jpg' ></a>
                <a href=""><img src='images/wallpaper2.jpg' ></a>
                <a href=""><img src='images/wallpaper.jpg' ></a>
                
              </span>
              
            </div>
          </div>
        </div>
        <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content ">
              <div class="modal-body modalelements">
                <div class="modalimg"><img src='images/wallpaper.jpg' style="height: 100%; width: 100%;"></div>
                <div class="modalimgcmt">ffffffffffff</div>
                
              </div>
              
            </div>
          </div>
        </div>
      </div>
      
    </div>
    <footer class="footer" >
      <div class="footwraper" >
        
        <div class="footelement" >
          <ul>
            <li><a href="">About</a></li>
            <li><a href="">Blog</a></li>
            <li><a href="">Jobs</a></li>
            <li><a href="">Help</a></li>
            <li><a href="">API</a></li>
            <li><a href="">Privacy</a></li>
            <li><a href="">Terms</a></li>
            <li><a href="">Top accounts</a></li>
            <li><a href="">Hashtags</a></li>
            <li><a href="">Locations</a></li>
            <li><a href="">Instagram Lite</a></li>
          </ul>
        </div>
        <div class="footercopy" >
          <ul>
            <li><a href="">English (UK)</a></li>
            <li><a href="">© 2021 Instagram from Facebook</a></li>
          </ul>
        </div>
      </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script>
    function myFunction() {
    var element = document.body;
    element.classList.toggle("dark-mode");
    }
    </script>
    
    
  </body>
</html>
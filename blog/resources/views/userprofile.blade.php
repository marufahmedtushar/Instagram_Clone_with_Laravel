@extends('layouts.master')
@section('content')
<div class="container content">
  
  <div class="profilecontent">
    <div class="imagecontent">
      <img class="rounded-circle" src="/storage/cover_images/{{$user->profileimg}}" >
    </div>
    <div class="flexclmn">
      <div class="profiletitle">
        <a class="profiletitle_a" href="">{{ str_replace(' ', '', $user->name ) }}</a>
        <button class="profiletitle_b btn btn-secondary btn-sm"><a href="">Message</a></button>
        <a ><img src="{{asset('images/dot1.png')}}" class="dotimg"  data-toggle="modal" data-target="#exampleModalCenter"></a>
        <div class="modal fade  " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modalstyle">
          
          <div class="modal-body">
            <div class="modal-element">
              <button type="button" class="btn text-danger font-weight-bold" >Block This User</button><div class="btnborder"></div>
              <button type="button" class="btn text-danger font-weight-bold " >Restrict</button><div class="btnborder"></div>
              <button type="button" class="btn text-danger font-weight-bold " >Report User</button><div class="btnborder"></div>
              <button type="button" class="btn " data-dismiss="modal">Close</button>
            </div>
            
          </div>
        </div>
      </div>
    </div>
      </div>
      <div class="postfollowercounter ">
        <span><h6>33 posts</h6></span>
        <span><h6>33 followers</h6></span>
        <span><h6>33 following</h6></span>
      </div>
      <div class="discription">
        <span><h6>{{$user->name}}</h6></span>
        <span><h5>{{$user->bio}}</h5></span>
      </div>
    </div>
    
    
  </div>
  
</div>
<div class="container cntr" style="" >
  <div class="postnav">
    <ul class="postnavul nav" id="pills-tab" role="tablist">
      <li class="nav-item navstyle">
        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true"><img src="images/gg.png">POSTS</a>
      </li>
      
      <li class="nav-item navstyle">
        <a class="nav-link" id="pills-tagged-tab" data-toggle="pill" href="#pills-tagged" role="tab" aria-controls="pills-tagged" aria-selected="false"><img src="images/tg.png">TAGGED</a>
      </li>
    </ul>
    
    <div class="tab-content" id="pills-tabContent">
      <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="tabimg">
          
          
          <span>
            
            @foreach($posts as $post)
            
            
            @if($post->user_id == $user->id)
            
            
            <a href="" data-toggle="modal" data-target="#exampleModal" data-id="{{$post->id}}" data-title="{{$post->post_title}}" data-postimg="{{$post->post_image}}" >
            <img src="/storage/cover_images/{{$post->post_image}}" ></a>
            
            
            
            <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content ">
                  <div class="modal-body modalelements">
                    <div class="modalimg">
                      <div class="form-group">
          <input type="hidden" name="id"class="form-control" id="id" >
          </div>
                      
                      <img name="post_image" id="post_image" src="/storage/cover_images/{{$post->post_image}}" style="height: 50%; width: 50%;">
                    </div>
                    <div class="text title modalimgcmt"></div>
                    
                  </div>
                  
                </div>
              </div>
            </div>
            
            
            @endif
            
            @endforeach
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
@endsection
@section('js')
<script>
  $('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var id = button.data('id') 
  var title = button.data('title')  
  var post_image = button.data('postimage') 



  var modal = $(this)
  modal.find('.modal-body #id').val(id)
  modal.find('.modal-body .title').text(title)
  modal.find('.modal-body #post_image').val(post_image)



})
</script>
@endsection

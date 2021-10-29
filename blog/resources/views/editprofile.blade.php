@extends('layouts.master')
@section('content')
@foreach($users as $user)
@if(Auth::user()->name == $user->name)
@if (session('status'))
<div class="alert alert-success" role="alert">
	{{ session('status') }}
</div>
@endif
@if (session('error'))
<div class="alert alert-danger" role="alert">
	{{ session('error') }}
</div>
@endif
<div class="container form"style="margin-top: 80px;border: #DEDBDC 1px solid;border-radius: 5px;">
	
	<ul class="nav nav-tabs formul" id="myTab" role="tablist" style="border-right: #DEDBDC 1px solid;">
		<li class="nav-item formli" role="presentation">
			<a class="nav-link " id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Edit Profile</a>
		</li>
		<li class="nav-item formli" role="presentation">
			<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Change password</a>
		</li>
		<li class="nav-item formli" role="presentation">
			<a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Create Post</a>
		</li>
		<li class="nav-item formli" role="presentation">
			<a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
		</li>
	</ul>
	<div class="tab-content content-tab p-4" >
		<div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
			<form class="" action="/profileupdate/{{$user->id}}" method="POST" enctype="multipart/form-data" >
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				<div class="form-group form-div ">
					<a href="/profile"><img class="rounded-circle frompic" src="/storage/cover_images/{{$user->profileimg}}"></a>
				</div>
				<div class="form-group form-div ">
					<label class="font-weight-bold labelform" >{{$user->username}}</label>
					<a href="#" class="nav-link font-weight-bold" data-toggle="modal" data-target="#exampleModalCenter">Change profile photo</a>
				</div>
				<div class="form-group form-div ">
					<label class="font-weight-bold labelform" >Name</label>
					<input type="text" name="name" class="form-control" value="{{$user->name}}"  >
				</div>
				<p class="pcolor">Help people discover your account by using the name that you're known by: either your full name, nickname or business name.</p>
				<p class="pcolor">You can only change your name twice within 14 days.</p>
				<div class="form-group form-div">
					<label class="font-weight-bold labelform">Username</label>
					<input type="text" name="username" value="{{ str_replace(' ', '', $user->name ) }}" class="form-control">
				</div>
				<p class="pcolor">In most cases, you'll be able to change your username back to marufahmedtushar for another 14 days. Learn more</p>
				<div class="form-group form-div">
					<label class="font-weight-bold labelform">website</label>
					<input type="text" name="website" value="{{$user->website}}" class="form-control" >
				</div>
				<div class="form-group form-div">
					<label class="font-weight-bold labelform">Bio</label>
					<input type="text" name="bio" value="{{$user->bio}}" class="form-control"  >
				</div>
				<p class="font-weight-bold">
				Personal information</p>
				<p class="pcolor">Provide your personal information, even if the account is used for a business, pet or something else. This won't be part of your public profile.</p>
				<div class="form-group form-div">
					<label class="font-weight-bold labelform" for="exampleFormControlInput1">Email</label>
					<input type="email" name="email" value="{{$user->email}}" class="form-control"  >
				</div>
				<div class="form-group form-div">
					<label class="font-weight-bold">mobile</label>
					<input type="text" name="phone_number" value="{{$user->phone_number}}" class="form-control">
				</div>
				<div class="form-group form-div">
					<label class="font-weight-bold">gender</label>
					<select class="form-control" name="gender" >
						<option selected>{{$user->gender}}</option>
						<option value="male">male</option>
						<option value="female">female</option>
						<option value="others">others</option>
					</select>
				</div>
				
				
				
				<button type="submit" class="btn btn-primary">submit</button>
			</form>
			<div class="modal fade  " id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true" >
				<div class="modal-dialog modal-dialog-centered" role="document">
					<div class="modal-content modalstyle">
						
						<div class="modal-body">
							<div class="modal-element">
								<a href="profile" type="button" class="btn "><img class="rounded-circle frompic" src="/storage/cover_images/{{$user->profileimg}}"></a>
								<p class="font-weight-bold text-center">Synced profile photo</p>
								<p class=" text-center">Instagram, Facebook</p>
								<div class="btnborder"></div>
								<form class="" id="myFunction"  action="/profilepicupdate/{{$user->id}}" method="POST" enctype="multipart/form-data" onClick= { myFunction } >
				{{ csrf_field() }}
				{{ method_field('PUT') }}
								
								<label for="upload" type="button" class="btn text-primary font-weight-bold" >Upload photo
									<span aria-hidden="true"></span>
									<input type="file" id="upload" name="profileimg" style="display:none">
								</label>
								<button type="submit" class="btn text-secondary">
								Submit</button>
							</form>

								<div class="btnborder"></div>
								
								<button type="button" class="btn " data-dismiss="modal">Close</button>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
			<form>
				<div class="form-group form-div ">
					<a href="/profile"><img class="rounded-circle frompic" src="/storage/cover_images/{{$user->profileimg}}"></a>
				</div>
				<div class="form-group form-div ">
					<label class="font-weight-bold labelform" >{{$user->username}}</label>
					
				</div>
				<div class="form-group form-div">
					<label class="font-weight-bold labelform">Old password</label>
					<input type="text" name="bio"  class="form-control"  >
				</div>
				<div class="form-group form-div">
					<label class="font-weight-bold labelform">New password</label>
					<input type="text" name="bio"  class="form-control"  >
				</div>
				<div class="form-group form-div">
					<label class="font-weight-bold labelform">Confirm new password</label>
					<input type="text" name="bio"  class="form-control"  >
				</div>
				<button type="submit" class="btn btn-primary">Change Password</button>
			</form>
		</div>
		<div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">
			<form class="" action="/postscreate" method="POST" enctype="multipart/form-data" >
				{{ csrf_field() }}
				{{ method_field('PUT') }}
				
				
				<div class="form-group">
    <label for="exampleFormControlTextarea1">post title</label>
    <textarea name="post_title" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <div class="form-group form-div ">
					<input type="file"  name="post_image">
				</div>
				
				
				
				
				
				
	
				
				
				<button type="submit" class="btn btn-primary">submit</button>
			</form>
		</div>
		<div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">treataretear</div>
	</div>
</div>

@endif
@endforeach
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
$(function () {
$('#myTab li:last-child a').tab('show')
})
</script>

@endsection
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
  <li class="nav-item" role="presentation">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Edit Profile</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Change password</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="messages-tab" data-toggle="tab" href="#messages" role="tab" aria-controls="messages" aria-selected="false">Messages</a>
  </li>
  <li class="nav-item" role="presentation">
    <a class="nav-link" id="settings-tab" data-toggle="tab" href="#settings" role="tab" aria-controls="settings" aria-selected="false">Settings</a>
  </li>
</ul>


<div class="tab-content content-tab p-4" >
  <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
  	<form class="" action="/profileupdate/{{$user->id}}" method="POST" enctype="multipart/form-data" >
		{{ csrf_field() }}
		{{ method_field('PUT') }}
		
		<div class="form-group form-div ">
			<label class="labelform" >Name</label>
			<input type="text" name="name" class="form-control" value="{{$user->name}}"  >
		</div>
		<div class="form-group">
			<label class="labelform">Username</label>
			<input type="text" name="username" value="{{ str_replace(' ', '', $user->name ) }}" class="form-control">
		</div>
		<div class="form-group">
			<label class="labelform">website</label>
			<input type="text" name="website" value="{{$user->website}}" class="form-control" >
		</div>
		<div class="form-group">
			<label class="labelform">Bio</label>
			<input type="text" name="bio" value="{{$user->bio}}" class="form-control"  >
		</div>
		<div class="form-group">
			<label class="labelform" for="exampleFormControlInput1">Email</label>
			<input type="email" name="email" value="{{$user->email}}" class="form-control"  >
		</div>
		<div class="form-group">
			<label >mobile</label>
			<input type="text" name="phone_number" value="{{$user->phone_number}}" class="form-control">
		</div>
		<div class="form-group">
			<label>gender</label>
			<select class="form-control" name="gender" >
				<option selected>{{$user->gender}}</option>
				<option value="male">male</option>
				<option value="female">female</option>
				<option value="others">others</option>
			</select>
		</div>
		<div class="form-group">
			<label >Example file input</label>
			<input type="file" name="profileimg" class="form-control-file" >
		</div>
		
		
		<button type="submit" class="btn btn-primary">submit</button>
	</form></div>
  <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">fdgdrfgdf</div>
  <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab">rtrtrtr</div>
  <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab">treataretear</div>
</div>
  </div>

 <!-- <div class="container"style="margin-top: 80px;border: #DEDBDC 1px solid;border-radius: 5px;">
<div class="row">
  <div class="col-3">
 	<div class="nav flex-column">
  <a class="nav-link active" data-toggle="tab" role="tab" href="#home">Active</a>
  <a class="nav-link" data-toggle="tab" role="tab" href="#profile">Link</a>
  <a class="nav-link" data-toggle="tab" role="tab" href="#messages">Link</a>
  <a class="nav-link " data-toggle="tab" role="tab" href="#settings">Disabled</a>
</div>
 </div>
 <div class="col-9">
 	<div class="" >
 		<div class=" fade show active" id="home"><input class="form-control form-control-lg" type="text" placeholder=".form-control-lg">
<input class="form-control" type="text" placeholder="Default input">
<input class="form-control form-control-sm" type="text" placeholder=".form-control-sm"></div>
      <div class=" fade" id="profile">.gregter</div>
      <div class=" fade" id="messages"><form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form></div>
      <div class=" fade" id="settings">.olhjkghjg.</div>
 	</div>
 	
 </div>
</div>
</div> -->

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
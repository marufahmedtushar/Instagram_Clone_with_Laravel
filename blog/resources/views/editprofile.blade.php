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


<div class="container" style="border: 1px solid #e6e6e6;" >
	
	<form action="/profileupdate/{{$user->id}}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		{{ method_field('PUT') }}



		<div class="form-group">
			<label >Name</label>
			<input type="text" name="name" class="form-control" value="{{$user->name}}"  >
		</div>
		<div class="form-group">
			<label >Username</label>
			<input type="text" name="username" value="{{ str_replace(' ', '', $user->name ) }}" class="form-control">
		</div>
		<div class="form-group">
			<label >website</label>
			<input type="text" name="website" value="{{$user->website}}" class="form-control" >
		</div>
		<div class="form-group">
			<label >Bio</label>
			<input type="text" name="bio" value="{{$user->bio}}" class="form-control"  >
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Email</label>
			<input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleFormControlInput1" >
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
			<label for="exampleFormControlFile1">Example file input</label>
			<input type="file" name="profileimg" class="form-control-file" id="exampleFormControlFile1">
		</div>
		
		
		<button type="submit" class="btn btn-primary">submit</button>
	</form>

</div>
<div class="container" style="border: 1px solid #e6e6e6;" >
	<div class="row" style="border-right: 1px solid #e6e6e6;">
  <div class="col-md-3" style="border-right: 1px solid #e6e6e6;overflow: hidden;">
    <div class=" nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
      <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
      <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
      <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
    </div>
  </div>
  <div class="col-md-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"><form action="/profileupdate/{{$user->id}}" method="POST" enctype="multipart/form-data">
		{{ csrf_field() }}
		{{ method_field('PUT') }}



		<div class="form-group">
			<label >Name</label>
			<input type="text" name="name" class="form-control" value="{{$user->name}}"  >
		</div>
		<div class="form-group">
			<label >Username</label>
			<input type="text" name="username" value="{{ str_replace(' ', '', $user->name ) }}" class="form-control">
		</div>
		<div class="form-group">
			<label >website</label>
			<input type="text" name="website" value="{{$user->website}}" class="form-control" >
		</div>
		<div class="form-group">
			<label >Bio</label>
			<input type="text" name="bio" value="{{$user->bio}}" class="form-control"  >
		</div>
		<div class="form-group">
			<label for="exampleFormControlInput1">Email</label>
			<input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleFormControlInput1" >
		</div>
		<div class="form-group">
			<label >mobile</label>
			<input type="text" name="phone_number" value="{{$user->phone_number}}" class="form-control">
		</div>
		<div class="form-group">
			<label>gender</label>
			<select class="form-control" name="gender " value="{{$user->gender}}" selected>
				<option value="male">male</option>
				<option value="female">female</option>
				<option value="others">others</option>
			</select>
		</div>
		<div class="form-group">
			<label for="exampleFormControlFile1">Example file input</label>
			<input type="file" name="profileimg" class="form-control-file" id="exampleFormControlFile1">
		</div>
		
		
		<button type="submit" class="btn btn-primary">submit</button>
	</form>

</div></div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">dflkdsflngkln</div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">jjjjjjjjjjjjjjjjjjjjjj</div>
      <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">ssssssssssssssssssssssssss</div>
    </div>
  </div>
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
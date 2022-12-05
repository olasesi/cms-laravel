@extends('admin.templates.master')
@section('content')

<div class="main-panel">
    <div class="row ">

        @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif

 <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Add user</h4>
        <p class="card-description"> </p>
        <form class="forms-sample" method="POST" action="{{route('admin.save')}}" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">FullName</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name" value="{{old('name')}}">
            @if ($errors->has('name'))
                <span class="errors">{{ $errors->first('name') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputUsername">Username</label>
            <input type="text" class="form-control" id="exampleInputUsername" placeholder="Username" name="username" value="{{old('username')}}">
            @if ($errors->has('username'))
            <span class="errors">{{ $errors->first('username') }}</span>
        @endif
          </div>
            <div class="form-group">
            <label for="exampleInputEmail3">Email address</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email" value="{{old('email')}}">
            @if ($errors->has('email'))
            <span class="errors">{{ $errors->first('email') }}</span>
        @endif
          </div>
            <div class="form-group">
            <label for="exampleInputPassword4">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password">
            @if ($errors->has('password'))
            <span class="errors">{{ $errors->first('password') }}</span>
        @endif
          </div>
          
          <div class="form-group">
            <label for="exampleInputConPassword4">Confirm password</label>
            <input type="password" class="form-control" id="exampleInputConPassword4" placeholder="Confirm password" name="password_confirmation">
           
          </div>

          <div class="form-group">
            <label for="exampleSelectGender">Role</label>
            <select class="form-control" id="exampleSelectGender" name="role">
              @foreach($user as $userrole) 
              <option {{(old('role') == $userrole->role)?'selected':''}} value="{{$userrole->role}}">{{$userrole->role}}</option>
              @endforeach
            </select>
          </div>

          <div class="form-group">
            <label for="exampleInputfacebook">Facebook URL (optional)</label>
            <input type="text" class="form-control" id="exampleInputfacebook" placeholder="Facebook URL" name="facebook" value="{{old('facebook')}}">
            @if ($errors->has('facebook'))
                <span class="errors">{{ $errors->first('facebook') }}</span>
            @endif
          </div>

          <div class="form-group">
            <label for="exampleInputtwitter">Twitter URL (optional)</label>
            <input type="text" class="form-control" id="exampleInputtwitter" placeholder="Twitter URL" name="twitter" value="{{old('twitter')}}">
            @if ($errors->has('twitter'))
                <span class="errors">{{ $errors->first('twitter') }}</span>
            @endif
          </div>
         
          <div class="form-group">
            <label for="exampleInputgoogle">Google Plus URL (optional)</label>
            <input type="text" class="form-control" id="exampleInputgoogle" placeholder="Google Plus URL" name="google_plus" value="{{old('google_plus')}}">
            @if ($errors->has('google_plus'))
                <span class="errors">{{ $errors->first('google_plus') }}</span>
            @endif
          </div>

          <div class="form-group">
            <label for="exampleInputlinkedin">Linkedin URL (optional)</label>
            <input type="text" class="form-control" id="exampleInputlinkedin" placeholder="Linkedin URL" name="linkedin" value="{{old('linkedin')}}">
            @if ($errors->has('linkedin'))
                <span class="errors">{{ $errors->first('linkedin') }}</span>
            @endif
          </div>

          <div class="form-group">
            <label for="exampleTextarea1">Bio (optional)</label>
            <textarea  class="form-control" id="exampleTextarea1" rows="4" name="bio" placeholder="bio">{{(old('bio'))?old('bio'):''}}</textarea>
            @if ($errors->has('bio'))
            <span class="errors">{{ $errors->first('bio') }}</span>
        @endif
          </div>

          <div class="input-group col-xs-12">
            <label for="exampleSelectimage" >Image (optional)</label>
          <input type="file" name="image" class="file-upload-default" id="exampleSelectimage">
           @if ($errors->has('image'))
          <span class="errors">{{ $errors->first('image') }}</span>
      @endif
        </div>
         

          <button type="submit" class="btn btn-primary me-2 mt-4">Submit</button>
          <button type="reset" class="btn btn-dark mt-4">Cancel</button>
        </form>
      </div>
    </div>
  </div>

</div>

  @endsection
<!-- partial -->
</div>
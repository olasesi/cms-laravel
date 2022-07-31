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
        <form class="forms-sample" method="POST" action="/admin/add-user">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">FullName</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" name="name">
            @if ($errors->has('name'))
                <span class="text-danger">{{ $errors->first('name') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputUsername">Username</label>
            <input type="text" class="form-control" id="exampleInputUsername" placeholder="Username" name="username">
            @if ($errors->has('username'))
            <span class="text-danger">{{ $errors->first('username') }}</span>
        @endif
          </div>
            <div class="form-group">
            <label for="exampleInputEmail3">Email address</label>
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Email" name="email">
            @if ($errors->has('email'))
            <span class="text-danger">{{ $errors->first('email') }}</span>
        @endif
          </div>
            <div class="form-group">
            <label for="exampleInputPassword4">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword4" placeholder="Password" name="password">
            @if ($errors->has('password'))
            <span class="text-danger">{{ $errors->first('password') }}</span>
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
              
                
              <option>{{$userrole->role}}</option>
              @endforeach
            </select>
          </div>
         
          <button type="submit" class="btn btn-primary me-2">Submit</button>
          <button type="reset" class="btn btn-dark">Cancel</button>
        </form>
      </div>
    </div>
  </div>

</div>

  @endsection
<!-- partial -->
</div>
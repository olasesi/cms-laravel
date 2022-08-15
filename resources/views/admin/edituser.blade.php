@extends('admin.templates.master')
@section('content')

<div class="main-panel">
    <div class="row ">

        {{-- @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
            @php
                Session::forget('success');
            @endphp
        </div>
        @endif --}}

 <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit {{ucwords($user->name)}}</h4>
        <p class="card-description"> </p>
        <form class="forms-sample" method="POST" action="{{route('admin.update', ['id'=>$user->id])}}">
            @csrf
            @method('PATCH')
          <div class="form-group">
            <label for="exampleInputName1">FullName</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Name" value="{{old('name', $user->name)}}" name="name">
           
          </div>
          <div class="form-group">
            <label for="exampleInputUsername">Username</label>
            <input type="text" class="form-control" id="exampleInputUsername" value="{{old('username',$user->username)}}" placeholder="Username" name="username">
            
          </div>
            <div class="form-group">
            <label for="exampleInputEmail3">Email address</label>
            <input type="text" class="form-control" id="exampleInputEmail3" value="{{old('email',$user->email)}}" placeholder="Email" name="email">
           
          </div>
            <div class="form-group">
            <label for="exampleInputPassword4">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword4" value="" placeholder="Password" name="password">
           
          </div>

          <div class="form-group">
            <label for="exampleInputConPassword4">Confirm password</label>
            <input type="password" class="form-control" id="exampleInputConPassword4" value="" placeholder="Confirm password" name="password_confirmation">
           
          </div>
          {{-- <div class="form-group">
            <label for="exampleSelectGender">Role</label>
            <select class="form-control" id="exampleSelectGender" name="role">
              @foreach($users as $userrole) 
              
                
              <option>{{$userrole->role}}</option>
              @endforeach
            </select>
          </div> --}}
         
          <button type="submit" class="btn btn-primary me-2">Edit</button>
          <button type="reset" class="btn btn-dark">Cancel</button>
        </form>
      </div>
    </div>
  </div>

</div>

  @endsection
<!-- partial -->
</div>
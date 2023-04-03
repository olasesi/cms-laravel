@extends('admin.templates.masterlogin')
@section('title', 'Login')
@section('content')
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Login</h3>
                 @if(Session::has('failed'))
                <div class="errors mb-3">
                    {{ Session::get('failed') }}
                   @php
                        Session::forget('failed');
                    @endphp 
                </div>
                @endif 

                @if(Session::has('reset'))
                <div class="text-success mb-3">
                    {{ Session::get('reset') }}
                   @php
                        Session::forget('reset');
                    @endphp 
                </div>
                @endif 
              
               
                <form action="{{route('admin.savelogin')}}" method="POST">
                    @csrf
                  <div class="form-group">
                    {{-- @if($errors->any())
                      @error('errorMessage')
                      <div class="errors">{{$message}}</div>
                      @enderror
                    @endif --}}
                    <label>Email *</label>
                    <input type="text" class="form-control p_input @error('email') is-invalid @enderror" name="email" placeholder="Email" value=" {{ old('email') }}" required="required">
                    @error('email')
                    <div class="errors">{{ $message }}</div>
                @enderror
                    
                  </div>
                  <div class="form-group">
                    <label>Password *</label>
                    <input  type="password" class="form-control p_input @error('password') is-invalid @enderror" placeholder="Password" name="password" required="required">
                    @error('password')
                    <div class="errors">{{ $message }}</div>
                @enderror
                  </div>
                  <div class="form-group d-flex align-items-center justify-content-between">
                    <div class="form-check">
                      <label class="form-check-label">
                   <input type="checkbox" class="form-check-input" value="on" name="remember_token" {{ old('remember_token') == true ? 'checked' : '' }}> Remember me </label>
                    </div>
                    <a href="{{route('admin.forgetpassword')}}" class="forgot-pass">Forgot password?</a>
                  </div>
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Login</button>
                  </div>
                 
                </form>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        <!-- row ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
  @endsection
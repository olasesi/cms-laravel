@extends('admin.templates.masterlogin')
@section('title', 'Reset password')
@section('content')
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                @if(Session::has('error'))
                <div class="alert alert-danger text-center" role="alert">
                    {{ Session::get('error') }}
                    @php
                        Session::forget('error');
                    @endphp 
                </div>
                @endif 
                <h3 class="card-title text-left mb-3">Reset Password</h3>
              
              <form action="{{route('admin.saveresetpassword', ['token'=>$token])}}" method="POST">
                    @csrf

                    <div class="form-group">

                        <label>Email *</label>
                        <input type="text" class="form-control p_input @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required="required">
                        @error('email')
                        <div class="errors">{{ $message }}</div>
                    @enderror
                        
                      </div>

                  <div class="form-group">
                  

                    <label>Password *</label>
                    <input type="password" class="form-control p_input @error('password') is-invalid @enderror" name="password" placeholder="Password" >
                    @error('password')
                    <div class="errors">{{ $message }}</div>
                    @enderror

                </div>

                <div class="form-group">
                    <label>Confirm password *</label>
                    <input type="password" class="form-control p_input @error('password_confirmation') is-invalid @enderror" name="password_confirmation" placeholder="Confirm password" >
                    @error('password_confirmation')
                    <div class="errors">{{ $message }}</div>
                    @enderror
                   
                </div>
                
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Reset Password</button>
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
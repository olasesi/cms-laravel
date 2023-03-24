@extends('admin.templates.masterlogin')
@section('title', 'Forgot password')
@section('content')
    <div class="container-scroller">
      <div class="container-fluid page-body-wrapper full-page-wrapper">
        <div class="row w-100 m-0">
          <div class="content-wrapper full-page-wrapper d-flex align-items-center auth login-bg">
            <div class="card col-lg-4 mx-auto">
              <div class="card-body px-5 py-5">
                <h3 class="card-title text-left mb-3">Forget Password</h3>
              
              <form action="{{route('admin.saveforgetpassword')}}" method="POST">
                    @csrf
                  <div class="form-group">
                     @if($errors->any())
                    @error('errorMessage')
                    <div class="errors">{{$message}}</div>
                    @enderror
                    @endif 

                    <label>Email *</label>
                    <input type="text" class="form-control p_input @error('email') is-invalid @enderror" name="email" placeholder="Email" value={{ old('email') }} >
                    @error('email')
                    <div class="errors">{{ $message }}</div>
                @enderror
                    
                  </div>
                 
                 
                  <div class="text-center">
                    <button type="submit" class="btn btn-primary btn-block enter-btn">Submit</button>
                  </div>
                 
                  


                  <div class="form-group d-flex align-items-center justify-content-between">
                   
                    <a href="{{route('admin.index')}}" class="forgot-pass">Back to Login</a>
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
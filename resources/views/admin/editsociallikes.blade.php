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
        <h4 class="card-title">Edit social media likes code</h4>
       
        <form class="forms-sample" method="POST" action="{{route('admin.updatesociallikes')}}">
            @csrf
            @method('PATCH')
         
          <div class="form-group">
             
            <label for="examplefacebook"> Facebook</label>
           <textarea class="form-control" id="examplefacebook" rows="10" name="facebook" placeholder="Place Facebook like code here">{{old('facebook',$social_likes[0]->code)}}</textarea>
            @error('facebook')
            <div class="errors">{{ $message }}</div>
            @enderror
          </div>


          <div class="form-group">
           
            <label for="examplegoogle">Google plus</label>
            
            <textarea class="form-control" id="examplegoogle" rows="10" name="google" placeholder="Place google plus like code here">{{old('google',$social_likes[1]->code)}}</textarea>
            @error('google')
            <div class="errors">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
           
            <label for="exampletwitter">Twitter</label>
            <textarea class="form-control" id="exampletwitter" rows="10" name="twitter" placeholder="Place twitter like code here">{{old('twitter',$social_likes[2]->code)}}</textarea>
            @error('twitter')
            <div class="errors">{{ $message }}</div>
            @enderror
          </div>

          

          <div class="form-group">
           
            <label for="examplepinterest">Pinterest</label>
            
            <textarea class="form-control" id="examplepinterest" rows="10" name="pinterest" placeholder="Place pinterest like code here">{{old('pinterest',$social_likes[3]->code)}}</textarea>
            @error('pinterest')
            <div class="errors">{{ $message }}</div>
            @enderror
          </div>

          <div class="form-group">
           
            <label for="examplelinkedin">Linkedin</label>
            
            <textarea class="form-control" id="examplelinkedin" rows="10" name="linkedin" placeholder="Place linkedin like code here">{{old('linkedin',$social_likes[4]->code)}}</textarea>
            @error('linkedin')
            <div class="errors">{{ $message }}</div>
            @enderror

          </div>

          <div class="form-group">
           
            <label for="exampleyoutube">Youtube</label>
            
            <textarea class="form-control" id="exampleyoutube" rows="10" name="youtube" placeholder="Place youtube like code here">{{old('youtube',$social_likes[4]->code)}}</textarea>
            @error('youtube')
            <div class="errors">{{ $message }}</div>
            @enderror
          </div>

          
            
         
         
          <button type="submit" class="btn btn-primary me-2">Submit</button>
        
        </form>
      </div>
    </div>
  </div>

</div>

  @endsection
<!-- partial -->
</div>
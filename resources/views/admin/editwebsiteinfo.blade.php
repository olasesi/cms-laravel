@extends('admin.templates.master')
@section('content')

@php 
	use Carbon\Carbon;
@endphp

<div class="main-panel">
    <div class="row ">
    @if(Session::has('failed') || Session::has('success'))
        @if(Session::has('success'))
      <div class="alert alert-success">
          {{ Session::get('success') }}
         
      </div>
      
      @elseif(Session::has('failed'))
      <div class="alert alert-danger">
        {{ Session::get('failed') }}
        
    </div>
      @endif

      @php
      Session::forget(['failed', 'success']);
  @endphp
@endif
  
 <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Website Info</h4>
        <p class="card-description"> </p>
        <form class="forms-sample" method="POST" action="{{route('admin.updatewebsiteinfo')}}" enctype="multipart/form-data">
            @method('PATCH')
            @csrf

            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Website Logo (175px x 115px)</p>
                  
                    <div class="item">
                      <img src="{{asset('storage/'.$website_info[0]->logo_image_path)}}" alt="{{$website_info[0]->website_name}}">
                    </div>
                    
                  
                  <div class="d-flex py-4">
                    <div class="preview-list w-100">
                      <div class="preview-item p-0">
                        
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">{{$website_info[0]->logo_name}}
                            

                            </h6>
                            </div>
                            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                 
                </div>
              </div>
            </div>

          <div class="form-group">
            
           
            <label for="exampleInputName1">Website name</label>
            <input value="{{old('website_name', $website_info[0]->website_name)}}" type="text" class="form-control" id="exampleInputName1" name="website_name" placeholder="Website name">
            @error('website_name')
            <div class="errors">{{ $message }}</div>
            @enderror
          
          </div>
       
          <div class="input-group col-xs-12">
            <label for="exampleSelectimage" >Change logo</label>
          <input type="file" name="website_logo" class="file-upload-default" id="exampleSelectimage">
          @error('website_logo')
          <div class="errors">{{ $message }}</div>
          @enderror
        </div>

          <button type="submit" class="btn btn-primary me-2 mt-4">Update website info</button>
         
        </form>
      </div>
    </div>
  </div>

</div>

  @endsection
<!-- partial -->
</div>
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
        <h4 class="card-title">Edit ad banners</h4>
        <p class="card-description"> </p>
        <form class="forms-sample" method="POST" action="{{route('admin.updatead')}}" enctype="multipart/form-data">
            @method('PATCH')
            @csrf

            <div class="col-md-6 col-xl-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Banner 1 (970x90)</h4>
                  
                    <div class="item">
                      <img src="{{asset('storage/'.$ad_banner[0]->image_path)}}" alt="{{$ad_banner[0]->banner_name}}">
                    </div>
                    
                  
                  <div class="d-flex py-4">
                    <div class="preview-list w-100">
                      <div class="preview-item p-0">
                        
                        <div class="preview-item-content d-flex flex-grow">
                          <div class="flex-grow">
                            <div class="d-flex d-md-block d-xl-flex justify-content-between">
                              <h6 class="preview-subject">{{$ad_banner[0]->banner_name}}
                              <p class="text-muted text-small">
                               
                             {{
                             Carbon::now()->DiffInDays($ad_banner[0]->end_date)
                            
                              }}
                         
                         Days to end</p>

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
            
           
            <label for="exampleInputName1">Ad banner 1</label>
            <input value="{{old('banner_1_name', $ad_banner[0]->banner_name)}}" type="text" class="form-control" id="exampleInputName1" name="banner_1_name" placeholder="Banner 1">
            @error('banner_1_name')
            <div class="errors">{{ $message }}</div>
            @enderror
          
          </div>
          <div class="form-group">
           
            <label for="exampleInputName2">URL</label>
            <input value="{{old('banner_1_url', $ad_banner[0]->image_url)}}" type="text" class="form-control" id="exampleInputName2" placeholder="URL" name="banner_1_url">
            @error('banner_1_url')
            <div class="errors">{{ $message }}</div>
            @enderror
             </div>
         
          <div class="form-group">
            
            <label for="exampleInputName3">Start Date</label>
            <input value="{{old('end_1_date', $ad_banner[0]->end_date)}}" type="date" class="form-control" id="exampleInputName3" placeholder="End Date" name="end_1_date">
            @error('end_1_date')
            <div class="errors">{{ $message }}</div>
            @enderror
          </div>

          <div class="input-group col-xs-12">
            <label for="exampleSelectimage" >Change banner Image</label>
          <input type="file" name="image_1_banner" class="file-upload-default" id="exampleSelectimage">
          @error('image_1_banner')
          <div class="errors">{{ $message }}</div>
          @enderror
        </div>

          <button type="submit" class="btn btn-primary me-2">Change banner</button>
         
        </form>
      </div>
    </div>
  </div>

</div>

  @endsection
<!-- partial -->
</div>
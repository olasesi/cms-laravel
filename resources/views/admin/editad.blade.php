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
        <h4 class="card-title">Edit ad banner 1</h4>
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
           
            <label for="exampleInputUrl1">URL</label>
            <input value="{{old('banner_1_url', $ad_banner[0]->image_url)}}" type="text" class="form-control" id="exampleInputUrl1" placeholder="URL" name="banner_1_url">
            @error('banner_1_url')
            <div class="errors">{{ $message }}</div>
            @enderror
             
          </div>
         
          <div class="form-group">
            
            <label for="exampleInputDate1">Start Date</label>
            <input value="{{old('end_1_date', $ad_banner[0]->end_date)}}" type="date" class="form-control" id="exampleInputDate1" placeholder="End Date" name="end_1_date">
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



<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit ad banner 2</h4>
      <p class="card-description"> </p>
      <form class="forms-sample" method="POST" action="{{route('admin.updatead')}}" enctype="multipart/form-data">
          @method('PATCH')
          @csrf

          <div class="col-md-6 col-xl-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Banner 2 (255 x 353)</h4>
                
                  <div class="item">
                    <img src="{{asset('storage/'.$ad_banner[1]->image_path)}}" alt="{{$ad_banner[1]->banner_name}}">
                  </div>
                  
                
                <div class="d-flex py-4">
                  <div class="preview-list w-100">
                    <div class="preview-item p-0">
                      
                      <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                            <h6 class="preview-subject">{{$ad_banner[1]->banner_name}}
                            <p class="text-muted text-small">
                             
                           {{
                           Carbon::now()->DiffInDays($ad_banner[1]->end_date)
                          
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
          
         
          <label for="exampleInputName2">Ad banner 2</label>
          <input value="{{old('banner_2_name', $ad_banner[1]->banner_name)}}" type="text" class="form-control" id="exampleInputName2" name="banner_2_name" placeholder="Banner 2">
          @error('banner_2_name')
          <div class="errors">{{ $message }}</div>
          @enderror
        
        </div>

        <div class="form-group">
         
          <label for="exampleInputUrl2">URL</label>
          <input value="{{old('banner_2_url', $ad_banner[1]->image_url)}}" type="text" class="form-control" id="exampleInputUrl2" placeholder="URL" name="banner_2_url">
          @error('banner_2_url')
          <div class="errors">{{ $message }}</div>
          @enderror
           
        </div>
       
        <div class="form-group">
          
          <label for="exampleInputDate2">Start Date</label>
          <input value="{{old('end_2_date', $ad_banner[1]->end_date)}}" type="date" class="form-control" id="exampleInputDate2" placeholder="End Date" name="end_2_date">
          @error('end_2_date')
          <div class="errors">{{ $message }}</div>
          @enderror
        
        </div>

        <div class="input-group col-xs-12">
          <label for="exampleSelectimage2" >Change banner Image</label>
          <input type="file" name="image_2_banner" class="file-upload-default" id="exampleSelectimage2">
        
          @error('image_2_banner')
            <div class="errors">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary me-2">Change banner</button>
       
      </form>
    </div>
  </div>
</div>


<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit ad banner 3</h4>
      <p class="card-description"> </p>
      <form class="forms-sample" method="POST" action="{{route('admin.updatead')}}" enctype="multipart/form-data">
          @method('PATCH')
          @csrf

          <div class="col-md-6 col-xl-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Banner 3 (970x120)</h4>
                
                  <div class="item">
                    <img src="{{asset('storage/'.$ad_banner[2]->image_path)}}" alt="{{$ad_banner[2]->banner_name}}">
                  </div>
                  
                
                <div class="d-flex py-4">
                  <div class="preview-list w-100">
                    <div class="preview-item p-0">
                      
                      <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                            <h6 class="preview-subject">{{$ad_banner[2]->banner_name}}
                            <p class="text-muted text-small">
                             
                           {{
                           Carbon::now()->DiffInDays($ad_banner[2]->end_date)
                          
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
          
         
          <label for="exampleInputName3">Ad banner 3</label>
          <input value="{{old('banner_3_name', $ad_banner[2]->banner_name)}}" type="text" class="form-control" id="exampleInputName3" name="banner_3_name" placeholder="Banner 3">
          @error('banner_3_name')
          <div class="errors">{{ $message }}</div>
          @enderror
        
        </div>

        <div class="form-group">
         
          <label for="exampleInputUrl3">URL</label>
          <input value="{{old('banner_3_url', $ad_banner[2]->image_url)}}" type="text" class="form-control" id="exampleInputUrl3" placeholder="URL" name="banner_3_url">
          @error('banner_3_url')
          <div class="errors">{{ $message }}</div>
          @enderror
           
        </div>
       
        <div class="form-group">
          
          <label for="exampleInputDate3">Start Date</label>
          <input value="{{old('end_3_date', $ad_banner[2]->end_date)}}" type="date" class="form-control" id="exampleInputDate3" placeholder="End Date" name="end_3_date">
          @error('end_3_date')
          <div class="errors">{{ $message }}</div>
          @enderror
        
        </div>

        <div class="input-group col-xs-12">
          <label for="exampleSelectimage" >Change banner Image</label>
          <input type="file" name="image_3_banner" class="file-upload-default" id="exampleSelectimage">
        
          @error('image_3_banner')
            <div class="errors">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary me-2">Change banner</button>
       
      </form>
    </div>
  </div>
</div>


<div class="col-12 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Edit ad banner 4</h4>
      <p class="card-description"> </p>
      <form class="forms-sample" method="POST" action="{{route('admin.updatead')}}" enctype="multipart/form-data">
          @method('PATCH')
          @csrf

          <div class="col-md-6 col-xl-4 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Banner 4 (255x280)</h4>
                
                  <div class="item">
                    <img src="{{asset('storage/'.$ad_banner[3]->image_path)}}" alt="{{$ad_banner[3]->banner_name}}">
                  </div>
                  
                
                <div class="d-flex py-4">
                  <div class="preview-list w-100">
                    <div class="preview-item p-0">
                      
                      <div class="preview-item-content d-flex flex-grow">
                        <div class="flex-grow">
                          <div class="d-flex d-md-block d-xl-flex justify-content-between">
                            <h6 class="preview-subject">{{$ad_banner[3]->banner_name}}
                            <p class="text-muted text-small">
                             
                           {{
                           Carbon::now()->DiffInDays($ad_banner[3]->end_date)
                          
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
          
         
          <label for="exampleInputName4">Ad banner 4</label>
          <input value="{{old('banner_4_name', $ad_banner[3]->banner_name)}}" type="text" class="form-control" id="exampleInputName4" name="banner_4_name" placeholder="Banner 4">
          @error('banner_4_name')
          <div class="errors">{{ $message }}</div>
          @enderror
        
        </div>

        <div class="form-group">
         
          <label for="exampleInputUrl4">URL</label>
          <input value="{{old('banner_4_url', $ad_banner[3]->image_url)}}" type="text" class="form-control" id="exampleInputUrl4" placeholder="URL" name="banner_4_url">
          @error('banner_4_url')
          <div class="errors">{{ $message }}</div>
          @enderror
           
        </div>
       
        <div class="form-group">
          
          <label for="exampleInputDate4">Start Date</label>
          <input value="{{old('end_4_date', $ad_banner[3]->end_date)}}" type="date" class="form-control" id="exampleInputDate4" placeholder="End Date" name="end_4_date">
          @error('end_4_date')
          <div class="errors">{{ $message }}</div>
          @enderror
        
        </div>

        <div class="input-group col-xs-12">
          <label for="exampleSelectimage" >Change banner Image</label>
          <input type="file" name="image_4_banner" class="file-upload-default" id="exampleSelectimage">
        
          @error('image_4_banner')
            <div class="errors">{{ $message }}</div>
          @enderror
        </div>

        <button type="submit" class="btn btn-primary me-2">Change banner</button>
       
      </form>
    </div>
  </div>
</div>

  @endsection
<!-- partial -->
</div>
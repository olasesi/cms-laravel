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
        <h4 class="card-title">Edit OpenWeather settings</h4>
       
        <form class="forms-sample" method="POST" action="{{route('admin.updateapi')}}">
            @csrf
            @method('PATCH')
         
          <div class="form-group">
            <label for="exampleInputtopbar1"> API key</label>
            <input type="text" class="form-control  mb-3" id="exampleInputtopbar1" value="{{old('url1', isset($social_media_link[0]->url)?$social_media_link[0]->url:'')}}" placeholder="URL Link" name="url1">
 
            <label for="exampleInputtopbar2">Latitude</label>
            <input type="text" class="form-control  mb-3" id="exampleInputtopbar2" value="{{old('url2', isset($social_media_link[1]->url)?$social_media_link[1]->url:'')}}" placeholder="URL Link" name="url2">
 
            <label for="exampleInputtopbar3">Longitude</label>
            <input type="text" class="form-control  mb-3" id="exampleInputtopbar3" value="{{old('url3', isset($social_media_link[2]->url)?$social_media_link[2]->url:'')}}" placeholder="URL Link" name="url3">
 
            <label for="exampleInputtopbar4">Language (optional)</label>
            
            <input type="text" class="form-control  mb-3" id="exampleInputtopbar4" value="{{old('url4', isset($social_media_link[3]->url)?$social_media_link[3]->url:'')}}" placeholder="URL Link" name="url4">
 
          
          </div>
            
          <button type="submit" class="btn btn-primary me-2">Update API</button>
        
        </form>
      </div>
    </div>
  </div>

</div>

  @endsection
<!-- partial -->
</div>
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
        <h4 class="card-title">Edit social media links</h4>
       
        <form class="forms-sample" method="POST" action="{{route('admin.updatesocialmedia')}}">
            @csrf
            @method('PATCH')
         
          <div class="form-group">
              @error('facebook')
            <div class="errors">{{ $message }}</div>
            @enderror
            <label for="exampleInputtopbar1"> Facebook</label>
            <input type="text" class="form-control  mb-3" id="exampleInputtopbar1" value="{{old('facebook', isset($social_media_link[0]->url)?$social_media_link[0]->url:'')}}" placeholder="URL Link" name="facebook">
            
          </div>

          <div class="form-group">
            @error('twitter')
            <div class="errors">{{ $message }}</div>
            @enderror
            <label for="exampleInputtopbar2">Twitter</label>
            <input type="text" class="form-control  mb-3" id="exampleInputtopbar2" value="{{old('twitter', isset($social_media_link[1]->url)?$social_media_link[1]->url:'')}}" placeholder="URL Link" name="twitter">
          </div>

          <div class="form-group">
            @error('googleplus')
            <div class="errors">{{ $message }}</div>
            @enderror
            <label for="exampleInputtopbar3">Google plus</label>
            
            <input type="text" class="form-control  mb-3" id="exampleInputtopbar3" value="{{old('googleplus', isset($social_media_link[2]->url)?$social_media_link[2]->url:'')}}" placeholder="URL Link" name="googleplus">
          </div>

          <div class="form-group">
            @error('instagram')
            <div class="errors">{{ $message }}</div>
            @enderror
            <label for="exampleInputtopbar4">Instagram</label>
            
            <input type="text" class="form-control  mb-3" id="exampleInputtopbar4" value="{{old('instagram', isset($social_media_link[3]->url)?$social_media_link[3]->url:'')}}" placeholder="URL Link" name="instagram">
          </div>

          <div class="form-group">
            @error('youtube')
            <div class="errors">{{ $message }}</div>
            @enderror
            <label for="exampleInputtopbar5">Youtube</label>
            
            <input type="text" class="form-control  mb-3" id="exampleInputtopbar5" value="{{old('youtube', isset($social_media_link[4]->url)?$social_media_link[4]->url:'')}}" placeholder="URL Link" name="youtube">
          </div>

          <div class="form-group">
            @error('linkedin')
            <div class="errors">{{ $message }}</div>
            @enderror
            <label for="exampleInputtopbar6">Linkedin</label>
            
            <input type="text" class="form-control  mb-3" id="exampleInputtopbar6" value="{{old('linkedin', isset($social_media_link[5]->url)?$social_media_link[5]->url:'')}}" placeholder="URL Link" name="linkedin">
 

          </div>
            
         

          
          {{-- <div class="form-group">
            <label for="exampleSelectGender">Role</label>
            <select class="form-control" id="exampleSelectGender" name="role">
              @foreach($users as $userrole) 
              
                
              <option>{{$userrole->role}}</option>
              @endforeach
            </select>
          </div> --}}
         
          <button type="submit" class="btn btn-primary me-2">Submit</button>
        
        </form>
      </div>
    </div>
  </div>

</div>

  @endsection
<!-- partial -->
</div>
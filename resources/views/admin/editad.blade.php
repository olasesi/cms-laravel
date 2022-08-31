@extends('admin.templates.master')
@section('content')

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
        <form class="forms-sample" method="POST" action="{{route('admin.updatead')}}">
            @method('PATCH')
            @csrf
          <div class="form-group">
            @error('ad_name')
            <div class="errors">{{ $message }}</div>
            @enderror
            <label for="exampleInputName1">Ad banner 1</label>
            
            <input type="text" class="form-control" id="exampleInputName1" name="Banner 1" placeholder="Banner 1">
          
          </div>
          <div class="form-group">
            <label for="exampleInputName2">Url</label>
            <input value="" type="text" class="form-control" id="exampleInputName2" placeholder="URL" name="url">
            {{-- @if ($errors->has('title'))
                <span class="errors">{{ $errors->first('title') }}</span>
            @endif --}}
          </div>
         
          <div class="form-group">
            <label for="exampleInputName3">Start Date</label>
            <input value="" type="date" class="form-control" id="exampleInputName3" placeholder="Date" name="begin_date">
            {{-- @if ($errors->has('title'))
                <span class="errors">{{ $errors->first('title') }}</span>
            @endif --}}
          </div>

          <div class="input-group col-xs-12">
            <label for="exampleSelectimage" >Change banner Image</label>
          <input type="file" name="image" class="file-upload-default" id="exampleSelectimage">
           {{-- @if ($errors->has('image'))
          <span class="errors">{{ $errors->first('image') }}</span>
      @endif --}}
        </div>

          <button type="submit" class="btn btn-primary me-2">Update ad</button>
         
        </form>
      </div>
    </div>
  </div>

</div>

  @endsection
<!-- partial -->
</div>
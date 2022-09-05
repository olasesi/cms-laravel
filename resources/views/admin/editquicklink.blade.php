@extends('admin.templates.master')
@section('content')

<div class="main-panel">
    <div class="row ">
    @if(Session::has('success'))
       
      <div class="alert alert-success">
          {{ Session::get('success') }}
         
      </div>
      

      @php
      Session::forget(['success']);
  @endphp
@endif
  
 <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit Footer Quicklinks</h4>
        <p class="card-description"> </p>
        <form class="forms-sample" method="POST" action="{{route('admin.updatequicklink')}}">
            @method('PATCH')
            @csrf
          <div class="form-group">
           
            <label for="exampleInputName1">Link 1 title /Link 1 URL </label>
            <input value="{{old('link_1_title', $quick_link[0]->link_title)}}" type="text" class="form-control " id="exampleInputName1" placeholder="Link 1 title" name="link_1_title">
            @error('link_1_title')
            <div class="errors">{{ $message }}</div>
            @enderror
           
        
           
           
            <input value="{{old('link_1_url', $quick_link[0]->url)}}" type="text" class="form-control mt-2" id="exampleInputRank" placeholder="Link URL 1" name="link_1_url">
            @error('link_1_url')
            <div class="errors">{{ $message }}</div>
        @enderror
           
          </div>

          <div class="form-group">
           
            <label for="exampleInputName2">Link 2 title /Link 2 URL </label>
            <input value="{{old('link_2_title', $quick_link[1]->link_title)}}" type="text" class="form-control" id="exampleInputName2" placeholder="Link 2 title" name="link_2_title">
            @error('link_2_title')
            <div class="errors">{{ $message }}</div>
            @enderror
           
          
           
           
            <input value="{{old('link_1_url', $quick_link[1]->url)}}" type="text" class="form-control mt-2" id="exampleInputRank2" placeholder="Link URL 2" name="link_2_url">
            @error('link_2_url')
            <div class="errors">{{ $message }}</div>
        @enderror
           
          </div>

          <div class="form-group">
           
            <label for="exampleInputName3">Link 3 title /Link 3 URL</label>
            <input value="{{old('link_3_title', $quick_link[2]->link_title)}}" type="text" class="form-control" id="exampleInputName3" placeholder="Link 3 title" name="link_3_title">
            @error('link_3_title')
            <div class="errors">{{ $message }}</div>
            @enderror
           
        
           
            
            <input value="{{old('link_3_url', $quick_link[2]->url)}}" type="text" class="form-control mt-2" id="exampleInputRank3" placeholder="Link URL 3" name="link_3_url">
            @error('link_3_url')
            <div class="errors">{{ $message }}</div>
        @enderror
           
          </div>

          <div class="form-group">
           
            <label for="exampleInputName4">Link 4 title /Link 4 URL</label>
            <input value="{{old('link_4_title', $quick_link[3]->link_title)}}" type="text" class="form-control" id="exampleInputName4" placeholder="Link 4 title" name="link_4_title">
            @error('link_4_title')
            <div class="errors">{{ $message }}</div>
            @enderror
           
         
           
            <input value="{{old('link_4_url', $quick_link[3]->url)}}" type="text" class="form-control mt-2" id="exampleInputRank4" placeholder="Link URL 4" name="link_4_url">
            @error('link_4_url')
            <div class="errors">{{ $message }}</div>
        @enderror
           
          </div>

          <div class="form-group">
           
            <label for="exampleInputName5">Link 5 title/Link 5 URL</label>
            <input value="{{old('link_5_title', $quick_link[4]->link_title)}}" type="text" class="form-control" id="exampleInputName5" placeholder="Link 5 title" name="link_5_title">
            @error('link_5_title')
            <div class="errors">{{ $message }}</div>
            @enderror
           
          
           
           
            <input value="{{old('link_5_url', $quick_link[4]->url)}}" type="text" class="form-control mt-2" id="exampleInputRank5" placeholder="Link URL 5" name="link_5_url">
            @error('link_5_url')
            <div class="errors">{{ $message }}</div>
        @enderror
           
          </div>

          <div class="form-group">
           
            <label for="exampleInputName6">Link 6 title /Link 6 URL</label>
            <input value="{{old('link_6_title', $quick_link[5]->link_title)}}" type="text" class="form-control" id="exampleInputName6" placeholder="Link 6 title" name="link_6_title">
            @error('link_6_title')
            <div class="errors">{{ $message }}</div>
            @enderror
           
          
            
            <input value="{{old('link_6_url', $quick_link[5]->url)}}" type="text" class="form-control mt-2" id="exampleInputRank6" placeholder="Link URL 6" name="link_6_url">
            @error('link_6_url')
            <div class="errors">{{ $message }}</div>
        @enderror
           
          </div>
         
          <button type="submit" class="btn btn-primary me-2">Update quicklink</button>
         
        </form>
      </div>
    </div>
  </div>

</div>

  @endsection
<!-- partial -->
</div>
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
        <h4 class="card-title">Topbar menu</h4>
        <p class="card-description"> </p>
        <form class="forms-sample" method="POST" action="{{route('admin.updatetopbar')}}">
            @csrf
            @method('PATCH')
         
          <div class="form-group">
            <label for="exampleInputtopbar1">Topbar link 1</label>
            <input type="text" class="form-control mb-2" id="exampleInputtopbar1" value="{{old('title1', isset($top_bar_links[0]->title)?$top_bar_links[0]->title:'')}}" placeholder="Title" name="title1">
            <input type="text" class="form-control  mb-5" id="exampleInputtopbar1" value="{{old('url1', isset($top_bar_links[0]->link)?$top_bar_links[0]->link:'')}}" placeholder="URL Link" name="url1">
 
            <label for="exampleInputtopbar2">Topbar link 2</label>
            <input type="text" class="form-control mb-2" id="exampleInputtopbar2" value="{{old('title2', isset($top_bar_links[1]->title)?$top_bar_links[1]->title:'')}}" placeholder="Title" name="title2">
            <input type="text" class="form-control  mb-5" id="exampleInputtopbar2" value="{{old('url2', isset($top_bar_links[1]->link)?$top_bar_links[1]->link:'')}}" placeholder="URL Link" name="url2">
 
            <label for="exampleInputtopbar3">Topbar link 3</label>
            <input type="text" class="form-control mb-2" id="exampleInputtopbar3" value="{{old('title3', isset($top_bar_links[2]->title)?$top_bar_links[2]->title:'')}}" placeholder="Title" name="title3">
            <input type="text" class="form-control  mb-5" id="exampleInputtopbar3" value="{{old('url3', isset($top_bar_links[2]->link)?$top_bar_links[2]->link:'')}}" placeholder="URL Link" name="url3">
 
            <label for="exampleInputtopbar4">Topbar link 4</label>
            <input type="text" class="form-control mb-2" id="exampleInputtopbar4" value="{{old('title4', isset($top_bar_links[3]->title)?$top_bar_links[3]->title:'')}}" placeholder="Title" name="title4">
            <input type="text" class="form-control  mb-5" id="exampleInputtopbar4" value="{{old('url4', isset($top_bar_links[3]->link)?$top_bar_links[3]->link:'')}}" placeholder="URL Link" name="url4">
 

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
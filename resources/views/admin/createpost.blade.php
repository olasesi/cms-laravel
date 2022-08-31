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



        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Create post</h4>
              <p class="card-description">  </p>
              <form class="forms-sample" method="POST" action="{{route('admin.savepost')}}" enctype="multipart/form-data">
                @csrf

                <div class="form-group">
                  <label for="exampleInputName1">Post title</label>
                  <input value="{{old('title')}}" type="text" class="form-control" id="exampleInputName1" placeholder="Post title" name="title">
                  @if ($errors->has('title'))
                      <span class="errors">{{ $errors->first('title') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleExcerpt">Excerpt/breaking news (optional)</label>
                  <textarea value="" class="form-control" id="exampleExcerpt" rows="4" name="excerpt" placeholder="Excerpt">{{(old('excerpt'))?old('excerpt'):''}}</textarea>
                  @if ($errors->has('excerpt'))
                  <span class="errors">{{ $errors->first('excerpt') }}</span>
              @endif
                </div>
                <div class="form-group">
                  <label for="exampleTextarea1">Body</label>
                  <textarea  class="form-control" id="exampleTextarea1" rows="4" name="body" placeholder="body">{{(old('body'))?old('body'):''}}</textarea>
                  @if ($errors->has('body'))
                  <span class="errors">{{ $errors->first('body') }}</span>
              @endif
                </div>
                <div class="form-group">
                  <label for="exampleSelectGender">Category</label>
                  <select class="form-control" id="exampleSelectGender" name="category">
                    @foreach($category as $single_category) 
                    
                      
                    <option {{(old('category') == $single_category->category)?'selected':''}} value="{{$single_category->id}}">{{$single_category->category}}</option>
                    @endforeach
                  </select>
                  
                </div>
                <div class="form-group">
                  <label for="exampleSelectpublish">Publish</label>
                  <select class="form-control" id="exampleSelectpublish" name="publish_time">
                     <option value="">Published</option>
                    <option value="">Pending preview</option>
                    <option value="">Draft</option>
                  </select>
                  
                 
                </div>

                  <div class="input-group col-xs-12">
                    <label for="exampleSelectimage" >Featured Image</label>
                  <input type="file" name="image" class="file-upload-default" id="exampleSelectimage">
                   @if ($errors->has('image'))
                  <span class="errors">{{ $errors->first('image') }}</span>
              @endif
                </div>

                <button type="submit" class="btn btn-secondary me-2  mt-4" name="draft">Save as draft</button>
          <button type="submit" class="btn btn-primary me-2  mt-4" name="save">Update</button>
          
              
            </div>
          </div>
        </div>


        <div class="col-md-6 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Additional options</h4>
              <p class="card-description">  </p>
              
                <div class="form-group row">
                  <label for="exampleSelectDiscussion">Discussion</label>
                  <select class="form-control" id="exampleSelectDiscussion" name="discussion">
                  
                    <option>Allow comment</option>
                    <option>No commenting allowed</option>
                  </select>
                </div>
                <div class="form-group row">
                  <label for="exampleSelectvisibilty">Visibilty</label>
                  <select class="form-control" id="exampleSelectvisibilty" name="visibility">
                  
                    <option selected>Public</option>
                    <option>Private</option>
                    <option>Password Protected</option>
                  </select>
                </div>
                <div class="form-group row">
                  <label for="exampleInputorder">Order</label>
                  <input value="{{old('order')}}" type="number" min="0" class="form-control" id="exampleInputorder" name="order">
                 
                </div>
                
                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('recent') == true ? 'checked' : '' }} name="recent" type="checkbox" class="form-check-input" > Recent </label>
                        
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('breaking_news') == true ? 'checked' : '' }} name="breaking_news" type="checkbox" class="form-check-input"> Breaking News </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('most_popular') == true ? 'checked' : '' }} name="most_popular" type="checkbox" class="form-check-input"> Most Popular </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('favourite') == true ? 'checked' : '' }} name="favourite" type="checkbox" class="form-check-input" > Most Favourite </label>
                    </div>
                  </div>
                </div>

<div class="col-md-6">
                  <div class="form-group">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('hot_topics') == true ? 'checked' : '' }} name="hot_topics" type="checkbox" class="form-check-input"> Hot Topics</label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('watch_now') == true ? 'checked' : '' }} name="watch_now" type="checkbox" class="form-check-input" > Watch Now </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('trending') == true ? 'checked' : '' }} name="trending" type="checkbox" class="form-check-input"> Trending </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('more_news') == true ? 'checked' : '' }} name="more_news" type="checkbox" class="form-check-input" > More News </label>
                    </div>
                   
                  </div>
                </div>

              </div>




                
                <div class="input-group col-xs-12 mb-3">
                  <label for="exampleSelectvideo" >Video</label>
                  <input type="file" name="video" class="file-upload-default" id="exampleSelectvideo">                  <span class="input-group-append">
                    @if ($errors->has('video'))
                <span class="errors">{{ $errors->first('video') }}</span>
            @endif
                </div>
               
              
               
               
              </form>
            </div>
          </div>
        </div>





</div>

  @endsection
<!-- partial -->
</div>
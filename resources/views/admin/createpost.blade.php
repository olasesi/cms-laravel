@extends('admin.templates.master')
@section('content')
    <div class="main-panel">
        <div class="row ">

            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif

            

            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create post</h4>
                        <p class="card-description"> </p>


                      
                      <form class="forms-sample" method="POST" action="{{route('admin.savepost')}}" enctype="multipart/form-data">
                            @csrf

                <div class="form-group">
                  <label for="exampleInputName1">Post title *</label>
             
                  <input value="{{old('title')}}" type="text" class="form-control" id="exampleInputName1" placeholder="Post title" name="title" required="required"> 
                  

                  @if ($errors->has('title'))
                      <span class="errors">{{ $errors->first('title') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleExcerpt">Summary/Breaking news (optional)</label>
                  <input value="{{(old('excerpt'))}}" type="text" class="form-control" id="exampleExcerpt" name="excerpt" placeholder="Summary">
                  @if ($errors->has('excerpt'))
                  <span class="errors">{{ $errors->first('excerpt') }}</span>
                @endif
                </div>
             
                <div class="form-group">
                  <label for="exampleSelectGender">Category</label>
                  <select class="form-control" id="exampleSelectGender" name="category">
                    @foreach ($category as $single_category) 
                    <option {{(old('category') == $single_category->id)?'selected':''}} value="{{$single_category->id}}">{{$single_category->category}}</option>
                    @endforeach
                  </select>
                  
                </div>

                <div class="form-group">
                  <label for="exampleTextarea1">Body</label>
                <textarea name="body" id="editor" class="editor">{{(old('body'))?old('body'):''}}</textarea>
                </div>
               

               

               
                <div class="form-group">
                  <label for="exampleSelectpublish">Publish</label>
                  <select class="form-control" id="exampleSelectpublish" name="publish_time">
                     <option value="Published" {{(old('publish_time') == 'Published')?'selected':''}}>Publish</option>
                    <option value="Pending preview" {{(old('publish_time') == 'Pending preview')?'selected':''}}>Pending preview</option>
                    <option value="Draft" {{(old('publish_time') == 'Draft')?'selected':''}}>Draft</option>
                  </select>
                  
                 
                </div>

                <div class="form-group">
                  <label for="exampleSelectimage" >Featured Image</label>
                </div>
                  <div class="input-group col-xs-12">
                    
                    <div id="showimageoverview"></div>

                  
                   @if ($errors->has('image'))
                  <span class="errors">{{ $errors->first('image') }}</span>
                   @endif
                </div>
              
               
                <button type="submit" class="btn btn-primary me-2  mt-4">Create post</button>
     
            </div>
          </div>
        </div>


        <div class="col-md-4 grid-margin stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Additional options</h4>
              <p class="card-description">  </p>
              
                <div class="form-group row">
                  <label for="exampleSelectDiscussion">Discussion</label>
                  <select class="form-control" id="exampleSelectDiscussion" name="discussion">
                  
                    <option {{(old('discussion') == 'Allow comment')?'selected':''}}>Allow comment</option>
                    <option {{(old('discussion') == 'No commenting allowed')?'selected':''}}>No commenting allowed</option>
                  </select>
                </div>
                <div class="form-group row">
                  <label for="exampleSelectvisibilty">Visibilty</label>
                  <select class="form-control" id="exampleSelectvisibilty" name="visibility">
                  
                    <option {{(old('visibility') == 'Public')?'selected':''}}>Public</option>
                    <option {{(old('visibility') == 'Private')?'selected':''}}>Private</option>
                    <option {{(old('visibility') == 'Password protected')?'selected':''}}>Password protected</option>
                  </select>
                </div>
                <div class="form-group row">
                  <label for="exampleInputorder">Order</label>
                  <input value="{{old('order')}}" type="number" min="0" class="form-control" id="exampleInputorder" name="order">
                  @if ($errors->has('order'))
                  <span class="errors">{{ $errors->first('order') }}</span>
              @endif
                </div>

                <div class="form-group">
                  <label for="exampleInputvideopath">Youtube video link</label>
                  <input value="{{old('video_path')}}" type="text" class="form-control" id="exampleInputvideopath" placeholder="e.g http://xyz.com" name="video_path">
                  @if ($errors->has('video_path'))
                      <span class="errors">{{ $errors->first('video_path') }}</span>
                  @endif
                </div>

                <div class="form-group">
                  <label for="exampleInputvideoid">Youtube video ID</label>
                  <input value="{{old('video_placeholder')}}" type="text" class="form-control" id="exampleInputvideoid" placeholder="Youtube video ID" name="video_placeholder">
                  @if ($errors->has('video_placeholder'))
                      <span class="errors">{{ $errors->first('video_placeholder') }}</span>
                  @endif
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



                <script>
                  ClassicEditor
                      .create( document.querySelector( '#editor' ) )
                      .catch( error => {
                          console.error( error );
                      } );
              </script>
              </form>
                    </div>
                </div>
            </div>





        </div>
      
  
    @endsection
    <!-- partial -->
  </div>
@extends('admin.templates.master')
@section('content')

    <div class="main-panel">
        <div class="row ">

            @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show pl-3" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif


            <div class="col-md-8 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Edit post</h4>
                        <p class="card-description"> </p>

                      <form class="forms-sample" method="POST" action="{{--route('admin.updatepost')--}}" enctype="multipart/form-data">
                            @csrf
                            @method('PATCH')
                <div class="form-group">
                  <label for="exampleInputName1">Post title *</label>
             
                  <input value="{{old('title', $editone->title)}}" type="text" class="form-control" id="exampleInputName1" placeholder="Post title" name="title" required="required"> 
                  

                  @if ($errors->has('title'))
                      <span class="errors">{{ $errors->first('title') }}</span>
                  @endif
                </div>
                <div class="form-group">
                  <label for="exampleExcerpt">Summary/Breaking news</label>
                  <input value="{{old('excerpt', $editone->excerpt)}}" type="text" class="form-control" id="exampleExcerpt" name="excerpt" placeholder="Summary">
                  @if ($errors->has('excerpt'))
                  <span class="errors">{{ $errors->first('excerpt') }}</span>
                @endif
                </div>
             
                <div class="form-group">
                  <label for="exampleSelectGender">Category</label>
                  
                  <select class="form-control" id="exampleSelectGender" name="category">
                  @foreach($fetchsection as $category)
                  
                  <option value="{{ $category->id }}" {{ (old('category', $category->id) == $editone->section_id)?'selected':'' }}>{{$category->category}}</option>
                  @endforeach
                  </select>

                       
                </div>

                <div class="form-group">
                  <label for="exampleTextarea1">Body</label>
                <textarea row="1000" name="body" id="editor" class="editor">{{ old('body', $editone->body) }}</textarea>
                </div>
               
                <div class="form-group">
                  <label for="exampledate1">Publish Date</label>
                  <input value="{{(old('publish_time', $editone->publish_time))}}" type="datetime-local" class="form-control" id="exampledate1" placeholder="Publish date" name="publish_time">   
                </div>
               
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('pending_preview', $editone->pending_preview) == true ? 'checked' : '' }} name="pending_preview" type="checkbox" class="form-check-input"> Pending preview</label>
                    </div>
                   </div>
                </div>

                <div class="form-group">
                  <label for="exampleSelectimage" >Featured Image</label>
                </div>
                  <div class="input-group col-xs-12">
                    @if( $editone->image !='default.jpg')
                    <img src="{{asset('storage/'.$editone->image_path)}}" style="height:100px; margin-top:10px"/>
                    @endif
                    
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
  
             
              <div class="form-group">
                <label for="exampletag">Post tags</label>
              <input type="text" name='tags' class="form-control" value="{{old('tags', $editone->tags)}}" placeholder="Tags"  id="exampletag">
              </div>

                 <div class="form-group row">
                  <label for="exampleSelectDiscussion">Discussion</label>
                  <select class="form-control" id="exampleSelectDiscussion" name="discussion">
                  
                    <option {{(old('discussion', $editone->discussion) == 'Allow comment')?'selected':''}}>Allow comment</option>
                    <option {{(old('discussion', $editone->discussion) == 'No commenting allowed')?'selected':''}}>No commenting allowed</option>
                  </select>
                </div>
                <div class="form-group row">
                  <label for="exampleSelectvisibilty">Visibilty</label>
                  <select class="form-control" id="exampleSelectvisibilty" name="visibility">
                  
                    <option {{(old('visibility', $editone->visibility) == 'Public')?'selected':''}}>Public</option>
                    <option {{(old('visibility', $editone->visibility) == 'Private')?'selected':''}}>Private</option>
                    <option {{(old('visibility', $editone->visibility) == 'Password protected')?'selected':''}}>Password protected</option>
                  </select>
                </div>
                <div class="form-group row">
                  <label for="exampleInputorder">Order</label>
                  <input value="{{old('order', $editone->order)}}" type="number" min="0" class="form-control" id="exampleInputorder" name="order">
                  @if ($errors->has('order'))
                  <span class="errors">{{ $errors->first('order') }}</span>
              @endif
                </div>

               <div class="form-group">
                  <label for="exampleInputvideopath">Youtube video link</label>
                  <input value="{{old('video_path', $editone->video_path)}}" type="text" class="form-control" id="exampleInputvideopath" placeholder="e.g http://xyz.com" name="video_path">
                  @if ($errors->has('video_path'))
                      <span class="errors">{{ $errors->first('video_path') }}</span>
                  @endif
                </div>
                
                <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('recent', $editone->recent) == 'on' ? 'checked' : '' }} name="recent" type="checkbox" class="form-check-input" > Recent </label>
                        
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('breaking_news', $editone->breaking_news) == 'on' ? 'checked' : '' }} name="breaking_news" type="checkbox" class="form-check-input"> Breaking News </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('most_popular', $editone->most_popular) == 'on' ? 'checked' : '' }} name="most_popular" type="checkbox" class="form-check-input"> Most Popular </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('favourite', $editone->favourite) == 'on' ? 'checked' : '' }} name="favourite" type="checkbox" class="form-check-input" > Most Favourite </label>
                    </div>
                  </div>
                </div>

                <div class="col-md-6">
                  <div class="form-group">
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('hot_topics', $editone->hot_topics) == 'on' ? 'checked' : '' }} name="hot_topics" type="checkbox" class="form-check-input"> Hot Topics</label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('watch_now', $editone->watch_now) == 'on' ? 'checked' : '' }} name="watch_now" type="checkbox" class="form-check-input" > Watch Now </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('trending', $editone->trending) == 'on' ? 'checked' : '' }} name="trending" type="checkbox" class="form-check-input"> Trending </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                        <input value="on" {{ old('more_news', $editone->more_news) == 'on' ? 'checked' : '' }} name="more_news" type="checkbox" class="form-check-input" > More News </label>
                    </div>
                   
                  </div>
                </div>

              </div>



                
             
              </form>
                    </div>
                </div>
            </div>





        </div>
      
  
    @endsection
    <script>
      $(document).ready(function() {
  $(window).keydown(function(event){
    if(event.keyCode == 13) {
      event.preventDefault();
      return false;
    }
  });
});
    </script>
  </div>
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
        <h4 class="card-title">Create post</h4>
        <p class="card-description"> </p>
        <form class="forms-sample" method="POST" action="/admin/save-post">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Post title</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Post title" name="title">
            @if ($errors->has('title'))
                <span class="text-danger">{{ $errors->first('title') }}</span>
            @endif
          </div>
          <div class="form-group">
            <label for="exampleInputUsername">Slug</label>
            <input type="text" class="form-control" id="exampleInputUsername" placeholder="Slug" name="slug">
            @if ($errors->has('slug'))
            <span class="text-danger">{{ $errors->first('slug') }}</span>
        @endif
          </div>
            
          <div class="form-group">
            <label for="exampleSelectGender">Category</label>
            <select class="form-control" id="exampleSelectGender" name="category">
              @foreach($user as $published) 
              
                
              <option>{{$published->role}}</option>
              @endforeach
            </select>
          </div>
         

<div class="form-group">
            <label for="exampleSelectGender">Publisher</label>
            <select class="form-control" id="exampleSelectGender" name="published">
              @foreach($user as $published) 
              
                
              <option>{{$published->role}}</option>
              @endforeach
            </select>
          </div>
         
          <div class="form-group">
            <label for="exampleTextarea1">Body</label>
            <textarea class="form-control" id="exampleTextarea1" rows="4"></textarea>
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
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

      @if(Session::has('failed'))
      <div class="alert alert-danger">
          {{ Session::get('failed') }}
          @php
              Session::forget('failed');
          @endphp
      </div>
      @endif
       
 <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit category</h4>
        <p class="card-description"> </p>
        <form class="forms-sample" method="POST" action="{{route('admin.updatecategory')}}">
            @method('PUT')
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Category name</label>
            <input value="{{old('category_name', $category->category)}}" type="text" class="form-control" id="exampleInputName1" placeholder="Category name" name="category_name">
            @error('category_name')
                    <div class="errors">{{ $message }}</div>
                @enderror
           
          </div>
         
          <button type="submit" class="btn btn-primary me-2">Edit category</button>
         
        </form>
      </div>
    </div>
  </div>

</div>

  @endsection
<!-- partial -->
</div>
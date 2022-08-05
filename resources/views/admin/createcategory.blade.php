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
        <h4 class="card-title">Add category</h4>
        <p class="card-description"> </p>
        <form class="forms-sample" method="POST" action="/admin/create-category">
            @csrf
          <div class="form-group">
            <label for="exampleInputName1">Category name</label>
            <input value="{{old('category_name')}}" type="text" class="form-control" id="exampleInputName1" placeholder="Category name" name="category_name">
            @error('category_name')
                    <div class="errors">{{ $message }}</div>
                @enderror
           
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
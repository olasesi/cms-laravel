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
        <h4 class="card-title">Edit category</h4>
        <p class="card-description"> </p>
        <form class="forms-sample" method="POST" action="{{route('admin.updatecategory')}}">
            @method('PATCH')
            @csrf
          <div class="form-group">
            @error('category_name')
            <div class="errors">{{ $message }}</div>
            @enderror
            <label for="exampleInputName1">Category name</label>
            <input value="{{old('category_name', $category->category)}}" type="text" class="form-control" id="exampleInputName1" placeholder="Category name" name="category_name">
          
           
          </div>
          <div class="form-group">
            @error('rank')
            <div class="errors">{{ $message }}</div>
        @enderror
            <label for="exampleInputRank">Rank</label>
            <input value="{{old('rank', $category->rank)}}" type="number" class="form-control" id="exampleInputRank" placeholder="Category name" name="rank">
           
           
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
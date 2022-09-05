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
      Session::forget(['success','failed']);
    @endphp

      @endif
       
 <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Create theme</h4>
        <p class="card-description"> </p>
        <form class="forms-sample" method="POST" action="{{route('admin.updatetheme')}}">
            @csrf
            @method('PATCH')

          <div class="form-group">
            <label for="exampleInputName1">Theme name</label>
            <input value="{{old('category_name')}}" type="text" class="form-control" id="exampleInputName1" placeholder="Category name" name="category_name">
            @error('category_name')
                    <div class="errors">{{ $message }}</div>
                @enderror
           
          </div>
          <div class="form-group">
            <label for="exampleInputRank">Primary color</label>
            <input value="{{old('rank')}}" type="number" class="form-control" id="exampleInputRank" placeholder="Category name" name="rank">
            @error('rank')
                    <div class="errors">{{ $message }}</div>
                @enderror
           
          </div>

          <div class="form-group">
            <label for="exampleInputRank">Secondary color</label>
            <input value="{{old('rank')}}" type="number" class="form-control" id="exampleInputRank" placeholder="Category name" name="rank">
            @error('rank')
                    <div class="errors">{{ $message }}</div>
                @enderror
           
          </div>

          <div class="form-group">
            <label for="exampleInputRank">Body color</label>
            <input value="{{old('rank')}}" type="number" class="form-control" id="exampleInputRank" placeholder="Category name" name="rank">
            @error('rank')
                    <div class="errors">{{ $message }}</div>
                @enderror
           
          </div>

          <div class="form-group">
            <label for="exampleInputRank">Light color</label>
            <input value="{{old('rank')}}" type="number" class="form-control" id="exampleInputRank" placeholder="Category name" name="rank">
            @error('rank')
                    <div class="errors">{{ $message }}</div>
                @enderror
           
          </div>

          <div class="form-group">
            <label for="exampleInputRank">Dark color</label>
            <input value="{{old('rank')}}" type="number" class="form-control" id="exampleInputRank" placeholder="Category name" name="rank">
            @error('rank')
                    <div class="errors">{{ $message }}</div>
                @enderror
           
          </div>
         
          <button type="submit" class="btn btn-primary me-2">Add category</button>
         
        </form>
      </div>
    </div>
  </div>

</div>

  @endsection
<!-- partial -->
</div>
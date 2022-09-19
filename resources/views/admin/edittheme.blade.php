@extends('admin.templates.master')
@section('content')

<div class="main-panel">
    <div class="row ">
     @if(Session::has('success'))
    
      <div class="alert alert-success">
          {{ Session::get('success') }}
          Back to 
          <a href="{{ route('admin.showtheme') }}">themes</a>
      </div>
    
        @php
        Session::forget(['success']);
        @endphp

      @endif
       
 <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Edit theme</h4>
        <p class="card-description"> </p>
        <form class="forms-sample" method="POST" action="{{route('admin.updatetheme', ['id'=>$theme->id])}}">
            @csrf
            @method('PATCH')

          <div class="form-group">
            <label for="exampleInputName1">Theme name</label>
            <input value="{{old('theme_name',$theme->theme_name)}}" type="text" class="form-control" id="exampleInputName1" placeholder="Theme name" name="theme_name">
            @error('theme_name')
                    <div class="errors">{{ $message }}</div>
                @enderror
           
          </div>
          <div class="form-group">
            <label for="exampleInputPrimary">Primary color</label>
            <input value="{{old('primary_color',$theme->primary_color)}}" type="color" class="form-control" id="exampleInputPrimary" placeholder="Primary color" name="primary_color">
            @error('primary_color')
                    <div class="errors">{{ $message }}</div>
                @enderror
           
          </div>

          <div class="form-group">
            <label for="exampleInputSecondary">Secondary color</label>
            <input value="{{old('secondary_color',$theme->secondary_color)}}" type="color" class="form-control" id="exampleInputRank" placeholder="Secondary color" name="secondary_color">
            @error('secondary_color')
                    <div class="errors">{{ $message }}</div>
                @enderror
           
          </div>

          <div class="form-group">
            <label for="exampleInputTertiary">Tertiary color</label>
            <input value="{{old('tertiary_color',$theme->tertiary_color)}}" type="color" class="form-control" id="exampleInputTertiary" placeholder="Tertiary color" name="tertiary_color">
            @error('tertiary_color')
                    <div class="errors">{{ $message }}</div>
                @enderror
           
          </div>

          <div class="form-group">
            <label for="exampleInputBody">Body color</label>
            <input value="{{old('body_color',$theme->body_color)}}" type="color" class="form-control" id="exampleInputBody" placeholder="Body color" name="body_color">
            @error('body_color')
                    <div class="errors">{{ $message }}</div>
                @enderror
           
          </div>

          <div class="form-group">
            <label for="exampleInputLight">Light color</label>
            <input value="{{old('light_color',$theme->light_color)}}" type="color" class="form-control" id="exampleInputLight" placeholder="Light color" name="light_color">
            @error('light_color')
                    <div class="errors">{{ $message }}</div>
                @enderror
           
          </div>

          <div class="form-group">
            <label for="exampleInputDark">Dark color</label>
            <input value="{{old('dark_color',$theme->dark_color)}}" type="color" class="form-control" id="exampleInputDark" placeholder="Dark color" name="dark_color">
            @error('dark_color')
                    <div class="errors">{{ $message }}</div>
                @enderror
           
          </div>
         
          <button type="submit" class="btn btn-primary me-2">Update theme</button>
         
        </form>
      </div>
    </div>
  </div>

</div>

  @endsection
<!-- partial -->
</div>
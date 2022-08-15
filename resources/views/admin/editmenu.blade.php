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
        <h4 class="card-title">Main menu</h4>
        <p class="card-description"> </p>
        <form class="forms-sample" method="POST" action="{{route('admin.updatemenu')}}">
            @csrf
            @method('PATCH')
          <div class="form-group">
            <label for="exampleInputName1">Home</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Home"  disabled>
           
          </div>
          <div class="form-group">
            @error('title1')
            <div class="errors">{{ $message }}</div>
            @enderror
            <label for="exampleInputUsername">Title 1</label>
            <input type="text" class="form-control mb-2" id="exampleInputUsername" value="{{old('title1', $main_menu[0]->title)}}" placeholder="Title 1" name="title1">
            
            
          </div>
            
          <div class="form-group">
            @error('title2')
            <div class="errors">{{ $message }}</div>
            @enderror
            <label for="exampleInput2">Title 2</label>
            <input type="text" class="form-control mb-2" id="exampleInput2" value="{{old('title2', $main_menu[1]->title)}}" placeholder="Title 2" name="title2">
            @error('link2')
            <div class="errors">{{ $message }}</div>
            @enderror
            <input type="text" class="form-control" id="exampleInput2" value="{{old('link2', $main_menu[1]->content_type)}}" placeholder="URL link" name="link2">

          </div>
            

          <div class="form-group">
            @error('title3')
            <div class="errors">{{ $message }}</div>
            @enderror
            <label for="exampleInput3">Title 3</label>
            <input type="text" class="form-control mb-2" id="exampleInput3" value="{{old('title3', $main_menu[2]->title)}}" placeholder="Title 3" name="title3">
           
            {{--@error('Title3')
            <div class="errors">{{ $message }}</div>
            @enderror--}}
              <select class="form-control" id="exampleInput3" name="category3" placeholder="Category 3" >
               
                
                  
                <option>male</option>
               
              </select>
          </div>

          <div class="form-group">
            @error('title4')
            <div class="errors">{{ $message }}</div>
            @enderror
            <label for="exampleInput4">Title 4</label>
            <input type="text" class="form-control mb-2" id="exampleInput4" value="{{old('title4', $main_menu[3]->title)}}" placeholder="Title 4" name="title4">
            @error('link4')
            <div class="errors">{{ $message }}</div>
            @enderror
            <input type="text" class="form-control" id="exampleInput2" value="{{old('link4', $main_menu[3]->content_type)}}" placeholder="URL link" name="link4">

          </div>

          <div class="form-group">
            @error('title5')
            <div class="errors">{{ $message }}</div>
            @enderror
            <label for="exampleInput5">Title 5</label>
            <input type="text" class="form-control mb-2" id="exampleInput5" value="{{old('title5', $main_menu[4]->title)}}" placeholder="Title 5" name="title5">
            
            {{--@error('category5')
            <div class="errors">{{ $message }}</div>
            @enderror--}}
              <select class="form-control" id="exampleInput5" name="category5" placeholder="Title 5" >
               
                
                  
                <option>male</option>
               
              </select>
          </div>

          {{-- <div class="form-group">
            <label for="exampleSelectGender">Role</label>
            <select class="form-control" id="exampleSelectGender" name="role">
              @foreach($users as $userrole) 
              
                
              <option>{{$userrole->role}}</option>
              @endforeach
            </select>
          </div> --}}
         
          <button type="submit" class="btn btn-primary me-2">Submit</button>
   
        </form>
      </div>
    </div>
  </div>

</div>

  @endsection
<!-- partial -->
</div>
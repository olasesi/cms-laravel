@extends('admin.templates.master')
@section('content')

<div class="main-panel">
    <div class="row ">

      
 <div class="col-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Main menu</h4>
        <p class="card-description"> </p>
        <form class="forms-sample" method="POST" action="">
            @csrf
            @method('PUT')
          <div class="form-group">
            <label for="exampleInputName1">Home</label>
            <input type="text" class="form-control" id="exampleInputName1" placeholder="Home" value="" name="name" disabled>
           
          </div>
          <div class="form-group">
            <label for="exampleInputUsername">Category 1 (with dropdown)</label>
            <input type="text" class="form-control" id="exampleInputUsername" value="" placeholder="Title 1" name="title1">
            
              <label for="exampleSelectGender"></label>
              <select class="form-control" id="exampleSelectGender" name="category1">
               
                
                  
                <option>male</option>
               
              </select>
            
          </div>
            
          <div class="form-group">
            <label for="exampleInput2">Category 2</label>
            <input type="text" class="form-control" id="exampleInput2" value="" placeholder="Title 2" name="title2">
            <label for="exampleInput2"></label>
              <select class="form-control" id="exampleInput2" name="category2" placeholder="Category 2" >
               
                
                  
                <option>Posts</option>
               
              </select>
          </div>
            

          <div class="form-group">
            <label for="exampleInput3">Category 3</label>
            <input type="text" class="form-control" id="exampleInput3" value="" placeholder="Title 3" name="title3">
            <label for="exampleInput3"></label>
              <select class="form-control" id="exampleInput3" name="category3" placeholder="Category 3" >
               
                
                  
                <option>male</option>
               
              </select>
          </div>

          <div class="form-group">
            <label for="exampleInput4">Category 4</label>
            <input type="text" class="form-control" id="exampleInput4" value="" placeholder="Title 4" name="title4">
            <label for="exampleInput4"></label>
              <select class="form-control" id="exampleInput4" name="category4" placeholder="Title 4" >
               
                
                  
                <option>male</option>
               
              </select>
          </div>

          <div class="form-group">
            <label for="exampleInput5">Category 5</label>
            <input type="text" class="form-control" id="exampleInput5" value="" placeholder="Title 5" name="title5">
            <label for="exampleInput5"></label>
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
          <button type="reset" class="btn btn-dark">Cancel</button>
        </form>
      </div>
    </div>
  </div>

</div>

  @endsection
<!-- partial -->
</div>
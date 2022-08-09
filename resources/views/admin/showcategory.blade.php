@extends('admin.templates.master')
@section('content')


<div class="main-panel">
<div class="row ">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Categories</h4>

          <a href="/admin/add-user" class="btn btn-success btn-fw"><i class="mdi mdi-account-plus btn-icon-prepend"></i>Add new category</a>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                 
                  <th> Category Name </th>
                  
                  
                 
                </tr>
              </thead>
              <tbody>
                @foreach($item as $single_item)
                <tr>
                  
                  <td>
                   
                    <span class="ps-2">{{$single_item->category}}</span>
                  </td>
                  <td> {{$single_item->username}} </td>
                
                 
                  
                    
                  <td>
                    <form action="{{route('admin.editcategory', ['id' => $single_item->id])}}" method="POST">
                    @csrf
                   
                <button type="submit" class="btn btn-info btn-md">Edit</button>
                    </form>
            </td>  

                   
                 
                  
                  
                   <td>
                   
                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuSizeButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Delete </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton2">
                      <h6 class="dropdown-header">Delete user?</h6>
                      <form action="/admin/delete-user/{{$single_item->id}}" method="POST">
                        @csrf

                        <button type="submit" class="btn btn-danger btn-md" name="delete">delete</button>
                      
                      </form>
                    </div>
                 

                </td>

                  
                 
                </tr>
                @endforeach
               
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>




@endsection
<!-- partial -->
</div>
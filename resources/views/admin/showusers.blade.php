@extends('admin.templates.master')
@section('content')


<div class="main-panel">
<div class="row ">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">Users</h4>

          <a href="/admin/add-user" class="btn btn-success btn-fw"><i class="mdi mdi-account-plus btn-icon-prepend"></i>Add new user</a>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                 
                  <th> Name </th>
                  <th> Username </th>
                  <th> Role </th>
                  <th> Active </th>
                  <th> Email </th>
                  
                 
                </tr>
              </thead>
              <tbody>
                @foreach($user as $admin)
                <tr>
                  
                  <td>
                   
                    <span class="ps-2">{{$admin->name}}</span>
                  </td>
                  <td> {{$admin->username}} </td>
                  <td> {{$admin->role}} </td>
                  <td> {{$admin->active == 1?'Active':'Inactive'}} </td>
                  <td> {{$admin->email}} </td>
                 
                  
                  
                  <td>
                    <form action="{{ route('admin.edit-user', ['id' => $admin->id]) }}" method="POST">
                    @csrf
                   
                <button type="submit" class="btn btn-info btn-md">Edit</button>
                    </form>
            </td>  

                    @if($admin->role != 'super admin')
                   
                     @if($admin->active == 1)
                    <td>
                        <form action="{{ route('admin.ban-user', ['id' => $admin->id]) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input name="active" value="{{$admin->active}}" type="hidden"/>
                    <button type="submit" class="btn btn-warning btn-md">Ban</button>
                        </form>
                </td>  
                   @else
                   <td>
                    <form action="" method="POST">
                    @csrf
                    
                    <input name="/admin/unban" value="" type="hidden"/>
                <button type="submit" class="btn btn-warning btn-md">Unban</button>
                    </form>
            </td>  
                   @endif 
                  
                   <td>
                   
                    <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuSizeButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Delete </button>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton2">
                      <h6 class="dropdown-header">Delete user?</h6>
                      <form action="/admin/delete-user/{{$admin->id}}" method="POST">
                        @csrf

                        <button type="submit" class="btn btn-danger btn-md" name="delete">delete</button>
                      
                      </form>
                    </div>
                 

                </td>

                  @endif
                 
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
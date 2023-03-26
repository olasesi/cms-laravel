@extends('admin.templates.master')
@section('content')


<div class="main-panel">
<div class="row ">
    <div class="col-12 grid-margin">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title">All Users</h4>

          <a href="{{route('admin.create')}}" class="btn btn-success btn-fw"><i class="mdi mdi-account-plus btn-icon-prepend"></i>Add new user</a>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                 <td>S/N</td>
                  <th> Name </th>
                  <th> Username </th>
                  <th> Role </th>
                  <th> Active </th>
                  <th> Email </th>
                  <th> Posts </th>
                 
                </tr>
              </thead>
              <tbody>
                @foreach($user as $admin)
                <tr>
                  <td>
                  {{$loop->iteration}}
                  </td>
                  <td>
                    <a href="{{ route('showauthor', ['id' => $admin->id]) }}" style="text-decoration:none;">
                    <img src="storage/{{$admin->user_image_path}}" alt="{{$admin->name}}" />
                    <span class="ps-2">{{$admin->name}}</span>
                    </a>

                    <div class="mt-3">   
                      <form action="{{ route('admin.edit', ['id' => $admin->id]) }}" method="POST">
                      @csrf
                     <button type="submit" class="btn btn-outline-primary btn-sm">Edit</button>
                      </form>
                    </div>

                    <div class="mt-3"> 
                      @if($admin->role != 'super admin')
                   
                      @if($admin->active == 1)
                    
                         <form action="{{ route('admin.ban', ['id' => $admin->id]) }}" method="POST">
                         @csrf
                         @method('PUT')
                         <input name="active" value="{{$admin->active}}" type="hidden"/>
                         <button type="submit" class="btn btn-outline-warning btn-sm">Ban</button>
                         </form>
                      
                    @else
                   
                     <form action="" method="POST">
                     @csrf
                     
                     <input name="/admin/unban" value="" type="hidden"/>
                       <button type="submit" class="btn btn-outline-warning btn-sm">Unban</button>
                     </form>
                  
                    @endif 
                    </div>

                    <div class="mt-3">
                      <button class="btn btn-outline-danger dropdown-toggle" type="button" id="dropdownMenuSizeButton2" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Delete </button>
                      <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton2">
                        <h6 class="dropdown-header">Delete user?</h6>
                        <form action="{{route('admin.delete', ['id' => $admin->id]) }}" method="POST">
                          @csrf
  
                          <button type="submit" class="btn btn-danger btn-sm" name="delete">delete</button>
                        
                        </form>
                      </div>
                    </div>



                  </td>
                  <td> 
                    {{$admin->username}} 
                  </td>
                  <td> {{$admin->role}} </td>
                  <td> {{$admin->active == 1?'Active':'Inactive'}} </td>
                  <td> {{$admin->email}} </td>
                  <td> {{$admin->image}} </td>
                  
                  
                 

                  
                   
                   
                    

                

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
@extends('admin.templates.master')
@section('content')
    <div class="main-panel">
        <div class="row ">
            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Posts</h4>
                        {{-- {{ route('admin.createtheme') }} --}}<!--To add a named route latter-->
                        <a href="/admin/add-user" class="btn btn-success btn-fw"><i
                                class="mdi mdi-account-plus btn-icon-prepend"></i>Add new user</a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th> Title </th>
                                        <th> Author </th>

                                        <th> Categories </th>
                                        {{-- <th> More details </th> --}}
                                        <th> Date </th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                        <tr>

                                            <td>

                                                <span class="ps-2">{{ $post->title }}</span>
                                            </td>
                                            <td> {{ $post->role }} </td>
                                            {{-- <td> {{$post->category_sections.category}} </td> --}}
                                            <td> {{ $post->created_at }} </td>




                                            {{-- <td>
                    <form action="/admin/edit-post/{{$post->id}}" method="POST">
                    @csrf
                   
                <button type="submit" class="btn btn-info btn-md">Edit</button>
                    </form>
            </td> --}}

                                            {{-- @if ($admin->role != 'super admin')
                   
                     @if ($admin->active == 1)
                    <td>
                        <form action="/admin/ban-user/{{$admin->id}}" method="POST">
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

                  @endif --}}

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

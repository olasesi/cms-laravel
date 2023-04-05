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
                                class="mdi mdi-account-plus btn-icon-prepend"></i>Add new post</a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>
                                        <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                              <input type="checkbox" class="form-check-input">
                                            </label>
                                          </div>
                                        </th>
                                        <th>Id</th>
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
                                                <div class="form-check form-check-muted m-0">
                                                  <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input" name="{{$post->id}}">
                                                  </label>
                                                </div>
                                              </td>
                                             
                                          <td>  {{$post->id}}</td>
                                            <td>
                                                <img src="{{asset($post->image_path)}}" alt="{{$post->title}}" style="width:100px; height:100px; border-radius:0;"/>
                                                <span class="ps-2">{{Str::of($post->title)->words(5, '...')}}</span>
                                                
                                            </td>
                                            <td> {{$post->name}} </td>
                                             <td><button class="btn btn-sm .btn-outline" style="color:{{$post->color}};">{{$post->category}}</button> </td>
                                             <td>{{$post->created_at}} </td>
                                            <td> </td>

                                            


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
{{ $posts->links() }}
        <div class="col-12 grid-margin">
            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">

                    <div class="template-demo">
                      <div class="btn-group" role="group" aria-label="Basic example">
                        <button type="button" class="btn btn-primary">1</button>
                        <button type="button" class="btn btn-primary">2</button>
                        <button type="button" class="btn btn-primary">3</button>
                      </div>
                      
                    </div>
                   
                    
                  </div>
                  
                </div>
              </div>
            </div>
          </div>




        <div class="row ">
            <div class="col-12 grid-margin">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Order Status</h4>
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </th>
                          <th> Client Name </th>
                          <th> Order No </th>
                          <th> Product Cost </th>
                          <th> Project </th>
                          <th> Payment Mode </th>
                          <th> Start Date </th>
                          <th> Payment Status </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td>
                            <img src="assets/images/faces/face1.jpg" alt="image" />
                            <span class="ps-2">Henry Klein</span>
                          </td>
                          <td> 02312 </td>
                          <td> $14,500 </td>
                          <td> Dashboard </td>
                          <td> Credit card </td>
                          <td> 04 Dec 2019 </td>
                          <td>
                            <div class="badge badge-outline-success">Approved</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td>
                            <img src="assets/images/faces/face2.jpg" alt="image" />
                            <span class="ps-2">Estella Bryan</span>
                          </td>
                          <td> 02312 </td>
                          <td> $14,500 </td>
                          <td> Website </td>
                          <td> Cash on delivered </td>
                          <td> 04 Dec 2019 </td>
                          <td>
                            <div class="badge badge-outline-warning">Pending</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td>
                            <img src="assets/images/faces/face5.jpg" alt="image" />
                            <span class="ps-2">Lucy Abbott</span>
                          </td>
                          <td> 02312 </td>
                          <td> $14,500 </td>
                          <td> App design </td>
                          <td> Credit card </td>
                          <td> 04 Dec 2019 </td>
                          <td>
                            <div class="badge badge-outline-danger">Rejected</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td>
                            <img src="assets/images/faces/face3.jpg" alt="image" />
                            <span class="ps-2">Peter Gill</span>
                          </td>
                          <td> 02312 </td>
                          <td> $14,500 </td>
                          <td> Development </td>
                          <td> Online Payment </td>
                          <td> 04 Dec 2019 </td>
                          <td>
                            <div class="badge badge-outline-success">Approved</div>
                          </td>
                        </tr>
                        <tr>
                          <td>
                            <div class="form-check form-check-muted m-0">
                              <label class="form-check-label">
                                <input type="checkbox" class="form-check-input">
                              </label>
                            </div>
                          </td>
                          <td>
                            <img src="assets/images/faces/face4.jpg" alt="image" />
                            <span class="ps-2">Sallie Reyes</span>
                          </td>
                          <td> 02312 </td>
                          <td> $14,500 </td>
                          <td> Website </td>
                          <td> Credit card </td>
                          <td> 04 Dec 2019 </td>
                          <td>
                            <div class="badge badge-outline-success">Approved</div>
                          </td>
                        </tr>
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

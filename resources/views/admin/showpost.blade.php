@extends('admin.templates.master')
@section('content')
    <div class="main-panel">
        <div class="row ">
          @if (Session::has('success'))
                <div class="alert alert-success alert-dismissible fade show pl-3" role="alert">
                    {{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    @php
                        Session::forget('success');
                    @endphp
                </div>
            @endif

            @if (Session::has('approved'))
                <div class="alert alert-success alert-dismissible fade show pl-3" role="alert">
                    {{ Session::get('approved') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    @php
                        Session::forget('approved');
                    @endphp
                </div>
            @endif

            @if (Session::has('disapproved'))
                <div class="alert alert-danger alert-dismissible fade show pl-3" role="alert">
                    {{ Session::get('disapproved') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    @php
                        Session::forget('disapproved');
                    @endphp
                </div>
            @endif

            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Posts</h4>
                        
                        @if(Auth::user()->admin_id != '4') 
                        <a href="{{route('admin.createpost')}}" class="btn btn-success btn-fw"><i
                                class="mdi mdi-account-plus btn-icon-prepend"></i>Add new post</a>
                        @endif
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>

                                        </th>
                                        <th>Id</th>
                                        <th> Title </th>
                                        <th>More info</th>
                                        <th> Author </th>
                                        <th> Categories </th>
                                        
                                        <th> Rank </th>
                                        <th> Date </th>
                                        <th>

                                        </th>


                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($posts as $post)
                                        <tr>
                                            <td>
                                                <div class="form-check form-check-muted m-0">
                                                    <label class="form-check-label">
                                                        <input type="checkbox" class="form-check-input"
                                                            name="{{ $post->slug }}">
                                                    </label>
                                                </div>
                                            </td>

                                            <td> {{ $post->id }}</td>
                                            <td>
                                                <a href="#" target="_blank">
                                                    <img src="{{ asset('storage/' . $post->image_path) }}"
                                                        alt="{{ $post->title }}"
                                                        style="width:100px; height:100px; border-radius:0;" />
                                                </a>
                                                <span class="ps-2">{{ Str::of($post->title)->words(5, '...') }}</span>


                                            </td>
                                            <td>
                                                <div>
                                                    
                                                    <label class="badge badge-outline-success mb-1">{{ $post->visibility }}</label>
                                                    @if ($post->pending_preview == 'on')
                                                        <label class="badge badge-outline-info mb-1"> Pending Preview</label>
                                                    @endif
                                                </div>



                                                @if ($post->discussion == 'No commenting allowed')
                                                    <label class="badge badge-outline-warning mb-1"> {{ 'No commenting' }}</label>
                                                @endif


                                                <label class="badge badge-outline-primary mb-1">Published:
                                                    @if ($post->publish_time == null)
                                                        {{ $post->created_at }}
                                                    @else
                                                        {{ $post->publish_time }}
                                                    @endif


                                                </label>
                                            </td>
                                            <td>  
                                              <div><i class="mdi mdi-account-box-outline icon-sm text-warning"></i> {{ $post->name }}</div>
                                              <div><i class="mdi mdi-account icon-sm text-warning"></i> {{ $post->username }} </div> 
                                              <div><i class="mdi mdi-email icon-sm text-warning"></i> {{ $post->email }}</div>
                                              </td>

                                            <td><label class="badge badge-light"
                                                    style="color:{{ $post->color }};">{{ $post->category }}</label> </td>
                                            <td>
                                                @if ($post->order == null)
                                                    {{ 'Not ranked' }}
                                                @else
                                                    {{ $post->order }}
                                                @endif
                                            </td>
                                            <td>{{ $post->created_at }} </td>
                                            <td>
                                              @if(Auth::user()->admin_id == '1' || Auth::user()->admin_id == '2')
                                              <form method="POST" action="{{ route('admin.editpost', $post->slug) }}">
                                                @csrf
                                            
                                                <button type="submit" class="btn btn-sm btn-success"
                                                    name="{{ $post->slug }}">Edit</button>
                                              </form>

                                              @if($post->approve == 0)
                                              <form method="POST" action="{{ route('admin.approvepost', $post->slug) }}">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="btn btn-sm btn-warning"
                                                    name="{{ $post->slug }}">Approve</button>
                                              </form>
                                            @elseif($post->approve == 1)
                                            <form method="POST" action="{{ route('admin.disapprovepost', $post->slug) }}">
                                              @csrf
                                              @method('PATCH')
                                              <button type="submit" class="btn btn-sm btn-secondary"
                                                  name="{{ $post->slug }}">Disapprove</button>
                                            </form>
                                            @endif
                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-danger dropdown-toggle" type="button"
                                                    id="dropdownMenuIconButton1" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                                <div class="dropdown-menu"
                                                    aria-labelledby="dropdownMenuIconButton1">

                                                    <form method="POST" action="{{ route('admin.deletepost', $post->slug) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-sm btn-success dropdown-item"
                                                            name="{{ $post->slug }}">Delete post</button>
                                                    </form>
                                                </div>
                                            </div>
                                              @elseif(Auth::user()->admin_id == '3')

                                              @if(Auth::user()->admin_id == $post->admin_id AND Auth::user()->id == $post->user_id)
                                              <form method="POST" action="{{ route('admin.editpost', $post->id) }}">
                                                @csrf
                                                <button type="submit" class="btn btn-sm btn-success"
                                                    name="{{ $post->slug }}">Edit</button>
                                              </form>



                                            <div class="dropdown">
                                                <button class="btn btn-sm btn-danger dropdown-toggle" type="button"
                                                    id="dropdownMenuIconButton1" data-bs-toggle="dropdown"
                                                    aria-haspopup="true" aria-expanded="false">
                                                    <i class="mdi mdi-delete"></i>
                                                </button>
                                                <div class="dropdown-menu"
                                                    aria-labelledby="dropdownMenuIconButton1">

                                                    <form method="POST" action="{{ route('admin.deletepost', $post->slug) }}">
                                                        @csrf
                                                        
                                                        <button type="submit" class="btn btn-sm btn-success dropdown-item"
                                                            name="{{ $post->slug }}">Delete post</button>
                                                    </form>
                                                </div>
                                            </div>
                                              @endif
                                              @endif
                                              
                                              
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

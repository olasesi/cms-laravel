@extends('admin.templates.master')
@section('content')
    <div class="main-panel">
        <div class="row ">
            @if(Session::has('success'))
    
            <div class="alert alert-success">
                {{ Session::get('success')  }}
               
            </div>
          
              @php
              Session::forget(['success']);
              @endphp
      
            @endif

            <div class="col-12 grid-margin">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Themes</h4>

                        <a href="{{ route('admin.createtheme') }}" class="btn btn-success btn-fw"><i
                                class="mdi mdi-plus btn-icon-prepend"></i>Create theme</a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th> Name </th>
                                        <th> Activity </th>
                                        <th> Primary color</th>
                                        <th> Secondary color</th>
                                        <th> Tertiary color </th>
                                        <th> Body color</th>
                                        <th> Light color</th>
                                        <th> Dark color</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($showtheme as $showtheme_each)
                                        <tr>

                                            <td>

                                                <span class="ps-2">{{ $showtheme_each->theme_name }}</span>
                                            </td>
                                            <td> {{ $showtheme_each->active == 1 ? 'Active' : '' }} </td>
                                            <td> <input type="color" value="{{$showtheme_each->primary_color }}"></td>
                                            <td><input type="color" value="{{$showtheme_each->secondary_color}}"></td>
                                            <td><input type="color" value="{{$showtheme_each->tertiary_color }}"></td>
                                            <td><input type="color" value="{{$showtheme_each->body_color }}"></td>
                                            <td><input type="color" value="{{$showtheme_each->light_color}}"></td>
                                            <td><input type="color" value="{{$showtheme_each->dark_color}}"></td>


                                            @if (Auth::user()->role == 'super admin')
                                                @if ($showtheme_each->active == 0)
                                                    <td>
                                                        <button class="btn btn-success dropdown-toggle" type="button"
                                                        id="dropdownMenuSizeactive" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"> Activate </button>
                                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeactive">
                                                            <h6 class="dropdown-header">Activate theme</h6>
                                                        <form
                                                            action="{{ route('admin.activatetheme', ['id' => $showtheme_each->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('PATCH')
                                                            <input name="active" value="{{ $showtheme_each->id }}"
                                                                type="hidden" />
                                                            <button type="submit"
                                                                class="btn btn-success btn-md">Activate</button>
                                                        </form>
                                                    </div>
                                                    </td>
                                                @endif
                                            @endif

                                            @if (Auth::user()->role == 'super admin')

                                                <td>
                                                    <form action="{{ route('admin.edittheme', ['id' => $showtheme_each->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PATCH')
                                                        <input name="active" value="{{ $showtheme_each->id }}"
                                                            type="hidden" />
                                                        <button type="submit" class="btn btn-warning btn-md">Edit</button>
                                                    </form>
                                                </td>
                                            @endif
                                            @if (Auth::user()->role == 'super admin')
                                            @if ($showtheme_each->active == 0)
                                                <td>

                                                    <button class="btn btn-danger dropdown-toggle" type="button"
                                                        id="dropdownMenuSizeButton2" data-bs-toggle="dropdown"
                                                        aria-haspopup="true" aria-expanded="false"> Delete </button>
                                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuSizeButton2">
                                                        <h6 class="dropdown-header">Delete theme</h6>
                                                        <form
                                                            action="{{ route('admin.deletetheme', ['id' => $showtheme_each->id]) }}"
                                                            method="POST">
                                                            @csrf
                                                            @method('DELETE')

                                                            <button type="submit" class="btn btn-danger btn-md"
                                                                name="delete">Delete</button>

                                                        </form>
                                                    </div>


                                                </td>
                                                @endif
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

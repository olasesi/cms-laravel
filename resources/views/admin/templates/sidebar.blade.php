<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
      <a class="sidebar-brand brand-logo" href="index.html"><img src="{{asset('administration/assets/images/logo.svg')}}" alt="logo" /></a>
      <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="{{asset('administration/assets/images/logo-mini.svg')}}" alt="logo" /></a>
    </div>
    <ul class="nav">
      <li class="nav-item profile">
        <div class="profile-desc">
          <div class="profile-pic">
            <div class="count-indicator">
              <img class="img-xs rounded-circle " src="{{asset('administration/assets/images/faces/face15.jpg')}}" alt="">
              <span class="count bg-success"></span>
            </div>
            <div class="profile-name">
                
               
              <h5 class="mb-0 font-weight-normal">
                {{Auth::user()->username}}
           
              </h5>
              <span> {{Auth::user()->role}}</span>
              
            </div>
          </div>
         
        </div>
      </li>
      <li class="nav-item nav-category">
        <span class="nav-link">Navigation</span>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="/admin/dashboard">
          <span class="menu-icon">
            <i class="mdi mdi-speedometer"></i>
          </span>
          <span class="menu-title">Dashboard</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
          <span class="menu-icon">
            <i class="mdi mdi-rename-box"></i>
          </span>
          <span class="menu-title">Posts</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="ui-basic">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.indexpost')}}">Posts</a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.createpost')}}">Create Post</a></li>
           
          </ul>
        </div>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" href="pages/forms/basic_elements.html">
          <span class="menu-icon">
            <i class="mdi mdi-image-filter"></i>
          </span>
          <span class="menu-title">Gallery</span>
        </a>
      </li>

      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#category" aria-expanded="false" aria-controls="category" href="pages/tables/basic-table.html">
          <span class="menu-icon">
            <i class="mdi mdi-table"></i>
          </span>
          <span class="menu-title">Category</span>
          <i class="menu-arrow"></i>
        </a>

        <div class="collapse" id="category">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.showcategory')}}"> Categories </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.createcategory')}}"> Add category </a></li>
            
          </ul>
        </div>



      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#appearance" aria-expanded="false" aria-controls="appearance" href="pages/tables/basic-table.html">
          <span class="menu-icon">
            <i class="mdi mdi-table-large"></i>
          </span>
          <span class="menu-title">Appearance</span>
          <i class="menu-arrow"></i>
        </a>

        <div class="collapse" id="appearance">
          <ul class="nav flex-column sub-menu">
            
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.edittopbar')}}"> Topbar menu </a></li>
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.editmenu')}}"> Primary menu </a></li>
        
          </ul>
        </div>



      </li>
      
      <li class="nav-item menu-items">
        <a class="nav-link" href="pages/icons/mdi.html">
          <span class="menu-icon">
            <i class="mdi mdi-contacts"></i>
          </span>
          <span class="menu-title">Icons</span>
        </a>
      </li>
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
          <span class="menu-icon">
            <i class="mdi mdi-account-multiple"></i>
          </span>
          <span class="menu-title">Users</span>
          <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="auth">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="/admin/users"> Users </a></li>
            <li class="nav-item"> <a class="nav-link" href="/admin/"> Add users </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/blank-page.html"> Blank Page </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-404.html"> 404 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/error-500.html"> 500 </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/login.html"> Login </a></li>
            <li class="nav-item"> <a class="nav-link" href="pages/samples/register.html"> Register </a></li>
          </ul>
        </div>
      </li>
  
      <li class="nav-item menu-items">
        <a class="nav-link" data-bs-toggle="collapse" href="#settings" aria-expanded="false" aria-controls="settings">
          <span class="menu-icon">
            <i class="mdi mdi-settings"></i>
          </span>
          <span class="menu-title">Settings</span>
           <i class="menu-arrow"></i>
        </a>
        <div class="collapse" id="settings">
          <ul class="nav flex-column sub-menu">
           
            <li class="nav-item"> <a class="nav-link" href="{{route('admin.editsocialmedia')}}"> Social media </a></li>
            <li class="nav-item"> <a class="nav-link" href="">OpenWeather settings </a></li>
          </ul>
        </div>
      </li>
      
    </ul>
  </nav>
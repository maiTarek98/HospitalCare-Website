 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{asset('AdminLTE/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        @if(Auth::check())

          <p><a href="#"> {{Auth::user()->name}}</a>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a></p>
          <p><a href="/logout">Logout</a></p>
        @endif
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        @if(Auth::check())
         @if(Auth::user()->role == 1)
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>المستخدمين</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/user/create')}}"><i class="fa fa-circle-o"></i>اضافه</a></li>
            <li><a href="{{url('admin/user')}}"><i class="fa fa-circle-o"></i>عرض</a></li>
          </ul>
        </li>

        @endif
        
        <li class="treeview">
          <a href="#">
          <i class="fa fa-info" aria-hidden="true"></i> <span>Our Teams</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/team/create')}}"><i class="fa fa-circle-o"></i>Add </a></li>
            <li><a href="{{url('admin/team')}}"><i class="fa fa-circle-o"></i>Show</a></li>
          </ul>
        </li>   
        <li class="treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Slider</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/slider/create')}}"><i class="fa fa-circle-o"></i>Add</a></li>
            <li><a href="{{url('admin/slider')}}"><i class="fa fa-circle-o"></i>Show</a></li>
          </ul>
        </li>  
        <li class=" treeview">
          <a href="#">
          <i class="fa fa-camera"></i> <span>Why Choose Us </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/chosen/create')}}"><i class="fa fa-circle-o"></i>Add</a></li>
            <li><a href="{{url('admin/chosen')}}"><i class="fa fa-circle-o"></i>Show</a></li>
          </ul>
        </li>       
        <li class="treeview">
          <a href="#">
          <i class="fa fa-user-plus" aria-hidden="true"></i><span>Services </span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/service/create')}}"><i class="fa fa-circle-o"></i>Add</a></li>
            <li><a href="{{url('admin/service')}}"><i class="fa fa-circle-o"></i>Show</a></li>
          </ul>
        </li>    
        <li class=" treeview">
          <a href="#">
          <i class="fa fa-file" aria-hidden="true"></i><span>Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/gallery/create')}}"><i class="fa fa-circle-o"></i>Add</a></li>
            <li><a href="{{url('admin/gallery')}}"><i class="fa fa-circle-o"></i>Show</a></li>
          </ul>
        </li>    
        </li>    
        <li class=" treeview">
          <a href="#">
          <i class="fa fa-file" aria-hidden="true"></i><span>Health</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/health/create')}}"><i class="fa fa-circle-o"></i>Add</a></li>
            <li><a href="{{url('admin/health')}}"><i class="fa fa-circle-o"></i>Show</a></li>
          </ul>
        </li>
        <li class=" treeview">
          <a href="#">
          <i class="fa fa-file" aria-hidden="true"></i><span>Openions</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/openion/create')}}"><i class="fa fa-circle-o"></i>Add</a></li>
            <li><a href="{{url('admin/openion')}}"><i class="fa fa-circle-o"></i>Show</a></li>
          </ul>
        </li>         
        <li class="treeview">
          <a href="#">
          <i class="fa fa-phone"></i><span> Contact</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="{{url('admin/contact/create')}}"><i class="fa fa-circle-o"></i>Add</a></li>
            <li><a href="{{url('admin/contact')}}"><i class="fa fa-circle-o"></i>Show</a></li>
          </ul>
        </li>  
        <li class="treeview">
          <a href="#">
          <i class="fa fa-comments-o" aria-hidden="true"></i><span>  المشتركين</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{url('admin/subscribe')}}"><i class="fa fa-circle-o"></i>عرض</a></li>
          </ul>
        </li>  
        <li class="treeview">
          <a href="#">
          <i class="fa fa-comments-o" aria-hidden="true"></i><span>Opening Time</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="active"><a href="{{url('admin/opening/create')}}"><i class="fa fa-circle-o"></i>اضافه</a></li>
            <li><a href="{{url('admin/opening')}}"><i class="fa fa-circle-o"></i>عرض</a></li>
          </ul>
        </li>  
        <li class="treeview">
          <a href="#">
          <i class="fa fa-comments-o" aria-hidden="true"></i><span>  الاعدادات</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
          <li class="active"><a href="{{url('admin/setting/create')}}"><i class="fa fa-circle-o"></i>اضافه</a></li>
            <li><a href="{{url('admin/setting')}}"><i class="fa fa-circle-o"></i>عرض</a></li>
          </ul>
        </li>  
        @endif    

      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

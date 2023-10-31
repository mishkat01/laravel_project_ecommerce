<div id="sidebar-wrapper" data-simplebar="" data-simplebar-auto-hide="true" class="border-right border-light-3 shadow-none">
     <div class="brand-logo border-light-3">
      <a href="index.html">
       <!-- <img src="assets/images/logo-icon.png" class="logo-icon" alt="logo icon"> -->
       <h5 class="logo-text">Hello!  {{ Auth::user()->name}}</h5>
     </a>
   </div>
   <ul class="sidebar-menu do-nicescrol">
      <li class="sidebar-header">MAIN NAVIGATION</li>
      <li>
        <a href="{{route('admin.dashboard')}}" class="waves-effect">
          <i class="zmdi zmdi-widgets"></i> <span>Dashboard</span>
          <small class="badge float-right badge-danger">10</small> 
        </a>
      </li>
      <li>
        <a href="" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Brand</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="{{ route('all.brand')}}"><i class="zmdi zmdi-star-outline"></i>All Brand</a></li>
          <li><a href="{{ route('add.brand')}}"><i class="zmdi zmdi-star-outline"></i>Add brand</a></li>
         
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>Category</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="{{route('all.category')}}"><i class="zmdi zmdi-star-outline"></i>All Category</a></li>
        <li><a href="{{route('add.category')}}"><i class="zmdi zmdi-star-outline"></i>Add Category</a></li>
     
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-gamepad"></i> <span>Sub Category</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="cards-image-cards.html"><i class="zmdi zmdi-star-outline"></i> Image Cards</a></li>
          <li><a href="cards-text-cards.html"><i class="zmdi zmdi-star-outline"></i> Text Cards</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-cloud-done"></i> <span>Manage Product</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="buttons-default-button.html"><i class="zmdi zmdi-star-outline"></i> Default Button</a></li>
          <li><a href="buttons-dropdown-buttons.html"><i class="zmdi zmdi-star-outline"></i> Dropdown Buttons</a></li>
      
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel"></i>
          <span>Review</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="components-range-slider.html"><i class="zmdi zmdi-star-outline"></i> Range Sliders</a></li>
          <li><a href="components-image-carousel.html"><i class="zmdi zmdi-star-outline"></i> Image Carousels</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-chart"></i> <span>Reports</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="charts-chartjs.html"><i class="zmdi zmdi-star-outline"></i> Chart JS</a></li>
          <li><a href="charts-morris.html"><i class="zmdi zmdi-star-outline"></i> Morris Charts</a></li>
        </ul>
       </li>
     
     
    </ul>
   
   </div>
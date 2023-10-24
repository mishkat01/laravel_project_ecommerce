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
        <a href="index.html" class="waves-effect">
          <i class="zmdi zmdi-view-dashboard"></i> <span>Brand</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="index.html"><i class="zmdi zmdi-star-outline"></i> Dashboard v1</a></li>
          <li><a href="index2.html"><i class="zmdi zmdi-star-outline"></i> Dashboard v2</a></li>
          <li><a href="index3.html"><i class="zmdi zmdi-star-outline"></i> Dashboard v3</a></li>
          <li><a href="index4.html"><i class="zmdi zmdi-star-outline"></i> Dashboard v4</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-layers"></i>
          <span>UI Elements</span> <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
        <li><a href="ui-checkbox-radio.html"><i class="zmdi zmdi-star-outline"></i> Checkboxes & Radios</a></li>
        <li><a href="ui-nav-tabs.html"><i class="zmdi zmdi-star-outline"></i> Nav Tabs</a></li>
        <li><a href="ui-accordions.html"><i class="zmdi zmdi-star-outline"></i> Accordions</a></li>
        <li><a href="ui-modals.html"><i class="zmdi zmdi-star-outline"></i> Modals</a></li>
     
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-gamepad"></i> <span>BS Cards</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="cards-image-cards.html"><i class="zmdi zmdi-star-outline"></i> Image Cards</a></li>
          <li><a href="cards-text-cards.html"><i class="zmdi zmdi-star-outline"></i> Text Cards</a></li>
          <li><a href="cards-profile-cards.html"><i class="zmdi zmdi-star-outline"></i> Profile Cards</a></li>
          <li><a href="cards-social-cards.html"><i class="zmdi zmdi-star-outline"></i> Social Cards</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-cloud-done"></i> <span>Buttons</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="buttons-default-button.html"><i class="zmdi zmdi-star-outline"></i> Default Button</a></li>
          <li><a href="buttons-dropdown-buttons.html"><i class="zmdi zmdi-star-outline"></i> Dropdown Buttons</a></li>
          <li><a href="buttons-group-buttons.html"><i class="zmdi zmdi-star-outline"></i> Group Buttons</a></li>
          <li><a href="buttons-icon-buttons.html"><i class="zmdi zmdi-star-outline"></i> Icon Buttons</a></li>
          <li><a href="buttons-outline-buttons.html"><i class="zmdi zmdi-star-outline"></i> Outline Buttons</a></li>
          <li><a href="buttons-social-buttons.html"><i class="zmdi zmdi-star-outline"></i> Social Buttons</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-card-travel"></i>
          <span>Components</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="components-range-slider.html"><i class="zmdi zmdi-star-outline"></i> Range Sliders</a></li>
          <li><a href="components-image-carousel.html"><i class="zmdi zmdi-star-outline"></i> Image Carousels</a></li>
          <li><a href="components-grid-layouts.html"><i class="zmdi zmdi-star-outline"></i> Grid Layouts</a></li>
          <li><a href="components-tree-view-menu.html"><i class="zmdi zmdi-star-outline"></i> Tree View</a></li>
          <li><a href="components-nestable.html"><i class="zmdi zmdi-star-outline"></i> Nesteble</a></li>
          <li><a href="components-switcher-buttons.html"><i class="zmdi zmdi-star-outline"></i> Switcher Buttons</a></li>
          <li><a href="components-pricing-table.html"><i class="zmdi zmdi-star-outline"></i> Pricing Tables</a></li>
          <li><a href="components-vertical-timeline.html"><i class="zmdi zmdi-star-outline"></i> Vertical Timeline</a></li>
          <li><a href="components-horizontal-timeline.html"><i class="zmdi zmdi-star-outline"></i> Horizontal Timeline</a></li>
          <li><a href="components-fancy-lightbox.html"><i class="zmdi zmdi-star-outline"></i> Fancy Lightbox</a></li>          
          <li><a href="components-color-palette.html"><i class="zmdi zmdi-star-outline"></i> Color Palette</a></li>
        </ul>
      </li>
      <li>
        <a href="javaScript:void();" class="waves-effect">
          <i class="zmdi zmdi-chart"></i> <span>Charts</span>
          <i class="fa fa-angle-left float-right"></i>
        </a>
        <ul class="sidebar-submenu">
          <li><a href="charts-chartjs.html"><i class="zmdi zmdi-star-outline"></i> Chart JS</a></li>
          <li><a href="charts-morris.html"><i class="zmdi zmdi-star-outline"></i> Morris Charts</a></li>
          <li><a href="charts-sparkline.html"><i class="zmdi zmdi-star-outline"></i> Sparkline Charts</a></li>
          <li><a href="charts-peity.html"><i class="zmdi zmdi-star-outline"></i> Peity Charts</a></li>
          <li><a href="charts-c3-charts.html"><i class="zmdi zmdi-star-outline"></i> C3 Charts</a></li>
          <li><a href="charts-other.html"><i class="zmdi zmdi-star-outline"></i> Other Charts</a></li>
          <li><a href="charts-flot.html"><i class="zmdi zmdi-star-outline"></i> Flot Chart</a></li>
        </ul>
       </li>
     
     
    </ul>
   
   </div>
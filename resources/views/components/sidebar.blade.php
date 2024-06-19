<!-- Sidebar -->
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        {{-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> --}}
      </div>
      <div class="info">
        <a href="#" class="d-block"><b><h5>ADMIN PANEL</h5></b></a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        
            <li class="nav-item">
              <a href="{{ route('admin') }}" class="nav-link {{ request()->is('admin') ? ' active' : ''}}">
                <i class="nav-icon fa fa-home"></i>
                <p>
                  Dashboard
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('slider.index') }}" class="nav-link {{ request()->is('slider') ? ' active' : ''}}">
                <i class="nav-icon fa fa-image"></i>
                <p>
                  Slider
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('category.index') }}" class="nav-link {{ request()->is('category') ? ' active' : ''}}">
                <i class="nav-icon fa fa-list"></i>
                <p>
                  Category
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('collection.index') }}" class="nav-link {{ request()->is('collection') ? ' active' : ''}}">
                <i class="nav-icon fa fa-folder-open"></i>
                <p>
                  Collection
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('product.index') }}" class="nav-link {{ request()->is('product') ? ' active' : ''}}">
                <i class="nav-icon fa fa-shopping-cart"></i>
                <p>
                  Product
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('contact.index') }}" class="nav-link {{ request()->is('contact') ? ' active' : ''}}">
                <i class="nav-icon fa fa-phone"></i>
                <p>
                  Contact
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('careerier.index') }}" class="nav-link {{ request()->is('careerier') ? ' active' : ''}}">
                <i class="nav-icon fa fa-suitcase"></i>
                <p>
                  Career
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('digitals.index') }}" class="nav-link {{ request()->is('digital') ? ' active' : ''}}">
                <i class="nav-icon fa fa-file-pdf"></i>
                <p>
                  Digital Library
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('frontend.index')}}" class="nav-link">
                <i class="nav-icon fa fa-globe"></i>
                <p>
                  Frontend Page
                </p>
              </a>
            </li>

      </ul>
    </nav>
    <!-- /.sidebar-menu -->

  </div>
  <!-- /.sidebar -->
@php
use App\Models\Mode;
$modeMaintenance = Mode::where('name', 'maintenance')->first();    
@endphp

<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light">

    <!-- Left navbar links -->
    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
    </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <li>
            <form id="form-maintenance" action="{{route('ajax-maintenance')}}" method="post">
            @csrf
            @method('PUT')
                <label class="switch">
                    <input type="checkbox" name="maintenance" onchange="$('#form-maintenance').submit();" value="1" {{  ($modeMaintenance->value == 1 ? ' checked' : '') }}>
                    <span class="slider round"></span>
                </label>
            </form>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
            <i class="fa fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fa fa-power-off"></i>&nbsp;&nbsp;Logout
            </a>
        </li>
    </ul> 
</nav>
<!-- /.navbar -->
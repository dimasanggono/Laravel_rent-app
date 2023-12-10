    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="index3.html" class="nav-link">Home</a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
                <a href="#" class="nav-link">Contact</a>
            </li>
        </ul>

        <!-- Right navbar links -->
        <ul class="navbar-nav ml-auto">


            <!-- Notifications Dropdown Menu -->
            <li class="nav-item dropdown">
                <div class="btn-group">
                    <button type="button" class="btn btn-primary"> <i class="fa fa-user" aria-hidden="true"></i> {{Auth::user()->roles}}</button>
                    <button type="button" class="btn btn-default dropdown-toggle dropdown-icon" data-toggle="dropdown">
                        <span class="sr-only"></span>
                    </button>
                    <div class="dropdown-menu" role="menu">
                        <form action="{{'logout'}}" method="Post">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
            <img src="rental-app/image/logo.png" width="100%" alt="">
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user panel (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{url('template/dist/img/user2-160x160.jpg')}}" class=" img-circle elevation-2" alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">{{Auth::user()->name}}</a>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item">
                        <a href="{{route('dashboard')}}" class="nav-link {{request()->is('dashboard') ? 'active' : ''}}">
                            <i class="nav-icon fas fa-th"></i>
                            <p>
                                Dashboard
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('category.index')}}" class="nav-link {{request()->is('category*') ? 'active' : ''}}">
                            <i class="nav-icon fas fa-list"></i>
                            <p>
                                Categories
                            </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('product.index')}}" class="nav-link {{request()->is('product*') ? 'active' : ''}}">
                            <i class="nav-icon fas fa-boxes"></i>
                            <p>
                                Product
                            </p>
                        </a>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
<header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>EG</b></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Bhatti</b>danda</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('public/cd-admin/creatu/dist/img/avatar5.png')}}" class="user-image" alt="User Image">
                        <span class="hidden-xs">ADMIN</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="{{asset('public/cd-admin/creatu/dist/img/avatar5.png')}}" class="img-circle" alt="User Image">

                            <p>
                           
                                <small>test</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            {{-- <div class="pull-left">
                                <a href="#" class="btn btn-info btn-flat">Profile</a>
                            </div> --}}
                            <div class="pull-right">
                                <a href="{{url('adminlogout')}}" class="btn btn-danger btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>
                <!-- Control Sidebar Toggle Button -->
                <!-- <li>
                    <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                </li> -->
            </ul>
        </div>
    </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        
        <ul class="sidebar-menu">
            <li class="header">MAIN NAVIGATION</li>
           
            <li>
                <a href="{{ route('dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    {{-- <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span> --}}
                </a>
                {{-- <ul class="treeview-menu">
                    <li class="active"><a href="{{ route('dashboard') }}"><i class="fa fa-circle-o"></i>Dashboard v1</a></li>
                </ul> --}}
            </li>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-user"></i> <span>Admin</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="#"><i class="fa fa-circle-o"></i>Add New Admin</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i>View All Admin</a></li>
                </ul>
            </li>

             <li class="header">Seo</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-search"></i> <span>Seo</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="{{ route('serviceseo') }}"><i class="fa fa-circle-o"></i>Services</a></li>
                    <li><a href="{{ route('packageseo') }}"><i class="fa fa-circle-o"></i>Package</a></li>
                    <li><a href="{{ route('aboutseo') }}"><i class="fa fa-circle-o"></i>About</a></li>
                    <li><a href="{{ route('viewseo') }}"><i class="fa fa-circle-o"></i>ViewSeo</a></li>
                </ul>
            </li>


            
            <li class="header">Services</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-gears"></i> <span>Services</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('addservice')}}"><i class="fa fa-circle-o"></i>Add Services</a></li>
                    <li><a href="{{route('showservice')}}"><i class="fa fa-circle-o"></i>View Services </a></li>
                </ul>
            </li>

            <li class="header">Packages</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-clone"></i> <span>Packages</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('addpackage')}}"><i class="fa fa-circle-o"></i>Add New Packages</a></li>
                <li><a href="{{route('showpackage')}}"><i class="fa fa-circle-o"></i>View All Packages </a></li>
                </ul>
            </li>

            <li class="header">Gallery</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-file-image-o"></i> <span>Gallery</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('addimage')}}"><i class="fa fa-circle-o"></i>Add New Gallery</a></li>
                    <li><a href="{{route('showimage')}}"><i class="fa fa-circle-o"></i>View All Gallery</a></li>
                </ul>
            </li>

            <li class="header">Carousel</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-caret-square-o-left"></i> <span>Carousel</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('addcarousel')}}"><i class="fa fa-circle-o"></i>Add New Carousel</a></li>
                    <li><a href="{{route('showcarousel')}}"><i class="fa fa-circle-o"></i>View All Carousel</a></li>
                </ul>
            </li>
            <li class="header">Booking</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-hand-pointer-o"></i> <span>Booking</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('bookinginbox')}}"><i class="fa fa-circle-o"></i>Inbox</a></li>
                </ul>
            </li>
             <li class="header">Review</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-thumbs-o-up"></i> <span>Review</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('review')}}"><i class="fa fa-circle-o"></i>Add Review</a></li>
                    <li><a href="{{route('showreview')}}"><i class="fa fa-circle-o"></i>Show Review</a></li>
                </ul>
            </li>
             <li class="header">About</li>
             <li class="treeview">
                <a href="#">
                    <i class="fa  fa-map-marker"></i> <span>About</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('about')}}"><i class="fa fa-circle-o"></i>Add About</a></li>
                    <li><a href="{{route('showabout')}}"><i class="fa fa-circle-o"></i>Show About</a></li>
                </ul>
            </li>
            <li class="header">Contact</li>
            
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-envelope"></i> <span>Contact</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="{{route('contactinbox')}}"><i class="fa fa-circle-o"></i>inbox</a></li>
                </ul>
            </li>




            

                 

            </ul>
        </section>
        <!-- /.sidebar -->
    </aside>
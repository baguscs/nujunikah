<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    @stack('styles')

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #5F6F52">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center " href="{{ route('home') }}">
                <img src="{{ asset('images/dashboard/logo.png') }}" alt="" width="170"
                    style="margin-top: 100px">
            </a>

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->routeIs('home') ? 'active' : '' }}" style="margin-top: 120px">
                <a class="nav-link" href="{{ route('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item {{ request()->routeIs('vendors.*') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="{{ route('vendors.index') }}">
                    <i class="fas fa-fw fa-store"></i>
                    <span>Vendor</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('galleries.*') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="{{ route('galleries.index') }}">
                    <i class="fas fa-fw fa-images"></i>
                    <span>Gallery</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#">
                    <i class="fas fa-fw fa-lightbulb"></i>
                    <span>Tips & Tricks</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('users.*') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="{{ route('users.index') }}">
                    <i class="fas fa-fw fa-users"></i>
                    <span>Pegawai</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('events.*') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="{{ route('events.index') }}">
                    <i class="fas fa-fw fa-book"></i>
                    <span>Event</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('testimonials.*') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="{{ route('testimonials.index') }}">
                    <i class="fas fa-fw fa-star"></i>
                    <span>Testimoni</span>
                </a>
            </li>
            <li class="nav-item {{ request()->routeIs('notifications.*') ? 'active' : '' }}">
                <a class="nav-link collapsed" href="{{ route('notifications.index') }}">
                    <i class="fas fa-fw fa-bell"></i>
                    <span>Notifikasi</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <i class="fas
                    fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                @yield('content')
                @include('sweetalert::alert')
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('js/demo/datatables-demo.js') }}"></script>

    @stack('scripts')

</body>

</html>

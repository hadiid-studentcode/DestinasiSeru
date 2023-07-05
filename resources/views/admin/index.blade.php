<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Dashboard - Admin</title>
    <meta name="description" content="Halaman Admin website destinasiSeru">
    <link rel="stylesheet" href="{{ asset('admin/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="icon" href="{{ asset('/icon.png') }}">
</head>

<body id="page-top">
    <div id="wrapper">
        <nav class="navbar navbar-dark align-items-start sidebar sidebar-dark accordion bg-gradient-primary p-0"
            style="background: rgb(255,255,255);">
            <div class="container-fluid d-flex flex-column p-0"><a
                    class="navbar-brand d-flex justify-content-center align-items-center sidebar-brand m-0"
                    href="#">
                    <div class="sidebar-brand-icon rotate-n-15"><i class="fas fa-laugh-wink"></i></div>
                    <div class="sidebar-brand-text mx-3"><span>Admin</span></div>
                </a>
                <hr class="sidebar-divider my-0">
                <ul class="navbar-nav text-light" id="accordionSidebar">
                    <li class="nav-item"><a class="nav-link active" href="{{ url('/dashboard') }}"><i
                                class="fas fa-tachometer-alt"
                                style="color: rgb(106,106,106);height: 4.6px;font-size: 20px;"></i><span
                                style="color: #8c8c8c;font-size: 20px;">Dashboard</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/profile') }}"><i class="fas fa-user"
                                style="color: rgb(106,106,106);font-size: 20px;"></i><span
                                style="color: #8c8c8c;font-size: 20px;">Profile</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/blog') }}"><i class="fas fa-table"
                                style="color: rgb(106,106,106);font-size: 20px;"></i><span
                                style="color: #8c8c8c;font-size: 20px;">Blog</span></a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ url('/logout') }}"><i class="far fa-user-circle"
                                style="color: rgb(106,106,106);font-size: 20px;"></i><span
                                style="color: #8c8c8c;font-size: 20px;">Logout</span></a></li>

                </ul>
                <div class="text-center d-none d-md-inline"><button class="btn rounded-circle border-0"
                        id="sidebarToggle" type="button"></button></div>
            </div>
        </nav>
        <div class="d-flex flex-column" id="content-wrapper">
            <div id="content">
                <nav class="navbar navbar-light navbar-expand bg-white shadow mb-4 topbar static-top">
                    <div class="container-fluid"><button class="btn btn-link d-md-none rounded-circle me-3"
                            id="sidebarToggleTop" type="button"><i class="fas fa-bars"></i></button>

                        <ul class="navbar-nav flex-nowrap ms-auto">



                            <div class="d-none d-sm-block topbar-divider"></div>
                            <li class="nav-item dropdown no-arrow">
                                <div class="nav-item dropdown no-arrow"><a class="dropdown-toggle nav-link"
                                        aria-expanded="false" data-bs-toggle="dropdown" href="#"><span
                                            class="d-none d-lg-inline me-2 text-gray-600 small">{{ $username }}</span><img
                                            class="border rounded-circle img-profile"
                                            src="{{ asset('admin/assets/img/avatars/' . $picture) }}"></a>

                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>
                <div class="container-fluid">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                        <h3 class="text-dark mb-0">Dashboard</h3>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-primary py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-primary fw-bold text-xs mb-1">
                                                <span>Blog</span>
                                            </div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>{{ $countBlog }}</span>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-xl-3 mb-4">
                            <div class="card shadow border-start-success py-2">
                                <div class="card-body">
                                    <div class="row align-items-center no-gutters">
                                        <div class="col me-2">
                                            <div class="text-uppercase text-success fw-bold text-xs mb-1">
                                                <span>Users</span>
                                            </div>
                                            <div class="text-dark fw-bold h5 mb-0"><span>{{ $countUsers }}</span>
                                            </div>
                                        </div>
                                        <div class="col-auto"><i class="fas fa-users fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
                   

                </div>
            </div>
            <footer class="bg-white sticky-footer">
                <div class="container my-auto">
                    <div class="text-center my-auto copyright"><span>Copyright © Admin 2023</span></div>
                </div>
            </footer>
        </div><a class="border rounded d-inline scroll-to-top" href="#page-top"><i class="fas fa-angle-up"></i></a>
    </div>
    <script src="{{ asset('admin/assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bs-init.js') }}"></script>
    <script src="{{ asset('admin/assets/js/theme.js') }}"></script>



  

</body>

</html>

<!DOCTYPE html>
<html data-bs-theme="light" lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Blog - Admin</title>
    <meta name="description" content="Halaman Admin website destinasiSeru">
    <link rel="stylesheet" href="{{ asset('admin/assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"
        integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
      <link rel="icon" href="{{ asset('/icon.png') }}">

    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>

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
                    <h3 class="text-dark mb-4">Blog</h3>
                    <div class="card shadow">
                        <div class="card-header py-3">

                            <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahBlog">Tambah
                                Blog</button>

                            {{-- modal tambah blog --}}
                            <!-- Modal -->
                            <div class="modal modal-xl fade" id="tambahBlog" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form action="{{ url('blog') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Blog</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                    aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">

                                                <div class="mb-3">
                                                    <label for="title" class="form-label">Title</label>
                                                    <input type="text" class="form-control" id="titile"
                                                        aria-describedby="emailHelp" name="title" required>

                                                </div>
                                                <div class="mb-3">
                                                    <label for="exampleInputPassword1"
                                                        class="form-label">Content</label>
                                                  <textarea class="form-control" id="floatingTextarea" name="content" rows="10" cols="50" required></textarea>


                                                </div>
                                                <div class="mb-3 f">
                                                    <label for="formFile" class="form-label">Input Image</label>
                                                    <input class="form-control" type="file" id="formFile"
                                                        name="image" required>
                                                </div>

                                    </form>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary"
                                        data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">

                    <table class="display table my-0" id="dataTable">
                        <thead>
                            <tr>
                                <th>Title</th>
                                <th>content</th>
                                <th>author</th>
                                <th>image</th>
                                <th>action</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($blogs as $blog)
                                <tr>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->content }}</td>
                                    <td>{{ $blog->first_name }} {{ $blog->last_name }}</td>
                                    <td>

                                        <img class="img-fluid" width="300"
                                            src="{{ asset('assets/img/content/' . $blog->image) }}">


                                    </td>
                                    <td>
                                        <div class="btn-group" role="group"
                                            aria-label="Basic mixed styles example">
                                          

                                            <form action="{{ url('blog/'.$blog->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')


                                             <button type="submit" class="btn btn-danger" onclick="return confirm('Do you want to delete this blog?')">Hapus</button>

                                            </form>


                                        </div>


                                    </td>

                                </tr>
 @endforeach





                        </tbody>

                    </table>

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
    <script src="{{ asset('admin/assets/js/chart.min.js') }}"></script>
    <script src="{{ asset('admin/assets/js/bs-init.js') }}"></script>
    <script src="{{ asset('admin/assets/js/theme.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>

</body>

</html>

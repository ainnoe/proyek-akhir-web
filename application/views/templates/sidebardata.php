<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title></title>

    <!-- Custom fonts for this template-->
    <link href="http://localhost/PelanggaranSiswa/assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://localhost/PelanggaranSiswa/assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper"> <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-code"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Pelanggaran Siswa</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider">


            <!-- QUERY MENU -->


            <!-- LOOPING MENU -->
            <div class="sidebar-heading">
                admin </div>

            <!-- SIAPKAN SUB-MENU SESUAI MENU -->

            <li class="nav-item active">
                <a class="nav-link pb-0" href="http://localhost/PelanggaranSiswa/admin">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="http://localhost/PelanggaranSiswa/admin/role">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span>Role</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="http://localhost/PelanggaranSiswa/admin/DataSiswa">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span>Data Siswa</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="http://localhost/PelanggaranSiswa/admin/DataGuru">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span>Data Guru</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="http://localhost/PelanggaranSiswa/admin/DataLaporan">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span>Data Laporan</span></a>
            </li>

            <hr class="sidebar-divider mt-3">

            <div class="sidebar-heading">
                menu </div>

            <!-- SIAPKAN SUB-MENU SESUAI MENU -->

            <li class="nav-item">
                <a class="nav-link pb-0" href="http://localhost/PelanggaranSiswa/menu">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Menu Management</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="http://localhost/PelanggaranSiswa/menu/submenu">
                    <i class="fas fa-fw fa-folder-open"></i>
                    <span>Submenu Management</span></a>
            </li>

            <hr class="sidebar-divider mt-3">

            <div class="sidebar-heading">
                user </div>

            <!-- SIAPKAN SUB-MENU SESUAI MENU -->

            <li class="nav-item">
                <a class="nav-link pb-0" href="http://localhost/PelanggaranSiswa/user">
                    <i class="fas fa-fw fa-user"></i>
                    <span>My Profile</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link pb-0" href="http://localhost/PelanggaranSiswa/user/menuutama">
                    <i class="fas fa-fw fa-user-tie"></i>
                    <span>Menu utama</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="http://localhost/PelanggaranSiswa/auth/logout">
                    <i class="fas fa-fw fa-sign-out-alt"></i>
                    <span>Logout</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End  of Sidebar --> <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                My Profile
                            </a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="http://localhost/PelanggaranSiswa/auth/logout" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Logout
                            </a>
                        </div>


                    </ul>

                </nav>


            </div>

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal -->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="http://localhost/PelanggaranSiswa/auth/logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="http://localhost/PelanggaranSiswa/assets/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/PelanggaranSiswa/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="http://localhost/PelanggaranSiswa/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="http://localhost/PelanggaranSiswa/assets/js/sb-admin-2.min.js"></script>

    <script>
        $('.custom-file-input').on('change', function() {
            let fileName = $(this).val().split('\\').pop();
            $(this).next('.custom-file-label').addClass("selected").html(fileName);
        });



        $('.form-check-input').on('click', function() {
            const menuId = $(this).data('menu');
            const roleId = $(this).data('role');

            $.ajax({
                url: "http://localhost/PelanggaranSiswa/admin/changeaccess",
                type: 'post',
                data: {
                    menuId: menuId,
                    roleId: roleId
                },
                success: function() {
                    document.location.href = "http://localhost/PelanggaranSiswa/admin/roleaccess/" + roleId;
                }
            });

        });
    </script>

</body>

</html>
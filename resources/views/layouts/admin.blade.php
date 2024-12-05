@php
    use Illuminate\Support\Facades\Auth;
@endphp
    <!doctype html>
<html lang="es-ES">


<!-- Mirrored from www.change.org/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Sep 2021 05:35:03 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Change.org admin site</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('vendor/assets/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/assets/vendors/iconfonts/ionicons/dist/css/ionicons.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/assets/vendors/iconfonts/flag-icon-css/css/flag-icon.min.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/assets/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('vendor/assets/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('vendor/assets/vendors/iconfonts/font-awesome/css/font-awesome.min.css')}}" />

    <link rel="stylesheet" href="{{asset('vendor/assets/css/shared/style.css')}}">
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{asset('vendor/assets/css/demo_1/style.css')}}">
    <!-- End Layout styles -->
    <link rel="shortcut icon" href="{{asset('vendor/favicon/favicon-48x48.webp')}}">
</head>
<body  >

<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
            <a class="navbar-brand brand-logo" href="{{route('adminpeticiones.index')}}">
                <img src="{{asset('images/logo2.png')}}" alt="logo" /> </a>
            <a class="navbar-brand brand-logo-mini" href="{{route('adminpeticiones.index')}}">
                <img src="{{asset('vendor/assets/images/logo-mini.svg')}}" alt="logo" /> </a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-center">

            <form class="ml-auto search-form d-none d-md-block" action="#">
                <div class="form-group">
                    <input type="search" class="form-control" placeholder="Search Here">
                </div>
            </form>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="messageDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <i class="mdi mdi-bell-outline"></i>
                        <span class="count">7</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="messageDropdown">
                        <a class="dropdown-item py-3">
                            <p class="mb-0 font-weight-medium float-left">You have 7 unread mails </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{{asset('vendor/assets/images/faces/face10.jpg')}}" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Marian Garner </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{{asset('vendor/assets/images/faces/face12.jpg')}}" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">David Grey </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item">
                            <div class="preview-thumbnail">
                                <img src="{{asset('vendor/assets/images/faces/face1.jpg')}}" alt="image" class="img-sm profile-pic">
                            </div>
                            <div class="preview-item-content flex-grow py-2">
                                <p class="preview-subject ellipsis font-weight-medium text-dark">Travis Jenkins </p>
                                <p class="font-weight-light small-text"> The meeting is cancelled </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link count-indicator" id="notificationDropdown" href="#" data-toggle="dropdown">
                        <i class="mdi mdi-email-outline"></i>
                        <span class="count bg-success">3</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list pb-0" aria-labelledby="notificationDropdown">
                        <a class="dropdown-item py-3 border-bottom">
                            <p class="mb-0 font-weight-medium float-left">You have 4 new notifications </p>
                            <span class="badge badge-pill badge-primary float-right">View all</span>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-alert m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">Application Error</h6>
                                <p class="font-weight-light small-text mb-0"> Just now </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-settings m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">Settings</h6>
                                <p class="font-weight-light small-text mb-0"> Private message </p>
                            </div>
                        </a>
                        <a class="dropdown-item preview-item py-3">
                            <div class="preview-thumbnail">
                                <i class="mdi mdi-airballoon m-auto text-primary"></i>
                            </div>
                            <div class="preview-item-content">
                                <h6 class="preview-subject font-weight-normal text-dark mb-1">New user registration</h6>
                                <p class="font-weight-light small-text mb-0"> 2 days ago </p>
                            </div>
                        </a>
                    </div>
                </li>
                <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                    <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                        <img class="img-xs rounded-circle" src="{{asset('vendor/assets/images/faces/face8.jpg')}}" alt="Profile image"> </a>
                    <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                        <div class="dropdown-header text-center">
                            <img class="img-md rounded-circle" src="{{asset('vendor/assets/images/faces/face8.jpg')}}" alt="Profile image">
                            <p class="mb-1 mt-3 font-weight-semibold"><?=Auth::user()->name?></p>
                            <p class="font-weight-light text-muted mb-0"><?=Auth::user()->email?></p>
                        </div>
                        <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>
                        <a class="dropdown-item"href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout').submit();" >Sign Out<i class="dropdown-item-icon ti-power-off"></i></a>
                        <form id="logout" action="{{route('logout')}}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <a href="#" class="nav-link">
                        <div class="profile-image">
                            <img class="img-xs rounded-circle" src="{{asset('vendor/assets/images/faces/face8.jpg')}}" alt="profile image">
                            <div class="dot-indicator bg-success"></div>
                        </div>
                        <div class="text-wrapper">
                            <p class="profile-name">{{Auth::user()->name}}</p>
                        </div>
                    </a>
                </li>
                <li class="nav-item nav-category">Main Menu</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('adminpeticiones.index')}}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Peticiones</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('admincategorias.index')}}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Categorias</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('adminusers.index')}}">
                        <i class="menu-icon typcn typcn-document-text"></i>
                        <span class="menu-title">Usuarios</span>
                    </a>
                </li>

            </ul>
        </nav>
        <!-- partial -->
        <div class="main-panel">


            @yield('content')


        </div>
        <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{asset('vendor/assets/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('vendor/assets/vendors/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset("vendor/assets/js/shared/off-canvas.js")}}"></script>
<script src="{{asset("vendor/assets/js/shared/misc.js")}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset("vendor/assets/js/demo_1/dashboard.js")}}"></script>
<!-- End custom js for this page-->
</body>
</html>

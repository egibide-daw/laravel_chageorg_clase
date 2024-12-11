@php
    use Illuminate\Support\Facades\Auth;
@endphp
    <!DOCTYPE html>
<html lang="en">
<head>
    <title>Change.org</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilos.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>


<nav class="navbar navbar-expand-sm bg-light navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand text-danger fs-2" href="">Change.org</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="collapsibleNavbar">
            <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <a class="nav-link fs-4 m-2" href="{{route('peticiones.index')}}">Peticiones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4 m-2" href="{{route('peticiones.add')}}">Inicia una petición</a>
                </li>
                <?php if (Auth::check() ){?>
                <li class="nav-item">
                    <a class="nav-link fs-4 m-2" href="{{route('peticiones.mine')}}">Mis peticiones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fs-4 m-2" href="">Mis firmas</a>
                </li>
                <?php }?>
                <?php if (Auth::check() && Auth::user()->role_id==2){ ?>
                <li class="nav-item">
                    <a class="nav-link fs-4 m-2 link-danger" href="{{}}">Admin</a>
                </li>
                <?php } ////route('adminpeticiones.index')?>

            </ul>
        </div>

        <?php if(Auth::check()){?>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown d-none d-xl-inline-block user-dropdown">
                <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                    <img class="img-xs rounded-circle" src="{{asset('vendor/assets/images/faces/face8.jpg')}}" alt="Profile image"> </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                    <div class="dropdown-header text-center">
                        <p class="mb-1 mt-3 font-weight-semibold"><?=Auth::user()->name?></p>
                        <p class="font-weight-light text-muted mb-0"><?=Auth::user()->email?></p>
                    </div>
                    <a class="dropdown-item">My Profile <span class="badge badge-pill badge-danger">1</span><i class="dropdown-item-icon ti-dashboard"></i></a>

                    <a class="dropdown-item"href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout').submit();" >Sign Out<i class="dropdown-item-icon ti-dashboard"></i></a>
                    <form id="logout" action="{{route('logout')}}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>

        <?php }else{  ?>
        <a class="nav-link fs-5 m-2 link-danger" href="{{route('register')}}">Register</a><!--//route('register')-->
        <a class="nav-link fs-5 m-2 link-danger" href="{{route('login')}}">Login</a>
        <?php } ?>

    </div>
</nav>


@yield('content')



<footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section
        class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
    >


        <!-- Right -->
        <div>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 text-reset">
                <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
        <div class="container text-center text-md-start mt-5">

            <!-- Grid row -->
            <div class="row mt-3">


                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        ACERCA DE
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Sobre Change.org</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Impacto</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Empleo</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Equipo</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        COMUNIDAD
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Blog</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Prensa</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        AYUDA
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Ayuda</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Guías</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Privacidad</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Políticas</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Cookies</a>
                    </p>
                </div>
                <!-- Grid column -->





                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase fw-bold mb-4">
                        REDES SOCIALES
                    </h6>
                    <p>
                        <a href="#!" class="text-reset">Twitter</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Facebook</a>
                    </p>
                    <p>
                        <a href="#!" class="text-reset">Instagram</a>
                    </p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>

    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2022, Change.org, PBC
        <a class="text-reset fw-bold" href="https://change.org/">Change.org</a>
    </div>

</footer>
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
</body>
</html>



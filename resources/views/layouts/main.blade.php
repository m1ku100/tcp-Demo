<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- css -->
    <link href="{{asset('lezir/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('lezir/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('lezir/css/style.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('sweetalert/sweetalert.css')}}">
    <link rel="stylesheet" href="{{asset('summernote/summernote.min.css')}}">
    <link rel="stylesheet" href="{{asset('datatable/datatables.min.css')}}">
    @yield('css_script')
</head>

<body>

<!-- Loader -->
{{--<div id="preloader">--}}
{{--    <div id="status">--}}
{{--        <div class="spinner"></div>--}}
{{--    </div>--}}
{{--</div>--}}

<!--Navbar Start-->
    @include('layouts.partial.header')
<!-- Navbar End -->

@yield('main_content')

<!-- Footer Start -->
@guest()
<section class="footer" style="background-image: url(images/footer-bg.png)">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="mb-5">
                    <img src="images/logo-light.png" alt="" class="" height="24">
                    <p class="text-white-50 my-4 font-size-15">Cras ultricies mi eu turpis sit hendrerit fringilla vestibulum ante ipsum primis in faucibus ultrices posuere cubilia.</p>
                    <ul class="list-inline footer-social-icon-content">
                        <li class="list-inline-item mr-4"><a href="#" class="footer-social-icon"><i class="" data-feather="facebook"></i></a></li>
                        <li class="list-inline-item mr-4"><a href="#" class="footer-social-icon"><i class="" data-feather="twitter"></i></a></li>
                        <li class="list-inline-item mr-4"><a href="#" class="footer-social-icon"><i class="" data-feather="instagram"></i></a></li>
                        <li class="list-inline-item"><a href="#" class="footer-social-icon"><i class="" data-feather="linkedin"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 offset-lg-1">
                <div class="row">
                    <div class="col-md-4">
                        <h6 class="text-white text-uppercase mb-4">About Us</h6>
                        <ul class="list-unstyled footer-sub-menu">
                            <li><a href="#" class="footer-link">Works</a></li>
                            <li><a href="#" class="footer-link">Strategy</a></li>
                            <li><a href="#" class="footer-link">Releases</a></li>
                            <li><a href="#" class="footer-link">Press</a></li>
                            <li><a href="#" class="footer-link">Mission</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-white text-uppercase mb-3">Customers</h6>
                        <ul class="list-unstyled footer-sub-menu">
                            <li><a href="#" class="footer-link">Tranding</a></li>
                            <li><a href="#" class="footer-link">Popular</a></li>
                            <li><a href="#" class="footer-link">Customers</a></li>
                            <li><a href="#" class="footer-link">Features</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <h6 class="text-white text-uppercase mb-3">Support</h6>
                        <ul class="list-unstyled footer-sub-menu">
                            <li><a href="#" class="footer-link">Developers</a></li>
                            <li><a href="#" class="footer-link">Support</a></li>
                            <li><a href="#" class="footer-link">Customer Service</a></li>
                            <li><a href="#" class="footer-link">Get Started</a></li>
                            <li><a href="#" class="footer-link">Guide</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="footer-alt py-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="text-center">
                    <p class="text-white-50 font-size-15 mb-0">2020 © Lezir. Design By Themesbrand</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endguest
<!-- Footer End -->

<!-- login Modal Start -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <h3 class="title mb-4">Welcome To Lezir</h3>
                    <h4 class="text-uppercase text-primary"><b>Login</b></h4>
                </div>
                <div class="login-form mt-4">
                    <form action="{{route('login')}}" method="post">
                        @CSRF
                        <div class="form-group">
                            <label for="exampleInputEmail1">Username / Email</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Youremail@gmail.com" name="username" required>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
                        </div>
                        <a href="#" class="float-right text-muted font-size-15">Forgot Password.?</a>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                            <label class="custom-control-label font-size-15" for="customCheck1">Remember Me</label>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Login <i class="icon-size-15 icon ml-1" data-feather="arrow-right-circle"></i></button>
                        </div>
                    </form>
{{--                    <div class="position-relative text-center mt-4">--}}
{{--                        <span class="login-border"></span>--}}
{{--                        <p class="social-login text-muted font-size-17">Social Login</p>--}}
{{--                    </div>--}}
{{--                    <div class="text-center">--}}
{{--                        <ul class="list-inline mt-2 mb-3">--}}
{{--                            <li class="list-inline-item mr-3"><a href="#" class="login-social-icon icon-primary"><i class="icon-xs" data-feather="facebook"></i></a></li>--}}
{{--                            <li class="list-inline-item mr-3"><a href="#" class="login-social-icon icon-info"><i class="icon-xs" data-feather="twitter"></i></a></li>--}}
{{--                            <li class="list-inline-item mr-3"><a href="#" class="login-social-icon icon-danger"><i class="icon-xs" data-feather="instagram"></i></a></li>--}}
{{--                            <li class="list-inline-item"><a href="#" class="login-social-icon icon-success"><i class="icon-xs" data-feather="linkedin"></i></a></li>--}}
{{--                        </ul>--}}
{{--                        <p class="text-muted mb-0">New User? <a href="#" class="text-primary">Signup</a></p>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login Modal End -->

<!-- Register Modal Start-->
<div class="modal fade" id="exampleModalCenter-1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-body">
                <div class="text-center">
                    <h3 class="title mb-4">Welcome To Lezir</h3>
                    <h4 class="text-uppercase text-primary"><b>Register</b></h4>
                </div>
                <div class="login-form mt-4">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputUsername">User Name</label>
                            <input type="text" class="form-control" id="exampleInputUsername" placeholder="Enter Name">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail2">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Youremail@gmail.com">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword2">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                        </div>
                        <a href="#" class="float-right text-muted font-size-15">Forgot Password.?</a>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                            <label class="custom-control-label font-size-15" for="customCheck2">Remember Me</label>
                        </div>
                        <div class="text-center mt-4">
                            <button type="submit" class="btn btn-primary">Register <i class="icon-size-15 icon ml-1" data-feather="arrow-right-circle"></i></button>
                        </div>
                    </form>
                    <div class="position-relative text-center mt-4">
                        <span class="login-border"></span>
                        <p class="social-login text-muted font-size-17">Social Login</p>
                    </div>
                    <div class="text-center">
                        <ul class="list-inline mt-2 mb-3">
                            <li class="list-inline-item mr-3"><a href="#" class="login-social-icon icon-primary"><i class="icon-xs" data-feather="facebook"></i></a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="login-social-icon icon-info"><i class="icon-xs" data-feather="twitter"></i></a></li>
                            <li class="list-inline-item mr-3"><a href="#" class="login-social-icon icon-danger"><i class="icon-xs" data-feather="instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="login-social-icon icon-success"><i class="icon-xs" data-feather="linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Register Modal Start-->


<!-- javascript -->
<script src="{{asset('lezir/js/jquery.min.js')}}"></script>
<script src="{{asset('bootstrap/js/bootstrap.bundle.js')}}"></script>
<script src="{{asset('lezir/js/scrollspy.min.js')}}"></script>
<script src="{{asset('lezir/js/jquery.easing.min.js')}}"></script>
<script src="{{asset('sweetalert/sweetalert.min.js')}}"></script>
<script src="{{asset('summernote/summernote.min.js')}}"></script>
<!-- feather icon -->
<script src="{{asset('lezir/js/feather.js')}}"></script>
<!-- unicons icon -->
<script src="{{asset('lezir/js/unicons.js')}}"></script>
<!-- Main Js -->
<script src="{{asset('lezir/js/app.js')}}"></script>
<script src="{{asset('jquery.form.min.js')}}"></script>
<script src="{{asset('datatable/datatables.min.js')}}"> </script>
<script>

    $(document).ready(function() {
        $('#myTable').DataTable();

        $('#summernote').summernote({
            toolbar: [
                // [groupName, [list of button]]
                ['style', ['bold', 'italic', 'underline', 'clear']],
                ['font', ['strikethrough', 'superscript', 'subscript']],
                ['fontsize', ['fontsize']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['height', ['height']]
            ]
        });
    });
</script>
@include('layouts.partial.alert')
@stack('script')
</body>
</html>

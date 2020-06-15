<nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
    @guest()
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="index.html">
                <img src="images/logo-dark.png" alt="" class="logo-dark" height="24"/>
                <img src="images/logo-light.png" alt="" class="logo-light" height="24"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#features" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a href="#pricing" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a href="#blog" class="nav-link">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-center">
                    <li class="nav-item">
                        <a href="#login" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">Log
                            in</a>
                    </li>
                    <li class="nav-item">
                        <a href="#login" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter-1">Register</a>
                    </li>
                </ul>
            </div>
        </div>
    @else
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="index.html">
                <img src="images/logo-dark.png" alt="" class="logo-dark" height="24"/>
                <img src="images/logo-light.png" alt="" class="logo-light" height="24"/>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">

                </ul>
                <ul class="navbar-nav navbar-center">

                    <li class="nav-item">
                        <a href="#login" class="nav-link" onclick="_logout()">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    @endguest
    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
</nav>

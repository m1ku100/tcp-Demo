@extends('layouts.main')
@section('title','Selamat Datang ')
@section('main_content')
    <!-- Hero Start -->
    <section class="hero-1-bg" style="background-image: url(images/hero-1-bg-img.png)" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <h1 class="hero-1-title text-dark font-weight-bold text-shadow mb-4">Creative Landing Page</h1>
                    <div class="w-75 mb-5 mb-lg-0">
                        <p class="text-muted mb-5 pb-5 font-size-17">A creative & modern landing page with Lezir
                            template & We love make things amazing.</p>
                        <p class=""><span class="font-size-20 mr-2">🥳️</span>Nemo enim ipsam voluptatem quia voluptas
                            sit aspernatur that is fugit.</p>
                        <div class="subscribe-form">
                            <form action="#">
                                <input type="text" placeholder="Enter  email...">
                                <button type="submit" class="btn btn-primary">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class=" mt-5 mt-lg-0">
                        <img src="images/hero-1-img.png" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- Why Choose Us Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="mb-4 mb-lg-0">
                        <div class="p-2 bg-soft-primary d-inline-block rounded mb-4">
                            <div class="icon-xxl uim-icon-primary"><i class="uim uim-cube"></i></div>
                        </div>
                        <h3 class="">Why Choose Us ?</h3>
                        <p class="text-muted mb-4">Nam libero tempore cum soluta as nobis est eligendi optio cumque
                            nihile impedite quo minus id quod maxime.</p>
                        <a href="#" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="wc-box rounded text-center wc-box-primary p-4 mt-md-5">
                                <div class="wc-box-icon">
                                    <i class="mdi mdi-collage"></i>
                                </div>
                                <h5 class="font-weight-bold mb-2 wc-title mt-4">Esay To Use</h5>
                                <p class="text-muted mb-0 font-size-15 wc-subtitle">Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem.</p>
                            </div>
                            <div class="wc-box rounded text-center wc-box-primary p-4">
                                <div class="wc-box-icon">
                                    <i class="mdi mdi-trending-up"></i>
                                </div>
                                <h5 class="font-weight-bold mb-2 wc-title mt-4">Grow Your Revenue</h5>
                                <p class="text-muted mb-0 font-size-15 wc-subtitle">Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="wc-box rounded text-center wc-box-primary p-4">
                                <div class="wc-box-icon">
                                    <i class="mdi mdi-security"></i>
                                </div>
                                <h5 class="font-weight-bold mb-2 wc-title mt-4">Analytics Security</h5>
                                <p class="text-muted mb-0 font-size-15 wc-subtitle">Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem.</p>
                            </div>
                            <div class="wc-box rounded text-center wc-box-primary p-4">
                                <div class="wc-box-icon">
                                    <i class="mdi mdi-database-lock"></i>
                                </div>
                                <h5 class="font-weight-bold mb-2 wc-title mt-4">Data Privacy</h5>
                                <p class="text-muted mb-0 font-size-15 wc-subtitle">Sed ut perspiciatis unde omnis iste
                                    natus error sit voluptatem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us End -->

    <!-- Features Start -->
    <section class="section bg-light feather-bg-img" style="background-image: url(images/features-bg-img.png);"
             id="features">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3 class="title mb-3">Awesome Features</h3>
                        <p class="text-muted font-size-15">Et harum quidem rerum facilis est et expedita distinctio nam
                            libero tempore cum soluta nobis eligendi cumque.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mb-4 mb-lg-0">
                        <img src="images/features-img.png" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1">
                    <p class="font-weight-medium text-uppercase mb-2"><i
                            class="mdi mdi-chart-bubble h2 text-primary mr-1 align-middle"></i> Creative Features</p>
                    <h3 class="font-weight-semibold line-height-1_4 mb-4">Build <b>community</b> & <b>conversion</b>
                        with our suite of <b>social tool</b></h3>
                    <p class="text-muted font-size-15 mb-4">Temporibus autem quibusdam et aut officiis debitis aut rerum
                        a necessitatibus saepe eveniet ut et voluptates repudiandae sint molestiae non recusandae
                        itaque.</p>
                    <p class="text-muted mb-2"><i class="icon-xs mr-1" data-feather="layout"></i> Donec pede justo
                        fringilla vel nec.</p>
                    <p class="text-muted"><i class="icon-xs mr-1" data-feather="life-buoy"></i> Cras ultricies mi eu
                        turpis hendrerit fringilla.</p>
                    <div class="mt-5">
                        <a href="" class="btn btn-primary mr-2">Read More</a>
                        <a href="#" class="btn btn-soft-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section feather-bg-img" style="background-image: url(images/features-bg-img-1.png)">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <p class="font-weight-medium text-uppercase mb-2"><i
                            class="mdi mdi-chart-bubble h2 text-primary mr-1 align-middle"></i> Creative Features</p>
                    <h3 class="font-weight-semibold line-height-1_4 mb-4">We do the work you <b>stay focused</b> on <b>your
                            customers</b>.</h3>
                    <!-- <h3 class="font-weight-semibold line-height-1_4 mb-4">Build <b>community</b> & <b>conversion</b> with our suite of <b>social tool</b></h3> -->
                    <p class="text-muted font-size-15 mb-4">Temporibus autem quibusdam et aut officiis debitis aut rerum
                        a necessitatibus saepe eveniet ut et voluptates repudiandae sint molestiae non recusandae
                        itaque.</p>
                    <p class="text-muted mb-2"><i class="icon-xs mr-1" data-feather="server"></i> Donec pede justo
                        fringilla vel nec.</p>
                    <p class="text-muted"><i class="icon-xs mr-1" data-feather="rss"></i> Cras ultricies mi eu turpis
                        hendrerit fringilla.</p>
                    <div class="mt-5">
                        <a href="#" class="btn btn-primary mr-2">Read More</a>
                        <a href="#" class="btn btn-soft-primary">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="mt-4 mt-lg-0">
                        <img src="images/features-img-1.png" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features End -->

    <!-- Pricing Start -->
    <section class="section bg-light" id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3 class="title mb-3">Choose Your Plan</h3>
                        <p class="text-muted font-size-15">Et harum quidem rerum facilis est et expedita distinctio nam
                            libero tempore cum soluta nobis eligendi cumque.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-box rounded text-center p-4">
                        <div class="pricing-icon-bg my-4">
                            <i class="mdi mdi-account h1"></i>
                        </div>
                        <h4 class="title mb-3">Simple</h4>
                        <h1 class="font-weight-bold mb-0"><b><sup class="h4 mr-2 font-weight-bold">$</sup>19</b></h1>
                        <p class="text-muted font-weight-semibold">User / Month</p>
                        <ul class="list-unstyled pricing-item mb-4">
                            <li class="text-muted">Bandwidth: 1GB</li>
                            <li class="text-muted">Onlinespace: 500MB</li>
                            <li class="text-muted">Support: Yes</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary pr-btn">Buy Now</a>
                        <div class="mt-4">
                            <div class="hero-bottom-img">
                                <img src="images/pricing-bottom-bg.png" alt="" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-box rounded text-center active p-4">
                        <div class="pricing-icon-bg my-4">
                            <i class="mdi mdi-account-multiple h1"></i>
                        </div>
                        <h4 class="title mb-3">Basic</h4>
                        <h1 class="font-weight-bold mb-0"><b><sup class="h4 mr-2 font-weight-bold">$</sup>49</b></h1>
                        <p class="text-muted font-weight-semibold">User / Month</p>
                        <ul class="list-unstyled pricing-item mb-4">
                            <li class="text-muted">Bandwidth: 2GB</li>
                            <li class="text-muted">Onlinespace: 1GB</li>
                            <li class="text-muted">Support: Yes</li>
                        </ul>
                        <a href="#" class="btn btn-primary pr-btn">Buy Now</a>
                        <div class="mt-4">
                            <div class="hero-bottom-img">
                                <img src="images/pricing-bottom-bg.png" alt="" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-box rounded text-center p-4">
                        <div class="pricing-icon-bg my-4">
                            <i class="mdi mdi-account-group h1"></i>
                        </div>
                        <h4 class="title mb-3">Pro</h4>
                        <h1 class="font-weight-bold mb-0"><b><sup class="h4 mr-2 font-weight-bold">$</sup>89</b></h1>
                        <p class="text-muted font-weight-semibold">User / Month</p>
                        <ul class="list-unstyled pricing-item mb-4">
                            <li class="text-muted">Bandwidth: 3GB</li>
                            <li class="text-muted">Onlinespace: 1.5GB</li>
                            <li class="text-muted">Support: Yes</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary pr-btn">Buy Now</a>
                        <div class="mt-4">
                            <div class="hero-bottom-img">
                                <img src="images/pricing-bottom-bg.png" alt="" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing End -->

    <!-- Blog start -->
    <section class="section" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3 class="title mb-3">Latest News</h3>
                        <p class="text-muted font-size-15">Et harum quidem rerum facilis est et expedita distinctio nam
                            libero tempore cum soluta nobis eligendi cumque.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="blog-box mb-4 mb-lg-0">
                        <img src="images/blog/img-1.jpg" alt="" class="img-fluid d-block mx-auto rounded">
                        <ul class="list-inline text-muted text-uppercase font-size-15 font-weight-medium mt-3 mb-2">
                            <li class="list-inline-item mr-3"><i class="icon-size-15 icon mr-1"
                                                                 data-feather="calendar"></i> April 10 2020
                            </li>
                            <li class="list-inline-item"><i class="icon-size-15 icon mr-1" data-feather="user"></i>
                                Admin
                            </li>
                        </ul>
                        <a href="#" class="text-dark font-weight-bold h5">Best Traveling Place</a>
                        <p class="text-muted font-size-15">Integer ante arcu accumsan a consectetuer eget posuere mauris
                            praesent adipiscing phasellus ullamcorper ipsum rutrum punc.</p>
                        <a href="#" class="text-primary font-weight-semibold">Learn More <span class="ml-2 right-icon">&#8594;</span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-box blog-box mb-4 mb-lg-0">
                        <img src="images/blog/img-2.jpg" alt="" class="img-fluid d-block mx-auto rounded">
                        <ul class="list-inline text-muted text-uppercase font-size-15 font-weight-medium mt-3 mb-2">
                            <li class="list-inline-item mr-3"><i class="icon-size-15 icon mr-1"
                                                                 data-feather="calendar"></i> April 11 2020
                            </li>
                            <li class="list-inline-item"><i class="icon-size-15 icon mr-1" data-feather="user"></i>
                                Admin
                            </li>
                        </ul>
                        <a href="#" class="text-dark font-weight-bold h5">Private Meeting Room</a>
                        <p class="text-muted font-size-15">Integer ante arcu accumsan a consectetuer eget posuere mauris
                            praesent adipiscing phasellus ullamcorper ipsum rutrum punc.</p>
                        <a href="#" class="text-primary font-weight-semibold">Learn More <span class="ml-2 right-icon">&#8594;</span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog-box blog-box mb-4 mb-lg-0">
                        <img src="images/blog/img-3.jpg" alt="" class="img-fluid d-block mx-auto rounded">
                        <ul class="list-inline text-muted text-uppercase font-size-15 font-weight-medium mt-3 mb-2">
                            <li class="list-inline-item mr-3"><i class="icon-size-15 icon mr-1"
                                                                 data-feather="calendar"></i> April 12 2020
                            </li>
                            <li class="list-inline-item"><i class="icon-size-15 icon mr-1" data-feather="user"></i>
                                Admin
                            </li>
                        </ul>
                        <a href="#" class="text-dark font-weight-bold h5">The Best Business Ideas</a>
                        <p class="text-muted font-size-15">Integer ante arcu accumsan a consectetuer eget posuere mauris
                            praesent adipiscing phasellus ullamcorper ipsum rutrum punc.</p>
                        <a href="#" class="text-primary font-weight-semibold">Learn More <span class="ml-2 right-icon">&#8594;</span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog End -->

    <!-- Contact Us Start -->
    <section class="section bg-light" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3 class="title mb-3">Contact Us</h3>
                        <p class="text-muted font-size-15">Et harum quidem rerum facilis est et expedita distinctio nam
                            libero tempore cum soluta nobis eligendi cumque.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="custom-form mb-5 mb-lg-0">
                        <div id="message"></div>
                        <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name*</label>
                                        <input name="name" id="name" type="text" class="form-control"
                                               placeholder="Your name...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address*</label>
                                        <input name="email" id="email" type="email" class="form-control"
                                               placeholder="Your email...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="comments">Message*</label>
                                        <textarea name="comments" id="summernote" rows="4" class="form-control"
                                                  placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message
                                        <i class="icon-size-15 ml-2 icon" data-feather="send"></i></button>
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-detail text-muted ml-lg-5">
                        <p class=""><i class="icon-xs icon mr-1" data-feather="mail"></i> :
                            <span>support@website.com</span></p>
                        <p class=""><i class="icon-xs icon mr-1" data-feather="link"></i> : <span>www.website.com</span>
                        </p>
                        <p class=""><i class="icon-xs icon mr-1" data-feather="phone-call"></i> : <span>(+001) 123 456 7890</span>
                        </p>
                        <p class=""><i class="icon-xs icon mr-1" data-feather="clock"></i> :
                            <span>9:00 AM - 6:00 PM</span></p>
                        <p class=""><i class="icon-xs icon mr-1" data-feather="map-pin"></i> : <span>1644 Deer Ridge Drive Rochelle Park, NJ 07662</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us End -->
@endsection

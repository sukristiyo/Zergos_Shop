@extends('templates.templates')
@section('title','Halaman Home')
@section('content')
  <!-- Start header -->
  <header class="top-navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="index.html">
                <img src="{{url('/assets/images/logo.png')}}" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbars-rs-food">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a class="nav-link">Home</a></li>
                    <li class="nav-item"><a class="nav-link">Menu</a></li>
                    <li class="nav-item"><a class="nav-link">About</a></li>
                    <li class="nav-item"><a class="nav-link">Contact</a></li>
                    <li class="nav-item dropdown">
            </div>
            </li>

            </ul>
        </div>
        </div>
    </nav>
</header>
<!-- End header -->

<!-- Start slides -->
<div id="slides" class="cover-slides">
    <ul class="slides-container">
        <li class="text-left">
            <img src="{{url('/assets/images/slider-01.jpg')}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Welcome To <br> ST Fish Shop</strong></h1>
                        <p class="m-b-40">Belanja seafood segar gak perlu Repot! <br>
                            Beli aja di ST Fish Shop.</p>
                    </div>
                </div>
            </div>
        </li>
        <li class="text-left">
            <img src="{{url('/assets/images/slider-02.png')}}" alt="">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="m-b-20"><strong>Customer Support<br></h1>
                        <a class="btn btn-lg btn-circle btn-outline-new-white" href="#"> 082170167025</a>
                    </div>
                </div>
            </div>
            <div class="slides-navigation">
                <a href="#" class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
                <a href="#" class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></a>
            </div>
</div>
<!-- End slides -->

<!-- Start About -->
<div class="about-section-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12 text-center">
                <div class="inner-column">
                    <h1><span>ST Fish Shop</span></h1>
                    <p>ST Fish Shop merupakan situs jual beli ikan dan hasil laut online. Kami memberikan daftar komoditas ikan dan hasil laut terlengkap dengan harga yang terjangkau untuk masyarakat. Untuk saat ini, kami melayani pembelian dalam jumlah besar (grosir). </p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <img src="{{url('/assets/images/about-img.jpg')}}" alt="" class="img-fluid">
            </div>
        </div>
    </div>
</div>
<!-- End About -->

<!-- Start QT -->
<div class="qt-box qt-background">
    <div class="container">
        <div class="row">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <p class="lead ">
                    " Semua mimpi kita akan menjadi kenyataan jIka kita punya keberanian untuk mengejarnya. "
                </p>
                <span class="lead">Sukristiyo</span>
            </div>
        </div>
    </div>
</div>
<!-- End QT -->

<!-- Start Menu -->
<div class="gallery-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="heading-title text-center">
                    <h2>Special Menu Fish</h2>
                </div>
            </div>`
        </div>

        <div class="col-12">
            <div class="tab-content" id="v-pills-tabContent">
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 special-grid drinks">
                            <div class="gallery-single fix">
                                <img src="{{url('/assets/images/tuna1.jpg')}}" class="img-fluid" alt="Image">
                                <div class="why-text">
                                    <h4>Tuna</h4>
                                    <p>Fresh Tuna Everyday From Our Sea Pond.</p>
                                    <h5> IDR 120.000/Kg</h5>
                                    <a href="Payment.html" class="btn-lg btn-success">Beli</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 special-grid drinks">
                            <div class="gallery-single fix">
                                <img src="{{url('/assets/images/cakalang.jpg')}}" class="img-fluid" alt="Image">
                                <div class="why-text">
                                    <h4>Cakalang</h4>
                                    <p>Fresh Cakalang Everyday From Our Sea Pond.</p>
                                    <h5> IDR 80.000/Kg</h5>
                                    <a href="Payment.html" class="btn-lg btn-success">Beli</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 special-grid drinks">
                            <div class="gallery-single fix">
                                <img src="{{url('/assets/images/kakap.jpg')}}" class="img-fluid" alt="Image">
                                <div class="why-text">
                                    <h4>Kakap</h4>
                                    <p>Fresh Kakap Everyday From Our Sea Pond.</p>
                                    <h5> IDR 90.000/Kg</h5>
                                    <a href="Payment.html" class="btn-lg btn-success">Beli</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 special-grid lunch">
                            <div class="gallery-single fix">
                                <img src="{{url('/assets/images/lobster.jpg')}}" class="img-fluid" alt="Image">
                                <div class="why-text">
                                    <h4>Lobster</h4>
                                    <p>Fresh Lobster Everyday From Our Sea Pond.</p>
                                    <h5> IDR 100.000/Kg</h5>
                                    <a href="Payment.html" class="btn-lg btn-success">Beli</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 special-grid lunch">
                            <div class="gallery-single fix">
                                <img src="{{url('/assets/images/kepiting.jpg')}}" class="img-fluid" alt="Image">
                                <div class="why-text">
                                    <h4>Kepiting</h4>
                                    <p>Fresh Kepiting Everyday From Our Sea Pond.</p>
                                    <h5> IDR 400.000/Kg</h5>
                                    <a href="Payment.html" class="btn-lg btn-success">Beli</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6 special-grid lunch">
                            <div class="gallery-single fix">
                                <img src="{{url('/assets/images/kerang.jpg')}}" class="img-fluid" alt="Image">
                                <div class="why-text">
                                    <h4>Kerang</h4>
                                    <p>Fresh Kerang Everyday From Our Sea Pond..</p>
                                    <h5> IDR 35.000/Kg</h5>
                                    <a href="Payment.html" class="btn-lg btn-success">Beli</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Menu -->

    <!-- Start Contact info -->
    <div class="contact-imfo-box">
        <div class="container">
            <div class="row">
                <div class="col-md-4 arrow-right">
                    <i class="fa fa-volume-control-phone"></i>
                    <div class="overflow-hidden">
                        <h4>Phone</h4>
                        <p class="lead">
                            +6282170167025
                        </p>
                    </div>
                </div>
                <div class="col-md-4 arrow-right">
                    <i class="fa fa-envelope"></i>
                    <div class="overflow-hidden">
                        <h4>Email</h4>
                        <p class="lead">
                            Sukrisstiyo29@gmail.com
                        </p>
                    </div>
                </div>
                <div class="col-md-4">
                    <i class="fa fa-map-marker"></i>
                    <div class="overflow-hidden">
                        <h4>Location</h4>
                        <p class="lead">
                            Jl. Gajah Mada, Batam, Kepulauan Riau
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Contact info -->

    <!-- Start Footer -->
    <footer class="footer-area bg-f">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 col-md-6">
                    <h3>Contact information</h3>
                    <p class="lead">Jl. Gajah Mada, Batam, Kepulauan Riau</p>
                    <p class="lead"><a href="#"></a>+6282170167025</p>
                    <p><a href="#"> Sukrisstiyo29@gmail.com</a></p>
                    <ul class="list-inline f-social">
                        <li class="list-inline-item"><a href="https://www.facebook.com/tyojha"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="https://twitter.com/sukristiyo2"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.linkedin.com/in/sukriss-tiyo-319b5b10b/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.instagram.com/sukrisstiyo/"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h3>Opening hours</h3>
                    <p><span class="text-color">Monday </span>: Closed</p>
                    <p><span class="text-color">Tue-Wed </span>: 9:Am - 10PM</p>
                    <p><span class="text-color">Thu-Fri </span>: 9:Am - 10PM</p>
                    <p><span class="text-color">Sat-Sun </span>: 5:PM - 10PM</p>
                </div>
            </div>
        </div>

        <div class="copyright">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <p class="company-name">All Rights Reserved. &copy; 2020 <a href="#">ST Fish Shop</a> Design By :
                            <a href="https://github.com/sukristiyo">Sukristiyo GitHub</a></p>
                    </div>
                </div>
            </div>
        </div>

    </footer>
    <!-- End Footer -->

    <a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

@endsection
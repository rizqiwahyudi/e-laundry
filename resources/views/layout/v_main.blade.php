<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{ asset('/assets/img/logo-laundry.png') }}" rel="icon">
  <link href="{{ asset('/assets/img/logo-laundry.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="{{ asset('/assets/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="{{ asset('/assets/lib/font-awesome2/css/all.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="{{ asset('/assets/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/css/rating-input.css') }}" rel="stylesheet">
  <script src="{{ asset('/assets/js/sweetalert.js') }}"></script>
</head>

<body>
  @if(Session::has('success'))
                    
    <script type="text/javascript">
      Swal.fire(
        'Success!!',
        '{{ Session::get("success") }}',
        'success'
      )
    </script>
    @php
      Session::forget('success');
    @endphp
    </div>
  @endif
  <!--==========================
  Header
  ============================-->
  <header id="header">

    <div id="topbar">
      <div class="container">
        <div class="social-links">
          <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
          <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
          <a href="https://wa.me/6282330263968" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
          <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="logo float-left">
        <!-- Uncomment below if you prefer to use an image logo -->
        <h1 class="text-light"><a href="{{url('/')}}" class="scrollto"><span>E-LAUNDRY</span></a></h1>
        <!-- <a href="#header" class="scrollto"><img src="img/logo.png" alt="" class="img-fluid"></a> -->
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="#intro">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#footer">Contact Us</a></li>
          <!-- <li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
          <li><a href="{{ url('/login') }}" class="btn btn-outline-secondary">Login</a></li>
        </ul>
      </nav><!-- .main-nav -->

    </div>
  </header><!-- #header -->

  <!--==========================
    Intro Section
  ============================-->
  @yield('content')
  <!--==========================
    Footer
  ============================-->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-sm-6">

                <div class="footer-info">
                  <h3>E-Laundry</h3>
                  <p>9/10 pelanggan laundry pernah kehilangan pakaian pada layanan laundry? jangan tunggu sampai pakaian kesayangan Anda hilang, tertukar atau rusak! Dengan layanan kami, Anda bisa tenang dan santai sepenuhnya!<br>Pesan sekarang dan kami akan melayani Anda sekarang juga!</p>
                </div>
              </div>

              <div class="col-sm-6">
                <div class="footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                    <li><a href="#intro" class="scrollto">Home</a></li>
                    <li><a href="#about" class="scrollto">About us</a></li>
                    <li><a href="#services" class="scrollto">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                  </ul>
                </div>

                <div class="footer-links">
                  <h4>Contact Us</h4>
                  <p>
                    JL.Kartini No 33 Pangarangan <br>
                    Sumenep, Jawa Timur<br>
                    Indonesia <br>
                    <strong>Phone:</strong> +62 8320 3026 3968<br>
                    <strong>Email:</strong> laundrysehati@gmail.com<br>
                  </p>
                </div>

                <div class="social-links">
                  <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                  <a href="https://wa.me/6282330263968" class="whatsapp"><i class="fa fa-whatsapp"></i></a>
                  <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">
              <h4>Penilaian Jasa Kami</h4>
              <form action="{{ url('/') }}" method="post" role="form" class="contactForm">
                @csrf
                <div class="form-group">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Masukkan Nama" data-rule="minlen:4" data-msg="Please enter at least 4 chars" required="" value="{{old('nama')}}" />
                  @if($errors->has('nama'))
                    <script type="text/javascript">
                      Swal.fire(
                        'Error !',
                        '{{ $errors->first("nama") }}',
                        'error'
                      )
                    </script>
                  @endif
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan Email" data-rule="email" data-msg="Please enter a valid email" required="" value="{{old('email')}}" />
                  @if($errors->has('email'))
                    <script type="text/javascript">
                      Swal.fire(
                        'Error !',
                        '{{ $errors->first("email") }}',
                        'error'
                      )
                    </script>
                  @endif
                </div>
                <div class="form-group">
                    <div class="stars">
                      @for ($i = 5; $i > 0; $i--)
                        <input class="star star-{{ $i }} form-control" id="star-{{ $i }}" type="radio" name="rating" value="{{ $i }}" data-rule="required" data-msg="Please enter your rating" required=""/>
                        <label class="star star-{{ $i }}" for="star-{{ $i }}"></label>
                      @endfor
                        <!-- <input class="star star-4" id="star-4" type="radio" name="star" value="4" data-rule="required"/>
                        <label class="star star-4" for="star-4"></label>
                        <input class="star star-3" id="star-3" type="radio" name="star" value="3" data-rule="required"/>
                        <label class="star star-3" for="star-3"></label>
                        <input class="star star-2" id="star-2" type="radio" name="star" value="2" data-rule="required"/>
                        <label class="star star-2" for="star-2"></label>
                        <input class="star star-1" id="star-1" type="radio" name="star" value="1" data-rule="required"/>
                        <label class="star star-1" for="star-1"></label> -->
                        @if($errors->has('rating'))
                          <script type="text/javascript">
                            Swal.fire(
                              'Error !',
                              '{{ $errors->first("rating") }}',
                              'error'
                            )
                          </script>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                  <textarea class="form-control" name="komen" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Masukkan Comment atau Pesan" required="">{{old('komen')}}</textarea>
                  @if($errors->has('komen'))
                    <script type="text/javascript">
                      Swal.fire(
                        'Error !',
                        '{{ $errors->first("komen") }}',
                        'error'
                      )
                    </script>
                  @endif
                </div>
                <div class="text-center">
                  <button type="submit" title="Send Message">Send Message</button>
                </div>
              </form>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>SakeraDev.ID</strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- #footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- Uncomment below i you want to use a preloader -->
  <!-- <div id="preloader"></div> -->

  <!-- JavaScript Libraries -->
  <!-- TOLONG JANGAN DI EDIT - EDIT YANG DIBAWAH INI YAA -->
  <script src="{{ asset('/assets/lib/font-awesome2/all.js') }}"></script>
  <script src="{{ asset('/assets/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('/assets/lib/jquery/jquery-migrate.min.js') }}"></script>
  <script src="{{ asset('/assets/lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/assets/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('/assets/lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('/assets/lib/mobile-nav/mobile-nav.js') }}"></script>
  <script src="{{ asset('/assets/lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('/assets/lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('/assets/lib/counterup/counterup.min.js') }}"></script>
  <script src="{{ asset('/assets/lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('/assets/lib/isotope/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('/assets/lib/lightbox/js/lightbox.min.js') }}"></script>
  <!-- Contact Form JavaScript File -->
  <!-- <script src="{{ asset('/assets/contactform/contactform.js') }}"></script> -->

  <!-- Template Main Javascript File -->
  <script src="{{ asset('/assets/js/main.js') }}"></script>

</body>

</html>
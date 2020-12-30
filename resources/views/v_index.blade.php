@extends('layout.v_main')

@section('title', 'Home Page | Laundry Sehati')

@section('content')
<section id="intro" class="clearfix">
  <div class="container d-flex h-100">
    <div class="row justify-content-center align-self-center">
      <div class="col-md-6 intro-info order-md-first order-last">
        <h2>Laundry Sehati<br> <span> Melayani Sepenuh Hati</span></h2>
        <div>
          <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
      </div>

      <div class="col-md-6 intro-img order-md-last order-first">
        <img src="{{ asset('/assets/img/intro-img.svg') }}" alt="" class="img-fluid">
      </div>
    </div>

  </div>
</section><!-- #intro -->

<main id="main">

  <!--==========================
          About Us Section
        ============================-->
  <section id="about">

    <div class="container">
      <div class="row">

        <div class="col-lg-5 col-md-6">
          <div class="about-img">
            <img src="{{ asset('/assets/img/erico.jpg') }}" alt="">
          </div>
        </div>

        <div class="col-lg-7 col-md-6">
          <div class="about-content">
            <h2>About Us</h2>
            <h3>Assalamualikum.Wr.Wb</h3>
            <p>Buat masyarakat sumenep Khususnya kecamatan kota nih ,yang lagi banyak kesibukan atau lagi males keluar pas musim hujan kayak gini.</p>
            <p>Kami dari Laundry Sehati di Jl.Kartini No.33A Pangarangan-Sumenep menyidakan jasa Antar-Jemput GRATIS Area kota Sumenep. Buruan tinggal WA atau tlp saja di 082330263968. Serta kami juga menyediakan 3 jenis parfum sesuai selera anda. Terimakasi</p>
            <ul>
              <li><i class="ion-android-checkmark-circle"></i> Garansi 100% Cuci dan Setrika Ulang.</li>
              <li><i class="ion-android-checkmark-circle"></i> Satu Hari Selesai.</li>
              <li><i class="ion-android-checkmark-circle"></i> Pilih Pewangi Sesuai Selera.</li>
              <li><i class="ion-android-checkmark-circle"></i> Pencucian Tidak Digabung.</li>
              <li><i class="ion-android-checkmark-circle"></i> Gratis Ongkos Kirim Untuk Wilayah Kota.</li>
            </ul>
          </div>
        </div>
      </div>
    </div>

  </section><!-- #about -->


  <!--==========================
          Services Section
        ============================-->
  <section id="services" class="section-bg">
    <div class="container">

      <header class="section-header">
        <h3>Services</h3>
        <p>Apa Yang Anda Dapatkan?</p>
      </header>

      <div class="row">

        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #fceef3;"><i class="ion-ios-analytics-outline" style="color: #ff689b;"></i></div>
            <p class="description">Pelayanan Kualitas HOTEL dengan HARGA KILOAN</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #fff0da;"><i class="ion-ios-bookmarks-outline" style="color: #e98e06;"></i></div>
            <p class="description">Pencucian TERPISAH dari pakaian kotor pelanggan lain</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #e6fdfc;"><i class="ion-ios-paper-outline" style="color: #3fcdc7;"></i></div>
            <p class="description">Pencucian degan DETERGEN TERBAIK (Mengunakan SOKLIN LIQUID )</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.1s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #eafde7;"><i class="ion-ios-speedometer-outline" style="color:#41cf2e;"></i></div>
            <p class="description">Pengeringan Dengan Mesin pengering SPEEDQUEEN</p>
          </div>
        </div>

        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #e1eeff;"><i class="ion-ios-world-outline" style="color: #2282ff;"></i></div>
            <p class="description">Pencucian dengan Mesin cuci TEKNOLOGI CANGGIH</p>
          </div>
        </div>
        <div class="col-md-6 col-lg-4 wow bounceInUp" data-wow-delay="0.2s" data-wow-duration="1.4s">
          <div class="box">
            <div class="icon" style="background: #ecebff;"><i class="ion-ios-clock-outline" style="color: #8660fe;"></i></div>
            <p class="description">Pengerjaan oleh TENAGA AHLI PROFESIONAL </p>
          </div>
        </div>

      </div>

    </div>
  </section><!-- #services -->

  <!--==========================
          Why Us Section
        ============================
  <section id="why-us" class="wow fadeIn">
    <div class="container-fluid">

      <header class="section-header">
        <h3>Why choose us?</h3>
        <p>Laudem latine persequeris id sed, ex fabulas delectus quo. No vel partiendo abhorreant vituperatoribus.</p>
      </header>

      <div class="row">

        <div class="col-lg-6">
          <div class="why-us-img">
            <img src="{{ asset('/assets/img/why-us.jpg') }}" alt="" class="img-fluid">
          </div>
        </div>

        <div class="col-lg-6">
          <div class="why-us-content">
            <p>Molestiae omnis numquam corrupti omnis itaque. Voluptatum quidem impedit. Odio dolorum exercitationem est error omnis repudiandae ad dolorum sit.</p>
            <p>
              Explicabo repellendus quia labore. Non optio quo ea ut ratione et quaerat. Porro facilis deleniti porro consequatur
              et temporibus. Labore est odio.

              Odio omnis saepe qui. Veniam eaque ipsum. Ea quia voluptatum quis explicabo sed nihil repellat..
            </p>

            <div class="features wow bounceInUp clearfix">
              <i class="fa fa-diamond" style="color: #f058dc;"></i>
              <h4>Corporis dolorem</h4>
              <p>Commodi quia voluptatum. Est cupiditate voluptas quaerat officiis ex alias dignissimos et ipsum. Soluta at enim modi ut incidunt dolor et.</p>
            </div>

            <div class="features wow bounceInUp clearfix">
              <i class="fa fa-object-group" style="color: #ffb774;"></i>
              <h4>Eum ut aspernatur</h4>
              <p>Molestias eius rerum iusto voluptas et ab cupiditate aut enim. Assumenda animi occaecati. Quo dolore fuga quasi autem aliquid ipsum odit. Perferendis doloremque iure nulla aut.</p>
            </div>

            <div class="features wow bounceInUp clearfix">
              <i class="fa fa-language" style="color: #589af1;"></i>
              <h4>Voluptates dolores</h4>
              <p>Voluptates nihil et quis omnis et eaque omnis sint aut. Ducimus dolorum aspernatur. Totam dolores ut enim ullam voluptas distinctio aut.</p>
            </div>

          </div>

        </div>

      </div>

    </div>

    <div class="container">
      <div class="row counters">

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">274</span>
          <p>Clients</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">421</span>
          <p>Projects</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">1,364</span>
          <p>Hours Of Support</p>
        </div>

        <div class="col-lg-3 col-6 text-center">
          <span data-toggle="counter-up">18</span>
          <p>Hard Workers</p>
        </div>

      </div>

    </div>
  </section>

  <--========================== 
          Call To Action Section
        ============================-->

  <!--==========================
          Features Section
        ============================
  <section id="features">
    <div class="container">

      <div class="row feature-item">
        <div class="col-lg-6 wow fadeInUp">
          <img src="{{ asset('/assets/img/features-1.svg') }}" class="img-fluid" alt="">
        </div>
        <div class="col-lg-6 wow fadeInUp pt-5 pt-lg-0">
          <h4>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h4>
          <p>
            Ipsum in aspernatur ut possimus sint. Quia omnis est occaecati possimus ea. Quas molestiae perspiciatis occaecati qui rerum. Deleniti quod porro sed quisquam saepe. Numquam mollitia recusandae non ad at et a.
          </p>
          <p>
            Ad vitae recusandae odit possimus. Quaerat cum ipsum corrupti. Odit qui asperiores ea corporis deserunt veritatis quidem expedita perferendis. Qui rerum eligendi ex doloribus quia sit. Porro rerum eum eum.
          </p>
        </div>
      </div>

      <div class="row feature-item mt-5 pt-5">
        <div class="col-lg-6 wow fadeInUp order-1 order-lg-2">
          <img src="{{ asset('/assets/img/features-2.svg') }}" class="img-fluid" alt="">
        </div>

        <div class="col-lg-6 wow fadeInUp pt-4 pt-lg-0 order-2 order-lg-1">
          <h4>Neque saepe temporibus repellat ea ipsum et. Id vel et quia tempora facere reprehenderit.</h4>
          <p>
            Delectus alias ut incidunt delectus nam placeat in consequatur. Sed cupiditate quia ea quis. Voluptas nemo qui aut distinctio. Cumque fugit earum est quam officiis numquam. Ducimus corporis autem at blanditiis beatae incidunt sunt.
          </p>
          <p>
            Voluptas saepe natus quidem blanditiis. Non sunt impedit voluptas mollitia beatae. Qui esse molestias. Laudantium libero nisi vitae debitis. Dolorem cupiditate est perferendis iusto.
          </p>
          <p>
            Eum quia in. Magni quas ipsum a. Quis ex voluptatem inventore sint quia modi. Numquam est aut fuga mollitia exercitationem nam accusantium provident quia.
          </p>
        </div>

      </div>

    </div>
  </section><! #about -->

  <!--==========================
          Portfolio Section
        ============================
  <section id="portfolio" class="section-bg">
    <div class="container">

      <header class="section-header">
        <h3 class="section-title">Our Portfolio</h3>
      </header>

      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row portfolio-container">

        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-wrap">
            <img src="{{ asset('/assets/img/portfolio/app1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="#">App 1</a></h4>
              <p>App</p>
              <div>
                <a href="{{ asset('/assets/img/portfolio/app1.jpg') }}" data-lightbox="portfolio" data-title="App 1" class="link-preview" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <img src="{{ asset('/assets/img/portfolio/web3.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="#">Web 3</a></h4>
              <p>Web</p>
              <div>
                <a href="{{ asset('/assets/img/portfolio/web3.jpg') }}" class="link-preview" data-lightbox="portfolio" data-title="Web 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <img src="{{ asset('/assets/img/portfolio/app2.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="#">App 2</a></h4>
              <p>App</p>
              <div>
                <a href="{{ asset('/assets/img/portfolio/app2.jpg') }}" class="link-preview" data-lightbox="portfolio" data-title="App 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('/assets/img/portfolio/card2.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="#">Card 2</a></h4>
              <p>Card</p>
              <div>
                <a href="{{ asset('/assets/img/portfolio/card2.jpg') }}" class="link-preview" data-lightbox="portfolio" data-title="Card 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <img src="{{ asset('/assets/img/portfolio/web2.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="#">Web 2</a></h4>
              <p>Web</p>
              <div>
                <a href="{{ asset('/assets/img/portfolio/web2.jpg') }}" class="link-preview" data-lightbox="portfolio" data-title="Web 2" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-app" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <img src="{{ asset('/assets/img/portfolio/app3.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="#">App 3</a></h4>
              <p>App</p>
              <div>
                <a href="{{ asset('/assets/img/portfolio/app3.jpg') }}" class="link-preview" data-lightbox="portfolio" data-title="App 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card">
          <div class="portfolio-wrap">
            <img src="{{ asset('/assets/img/portfolio/card1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="#">Card 1</a></h4>
              <p>Card</p>
              <div>
                <a href="{{ asset('/assets/img/portfolio/card1.jpg') }}" class="link-preview" data-lightbox="portfolio" data-title="Card 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-card" data-wow-delay="0.1s">
          <div class="portfolio-wrap">
            <img src="{{ asset('/assets/img/portfolio/card3.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="#">Card 3</a></h4>
              <p>Card</p>
              <div>
                <a href="{{ asset('/assets/img/portfolio/card3.jpg') }}" class="link-preview" data-lightbox="portfolio" data-title="Card 3" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 portfolio-item filter-web" data-wow-delay="0.2s">
          <div class="portfolio-wrap">
            <img src="{{ asset('/assets/img/portfolio/web1.jpg') }}" class="img-fluid" alt="">
            <div class="portfolio-info">
              <h4><a href="#">Web 1</a></h4>
              <p>Web</p>
              <div>
                <a href="{{ asset('/assets/img/portfolio/web1.jpg') }}" class="link-preview" data-lightbox="portfolio" data-title="Web 1" title="Preview"><i class="ion ion-eye"></i></a>
                <a href="#" class="link-details" title="More Details"><i class="ion ion-android-open"></i></a>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
  </section>< #portfolio -->

  <!--==========================
          Clients Section
        ============================-->
  <section id="testimonials">
    <div class="container">

      <header class="section-header">
        <h3>Kepuasan Anda Adalah Pioritas Kami</h3>
      </header>

      <div class="row justify-content-center">
        <div class="col-lg-8">

          <div class="owl-carousel testimonials-carousel wow fadeInUp">

            @foreach( $comments as $komen )

            <div class="testimonial-item">
              <h3>{{ $komen->nama }}</h3>
              <h4>Progremer</h4>
              <p>{{ $komen->komen }}</p>
            </div>

            @endforeach

          </div>

        </div>
      </div>


    </div>
  </section><!-- #testimonials -->

  <!--==========================
          Team Section
        ============================-->

  <!--==========================
          Clients Section
        ============================
  <section id="clients" class="wow fadeInUp">
    <div class="container">

      <header class="section-header">
        <h3>Our Clients</h3>
      </header>

      <div class="owl-carousel clients-carousel">
        <img src="{{ asset('/assets/img/clients/client-1.png') }}" alt="">
        <img src="{{ asset('/assets/img/clients/client-2.png') }}" alt="">
        <img src="{{ asset('/assets/img/clients/client-3.png') }}" alt="">
        <img src="{{ asset('/assets/img/clients/client-4.png') }}" alt="">
        <img src="{{ asset('/assets/img/clients/client-5.png') }}" alt="">
        <img src="{{ asset('/assets/img/clients/client-6.png') }}" alt="">
        <img src="{{ asset('/assets/img/clients/client-7.png') }}" alt="">
        <img src="{{ asset('/assets/img/clients/client-8.png') }}" alt="">
      </div>

    </div>
  </section><!-- #clients -->


  <!--==========================
          Pricing Section
        ============================
  <section id="pricing" class="wow fadeInUp section-bg">

    <div class="container">

      <header class="section-header">
        <h3>Pricing</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </header>

      <div class="row flex-items-xs-middle flex-items-xs-center">

         Basic Plan  
        <div class="col-xs-12 col-lg-4">
          <div class="card">
            <div class="card-header">
              <h3><span class="currency">$</span>19<span class="period">/month</span></h3>
            </div>
            <div class="card-block">
              <h4 class="card-title">
                Basic Plan
              </h4>
              <ul class="list-group">
                <li class="list-group-item">Odio animi voluptates</li>
                <li class="list-group-item">Inventore quisquam et</li>
                <li class="list-group-item">Et perspiciatis suscipit</li>
                <li class="list-group-item">24/7 Support System</li>
              </ul>
              <a href="#" class="btn">Choose Plan</a>
            </div>
          </div>
        </div>

         Regular Plan  
        <div class="col-xs-12 col-lg-4">
          <div class="card">
            <div class="card-header">
              <h3><span class="currency">$</span>29<span class="period">/month</span></h3>
            </div>
            <div class="card-block">
              <h4 class="card-title">
                Regular Plan
              </h4>
              <ul class="list-group">
                <li class="list-group-item">Odio animi voluptates</li>
                <li class="list-group-item">Inventore quisquam et</li>
                <li class="list-group-item">Et perspiciatis suscipit</li>
                <li class="list-group-item">24/7 Support System</li>
              </ul>
              <a href="#" class="btn">Choose Plan</a>
            </div>
          </div>
        </div>

        Premium Plan  
        <div class="col-xs-12 col-lg-4">
          <div class="card">
            <div class="card-header">
              <h3><span class="currency">$</span>39<span class="period">/month</span></h3>
            </div>
            <div class="card-block">
              <h4 class="card-title">
                Premium Plan
              </h4>
              <ul class="list-group">
                <li class="list-group-item">Odio animi voluptates</li>
                <li class="list-group-item">Inventore quisquam et</li>
                <li class="list-group-item">Et perspiciatis suscipit</li>
                <li class="list-group-item">24/7 Support System</li>
              </ul>
              <a href="#" class="btn">Choose Plan</a>
            </div>
          </div>
        </div>

      </div>
    </div>

  </section><!-- #pricing -->

  <!--==========================
          Frequently Asked Questions Section
        ============================
  <section id="faq">
    <div class="container">
      <header class="section-header">
        <h3>Frequently Asked Questions</h3>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
      </header>

      <ul id="faq-list" class="wow fadeInUp">
        <li>
          <a data-toggle="collapse" class="collapsed" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="ion-android-remove"></i></a>
          <div id="faq1" class="collapse" data-parent="#faq-list">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq2" class="collapsed">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="ion-android-remove"></i></a>
          <div id="faq2" class="collapse" data-parent="#faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq3" class="collapsed">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="ion-android-remove"></i></a>
          <div id="faq3" class="collapse" data-parent="#faq-list">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq4" class="collapsed">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="ion-android-remove"></i></a>
          <div id="faq4" class="collapse" data-parent="#faq-list">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq5" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="ion-android-remove"></i></a>
          <div id="faq5" class="collapse" data-parent="#faq-list">
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>
        </li>

        <li>
          <a data-toggle="collapse" href="#faq6" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="ion-android-remove"></i></a>
          <div id="faq6" class="collapse" data-parent="#faq-list">
            <p>
              Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
            </p>
          </div>
        </li>

      </ul>

    </div>
  </section> #faq -->

</main>
@endsection
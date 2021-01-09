<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="{{ asset('/assets/lib/login/bootstrap/css/bootstrap.min.css') }}" />
  <style type="text/css">
    @font-face {
      font-family: "blending-reg";
      src : url("{{ asset('/assets/lib/login/BlendingRegular.otf') }}");
    }

    @font-face {
      font-family: "billabong";
      src : url("{{ asset('/assets/lib/login/Billabong.ttf') }}");
    }

    .judul {
      font-family: billabong;
    }

    .judul button {
      font-family: calibri;
      width: 100%;
      margin-top: 8px;
      margin-bottom: 8px;
    }

    .subjudul {
      font-size: 15px;
      color: grey;
      font-family: calibri;
      font-weight: 600;
      margin-top: 0px;
    }

    .fom input {
      padding: 13px;
      padding-left: 15px;
      width: 100%;
      border: 1px solid #e6e6e6;
      border-radius: 5px;
      font-size: 10px;
    }

    .bungkus {
      border: 1px solid #e6e6e6;
      padding: 20px;
      padding-bottom: 8px;
      background: #fff;
      margin-top: 70px;
      box-sizing: border-box;
    }

    .input {
      position: relative;
    }

    .input input:focus {
      outline: none;
    }

    .input .text {
      font: 12px/16px 'Helvetica Neue', Arial, sans-serif;
      position: absolute;
      top: 50%;
      left: 15px;
      margin-top: -8px;
      color: gray;
      background-color: inherit;
      transition: all .1s linear;
      pointer-events: none;
    }

    .input input:focus+.text,
    .input input:not(:invalid)+.text {
      color: grey;
      top: 0%;
      margin-top: -1px;
      background: transparent;
      color: #2196F3;

      /*padding-right: 1px; padding-left: 1px;*/
      font-size: 8px;
      font-weight: 400;
    }

    .input textarea:focus+.text,
    .input textarea:not(:invalid)+.text {
      color: grey;
      top: 0%;
      margin-top: -8px;
      background: white;
      padding-right: 1px;
      padding-left: 1px;
      font-size: 10px;
      font-weight: 400;
    }

    .input input:focus+.text {
      /*color: #2196F3;*/
      font-weight: bold;
    }

    .input textarea:focus+.text {
      color: #2196F3;
      font-weight: bold;
    }
  </style>
</head>

<body>

  <div class="container">
    <div class="row justify-content-center">
      <!-- <div class="col-md-2"></div> -->
      <div class="col-md-4" style="margin-top: 50px;">
        <div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="{{ asset('/assets/lib/login/slide/a.jpg') }}" class="d-block w-100" style="height: 550px;">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('/assets/lib/login/slide/b.jpg') }}" class="d-block w-100" style="height: 550px;">
            </div>
            <div class="carousel-item">
              <img src="{{ asset('/assets/lib/login/slide/c.jpg') }}" class="d-block w-100" style="height: 550px;">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
      <div class="col-md-4">
        <div class="row bungkus">
          <div class="col-md-12">
            <div class="row text-center">
              <div class="col-md-12 judul">
                <img src="{{ asset('/assets/lib/login/slide/logoo.png') }}" align="left" style="height: 60px;">
                <h1 style="margin-bottom: 1px; font-size: 50px;">Loundry Sehati</h1>
                <p class="subjudul" style="margin-bottom: 10px;">Halaman Login Loundry Sehati.</p>
              </div>
            </div>
            <form method="post" action="">
              <div class="row justify-content-center fom">
                <!-- <div class="col-md-10 text-center" style="margin-bottom: 15px; color: grey;">
              Regestrasi dengan NRP aktif untuk setor Judul.
            </div> -->

                <div class="col-md-12">
                  <div class="input">
                    <input type="text" name="username" required="" autofocus="">
                    <span class="text">Masukkan Username</span>
                  </div>
                </div>
                <div class="col-md-12" style="margin-top: 5px;">
                  <div class="input">
                    <input type="Password" name="password" required="">
                    <span class="text">Masukkan Password</span>
                  </div>
                </div>
                <div class="col-md-12" style="margin-top:15px;">
                  <button class="btn btn-primary btn-sm" name="masuk" style="width: 100%;">Login</button>
                </div>

                <div class="col-md-12 text-center mt-3">
                  <p style="font-size: 14px; color: #999;">
                    Anda Akan Masuk Kehalaman Login <b>Silahkan masukan username dan password yang</b> <b>Benar.</b>
                  </p>
                </div>
              </div>
            </form>
          </div>
        </div>

        <div class="row" style="border: 1px solid #e6e6e6; margin-top: 10px; background: #fff;">
          <div class="col-md-12 text-center">
            <p style="font-size: 14px; color: #999; padding-top: 5px;">Lupa Password ? <b><a href="">Klik Disini.</a></b></p>
          </div>
        </div>
      </div>
    </div>

  </div>


  <script src="{{ asset('/assets/lib/admin/assetss/js/jquery.min.js') }}"></script>
  <script src="{{ asset('/assets/lib/login/bootstrap/js/bootstrap.min.js') }}"></script>
</body>

</html>
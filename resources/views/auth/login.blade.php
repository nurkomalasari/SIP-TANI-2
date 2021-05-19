<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">
    <link href="{{asset('assets/img/icon.png') }}" rel="icon">

    <link rel="stylesheet" href="{{asset('tamplatelogin/fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('tamplatelogin/css/owl.carousel.min.css')}}">

    <!-- Bootstrap CSS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('tamplatelogin/css/bootstrap.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!-- Style -->
    <link rel="stylesheet" href="{{asset('tamplatelogin/css/style.css')}}">
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <title>Login SIP TANI</title>
  </head>
  <body>



  <div class="content">
    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-2">
          <img src="{{asset('tamplatelogin/images/login.png')}}" alt="">
        </div>
        <div class="col-md-6 contents">
          <div class="row justify-content-center">
            <div class="col-md-8">
              <div class="mb-4">
              <h3>Sign In to <strong>SIP TANI</strong></h3>
              <p class="mb-4"></p>
            </div>
            <form class="pt-3" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                <span>Email</span>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                  @error('email')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                  @enderror
                </div>
                <div class="form-group">
                <span>Password</span>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="mt-3">
                  <button class="btn text-white btn-block btn-success" type="submit">SIGN IN</button>
                </div>
                <div class="text-center mt-4 font-weight-light"> Belum Punya Akun? <a href="/register" class="text-primary">Buat</a>
                </div>
              </form>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>


    <script src="{{asset('tamplatelogin/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>


  </body>
</html>

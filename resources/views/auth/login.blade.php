@extends('layouts.app')

@section('content')



<!doctype html>
<html lang="en">
  <head>

    <title>Register</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
  
  <link
      rel="icon"
      type="image/png"
      sizes="16x16"
      href="{{asset('assets/images/favicon.png')}}"
    />
    <!-- Custom CSS -->

    <!-- <link href="{{asset('dist/css/style.min.css')}}" rel="stylesheet" /> -->
  <body class=""   style="background-color: #eee; background-image: url('assets/images/bg.jpg');
            height: 100vh">
    <div class="main-wrapper">
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <div class="preloader">
        <div class="lds-ripple">
          <div class="lds-pos"></div>
          <div class="lds-pos"></div>
        </div>
      </div>
      <br><br><br><br>
      <!-- ============================================================== -->
      <!-- Preloader - style you can find in spinners.css -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <div
        class="
          auth-wrapper
          d-flex
          no-block
          justify-content-center
          align-items-center
        "
      >
        <div class="auth-box  border-top border-secondary">
          <div id="loginform">
            <div class="text-center  pt-3 pb-3 b-3 text-white">
              <!-- <span class="db"
                ><img src="{{asset('assets/images/logo.png')}}" alt="logo"
              /></span> -->
              Login Here
            </div>
            <!-- Form -->
            <form
              class="form-horizontal mt-3"
              id="loginform"
              action="{{route('login')}}"
              method="post"
            >
            @csrf
              <div class="row pb-4">
                <div class="col-12">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-success text-white h-100"
                        id="basic-addon1"
                        ><i class="mdi mdi-account fs-4"></i
                      ></span>
                    </div>
                    <input
                      type="email"
                      class="form-control form-control-lg"
                      placeholder="Email"
                      aria-label="Username"
                      aria-describedby="basic-addon1"
                      required=""
                      name="email"
                      value="{{ old('email') }}"
                      required autocomplete="email" autofocus
                    />

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                  </div>
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span
                        class="input-group-text bg-warning text-white h-100"
                        id="basic-addon2"
                        ><i class="mdi mdi-lock fs-4"></i
                      ></span>
                    </div>
                    <input
                      type="password"
                      class="form-control form-control-lg"
                      placeholder="Password"
                      aria-label="Password"
                      aria-describedby="basic-addon1"
                      required=""
                      name="password" required autocomplete="current-password"
                    />
                  </div>
                </div>
              </div>

              <div>
                              <a class="text-white" href="{{ route('register') }}">Not a User, Create One ?</a>
                            </div>
                            <br>
              <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Sign In') }}
                                    </button>
                                </div>
                            </div>
            </form>
          </div>
          <!-- <div id="recoverform">
            <div class="text-center">
              <span class="text-white"
                >Enter your e-mail address below and we will send you
                instructions how to recover a password.</span
              >
            </div>
            <div class="row mt-3">
              <form class="col-12" action="index.html">
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                    <span
                      class="input-group-text bg-danger text-white h-100"
                      id="basic-addon1"
                      ><i class="mdi mdi-email fs-4"></i
                    ></span>
                  </div>
                  <input
                    type="text"
                    class="form-control form-control-lg"
                    placeholder="Email Address"
                    aria-label="Username"
                    aria-describedby="basic-addon1"
                  />
                </div>
                <div class="row mt-3 pt-3 border-top border-secondary">
                  <div class="col-12">
                    <a
                      class="btn btn-success text-white"
                      href="#"
                      id="to-login"
                      name="action"
                      >Back To Login</a
                    >
                    <button
                      class="btn btn-info float-end"
                      type="button"
                      name="action"
                    >
                      Recover
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div> -->
        </div>
      </div>
      <!-- ============================================================== -->
      <!-- Login box.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Page wrapper scss in scafholding.scss -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Right Sidebar -->
      <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- All Required js -->
    <!-- ============================================================== -->
    <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- ============================================================== -->
    <!-- This page plugin js -->
    <!-- ============================================================== -->
    <script>
      $(".preloader").fadeOut();
      // ==============================================================
      // Login and Recover Password
      // ==============================================================
      $("#to-recover").on("click", function () {
        $("#loginform").slideUp();
        $("#recoverform").fadeIn();
      });
      $("#to-login").click(function () {
        $("#recoverform").hide();
        $("#loginform").fadeIn();
      });
    </script>
  </body>
</html>

 @endsection 

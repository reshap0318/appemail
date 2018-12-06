<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from colorlib.com//polygon/adminty/default/auth-normal-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Nov 2018 03:10:16 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>{{ config('app.name', 'Laravel') }} | Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="#">
    <meta name="keywords" content="Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="#">
    <!-- Favicon icon -->
    <link rel="icon" href="https://colorlib.com//polygon/adminty/files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font--><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/bower_components/bootstrap/css/bootstrap.min.css')}}">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/icon/themify-icons/themify-icons.css')}}">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/icon/icofont/css/icofont.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/style.css')}}">
</head>

<body class="fix-menu">
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
                <div class="ring"><div class="frame"></div></div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->

    <section class="login-block">
        <!-- Container-fluid starts -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                  <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}" class="md-float-material form-material">
                    @csrf
                      <div class="text-center">
                          <img src="{{asset('template/assets/images/logo.png')}}" alt="logo.png">
                      </div>
                      <div class="auth-box card">
                          <div class="card-block">
                              <div class="row m-b-20">
                                  <div class="col-md-12">
                                      <h3 class="text-center">Sign In</h3>
                                  </div>
                              </div>
                              <div class="form-group form-primary">
                                  <input id="email" type="email" name="email" class="form-control" required="" placeholder="Your Email Address">
                                  <span class="form-bar"></span>
                              </div>
                              <div class="form-group form-primary">
                                  <input id="password" type="password" name="password" class="form-control" required="" placeholder="Password">
                                  <span class="form-bar"></span>
                              </div>
                              <div class="row m-t-25 text-left">
                                  <div class="col-12">
                                      <div class="checkbox-fade fade-in-primary d-">
                                          <label>
                                              <input id="remember" {{ old('remember') ? 'checked' : '' }} name="remember" type="checkbox" value="">
                                              <span class="cr"><i class="cr-icon icofont icofont-ui-check txt-primary"></i></span>
                                              <span class="text-inverse">Remember me</span>
                                          </label>
                                      </div>
                                      <div class="forgot-phone text-right f-right">
                                          <a href="{{ route('password.request') }}" class="text-right f-w-600"> Forgot Password?</a>
                                      </div>
                                  </div>
                              </div>
                              <div class="row m-t-30">
                                  <div class="col-md-12">
                                      <button type="submit" class="btn btn-primary btn-md btn-block waves-effect waves-light text-center m-b-20">Sign in</button>
                                  </div>
                              </div>
                              <hr/>
                              <div class="row">
                                  <div class="col-md-10">
                                      <p class="text-inverse text-left m-b-0">Thank you.</p>
                                      <p class="text-inverse text-left"><a href="{{url('/')}}"><b class="f-w-600">Back to website</b></a></p>
                                  </div>
                                  <div class="col-md-2">
                                      <img src="{{asset('template/assets/images/auth/Logo-small-bottom.png')}}" alt="small-logo.png">
                                  </div>
                              </div>
                          </div>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </section>

    <script type="text/javascript" src="{{asset('template/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('template/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('template/bower_components/modernizr/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/modernizr/js/css-scrollbars.js')}}"></script>
    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{asset('template/bower_components/i18next/js/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/assets/js/common-pages.js')}}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>


<!-- Mirrored from colorlib.com//polygon/adminty/default/auth-normal-sign-in.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Nov 2018 03:10:16 GMT -->
</html>

<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from colorlib.com//polygon/adminty/default/dt-ext-basic-buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Nov 2018 03:12:46 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>

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
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/icon/feather/css/feather.css')}}">
    <!-- Date-time picker css -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/pages/advance-elements/css/bootstrap-datetimepicker.css')}}">
    <!-- Date-range picker css  -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/bower_components/bootstrap-daterangepicker/css/daterangepicker.css')}}" />
    <!-- Date-Dropper css -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/bower_components/datedropper/css/datedropper.min.css')}}" />
    <!-- Color Picker css -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/bower_components/spectrum/css/spectrum.css')}}" />
    <!-- Mini-color css -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/bower_components/jquery-minicolors/css/jquery.minicolors.css')}}" />
    <!-- Range slider css -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/bower_components/seiyria-bootstrap-slider/css/bootstrap-slider.css')}}">
    <!-- Select 2 css -->
    <link rel="stylesheet" href="{{asset('template/bower_components/select2/css/select2.min.css')}}"/>
    <!-- Multi Select css -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/bower_components/bootstrap-multiselect/css/bootstrap-multiselect.css')}}"/>
    <link rel="stylesheet" type="text/css" href="{{asset('template/bower_components/multiselect/css/multi-select.css')}}"/>
    <!--forms-wizard css-->
    <link rel="stylesheet" type="text/css" href="{{asset('template/bower_components/jquery.steps/css/jquery.steps.css')}}">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/pages/data-table/css/buttons.dataTables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/pages/data-table/extensions/buttons/css/buttons.dataTables.min.css')}}">
    <!-- jpro forms css -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/pages/j-pro/css/demo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/pages/j-pro/css/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/pages/j-pro/css/j-pro-modern.css')}}">
    <!-- animation nifty modal window effects css -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/component.css')}}">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('template/assets/css/jquery.mCustomScrollbar.css')}}">
</head>

<body>
<!-- Pre-loader start -->
<div class="theme-loader">
    <div class="ball-scale">
        <div class='contain'>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
            <div class="ring">
                <div class="frame"></div>
            </div>
        </div>
    </div>
</div>
<!-- Pre-loader end -->
<div id="pcoded" class="pcoded">
    <div class="pcoded-overlay-box"></div>
    <div class="pcoded-container navbar-wrapper">
        @include('layouts.partial.header')
        <!-- Sidebar inner chat end-->
        <div class="pcoded-main-container">
            <div class="pcoded-wrapper">
                @include('layouts.partial.sidebar')
                <div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <!-- Main-body start -->
                        <div class="main-body">
                            <div class="page-wrapper">
                                <!-- Page-header start -->
                                <div class="page-header">
                                    <div class="caption-breadcrumb">
                                          <div class="breadcrumb-header">
                                              <h5>@yield('titlebreadcrumb')</h5>
                                          </div>
                                          <div class="page-header-breadcrumb">
                                              <ul class="breadcrumb-title">
                                                  <li class="breadcrumb-item">
                                                      <a href="#!">
                                                          <i class="icofont icofont-home"></i>
                                                      </a>
                                                  </li>
                                                  @yield('breadcrumb')
                                              </ul>
                                          </div>
                                      </div>
                                </div>
                                <!-- Page-header end -->
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <!-- Basic Button table start -->
                                                @yield('content')
                                                <!-- Basic Button table end -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Page-body start -->
                                </div>
                            </div>
                            <!-- Main-body end -->
                            <div id="styleSelector">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{asset('template/bower_components/jquery/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/jquery-ui/js/jquery-ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/popper.js/js/popper.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/bootstrap/js/bootstrap.min.js')}}"></script>

    <!-- j-pro js -->
    <script type="text/javascript" src="{{asset('template/assets/pages/j-pro/js/jquery.ui.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/assets/pages/j-pro/js/jquery.maskedinput.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/assets/pages/j-pro/js/jquery-cloneya.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/assets/pages/j-pro/js/autoNumeric.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/assets/pages/j-pro/js/jquery.stepper.min.js')}}"></script>
    <!-- jquery slimscroll js -->
    <script type="text/javascript" src="{{asset('template/bower_components/jquery-slimscroll/js/jquery.slimscroll.js')}}"></script>
    <!-- modernizr js -->
    <script type="text/javascript" src="{{asset('template/bower_components/modernizr/js/modernizr.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/modernizr/js/css-scrollbars.js')}}"></script>

    <!-- Bootstrap date-time-picker js -->
    <script type="text/javascript" src="{{asset('template/assets/pages/advance-elements/moment-with-locales.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/assets/pages/advance-elements/bootstrap-datetimepicker.min.js')}}"></script>
    <!-- Date-range picker js -->
    <script type="text/javascript" src="{{asset('template/bower_components/bootstrap-daterangepicker/js/daterangepicker.js')}}"></script>
    <!-- Date-dropper js -->
    <script type="text/javascript" src="{{asset('template/bower_components/datedropper/js/datedropper.min.js')}}"></script>
    <!-- Color picker js -->
    <script type="text/javascript" src="{{asset('template/bower_components/spectrum/js/spectrum.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/jscolor/js/jscolor.js')}}"></script>
    <!-- Mini-color js -->
    <script type="text/javascript" src="{{asset('template/bower_components/jquery-minicolors/js/jquery.minicolors.min.js')}}"></script>

    <!-- Masking js -->
    <script src="{{asset('template/assets/pages/form-masking/inputmask.js')}}"></script>
    <script src="{{asset('template/assets/pages/form-masking/jquery.inputmask.js')}}"></script>
    <script src="{{asset('template/assets/pages/form-masking/autoNumeric.js')}}"></script>
    <script src="{{asset('template/assets/pages/form-masking/form-mask.js')}}"></script>

    <!-- i18next.min.js -->
    <script type="text/javascript" src="{{asset('template/bower_components/i18next/js/i18next.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/jquery-i18next/js/jquery-i18next.min.js')}}"></script>
    <!-- range slider js -->
    <script type="text/javascript" src="{{asset('template/bower_components/seiyria-bootstrap-slider/js/bootstrap-slider.js')}}"></script>


    <!-- Select 2 js -->
    <script type="text/javascript" src="{{asset('template/bower_components/select2/js/select2.full.min.js')}}"></script>
    <!-- Multiselect js -->
    <script type="text/javascript" src="{{asset('template/bower_components/bootstrap-multiselect/js/bootstrap-multiselect.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/bower_components/multiselect/js/jquery.multi-select.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/assets/js/jquery.quicksearch.js')}}"></script>

    <!-- data-table js -->
    <script src="{{asset('template/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('template/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('template/assets/pages/data-table/js/jszip.min.js')}}"></script>
    <script src="{{asset('template/assets/pages/data-table/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('template/assets/pages/data-table/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('template/assets/pages/data-table/extensions/buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('template/assets/pages/data-table/extensions/buttons/js/buttons.flash.min.js')}}"></script>
    <script src="{{asset('template/assets/pages/data-table/extensions/buttons/js/jszip.min.js')}}"></script>
    <script src="{{asset('template/assets/pages/data-table/extensions/buttons/js/pdfmake.min.js')}}"></script>
    <script src="{{asset('template/assets/pages/data-table/extensions/buttons/js/vfs_fonts.js')}}"></script>
    <script src="{{asset('template/assets/pages/data-table/extensions/buttons/js/buttons.colVis.min.js')}}"></script>
    <script src="{{asset('template/bower_components/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('template/bower_components/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('template/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('template/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('template/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
    <!-- sweet alert js -->
    <script type="text/javascript" src="{{asset('template/bower_components/sweetalert/js/sweetalert.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/assets/js/modal.js')}}"></script>
    <!-- sweet alert modal.js intialize js -->
    <!-- modalEffects js nifty modal window effects -->
    <script type="text/javascript" src="{{asset('template/assets/js/modalEffects.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/assets/js/classie.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/assets/pages/j-pro/js/custom/currency-form.js')}}"></script>
    <!-- Custom js -->

    <!-- Validation js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.6/moment.min.js"></script>
    <script type="text/javascript" src="{{asset('template/assets/pages/form-validation/validate.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/assets/pages/form-validation/form-validation.js')}}"></script>

    @yield('script')
    <!-- Custom js -->
    <script type="text/javascript" src="{{asset('template/assets/pages/advance-elements/custom-picker.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/assets/pages/range-slider.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/assets/pages/advance-elements/select2-custom.js')}}"></script>
    <script src="{{asset('template/assets/js/pcoded.min.js')}}"></script>
    <script src="{{asset('template/assets/js/vartical-layout.min.js')}}"></script>
    <script src="{{asset('template/assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('template/assets/js/script.js')}}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
</body>


<!-- Mirrored from colorlib.com//polygon/adminty/default/dt-ext-basic-buttons.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 01 Nov 2018 03:12:49 GMT -->
</html>

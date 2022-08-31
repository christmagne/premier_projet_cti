<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/admin-lte@3.1/dist/css/adminlte.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap4-toggle/3.6.1/bootstrap4-toggle.min.css"
          integrity="sha512-EzrsULyNzUc4xnMaqTrB4EpGvudqpetxG/WNjCpG6ZyyAGxeB6OBF9o246+mwx3l/9Cn838iLIcrxpPHTiygAA=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/css/adminlte.min.css"
          integrity="sha512-mxrUXSjrxl8vm5GwafxcqTrEwO1/oBNU25l20GODsysHReZo4uhVISzAKzaABH6/tTfAxZrY2FprmeAP5UZY8A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css"
          integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg=="
          crossorigin="anonymous"/>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css"
          integrity="sha512-nMNlpuaDPrqlEls3IX/Q56H36qvBASwb3ipuo3MxeWbsQB1881ox0cRv7UPTgBlriqoynt35KjEwgGUeUXIPnw=="
          crossorigin="anonymous"/>

    <link rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
          integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw=="
          crossorigin="anonymous"/>

    @stack('third_party_stylesheets')

    @stack('page_css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
    <!-- Main Header -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>
        </ul>

        <ul class="navbar-nav ml-auto" >
            <li class="nav-item dropdown user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                    <img src="data:image/jpeg;base64,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"
                         class="user-image img-circle elevation-2" alt="User Image">
                         <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                  
                </a>
                <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right" >
                    <!-- User image -->
                    <li class="user-header bg-primary">
                        <img src="data:image/jpeg;base64,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"
                             class="img-circle elevation-2"
                             alt="User Image">
                             <p>
                            {{ Auth::user()->name }}
                            <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                        </p>
                       
                    </li>
                    <!-- Menu Footer-->
                    <li class="user-footer">
                        <a href="#" class="btn btn-default btn-flat">Profile</a>
                        <a href="#" class="btn btn-default btn-flat float-right"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            Sign out
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>

    <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            @yield('content')
        </section>
    </div>

    <!-- Main Footer -->
    <footer class="main-footer">
        <div class="float-right d-none d-sm-block">
             <a href="http://127.0.0.1:8000">retourner a la page d'accuiel</a>
        </div>
        <strong>
           retrouver nous sur &copy; 2022 <a href="https://m.facebook.com/Globelms">FACEBOOK</a>.
        </strong>
        All rights reserved.
    </footer>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"
        integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg=="
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>

<!-- AdminLTE App -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.1.0/js/adminlte.min.js"
        integrity="sha512-AJUWwfMxFuQLv1iPZOTZX0N/jTCIrLxyZjTRKQostNU71MzZTEPHjajSK20Kj1TwJELpP7gl+ShXw5brpnKwEg=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"
        integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"
        integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg=="
        crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"
        integrity="sha512-2ImtlRlf2VVmiGZsjm9bEyhjGW4dU7B6TNwh/hx/iSByxNENtj3WVE6o/9Lj4TJeVXPi4bnOIMXFIJJAeufa0A=="
        crossorigin="anonymous"></script>
        
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/1.3/bootstrapSwitch.min.js"
        integrity="sha512-DAc/LqVY2liDbikmJwUS1MSE3pIH0DFprKHZKPcJC7e3TtAOzT55gEMTleegwyuIWgCfOPOM8eLbbvFaG9F/cA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(function () {
        bsCustomFileInput.init();
    });

    $("input[data-bootstrap-switch]").each(function () {
        $(this).bootstrapSwitch('state', $(this).prop('checked'));
    });
</script>

@stack('third_party_scripts')

@stack('page_scripts')
</body>
</html>

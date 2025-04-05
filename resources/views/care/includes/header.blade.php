<!doctype html>
<html lang="en">

<head>
    <title>Care Pal | {{$page_title ? $page_title : 'EgyDevs'}}</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="{{ url('/elder') }}/images/fav-icon.png" type="image/x-icon">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&family=Playfair+Display:wght@400;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{url('/elder')}}/fonts/icomoon/style.css">

    <link rel="stylesheet" type="text/css" href="{{ url('/elder') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ url('/elder') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{url('/elder')}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{url('/elder')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{url('/elder')}}/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{url('/elder')}}/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="{{url('/elder')}}/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="{{url('/elder')}}/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="{{url('/elder')}}/css/aos.css">

    <link rel="stylesheet" href="{{url('/elder')}}/css/style.css">

</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div id="overlayer"></div>

    <div class="loader">
        <div class="spinner-border text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>


    <div class="site-wrap">

        <div class="site-mobile-menu site-navbar-target">
            <div class="site-mobile-menu-header">
                <div class="site-mobile-menu-close mt-3">
                    <span class="icon-close2 js-menu-toggle"></span>
                </div>
            </div>
            <div class="site-mobile-menu-body"></div>
        </div>


        <header class="site-navbar light js-sticky-header site-navbar-target" role="banner">

            <div class="container">
                <div class="row align-items-center">

                    <div class="col- col-xl-2">
                        <div class="mb-0 site-logo"><a href="{{route('care.index')}}" class="mb-0">Care Pal<span
                                    class="text-primary">.</span> </a></div>
                    </div>

                    <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">

                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                                <li><a href="{{route('care.index')}}" class="active nav-link">Home</a></li>
                                <li class="has-children">
                                    <a href="{{route('care.services')}}" class="nav-link">Services</a>
                                    <ul class="dropdown">
                                        <li><a href="#" class="nav-link">Amazing Atmosphere</a></li>
                                        <li><a href="#" class="nav-link">Courteous & Caring Staff</a></li>
                                        <li><a href="#" class="nav-link">Hospice Care</a></li>
                                        <li><a href="#" class="nav-link">Quality Medical Care</a></li>
                                        <li><a href="#" class="nav-link">Excellent Cuisine</a></li>
                                        <li class="has-children">
                                            <a href="#">More Links</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Menu One</a></li>
                                                <li><a href="#">Menu Two</a></li>
                                                <li><a href="#">Menu Three</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="{{route('care.staff')}}" class="nav-link">Caring Staff</a></li>
                                <li><a href="{{route('care.about')}}" class="nav-link">About</a></li>
                                <li><a href="{{route('care.contact')}}" class="nav-link">Contact</a></li>
                                @auth
                                @if(auth()->user()->hasRole('admin'))
                                <li><a target="_blank" href="{{route('admin.home')}}" class="nav-link"><span
                                            class="text-danger">Admin</span></a></li>
                                @elseif (auth()->user()->hasRole('caregiver'))
                                <li><a href="{{route('care.staff.profile', auth()->user()->id)}}" class="nav-link">Staff
                                        Profile</a></li>
                                @else
                                <li><a href="{{route('care.profile')}}" class="nav-link">Profile</a></li>
                                @endif
                                @else
                                <li><a href="{{route('login')}}" class="nav-link">Login</a></li>
                                @endauth

                                <li class="social"><a href="https://www.facebook.com" class="nav-link">
                                        <span class="icon-facebook"></span></a></li>
                                <li class="social"><a href="https://wa.me/01000055500" class="nav-link">
                                        <span class="icon-whatsapp"></span></a></li>
                                <li class="social"><a href="https://linkedin.com/" class="nav-link">
                                        <span class="icon-instagram"></span></a></li>
                            </ul>
                        </nav>
                    </div>

                    <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3" style="position: relative; top: 3px;">
                        <a href="#" class="site-menu-toggle js-menu-toggle float-right">
                            <span class="icon-menu h3 text-white"></span>
                        </a>
                    </div>

                </div>
            </div>

        </header>
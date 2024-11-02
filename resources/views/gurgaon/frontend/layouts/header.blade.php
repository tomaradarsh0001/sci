<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $pageTitle ? $pageTitle : '' }}</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="{{ $pageDescription ? $pageDescription : '' }}" />
        <meta name="keywords" content="{{ $keywords ? $keywords : '' }}">
        <meta name="robots" content="index, follow" />
        
        <meta name="author" content="" />
        <meta name="format-detection" content="telephone=no" />

        <meta name="google-site-verification" content="IeTc8tlA0nwNJi7bd4hUI-55SyPuEVtY9wFhABhXBZ4" />
        
        <link rel="canonical" href="{{ url()->current() }}/">
        <meta property="og:title" content="{{ $pageTitle ? $pageTitle : '' }}">
        <meta property="og:site_name" content="SCI International Hospital">
        <meta property="og:url" content="{{ url()->current() }}/">
        <meta property="og:description" content="{{ $pageDescription ? $pageDescription : '' }}">
        <meta property="og:type" content="website">
        
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@scihospital_">
        <meta name="twitter:title" content="SCI Hospital">
        <meta name="twitter:description" content="{{ $pageDescription ? $pageDescription : '' }}">
        
        <link rel="alternate" hreflang="en-IN" href="{{ url()->current() }}" />
        <link rel="apple-touch-icon" href="https://scihospital.com/public/frontend/assets/images/logo-p.webp" />
       
        
        <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"></noscript>
        
        <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"></noscript>



        <!-- Stylesheets -->
        
        <link rel="preload" href="{{asset('public_gurgaon/assets/vendor/slick/slick.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{asset('public_gurgaon/assets/vendor/slick/slick.css')}}"></noscript>
        
        <link rel="preload" href="{{asset('public_gurgaon/assets/vendor/animate/animate.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{asset('public_gurgaon/assets/vendor/animate/animate.min.css')}}"></noscript>
        
        <link rel="stylesheet" href="{{asset('public_gurgaon/assets/css/bootstrap.min.css')}}">
        
        <link rel="preload" href="{{asset('public_gurgaon/assets/icons/style.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{asset('public_gurgaon/assets/icons/style.css')}}"></noscript>
        
        <link rel="preload" href="{{asset('public_gurgaon/assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{asset('public_gurgaon/assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css')}}"></noscript>
        
        <link href="{{asset('public_gurgaon/assets/css/style.css')}}" rel="stylesheet" />
        
        <!--<link rel="preload" href="{{asset('public_gurgaon/assets/css/style.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">-->
        <!--<noscript><link rel="stylesheet" href="{{asset('public_gurgaon/assets/css/style.css')}}"></noscript>-->
        
         <link rel="preload" href="{{asset('public_gurgaon/assets/css/newstyle.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{asset('public_gurgaon/assets/css/newstyle.css')}}"></noscript>
        
        <!--<link href="{{asset('public_gurgaon/assets/css/newstyle.css')}}" rel="stylesheet" />-->
        
        <link href="{{asset('public_gurgaon/assets/css/navmenu.css')}}" rel="stylesheet" />
        <!--<link href="{{asset('public_gurgaon/assets/color/color.css')}}" rel="stylesheet" />-->
        
        <!--<link rel="preload" href="{{asset('public_gurgaon/assets/css/bootstrap.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">-->
        <!--<noscript><link rel="stylesheet" href="{{asset('public_gurgaon/assets/css/bootstrap.min.css')}}"></noscript>-->

        <!--Favicon-->
        <link rel="icon" href="{{asset('public_gurgaon/assets/images/sci-favicon.png')}}" type="image/x-icon" />
        
        <link href="{{asset('public_gurgaon/assets/css/font-awesome.min.css')}}" rel="stylesheet" />
        
        
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />-->
        
        <link rel="preload" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap"></noscript>
        
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap"></noscript>
        
        <link rel="preload" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap"></noscript>
        
        <link rel="preload" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap"></noscript>
        
        
        <!-- Google Fonts -->
        <!--<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800&display=swap" rel="stylesheet" />-->
        <!--<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />-->
        <!--<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900&display=swap" rel="stylesheet" />-->
        <!--<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet" />-->
        
        <link rel="preload" href="{{ url('public/assets/toastr/css/toastr.min.css?v='.time()) }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{ url('public/assets/toastr/css/toastr.min.css?v='.time()) }}"></noscript>
        
        
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css" />
        
<script type="application/ld+json">
{
  "@context": "https://schema.org/", 
  "@type": "Product", 
  "name": "SCI International Hospital",
  "image": "https://scihospital.com/public/assets/images/sci%20logo.webp",
  "description": "SCI Hospital is one of the best Surgical Hospital In Delhi with the latest equipment and facilities focused on Urology, Genecology, Obstetrics, Neonatology, Advanced Laparoscopic & General Surgery. Contact Now.",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "bestRating": "5",
    "worstRating": "1",
    "ratingCount": "942"
  }
}
</script>

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async defer src="{{asset('public_gurgaon/assets/js/googlecode.js?id=UA-153779027-2')}}"></script>
        <!--<script async defer src="https://www.googletagmanager.com/gtag/js?id=UA-153779027-2"></script>-->
        <script>window.setTimeout(function () {
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-153779027-2');
        }, 7000);</script>

        <!-- Meta Pixel Code -->
        <script>window.setTimeout(function () {
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '536297990418444');
        fbq('track', 'PageView');
        }, 7000);</script>
        <noscript><img height="1" width="1" style="display:none"
        src="https://www.facebook.com/tr?id=536297990418444&ev=PageView&noscript=1"
        /></noscript>
        <!-- End Meta Pixel Code -->


        
    

    <div class="shop-page layout-medlab">
        <header class="header">
            <div class="header-quickLinks js-header-quickLinks d-lg-none">
                <div class="quickLinks-top js-quickLinks-top"></div>
                <div class="js-quickLinks-wrap-m"></div>
            </div>
            <div class="header-topline d-lg-flex">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-9 mob_center">
                            <div class="social_headre  ">
                                <div class="header-phone">
                                    <i class="icon-telephone"></i><a href="tel:01141675555">For General Queries -  01141675555 </a> <span class="line_center">|</span>
                                </div>
                                <div class="header-info location_center"> <a href="https://scihospital.com/">Delhi  </a>&nbsp;&nbsp; - &nbsp;&nbsp;<div class="display_desktop"><i class="icon-telephone"></i> <a href="tel:9999446622">9999446622 </a></div>  <span class="line_center">|</span> <a href="{{ route('gurgaon.index') }}"> Gurgaon  </a>&nbsp;&nbsp;  &nbsp;&nbsp;<div class="display_desktop">- <i class="icon-telephone"></i> <a href="tel:9354471098">9354471098 </a></div> </div>
                            </div>
                        </div>
                        <div class="col-lg-3 text-lg-right text-center">
                            <div class="social_headre">
                                <span class="header-social">
                                    <a href="https://twitter.com/scihospital_" target="_blank" class="hovicon icon-"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.youtube.com/c/SCIHospital" target="_blank" class="hovicon icon-"><i class="fa fa-youtube"></i></a>
                                    <a href="https://www.facebook.com/scihospitalofficial" target="_blank" class="hovicon icon-"><i class="fa fa-facebook"></i></a>
                                    <a href="https://in.linkedin.com/company/scihospital" target="_blank" class="hovicon icon-"><i class="fa fa-linkedin"></i></a>
                                    <a href="https://www.instagram.com/scihospital/" target="_blank" class="hovicon icon-"><i class="fa fa-instagram"></i></a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Header Container -->
            <div class="header-wrapper">
                <!-- Header Main Container -->
                <div class="header-main">
                    <!-- Container -->
                    <div class="container-fluid">
                        <!-- Main Navigation & Logo -->
                        <div class="main-navigation">
                            <div class="row">
                                <!-- Main Navigation -->
                                <!--<div class="col-sm-12 rating_col">-->
                                <!--    <div class="rating">-->
                                <!--        <a href="https://goo.gl/maps/2NGD8LjVhXWTPg5H9" target="_blank">-->
                                <!--            <p><img src="{{asset('public_gurgaon/assets/images/google.png')}}" alt="" class="img-fluid" width="20" height="20" /> Top Rated in Delhi NCR-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--                <i class="fa fa-star"></i>-->
                                <!--            </p>-->
                                <!--        </a>-->
                                <!--    </div>-->
                                <!--</div>-->
                                
                                
                                <div class="col-md-12 columns">
                                    <nav class="navbar gfx-mega nav-left" role="navigation">
                                        <!-- Brand and toggle get grouped for better mobile display -->
                                        <div class="navbar-header">
                                            <a class="navbar-toggle" data-toggle="collapse" data-target="#gfx-collapse"></a>
                                            <div class="logo">
                                                <a href="{{ route('gurgaon.index') }}" class="header-logo"><img src="{{asset('public_gurgaon/assets/images/sci logo.webp')}}" width="362" height="200" alt="Logo" class="img-fluid" /></a>
                                            </div>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse menu_bar" id="gfx-collapse">
                                            <ul class="nav navbar-nav gfx-nav">
                                                <li class="active nav-item">
                                                    <a href="{{ route('gurgaon.index') }}">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ route('gurgaon.about-us') }}" class="nav-link"><i class="fa fa-hospital-o"></i> About Us</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ route('gurgaon.our-doctors') }}" class="nav-link"><i class="fa fa-user-md"></i> Our Doctors</a>
                                                </li>
                                                <li class="dropdown gfx-mega-fw">
                                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-speciality"><i class="fa fa-stethoscope" aria-hidden="true"></i>  Specialities <span class="caret"></span></a>
                                                    <ul class="dropdown-menu nav-speciality">
                                                        <li class="bor nav-speciality">
                                                            <form class="gfx-mega-content row nav-speciality">
                                                                <div class="col-sm-3 nav-speciality specialities-sections">
                                                                    <div class="accordion specialities-sub nav-speciality">
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list menu-list-style mb-2">
                                                                                <a href="{{ route('gurgaon.gallstone') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">Gallstone</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list  menu-list-style">
                                                                                <a href="{{ route('gurgaon.gallstone') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">Proctology </span>
                                                                                </a>
                                                                            </p>
                                                                            <div class="accordion-item-content">
                                                                                <ul class="sub-cat">
                                                                                    <li class="ab"><a href="{{ route('gurgaon.piles-treatment') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Piles</span></a></li>
                                                                                    <li class="ab"><a href="{{ route('gurgaon.fistula-treatment') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Fistula </span></a></li>
                                                                                    <li class="ab"><a href="{{ route('gurgaon.fissure-surgery') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Fissure</span></a></li>
                                                                                    <li class="ab"><a href="{{ route('gurgaon.hernia-surgery') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Hernia</span></a></li>
                                                                                    <li class="ab"><a href="{{ route('gurgaon.pilonidal-sinus') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Pilonidal Sinus</span></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </section>
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list menu-list-style mb-2">
                                                                                <a href="{{ route('gurgaon.dental-implants') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">Dental implants & Orthodontics</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list menu-list-style mb-2">
                                                                                <a href="{{ route('gurgaon.cosmetic-and-plastic-surgery') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">Cosmetic & Plastic Surgery</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list menu-list-style mb-2">
                                                                                <a href="#" class="nav-speciality">
                                                                                    <span class="nav-speciality">Regenerative Medicine & Stem Cell</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 nav-speciality specialities-sections">
                                                                    <div class="accordion specialities-sub nav-speciality">
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list  menu-list-style">
                                                                                <a href="#" class="nav-speciality">
                                                                                    <span class="nav-speciality">Orthopaedics & Spine Surgery</span>
                                                                                </a>
                                                                            </p>
                                                                            <div class="accordion-item-content">
                                                                                <ul class="sub-cat">
                                                                                    <li class="ab"><a href="{{ route('gurgaon.hand-and-nerve-surgery') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Hand and Nerve </span></a></li>
                                                                                    <li class="ab"><a href="{{ route('gurgaon.orthopedic-hospitals') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i>  Orthopedic Treatments</span></a></li>
                                                                                    <li class="ab"><a href="{{ route('gurgaon.pediatric-orthopedic') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Pediatric Orthopedics </span></a></li>
                                                                                    <li class="ab"><a href="{{ route('gurgaon.sports-injury-treatment') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i>  Sports injury treatment</span></a></li>
                                                                                    
                                                                                </ul>
                                                                            </div>
                                                                        </section>
                                                                        
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list  menu-list-style">
                                                                                <a href="#" class="nav-speciality">
                                                                                    <span class="nav-speciality">Cosmetic Gynecology</span>
                                                                                </a>
                                                                            </p>
                                                                            <div class="accordion-item-content">
                                                                                <ul class="sub-cat">
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('gurgaon.vaginal-tightening') }}">
                                                                                            <span class="nav-speciality"><i class="fa fa-angle-right"></i> Vaginal Tightening Surgery</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('gurgaon.hymenoplasty-surgery') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Hymen repair surgery</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </section>
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list  menu-list-style">
                                                                                <a href="#" class="nav-speciality">
                                                                                    <span class="nav-speciality">Weight Loss Surgery</span>
                                                                                </a>
                                                                            </p>
                                                                            <div class="accordion-item-content">
                                                                                <ul class="sub-cat">
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('gurgaon.bariatric-surgery') }}">
                                                                                            <span class="nav-speciality"><i class="fa fa-angle-right"></i> Bariatric Surgery</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('gurgaon.allurion-balloon-surgery') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Allurion Balloon Surgery</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </section>
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list  menu-list-style">
                                                                                <a href="#" class="nav-speciality">
                                                                                    <span class="nav-speciality">Obstetrics & Gynecology</span>
                                                                                </a>
                                                                            </p>
                                                                            <div class="accordion-item-content">
                                                                                <ul class="sub-cat">
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('gurgaon.obstetrics-and-gynecology') }}">
                                                                                            <span class="nav-speciality"><i class="fa fa-angle-right"></i> Obstetrics & Gynecology</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('gurgaon.ovarian-cyst-treatment') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Ovarian Cyst treatment</span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('gurgaon.uterine-fibroid-treatment') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Uterine Fibroid Treatment</span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('gurgaon.endometriosis-treatment') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Endometriosis</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </section>
                                                                        
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list menu-list-style mb-2">
                                                                                <a href="{{ route('gurgaon.cochlear-implants') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">Cochlear Implants</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 nav-speciality specialities-sections">
                                                                    <div class="accordion specialities-sub nav-speciality">
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list  menu-list-style">
                                                                                <a href="#" class="nav-speciality">
                                                                                    <span class="nav-speciality">Urology</span>
                                                                                </a>
                                                                            </p>
                                                                            <div class="accordion-item-content">
                                                                                <ul class="sub-cat">
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('gurgaon.urology-treatment') }}">
                                                                                            <span class="nav-speciality"> <i class="fa fa-angle-right"></i> Urology</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="kidney-stone-treatment"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Kidney Stone Treatment </span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('gurgaon.enlarged-prostate') }}">
                                                                                            <span class="nav-speciality"><i class="fa fa-angle-right"></i> Enlarged Prostate Treatment </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    
                                                                                </ul>
                                                                            </div>
                                                                        </section>
                                                                        
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list  menu-list-style">
                                                                                <a href="{{ route('gurgaon.andrology-treatment') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">Andrology</span>
                                                                                </a>
                                                                            </p>
                                                                            <div class="accordion-item-content">
                                                                                <ul class="sub-cat">
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('gurgaon.male-infertility-treatment') }}">
                                                                                            <span class="nav-speciality"><i class="fa fa-angle-right"></i> Men Infertility </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('gurgaon.erectile-dysfunction-treatment') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Erectile Dysfunction Treatment </span></a>
                                                                                    </li>
                                                                                    
                                                                                </ul>
                                                                            </div>
                                                                        </section>
                                                                        
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list  menu-list-style">
                                                                                <a href="#" class="nav-speciality">
                                                                                    <span class="nav-speciality">Reconstructive Urology</span>
                                                                                </a>
                                                                            </p>
                                                                            <div class="accordion-item-content">
                                                                                <ul class="sub-cat">
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('gurgaon.hypospadias-surgery') }}">
                                                                                            <span class="nav-speciality"> <i class="fa fa-angle-right"></i> Hypospadias Surgery and Treatment</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('gurgaon.penile-enlargement-surgery') }}">
                                                                                            <span class="nav-speciality"> <i class="fa fa-angle-right"></i> Penile Enlargement Surgery</span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </section>
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list menu-list-style mb-2">
                                                                                <a href="#" class="nav-speciality">
                                                                                    <span class="nav-speciality">Internal Medicine & Endocrinology</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                        
                                                                        
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list  menu-list-style">
                                                                                <a href="#" class="nav-speciality">
                                                                                    <span class="nav-speciality">ENT (Ear, Nose and Throat)</span>
                                                                                </a>
                                                                            </p>
                                                                            <div class="accordion-item-content">
                                                                                <ul class="sub-cat">
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('gurgaon.ear-nose-throat-ent-specialist') }}">
                                                                                            <span class="nav-speciality"><i class="fa fa-angle-right"></i> ENT Specialist</span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('gurgaon.sinus-infection-treatment') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Sinus Infection Treatment</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </section>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-3 nav-speciality specialities-sections">
                                                                    <div class="accordion specialities-sub nav-speciality">
                                                                        
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list menu-list-style mb-2">
                                                                                <a href="{{ route('gurgaon.health-check-up') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">Health Check up</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                        

                                                                        
                                                                        <!--<section class="accordion-item nav-speciality">-->
                                                                        <!--    <p class="nav-speciality submenu_list  menu-list-style">-->
                                                                        <!--        <a href="#" class="nav-speciality">-->
                                                                        <!--            <span class="nav-speciality">Gynecology</span>-->
                                                                        <!--        </a>-->
                                                                        <!--    </p>-->
                                                                        <!--    <div class="accordion-item-content">-->
                                                                        <!--        <ul class="sub-cat">-->
                                                                        <!--            <li class="ab">-->
                                                                        <!--                <a href="#"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Ovarian Cyst Treatment </span></a>-->
                                                                        <!--            </li>-->
                                                                        <!--            <li class="ab">-->
                                                                        <!--                <a href="#"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Uterine Fibroid Treatment</span></a>-->
                                                                        <!--            </li>-->
                                                                        <!--            <li class="ab">-->
                                                                        <!--                <a href="#"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Endometriosis</span></a>-->
                                                                        <!--            </li>-->
                                                                        <!--        </ul>-->
                                                                        <!--    </div>-->
                                                                        <!--</section>-->
                                                                        
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list menu-list-style mb-2">
                                                                                <a href="#" class="nav-speciality">
                                                                                    <span class="nav-speciality">Ophthalmology</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                        
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list menu-list-style mb-2">
                                                                                <a href="#" class="nav-speciality">
                                                                                    <span class="nav-speciality">Mother and Child Care</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                        
                                                                         <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list menu-list-style mb-2">
                                                                                <a href="#" class="nav-speciality">
                                                                                    <span class="nav-speciality">Neonatology & Pediatrics</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                       
                                                                    </div>
                                                                </div>
                                                                
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </li>

                                                
                                                <li>
                                                    <a href="{{ route('gurgaon.make-an-appointment') }}"><i class="fa fa-calendar"></i> Book Appointments</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('gurgaon.international-patients') }}"><i class="fa fa-users"></i> International Patients</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('gurgaon.blog') }}"> Blog</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.navbar-collapse -->
                                    </nav>
                                </div>
                                <!-- /Main Navigation -->
                            </div>
                        </div>
                        <!-- /Main Navigation & Logo -->
                    </div>
                    <!-- /Container -->
                </div>
                <!-- /Header Main Container -->
            </div>
            <!-- /Header Container -->
        </header>


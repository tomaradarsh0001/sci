<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $pageTitle ? $pageTitle : '' }}</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="description" content="{{ $pageDescription ? $pageDescription : '' }}" />
        <meta name="keywords" content="{{ $keywords ? $keywords : '' }}">
        <meta name="robots" content="@yield('define_robots')" />
        
        <script>
            window.location.replace("https://scihospital.com/ovarian-cyst-treatment");
        </script>
        
        <meta name="author" content="" />
        <meta name="format-detection" content="telephone=no" />

        <meta name="google-site-verification" content="IeTc8tlA0nwNJi7bd4hUI-55SyPuEVtY9wFhABhXBZ4" />
        
        <link rel="canonical" href="https://scihospital.com/ovarian-cyst-treatment" />
        <meta property="og:title" content="{{ $pageTitle ? $pageTitle : '' }}">
        <meta property="og:site_name" content="scihospital">
        <meta property="og:url" content="{{ url()->current() }}/">
        <meta property="og:description" content="{{ $pageDescription ? $pageDescription : '' }}">
        <meta property="og:type" content="@yield('define_urltype')">
        <meta property="og:image" content="@yield('ob_img')">
        
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@scihospital_">
        <meta name="twitter:title" content="SCI Hospital">
        <meta name="twitter:description" content="{{ $pageDescription ? $pageDescription : '' }}">
        
        <link rel="alternate" hreflang="en-IN" href="{{ url()->current() }}" />
        <link rel="apple-touch-icon" href="https://scihospital.com/public/assets/images/sci%20logo.webp" />
       
        
        <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"></noscript>
        
        <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"></noscript>



        <!-- Stylesheets -->
        
        <link rel="preload" href="{{asset('assets/vendor/slick/slick.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{asset('assets/vendor/slick/slick.css')}}"></noscript>
        
        <link rel="preload" href="{{asset('assets/vendor/animate/animate.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{asset('assets/vendor/animate/animate.min.css')}}"></noscript>
        
        <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
        
        <link rel="preload" href="{{asset('assets/icons/style.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{asset('assets/icons/style.css')}}"></noscript>
        
        <link rel="preload" href="{{asset('assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{asset('assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css')}}"></noscript>
        
        <!--<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />-->
        
        <link rel="preload" href="{{asset('assets/css/style.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{asset('assets/css/style.css')}}"></noscript>
        
         <link rel="preload" href="{{asset('assets/css/newstyle.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="{{asset('assets/css/newstyle.css')}}"></noscript>
        
        <!--<link href="{{asset('assets/css/newstyle.css')}}" rel="stylesheet" />-->
        
        <link href="{{asset('assets/css/navmenu.css')}}" rel="stylesheet" />
        <!--<link href="{{asset('assets/color/color.css')}}" rel="stylesheet" />-->
        
        <!--<link rel="preload" href="{{asset('assets/css/bootstrap.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">-->
        <!--<noscript><link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"></noscript>-->

        <!--Favicon-->
        <link rel="icon" href="{{asset('assets/images/sci-favicon.png')}}" type="image/x-icon" />
        
        <link href="{{asset('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
        
        
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
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "MedicalOrganization",
  "name": "SCI International Hospital",
  "url": "https://scihospital.com/",
  "logo": "https://scihospital.com/public/assets/images/sci%20logo.webp",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "9999446622",
    "contactType": "emergency",
    "areaServed": "IN",
    "availableLanguage": "en"
  }
}
</script>

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
        <script async defer src="{{asset('assets/js/googlecode.js?id=UA-153779027-2')}}"></script>
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

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-F7WP2RYCNJ"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

 

  gtag('config', 'G-F7WP2RYCNJ');
</script>

<!-- Google Tag Manager -->
<script>
window.setTimeout(function () {
(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PC9FZCQM');
}, 7000);
</script>
<!-- End Google Tag Manager -->
    

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
                                    <i class="icon-telephone"></i><a href="tel:011-41041131">For General Queries -  011-41041131 </a> <span class="line_center">|</span>
                                </div>
                                <div class="header-info location_center"> <a href="https://scihospital.com/" target="_blank">Delhi </a>&nbsp;&nbsp; - &nbsp;&nbsp;<div class="display_desktop"><i class="icon-telephone"></i> <a href="tel:9999446622">9999446622 </a></div>  <span class="line_center">|</span> <a href="https://scihospital.com/gurgaon" target="_blank"> Gurgaon </a>&nbsp;&nbsp;  &nbsp;&nbsp;<div class="display_desktop">- <i class="icon-telephone"></i> <a href="tel:9354471022 ">9354471022  </a></div> </div>
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
                                <!--            <p><img src="{{asset('assets/images/google.png')}}" alt="" class="img-fluid" width="20" height="20" /> Top Rated in Delhi NCR-->
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
                                                <a href="{{ route('/') }}" class="header-logo"><img src="{{asset('assets/images/sci logo.webp')}}" width="362" height="200" alt="Logo" class="img-fluid" /></a>
                                            </div>
                                        </div>

                                        <!-- Collect the nav links, forms, and other content for toggling -->
                                        <div class="collapse navbar-collapse menu_bar" id="gfx-collapse">
                                            <ul class="nav navbar-nav gfx-nav">
                                                <li class="active nav-item">
                                                    <a href="{{ route('/') }}">Home</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ route('about-us') }}" class="nav-link"><i class="fa fa-hospital-o"></i> About Us</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="{{ route('our-doctors') }}" class="nav-link"><i class="fa fa-user-md"></i> Our Doctors</a>
                                                </li>
                                                <li class="dropdown gfx-mega-fw">
                                                    <a href="#" data-toggle="dropdown" class="dropdown-toggle nav-speciality"><i class="fa fa-stethoscope" aria-hidden="true"></i>  Specialities <span class="caret"></span></a>
                                                    <ul class="dropdown-menu nav-speciality">
                                                        <li class="bor nav-speciality">
                                                            <form class="gfx-mega-content row nav-speciality">
                                                                <div class="col-sm-3 nav-speciality specialities-sections">
                                                                    <div class="accordion specialities-sub nav-speciality">
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list menu-list-style">
                                                                                <a href="#" class="nav-speciality">
                                                                                    <span class="nav-speciality">Urology</span>
                                                                                </a>
                                                                            </p>
                                                                            <div class="accordion-item-content">
                                                                                <ul class="sub-cat">
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('urology-and-andrology') }}">
                                                                                            <span class="nav-speciality"><i class="fa fa-angle-right"></i> Urology </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('kidney-stones') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Kidney Stone Treatment </span></a>
                                                                                    </li>
                                                                                    <!--<li class="ab">
                                                                                        <a href="#">
                                                                                            <span class="nav-speciality"><i class="fa fa-angle-right"></i> Laser Prostate Treatment </span>
                                                                                        </a>
                                                                                    </li>-->
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('enlarged-prostate') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Enlarged Prostate Treatment </span></a>
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
                                                                                        <a href="{{ route('hypospadias') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Hypospadias Surgery and Treatment</span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('penile-enlargement-surgery') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Penile Enlargement Surgery</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </section>
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list  menu-list-style">
                                                                                <a href="#" class="nav-speciality">
                                                                                    <span class="nav-speciality">Andrology</span>
                                                                                </a>
                                                                            </p>
                                                                            <div class="accordion-item-content">
                                                                                <ul class="sub-cat">
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('male-infertility') }}">
                                                                                            <span class="nav-speciality"><i class="fa fa-angle-right"></i> Men Infertility </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('urology-erectile-dysfunction') }}">
                                                                                            <span class="nav-speciality"><i class="fa fa-angle-right"></i> Erectile Dysfunction Treatment </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </section>
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality  menu-list-style">
                                                                                <a href="{{ route('dental-department') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">Dental implants & Orthodontics</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality  menu-list-style">
                                                                                <a href="{{ route('internal-medicine-endocrinology') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">Internal Medicine & Endocrinology</span>
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
                                                                                    <span class="nav-speciality">General Surgery</span>
                                                                                </a>
                                                                            </p>
                                                                            <div class="accordion-item-content">
                                                                                <ul class="sub-cat">
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('advanced-laparoscopic-general-surgery') }}">
                                                                                            <span class="nav-speciality"><i class="fa fa-angle-right"></i> Laparoscopy surgery </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('fistula-treatment') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Fistula Treatment </span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('piles-treatment') }}">
                                                                                            <span class="nav-speciality"> <i class="fa fa-angle-right"></i> Piles Treatment </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="#"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Appendix Surgery </span></a>
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
                                                                                        <a href="{{ route('bariatric-surgery') }}">
                                                                                            <span class="nav-speciality"><i class="fa fa-angle-right"></i> Bariatric Surgery </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('allurion-balloon-surgery') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Allurion Balloon Surgery</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </section>

                                                                       
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality  menu-list-style">
                                                                                <a href="{{ route('department-of-dermatology-cosmetology-plastic-surgery') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">Cosmetic & Plastic Surgery</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality  menu-list-style">
                                                                                <a href="{{ route('health-check-up') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">Health Check up</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality  menu-list-style">
                                                                                <a href="{{ route('department-of-ophthalmology') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">Ophthalmology</span>
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
                                                                                    <span class="nav-speciality">Obstetrics & Gynecology</span>
                                                                                </a>
                                                                            </p>
                                                                            <div class="accordion-item-content">
                                                                                <ul class="sub-cat">
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('obstetricsand-gynecology') }}">
                                                                                            <span class="nav-speciality"> <i class="fa fa-angle-right"></i> Obstetrics & Gynecology </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('ovarian-cryst-treatment') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Ovarian Cyst treatment  </span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('fibroid-treatment') }}">
                                                                                            <span class="nav-speciality"><i class="fa fa-angle-right"></i> Uterine Fibroid Treatment </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('endometriosis-treatment') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Endometriosis </span></a>
                                                                                    </li>
                                                                                    
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
                                                                                        <a href="{{ route('vaginal-tightening-surgery') }}">
                                                                                            <span class="nav-speciality"> <i class="fa fa-angle-right"></i> Vaginal Tightening Surgery </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('hymen-repair-surgery') }}">
                                                                                            <span class="nav-speciality"> <i class="fa fa-angle-right"></i> Hymen repair surgery </span>
                                                                                        </a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </section>
                                                                        
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality  menu-list-style">
                                                                                <a href="{{ route('infertilitytreatment') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">IVF & Fertility Treatments</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality  menu-list-style">
                                                                                <a href="{{ route('mother-and-child-care') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">Mother and Child Care</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality  menu-list-style">
                                                                                <a href="{{ route('neontology-and-paeds') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">Neonatology & Pediatrics</span>
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
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('orthopaedic') }}">
                                                                                            <span class="nav-speciality"><i class="fa fa-angle-right"></i> Orthopedic Treatments </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('paeds-orthopaedics') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Pediatric Orthopedics </span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('sports-injury-treatment') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Sports injury treatment  </span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </section>

                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality  menu-list-style">
                                                                                <a href="{{ route('stemcellandregenerativemedicine') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">Regenerative Medicine & Stem Cell</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality  menu-list-style">
                                                                                <a href="{{ route('cochlear-implants') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">Cochlear Implants</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>
                                                                       <!-- <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality">
                                                                                <a href="{{ route('best-ent-hospital') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">ENT</span>
                                                                                </a>
                                                                            </p>
                                                                        </section>-->
                                                                        <section class="accordion-item nav-speciality">
                                                                            <p class="nav-speciality submenu_list  menu-list-style">
                                                                                <a href="#" class="nav-speciality">
                                                                                    <span class="nav-speciality">ENT (Ear, Nose and Throat)</span>
                                                                                </a>
                                                                            </p>
                                                                            <div class="accordion-item-content">
                                                                                <ul class="sub-cat">
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('best-ent-hospital') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> ENT Specialist</span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="{{ route('sinus-infection-treatment') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Sinus Infection Treatment</span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </section>
                                                                        
                                                                        <!--<section class="accordion-item nav-speciality">
                                                                            <h4 class="nav-speciality">
                                                                                <a
                                                                                    href="{{ route('best-ent-hospital') }}" class="nav-speciality">
                                                                                    <span class="nav-speciality">ENT</span>
                                                                                </a>
                                                                            </h4>
                                                                            <div class="accordion-item-content">
                                                                                <ul class="sub-cat">
                                                                                    <li class="ab">
                                                                                        <a href="#">
                                                                                            <span class="nav-speciality"> Rhinoplasty </span>
                                                                                        </a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="#"><span class="nav-speciality"> Fess- Sinus Surgery </span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="#"><span class="nav-speciality"> Tonsil & Adenoid Surgery </span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="#"><span class="nav-speciality"> Sinuplasty </span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="#"><span class="nav-speciality"> Microlaryngeal Surgery </span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="#"><span class="nav-speciality"> Tympanoplasty & Ossiculplasty </span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="#"><span class="nav-speciality"> Thyroid & Submandibular Gland Surgery </span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="#"><span class="nav-speciality"> Copchlear Implants Surgery </span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="#"><span class="nav-speciality"> Bera & Assr </span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="#"><span class="nav-speciality"> Allergy, Testing & Immunotherpy </span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="#"><span class="nav-speciality"> Hearing Speech & Therapy </span></a>
                                                                                    </li>
                                                                                    <li class="ab">
                                                                                        <a href="#"><span class="nav-speciality"> ENT Endoscopic Evaluation </span></a>
                                                                                    </li>
                                                                                </ul>
                                                                            </div>
                                                                        </section>-->
                                                                    </div>
                                                                </div>
                                                                
                                                            </form>
                                                        </li>
                                                    </ul>
                                                </li>

                                                
                                                <li>
                                                    <a href="{{ route('make-an-appointment') }}"><i class="fa fa-calendar"></i> Book Appointments</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('international-patients') }}"><i class="fa fa-users"></i> International Patients</a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('blog') }}"> Blog</a>
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


@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')
<script type="application/ld+json"> 

{ 

  "@context": "https://schema.org", 

  "@type": "FAQPage", 

  "mainEntity": [{ 

    "@type": "Question", 

    "name": "What is the most common type of treatment for ovarian cysts?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "The common treatment for ovarian cysts is removal by laparoscopy." 

    } 

  },{ 

    "@type": "Question", 

    "name": "What is the most common cause of ovarian cysts?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "The most common cause of ovarian cysts is hormonal problems." 

    } 

  },{ 

    "@type": "Question", 

    "name": "What size ovarian cysts need surgery?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "Large cysts (>5 to 10cm) are the ones that require surgical removal as compared to small-sized cysts." 

    } 

  },{ 

    "@type": "Question", 

    "name": "Can ovarian cysts stop fertility?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "The removal of ovarian cysts may require treatment but it doesn’t affect the person’s fertility." 

    } 

  }] 

} 

</script> 
</head>
<body>
    
    
  
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('/') }}">Home</a>
                    <a href="#">Our Specialists</a>
                    <a href="#">Obstetrics & Gynecology</a>
                    <span>Overian Cyst Treatment</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section pb-70 services_sec">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 col-lg-8 mt-md-0">
                    <div class="title-wrap">
                        <h1 class="theme-color">Ovarian cyst treatment</h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('assets/images/banner/ovarian-cysts-SCI.png')}}" class="img-fluid" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>The ovaries are an essential part of the female reproductive system. These are present inside the lower abdomen on either side of the uterus. The two ovaries are about the shape and size of an almond.  </p>
                        <p>Eggs (ova) that mature and develop in the ovaries are released every monthly cycle during their childbearing years. Both ovaries of women produce eggs and female hormones – estrogen and progesterone.  </p>
                        <p>However, sometimes fluid-filled sac(s) called cysts are developed in an ovary or on the surface. Many women are observed to have ovarian cysts at some time in their life. These ovarian cysts typically begin as little and cause no harm or discomfort. Most of these cysts also disappear without any treatment in a few months.</p>
                        <p>But if the ovarian cysts rupture, they can cause serious symptoms. For protecting your health, you need to get a regular pelvic examination to know about the symptoms signaling a potential health issue.  </p>
                        
                        <div class="mt-3 mt-lg-6"></div>
                        <h2 class="theme-color">What are the symptoms of ovarian cysts? </h2>

                        
                        <p><strong>Common symptoms of an ovarian cyst are:  </strong></p>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i> Pain in the pelvis: It can be persistent pain or a dull ache in the lower back or thighs. The pain starts or ends during menstruation.  </li>
                            <li><i class="fa fa-check"></i> Irregular and painful menstruation: It could be lighter or heavier than before.  </li>
                            <li><i class="fa fa-check"></i> Dyspareunia: Pelvic pain occurs at the time of sexual intercourse.  </li>
                            <li><i class="fa fa-check"></i> Bowel issues: These issues include pain while passing stool or frequent urgency to pass stool or pressure on the bowels.  </li>
                            <li><i class="fa fa-check"></i> Abdominal problems: These include swelling, bloating, or heaviness.  </li>
                            <li><i class="fa fa-check"></i> Urinary problems: Problems while emptying the bladder or urgency to urinate frequently.  </li>
                        </ul>
                        <p>Hormonal abnormalities: Production of abnormal hormones, which results in unusual changes like body hair growth or changes in the way your breasts look.  </p>
                        
                        
                        <div class="mt-3 mt-lg-6"></div>
                        <h2 class="theme-color">Causes of Ovarian Cysts</h2>
                        <p>The following are the common causes of ovarian cysts:  </p>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i> Hormonal problems: The functional cysts generally go away, without any medical treatment. However, these are caused due to hormonal issues or due to drugs used for ovulation.  </li>
                            <li><i class="fa fa-check"></i> Endometriosis: If a woman has endometriosis, she is likely to develop a specific ovarian cyst, known as endometrioma. In this type of cyst, the endometriosis tissue is attached to the ovary for growth. These cysts cause pain during menstrual periods or intercourse.  </li>
                            <li><i class="fa fa-check"></i> Pregnancy: The ovarian cyst can also develop during early pregnancy for supporting the pregnancy unless the placenta is formed. Sometimes, this cyst remains in/on the ovary even after pregnancy and it must be removed.</li>
                        </ul>
                        <p>Severe pelvic infections: These infections can easily spread to ovaries or fallopian tubes, causing the formation of cysts.  </p>

                        <div class="mt-3 mt-lg-6"></div>
                        <h2 class="theme-color">Various Types of Ovarian Cysts</h2>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i> Follicular cysts: It is the most common type of ovarian cyst that develops due to follicle growth during the menstrual cycle.  </li>
                            <li><i class="fa fa-check"></i> Corpus luteum cysts: When pregnancy doesn’t occur, this corpusluteum (found inside the ovary) breaks down to disappear. However, it can also be filled with blood or fluid to persist as an ovarian cyst.  </li>
                            <li><i class="fa fa-check"></i> Chocolate cysts or endometrioma: This cyst occurs when the cells lining the uterus from inside, instead begin to grow outside the uterus.  </li>
                            <li><i class="fa fa-check"></i> Polycystic ovarian syndrome: It is usually called polycystic ovarian syndrome (PCOS), which is characterized by the formation of multiple small cysts inside both ovaries.  </li>
                            <li><i class="fa fa-check"></i> Tubo-ovarian abscesses: Infections of the pelvic organs can cause pus-filled cystic areas in ovaries or Fallopian tubes.  </li>
                            <li><i class="fa fa-check"></i> Dermoid cysts: These are cysts with abnormal tissue growth (benign or malignant).  </li>
                        </ul>
                        
                        <div class="mt-3 mt-lg-6"></div>

                        <h2 class="theme-color">Ovarian Cysts Treatment Options</h2>
                        <p>The doctor may suggest you either shrink or remove the ovarian cyst if it won’t go away on its own or grow larger. Here are the popular treatment options:  </p>
                        <h3 class="theme-color">Birth control pills</h3>
                        <p>For recurrent ovarian cysts, the specialists may prescribe you oral contraceptives for stopping ovulation and avoiding the formation of new cysts. Birth control pills also help in reducing the risk of ovarian cancer.  </p>
                        <div class="mt-3 mt-lg-6"></div>

                        <h3 class="theme-color">Surgery:</h3>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i> Laparoscopy: If the cyst is small and diagnosed to be cancer-causing, the doctor may perform laparoscopy surgery to remove the cyst. The specialist makes a small incision near the navel and inserts a tiny instrument in your abdomen for removing the cyst.  </li>
                            <li><i class="fa fa-check"></i> Laparotomy: For a large cyst, your doctor will recommend removing it through laparotomy surgery. If the cyst is cancerous, a hysterectomy is performed (via the surgical procedure) to remove the uterus or ovaries for removing the cancerous large cyst.  </li>
                        </ul>
                        <div class="mt-3 mt-lg-6"></div>

                        <h3 class="theme-color">Best Hospital for Ovarian Cyst Treatment</h3>
                        <p>SCI Hospital is a leading hospital in Delhi for treating ovarian cysts through advanced techniques. We have advanced Ultrasound Devices, MRI, and CT Scan devices for frequent monitoring and determining whether the cysts are functional or not.  </p>
                        <p>People across 55+ countries trust our experienced medical professionals due to the following reasons:  </p>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i> Expert Care 24/7: Our staff and a team of professional medical specialists, including gynecologists, obstetricians, anaesthesiologists, etc., ensure the best facilities 24/7, 365 days a year.  </li>
                            <li><i class="fa fa-check"></i> Advanced Facilities: We have advanced facilities like well-equipped operation theatres, ICUs, and aftercare facilities to ensure the utmost safety and care.  </li>
                        </ul>
                        <p>Best Care for High-risk disorders: We also have high-risk multidisciplinary specialists to ensure all our patients get the best treatment for complicated medical treatments  </p>
                        
                        <div class="mt-3 mt-lg-6"></div>

                        <h3 class="theme-color">Best Doctor for Ovarian Cyst in Delhi</h3>
                        <p>Dr.Arvind Kumar is one of the leading Laparoscopic surgeons in Delhi. With over 14 years of experience in the field of surgery, including Advanced Laparoscopic surgery, Dr. Kumar is associated with PSRI (PushpawatiSinghania Research Institute) and Dharmshila Cancer Institute as a GI surgeon and Consultant Advanced Laparoscopic Surgeon. He has operated on many challenging cases laparoscopically and other complicated cancer cases. At SCI Hospital, he works with our supportive medical team to deliver the best treatment to patients.  </p>
                
                <div class="mt-3 mt-lg-6"></div>
                        <h4 class="theme-color">Frequently Asked Questions Ovarian cyst treatment </h4>
                         
                         <div class="accordion faq_services" id="accordionExample">
                          <div class="card">
                            <div class="" id="headingOne">
                              <p class="mb-0">
                                <button class="faq_btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               What is the most common type of treatment for ovarian cysts?    <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                        
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                             The common treatment for ovarian cysts is removal by laparoscopy.  
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What is the most common cause of ovarian cysts?    <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                              <div class="card-body">
                               The most common cause of ovarian cysts is hormonal problems.
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What size ovarian cysts need surgery?    <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                              <div class="card-body">
                               Large cysts (>5 to 10cm) are the ones that require surgical removal as compared to small-sized cysts.   
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingFour">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can ovarian cysts stop fertility?     <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                              <div class="card-body">
                              The removal of ovarian cysts may require treatment but it doesn’t affect the person’s fertility.
                              </div>
                            </div>
                          </div>
                          
                        </div>
                    
                
                    </div>
                     <div class="row">
                        <div class="col-sm-12 mt-20">
                            <p class="theme-color font-heading-bold">Our Doctors</p>

                            <div class="row">
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="doctor_ab">
                                        <img src="{{asset('assets/images/doctors/Dr-Shivani-Sachdev-Gour.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Dr. Shivani Sachdeva Gour</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="doctor_ab">
                                        <img src="{{asset('assets/images/doctors/Dr-Mamta-Goel-1-300x300.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Dr. Mamta Goel</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="doctor_ab">
                                        <img src="{{asset('assets/images/doctors/Dr-Dhwani-Mago-300x300.jpg')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Dr. Dhwani Mago</p>
                                    </div>
                                </div>
                               
                               <div class="col-sm-12 text-center mt-3">
                                    <a href="tel:9999446622" class="btn"><i class="icon-right-arrow"></i><span>Call Doctor </span><i class="icon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20">
                            <p class="theme-color font-heading-bold">Image Gallery</p>
                            <div class="row">
                                
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/OT-at-SCI-Hospital.jpg')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">OT</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Single-Room-SCI-Hopsital.jpg')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Single Room</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Deluxe-ROOM-1.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Deluxe Room</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Pt-waiting-Area1-1.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Patient Waiting Area</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Pt-Waiting-Area-1.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Patient Waiting Area</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20">
                            <p class="theme-color font-heading-bold">Doctor Video</p>
                            <div class="row">
                                <div class="col-lg-6 text-center">
                                    <div class="images_gallery_ab">
                                        <div class="YoutubeLazy" data-embed="SkZfhjvE3Us">
                                            <span class="YoutubeButton"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20">
                            <p class="theme-color font-heading-bold">Patient Testimonials - Real People, Real Stories</p>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 text-center">
                                    <div class="images_gallery_ab">
                                        <div class="YoutubeLazy" data-embed="4Hj1NIEPxgQ">
                                            <span class="YoutubeButton"></span>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 text-center">
                                    <div class="images_gallery_ab">
                                        <div class="YoutubeLazy" data-embed="d_Qid9WfAiw">
                                            <span class="YoutubeButton"></span>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    
                   

                    
                  
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="question-box mb-3">
                        <p class="theme-color font-heading-bold">Consult Now</p>
                        <form action="{{ url('online-consultation') }}" class="mt-15 forms" id="" method="post" novalidate="novalidate">
                            @csrf
                            <div class="successform">
                                <p>Your message was sent successfully!</p>
                            </div>
                            <div class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <input type="text" class="form-control" name="name" placeholder="Your name*" />
                            <input type="text" class="form-control" name="email" placeholder="E-mail*" />
                            <input type="text" class="form-control" name="phone" placeholder="Phone" />
                            <textarea class="form-control" name="message" placeholder="Question*"></textarea>
                            <input type="hidden" name="subject" value="ovarian-cryst-treatment" />
                            <button type="submit" class="btn btn-sm btn-hover-fill mt-15">Ask Now <i class="fa fa-spinner fa-spin" style="display: none;"></i></button>
                    
                            
                        </form>
                    </div>
                    <!--services-->
                    @include('frontend.layouts.servicesside')
                    <!--//services-->
                    
                    <div class="row d-flex flex-column flex-sm-row flex-md-column mt-3">
   
    <div class="col-auto col-sm col-md-auto">
        <div class="contact-box contact-box-2">
            <p class="contact-box-title services-side-heading">Contact Info</p>
            <ul class="icn-list">
                <li>
                    <i class="icon-telephone"></i>
                    <div class="d-flex flex-wrap"><a href="tel:9999446622">+91 9999446622 (For Appointment), </a> <a href="tel:01141675555">011 4167 5555 (For General Queries)</a></div>
                </li>
                <li><i class="icon-placeholder2"></i>M 4, Near M Block Market, Greater Kailash-1, New Delhi, 110048</li>
            </ul>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>
<style>
    input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            input[type="number"] {
                -moz-appearance: textfield;
            }
</style>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PC9FZCQM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="footer mt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 footer-col1 pt-lg-3">
                <div class="row flex-column flex-md-row flex-lg-column">
                    <div class="col-md col-lg-auto footer_sec">
                        <div class="footer-logo">
                            <img src="{{asset('assets/images/sci logo.webp')}}" width="211" height="103" alt="" class="img-fluid" loading="lazy" />
                        </div>
                        <br />
                        <p><b>SCI International Hospital</b></p>
                        <ul class="icn-list">
                            <li><i class="icon-placeholder2"></i><a>M 4, Near M Block, Greater Kailash-1, New Delhi 110048</a> </li>
                            <li><a class="call_btn_f" href="tel:9999446622"><i class="icon-telephone"></i> 9999446622</a></li>
                            <li><i class="icon-placeholder2"></i><a>Plot No. 7, Golf Course Rd, Sector 43, Gurugram, Haryana 122002</a></li>
                            <li><a class="call_btn_f" href="tel:9354471022 "><i class="icon-telephone"></i>  9354471022 </a></li>
                            
                            <!--<li>-->
                            <!--    <i class="icon-telephone"></i>-->
                            <!--    <span class="phone">-->
                            <!--        <a href="tel:9354471098 "><span class="text-nowrap">9354471098  (For General Queries)</span></a>-->
                            <!--    </span>-->
                            <!--</li>-->
                        </ul>
                        <div class="mt-2 mt-lg-0"></div>
                    </div>
                    <!--<div class="col-md col-lg-auto footer_sec">
                        <div class="footer-logo">
                            <img src="{{asset('assets/images/sci logo.webp')}}" width="362" height="200" alt="" class="img-fluid" loading="lazy" />
                        </div>
                        <br />
                        <p><b>SCI International Hospital</b></p>
                        <ul class="icn-list">
                            <li><i class="icon-placeholder2"></i><a href="https://www.google.com/maps/place/SCI+International+Hospital/@28.5499247,77.2341854,15z/data=!4m5!3m4!1s0x0:0x96728b689c533cc3!8m2!3d28.5499247!4d77.2341854" target="_blank">M 4 & 8, Greater Kailash-1, New Delhi 110048</a></li>
                            <li>
                                <i class="icon-telephone"></i>
                                <span class="phone">
                                    <a href="tel:9354471022 "><span class="text-nowrap">+91 9354471022  (For Appointment) </span></a>, <a href="tel:01141675555"><span class="text-nowrap">011-41041131/2/3/4 (For General Queries)</span></a>
                                </span>
                            </li>
                            
                        </ul>
                        <div class="mt-2 mt-lg-0"></div>
                    </div>-->
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <p class="title-head">ABOUT US</p>
                <div class="h-decor"></div>
                <ul class="menu_list_footer">
                    <li><i class="fa fa-angle-right"></i><a href="{{ route('blog') }}"> Blogs</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="{{ route('about-us') }}"> Vision & Mission</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="{{ route('our-doctors') }}"> Doctor’s Team</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="{{ route('contact') }}"> Contact Us</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3">
                <p class="title-head">PATIENT CARE</p>
                <div class="h-decor"></div>
                <ul class="menu_list_footer">
                    <li><i class="fa fa-angle-right"></i><a href="{{ route('make-an-appointment') }}"> Book an Appointment</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="{{ route('insurance-and-tpa') }}"> Insurance and TPA</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="{{ route('international-patients') }}"> International Patients</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3">
                <p class="title-head">PANELS</p>
                <div class="h-decor"></div>
                <ul class="menu_list_footer">
                    <li><i class="fa fa-angle-right"></i><a href="{{ route('career') }}"> Careers</a></li>
                    <li><i class="fa fa-angle-right"></i><a href="{{ route('services') }}"> Services</a></li>
                   
                    <li><i class="fa fa-angle-right"></i><a href="{{ route('our-gallery') }}"> Media Gallery</a></li>
                </ul>

                <div class="footer-social">
                    <a href="https://twitter.com/scihospital_" target="_blank" class="hovicon"><i class="fa fa-twitter"></i></a>
                    <a href="https://www.youtube.com/c/SCIHospital" target="_blank" class="hovicon"><i class="fa fa-youtube"></i></a>
                    <a href="https://www.facebook.com/scihospitalofficial" target="_blank" class="hovicon"><i class="fa fa-facebook"></i></a>
                    <a href="https://in.linkedin.com/company/scihospital" target="_blank" class="hovicon"><i class="fa fa-linkedin"></i></a>
                    <a href="https://www.instagram.com/scihospital/" target="_blank" class="hovicon"><i class="fa fa-instagram"></i></a>
                </div>
                <br/>
                <a href="https://goo.gl/maps/U9B2cD92bYPcLSPMA" target="_blank"><img src="{{asset('assets/images/Google Reviews.png')}}" loading="lazy" width="200" height="100"  alt="" class="img-fluid" width="160" /></a>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row text-center text-md-left">
                <div class="col-sm">
                    <p>Copyright © 2023 <a href="#">SCI International Hospital. </a><span>All rights reserved.</span></p>
                </div>
                <div class="col-sm-auto ml-auto">
                    <p>
                        <span class="d-none d-sm-inline">For emergency cases&nbsp;&nbsp;&nbsp;</span><i class="icon-telephone"></i>&nbsp;&nbsp;<a href="tel:01141675555"><b>01141675555</b></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    
    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <p>Carefully Crafted by <a href="https://digeemed.com" target="_blank">DigeeMed.</a></p>
                </div>
            </div>
        </div>
    </div>
    
</div>

<div id="fixed-social" class="float">
    <div class="fixed-form-button">
        <a href="#" data-toggle="modal" data-target="#OnlineConsultation" id="consult_btn">
            <div>
                <i class="fa fa-envelope"></i> Online<br />
                Consultation
            </div>
        </a>
    </div>
    <div class="icon_fixed">
        <a href="https://api.whatsapp.com/send?phone=9999446622" class="fixed-whatsapp" target="_blank"><i class="fa fa-whatsapp"></i> <span>Whatsapp</span></a>
    </div>
    <div class="icon_fixed">
        <a href="tel:+91-9999446622" class="fixed-phone"><i class="fa fa-phone"></i> <span>Phone</span></a>
    </div>
</div>


<div class="mobile_bottom" data-toggle="modal" data-target="#OnlineConsultation">
    <i class="fa fa-envelope"></i> Online Consultation
</div>


<div class="backToTop js-backToTop">
    <i class="icon icon-up-arrow"></i>
</div>


<div class="modal modal-form modal-form-sm fade" id="OnlineConsultation">
    <div class="modal-dialog">
        <div class="modal-content">
            <button aria-label="Close" class="close" data-dismiss="modal">
                <i class="icon-error"></i>
            </button>
            <div class="modal-body">
                <div class="modal-form">
                    <p class="h3">Contact Form</p>
                    <!--questionForm-->
                    <form action="{{ url('online-consultation') }}" class="mt-15 forms" id="" method="post" novalidate="novalidate">
                        @csrf
                        <div class="input-group">
                            <span>
                                <i class="icon-user"></i>
                            </span>
                            <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name*" />
                        </div>
                        <div class="input-group">
                            <span>
                                <i class="icon-email2"></i>
                            </span>
                            <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*" />
                        </div>
                        
                        <div class="input-group">
                            <span>
                                <i class="icon-smartphone"></i>
                            </span>
                            <input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Your Phone">
                        </div>
                        
                        <textarea name="message" class="form-control" placeholder="Your comment*"></textarea>
                        <div class="text-right mt-2">
                            <input type="hidden" name="subject" value="Online Consultation">
                            <button type="submit" class="btn btn-sm btn-hover-fill">Ask Now <i class="fa fa-spinner fa-spin" style="display:none;"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-form modal-form-sm fade" id="modalQuestionForm">
    <div class="modal-dialog">
        <div class="modal-content">
            <button aria-label="Close" class="close" data-dismiss="modal">
                <i class="icon-error"></i>
            </button>
            <div class="modal-body">
                <div class="modal-form">
                    <p class="h3">Ask a Question</p>
                    <form action="{{ url('contact-form') }}" class="mt-15 forms" id="" method="post" novalidate="novalidate">
                        @csrf
                        <div class="input-group">
                            <span>
                                <i class="icon-user"></i>
                            </span>
                            <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name*" />
                        </div>
                        <div class="input-group">
                            <span>
                                <i class="icon-email2"></i>
                            </span>
                            <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*" />
                        </div>
                        <div class="input-group">
                            <span>
                                <i class="icon-smartphone"></i>
                            </span>
                            <input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Your Phone" />
                        </div>
                        <textarea name="message" class="form-control" placeholder="Your comment*"></textarea>
                        <div class="text-right mt-2">
                            <input type="hidden" name="subject" value="Ask a Question">
                            <button type="submit" class="btn btn-sm btn-hover-fill">Ask Now<i class="fa fa-spinner fa-spin" style="display:none;"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-form fade" id="modalBookingForm">
    <div class="modal-dialog">
        <div class="modal-content">
            <button aria-label="Close" class="close" data-dismiss="modal">
                <i class="icon-error"></i>
            </button>
            <div class="modal-body">
                <div class="modal-form">
                    <p class="h3">Book an Appointment</p>
                    <!--bookingForm-->
                    <form action="{{ url('book-an-appointment') }}" class="mt-15 forms" id="" method="post" novalidate="novalidate">
                        @csrf
                        <div class="input-group">
                            <span>
                                <i class="icon-user"></i>
                            </span>
                            <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name*" />
                        </div>
                        <div class="row row-xs-space mt-1">
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span>
                                        <i class="icon-email2"></i>
                                    </span>
                                    <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*" />
                                </div>
                            </div>
                            <div class="col-sm-6 mt-1 mt-sm-0">
                                <div class="input-group">
                                    <span>
                                        <i class="icon-smartphone"></i>
                                    </span>
                                    <input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Your Phone" />
                                </div>
                            </div>
                        </div>
                        <div class="row row-xs-space mt-1">
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span>
                                        <i class="icon-birthday"></i>
                                    </span>
                                    <input type="number" name="age" class="form-control" autocomplete="off" placeholder="Your age" />
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span>
                                        <i class="icon-clock"></i>
                                    </span>
                                    <div class="datepicker-wrap">
                                        <input name="time" type="text" class="form-control timepicker" placeholder="Time" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <span>
                                <i class="icon-micro"></i>
                            </span>
                            <input type="text" name="service" class="form-control" autocomplete="off" placeholder="Service" />
                        </div>
                        <div class="input-group flex-nowrap mt-1">
                            <span>
                                <i class="icon-calendar2"></i>
                            </span>
                            <div class="datepicker-wrap">
                                <input name="date" type="text" class="form-control datetimepicker" placeholder="Date" id="datepicker" readonly />
                            </div>
                        </div>

                        <textarea name="message" class="form-control" placeholder="Your comment"></textarea>
                        <div class="text-right mt-2">
                            <input type="hidden" name="subject" value="Book an Appointment">
                            <button type="submit" class="btn btn-sm btn-hover-fill">Book now <i class="fa fa-spinner fa-spin" style="display:none;"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!--<div class="modal fade modal-form" id="imagepop">
    <div class="modal-dialog">
        <div class="modal-content">
            <button aria-label="Close" class="close" data-dismiss="modal">
                <i class="icon-error"></i>
            </button>
            <div class="modal-body">
                <a href="https://scihospital.com/make-an-appointment"><img src="{{asset('assets/images/popup-image.png')}}" alt="" class="img-fluid" /></a>
            </div>
        </div>
    </div>
</div>-->


<!-- Vendors -->

	<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>-->
	<!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>-->

<!-- jQuery library -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!--<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>-->

<script src="{{asset('assets/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/bootstrap.min.js')}}"></script>

<script async src="{{asset('assets/vendor/jquery-migrate/jquery-migrate-3.0.1.min.js')}}"></script>
<script async src="{{asset('assets/vendor/cookie/jquery.cookie.js')}}"></script>
<script async src="{{asset('assets/vendor/bootstrap-datetimepicker/moment.js')}}"></script>
<script async src="{{asset('assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>
<script async src="{{asset('assets/vendor/popper/popper.min.js')}}"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

 <script>
 document.addEventListener('touchstart', onTouchStart, {passive: true});
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
  </script>

<script async src="{{asset('assets/vendor/waypoints/jquery.waypoints.min.js')}}"></script>
<script async src="{{asset('assets/vendor/waypoints/sticky.min.js')}}"></script>
<script async src="{{asset('assets/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
<script async src="{{asset('assets/vendor/slick/slick.min.js')}}"></script>
<script async src="{{asset('assets/vendor/scroll-with-ease/jquery.scroll-with-ease.min.js')}}"></script>
<script async src="{{asset('assets/vendor/countTo/jquery.countTo.js')}}"></script>
<script async src="{{asset('assets/vendor/form-validation/jquery.form.js')}}"></script>
<script async src="{{asset('assets/vendor/form-validation/jquery.validate.min.js')}}"></script>
<script async src="{{asset('assets/vendor/isotope/isotope.pkgd.min.js')}}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Custom Scripts -->
<script async src="{{asset('assets/js/app.js')}}"></script>
<script async src="{{asset('assets/js/navmenu.js')}}"></script>
<!-- <script src="{{asset('assets/color/color.js')}}"></script> -->
<script async src="{{asset('assets/js/app-shop.js')}}"></script>
<script async src="{{asset('assets/form/forms.js')}}"></script>

<script async src="{{ url('public/assets/toastr/js/toastr.init.js?v='.time()) }}"></script>
<script async src="{{ url('public/assets/toastr/js/toastr.min.js?v='.time()) }}"></script>

<script async src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.17.0/jquery.validate.min.js"></script>
<script async src="{{ asset('public/js/custom.js') }}"></script>


<script async src="https://cdnjs.cloudflare.com/ajax/libs/country-select-js/2.1.0/js/countrySelect.min.js"></script>
<script>
  $("#country").countrySelect();
</script>
<!-- Start of HubSpot Embed Code -->
<script id="hs-script-loader" async src="{{ asset('js/chatbox.js') }}"></script>
<!--<script type="text/javascript" id="hs-script-loader" async defer src="//js-na1.hs-scripts.com/6732630.js"></script>-->
<!-- End of HubSpot Embed Code -->

<script>
                $(document).scroll(function () {
                    var y = $(this).scrollTop();
                    if (y > 850) {
                        $(".display_mobile_app").addClass("display_mob");
                    } else {
                        $(".display_mobile_app").removeClass("display_mob");
                    }
                });


               /* $(document).ready(function () {
                    
                    $("#service_slider").owlCarousel({
                         nav:true,
      navText : ['<i class="fa fa-angle-left" aria-hidden="true"></i>','<i class="fa fa-angle-right" aria-hidden="true"></i>'],
                        items: 1,
                        itemsDesktop: [1199, 1],
                        itemsDesktopSmall: [980, 1],
                        itemsMobile: [600, 1],
                        autoPlay: 6000,
                        
                    });
                });*/
                

                
            </script>
                            <script>
    $('.inservice_slider').owlCarousel({
      margin: 15,
      nav: true,
      dots: false,
      loop:true,
      navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    });
  </script>
  
  <script>
    $('.img_gallery_slider').owlCarousel({
      margin: 15,
      nav: true,
      dots: false,
      loop:false,
      autoplay: true,
      navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 1
        }
      }
    });
</script>
            
            
</body>
</html>


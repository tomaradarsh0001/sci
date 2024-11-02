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

        

        <meta name="author" content="" />

        <meta name="format-detection" content="telephone=no" />



        <meta name="google-site-verification" content="IeTc8tlA0nwNJi7bd4hUI-55SyPuEVtY9wFhABhXBZ4" />

        

        <link rel="canonical" href="{{ url()->current() }}">

        <meta property="og:title" content="{{ $pageTitle ? $pageTitle : '' }}">

        <meta property="og:site_name" content="scihospital">

        <meta property="og:url" content="{{ url()->current() }}">

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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" />

        <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

        <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"></noscript>


        <!-- Stylesheets -->

        

        <link rel="preload" href="{{asset('/assets/vendor/slick/slick.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">

        <noscript><link rel="stylesheet" href="{{asset('/assets/vendor/slick/slick.css')}}"></noscript>

        

        <link rel="preload" href="{{asset('/assets/vendor/animate/animate.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">

        <noscript><link rel="stylesheet" href="{{asset('/assets/vendor/animate/animate.min.css')}}"></noscript>

        

        <link rel="stylesheet" href="{{asset('/assets/css/bootstrap.min.css')}}">

        

        <link rel="preload" href="{{asset('/assets/icons/style.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">

        <noscript><link rel="stylesheet" href="{{asset('/assets/icons/style.css')}}"></noscript>

        

        <link rel="preload" href="{{asset('/assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">

        <noscript><link rel="stylesheet" href="{{asset('/assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css')}}"></noscript>

        

        <!--<link href="{{asset('/assets/css/style.css')}}" rel="stylesheet" />-->

        

        <link rel="preload" href="{{asset('/assets/css/style.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">

        <noscript><link rel="stylesheet" href="{{asset('/assets/css/style.css')}}"></noscript>

        

         <link rel="preload" href="{{asset('/assets/css/newstyle.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">

        <noscript><link rel="stylesheet" href="{{asset('/assets/css/newstyle.css')}}"></noscript>

        

        <!--<link href="{{asset('/assets/css/newstyle.css')}}" rel="stylesheet" />-->

        

        <link href="{{asset('/assets/css/navmenu.css')}}" rel="stylesheet" />

        <!--<link href="{{asset('assets/color/color.css')}}" rel="stylesheet" />-->

        

        <!--<link rel="preload" href="{{asset('assets/css/bootstrap.min.css')}}" as="style" onload="this.onload=null;this.rel='stylesheet'">-->

        <!--<noscript><link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}"></noscript>-->



        <!--Favicon-->

        <link rel="icon" href="{{asset('/assets/images/sci-favicon.png')}}" type="image/x-icon" />

        

        <link href="{{asset('/assets/css/font-awesome.min.css')}}" rel="stylesheet" />

        

        

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

        

        <link rel="preload" href="{{ url('/assets/toastr/css/toastr.min.css?v='.time()) }}" as="style" onload="this.onload=null;this.rel='stylesheet'">

        <noscript><link rel="stylesheet" href="{{ url('/assets/toastr/css/toastr.min.css?v='.time()) }}"></noscript>

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

    "ratingCount": "1657"

  }

}

</script>

<!-- Google Tag Manager -->

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);

})(window,document,'script','dataLayer','GTM-MV3X3C7');</script>

<!-- End Google Tag Manager -->



<!-- Google Tag Manager --> 

<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': 

new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], 

j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 

'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); 

})(window,document,'script','dataLayer','GTM-MV3X3C7');</script> 

<!-- End Google Tag Manager --> 



<!-- Event snippet for All Thank You page - AD conversion page  -->

<script>

  gtag('event', 'conversion', {'send_to': 'AW-11230294424/hir6COq-oKYZEJjjgusp'});

</script>



<!-- Event snippet for 270424 New Thank-you page conversion page -->

<script>

  gtag('event', 'conversion', {'send_to': 'AW-11230294424/FoagCIHK2qoZEJjjgusp'});

</script>



<script type="text/javascript"> 

    (function(c,l,a,r,i,t,y){ 

        c[a]=c[a]||function(){(c[a].q=c[a].q||[]).push(arguments)}; 

        t=l.createElement(r);t.async=1;t.src="https://www.clarity.ms/tag/"+i; 

        y=l.getElementsByTagName(r)[0];y.parentNode.insertBefore(t,y); 

    })(window, document, "clarity", "script", "lce0ux4rl5"); 

</script> 





        <!-- Global site tag (gtag.js) - Google Analytics -->

        <script async defer src="{{asset('/assets/js/googlecode.js?id=UA-153779027-2')}}"></script>

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

 <style>

ul.nav li.dropdown:hover ul.dropdown-menu {

    display: block;

}

ul.dropdown-menu {

    box-shadow: none;

    padding: 0;

}

.red_contact .fixed-phone {

    background-color: #c0333d;

    border-radius: 0px 0px 0px 10px;

}

.red_contact .fixed-phone span {

    background-color: #c0333d;

}

 </style>   



    <div class="shop-page layout-medlab">

       @if (request()->route()->getName() === 'landing-page'  || request()->route()->getName() === 'hip-replacement-surgery' || request()->route()->getName() === 'knee-replacement-surgery' || request()->route()->getName() === 'acl-tear-surgery' || request()->route()->getName() === 'gallstone-surgery' || request()->route()->getName() === 'urethral-stricture' || request()->route()->getName() === 'male-infertility-lp' || request()->route()->getName() === 'peyronie-disease' || request()->route()->getName() === 'general-orthopedic' || request()->route()->getName() === 'penile-implant' || request()->route()->getName() === 'urology' || request()->route()->getName() === 'andrology-erectile' || request()->route()->getName() === 'general-surgery' || request()->route()->getName() === 'maternity' || request()->route()->getName() === 'kidney-stone' || request()->route()->getName() === 'urology-hypospadias' || request()->route()->getName() === 'hands-and-nerve'  )

       <header class="header">

           <div class="header-wrapper">

                <!-- Header Main Container -->

                <div class="header-main header-new">

                    <!-- Container -->

                    <div class="container">

                        <!-- Main Navigation & Logo -->

                        <div class="main-navigation">

                            <div class="row">

                               

                                

                                

                                <div class="col-md-12 columns">

                                    <nav class="navbar gfx-mega nav-left" role="navigation">

                                        <!-- Brand and toggle get grouped for better mobile display -->

                                        <div class="navbar-header">

                                            <a class="navbar-toggle" data-toggle="collapse" data-target="#gfx-collapse"></a>

                                            <div class="logo">

                                                <a href="{{ route('/') }}" class="header-logo" onclick="return false;"><img src="{{asset('/assets/images/sci logo.webp')}}" width="362" height="200" alt="Logo" class="img-fluid" /></a>

                                            </div>

                                        </div>



                                        <!-- Collect the nav links, forms, and other content for toggling -->

                                        <div class="collapse navbar-collapse menu_bar" id="gfx-collapse">

                                            <ul class="nav navbar-nav gfx-nav">

                                                <li class="active nav-item">

                                                    <a href="#about">Services</a>

                                                </li>

                                                <li class="active nav-item">

                                                    <a href="#team">Our Team</a>

                                                </li>

                                                <li class="active nav-item">

                                                    <a href="#services">About us</a>

                                                </li>

                                                <li class="active nav-item">

                                                    <a href="#form" class="btn-outline">Contact Us</a>
                                                    <!-- <a href="https://wa.me/+918595441585" class="whatsapp_btn" style="border-radius: 50px; padding: 10px;"><i class="fa fa-whatsapp"></i> Get Cost on WhatsApp</a> -->

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

       </header>

       @else

       <header class="header">

            <div class="header-quickLinks js-header-quickLinks d-lg-none">

                <div class="quickLinks-top js-quickLinks-top"></div>

                <div class="js-quickLinks-wrap-m"></div>

            </div>

            <div class="header-topline d-lg-flex">

                <div class="container-fluid">

                    <div class="row align-items-center">

                        <div class="col-lg-9 mob_center">

                            <div class="social_headre">

                                <div class="header-phone">

                                    <i class="icon-telephone"></i><a href="tel:011-41041131">For General Queries -  011-41041131 </a> <span class="line_center">|</span>

                                </div>

                                <div class="header-info location_center"> <a href="https://scihospital.com/" target="_blank">Delhi </a>&nbsp;&nbsp; - &nbsp;&nbsp;<div class="display_desktop"><i class="icon-telephone"></i> <a href="tel:9999446622">9999446622 </a></div>  <span class="line_center">|</span> <a href="{{ route('gurgaon.index') }}"> Gurgaon </a>&nbsp;&nbsp;  &nbsp;&nbsp;<div class="display_desktop">- <i class="icon-telephone"></i> <a href="tel:9354471022 ">9354471022  </a></div> </div>

                            </div>

                        </div>

                        <div class="col-lg-3 text-lg-right text-center">

                            <div class="social_headre">

                                <span class="header-social">

                                    <a href="https://www.facebook.com/scihospitalofficial" target="_blank" class="hovicon icon-"><i class="fa fa-facebook"></i></a>

                                    <a href="https://www.instagram.com/scihospital/" target="_blank" class="hovicon icon-"><i class="fa fa-instagram"></i></a>

                                    <a href="https://www.youtube.com/c/SCIHospital" target="_blank" class="hovicon icon-"><i class="fa fa-youtube"></i></a>

                                    <a href="https://in.linkedin.com/company/scihospital" target="_blank" class="hovicon icon-"><i class="fa fa-linkedin"></i></a>

                                    <a href="https://twitter.com/scihospital_" target="_blank" class="hovicon icon-"><img src="{{asset('/assets/images/twitter.webp')}}" width="20" height="20" alt="" class="img-fluid white_ic" loading="lazy" /></a>

                                    

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

                                <!--            <p><img src="{{asset('/assets/images/google.png')}}" alt="" class="img-fluid" width="20" height="20" /> Top Rated in Delhi NCR-->

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

                                                <a href="{{ route('/') }}"  class="header-logo"><img src="{{asset('/assets/images/sci logo.webp')}}" width="362" height="200" alt="Logo" class="img-fluid" /></a>

                                            </div>

                                        </div>



                                        <!-- Collect the nav links, forms, and other content for toggling -->

                                        <div class="collapse navbar-collapse menu_bar" id="gfx-collapse">

                                            <ul class="nav navbar-nav gfx-nav">

                                                <li class="active nav-item">

                                                    <a href="{{ route('/') }}">Home</a>

                                                </li>

                                                



                                                <li class="nav-item dropdown">

                                                    <a href="{{ route('about-us') }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="nav-link"><i class="fa fa-hospital-o"></i> About Us<span class="caret"></span></a>

                                                    <ul class="dropdown-menu"><li><a style="text-transform: capitalize;font-size: 14px;" href="{{ route('our-team') }}"> Our Team</a></li></ul>

                                                    

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

                                                                                        <a href="{{ route('ovarian-cyst-treatment') }}"><span class="nav-speciality"><i class="fa fa-angle-right"></i> Ovarian Cyst treatment  </span></a>

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

       @endif    




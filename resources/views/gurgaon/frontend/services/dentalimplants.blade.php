@extends('gurgaon.frontend.layouts.main') @section('main-container')
 @section('gurgaon.define_robots', 'index, follow') @section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')
<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /></noscript>

<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" /></noscript>



</head>
<body>
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('gurgaon.index') }}">Home</a>
                    <a href="#">Our Specialists</a>
                    <span>Best Dental Implants In Gurgaon</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section pb-70">
        <div class="container services_sec">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="title-wrap">
                        <h1 class="theme-color">Best Dental Implants In Gurgaon</h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('public_gurgaon/assets/images/blog/dental-banner.png')}}" class="img-fluid" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>
                            SCI Hospital, our certified and best orthodontist in Gurgaon NCR utilizes the most recent innovation to give you tastefully and practically immaculate teeth. The group of oral specialists, maxillofacial
                            specialists, implantologists, periodontics, orthodontists, and dental hygienists give great results at a reasonable cost at the best dental hospital in Gurgaon. At SCI Dental Hospital, Our patients find real
                            peace of mind because we provide them excellence, polished skill, cutting-edge research, quick treatment, and money-related benefits with special care for cleanliness.
                        </p>
                        <p>
                            The best dental implants in Gurgaon, SCI Hospital, has three particular treatment rooms and an activity theater having the most recent innovation to give you an advanced imaging administration equipped for making
                            optical impressions of crowns and decorations made with regular-looking metal-free earthenware production. Our all equipment is certified as meeting CE standards, and we adhere strictly to all applicable
                            sterilization protocols, including Class B autoclaving and the pouched pressing of delicate instruments. Thanks to these focuses, professionals at SCI Hospital can provide a uniquely high level of care. Many
                            patients from many countries have recently chosen our SCI Dental department as their preferred comprehensive dental support center.
                        </p>

                        <div class="mt-3 mt-lg-6"></div>

                        <div class="row servicse_tab_inner">
                            <div class="col-sm-12">
                                <h2 class="theme-color mb-3">Dental Treatment and Procedure</h2>
                            </div>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="tab_home nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                            <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab">Dental Implants </a>
                                            <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"> Dental Braces</a>
                                            <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"> Dental Aligners</a>
                                            <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"> Aesthetics Dentistry</a>

                                            <a class="nav-link" data-toggle="pill" href="#tab-F" role="tab"> Root Canal Procedures</a>
                                            <a class="nav-link" data-toggle="pill" href="#tab-G" role="tab"> Full Mouth Rehabilitation</a>
                                            <a class="nav-link" data-toggle="pill" href="#tab-H" role="tab"> Prosthetics</a>
                                            <a class="nav-link" data-toggle="pill" href="#tab-I" role="tab"> Scaling and Gum Treatment</a>
                                            <a class="nav-link" data-toggle="pill" href="#tab-E" role="tab"> Pediatric Dentistry </a>
                                            <a class="nav-link" data-toggle="pill" href="#tab-J" role="tab"> Pediatric Dentistry for Special needs children</a>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div id="tab-content" class="tab-content mt-2">
                                            <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12 h-100">
                                                        <h3 class="theme-color"><b>Dental Implants</b></h3>
                                                        <p>
                                                            If you have lost one or more teeth, a dental implant procedure is conducted to replace the missing teeth. It is like an artificial screw-type device that is inserted into the
                                                            jawbone by a dentist or a surgeon. The jawbone acts as an anchor for the tooth. If you want to regain your self-confidence after losing teeth, visit the experts at SCI Hospital for
                                                            the best dental implants in Gurgaon.
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <img src="{{asset('public_gurgaon/assets/images/img-gallery/dental/Dental-Implants.png')}}" class="img-fluid" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12 h-100">
                                                        <h3 class="theme-color"><b>Dental Braces</b></h3>
                                                        <p>
                                                            Dental braces are used to align the misaligned, crooked or rotated teeth as well as for misaligned jaw alignments. It can be used by people of all ages, including kids, teens, and
                                                            adults. They are formed depending on the tooth formation of a person. Avail the best solution for your teeth from the best dentist in Gurgaon at SCI Hospital.
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <img src="{{asset('public_gurgaon/assets/images/img-gallery/dental/Dental-Braces.png')}}" class="img-fluid" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12 h-100">
                                                        <h3 class="theme-color"><b>Dental Aligners </b></h3>
                                                        <p>
                                                            Dental Aligners include procedures like root canal treatment, cavity fillings, etc. These procedures are done for two reasons. The first reason is to restore the teeth's basic
                                                            function, and the second reason is to restore the teeth's appearance. Get world-class facilities and services from the best orthodontist in Gurgaon at SCI Hospital.
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <img src="{{asset('public_gurgaon/assets/images/img-gallery/dental/Dental-Aligners.png')}}" class="img-fluid" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12 h-100">
                                                        <h3 class="theme-color"><b>Aesthetics Dentistry</b></h3>
                                                        <p>
                                                            Aesthetics Dentistry is also known as smile design. It is a mix of cosmetic and dental procedures to improve the imperfections of the teeth.It helps improve the person's looks and
                                                            health. Over time, our teeth get chipped, worn down, and turn yellow. Smile design helps improve the look of your teeth. The best orthodontist in Gurgaon at SCI Hospital can help
                                                            you get a better smile with proper teeth.
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <img src="{{asset('public_gurgaon/assets/images/img-gallery/dental/Grin-Design.png')}}" class="img-fluid" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-E" class="tab-pane fade" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12 h-100">
                                                        <h3 class="theme-color"><b>Pediatric Dentistry </b></h3>
                                                        <p>
                                                            Kids often lose teeth, hurt themselves, or get cavities while playing. Pediatric dentistry is used to replace or fix children's missing teeth, remove cavities, and treat oral
                                                            injuries. At SCI hospital, we have a lot of skilled pediatric dentists who are good at working with kids.
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <img src="{{asset('public_gurgaon/assets/images/img-gallery/dental/Restorative.png')}}" class="img-fluid" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-F" class="tab-pane fade" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12 h-100">
                                                        <h3 class="theme-color"><b>Root Canal Procedures </b></h3>
                                                        <p>
                                                            A root canal procedure or root canal treatment (RCT), also called endodontic treatment, is a surgery that removes infected or inflamed tissue from inside a tooth. Infected pulp,
                                                            which resides in a layer beneath the tooth, can be treated by cleaning the area, filling it, and finally sealing it. At SCI Hospital, we have a group of highly trained
                                                            Orthodontists that are capable of performing RCT.
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <img src="{{asset('public_gurgaon/assets/images/img-gallery/dental/Root-Canal.png')}}" class="img-fluid" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-G" class="tab-pane fade" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12 h-100">
                                                        <h3 class="theme-color"><b>Dental Surgeries </b></h3>
                                                        <p>
                                                            Dental surgery is a common term used for a wide variety of procedures that a dentist can conduct on a patient's teeth. This can include removing cavities, correcting the misaligned
                                                            teeth, applying a crown or replacing the teeth that are beyond repair etc. They help in bringing back the smile and appearance of the mouth. SCI hospital has the best dentist in
                                                            Gurgaon who can perform many dental surgeries easily.
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <img src="{{asset('public_gurgaon/assets/images/img-gallery/dental/Dental-Surgeries.png')}}" class="img-fluid" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-H" class="tab-pane fade" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12 h-100">
                                                        <h3 class="theme-color"><b>Prosthetics </b></h3>
                                                        <p>
                                                            A dental prosthetic is a dental item used to replace a missing tooth or hide an infected tooth. These prosthetics can include dentures, veneers, crowns, etc. used on teeth. These
                                                            devices can be either temporary or permanent, depending on what the patient wants. SCI hospital have many advanced techniques and equipment that can help in developing complicated
                                                            prosthetics.
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <img src="{{asset('public_gurgaon/assets/images/img-gallery/dental/Restorative-Services.png')}}" class="img-fluid" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="tab-I" class="tab-pane fade" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12 h-100">
                                                        <h3 class="theme-color"><b>Scaling and Gum Treatment </b></h3>
                                                        <p>
                                                            The cleaning of the teeth and the gums through deep cleaning procedures helps in removing the hardened minerals that stick to the teeth over time. Doctors suggest that you should
                                                            get your teeth scaled time by time. This treatment can help keep the teeth in good shape. Talk to the best dentist in Gurgaon at SCI Hospital to find the right answer to your
                                                            query.
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <img src="{{asset('public_gurgaon/assets/images/img-gallery/dental/Scaling.png')}}" class="img-fluid" alt="" />
                                                    </div>
                                                </div>
                                            </div>

                                            <div id="tab-J" class="tab-pane fade" role="tabpanel">
                                                <div class="row">
                                                    <div class="col-md-12 h-100">
                                                        <h3 class="theme-color"><b>Pediatric Dentistry for Special Needs Children </b></h3>
                                                        <p>
                                                            In order to ensure that children with special needs have a favorable dental experience, SCI Hospital provides specialized Pediatric Dentistry services. When it's essential, we can
                                                            provide anesthesia during children's dental procedures.
                                                        </p>
                                                    </div>
                                                    <div class="col-sm-12 text-center">
                                                        <img src="{{asset('public_gurgaon/assets/images/img-gallery/dental/Pediatric-Dentistry-for-Special.png')}}" class="img-fluid" alt="" />
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div>
                        <div class="mt-3 mt-lg-6"></div>
                        <h2 class="theme-color">Orthodontics | Best Dental Hospital In Gurgaon</h2>
                        <p>
                            The benefits of orthodontic treatment extend far beyond only the aesthetic enhancement of one's smile. Without orthodontic treatment, crooked teeth can cause decay, gum disease, bone destruction, difficulty
                            biting and digesting food, speech impediments, tooth misfortune, and other dental problems.
                        </p>
                        <p>
                            Orthodontic treatment can be begun at any age. As a restorative treatment, it's open to people of all ages who want to feel and look wonderful. In any case, most problems are easier to fix when identified at a
                            young age, when jaw development has slowed down. Orthodontic treatment doesn't always exclude the need for surgery.. If you are suffering from any dental issue, then consult the best orthodontist in Gurgaon at
                            SCI hospital which is trusted by many patients and has been termed as the best dental hospital in Gurgaon.
                        </p>
                    </div>
                </div>
                
                <div class="col-sm-12">
                      <div class="mt-3 mt-lg-6"></div>
                        <h2 class="theme-color text-center mt-3">Best Dental Doctor In Gurgaon</h2>
                        <div class="doctor_details_section">
                            <div class="row align-items-center">
                                <div class="col-lg-3 col-md-3">
                                    <div class="doctor_img_detail">
                                        <img src="{{asset('public_gurgaon/public/assets/images/doctors/Shweta-Nawal.jpg')}}" class="img-fluid" alt="" />
                                        <br />
                                        <br />
                                        <a href="{{ route('gurgaon.dr-shweta-nawal')}}" class="btn"><i class="icon-right-arrow"></i><span>View More</span><i class="icon-right-arrow"></i></a>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <h5 class="doctor-box-name mb-2 theme-color">Dr. Shweta Nawal</h5>
                                    <p class="degree_section">Senior Dental Consultant</p>
                                    <ul class="list_details_doc">
                                        <li><i class="fa fa-map-marker"></i>Plot No. 7, Golf Course Rd, Sector 43, Gurugram, Haryana 122002</li>
                                        <li><i class="fa fa-phone"></i> Mobile: +91-9999446622</li>
                                        <li><i class="fa fa-envelope"></i> Email: info@scihospital.com</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                </div>
                
                

                <div class="col-md-12">
                     <div class="container">
                            <div class="row">
                                 
                    <div class="col-sm-12 text-center">
                         <div class="mt-2 mt-lg-6"></div>
                        <h4 class="theme-color">Image Gallery</h4>
                    </div>
                </div>
               @include('gurgaon.frontend.layouts.gallery')

                           
                            <div class="row">
                                <div class="col-md-8 col-lg-8 mt-3">
                                    <div class="row">
                                        <div class="col-12 text-center">
                                            <h2 class="theme-color text-center mt-3">Doctor’s Video</h2>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="owl-carousel owl-theme" id="video_youtube">
                                            <div class="item">
                                                <div class="YoutubeLazy" data-embed="nIgzngHYhqY">
                                                    <span class="YoutubeButton"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!--<div class="mt-3 mt-lg-2"></div>-->
                                    <!--<div class="row">-->
                                    <!--    <div class="col-12 text-center">-->
                                    <!--        <h2 class="theme-color text-center mt-3">Testimonial</h2>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    <!--<div class="row">-->
                                    <!--    <div class="owl-carousel owl-theme" id="video_youtube1">-->
                                    <!--        <div class="item">-->
                                    <!--            <div class="YoutubeLazy" data-embed="mcSG5vXvEHk">-->
                                    <!--                <span class="YoutubeButton"></span>-->
                                    <!--            </div>-->
                                    <!--        </div>-->
                                    <!--    </div>-->
                                    <!--</div>-->
                                    
                                    <div class="mt-3 mt-lg-6"></div>
                                    <h4 class="theme-color">Frequently Asked Questions About Tooth Treatment</h4>
                                    <div class="accordion faq_services" id="accordionExample">
                                        <div class="card">
                                            <div class="" id="headingOne">
                                                <p class="mb-0">
                                                    <button class="faq_btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        What are the most common dental procedures? <i class="fa fa-angle-down float-right"></i>
                                                    </button>
                                                </p>
                                            </div>

                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    The most common dental procedures are dental cleaning, dental whitening, extractions, fillings, braces, root canals, and many more.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <p class="mb-0">
                                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                        Are dental procedures painful? <i class="fa fa-angle-down float-right"></i>
                                                    </button>
                                                </p>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    There might be swelling when you are healing along with soreness and some discomfort after getting a dental procedure done.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <p class="mb-0">
                                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                        How long do dental fillings last? <i class="fa fa-angle-down float-right"></i>
                                                    </button>
                                                </p>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    Generally, amalgam fillings last from 5-25 years, composite fillers from 5-15 years, and gold fillings last for 15-20 years.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingFour">
                                                <p class="mb-0">
                                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                        Do fillings damage teeth? <i class="fa fa-angle-down float-right"></i>
                                                    </button>
                                                </p>
                                            </div>
                                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                                <div class="card-body">
                                                    There are two main risks of getting fillings done, which are infection and damage. In some cases, getting a filling led to the shedding of the tooth resulting in a small cavity behind.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-4 col-lg-4 mt-5 mb-3">
                                    <!--services-->
                                    @include('gurgaon.frontend.layouts.servicesside')
                                    <!--//services-->
                                    
                                    <div class="row d-flex flex-column flex-sm-row flex-md-column mt-3">
                                        <div class="col-auto col-sm col-md-auto">
                                            <div class="contact-box contact-box-2">
                                                <p class="contact-box-title services-side-heading">Contact Info</p>
                                                <ul class="icn-list">
                                                    <li>
                                                        <i class="icon-telephone"></i>
                                                        <div class="d-flex flex-wrap"><a href="tel: 0124-6948701 "> 0124-6948701  (For Appointment), </a> </div>
                                                    </li>
                                                    <li><i class="icon-placeholder2"></i>Plot No. 7, Golf Course Rd, Sector 43, Gurugram, Haryana 122002</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                </div>
            </div>
            <!--//section-->
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script>
            $("#video_youtube").owlCarousel({
                margin: 15,
                nav: false,
                dots: true,
                loop: true,
                navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 1,
                    },
                },
            });
            $("#video_youtube1").owlCarousel({
                margin: 15,
                nav: false,
                dots: true,
                loop: true,
                navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
                responsive: {
                    0: {
                        items: 1,
                    },
                    600: {
                        items: 1,
                    },
                    1000: {
                        items: 1,
                    },
                },
            });
        </script>

        
    </div>
</div>
@endsection
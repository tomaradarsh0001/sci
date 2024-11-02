@extends('gurgaon.frontend.layouts.main') @section('main-container')
 @section('gurgaon.define_robots', 'index, follow') @section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img', '')

<style>
    .newbtn {
        font-size: 14px !important;
        line-height: 22px !important;
        padding: 5px 20px !important;
        font-weight: 500 !important;
        color: #fff !important;
        background: #c0333d !important;
        border: 1px solid transparent;
        box-shadow: none !important;
    }
</style>

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

                    <span>Hand And Nerve Surgery In Gurgaon </span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section services_sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 mt-md-0">
                    <div class="title-wrap">
                        <h1 class="theme-color">Hand And Nerve Surgery In Gurgaon </h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('public_gurgaon/assets/images/services/Hand-And-Nerve-Surgery-In-Gurgaon.webp')}}" class="img-fluid w-100" alt="Hand And Nerve Surgery in Gurgaon" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <div class="col-sm-12">
                            <p>In our daily lives, human hands play a crucial role in carrying out demanding tasks, from experiencing sensations to lifting heavy weights. These hands are indispensable for performing all kinds of work. However, unfortunate incidents or accidents can lead to severe injuries, leaving significant wounds on these essential body parts. </p>
                            <p>This type of situation is very important to treat in the early phase, and our hand nerve repair surgery offers expert care, addressing conditions that affect these crucial functions. Skilled surgeons employ cutting-edge techniques to restore function and alleviate pain. With a focus on precision and patient well-being, Hand and Nerve Surgery in Gurgaon stands as a beacon of hope for those seeking comprehensive and effective treatment for hand and nerve-related conditions.</p>

                        
                        
                        
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Our Expertise </h2>
                                            <h3 class="theme-color">Nerve Injury </h3>
                                            <p>
                                               Nerve injuries can arise from various causes, impacting the intricate network of nerves in our body. Understanding and addressing nerve damage is crucial for effective treatment and recovery.
                                            </p>
                                            
                                            <h3 class="theme-color">Wrist Cut Injury / Self Wrist Cut</h3>
                                            <p>A wrist cut injury, especially if some did it themselves, it's really important to get proper care and pay close attention to the injury. Such incidents can result in complex challenges, necessitating a comprehensive approach to healing and rehabilitation.</p>
                                            
                                            <h3 class="theme-color">Microsurgery </h3>
                                            <p>Microsurgery involves intricate procedures performed with precision instruments, often using a microscope. This advanced technique is employed in delicate areas like the wrist to address complex injuries and facilitate optimal recovery.</p>
                                            
                                            <h3 class="theme-color">Nerve Transfers</h3>
                                            <p>Nerve transfers are innovative surgical techniques that involve redirecting healthy nerves to restore function in areas affected by nerve damage. This approach aims to improve overall nerve communication and enhance the chances of functional recovery.</p>
                                            
                                            <h3 class="theme-color">Median Nerve to Radial Nerve Transfer </h3>
                                            <p>In cases where the median nerve is transferred to the radial nerve, the goal is to optimize nerve function and restore movement and sensation. This targeted transfer can be a key component of a comprehensive treatment plan for specific types of nerve injuries.</p>
                                            
                                            <h3 class="theme-color">Intrafascicular Nerve Grafts </h3>
                                            <p>Intrafascicular nerve grafts involve the meticulous placement of grafts within the nerve fascicles. This technique is utilized to bridge nerve gaps and promote regeneration, fostering a conducive environment for the healing of damaged nerves.</p>
                                            
                                            
                                        </div>
                                    </div>
                                </div>

                                
                              
                                
                                <div class="mt-3 mt-lg-6"></div>

                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Common Conditions We Treat</h2>
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Carpal Tunnel Syndrome</li>
                                                <li><i class="fa fa-check"></i> Trigger Finger</li>
                                                <li><i class="fa fa-check"></i> Tendon Injuries</li>
                                                <li><i class="fa fa-check"></i> Fractures and Dislocations</li>
                                                <li><i class="fa fa-check"></i> Arthritis of the Hand</li>
                                                <li><i class="fa fa-check"></i> Nerve Compression Disorders</li>
                                            </ul>
                    
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                            </div>
                            <div class="col-sm-4">
                                @include('gurgaon.frontend.layouts.servicesside')
                                <div class="mb-5"></div>
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
                        
                        
                        

                        
                        

                        
                        
                        

                        <div class="mt-3 mt-lg-6"></div>
                       

                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="theme-color">Hand And Nerve Surgery Cost In Gurgaon</h2>
                                    <p>
                                        Hand and nerve surgery costs in Gurgaon vary based on how complex the procedure is and the skill of the surgeon. Prices typically include pre-operative consultations, surgical fees, and post-operative care. For accurate estimates, consult with experienced surgeons or medical facilities in the region. Factors such as diagnostics, rehabilitation, and hospital charges may influence the overall cost.
                                    </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-3 mt-lg-6"></div>
                       

                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h2 class="theme-color">Best Hospital For Hand And Nerve Surgery In Gurgaon</h2>
                                    <p>
                                        SCI Hospital, stands out as the best hospital for hand and nerve surgery in Gurgaon. Renowned for its cutting-edge facilities and a team of best hand surgeons in Gurgaon, SCI Hospital is committed to delivering top-notch care. With a focus on precision and patient well-being, they excel in hand and nerve surgeries, providing advanced treatments and compassionate support. Trust SCI Hospital for unparalleled expertise and exceptional outcomes in hand nerve surgery recovery time, ensuring your health is in capable hands. 
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>

                        <h2 class="theme-color text-center">Hand And Nerve Surgeon In Gurgaon</h2>

                        <div class="container">
                            <div class="row align-items-center">
                                <div class="owl-carousel" id="doccard_slider">
                                    <div class="post-slide2">
                                        <div class="team_box">
                                            <div class="row align-items-center">
                                                <div class="col-sm-4 col-lg-4">
                                                    <img src="https://scihospital.com/gurgaon/public/assets/images/doctors/DR-Rajesh-Bawari-200x200.jpg" alt="" class="img-responsive" loading="lazy" />
                                                </div>
                                                <div class="col-sm-8 col-lg-8">
                                                    <h5 class="doctor-box-name theme-color">Dr. Rajesh Bawari</h5>
                                                    <p>
                                                       Senior Consultant (Visiting) Orthopaedics<br>
Joint Replacement and Arthroscopy
                                                    </p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="line_box"></div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="btn_box_doc">
                                                        <a href="https://scihospital.com/gurgaon/dr-rajesh-bawari" class="newbtn btn"><i class="icon-right-arrow"></i><span>View More </span><i class="icon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-slide2">
                                        <div class="team_box">
                                            <div class="row align-items-center">
                                                <div class="col-sm-4 col-lg-4">
                                                    <img src="https://scihospital.com/gurgaon/public/assets/images/doctors/Punit.png" alt="" class="img-responsive" loading="lazy" />
                                                </div>
                                                <div class="col-sm-8 col-lg-8">
                                                    <h5 class="doctor-box-name theme-color">Dr. Punit Dilawari</h5>
                                                    <p>
                                                       Orthopaedics & Joint Replacement
                                                    </p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="line_box"></div>
                                                </div>

                                                <div class="col-sm-12">
                                                    <div class="btn_box_doc">
                                                        <a href="https://scihospital.com/gurgaon/dr-punit-dilawari" class="newbtn btn"><i class="icon-right-arrow"></i><span>View More </span><i class="icon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h4 class="theme-color">Image Gallery</h4>
                    </div>
                </div>
                @include('gurgaon.frontend.layouts.gallery')


                <div class="mt-3 mt-lg-6"></div>
                <div class="mt-3 mt-lg-6"></div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
    $("#doccard_slider").owlCarousel({
        margin: 15,

        dots: true,
        loop: true,
        autoplay: true,

        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 2,
            },
        },
    });
</script>
@endsection

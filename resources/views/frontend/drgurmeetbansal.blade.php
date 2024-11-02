@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')


</head>
<body>
    
    
  
<div class="page-content">
  
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('/') }}">Home</a>
                    <a href="{{ route('our-doctors') }}">Our Doctors</a>
                    <span>Dr. Gurmeet Bansal </span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first pb-70">
        <div class="container mt-6">
            <div class="row">
                <div class="container doctor_details_section">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="doctor_img_detail">
                                <img src="{{asset('assets/images/doctors/user.png')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr. Gurmeet Bansal </h5>
                            <p class="degree_section">GYNE  - MBBS, MD<br>DNB - Obstetrics & Gynecology (Infertility Specialist) </p>
                            <p class="degree_section">35years overall (33 yrs as specialist)</p>
                            <ul class="list_details_doc">
                                <li><i class="fa fa-map-marker"></i> M 4, Greater Kailash-1, M Block, part-1, Greater Kailash, New Delhi, Delhi 110048</li>
                                <li><i class="fa fa-phone"></i> Mobile: +91-9999446622</li>
                                <li><i class="fa fa-envelope"></i> Email: info@scihospital.com</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <div class="call_box">
                                <p><i class="fa fa-phone"></i></p>
                                <p class="app_doc">For Appointment, call us on</p>
                                <p><a href="tel:9999446622">+91-9999446622</a></p>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row align-items-center">
                        <!--<div class="col-lg-12">
                            <div class="tab_doctors">
                                <div class="tab_home row nav nav-pills-icons js-doc-carousel" role="tablist">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-university"></i>  EDUCATION</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-sticky-note-o"></i> DETAILS</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-sticky-note-o"></i> FELLOWSHIP </a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>MBBS from Maulana Azad Medical College (1997-2002)  </p>
                                                <p>MS from Lady Hardinge Medical College (2003-2006)  </p>
                                                <p>DNB General Surgery in May 2007  </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr Rajat Goel, is a trained Minimal Access and Bariatric surgeon having done his MBBS from prestigious Maulana Azad Medical College, and MS (Master of surgery) from Lady Hardinge Medical College with advanced laparoscopic training at Taiwan, Singapore and USA with 17 years of experience of general and advanced laparoscopic surgeries with 10000+ Laparoscopic surgeries and 1000+ Bariatric surgeries. He is specialized in all aspects of open and laparoscopic General surgery, Bariatric surgery and Single port (Scarless Surgery). He is also very much in research with 19 international publications and more than 100 published abstracts and 4 chapters in books and with all possible fellowships and memberships. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>1 year Fellowship in Minimally invasive and Bariatric surgery at National University Hospital, Singapore under Prof. Davide Lomanto, from 5th April 2010 to 4th April 2011. </p>
                                                <p>6 months Clinical Fellowship at Bariatric & Metabolic International Centre at E-Da Hospital, 1st centre of excellence for Bariatric surgery in Asia-Pacific region, Kaohsiung Taiwan, under Prof Chih Kun Huang from 5th July 2011 till 15th December 2011. </p>
                                                <p>Observership Colorectal Surgery, Cleveland Clinic Florida, USA under Prof Steven Wexner from 3rd January to 31st January 2012. </p>
                                                <p>F.MAS (Fellowship in Minimal access surgery) from World Laparoscopy Hospital in May 2011 recognized by SAGES, IAGES, WALS and EAES. </p>
                                                <p>FIAGES: Fellow of Indian Association of Gastrointestinal and Endo-surgeons. </p>
                                                <p>MNAMS: Member of national academy of medical sciences. </p>
                                                <p>FICS: Fellow of International College of Surgeons. </p>
                                                <p>FAIS: Fellow of Association of surgeons of India. </p>
                                                <p>FACS: Fellow of American college of surgeons. </p>
                                                <p>FCLS: Fellow of international college of laparoscopic surgeons </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->


</div>
@endsection
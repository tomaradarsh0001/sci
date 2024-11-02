@extends('gurgaon.frontend.layouts.main') @section('main-container')
 
@section('gurgaon.define_robots', 'index, follow')
@section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img', 'https://scihospital.com/gurgaon/public/assets/images/sci%20logo.webp')


</head>
<body>
    
    
  
<div class="page-content">
   
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('gurgaon.index') }}">Home</a>
                    <a href="{{ route('gurgaon.our-doctors') }}">Our Doctors</a>
                    <span>Dr. Deepanshu Gupta</span>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/dr-deepanshu-gupta.webp')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr. Deepanshu Gupta </h5>
                            <p class="degree_section">Senior Consultant<br/>Urologist & Andrologist</p>
                            <ul class="list_details_doc">
                                <li><i class="fa fa-map-marker"></i> Plot No. 7, Golf Course Rd, Sector 43, Gurugram, Haryana 122002  </li>
                                <li><i class="fa fa-phone"></i> Mobile: +91-9354471022</li>
                                <li><i class="fa fa-envelope"></i> Email: info@scihospital.com</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <div class="call_box">
                                <p><i class="fa fa-phone"></i></p>
                                <p class="app_doc">For Appointment, call us on</p>
                                <p><a href="tel:9354471022">+91-9354471022</a></p>
                            </div>
                        </div>
                    </div>
                   <hr />
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="tab_doctors">
                                <div class="tab_home row nav nav-pills-icons js-doc-carousel" role="tablist">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-university"></i> EDUCATION</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-trophy"></i> EXPERIENCE  </a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-graduation-cap"></i> FELLOWSHIP</a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>He has completed his MS General Surgery from the prestigious PGIMS, Rohtak and MCh (Urology and Genitourinary Surgery) from RML Hospital New Delhi where he secured 1st  Rank on an All India basis. He has a profound interest in academics and research and has many publications in international journals to his credit. He has been an organizer of many international and national conferences in Urology including the Global Perineocon 2018, OABCON, DUSCON to name a few. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Deepanshu Gupta is one of the top urologists in Gurgaon and Delhi NCR. He has 13 years of experience overall (4 years as a specialist). He is a dedicated and reputed urologist, andrologist, and renal transplant surgeon proficient in kidney stone treatment, prostate enlargement surgery, erectile dysfunction, and male infertility treatment. Having performed around 8,000 endoscopic surgeries in the last 10 years, he is particularly keen on delivering advanced urological treatment to the masses.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Deepanshu Gupta has also participated in various national and international conferences and made presentations. He is an active member of various societies like the European Association of Urology (EAU), Urology Association of Asia (UAA), Urology Society of India (USI), Delhi Urology Society(DUS), North Zone Urology Society of India(NZUSI), Delhi Medical Council(DMC) & American Urological Association. He is committed to his endeavour to lessen suffering and promote good health. </p>
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
    </div>
    <!--//section-->


</div>
@endsection
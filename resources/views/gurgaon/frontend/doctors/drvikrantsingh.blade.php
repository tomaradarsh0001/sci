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
                    <span>Dr. Vikrant Singh  </span>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/Vikrant.webp')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr. Vikrant Singh   </h5>
                            <p class="degree_section">Proctologist & Surgeon<br/>MS (Ayu ) spl-Piles, Fissure, Fistula Pilonidal sinus, Circumcision Expert</p>
                            <ul class="list_details_doc">
                                <li><i class="fa fa-map-marker"></i> Plot No. 7, Golf Course Rd, Sector 43, Gurugram, Haryana 122002</li>
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
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-trophy"></i> EXPERIENCE </a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-graduation-cap"></i> FELLOWSHIP </a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>BAMS, MS - Ayurvedic General Surgery  </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr Vikrant has a unique combination of Ayurvedic wisdom and Modern surgical skills used to treat Ano Rectal disorders like Piles/fissures/Fistula/Pilonidal Sinus. After pursuing his MS (Shalya) in General Surgery from a reputed university BVP Pune. He has got Diploma in Proctology from HHC Affiliated with the father of Proctology (Dr Antonio Longo).</p>
                                                <p>10 Years Experience Overall (6 years as a specialist)</p>
                                                <p>Dip in proctology (HHC Aff by Dr Antonio Longo Italy )</p>
                                                <p>-Expertise in Treating complex and Recurrent cases of Fistula.</p>
                                                <p>-Innovative DLPL BEST Method -Horse Shoe, High Supralevator Fistula  </p>
                                                <p><b>Non-Surgical Method -</b></p>
                                                <p>single incision Vedic  thread for complex and Recurrent Pilonidal sinus</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                   <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr Vikrant has dedicated his career to research and practice in Proctology and has been mentored by Dr Antonio Longo,world renowned colorectal surgeon and the inventor of MIPH and Starr Surgeries. He holds expertise in Lenoardo Laser for Treating Piles, Fissure and Fistula.  </p>
                                                
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
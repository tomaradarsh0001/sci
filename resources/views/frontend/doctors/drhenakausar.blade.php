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
                    <span>Dr. H. Kausar</span>
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
                                <img src="{{asset('assets/images/doctors/dr-hena-kausar.webp')}}" class="img-fluid" alt="Dr. H. Kausar Laparoscopic Surgeon (Obs & Gyn)" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr. H. Kausar</h5>
                            <p class="degree_section">MBBS, MS - Obstetrics & Gynaecology<br>Laparoscopic Surgeon (Obs & Gyn)<br>19 Years Experience Overall  (13 years as a specialist)</p>
                            <ul class="list_details_doc">
                                <li><i class="fa fa-map-marker"></i> M 4, Greater Kailash-1, M Block, part-1, Greater Kailash, New Delhi, Delhi 110048</li>
                                <li><i class="fa fa-phone"></i>  Mobile: +91-8178879594</li>
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
                        <div class="col-lg-12">
                            <div class="tab_doctors">
                                <div class="tab_home row nav nav-pills-icons js-doc-carousel" role="tablist">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-sticky-note-o"></i> Experience</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-trophy"></i> Fellowship</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-university"></i>  Education</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-users"></i> Membership</a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. H. Kausar is a highly experienced Laparoscopic Surgeon (Obstetrics & Gynecologist) in Delhi, with an impressive 19 years in the field. Currently, she practices at SCI International Hospital in Greater Kailash Part 1, Delhi.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. H. Kausar has completed a Fellowship in Gynaecological Endoscopy, securing the 2nd rank in the All India FOGSI-ICOG Exam. Additionally, she holds a DNB-CET qualification, showcasing her commitment to continuous learning and excellence in the field.
</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr.H. Kausar's academic journey includes outstanding achievements such as being awarded a scholarship in Robotic Surgery in Gynaecology. During her degree course of MS, she received the 1st Certificate of Merit for her exceptional thesis work, further highlighting her dedication to academic and research endeavors.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Kausar is part of respected medical groups like RCOG (Royal College of Obstetrics and Gynaecology, UK) and AOGD (Association of Gynaecology and Obstetrics Delhi). These memberships show her commitment to high standards in women's healthcare.</p>
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

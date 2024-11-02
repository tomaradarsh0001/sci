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
                    <span>Dr. Mayank Garg</span>
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
                                <img src="{{asset('assets/images/doctors/dr-mayank-garg-urologist.webp')}}" class="img-fluid" alt="Dr. Mayank Garg Urologist And Andrologist" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h1 class="doctor-box-name mb-2  theme-color">Dr. Mayank Garg</h1>
                            <p class="degree_section">Urologist & Andrologist, General Surgery <br/>MBBS, MS - General Surgery, MCh - Urology <br>10 Years Experience Overall  (6 years as a specialist)</p>
                            <ul class="list_details_doc">
                                <li><i class="fa fa-map-marker"></i> M 4, Greater Kailash-1, M Block, part-1, Greater Kailash, New Delhi, Delhi 110048</li>
                                <li><i class="fa fa-phone"></i> Mobile: +91-8287901614</li>
                                <li><i class="fa fa-envelope"></i> Email: info@scihospital.com</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <div class="call_box">
                                <p><i class="fa fa-phone"></i></p>
                                <p class="app_doc">For Appointment, call us on</p>
                                <p><a href="tel:8287901614">+91-8287901614</a></p>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="tab_doctors">
                                <div class="tab_home row nav nav-pills-icons js-doc-carousel" role="tablist">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-sticky-note-o"></i><h3 class="normal_text_tab">ABOUT</h3></a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-university"></i><h3 class="normal_text_tab">Education</h3></a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-trophy"></i><h3 class="normal_text_tab">Work Experience</h3></a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-sticky-note-o"></i><h3 class="normal_text_tab">Achievements</h3></a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-E" role="tab"><i class="fa fa-trophy"></i><h3 class="normal_text_tab">Specializations</h3></a>
                                    
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                               <p>Dr. Mayank Garg, a distinguished Urologist & Andrologist at SCI International Hospital GK-1, New Delhi, specializes in various fields for six years. His proficiency encompasses over 400 Endourological procedures and ultrasound scans, significantly impacting over 100 cases across trauma, Urogynecology, Uro-Oncology, and renal transplants.</p>
                                               </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                              <p>Dr. Mayank Garg's educational journey epitomizes a dedication to medical excellence. Armed with an MBBS from Kasturba Medical College, Mangalore, Karnataka, and an MS in General Surgery from Mysore Medical College, Karnataka, he refined his skills. He furthered his expertise, specializing in Urology with an M.CH from the Institute of Urology, Madras Medical College, Chennai. His involvement in biomedical research at NIE, ICMR, India underscores his commitment to advancing healthcare</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                               <p>Dr. Mayank Garg, a seasoned Urologist & Andrologist with MBBS, MS, and M.Ch qualifications, brings extensive expertise to his practice. He began his medical voyage with an internship at RML Hospital, Delhi, furthering his expertise as a General Surgery Junior Resident at Mysore Medical College and Research Institute. With over 400 Endourological procedures addressing various conditions, including stone disease and prostate issues, he excels in Percutaneous Nephrostomies and ultrasound scans for renal, bladder, and prostate conditions. Presently, he serves at SCI International Hospital, GK-1, New Delhi.</p>
                                                </div>
                                        </div>
                                    </div>
                                      <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                               <p>Dr. Garg has made significant contributions to the medical field through his publications and participation in scientific conferences. He has published and reviewed articles for numerous international journals, demonstrating his dedication to advancing medical knowledge. Dr. Garg has delivered multiple oral and video presentations at various scientific conferences, showcasing his expertise and contributing to the academic discourse in Urology. Notably, he was the winner of the urology quiz at TAPASU 2022, highlighting his proficiency in the field.</p>
                                               </div>
                                        </div>
                                    </div>
                                    <div id="tab-E" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                              <p>Dr. Garg specializes in various procedures, including URSL, OIU, TURP, TURBT, BNI, Vesicolitholapaxy, PCCL, Laser Lithotripsy, RIRS, URS+DJ stenting, Bladder Biopsy, and more. His special interests lie in renal stone disease, Prostate, and Uro-oncology, where he applies his expertise to provide personalized and effective treatments for his patients.</p>
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

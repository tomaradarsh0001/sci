@extends('gurgaon.frontend.layouts.main')
@section('main-container')

@section('gurgaon.define_robots', 'index, follow')
@section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img', 'https://scihospital.com/gurgaon/public/assets/images/sci%20logo.webp')
 


</head>
<body>
    
    
  
<div class="page-content">
    
    <!--//section-->
    
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('gurgaon.index') }}">Home</a>
                    <a href="{{ route('gurgaon.our-doctors') }}">Our Doctors</a>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/dr-mayank-garg-urologist.webp')}}" class="img-fluid" alt="Mayank Garg Urologist And Andrologist" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h1 class="doctor-box-name mb-2 theme-color">Dr. Mayank Garg</h1>
                            <p class="degree_section">Urologist & Andrologist <br>MBBS, MS - General Surgery, MCh - Urology</p>
                            <ul class="list_details_doc">
                                <li><i class="fa fa-map-marker"></i> Plot No. 7, Golf Course Rd, Sector 43, Gurugram, Haryana 122002</li>
                                <li><i class="fa fa-phone"></i> Mobile:  +91-9354471022</li>
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
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-sticky-note-o"></i><h3 class="normal_text_tab"> ABOUT</h3></a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-university"></i><h3 class="normal_text_tab">Education</h3></a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-university"></i><h3 class="normal_text_tab">Work Experience</h3></a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-trophy"></i><h3 class="normal_text_tab"> ACHIEVEMENTS</h3> </a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-E" role="tab"><i class="fa fa-trophy"></i><h3 class="normal_text_tab"> SPECIALIZATIONS</h3></a>
                                    
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                               
                                                <p>Dr. Mayank Garg is a highly experienced Urologist & Andrologist, with over a decade-long career, specializing for six years. Currently at SCI Hospital, Gurugram, Haryana, he excels in over 400 Endourological procedures and ultrasound scans, contributing to over 100 cases in trauma, Urogynecology, Uro-Oncology, and renal transplants.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                               <p>Dr. Mayank Garg's educational journey embodies a commitment to excellence in medicine. With an MBBS from Kasturba Medical College, Mangalore, and an MS in General Surgery from Mysore Medical College, he honed his skills. His pursuit of knowledge led him to specialize in Urology with an M.CH from the Institute of Urology, Madras Medical College. Additionally, his involvement in biomedical research at NIE, ICMR, India underscores his dedication to advancing healthcare.</p>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                              <p>Dr. Mayank Garg, a seasoned Urologist & Andrologist with MBBS, MS, and M.Ch qualifications, brings extensive expertise to his practice. He began his medical voyage with an internship at RML Hospital, Delhi, furthering his expertise as a General Surgery Junior Resident at Mysore Medical College and Research Institute. With over 400 Endourological procedures addressing various conditions, including stone disease and prostate issues, he excels in Percutaneous Nephrostomies and ultrasound scans for renal, bladder, and prostate conditions. Presently, he serves at SCI International Hospital, Gurugram.</p>
                                              </div>
                                        </div>
                                    </div>
                                    <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                               <p>Dr. Garg's impact on medicine is profound, evidenced by his prolific publications and active involvement in global scientific gatherings. He's authored and reviewed articles for esteemed international journals, underscoring his commitment to advancing medical frontiers. Through insightful oral and video presentations at diverse conferences, he enriches Urology's academic dialogue. Noteworthy is his triumph as the urology quiz champion at TAPASU 2022, a testament to his mastery.</p>
                                               </div>
                                        </div>
                                    </div>
                                    <div id="tab-E" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                               <p>Dr. Garg's expertise spans an array of procedures, from URSL to BNI, addressing diverse urological challenges. His focus on renal stone disease, Prostate, and Uro-oncology reflects his dedication to tailored patient care. Through his specialized skills in Laser Lithotripsy, RIRS, and beyond, he ensures effective treatment outcomes.</p>
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
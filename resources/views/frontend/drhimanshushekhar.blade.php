@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/doctors/Dr-Himanshu-Shekhar.png')
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Himanshu Shekhar",
  "url": "https://scihospital.com/dr-himanshu-shekhar",
  "image": "https://scihospital.com/public/assets/images/doctors/Dr-Himanshu-Shekhar.png",
  "jobTitle": "MBBS, MD Internal Medicine",
  "worksFor": {
    "@type": "Organization",
    "name": "SCI Hospital"
  }  
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
                    <a href="{{ route('our-doctors') }}">Our Doctors</a>
                    <span>Dr. Himanshu Shekhar</span>
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
                                <img src="{{asset('assets/images/doctors/Dr-Himanshu-Shekhar.png')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2 theme-color">Dr. Himanshu Shekhar</h5>
                            <p class="degree_section">MBBS, MD Internal Medicine</p>
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
    <div class="col-lg-12">
        <div class="tab_doctors">
            <div class="tab_home row nav nav-pills-icons js-doc-carousel" role="tablist">
                <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-sticky-note-o"></i> ABOUT</a>
                <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-university"></i> EDUCATION</a>
                <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-trophy"></i> ACHIEVEMENTS</a>
            </div>
            <div id="tab-content" class="tab-content mt-2">
                <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12 h-100">
                            <p>
                                A dynamic Medical Director (Physician) with 17 years of experience at SCI Multispeciality Hospital, Guruguram, He combines his medical postgraduate qualification with his hospital management qualification to bring an innovative and patient-centric approach to healthcare.

                            </p>
                        </div>
                    </div>
                </div>
                <div id="tab-B" class="tab-pane fade" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12 h-100">
                            <p>
                               Dr. Himanshu Shekhar holds Medical Postgraduate and Hospital Management Qualifications, blending medical expertise with managerial skills for innovative, patient-centered healthcare approaches.
                            </p>
                        </div>
                    </div>
                </div>
                <div id="tab-C" class="tab-pane fade" role="tabpanel">
                    <div class="row">
                        <div class="col-md-12 h-100">
                            <p>Dr. Himanshu Shekhar has earned prestigious awards, such as 'Young Medical Achiever' from the Indian Medical Association and recognition from the Heart Foundation of India. He also serves as a Medical Advisor to embassies, demonstrating his expertise and influence in medicine.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



                    <div class="row align-items-center">
                        

                        <div class="col-sm-12 gallery_doc mt-2">
                            <h3 class="theme-color">Image link for Acheivment</h3>
                            <div class="row specialist-carousel js-gallery-carousel align-items-center">
                                <div class="col-sm-6 col-md-4 category1">
                                    <div class="doctor-box doctor-box-style3 text-center">
                                        <div class="doctor-box-photo">
                                            <a href="#"><img src="{{asset('assets/images/img-gallery/a3.jpg')}}" class="img-fluid" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 category2">
                                    <div class="doctor-box doctor-box-style3 text-center">
                                        <div class="doctor-box-photo">
                                            <a href="#"><img src="{{asset('assets/images/img-gallery/a4.jpg')}}" class="img-fluid" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 category2">
                                    <div class="doctor-box doctor-box-style3 text-center">
                                        <div class="doctor-box-photo">
                                            <a href="#"><img src="{{asset('assets/images/img-gallery/a5.jpg')}}" class="img-fluid" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 category1">
                                    <div class="doctor-box doctor-box-style3 text-center">
                                        <div class="doctor-box-photo">
                                            <a href="#"><img src="{{asset('assets/images/img-gallery/a6.jpg')}}" class="img-fluid" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 category1">
                                    <div class="doctor-box doctor-box-style3 text-center">
                                        <div class="doctor-box-photo">
                                            <a href="#"><img src="{{asset('assets/images/img-gallery/a7.jpg')}}" class="img-fluid" alt="" /></a>
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
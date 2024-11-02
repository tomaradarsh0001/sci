@extends('gurgaon.frontend.layouts.main')
@section('main-container')

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. HimanshuShekhar",
  "url": "https://scihospital.com/dr-himanshu-shekhar",
  "image": "https://scihospital.com/public/assets/images/doctors/Dr-Himanshu-Shekhar.png",
  "sameAs": "https://scihospital.com/",
  "jobTitle": "Consultant Internal Medicine",
  "worksFor": {
    "@type": "Organization",
    "name": "SCI International Hospital"
  }  
}
</script>

</head>
<body>
    
    
  
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="container-fluid">
            <div class="row">
                 <img src="{{asset('public_gurgaon/assets/images/doctors/SCI-Doctors.jpg')}}" class="img-fluid" alt="" />
            </div>
        </div>
    </div>
    <!--//section-->
    
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('gurgaon.index') }}">Home</a>
                    <a href="#">Our Doctors</a>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Himanshu-Shekhar.png')}}" class="img-fluid" alt="" />
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
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-university"></i> EDUCATION</a>
                                    <!--<a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-sticky-note-o"></i> THESIS</a>-->
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>MD - Physician</p>
                                                <p>General Physician</p>
                                                <p>MBBS, MD Internal Medicine</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!--<div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>
                                                    Dr. Himanshu Shekar is a young, pro-active, energetic, and ambitious Medical Director with his unflinching quest to expand the super – specialty hospital chain of SCI International
                                                    Hospital, New Delhi. He has been gifted with entrepreneurial powers and sharp acumen, he played major role in the success of Primus Super Specialty and Cygnus Hospital Chains.
                                                </p>
                                                <p>
                                                    Dr. Himanshu is scripting further plans endlessly. Holding a Medical Post Graduate Qualification and Hospital Management Qualification. He Combines the best of them both to get the
                                                    innovative and patient-centric approach. Having worked in the best of the Hospitals in India and abroad, he believes in bringing up a culture that is entrepreneurial.
                                                </p>
                                            </div>
                                        </div>
                                    </div>-->
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-12 gallery_doc mt-2">
                            <h3 class="theme-color">Image link for Acheivment</h3>
                            <div class="row specialist-carousel js-gallery-carousel align-items-center">
                                <div class="col-sm-6 col-md-4 category1">
                                    <div class="doctor-box doctor-box-style3 text-center">
                                        <div class="doctor-box-photo">
                                            <a href="#"><img src="{{asset('public_gurgaon/assets/images/img-gallery/a3.jpg')}}" class="img-fluid" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 category2">
                                    <div class="doctor-box doctor-box-style3 text-center">
                                        <div class="doctor-box-photo">
                                            <a href="#"><img src="{{asset('public_gurgaon/assets/images/img-gallery/a4.jpg')}}" class="img-fluid" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 category2">
                                    <div class="doctor-box doctor-box-style3 text-center">
                                        <div class="doctor-box-photo">
                                            <a href="#"><img src="{{asset('public_gurgaon/assets/images/img-gallery/a5.jpg')}}" class="img-fluid" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 category1">
                                    <div class="doctor-box doctor-box-style3 text-center">
                                        <div class="doctor-box-photo">
                                            <a href="#"><img src="{{asset('public_gurgaon/assets/images/img-gallery/a6.jpg')}}" class="img-fluid" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 col-md-4 category1">
                                    <div class="doctor-box doctor-box-style3 text-center">
                                        <div class="doctor-box-photo">
                                            <a href="#"><img src="{{asset('public_gurgaon/assets/images/img-gallery/a7.jpg')}}" class="img-fluid" alt="" /></a>
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
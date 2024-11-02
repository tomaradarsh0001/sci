@extends('gurgaon.frontend.layouts.main')
@section('main-container')



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
                    <a href="{{ route('gurgaon.our-doctors') }}">Our Doctors</a>
                    <span>Dr. Akansha Saxena</span>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/Akansha.png')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr. Akansha Saxena </h5>
                            <p class="degree_section">ENT Specialist</p>
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
                   <!-- <hr />-->
                   <!--<div class="row align-items-center">-->
                   <!--     <div class="col-lg-12">-->
                   <!--         <div class="tab_doctors">-->
                   <!--             <div class="tab_home row nav nav-pills-icons js-doc-carousel" role="tablist">-->
                   <!--                 <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-university"></i>  Experience</a>-->
                                    
                   <!--             </div>-->
                   <!--             <div id="tab-content" class="tab-content mt-2">-->
                   <!--                 <div id="tab-A" class="tab-pane fade in active" role="tabpanel">-->
                   <!--                     <div class="row">-->
                   <!--                         <div class="col-md-12 h-100">-->
                   <!--                             <p>22 Years Experience Overall  (15 years as specialist) </p>-->
                   <!--                         </div>-->
                   <!--                     </div>-->
                   <!--                 </div>-->
                                    
                   <!--             </div>-->
                   <!--         </div>-->
                   <!--     </div>-->
                   <!-- </div>-->
                </div>
            </div>
        </div>
    </div>
    <!--//section-->


</div>
@endsection
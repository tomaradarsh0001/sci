@extends('gurgaon.frontend.layouts.main')
@section('main-container')

@section('gurgaon.define_robots', 'index, follow')
@section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img', 'https://scihospital.com/gurgaon/public/assets/images/doctors/Dr-mayank-Chugh.webp')
<script type="application/ld+json"> 
{ 
  "@context": "https://schema.org/", 
  "@type": "Person", 
  "name": "Dr. Mayank Chugh", 
  "url": "https://scihospital.com/gurgaon/dr-mayank-chugh", 
  "image": "https://scihospital.com/gurgaon/public/assets/images/doctors/Dr-mayank-Chugh.webp", 
  "jobTitle": "MBBS, MD Medicine", 
  "worksFor": { 
	"@type": "Organization", 
	"name": "Sci Hospital Gurugram" 
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
                    <a href="{{ route('gurgaon.index') }}">Home</a>
                    <a href="{{ route('gurgaon.our-doctors') }}">Our Doctors</a>
                    <span>Dr. Mayank Chugh</span>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/Dr-mayank-Chugh.webp')}}" class="img-fluid" alt="Dr Mayank Chugh  Acidity & Gastro Specialist" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h1 class="doctor-box-name mb-2 theme-color">Dr. Mayank Chugh</h1>
                            <p class="degree_section">MBBS, MD Medicine</p>
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
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-sticky-note-o"></i> ABOUT</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-university"></i> EDUCATION</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-trophy"></i> ACHIEVEMENTS</a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Mayank Chugh, an Internal Medicine specialist with 20 years of experience, practices at SCI Hospital in Gurgaon Sector 43, exemplifying a strong commitment to patient care.
 </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Mayank Chugh earned his MBBS from Bharati Vidyapeeth University, Pune, in 2003, and an MD in Medicine from H.N.B Garhwal University in 2006, enriching his proficiency in internal medicine.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Mayank Chugh's achievements lie in his 17 years of specialization in Internal Medicine, offering his patients valuable experience and expertise in the field. </p>
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
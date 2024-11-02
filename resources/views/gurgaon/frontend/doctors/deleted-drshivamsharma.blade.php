@extends('gurgaon.frontend.layouts.main')
@section('main-container')

@section('gurgaon.define_robots', 'index, follow')
@section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img', 'https://scihospital.com/gurgaon/public/assets/images/doctors/Dr-Shivam-Sharma.webp')
<script type="application/ld+json"> 
{ 
  "@context": "https://schema.org/", 
  "@type": "Person", 
  "name": "Dr. Shivam Sharma", 
  "url": "https://scihospital.com/gurgaon/dr-shivam-sharma", 
  "image": "https://scihospital.com/gurgaon/public/assets/images/doctors/Dr-Shivam-Sharma.webp", 
  "jobTitle": "MBBS, MD - General Medicine", 
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
                    <span>Dr. Shivam Sharma</span>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Shivam-Sharma.webp')}}" class="img-fluid" alt="Dr Shivam Sharma General Physician" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h1 class="doctor-box-name mb-2 theme-color">Dr. Shivam Sharma</h1>
                            <p class="degree_section">MBBS, MD - General Medicine <br>General Physician</p>
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
                                                <p>Dr. Shivam Sharma, an Internal Medicine specialist with 12 years of experience at SCI Hospital, prioritizes ethical, evidence-based care, emphasizing a comprehensive approach to patient well-being and satisfaction through teamwork.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Shivam Sharma possesses an MBBS degree, laying the foundation of his medical education, and has achieved an MD in General Medicine, furthering his qualifications and expertise in internal medicine.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Shivam Sharma's research on "Thyroid Dysfunction in Type 2 Diabetes Mellitus" highlights his dedication to advancing medical knowledge and enhancing patient care within the realm of internal medicine.</p>
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
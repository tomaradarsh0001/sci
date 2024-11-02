@extends('gurgaon.frontend.layouts.main') @section('main-container')
 
@section('gurgaon.define_robots', 'index, follow')
@section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img', 'https://scihospital.com/gurgaon/public/assets/images/sci%20logo.webp')

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Rajesh Bawari",
  "url": "https://scihospital.com/dr-rajesh-bawari",
  "image": "https://scihospital.com/public/assets/images/doctors/DR-Rajesh-Bawari-200x200.jpg",
  "sameAs": "https://scihospital.com/",
  "jobTitle": "Consultant Orthopedics & Joint Replacement",
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
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('gurgaon.index') }}">Home</a>
                    <a href="#">Our Doctors</a>
                    <span>Dr. Rajesh Bawari</span>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/DR-Rajesh-Bawari-200x200.jpg')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2 theme-color">Dr. Rajesh Bawari</h5>
                            <p class="degree_section">Senior Consultant (Visiting) Orthopaedics<br>Joint Replacement and Arthroscopy</p>
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
                            <div class="tab_home tab_doctors">
                                <div class="row nav nav-pills-icons js-doc-carousel" role="tablist">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-university"></i> ABOUT</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-trophy"></i> ACHIEVEMENTS/ ACCOMPLISHMENTS</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-trophy"></i> EXPERIENCE  </a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>MS Orthopaedics DA J&J Joint Replacement,Orthopaedics & Arthroscopy</p>
                                                <!--<p>MBBS, Diploma in Anesthesiology, MS - Orthopaedics</p>-->
                                                <p>23 years of Experience</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Bawari is academically inclined, with various publications to his credit. He has been co-quide for the postgraduate DNB Thesis in Orthopedics. He has also been a presenter at various regional, national, and international orthopedic conferences.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Rajesh Bawari has 33 years of experience overall (26 years as a specialist) in Orthopedics - including Complex Trauma surgeries and Reconstructing procedures such as Joint Replacement, Arthroscopic Reconstructive surgeries and deformity Reosteosynthesis, Limb length and Deformity Correction surgeries. </p>
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

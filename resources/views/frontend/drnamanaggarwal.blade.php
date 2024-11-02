@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')



<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr Naman Aggarwal",
  "url": "https://scihospital.com/dr-naman-aggarwal",
  "image": "https://scihospital.com/public/assets/images/doctors/Dr-Subi-Singh.jpeg",
  "sameAs": "",
  "jobTitle": "Urologist",
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
    <div class="section mt-0" id="doctor">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('/') }}">Home</a>
                    <a href="{{ route('our-doctors') }}">Our Doctors</a>
                    <span>Dr Naman Aggarwal</span>
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
                                <img src="{{asset('assets/images/doctors/dr-naman.png')}}" class="img-fluid" alt="Dr. Naman Singh" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr Naman Aggarwal</h5>
                            <p class="degree_section">Urologist</p>
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
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-university"></i>BIO</a>
                                    <!-- <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-trophy"></i>PUBLICATIONS</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-users"></i>CERTIFICATES & PAPERS PRESENTED</a> -->
                                    <!-- <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-graduation-cap"></i>THESIS PRESENTATION</a> -->
                                    <a class="nav-link" data-toggle="pill" href="#tab-E" role="tab"><i class="fa fa-leanpub"></i>WORK EXPERIENCE</a>
                                    <!-- <a class="nav-link" data-toggle="pill" href="#tab-F" role="tab"><i class="fa fa-leanpub"></i>EDUCATION</a> -->
                                    
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Naman Aggarwal is a highly skilled urologist with extensive training and expertise in urology and renal transplant. He completed his MBBS at Kasturba Medical College, MAHE, Manipal, followed by a Master of Surgery (M.S.) in General Surgery from HIMS, Swami Rama Himalayan University, Dehradun. Dr. Aggarwal further advanced his qualifications by obtaining a Master of Chirurgiae (MCh) in Urology and Renal Transplant from Kasturba Medical College, Manipal.</p>

                                                <p>As a member of several prestigious medical organisations, including the Urological Society of India and the American Urology Association, Dr. Aggarwal stays at the forefront of urological practices and advancements. He possesses a wealth of experience in treating urological calculus disease, managing lower urinary tract dysfunction, and addressing erectile dysfunction and male sexual health. His proficiency encompasses a range of endourology procedures, laparoscopic techniques, and reconstructive surgeries.</p>

                                                <p>Dr. Aggarwal has presented his research at numerous international conferences, including the 42nd Congress of Societe Internationale d'Urologie in Montreal and the 20th Urological Association of Asia Congress in Dubai, where he focused on innovative treatments and outcomes in urology. His commitment to research is also evident in his publications, contributing to the advancement of urological knowledge.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                
                                            </div>
                                        </div>
                                    </div> -->
                                    <!-- <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                            
                                            </div>
                                        </div>
                                    </div> -->
                                    <div id="tab-E" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>9 Years Experience Overall  (1 year as specialist)</p>
                                            </div>
                                        </div>
                                    </div>
                                     <!-- <div id="tab-F" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                
                                            </div>
                                        </div>
                                    </div> -->

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

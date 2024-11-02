@extends('gurgaon.frontend.layouts.main') @section('main-container')
 
@section('gurgaon.define_robots', 'index, follow')
@section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img', 'https://scihospital.com/gurgaon/public/assets/images/sci%20logo.webp')
<script type="application/ld+json">
{
  "@context": "
https://schema.org/"
,
  "@type": "Person",
  "name": "Dr. Indernath Verma",
  "url": "https://scihospital.com/gurgaon/dr-indernath-verma-urologist"
,
  "image": "https://scihospital.com/gurgaon/public/assets/images/doctors/Dr-Indernath-Verma.webp"
,
  "jobTitle": "Urologist And Andrologist",
  "worksFor": {
    "@type": "Organization",
    "name": "Sci Hospital"
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
                    <span>Dr. Inder Nath Verma</span>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Indernath-Verma.webp')}}" class="img-fluid" alt="Dr Indernath verma Urologist" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h1 class="doctor-box-name mb-2  theme-color">Dr. Inder Nath Verma </h1>
                            <p class="degree_section">Urologist And Andrologist,<br>MBBS, MS - General Surgery</p>
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
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-university"></i> EDUCATION</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-trophy"></i> EXPERIENCE </a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-graduation-cap"></i> FELLOWSHIP </a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-trophy"></i> ACHIEVEMENTS </a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. InderNath Verma is a distinguished alumnus of renowned institutions such as PGIMER, Chandigarh, Medanta the Medicity, and FMRI, Gurgaon. His academic achievements include DNB in Urology/Genito-Urinary Surgery, MBBS, and MS in General Surgery, showcasing a comprehensive and robust educational background.  </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>With an impressive 24 years of overall experience and 9 years as a specialist, Dr. InderNath Verma serves as a Senior Consultant in Urology, Andrology, Renal Transplant Surgery, Urooncology, and Reconstructive Surgery at SCI Hospital, Sector 43, Gurugram. His extensive expertise spans a diverse range of urological procedures.</p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                   <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Verma's journey includes specialized training at PGIMER, Chandigarh, and notable contributions at Medanta the Medicity, and FMRI, Gurgaon. His fellowship encompasses areas such as Endourology, Andrology, Reconstructive Urology, Renal Transplant, Pediatric Urology, Female Continence, and Urooncology, showcasing a commitment to continuous learning and specialization. </p>
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. InderNath Verma's remarkable achievements include a prolific surgical practice with expertise in various procedures. He has conducted numerous surgeries, including conventional and LASER TURP, HOLEP, TURBT, OIU, URS, PCNL, RIRS, and complex reconstructive surgeries. Notably, his involvement in over 400 robotic surgeries, including RARPs, robotic radical cystectomies, and renal transplants, reflects his exceptional skills and contributions to urological advancements. </p>
                                                
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
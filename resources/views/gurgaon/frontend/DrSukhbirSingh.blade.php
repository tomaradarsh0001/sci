@extends('gurgaon.frontend.layouts.main')
@section('main-container')

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Sukhbir Singh",
  "url": "https://scihospital.com/DrSukhbirSingh",
  "image": "https://scihospital.com/public/assets/images/doctors/Dr-Sukhbir-Singh.png",
  "sameAs": "https://scihospital.com/",
  "jobTitle": "Plastic & Cosmetic Surgeon",
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
                    <span>Dr. Sukhbir Singh</span>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Sukhbir-Singh.png')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr. Sukhbir Singh</h5>
                            <p class="degree_section">MBBS, MS, DNB – Plastic Surgery (MAMC Delhi)</p>
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
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-trophy"></i>  ACHIEVEMENTS/ ACCOMPLISHMENTS</a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>MBBS, MS, DNB – Plastic Surgery (MAMC Delhi)</p>
                                                <p>Sr. Consultant – Plastic & Cosmetic Surgeon</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Sukhbir Singh is a Plastic & Cosmetic Surgeon. He has done MBBS, MS (General Surgery), DNB (Plastic Surgery), Fellowship in cosmetic surgery (Brazil) & fellowship in Facial Aesthetics-South Korea. Dr. Singh is also an International member of ISAPS (International Society of Aesthetic Plastic surgeons) and ASPS (American Society of Plastic Surgery) apart from various Indian societies such as APSI-( Association of Plastic Surgeons of India), Indian Society of Aesthetic Plastic Surgeons, Association of Hair Restoration Surgeons of India and others. He specializes in non-surgical facial rejuvenation such as fillers, botox, threads apart from various cosmetic surgeries like Hair Transplant, liposuction, abdominoplasty, rhinoplasty, breast surgeries, Post Bariatric Surgery Body contouring. He Has Published more than 15 National & international articles with 2 books to his credit.</p>
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

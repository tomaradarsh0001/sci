@extends('gurgaon.frontend.layouts.main')
@section('main-container')




<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Gautam Banga",
  "url": "https://scihospital.com/dr-gautam-banga",
  "image": "https://scihospital.com/public/assets/images/doctors/dr-gautam-banga-new.png",
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
    <div class="section mt-0">
        <div class="container-fluid">
            <div class="row">
                <img src="{{asset('public_gurgaon/assets/images/doctors/SCI-Doctors.jpg')}}" class="img-fluid" alt="" />
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section mt-0" id="doctor">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('gurgaon.index') }}">Home</a>
                    <a href="#">Our Doctors</a>
                    <span>Dr. Gautam Banga</span>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/dr-gautam-banga-new.png')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr. Gautam Banga</h5>
                            <p class="degree_section">MBBS from B.J. Medical College, University of Pune, Maharashtra</p>
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
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-trophy"></i> ACHIEVEMENTS/ ACCOMPLISHMENTS</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-users"></i> MEMBERSHIP</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-graduation-cap"></i> FELLOWSHIP</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-E" role="tab"><i class="fa fa-leanpub"></i> PUBLICATION</a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>MBBS from B.J. Medical College, University of Pune, Maharashtra</p>
                                                <p>Master of Surgery (MS) – General Surgery from MGM Medical College and MY Hospital, Indore, University- DAVV Indore, MP</p>
                                                <p>Master of Chirurgie (M.Ch.)– Urology from SMS Medical College Jaipur, Rajasthan, Rajasthan University of Health Sciences</p>
                                                <p>Fellowship in Reconstructive Urology, Belgrade (Serbia)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>
                                                    He is an international faculty in Andrology & Reconstructive Urology invited frequently by several countries in their national conferences including Tunisia, Iraq, Germany, Kurdistan,
                                                    Tajikistan, Kazhakastan.
                                                </p>
                                                <p>He has conducted workshops and instructional courses in various countries.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Urological Society of India (USI)</p>
                                                <p>North zone Urological society of India (NZUSI)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>6 weeks Observership in Advance reconstructive uro-genital surgery at Sava Perovic Foundation, Belgrade Serbia.</p>
                                                <p>Trained in Reconstructive Urology from Pune, India.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-E" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Paper presentation title-“Detrusor Ultrastructure-Its correlation with clinical outcome in patient with bladder outlet obstruction.” at USICON-2010 Agra</p>
                                                <p>Paper presentation title-“Outcome of Percutaneous Nephrolithotomy (PCNL) in patient with history of renal surgery.” at NZUSICON 2009 Amritsar</p>
                                                <p>Paper presentation title-“Long term outcome of perineal anastomotic urethroplasty for managing post-traumatic urethral strictures in children.” at USICON-2009 Indore</p>
                                                <p>
                                                    Poster presentation title “Prognostic and predictive significance of PSA kinetics in advanced prostate cancer after initial androgen deprivation therapy” in Asian Congress of Urology-2008
                                                    New Delhi
                                                </p>
                                                <p>Progress session-“augmented Reality-The next level of surgical accuracy” in NZUSICON 2008 Allahabad</p>
                                                <p>Paper presentation title-“Outcome of valve ablation in late-presenting posterior urethral valves.” at NZUSICON 2008 Allahabad</p>
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

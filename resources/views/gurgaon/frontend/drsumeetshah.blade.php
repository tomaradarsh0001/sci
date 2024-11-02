@extends('gurgaon.frontend.layouts.main')
@section('main-container')

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Sumeet Shah",
  "url": "https://scihospital.com/drsumeetshah",
  "image": "https://scihospital.com/public/assets/images/doctors/WhatsApp-Image-2020-11-12-at-4.21.36-PM-1-200x200.jpeg",
  "sameAs": "https://scihospital.com/",
  "jobTitle": "Laparoscopic Surgeon & Bariatric Surgeon",
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
                    <span>Dr. Sumeet Shah</span>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/WhatsApp-Image-2020-11-12-at-4.21.36-PM-1-200x200.jpeg')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr. Sumeet Shah</h5>
                            <p class="degree_section">MBBS, MRCGP (INT), DMS.</p>
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
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-graduation-cap"></i> FELLOWSHIP</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-trophy"></i> ACHIEVEMENTS/ ACCOMPLISHMENTS</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-users"></i> MEMBERSHIP</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-E" role="tab"><i class="fa fa-leanpub"></i> PUBLICATION</a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>MBBS, MS DNB, MNAMS, FIAGES, FALS (Bariatric), FALS (Hernia)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Advanced training in Gastro-Intestinal Surgery-AIIMS,New Delhi</p>
                                                <p>Fellowship in M.A.M.B.S from Sir Ganga Ram Hospital</p>
                                                <p>Fellowship in M.A.S from IAGES</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Vice President of Indian Association of Gastro Intestinal Endo Surgeries</p>
                                                <p>Has several presentations to his credit and has been invited as faculty/ Expert at more than 100 National/ International meetings of Laparoscopic and Bariatric Surgeons</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Life Member- Association of Surgeons of India</p>
                                                <p>National Academy of Medical Sciences (MNAMS)</p>
                                                <p>Vice President- IAGES</p>
                                                <p>Metabolic and Obesity Surgery Society of India (OSSI)</p>
                                                <p>Indian Medical Association (IMA)</p>
                                                <p>Asia Pacific Hernia Society (APHS)</p>
                                                <p>Member Executive- Hernia Society of India (HIS)</p>
                                                <p>Faculty of Ethicon Institute of Surgical Education (EISE)</p>
                                                <p>Faculty at Centre of Excellence for Minimal Access Surgery of Training, Mumbai</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-E" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Accredited Reviewer of Scientific submissions of article related to Laparoscopic and G.I Surgery in Indian Journal of Surgery</p>
                                                <p>Accredited Proctor for Bariatric Surgery by Ethicon Endo Surgery, Johnson & Johnson</p>
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
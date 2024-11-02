@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')



<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr Subi Singh",
  "url": "https://scihospital.com/dr-saurabh-kapoor",
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
                    <span>Dr Subi Singh</span>
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
                                <img src="{{asset('assets/images/doctors/Dr-Subi-Singh.jpeg')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr Subi Singh</h5>
                            <p class="degree_section">BDS | MDS</p>
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
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-trophy"></i>PUBLICATIONS</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-users"></i>CERTIFICATES & PAPERS PRESENTED</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-graduation-cap"></i>THESIS PRESENTATION</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-E" role="tab"><i class="fa fa-leanpub"></i>WORK EXPERIENCE</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-F" role="tab"><i class="fa fa-leanpub"></i>EDUCATION</a>
                                    
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dedicated Dental care Professional and Skilled Orthodontist with General Dentistry knowledge. My manual dexterity and people skill ensure that I get the job done and foster amicable relationship with patients.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Singh S, SIDHU MS, Prabhakar M, NINDRA J. Orthodontic Limitations in Adults: A Review. Journal of Clinical & Diagnostic Research.</p>

                                                <p>Prabhakar M, et al. The Importance of Treating Functional Cross Bite: A Clinical Viewpoint.</p>
                                                        </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Clinical category in Orthobyte 2020.</p>

                                        <p>Clinical category in Dent-con 2020.</p>
                                        
                                        <p>POSTER PRESENTED</p>
                                        
                                        <p>Second Runner up position in Scientific poster presentation in 19th Indocleftcon 2020.</p>
                                        
                                        <p>Poster presentation at 19th Indocleftcon 2020.</p>
                                        
                                        <p>North Zone Orthodontic P.G. Convention</p>
                                        
                                        <p>Ormco Virtual Forum 2020</p>
                                        
                                        <p>Poster competition at Rungta College of dental sciences and research</p>
                                        
                                        <p>World No Tobacco Day, SGT University</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                             <p> Cone Beam Computed Tomography Evaluation of Sella Turcica and Cranial Base morphology in Unilateral Cleft lip and palate.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-E" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Associate dentist at Alveo Dental Clinic, Gurgaon (01-08-2021 to 05-09-2022)</p>

                                                <p>Consultant Orthodontist New way centre for Craniofacial pain and Orthodontia</p>
                                            </div>
                                        </div>
                                    </div>
                                     <div id="tab-F" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Member of AO Spine Foundation</p>

                                                 <p>   Bachelor of Dental Surgery - Institute of Dental Sciences, Jammu</p>

                                                <p>Masters of Dental Surgery - SGT University, Gurugram</p>
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

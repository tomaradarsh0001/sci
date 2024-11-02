@extends('gurgaon.frontend.layouts.main')
@section('main-container')

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Niraj Kumar Nikunj",
  "url": "https://scihospital.com/dr-niraj-kumar-nikunj",
  "image": "https://scihospital.com/public/assets/images/doctors/Niraj.jpg",
  "sameAs": "https://scihospital.com/",
  "jobTitle": "Neonatology & Pediatrics",
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
                    <span>Dr. Niraj Kumar Nikunj</span>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/Niraj.jpg')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr. Niraj Kumar Nikunj</h5>
                            <p class="degree_section">Neonatology & Pediatrics Consultant</p>
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
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-university"></i>  EDUCATION</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-sticky-note-o"></i> DETAILS</a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>MBBS (UCMS, Delhi)</p>
                                                <p>MD (Pediatrics, Maulana Azad Medical College, Delhi)</p>
                                                <p>Fellowship in Neonatal Medicine</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Niraj Kumar Nikunj is a leading Neonatalogist and Pediatrician in South Delhi and has an experience of over 10 years in this field. He completed his MBBS from UCMS(Delhi University)  in 2009 and MD - Pediatrics from Maulana Azad Medical College (Delhi University) in 2014. He also holds Fellowship in Neonatal Medicine (LearnEm, Australia)</p>
                                                <p>He has expertise in managing all kinds of Neonatal cases including Extreme Prematurity/ Low Birth Weight babies/ Birth Asphyxia/ Neonatal Seizures etc.</p>
                                                <p>He also manages his OPD in Pediatrics and Neonatalogy including Vaccinations( Both Pediatric & Adult).</p>
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
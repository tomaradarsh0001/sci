@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Manish Gupta",
  "url": "https://scihospital.com/DrManishGupta",
  "image": "https://scihospital.com/public/assets/images/doctors/Dr-Manish-Gupta.png",
  "jobTitle": "MBBS, MS (ENT)",
  "worksFor": {
    "@type": "Organization",
    "name": "scihospital"
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
                    <a href="{{ route('/') }}">Home</a>
                    <a href="{{ route('our-doctors') }}">Our Doctors</a>
                    <span>Dr. Manish Gupta</span>
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
                                <img src="{{asset('assets/images/doctors/Dr-Manish-Gupta.png')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr. Manish Gupta</h5>
                            <p class="degree_section">MBBS, MS (ENT), Fellowship Head & Neck Oncosurgery</p>
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
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-leanpub"></i> PUBLICATION</a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>MBBS, MS (ENT), Fellowship Head & Neck Oncosurgery</p>
                                                <p>Consultant – ENT & Head Neck Surgeon</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Manish Gupta is a Senior Otorhinolaryngologist in Patel Nagar, Delhi and has an experience of 17 years in this field. (He practices at Dr. Manish Gupta ENT Clinic, Patel Nagar, Delhi and BLK Super Speciality Hospital, Pusa Road, Delhi). He completed MBBS from University College of Medical Sciences & GTB Hospital, Delhi in 2002, and did his Masters in Surgery (Otorhinolaryngology and Head Neck Surgery) from University College of Medical Sciences & GTB Hospital, Delhi in 2005. He has completed United States Medical Licensing examinations 1,2 and 3 in 2011 and also did Fellowship in Head & Neck Oncology Surgery from Dharamshila Hospital & Research Centre (DHRC), Delhi in 2013. He has rich & working experience of working with top & reputed hospitals of Delhi-NCR such as Indraprastha Apollo Hospital (Sarita Vihar); Fortis Escorts Hospital, Fortis Hospital (Shalimar Bagh), Max Hospital (Noida). BLK Super Speciality Hospital (Pusa Road). His areas of interest in ENT include treatment of allergy & sinus disorders, sleep medicine & Head Neck Surgery.</p>
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

@extends('gurgaon.frontend.layouts.main')
@section('main-container')

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Vicky Kuldeep",
  "url": "https://scihospital.com/dr-vicky-kuldeep",
  "image": "https://scihospital.com/public/assets/images/doctors/Dr-Vicky-Kuldeep.png",
  "sameAs": "https://scihospital.com/",
  "jobTitle": "General surgeon",
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
                    <span>Dr. Vicky Kuldeep</span>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Vicky-Kuldeep.png')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr. Vicky Kuldeep</h5>
                            <p class="degree_section">General Surgeon</p>
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
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-trophy"></i> ACHIEVEMENTS</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-sticky-note-o"></i> EXPERIENCE </a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Vicky Kuldeep did his graduation from Dr. Vaishampayan Memorial Medical College, Solapur, in 2014. He also completed DNB in general surgery from Bhabha Atomic Research Centre Hospital, Mumbai, in 2019. He has also participated in research work and various workshops and published many papers. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Vicky Kuldeep is a well-known general surgeon currently associated with SCI International Hospital, Greater Kailash, Delhi </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Doctor Vicky Kuldeep has contributed to handling numerous complex medical cases in several hospitals. He is known for his attention to accurate diagnosis and for treating patients with empathy. The speciality interests of Dr Vicky are Laparoscopy, Endoscopic procedures, Proctology, All Abdominal Wall Hernias, Colostomy, Bowel Diversion, Colon and Rectal Cancer Surgeries, Diabetic Foot, Surgeries for Varicose veins and Breast Conservative Surgeries.  </p>
                                                <p><i class="fa fa-check"></i> 2nd prize in free paper session 4 at Association of Surgeons of India Conference-2018.</p>
                                                <p><i class="fa fa-check"></i> 2nd prize in PG Quiz Competition at Continuous Surgical Education Program (CSEP), Bangalore.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>He has 8 years of experience in general surgery and worked as an expert general surgeon in different cities in India. He has worked in many reputed hospitals like BARC Hospital, Mumbai, GTB Hospital, Delhi, and Guru Teg Bahadur Hospital, Delhi.  </p>
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
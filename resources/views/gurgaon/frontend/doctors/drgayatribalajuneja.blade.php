@extends('gurgaon.frontend.layouts.main')
@section('main-container')

@section('gurgaon.define_robots', 'index, follow')
@section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Gayatri Bala Juneja",
  "url": "https://scihospital.com/gurgaon/dr-gayatri-bala-juneja",
  "image": "https://scihospital.com/gurgaon/public/assets/images/doctors/dr-gayatri-bala-juneja.webp",
  "jobTitle": "MBBS, DNB, MD",
  "worksFor": {
    "@type": "Organization",
    "name": "sci hospital"
  }  
}
</script>
</head>
<body>
    
    
  
<div class="page-content">
    
    <!--//section-->
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('gurgaon.index') }}">Home</a>
                    <a href="#">Our Doctors</a>
                    <span>Dr. Gayatri Bala Juneja</span>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/dr-gayatri-bala-juneja.webp')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr. Gayatri Bala Juneja</h5>
                            <p class="degree_section">Obstetrics & Gynecology <br>MBBS, DNB, MD</p>
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
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-sticky-note-o"></i> ABOUT</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-university"></i> EXPERIENCE</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-trophy"></i> ACHIEVEMENTS</a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Gayatri Bala Juneja is a highly esteemed Gynecologist, Obstetrician, Infertility Specialist, and Laparoscopic Surgeon with more than a decade of dedicated service in Delhi, India. She is renowned for her extensive expertise in High-Risk Obstetrics, confidently managing and successfully resolving numerous complex obstetric cases </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>With 30 years of overall experience in the medical profession, including 23 years as a specialist, specializing in Obstetrics and Gynecology, Dr. Juneja's unwavering dedication, MBBS, DGO, and DNB qualifications from esteemed institutions depict her commitment to excellence in patient care. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Juneja's outstanding work in medicine has made her a top Gynecologist and Obstetrician in Delhi. Her practical experience, especially in High-Risk Obstetrics, showcases her exceptional skills. She's succeeded in numerous challenging cases. </p>
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

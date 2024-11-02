@extends('gurgaon.frontend.layouts.main') @section('main-container')
 
@section('gurgaon.define_robots', 'index, follow')
@section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img', 'https://scihospital.com/gurgaon/public/assets/images/sci%20logo.webp')
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Rohit Jain",
  "url": "https://scihospital.com/gurgaon/dr-rohit-jain-plastic-surgeon",
  "image": "https://scihospital.com/gurgaon/public/assets/images/doctors/Dr-Rohit-Jain-Plastic-Surgeon.webp",
  "jobTitle": "MBBS, MS - General Surgery,",
  "worksFor": {
    "@type": "Organization",
    "name": "Sci Hospital Gurgaon"
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
                    <a href="{{ route('gurgaon.our-doctors') }}">Our Doctors</a>
                    <span>Dr. Rohit Jain</span>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Rohit-Jain-Plastic-Surgeon.webp')}}" class="img-fluid" alt="Dr Rohit Jain Plastic Surgeon" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h1 class="doctor-box-name mb-2  theme-color">Dr. Rohit Jain</h1>
                            <p class="degree_section">MBBS, MS - General Surgery, MCh - Plastic Surgery<br>Plastic Surgeon</p>
                            <ul class="list_details_doc">
                                <li><i class="fa fa-map-marker"></i> Plot No. 7, Golf Course Rd, Sector 43, Gurugram, Haryana 122002  </li>
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
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-university"></i> <h2 class="normal_text_tab">About </h2></a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-trophy"></i> <h2 class="normal_text_tab">EDUCATION</h2> </a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-sticky-note-o"></i> <h2 class="normal_text_tab">SPECIALIZATION</h2> </a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-users"></i> <h2 class="normal_text_tab">MEMBERSHIPS</h2> </a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-E" role="tab"><i class="fa fa-sticky-note-o"></i> <h2 class="normal_text_tab">WORK EXPERIENCE</h2> </a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Rohit Jain, a Plastic Surgeon affiliated with SCI Hospital Gurugram, brings 21 years of extensive experience, having served as an expert in various cities across India. Renowned for his adept handling of complex medical cases, he is distinguished for his precise diagnostic skills and empathetic patient care. Dr. Jain specializes in a range of procedures, including buttock implants, instant brow lifts, fat injections (Transplant), flap surgery, hair transplant surgery, showcasing his diverse expertise in the field. </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <ul>
                                                    <li>MBBS - Kasturba Medical College, Mangalore (2002)</li>
                                                    <li>MS - General Surgery, Kasturba Medical College, Manipal (2007)</li>
                                                    <li>M.Ch - Plastic Surgery, R.G. Kar Medical College, Kolkata (2013)</li>
                                                </ul>
                                               
                                            </div>
                                        </div>
                                    </div>
                                   <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                              <ul>
                                                  <li>Labiaplasty</li>
                                                  <li>Gender Reassignment</li>
                                                  <li>Tattoo Removal</li>
                                                  <li>Dermal Fillers</li>
                                                  <li>Hair Transplant</li>
                                                  <li>Hair PRP</li>
                                                  <li>Breast Lift</li>
                                                  <li>Reduction Mammoplasty (Breast Reduction Surgery)</li>
                                                  <li>Breast Augmentation</li>
                                                  <li>Buccal Fat Removal (Buccal Lipectomy)</li>
                                                  <li>Liposuction</li>
                                                  <li>Rhinoplasty</li>
                                              </ul>
                                        </div>
                                    </div>
                                    </div>
                                    <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                              <ul>
                                                  <li>Association of Plastic Surgeons of India [APSI]</li>
                                                  <li>Association of Plastic Surgeons of West Bengal [APSWB]</li>
                                                  <li>National Academy of Burns India [NABI]</li>
                                                  <li>Indian Society for Surgery of the Hand [ISSH]</li>
                                                  <li>Indian Association of Aesthetic Plastic Surgeons [IAAPS]</li>
                                              </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-E" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                              <p>Currently holding the esteemed role of Senior Consultant at SCI Hospital Gurugram, this seasoned professional has left an indelible mark on the field of Plastic Surgery. With prior positions as H.O.D. and Consultant at Medeor Hospital, Consultant at Max Hospital, and Associate/Attending Consultant at Max Super Speciality Hospital, their rich experience encompasses roles as Senior Resident at renowned institutions like Sir Ganga Ram Hospital and R.G. Kar Medical College. Earlier, they served as Assistant Professor and Junior Resident, showcasing a comprehensive and distinguished career.</p>
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
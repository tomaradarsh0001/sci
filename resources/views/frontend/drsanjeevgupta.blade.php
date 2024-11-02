@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')



<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr Sanjeev Gupta",
  "url": "https://scihospital.com/dr-sanjeev-gupta",
  "image": "https://scihospital.com/public/assets/images/doctors/dr-sanjeev-gupta.jpeg",
  "sameAs": "",
  "jobTitle": "General Surgery",
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
                    <span>Dr Sanjeev Gupta</span>
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
                                <img src="{{asset('assets/images/doctors/dr-sanjeev-gupta.jpeg')}}" class="img-fluid" alt="Dr. Sanjeev Gupta" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr. Sanjeev Gupta</h5>
                            <p class="degree_section">Consultant - General Surgery</p>
                            <ul class="list_details_doc">
                                <li><i class="fa fa-map-marker"></i> Address: M-4, GK-1, New Delhi - 110048</li>
                                <li><i class="fa fa-phone"></i> Mobile: +91-8287901614</li>
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
                                    <!-- <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-trophy"></i>PUBLICATIONS</a> -->
                                    <!-- <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-users"></i>CERTIFICATES & PAPERS PRESENTED</a> -->
                                    <!-- <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-graduation-cap"></i>THESIS PRESENTATION</a> -->
                                    <a class="nav-link" data-toggle="pill" href="#tab-F" role="tab"><i class="fa fa-leanpub"></i>EDUCATION</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-E" role="tab"><i class="fa fa-leanpub"></i>WORK EXPERIENCE</a>
                                    
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Sanjeev Gupta is an experienced General Surgeon, Laparoscopic Surgeon and Proctologist with an experience of 25 years, and specialises in Proctology, Urology, and Laparoscopy. He graduated and obtained his MBBS degree from Meerut University in 1998, and then his postgraduate MS degree from DDU Gorakhpur University in 2008.Currently, he is practising at SCI International Hospital, Delhi.</p>
                                                <p>He has been commended by his patients for his caring nature, hard working attitude, and willingness to be there for them - any time of day and night. He provides treatment for the following - Piles, Fissure, Fistula, Abscess, Pilonidal Sinus, Anal Warts, Urethral Stricture, Erectile Dysfunction, Urinary Tract Infection, Urinary Incontinence, Balnitis, Phimosis, Paraphimosis, Sebaceous Cyst, Umbilical Hernia, Inguinal Hernia, Incisional Hernia, Hiatus, Gallstones, Stent Removal, Cyst Removal, Hydrocele, and other conditions.</p>
                                                <p>He is registered in the Indian Medical Registry with the licence number 40077. He strives to provide advanced medical care in a comfortable and holistic environment for all patients coming to him for treatment.</p>
                                            </div>
                                        </div>
                                    </div>
                   
                                    
                                     <div id="tab-F" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>MBBS, JIWAJI University Gwalior, 1997</p>
                                                <p>MS - General Surgery, University of Delhi, New Delhi, 2008</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-E" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Senior Resident, Onco-surgery at Rockland Hospital, 2008 - 2008</p>
                                                <p>Medical officer, Army Medical corp in Indian Army, 1998 - 2004</p>
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

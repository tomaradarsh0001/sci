@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')



<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr Saurabh Kapoor",
  "url": "https://scihospital.com/dr-saurabh-kapoor",
  "image": "https://scihospital.com/public/assets/images/doctors/Dr-Saurabh-Kapoor.jpeg",
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
                    <span>Dr Saurabh Kapoor</span>
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
                                <img src="{{asset('assets/images/doctors/Dr-Saurabh-Kapoor.jpeg')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr Saurabh Kapoor</h5>
                            <p class="degree_section">Senior Consultant – Spine Surgery</p>
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
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-trophy"></i>SPECIALIZATION</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-users"></i>Work Experience</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-graduation-cap"></i>Education</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-E" role="tab"><i class="fa fa-leanpub"></i>ACHIEVEMENTS/AWARDS</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-F" role="tab"><i class="fa fa-leanpub"></i>Membership</a>
                                    
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Saurabh Kapoor is highly motivated, committed and dynamic individual with a wealth of clinical experience in orthopedic surgery. He further gained knowledge, competence and greater specialist surgical experience in spinal surgery. Throughout his career he has demonstrated that he can work effectively as part of numerous multidisciplinary teams through his clear communication skills, use of initiative and willingness to take clinical responsibility. Dr. Saurabh Kapoor is an Internationally fellowship trained spine surgeon in Royal College accredited centres.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>
                                                    Minimally invasive spine surgery</p>

                                               <p>  Awake spine surgery </p>
                                                
                                                <p> Deformity correction/Scoliosis/Kyphosis </p>
                                                
                                               <p>  Joint preservation surgery</p>
                                                        </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Feb 2019-Feb 2020 - Locum Consultant Spinal Surgeon</p> 

                                                  <p>  Queen’s Medical Centre, Nottingham</p> 
                                                    
                                                  <p>   Feb 2018-Feb 2019 - Senior spinal fellow at Queen’s Medical Centre, Nottingham</p> 
                                                    
                                                  <p>   Nov 2016-Feb 2017 - Spine Fellow at Centre for Spinal Studies & Surgery & Queen’s Medical Centre, Nottingham</p> 
                                                    
                                                  <p>   Nov 2015-Oct 2016 - Complex Spine Fellow at Neuro-spine unit & King’s College Hospital, London</p> 
                                                    
                                                  <p>   Oct 2013–Oct 2015 - Senior Registrar, Trauma and Orthopaedics ESI PGIMSR, New Delhi</p> 
                                                    
                                                  <p>   Aug 2011–Sept 2013 - Senior Registrar, Trauma and Orthopaedics MAMC and LNJP hospital, New Delhi</p> 
                                                    
                                                 <p>    Jun 2008 – Jun 2011 - Post Graduate Student, Trauma and Orthopaedics at GMCH, Chandigarh</p> 
                                                    
                                                  <p>   Jan 2006-Jan 2007 - Internship rotation at University College of Medical sciences, New Delhi</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                             <p>  MBBS (Merit) - University College of Medical Sciences, India</p>

                                             <p>   MS - Orthopaedics (All India Merit) - Government Medical College and Hospital, Chandigarh</p>
                                                
                                              <p>  DNB (Orthopaedics) - National Board of Examination</p>
                                                
                                              <p>  MRCS (Glasgow, UK)</p>
                                                
                                              <p>  FRCS (Glasgow, UK)</p>
                                                
                                              <p>  Royal College Accredited Spine Fellowships from UK & Germany</p>
                                                
                                              <p>  Formerly Consultant Spine Surgeon, Queen’s Medical Centre, Nottingham (UK)</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-E" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Prestigious P.T Rao gold medal for the best paper titled “Clinical relevance of Palmaris longus tendon agenesis: a common aberration” in the Annual Conference of Indian Orthopaedics Association 2009.</p>

                                              <p>  Silver medal for standing second in the field of medicine in my undergraduate final examinations.</p>
                                                
                                                <p>Second prize in British Association of Spinal Surgeons conference for podium presentation on’ Nottingham protocol of reduced radiation exposure from O-arm in paediatric deformity patients - A feasibility study’. Brighton, April 2019.</p>
                                                
                                               <p> 20+ publications in International peer reviews journals</p>
                                            </div>
                                        </div>
                                    </div>
                                     <div id="tab-F" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Member of AO Spine Foundation</p>

                                                 <p>   Member of Association of Spine Surgeons of India (ASSI)</p>
                                                    
                                                <p>   Member of Indian Orthopaedic Association (IOA)</p>
                                                    
                                                 <p>   Member of Delhi Spine Society (DSS)</p>
                                                    
                                                 <p>   Member of Delhi Orthopaedic association (DOA)</p>
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

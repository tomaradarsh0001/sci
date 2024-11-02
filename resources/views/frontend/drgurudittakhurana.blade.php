@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')



<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr Vineet Kaul",
  "url": "https://scihospital.com/dr-saurabh-kapoor",
  "image": "https://scihospital.com/public/assets/images/doctors/Dr-vineet-Kaul.jpeg",
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
                    <span>Dr Guruditta Khurana</span>
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
                                <img src="{{asset('assets/images/doctors/Dr-Guruditta.png')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr Guruditta Khurana</h5>
                            <p class="degree_section"></p>
                            <ul class="list_details_doc">
                                <li><i class="fa fa-map-marker"></i>Sector 51, Gurugram Harayana, 122001</li>
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
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-university"></i>WORK EXPERIANCE</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-trophy"></i>EDUCATION</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-users"></i>PAPER PUBLICATION</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-graduation-cap"></i>CME AND CONFERENCES ATTENDED</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-E" role="tab"><i class="fa fa-leanpub"></i>MEDAL PAPER PRESENTATION</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-f" role="tab"><i class="fa fa-leanpub"></i>AWARDS</a>
                                  <a class="nav-link" data-toggle="pill" href="#tab-g" role="tab"><i class="fa fa-leanpub"></i>MEMBERSHIPS HELD</a>
                                    
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Guruditta Khurana is a Orthopedic surgeon, Orthopedist and Traumatology Specialist and Pediatric Orthopedic Surgeon in Gurgaon Sector 51, Gurgaon and has an experience of 9 years in these fields. Dr. Guruditta Khurana practices at GS Clinic in Gurgaon Sector 51, Gurgaon. He completed MBBS from Rural Medical College, Loni in 2015 and Diploma in Orthopaedics from Vinayaka Missions Medical College & Hospital, Karaikal in 2019</p>
                                                </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>D.Ortho (Silver Medalist) from Vinayaka Mission’s Medical College, Karaikal, Pondicherry</p>

                                            <p>MBBS - All India Merit from Rural Medical College, Loni, Ahmednagar, Maharashtra</p>
                                            
                                            <p>Internship 2014-2015 at Rural Medical College, Loni, Ahmednagar, Maharashtra</p>
                                                        </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                              

                                    <p>Syndromic Radial Club Hand: Case Report of Two Different Cases" - Asia Pacific Journal of Research, Vol. 1, Issue 98, March 2019, pp. 6-11.</p>
                                    <p>Publication in International Journal of Student Research, Volume 1, Issue 1, 2011, "Morphological and Morphometric Analysis of Mental Foramen Utilizing Various Assessment Parameters in Dry Human Mandibles."</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                             <p>Spine Injury Update 2019 - Govt. Thiruvarur Medical College, Thiruvarur, January 23, 2019.</p>

                                       <p>POACON 2019 - Pondicherry Orthopaedic Association, January 5-6, 2019.</p>
                                        
                                    <p>IOACON 2018 - Indian Orthopaedic Association, Coimbatore, November 26 - December 1, 2018.</p>
                                    <p>Dr. K.T. Dholakia CME - Bone and Joint Infections, November 28, 2018.</p>
                                    <p>OASIS TRAUMACON 2018 - Pondicherry, July 7, 2018.</p>
                                    <p>TNOA Mid Year CME 2018 - Pattukotai, July 21-22, 2018.</p>
                                    <p>MGM College Orthopaedics Revision Course (MORE) - Pondicherry, November 16-17, 2018.</p>
                                     </div>
                                        </div>
                                    </div>
                                    <div id="tab-E" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>POACON 2019 (Pondicherry Orthopaedic Association) Title: Clubfoot Correction with JESS (UMEX) Fixator - 15 Cases</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-f" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>ICMR Short Term Studentship (Ref No. 2011-01857) awarded by the Indian Council of Medical Research for a period of two months during 2011 for the project To Assess the Awareness and Perceptions of PCPNDT Act Amongst Residents and Interns in a Rural Area</p>
                                                <p>Paper presentation of above at UG Medical Students RegionalResearchConference,RMC,loni, held in association with Moving Academy of MedicineandBiomedicine, Pune, ICMR sponsored (21-23 Feb2012)</p>
                                                        </div>
                                        </div>
                                    </div>
                                    <div id="tab-g" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>IORG (Indian Orthopaedic Research Group), Delhi Orthopedic Association, Gurgaon Orthopaedic Association, Faridabad Orthopedic Association.</p>
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

@extends('gurgaon.frontend.layouts.main')
@section('main-container')

@section('gurgaon.define_robots', 'index, follow')
@section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')



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
                    <a href="{{ route('gurgaon.index') }}">Home</a>
                    <a href="{{ route('gurgaon.our-doctors') }}">Our Doctors</a>
                    <span>Dr Vineet Kaul</span>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Sneha-Tiwari.jpg')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr. Sneha Tiwari</h5>
                                <p class="degree_section"></p>
                            <p>MBBS, MS - Ophthalmology</p>
                            <p>Ophthalmologist/ Eye Surgeon 9 Years Experience</p>
                            <ul class="list_details_doc">
                                <li><i class="fa fa-map-marker"></i>Plot No. 7, Golf Course Rd, Sector 43, Gurugram, Haryana 122002</li>
                                <li><i class="fa fa-phone"></i> Mobile: +91-9354471022</li>
                                <li><i class="fa fa-envelope"></i> Email: info@scihospital.com</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <div class="call_box">
                                <p><i class="fa fa-phone"></i></p>
                                <p class="app_doc">For Appointment, call us on</p>
                                <p><a href="tel:8287901614">+91-9354471022</a></p>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="tab_doctors">
                                <div class="tab_home row nav nav-pills-icons js-doc-carousel" role="tablist">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-university"></i>PROFILE</a>
                                  <!--  <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-trophy"></i>EDUCATION</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-users"></i>SPECIALIZATION</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-graduation-cap"></i>PUBLICATIONS</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-E" role="tab"><i class="fa fa-leanpub"></i>MEMBERSHIPS</a>--->
                                   
                                    
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Sneha Tiwari is a Ophthalmologist/ Eye Surgeon in Gurgaon Sector 51, Gurgaon and has an experience of 9 years in this field. Dr. Sneha Tiwari practices at GS Clinic in Gurgaon Sector 51, Gurgaon. She completed MBBS from Maharashtra University in 2013 and MS - Ophthalmology from Vinayaka Missions University, Salem in 2020.</p>
                                                </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>MBBS from SS Medical College, Rewa (Madhya Pradesh)</p>

                                            <p>MS (ENT) from NSCB Medical College, Jabalpur (Madhya Pradesh)</p>
                                            
                                            <p>Fellow, Head & Neck Surgery and Oncology from IFHNOS (New York)</p>
                                            
                                            <p>Clinical Observer Head & Neck Oncology DMG, Tata Memorial Centre, Mumbai</p>
                                                        </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Lip and oral cavity surgery</p>

                                    <p>Laryngeal and hypopharyngeal cancer surgery</p>
                                    
                                    <p>Thyroid and parathyroid gland surgery</p>
                                    
                                    <p>Salivary gland surgery</p>
                                    
                                    <p>Nose and sinus tumour surgery</p>
                                    
                                    <p>Mandible (lower jaw) and Maxilla (upper jaw) tumour surgery</p>
                                    
                                    <p>Microlaryngeal surgery</p>
                                    
                                    <p>Laryngotracheal reconstruction</p>
                                    
                                    <p>Paediatric head and neck solid tumour surgery</p>
                                    
                                    <p>Scalp and face cutaneous cancer surgery</p>
                                    
                                    <p>Minimal access to head and neck surgery</p>
                                    
                                    <p>Endoscopic and open skull base surgery</p>
                                    
                                    <p>Complex neck neurogenic tumours and paraganglioma surgery</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                             <p>1. Correlation of radiological and endoscopic findings in patients presenting with dysphagia. Dec 2016; Indian J Otolaryngol Head Neck Surg</p>

                                       <p> 2. Suprahyoid transverse pharyngotomy for schwannoma of larynx in an adolescent male: A case report. J Laryngol Voice 2017; 7:18-20</p>
                                        
                                    <p>  3. Desmoid Fibromatosis of the Right Maxilla in an Infant: A Case Report. Int J Otorhinolaryngol Clin 2019; 11 (1):19-21.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-E" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>LIFE MEMBER, FOUNDATION FOR HEAD & NECK ONCOLOGY, INDIA</p>

                                            <p>LIFE MEMBER, ASSOCIATION OF OTORHINOLARYNGOLOGISTS OF INDIA</p>
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

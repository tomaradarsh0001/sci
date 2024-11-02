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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Vineet-Kaul.jpg')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr Vineet Kaul</h5>
                            <p class="degree_section"></p>
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
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-university"></i>PROFILE</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-trophy"></i>EDUCATION</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-users"></i>SPECIALIZATION</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-graduation-cap"></i>PUBLICATIONS</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-E" role="tab"><i class="fa fa-leanpub"></i>MEMBERSHIPS</a>
                                   
                                    
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr Vineet Kaul is a highly experienced Head and Neck Surgical Oncologist. He did his fellowship training at IFHNOS-MSKCC, New York. Then he completed his clinical observership at the prestigious head and neck DMG, Tata Memorial Centre, Mumbai.</p>

 

                                                <p>Dr Vineet is well-trained in performing head and neck plastic reconstruction procedures and complex anterior and lateral skull base surgeries. Dr. Vineet has numerous publications in national and international journals to his credit. He is a life member of the Foundation for Head and Neck Oncology, India and the Association of Otolaryngologists of India.
                                                    </p>
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

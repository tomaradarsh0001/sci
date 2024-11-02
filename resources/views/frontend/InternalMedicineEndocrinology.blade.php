@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')
<script type="application/ld+json"> 

{ 

  "@context": "https://schema.org", 

  "@type": "FAQPage", 

  "mainEntity": [{ 

    "@type": "Question", 

    "name": "What are the common problems treated by an endocrinologist?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "Some common problems treated by endocrinologists include Diabetes (type 1 and 2), hypoglycemia, and adrenal disorders, including Conn’s syndrome and Cushing syndrome" 

    } 

  },{ 

    "@type": "Question", 

    "name": "Why should a patient see an endocrinologist?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "Abnormal blood sugar levels, or symptoms such as excessive thirst, fatigue, weight gain, or blurry vision. These are the symptoms of problems with insulin." 

    } 

  },{ 

    "@type": "Question", 

    "name": "What are the symptoms of endocrine disorders?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "Symptoms of endocrine disorders include-     

  

Fatigue    

Changes in vision    

Excessive hunger and thirst    

Vomiting and nausea    

Constant urination    

Unexpected weight gain and loss" 

    } 

  },{ 

    "@type": "Question", 

    "name": "What is the major cause of endocrine disorders?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "Endocrine disorders have severe potential causes such as tumors, genetic factors, or hormonal imbalances." 

    } 

  },{ 

    "@type": "Question", 

    "name": "Can endocrine disorders be cured?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "Pituitary tumors and tumors of the adrenal glands are curable. Many endocrine problems cannot be cured effectively with medications and/or lifestyle changes." 

    } 

  }] 

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
                    <a href="#">Our Specialists</a>
                    <span>Internal Medicine & Endocrinology</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section pb-70 services_sec">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 col-lg-8 mt-md-0">
                    <div class="title-wrap">
                        <h1 class="theme-color">Internal Medicine & Endocrinology</h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('assets/images/banner/10.png')}}" class="img-fluid" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        
                        <h2 class="theme-color">SCI Family Clinic: Your Neighborhood Clinic</h2>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i> Our experienced team of doctors attends to all kinds of medical needs </li>
                            <li><i class="fa fa-check"></i> In-house diagnostic services Laboratory, X-Ray, USG.    </li>
                            <li><i class="fa fa-check"></i> Availability of Dentists, ENT, General Physicians, Urologists, Surgeons, Pediatrician,    </li>
                            <li><i class="fa fa-check"></i> Gynecologist & Ophthalmologist </li>
                            <li><i class="fa fa-check"></i> No need to visit multiple clinics or specialists.     </li>
                        </ul>
                        <p>Prevention is always better than cure. In today’s hectic lifestyle, people often neglect their health. A lot of undiagnosed diseases/conditions, if left untreated can progress to life-threatening conditions. SCI preventive health check-up helps you to get a complete picture of your body & its health & our team of medical experts help you to catch any disease on that any pre-existing condition. Our plans are highly flexible & these can be further tailor-made and tailor cost to suit patient requirements.   </p>
                        
                        
                        <div class="mt-3 mt-lg-6"></div>
                        <h2 class="theme-color">Frequently Asked Questions</h2>
                         
                         <div class="accordion faq_services" id="accordionExample">
                          <div class="card">
                            <div class="" id="headingOne">
                              <p class="mb-0">
                                <button class="faq_btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What are the common problems treated by an endocrinologist?     <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                        
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                               Some common problems treated by endocrinologists include Diabetes (type 1 and 2), hypoglycemia, and adrenal disorders, including Conn’s syndrome and Cushing syndrome.    
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Why should a patient see an endocrinologist? <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                              <div class="card-body">
                                Abnormal blood sugar levels, or symptoms such as excessive thirst, fatigue, weight gain, or blurry vision. These are the symptoms of problems with insulin.    
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                 What are the symptoms of endocrine disorders?     <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                              <div class="card-body">
                               Symptoms of endocrine disorders include-    
                               <ul>
                                   <li>Fatigue   </li>
                                   <li>Changes in vision   </li>
                                   <li>Excessive hunger and thirst</li>
                                   <li>Vomiting and nausea   </li>
                                   <li>Constant urination</li>
                                   <li>Unexpected weight gain and loss</li>
                               </ul>
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingFour">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What is the major cause of endocrine disorders?    <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                              <div class="card-body">
                               Endocrine disorders have severe potential causes such as tumors, genetic factors, or hormonal imbalances.    
                              </div>
                            </div>
                          </div>
                          
                           <div class="card">
                            <div class="card-header" id="headingFive">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                               Can endocrine disorders be cured?   <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                              <div class="card-body">
                               Pituitary tumors and tumors of the adrenal glands are curable. Many endocrine problems cannot be cured effectively with medications and/or lifestyle changes.   
                              </div>
                            </div>
                          </div>
                          
                          
                        </div>
                       
                    </div>
                    <div class="row">
                        <div class="col-sm-12 mt-20">
                            <p class="theme-color font-heading-bold">Our Doctors</p>

                            <div class="row">
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="doctor_ab">
                                        <img src="{{asset('assets/images/doctors/Dr-Himanshu-Shekhar.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Dr. Himanshu Shekhar</p>
                                    </div>
                                </div>
                               
                                <div class="col-sm-12 text-center mt-3">
                                    <a href="tel:9999446622" class="btn"><i class="icon-right-arrow"></i><span>Call Doctor </span><i class="icon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20">
                            <p class="theme-color font-heading-bold">Image Gallery</p>
                            <div class="row">
                                
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/image 600x355.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">OT</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Single-Room-SCI-Hopsital.jpg')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Single Room</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Deluxe-ROOM-1.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Deluxe Room</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Pt-waiting-Area1-1.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Patient Waiting Area</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Pt-Waiting-Area-1.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Patient Waiting Area</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                       
                        
                        
                    </div>
                    
                 
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="question-box mb-3">
                        <p class="theme-color font-heading-bold">Consult Now</p>
                        <form action="{{ url('online-consultation') }}" class="mt-15 forms" id="" method="post" novalidate="novalidate">
                            @csrf
                            <div class="successform">
                                <p>Your message was sent successfully!</p>
                            </div>
                            <div class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <input type="text" class="form-control" name="name" placeholder="Your name*" />
                            <input type="text" class="form-control" name="email" placeholder="E-mail*" />
                            <input type="text" class="form-control" name="phone" placeholder="Phone" />
                            <textarea class="form-control" name="message" placeholder="Question*"></textarea>
                            <input type="hidden" name="subject" value="InternalMedicineEndocrinology" />
                            <button type="submit" class="btn btn-sm btn-hover-fill mt-15">Ask Now <i class="fa fa-spinner fa-spin" style="display: none;"></i></button>
                    
                            
                        </form>
                    </div>
                    <!--services-->
                    @include('frontend.layouts.servicesside')
                    <!--//services-->
                     <div class="row d-flex flex-column flex-sm-row flex-md-column mt-3">
   
    <div class="col-auto col-sm col-md-auto">
        <div class="contact-box contact-box-2">
            <p class="contact-box-title services-side-heading">Contact Info</p>
            <ul class="icn-list">
                <li>
                    <i class="icon-telephone"></i>
                    <div class="d-flex flex-wrap"><a href="tel:9999446622">+91 9999446622 (For Appointment), </a> <a href="tel:01141675555">011 4167 5555 (For General Queries)</a></div>
                </li>
                <li><i class="icon-placeholder2"></i>M 4, Near M Block Market, Greater Kailash-1, New Delhi, 110048</li>
            </ul>
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

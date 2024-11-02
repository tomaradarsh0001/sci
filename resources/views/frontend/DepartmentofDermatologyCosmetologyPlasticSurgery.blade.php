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

    "name": "What is the difference between a dermatologist and a cosmetologist?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "A dermatologist is a physician who specializes in treating skin, hair, nails, and mucus membranes. Cosmetologists are not physicians. They specialize in haircutting, hairstyling, and other beauty services." 

    } 

  },{ 

    "@type": "Question", 

    "name": "Can dermatologists do plastic surgeries?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "Some dermatologists specialize in cosmetic dermatology spending extra time with lasers, treatments related to veins, and injectables. They are trained to do surgeries related to skin cancers but not aesthetic surgeries such as facelifts." 

    } 

  },{ 

    "@type": "Question", 

    "name": "What is the difference between a plastic surgeon and a cosmetologist?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "Plastic surgeon practice restoring the body's normal appearance and function whereas cosmetic surgeon focuses on aesthetic procedures" 

    } 

  },{ 

    "@type": "Question", 

    "name": "What are the types of plastic surgeries?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "Two types of plastic surgeries include reconstructive procedures and cosmetic procedures." 

    } 

  },{ 

    "@type": "Question", 

    "name": "What is the most common cosmetic surgery?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "The common types of cosmetic surgery are breast augmentation, breast implant removals, breast lifts, buttock lifts, chin, cheek, and lip reshaping, facial implants, and dermabrasion." 

    } 

  },{ 

    "@type": "Question", 

    "name": "What is the risk involved with plastic surgery?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "The risks involved with plastic surgery include infection at the incision site, bleeding, fluid buildup under the skin, scarring, and may require additional surgery." 

    } 

  }] 

} 

</script>
<script type="application/ld+json"> 

{ 

  "@context": "https://schema.org/", 

  "@type": "Person", 

  "name": "Dr. Sukhbir Singh", 

  "url": "https://scihospital.com/DepartmentofDermatologyCosmetologyPlasticSurgery", 

  "image": "https://scihospital.com/public/assets/images/doctors/Dr-Sukhbir-Singh.png", 

  "sameAs": "https://scihospital.com", 

  "jobTitle": "Senior Consultant Plastic & Cosmetic Surgeon", 

  "worksFor": { 

    "@type": "Organization", 

    "name": "SCI International Hospital" 

  }   

} 

</script> 
<script type="application/ld+json"> 

{ 

  "@context": "https://schema.org/", 

  "@type": "Person", 

  "name": "Dr. Sirisha Singh", 

  "url": "https://scihospital.com/DepartmentofDermatologyCosmetologyPlasticSurgery", 

  "image": "https://scihospital.com/public/assets/images/doctors/Dr-Sirisha-Singh.png", 

  "sameAs": "https://scihospital.com", 

  "jobTitle": "Senior Consultant Dermatologist & Cosmetologist", 

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
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                   <a href="{{ route('/') }}">Home</a>
                    <a href="#">Our Specialists</a>
                    <span>Cosmetic & Plastic Surgery</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section pb-70 services_sec ">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 col-lg-8 mt-md-0">
                    <div class="title-wrap">
                        <h1 class="theme-color">Department of Dermatology, Cosmetology & Plastic Surgery </h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('assets/images/banner/16.png')}}" class="img-fluid" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>Most Frequently Treated Areas  </p>
                        <p>Women – Abdomen, Hips, Thighs, Buttocks, Knees & Double chins. Men – Love Handles, Abdomen, Enlarged Breasts, Arms, Neck & Face. </p>
                        <div class="mt-3 mt-lg-6"></div>
                        <h2 class="theme-color">Plastic Surgery Treatments</h2>
                        <h3 class="theme-color">Non-Surgical Treatments</h3>
                       
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i> Botox </li>
                            <li><i class="fa fa-check"></i> Fillers (Juvéderm- USFDA APPROVED) </li>
                            <li><i class="fa fa-check"></i> Thread Lift  </li>
                            <li><i class="fa fa-check"></i> LASERS- Hair Reduction, Tattoo Removal </li>
                            <li><i class="fa fa-check"></i> Pigmentation  </li>
                        </ul>
                        <h3 class="theme-color">Face</h3>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i>  Facelift</li>
                            <li><i class="fa fa-check"></i>  Eyelid surgery (blepharoplasty)</li>
                            <li><i class="fa fa-check"></i>  Brow Lift</li>
                            <li><i class="fa fa-check"></i> Nose Reshaping Surgery</li>
                            <li><i class="fa fa-check"></i> Lip Reduction/Plumping  </li>
                            <li><i class="fa fa-check"></i>Ear Reshaping/Earlobe Repair </li>
                            <li><i class="fa fa-check"></i> Dimple creation</li>
                            <li><i class="fa fa-check"></i> Scar Correction</li>
                        </ul>
                        <h3 class="theme-color">Breast</h3>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i> Breast Reduction Surgery </li>
                            <li><i class="fa fa-check"></i> Breast Implants/Enlargement Surgery </li>
                            <li><i class="fa fa-check"></i> Breast lift surgery (Mastopexy) </li>
                            <li><i class="fa fa-check"></i> Male Breast Reduction/Gynecomastia  </li>
                        </ul>
                        <h3 class="theme-color">Body</h3>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i>  Liposuction Surgery Treatment </li>
                            <li><i class="fa fa-check"></i> Abdominoplasty/Tummy Tuck Surgery </li>
                            <li><i class="fa fa-check"></i> 6 Pack Abs/Abdominal Etching </li>
                            <li><i class="fa fa-check"></i> Brazilian butt lift for hair fall (PRP) </li>
                            <li><i class="fa fa-check"></i> Hair Transplant (FUE/FUT) </li>
                        </ul>
                        
                        
                        <div class="mt-3 mt-lg-6"></div>
                        <h2 class="theme-color">Cosmetology Treatments </h2>
                        <ul class="icn-list-lg">
                            <li><i class="fa fa-check"></i> <b>Hair – </b>Mesotherapy for hair loss, Growth factors, Hair Scan, Hair Transplantation. </li>
                            <li><i class="fa fa-check"></i> <b>Anti-Ageing Treatment – </b>Assessment of the face, Medi-Facials Treatment, Chemical peels, Botulinum Toxin Treatment, Fillers, Non-Surgical Facelift Treatment, Thread Lifts </li>
                            <li><i class="fa fa-check"></i> <b>SKIN LASERS – </b>Permanent hair reduction, Pigmentation treatment, Photo-rejuvenation (Photo-facials) – Acne Treatment, Treatment of Acne scars, Tattoo removal. </li>
                            <li><i class="fa fa-check"></i> <b>Body Treatments Doctor –</b> Hand and Feet Rejuvenation, Pigmentation Treatments, Non-Surgical skin tightening, treatment of stretch marks and scars </li>
                        </ul>
                        
                        <div class="mt-3 mt-lg-6"></div>
                        <h3 class="theme-color">Frequently Asked Questions About Dermatology, Cosmetology & Plastic Surgery</h3>
                         
                         <div class="accordion faq_services" id="accordionExample">
                          <div class="card">
                            <div class="" id="headingOne">
                              <p class="mb-0">
                                <button class="faq_btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What is the difference between a dermatologist and a cosmetologist?    <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                        
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                               A dermatologist is a physician who specializes in treating skin, hair, nails, and mucus membranes. Cosmetologists are not physicians. They specialize in haircutting, hairstyling, and other beauty services.   
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Can dermatologists do plastic surgeries? <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                              <div class="card-body">
                                Some dermatologists specialize in cosmetic dermatology spending extra time with lasers, treatments related to veins, and injectables. They are trained to do surgeries related to skin cancers but not aesthetic surgeries such as facelifts.   
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What is the difference between a plastic surgeon and a cosmetologist?  <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                              <div class="card-body">
                               Plastic surgeon practice restoring the body's normal appearance and function whereas cosmetic surgeon focuses on aesthetic procedures.   
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingFour">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                               What are the types of plastic surgeries?   <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                              <div class="card-body">
                               Two types of plastic surgeries include reconstructive procedures and cosmetic procedures.   
                              </div>
                            </div>
                          </div>
                          
                           <div class="card">
                            <div class="card-header" id="headingFive">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                               What is the most common cosmetic surgery?   <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                              <div class="card-body">
                              The common types of cosmetic surgery are breast augmentation, breast implant removals, breast lifts, buttock lifts, chin, cheek, and lip reshaping, facial implants, and dermabrasion.   
                              </div>
                            </div>
                          </div>
                          
                          <div class="card">
                            <div class="card-header" id="headingSix">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                               What is the risk involved with plastic surgery?   <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                              <div class="card-body">
                              The risks involved with plastic surgery include infection at the incision site, bleeding, fluid buildup under the skin, scarring, and may require additional surgery.   
                              </div>
                            </div>
                          </div>
                          
                         
                          
                        </div>
                       
                    </div>
                    
                    
                    <div class="row">
                        <div class="col-sm-12 mt-20">
                            <p class="theme-color  font-heading-bold">Our Doctors</p>

                            <div class="row">
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="doctor_ab">
                                        <img src="{{asset('assets/images/doctors/Dr-Sukhbir-Singh.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc"> Dr. Sukhbir Singh</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="doctor_ab">
                                        <img src="{{asset('assets/images/doctors/Dr-Sirisha-Singh.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Dr. Sirisha Singh</p>
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
                                        <img src="{{asset('assets/images/img-gallery/Dr-Asif-in-OT-2.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">OT During Surgery</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/LITHOTRIPSY..STONE-MANAGEMENT-WITHOUT-SURGERY.png')}}" class="w-100" alt="" />
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
                            <input type="hidden" name="subject" value="DepartmentofDermatologyCosmetologyPlasticSurgery" />
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

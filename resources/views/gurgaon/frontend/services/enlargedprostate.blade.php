@extends('gurgaon.frontend.layouts.main') @section('main-container')
 @section('gurgaon.define_robots', 'index, follow') @section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img', 'https://scihospital.com/gurgaon/public/assets/images/sci%20logo.webp')
<script type="application/ld+json"> 
 { 
   "@context": "https://schema.org/",  
   "@type": "Product",  
   "name": "SCI Hospital", 
   "image": "https://scihospital.com/gurgaon/public/assets/images/sci%20logo.webp", 
   "description": "SCI International Hospital is a Multispeciality and Surgical hospital in gurgaon. Providing advanced healthcare services in over 15 specialties.", 
   "aggregateRating": { 
 	"@type": "AggregateRating", 
 	"ratingValue": "4.8", 
 	"bestRating": "5", 
 	"worstRating": "1", 
 	"ratingCount": "40" 
   } 
 } 
</script> 
 

<script type="application/ld+json"> 
 { 
   "@context": "https://schema.org", 
   "@type": "MedicalOrganization", 
   "name": "SCI Hospital Gurgaon", 
   "url": "https://scihospital.com/gurgaon/", 
   "logo": "https://scihospital.com/gurgaon/public/assets/images/sci%20logo.webp", 
   "contactPoint": { 
 	"@type": "ContactPoint", 
 	"telephone": "9354471022", 
 	"contactType": "emergency", 
 	"areaServed": "IN", 
 	"availableLanguage": "en" 
   } 
 } 
</script> 

<script type="application/ld+json"> 

{ 

  "@context": "https://schema.org/", 

  "@type": "Person", 

  "name": "Dr. Vishal Dutt Gour", 

  "url": "https://scihospital.com/gurgaon/dr-vishal-dutt-gour", 

  "image": "https://scihospital.com/gurgaon/public/assets/images/doctors/Dr-Vishal-Dutt-Gour-1.png", 

  "jobTitle": "MBBS, MS, M.Ch (Urology)", 

  "worksFor": { 

    "@type": "Organization", 

    "name": "SCI Hospital" 

  }   

} 

</script> 

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Deepanshu Gupta",
  "url": "https://scihospital.com/gurgaon/kidney-stone-treatment",
  "image": "https://scihospital.com/gurgaon/public/assets/images/doctors/dr-deepanshu-gupta.webp",
  "jobTitle": "Urologist",
  "worksFor": {
    "@type": "Organization",
    "name": "sci hospital"
  }  
}
</script>

<script type="application/ld+json"> 

{ 

  "@context": "https://schema.org", 

  "@type": "FAQPage", 

  "mainEntity": [{ 

    "@type": "Question", 

    "name": "Is BPH the same as prostate cancer?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "No, BPH is non-cancerous, whereas prostate cancer involves malignant cell growth. Both conditions may share some symptoms, so proper diagnosis is crucial." 

    } 

  },{ 

    "@type": "Question", 

    "name": "Who are the best doctors for enlarged prostate treatment in Gurgaon?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "SCI Gurgaon is home to several renowned urologists and specialists in enlarged prostate treatment." 

    } 

  },{ 

    "@type": "Question", 

    "name": "Can BPH be prevented?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "While you can't entirely prevent BPH, a healthy lifestyle with regular exercise and a balanced diet may help manage symptoms and reduce the risk of complications." 

    } 

  },{ 

    "@type": "Question", 

    "name": "Is surgery the only option for severe BPH?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "Surgery is typically considered when other treatments haven't been effective or when complications arise. Many men find relief from BPH through less invasive procedures or medications." 

    } 

  }] 

} 

</script> 
<style>
    
    .newbtn {
        font-size: 14px !important;
        line-height: 22px !important;
        padding: 5px 20px !important;
        font-weight: 500 !important;
        color: #fff !important;
        background: #c0333d !important;
        border: 1px solid transparent;
        box-shadow: none !important;
    }
</style>

<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"></noscript>
        
        <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"></noscript>
</head>
<body>
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('gurgaon.index') }}">Home</a>
                    <a href="#">Our Specialists</a>
                   
                    <span>Enlarged Prostate Treatment In Gurgaon </span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section services_sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 mt-md-0">
                    <div class="title-wrap">
                        <h1 class="theme-color">Enlarged Prostate Treatment In Gurgaon  </h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('public_gurgaon/assets/images/blog/enlarged-prostate-banner.webp')}}" class="img-fluid w-100" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>Benign Prostatic Hyperplasia is a serious condition for a male because prostate muscles expel semen and fluid from the penis during sexual climax. This process is necessary for having a baby; if this condition is left untreated, it can cause male infertility. But you don't need to worry a lot because you can take advantage of enlarged prostate treatment in Gurgaon for better results. This condition commonly affects middle-aged and over 50 men, but thankfully, you can visit the best enlarged prostate hospital in Gurgaon to get the best treatment for this serious condition. Don't let an enlarged prostate impact your life; consult with our best doctors for enlarged prostate treatment and relive your life as it was before. </p>
                        <div class="mt-3 mt-lg-6"></div>
                        <div class="row align-items-center">
                            <div class="col-sm-7">
                                <h2 class="theme-color">What Is BPH Or Benign Prostatic Hyperplasia?  </h2>
                                <p>Benign prostatic hyperplasia, or BPH, is a health problem that happens more often as people get older. An enlarged prostate is another name for this condition. A small area called the prostate helps make sperm, It is right next to the bladder. When the cells in the prostate gland start to grow, this problem occurs. The extra cells also cause the prostate gland to swell, which squeezes the urethra and slows the flow of pee.  </p>
                                <p>This disease is not the same as prostate cancer, and it does not even raise the risk of cancer. But it could affect a person's quality of life. So, if you have problems with a swollen prostate, you should talk to a doctor before you decide on a treatment.  </p>

                            </div>
                            <div class="col-sm-5 p-2">
                                <img src="{{asset('public_gurgaon/assets/images/blog/enlarged-prostate.webp')}}" class="img-fluid w-100" alt="" />
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>

                        <div class="row">
                            <div class="col-sm-8">
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Symptoms Of Enlarged Prostate Or BPH</h2>
                                            <p>Recognizing the symptoms is the first step towards Enlarged Prostate Treatment. Common symptoms of BPH include: </p>
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Frequent urination, especially at night (nocturia). </li>
                                                <li><i class="fa fa-check"></i> Weak or interrupted urine flow. </li>
                                                <li><i class="fa fa-check"></i> Difficulty initiating and stopping urination. </li>
                                                <li><i class="fa fa-check"></i> Feeling of incomplete bladder emptying. </li>
                                                <li><i class="fa fa-check"></i> Urinary tract infections (UTIs). </li>
                                                <li><i class="fa fa-check"></i> Presence of blood in the urine (hematuria). </li>
                                            </ul>
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-3 mt-lg-6"></div>
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Causes Of BPH</h2>
                                            <p>Actually, it is still unclear what causes enlarged prostate, but here are a few causes that can provide you with some important information about an enlarged prostate:  </p>
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Swelling of the prostate gland </li>
                                                <li><i class="fa fa-check"></i> Growing age ( Especially Above 40 people) </li>
                                                <li><i class="fa fa-check"></i> Increased amounts of estrogen in the male body. </li>
                                                <li><i class="fa fa-check"></i> Changes in male sexual hormone levels </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-3 mt-lg-6"></div>
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Complication Of BPH</h2>
                                            <p>Complications of an enlarged prostate is includes:</p>
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Being unable to urinate.  </li>
                                                <li><i class="fa fa-check"></i>  If you can't empty your bladder all the way, you may get a urinary tract infection. </li>
                                                <li><i class="fa fa-check"></i>  Inactive urine can lead to the formation of bladder stones. </li>
                                                <li><i class="fa fa-check"></i>  Urinary retention leading to prostate infection (prostatitis). </li>
                                                <li><i class="fa fa-check"></i>  Male Infertility, including impotence and inability to ejaculate. </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-3 mt-lg-6"></div>
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">How To Treat And Diagnosed</h2>
                                            <p>Diagnosing benign prostatic hyperplasia (BPH) typically involves a thorough medical history, physical examination, and possibly diagnostic tests such as:  </p>
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Digital rectal examination (DRE) </li>
                                                <li><i class="fa fa-check"></i> Prostate-specific antigen (PSA) blood test </li>
                                                <li><i class="fa fa-check"></i> Ultrasound or a Cystoscopy </li>
                                            </ul>
                                            
                                            <p>Once BPH is found, it can be treated in a number of ways, from making changes to your lifestyle and taking medicine for mild cases to minimally invasive operations like: </p>
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Transurethral resection of the prostate (TURP)   </li>
                                                <li><i class="fa fa-check"></i>  Transurethral Incision of the Prostate (TUIP) </li>
                                                <li><i class="fa fa-check"></i>  Transurethral microwave thermotherapy (TUMT)  </li>
                                                <li><i class="fa fa-check"></i>  Holmium Laser Enucleation of Prostate (HOLEP) </li>
                                                <li><i class="fa fa-check"></i> Severe cases or those with complications may require open prostate surgery.   </li>
                                            </ul>
                                            
                                            <p>The choice of enlarged prostate treatment in Gurgaon center depends on the severity of symptoms, overall health, and patient preferences and should be discussed with a healthcare provider to determine the most appropriate approach. </p>
                                        </div>
                                    </div>
                                </div>
                                
                                
                                
                                
                                
                            </div>
                            <div class="col-sm-4">
                                @include('gurgaon.frontend.layouts.servicesside')
                                <div class="mb-5"></div>
                                <!--//services-->
                                
                                <div class="row d-flex flex-column flex-sm-row flex-md-column mt-3">
                                    <div class="col-auto col-sm col-md-auto">
                                        <div class="contact-box contact-box-2">
                                            <p class="contact-box-title services-side-heading">Contact Info</p>
                                            <ul class="icn-list">
                                                <li>
                                                    <i class="icon-telephone"></i>
                                                    <div class="d-flex flex-wrap"><a href="tel: 8287901614"> +91-8287901614 (For Appointment), </a></div>
                                                </li>
                                                <li><i class="icon-placeholder2"></i>Plot No. 7, Golf Course Rd, Sector 43, Gurugram, Haryana 122002</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-3 mt-lg-6"></div>
                        
                        <div class="container">
                            <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Best Enlarged Prostate Hospital In Gurgaon  </h2>
                                            <p>SCI Hospital is one of the best enlarged prostate hospital in Gurgaon. We give our patients the best care and hospital experience possible when it comes to prostate surgery. We have top-notch doctors and cutting-edge technology all under one roof, so customers are sure to get good care. We have highly skilled best doctors for enlarged prostate treatment with experience of 10+ years. We have shown that we can handle even the most complex cases in a precise and accurate way. We have the most up-to-date tools for identifying and treating serious and rare cases. We treat each patient well based on what they need so that they get personalized care. </p>
                                        </div>
                                    </div>
                        </div>
                        
                                
                        
                        
                        
                       
                        
                        

                        <div class="mt-3 mt-lg-6"></div>

                        <h3 class="theme-color text-center">Best Doctors For Enlarged Prostate Treatment </h3>
                       

                        <div class="container">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-12">
                                    <div class="owl-carousel" id="doccard_slider">
                                    
                                    <div class="post-slide2">
                                        <div class="team_box">
                                            <div class="row align-items-center">
                                                <div class="col-sm-4 col-lg-4">
                                                    <img src="https://scihospital.com/gurgaon/public/assets/images/doctors/Dr-Vishal-Dutt-Gour-1.png" alt="" class="img-responsive" loading="lazy" />
                                                </div>
                                                <div class="col-sm-8 col-lg-8">
                                                    <h5 class="doctor-box-name theme-color">Dr. Vishal Dutt Gour</h5>
                                                    <p>
                                                        Senior Consultant<br>Urologist & Andrologist
                                                    </p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="line_box"></div>
                                                </div>
                                               
                                                <div class="col-sm-12">
                                                    <div class="btn_box_doc">
                                                        <a href="https://scihospital.com/gurgaon/dr-vishal-dutt-gour" class="newbtn btn"><i class="icon-right-arrow"></i><span>View More </span><i class="icon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-slide2">
                                        <div class="team_box">
                                            <div class="row align-items-center">
                                                <div class="col-sm-4 col-lg-4">
                                                    <img src="https://scihospital.com/gurgaon/public/assets/images/doctors/dr-deepanshu-gupta.webp" alt="" class="img-responsive" loading="lazy" />
                                                </div>
                                                <div class="col-sm-8 col-lg-8">
                                                    <h5 class="doctor-box-name theme-color">Dr. Deepanshu Gupta</h5>
                                                    <p>
                                                       Senior Consultant<br>Urologist & Andrologist
                                                    </p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="line_box"></div>
                                                </div>
                                               
                                                <div class="col-sm-12">
                                                    <div class="btn_box_doc">
                                                        <a href="https://scihospital.com/gurgaon/dr-deepanshu-gupta" class="newbtn btn"><i class="icon-right-arrow"></i><span>View More </span><i class="icon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-6"></div>
                            </div>
                        </div>
                        

                        <div class="mt-3 mt-lg-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
             

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h4 class="theme-color">Image Gallery</h4>
                    </div>
                </div>
                @include('gurgaon.frontend.layouts.gallery')

                <div class="container">
                    <div class="mt-3 mt-lg-6"></div>
                    <div class="mt-3 mt-lg-6"></div>
                    <div class="mt-3 mt-lg-6"></div>
                    <h4 class="theme-color">Frequently Asked Questions  </h4>

                    <div class="accordion faq_services" id="accordionExample">
                        <div class="card">
                            <div class="" id="headingOne">
                                <p class="mb-0">
                                    <button class="faq_btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Q. Is BPH the same as prostate cancer?   <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                 A. No, BPH is non-cancerous, whereas prostate cancer involves malignant cell growth. Both conditions may share some symptoms, so proper diagnosis is crucial. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Q. Who are the best doctors for enlarged prostate treatment in Gurgaon?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    A. SCI Gurgaon is home to several renowned urologists and specialists in enlarged prostate treatment.  
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       Q. Can BPH be prevented?    <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                  A. While you can't entirely prevent BPH, a healthy lifestyle with regular exercise and a balanced diet may help manage symptoms and reduce the risk of complications. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       Q. Is surgery the only option for severe BPH?    <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                  A. Surgery is typically considered when other treatments haven't been effective or when complications arise. Many men find relief from BPH through less invasive procedures or medications. 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="mt-3 mt-lg-6"></div>
                <div class="mt-3 mt-lg-6"></div>
            </div>

            
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
 
            
             $('#doccard_slider').owlCarousel({
      margin: 15,
      
      dots: true,
      loop:true,
      autoplay: true,
     
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items:2
        }
      }
    });
</script>
    @endsection


@extends('gurgaon.frontend.layouts.main') @section('main-container')
 @section('gurgaon.define_robots', 'index, follow') @section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img', 'https://scihospital.com/gurgaon/public/assets/images/sci%20logo.webp')
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Deepanshu Gupta",
  "url": "https://scihospital.com/gurgaon/dr-deepanshu-gupta",
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

  "@context": "https://schema.org", 

  "@type": "FAQPage", 

  "mainEntity": [{ 

    "@type": "Question", 

    "name": "How much does hypospadias surgery cost in Gurgaon?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "The cost of hypospadias surgery can vary depending on the severity of the condition, the type of surgery required, and the hospital. At SCI Hospital, we offer competitive and transparent pricing for hypospadias surgery. Contact our hospital for specific cost information." 

    } 

  },{ 

    "@type": "Question", 

    "name": "Is hypospadias surgery safe and effective?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "Hypospadias surgery is generally safe and highly effective when performed by experienced surgeons. SCI Hospital has a track record of successful outcomes in hypospadias correction surgeries." 

    } 

  },{ 

    "@type": "Question", 

    "name": "Is hypospadias surgery painful?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "Hypospadias surgery is performed under anesthesia, so the patient does not feel pain during the procedure. After surgery, some discomfort and pain may be experienced, but pain management measures are provided to ensure a comfortable recovery." 

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
                   
                    <span>Best Hypospadias Hospital In Gurgaon</span>
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
                        <h1 class="theme-color">Best Hypospadias Hospital In Gurgaon  </h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('public_gurgaon/assets/images/blog/hypospadias-surgery-banner.webp')}}" class="img-fluid w-100" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>Hypospadias is a congenital condition where the opening of the urethra is located on the underside of the penis instead of the tip, which causes difficulties for a child to urinate properly. But as a parent, you don’t need to worry a lot because you can take advantage of the best hypospadias hospital in Gurgaon for expert care and modern facilities. If you are considering hypospadias surgery, then you can consult with our best hypospadias doctors in Gurgaon to get the right advice for your child’s health.</p>
                        <p>Secure your child's future with the correct hypospadias surgery in Gurgaon by contacting us today. Our expert team and modern equipment make this surgery more comfortable for your child. </p>
                        <div class="mt-3 mt-lg-6"></div>
                        <div class="row align-items-center">
                            <div class="col-sm-7">
                                <h2 class="theme-color">What Is Hypospadias?  </h2>
                                <p>Hypospadias is a birth defect in which the opening of the urethra is on the bottom of the penis instead of at the tip. Urethra is the part of your body that helps pee come out of your bladder and leaves your body through a tube, and this tube is called urethra.  </p>
                                <p>Hypospadias is normal, and it won't make it hard for you to care for your baby. Most of the time, surgery will make your child's penis look normal again. Most guys with hypospadias can have normal urination and reproduction if they get the right treatment at the right time.  </p>

                            </div>
                            <div class="col-sm-5 p-2">
                                <img src="{{asset('public_gurgaon/assets/images/services/Types-of-Hypodpsdias.webp')}}" class="img-fluid w-100" alt="Types of Hypodpsdias" />
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>

                        <div class="row">
                            <div class="col-sm-8">
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">What Are The Types Of Hypospadias? </h2>
                                            <p>The position of the opening of the urethra decides the type of hypospadias a boy has: </p>
                                            <p><b>Subcoronal:</b> The opening of the urethra is situated in close proximity to the top of the penis. </p>
                                            <p><b>Midshaft:</b> The opening of the urethra can be found along the edge of the penis in most people. </p>
                                            <p><b>Penoscrotal:</b> The urethra opens where the penis and scrotum meet; boys have a curvier penis while erection. </p>
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-3 mt-lg-6"></div>
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Causes Of Hypospadias</h2>
                                            <p>Hypospadias is present (congenital) at birth. As a male fetus's penis grows, chemicals cause the urethra and foreskin to grow at the same time. Hypospadias happens when these hormones don't work right, causing the urethra to grow in an odd way. </p>
                                            <p> More risk is generated during pregnancy if a mother is facing and doing these things: </p>
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Unhealthy body weight </li>
                                                <li><i class="fa fa-check"></i> Use treatments for infertility to get pregnant.   </li>
                                                <li><i class="fa fa-check"></i> Use other hormones before pregnancy or while you are pregnant.  </li>
                                                <li><i class="fa fa-check"></i> Mother age is over 35  </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-3 mt-lg-6"></div>
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Symptoms Of Hypospadias</h2>
                                            <p>Symptoms of hypospadias may include:</p>
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> A urethral opening that appears on the underside of the penis instead of at the tip.</li>
                                                <li><i class="fa fa-check"></i> A penis that appears curved or bent due to the location of the urethral opening.</li>
                                                <li><i class="fa fa-check"></i> Often experience challenges during urination, with the urine stream sometimes spraying or splitting. </li>
                                                <li><i class="fa fa-check"></i> Hypospadias can be associated with other genital abnormalities, such as a hooded foreskin or a smaller-than-average penis. </li>
                                                <li><i class="fa fa-check"></i> Chordee, which is a downward curvature of the penis, may accompany hypospadias, particularly in severe cases. </li>
                                                <li><i class="fa fa-check"></i> Hypospadias may experience pain or discomfort during urination, erections, or sexual activity.  </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-3 mt-lg-6"></div>
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">How Is Hypospadias Diagnosed And Treated?</h2>
                                            <p>Our best hypospadias doctors in Gurgaon center will do a thorough diagnosis of your hypospadias then they will treat you in the right manner. </p>
                                            <p><b>Physical Examination:</b> Diagnosis often begins with a thorough physical examination of the newborn or affected individual to identify the location of the urethral opening. </p>
                                            <p><b>Medical History:</b> Gathering a comprehensive medical history, including any family history of hypospadias or related conditions, can aid in diagnosis. </p>
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
                                            <h2 class="theme-color">Treatment For Hypospadias  </h2>
                                            <p>You can receive specialized hypospadias surgery in Gurgaon, tailored to your specific treatment needs. </p>
                                            <p><b>Surgical Correction:</b> Hypospadias is primarily treated through surgical correction, which aims to reposition the urethral opening to the tip of the penis. </p>
                                            <p><b>Timing of Surgery: </b>The surgery is usually performed when the child is around 6 to 18 months old, depending on the specific case. </p>
                                            <p><b>Surgical Techniques: </b>Different surgical techniques are employed based on the severity and location of hypospadias, including the use of tissue grafts or flaps to reconstruct the urethra. </p>
                                            <p><b>Postoperative Care:</b> Following surgery, careful postoperative care is essential to ensure proper healing and minimize complications. </p>
                                            <p><b>Long-Term Follow-Up:</b> Regular follow-up appointments with a healthcare provider are recommended to monitor the progress and any potential long-term effects. </p>
                                        </div>
                                    </div>
                        </div>
                        
                                
                         <div class="mt-3 mt-lg-6"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="theme-color">Sci Hospital Provides Best Hypospadias Surgery In Gurgaon</h2>
                                    <p>Our best hypospadias hospital in Gurgaon, understands how big a problem is hypospadias for your child, that’s we try to provide every necessary care for your kid with these facilities: </p>
                                    <p><b>Expertise:</b> Our surgeons have extensive experience in treating hypospadias, ensuring your child receives the highest standard of care. </p>
                                    <p><b>Advanced Techniques:</b> We employ the latest surgical techniques and technologies to achieve optimal results with minimal scarring. </p>
                                    <p><b>Personalized Care:</b> Each child is unique, and we tailor our treatment plans to suit their specific needs, considering both medical and emotional aspects. </p>
                                    <p><b>Family-Centered Approach:</b> We understand the challenges a hypospadias diagnosis can bring, and we support not only the child but also their family throughout the journey. </p>
                                    <p><b>State-of-the-Art Facilities: </b>SCI Hospital boasts modern, well-equipped facilities to provide safe and comfortable care to our young patients. </p>
                                    <p><b>Postoperative Support:</b> Our commitment to your child's well-being doesn't end with surgery. We provide comprehensive postoperative care and follow-up to ensure a smooth recovery. </p>
                                 
                                </div>
                            </div>
                        </div>
                        
                        
                       
                        
                        

                        <div class="mt-3 mt-lg-6"></div>

                        <h3 class="theme-color text-center">Best Hypospadias Doctors In Gurgaon </h3>
                       

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
                                      Q. How much does hypospadias surgery cost in Gurgaon?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                 A. The cost of hypospadias surgery can vary depending on the severity of the condition, the type of surgery required, and the hospital. At SCI Hospital, we offer competitive and transparent pricing for hypospadias surgery. Contact our hospital for specific cost information.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Q. Is hypospadias surgery safe and effective? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    A. Hypospadias surgery is generally safe and highly effective when performed by experienced surgeons. SCI Hospital has a track record of successful outcomes in hypospadias correction surgeries. 
                                    
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       Q. Is hypospadias surgery painful?   <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                  A. Hypospadias surgery is performed under anesthesia, so the patient does not feel pain during the procedure. After surgery, some discomfort and pain may be experienced, but pain management measures are provided to ensure a comfortable recovery.
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


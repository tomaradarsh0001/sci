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

    "name": "What is the most common type of treatment for ovarian cysts?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "The common treatment for ovarian cysts is removal by laparoscopy." 

    } 

  },{ 

    "@type": "Question", 

    "name": "What is the most common cause of ovarian cysts?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "The most common cause of ovarian cysts is hormonal problems." 

    } 

  },{ 

    "@type": "Question", 

    "name": "What size ovarian cysts need surgery?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "Large cysts (>5 to 10cm) are the ones that require surgical removal as compared to small-sized cysts." 

    } 

  },{ 

    "@type": "Question", 

    "name": "Can ovarian cysts stop fertility?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "The removal of ovarian cysts may require treatment but it doesn’t affect the person’s fertility." 

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
                    <a href="#">Obstetrics & Gynecology</a>
                    <span>Overian Cyst Treatment</span>
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
                        <h1 class="theme-color">Ovarian cyst treatment</h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('assets/images/banner/ovarian-cysts-SCI.png')}}" class="img-fluid" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>The ovaries are an essential part of the female reproductive system. These are present inside the lower abdomen on either side of the uterus. The two ovaries are about the shape and size of an almond.  </p>
                        <p>Eggs (ova) that mature and develop in the ovaries are released every monthly cycle during their childbearing years. Both ovaries of women produce eggs and female hormones – estrogen and progesterone.  </p>
                        <p>However, sometimes fluid-filled sac(s) called cysts are developed in an ovary or on the surface. Many women are observed to have ovarian cysts at some time in their life. These ovarian cysts typically begin as little and cause no harm or discomfort. Most of these cysts also disappear without any treatment in a few months.</p>
                        <p>But if the ovarian cysts rupture, they can cause serious symptoms. For protecting your health, you need to get a regular pelvic examination to know about the symptoms signaling a potential health issue.  </p>
                        
                        <div class="mt-3 mt-lg-6"></div>
                        <h2 class="theme-color">What are the symptoms of ovarian cysts? </h2>

                        
                        <p><strong>Common symptoms of an ovarian cyst are:  </strong></p>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i> Pain in the pelvis: It can be persistent pain or a dull ache in the lower back or thighs. The pain starts or ends during menstruation.  </li>
                            <li><i class="fa fa-check"></i> Irregular and painful menstruation: It could be lighter or heavier than before.  </li>
                            <li><i class="fa fa-check"></i> Dyspareunia: Pelvic pain occurs at the time of sexual intercourse.  </li>
                            <li><i class="fa fa-check"></i> Bowel issues: These issues include pain while passing stool or frequent urgency to pass stool or pressure on the bowels.  </li>
                            <li><i class="fa fa-check"></i> Abdominal problems: These include swelling, bloating, or heaviness.  </li>
                            <li><i class="fa fa-check"></i> Urinary problems: Problems while emptying the bladder or urgency to urinate frequently.  </li>
                        </ul>
                        <p>Hormonal abnormalities: Production of abnormal hormones, which results in unusual changes like body hair growth or changes in the way your breasts look.  </p>
                        
                        
                        <div class="mt-3 mt-lg-6"></div>
                        <h2 class="theme-color">Causes of Ovarian Cysts</h2>
                        <p>The following are the common causes of ovarian cysts:  </p>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i> Hormonal problems: The functional cysts generally go away, without any medical treatment. However, these are caused due to hormonal issues or due to drugs used for ovulation.  </li>
                            <li><i class="fa fa-check"></i> Endometriosis: If a woman has endometriosis, she is likely to develop a specific ovarian cyst, known as endometrioma. In this type of cyst, the endometriosis tissue is attached to the ovary for growth. These cysts cause pain during menstrual periods or intercourse.  </li>
                            <li><i class="fa fa-check"></i> Pregnancy: The ovarian cyst can also develop during early pregnancy for supporting the pregnancy unless the placenta is formed. Sometimes, this cyst remains in/on the ovary even after pregnancy and it must be removed.</li>
                        </ul>
                        <p>Severe pelvic infections: These infections can easily spread to ovaries or fallopian tubes, causing the formation of cysts.  </p>

                        <div class="mt-3 mt-lg-6"></div>
                        <h2 class="theme-color">Various Types of Ovarian Cysts</h2>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i> Follicular cysts: It is the most common type of ovarian cyst that develops due to follicle growth during the menstrual cycle.  </li>
                            <li><i class="fa fa-check"></i> Corpus luteum cysts: When pregnancy doesn’t occur, this corpusluteum (found inside the ovary) breaks down to disappear. However, it can also be filled with blood or fluid to persist as an ovarian cyst.  </li>
                            <li><i class="fa fa-check"></i> Chocolate cysts or endometrioma: This cyst occurs when the cells lining the uterus from inside, instead begin to grow outside the uterus.  </li>
                            <li><i class="fa fa-check"></i> Polycystic ovarian syndrome: It is usually called polycystic ovarian syndrome (PCOS), which is characterized by the formation of multiple small cysts inside both ovaries.  </li>
                            <li><i class="fa fa-check"></i> Tubo-ovarian abscesses: Infections of the pelvic organs can cause pus-filled cystic areas in ovaries or Fallopian tubes.  </li>
                            <li><i class="fa fa-check"></i> Dermoid cysts: These are cysts with abnormal tissue growth (benign or malignant).  </li>
                        </ul>
                        
                        <div class="mt-3 mt-lg-6"></div>

                        <h2 class="theme-color">Ovarian Cysts Treatment Options</h2>
                        <p>The doctor may suggest you either shrink or remove the ovarian cyst if it won’t go away on its own or grow larger. Here are the popular treatment options:  </p>
                        <h3 class="theme-color">Birth control pills</h3>
                        <p>For recurrent ovarian cysts, the specialists may prescribe you oral contraceptives for stopping ovulation and avoiding the formation of new cysts. Birth control pills also help in reducing the risk of ovarian cancer.  </p>
                        <div class="mt-3 mt-lg-6"></div>

                        <h3 class="theme-color">Surgery:</h3>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i> Laparoscopy: If the cyst is small and diagnosed to be cancer-causing, the doctor may perform laparoscopy surgery to remove the cyst. The specialist makes a small incision near the navel and inserts a tiny instrument in your abdomen for removing the cyst.  </li>
                            <li><i class="fa fa-check"></i> Laparotomy: For a large cyst, your doctor will recommend removing it through laparotomy surgery. If the cyst is cancerous, a hysterectomy is performed (via the surgical procedure) to remove the uterus or ovaries for removing the cancerous large cyst.  </li>
                        </ul>
                        <div class="mt-3 mt-lg-6"></div>

                        <h3 class="theme-color">Best Hospital for Ovarian Cyst Treatment</h3>
                        <p>SCI Hospital is a leading hospital in Delhi for treating ovarian cysts through advanced techniques. We have advanced Ultrasound Devices, MRI, and CT Scan devices for frequent monitoring and determining whether the cysts are functional or not.  </p>
                        <p>People across 55+ countries trust our experienced medical professionals due to the following reasons:  </p>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i> Expert Care 24/7: Our staff and a team of professional medical specialists, including gynecologists, obstetricians, anaesthesiologists, etc., ensure the best facilities 24/7, 365 days a year.  </li>
                            <li><i class="fa fa-check"></i> Advanced Facilities: We have advanced facilities like well-equipped operation theatres, ICUs, and aftercare facilities to ensure the utmost safety and care.  </li>
                        </ul>
                        <p>Best Care for High-risk disorders: We also have high-risk multidisciplinary specialists to ensure all our patients get the best treatment for complicated medical treatments  </p>
                        
                        <div class="mt-3 mt-lg-6"></div>

                        <h3 class="theme-color">Best Doctor for Ovarian Cyst in Delhi</h3>
                        <p>Dr.Arvind Kumar is one of the leading Laparoscopic surgeons in Delhi. With over 14 years of experience in the field of surgery, including Advanced Laparoscopic surgery, Dr. Kumar is associated with PSRI (PushpawatiSinghania Research Institute) and Dharmshila Cancer Institute as a GI surgeon and Consultant Advanced Laparoscopic Surgeon. He has operated on many challenging cases laparoscopically and other complicated cancer cases. At SCI Hospital, he works with our supportive medical team to deliver the best treatment to patients.  </p>
                
                <div class="mt-3 mt-lg-6"></div>
                        <h4 class="theme-color">Frequently Asked Questions Ovarian cyst treatment </h4>
                         
                         <div class="accordion faq_services" id="accordionExample">
                          <div class="card">
                            <div class="" id="headingOne">
                              <p class="mb-0">
                                <button class="faq_btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               What is the most common type of treatment for ovarian cysts?    <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                        
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                             The common treatment for ovarian cysts is removal by laparoscopy.  
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What is the most common cause of ovarian cysts?    <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                              <div class="card-body">
                               The most common cause of ovarian cysts is hormonal problems.
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                What size ovarian cysts need surgery?    <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                              <div class="card-body">
                               Large cysts (>5 to 10cm) are the ones that require surgical removal as compared to small-sized cysts.   
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingFour">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Can ovarian cysts stop fertility?     <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                              <div class="card-body">
                              The removal of ovarian cysts may require treatment but it doesn’t affect the person’s fertility.
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
                                        <img src="{{asset('assets/images/doctors/Dr-Shivani-Sachdev-Gour.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Dr. Shivani Sachdeva Gour</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="doctor_ab">
                                        <img src="{{asset('assets/images/doctors/Dr-Mamta-Goel-1-300x300.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Dr. Mamta Goel</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="doctor_ab">
                                        <img src="{{asset('assets/images/doctors/Dr-Dhwani-Mago-300x300.jpg')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Dr. Dhwani Mago</p>
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
                                        <img src="{{asset('assets/images/img-gallery/OT-at-SCI-Hospital.jpg')}}" class="w-100" alt="" />
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
                        <div class="col-sm-12 mt-20">
                            <p class="theme-color font-heading-bold">Doctor Video</p>
                            <div class="row">
                                <div class="col-lg-6 text-center">
                                    <div class="images_gallery_ab">
                                        <div class="YoutubeLazy" data-embed="SkZfhjvE3Us">
                                            <span class="YoutubeButton"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20">
                            <p class="theme-color font-heading-bold">Patient Testimonials - Real People, Real Stories</p>
                            <div class="row">
                                <div class="col-lg-4 col-md-4 text-center">
                                    <div class="images_gallery_ab">
                                        <div class="YoutubeLazy" data-embed="4Hj1NIEPxgQ">
                                            <span class="YoutubeButton"></span>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 text-center">
                                    <div class="images_gallery_ab">
                                        <div class="YoutubeLazy" data-embed="d_Qid9WfAiw">
                                            <span class="YoutubeButton"></span>
                                        </div>
                                        
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
                            <input type="hidden" name="subject" value="ovarian-cryst-treatment" />
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

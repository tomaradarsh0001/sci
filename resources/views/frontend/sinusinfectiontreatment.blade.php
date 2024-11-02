@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Manish Gupta",
  "url": "https://scihospital.com/DrManishGupta",
  "image": "https://scihospital.com/public/assets/images/doctors/Dr-Manish-Gupta.png",
  "jobTitle": "MBBS, MS (ENT)",
  "worksFor": {
    "@type": "Organization",
    "name": "scihospital"
  }  
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "How long does the recovery from sinus surgery take?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The patient can resume work in 1-2 weeks while normal activities can be resumed in 3-4 weeks. In some cases, people feel normal in 1-2 months, and generally takes around 3-4 months."
    }
  },{
    "@type": "Question",
    "name": "Can the sinus grow back after the sinus surgery?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Research has shown the recurrence of nasal polyp growth after the surgery and recurrence can happen at any point in life."
    }
  },{
    "@type": "Question",
    "name": "Can sinus lead to a brain tumor?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "Sinus and skull-based tumors grow in the area behind the eyes and nose and extend to the base of the skull. Even if they are non-cancerous, they can put pressure on the brain nerves, and blood vessels resulting in some problems."
    }
  },{
    "@type": "Question",
    "name": "Is a sinus tumor fatal?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "If the cancer is present only in the nasal cavity or paranasal sinus, then there is a high success rate but as cancer spreads to neighboring tissues and organs, the success rate decreases."
    }
  },{
    "@type": "Question",
    "name": "How do you know that the sinus has spread to the brain?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "The common symptoms which tell if the sinus has spread to the brain of the patient involve-  

Changes in vision  
Numbness sensation  
Severe headaches  
Difficulty in speaking"
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
                    <a href="#">General Surgery</a>
                    <span>Sinus Infection Treatment </span>
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
                        <h1 class="theme-color">Sinus Infection Treatment in Delhi</h1>
                    </div>
                  <div class="service-img">
                        <img src="{{asset('assets/images/banner/Sinu.webp')}}" class="img-fluid" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                       <p>Sinus surgery is a procedure that aims to open the pathways of the sinuses and clear blockages. This is an option for people suffering from sinus infections, especially with abnormal sinus structure, or abnormal growths in the sinus.</p>
                        <p>The main goal of the sinus infection treatment is to remove whatever is blocking the drainage passages of the sinuses which may include the removal of a piece of bone, mucous membrane, nasal polyps, swollen or damaged tissues, tumors, or growth in the nasal and the sinus passages. To treat a variety of issues, a person requires to get sinus surgery. Common reasons to get sinusitis (sinus infection) treatment in Delhi are sinusitis and nasal polyps.</p>
                        <div class="mt-3 mt-lg-6"></div>
                        <p><strong>Sinusitis</strong></p>

                       <p>Sinusitis is the swelling of the nasal sinuses and passages and is also known as a sinus infection. The symptoms of sinusitis experienced by a person suffering from sinusitis are as follows-</p> 
                       <h2 class="theme-color">Symptoms Of Sinusitis</h2>
                       <ul class="services_list">
                            <li><i class="fa fa-check"></i> Stuffy nose   </li>
                            <li><i class="fa fa-check"></i> Cough    </li>
                            <li><i class="fa fa-check"></i> Pressure around the nose, eyes, and forehead  </li>
                            <li><i class="fa fa-check"></i> Head congestion and headaches  </li>
                            <li><i class="fa fa-check"></i> Blocked ears   </li>
                            <li><i class="fa fa-check"></i> Thick and discolored nasal drainage  </li>
                        </ul>
                        <p><b>Note:-</b> If you are wondering how to treat sinus infection then avoid early symptoms, then consulting SCI’s expert can solve your worries.</p>
                        <h2 class="theme-color">Causes Of Sinus Infections</h2>
                        <p>Here are some common causes of sinus infections: </p>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i> Allergies trigger sinus inflammation. </li>
                            <li><i class="fa fa-check"></i> Viral infections inflame sinus tissues.</li>
                            <li><i class="fa fa-check"></i> Bacterial growth causes sinusitis.  </li>
                            <li><i class="fa fa-check"></i> Environmental pollutants are irritating sinus passages.  </li>
                            <li><i class="fa fa-check"></i> Nasal congestion promotes sinus blockage.</li>
                            <li><i class="fa fa-check"></i> Sinus anatomy is predisposed to infections. </li>
                            </ul>
                        
                        
                        
                        <h3 class="theme-color">Nasal polyps </h3>
                       <p>Nasal polyps are the swelling in the inner lining inside the nasal passages and sinuses and vary in size usually of teardrop size.</p>
                        <p>Common symptoms of nasal polyps experienced by people may involve-</p>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i> Blocked nose leading to difficulty in breathing. </li>
                            <li><i class="fa fa-check"></i> Runny nose.</li>
                            <li><i class="fa fa-check"></i> Re-occurring sinus infections.  </li>
                            <li><i class="fa fa-check"></i> Headaches.  </li>
                            <li><i class="fa fa-check"></i> Snoring.</li>
                            <li><i class="fa fa-check"></i> Facial pain. </li>
                            <li><i class="fa fa-check"></i> Sleep apnea. </li>
                            </ul>
                            <p>Sinus infection treatment is required due to some other infections, ongoing blockages, abnormal growths, and issues that cause inflammation in the nasal passages and sinuses.</p>
                     <h2 class="theme-color">Types of Sinus Surgery</h2>
                     <h3 class="theme-color">Septoplasty</h3>
                       <p>Septoplasty is an outpatient sinus surgery that is done to correct the issues related to the midline of the nose. The treatment restructures the partitions which divide the nostrils known as the septum. Septoplasty redirects the alignment and opens the air passages by reconstructing the bone and cartilage.</p>
                        <h3 class="theme-color">Turbinate reduction</h3>
                        <p>The turbinate present in the nose can swell or get inflamed due to infection, irritation, or allergies resulting in nasal congestion. The Turbinate reduction sinus surgery reduces the size and swelling making it easier to breathe.</p>
                       <h3 class="theme-color">Functional rhinoplasty</h3>
                        <p>This sinus surgery procedure reconstructs the bone and cartilage that make the nose which removes the abnormalities that cause issues with breathing.</p>
                       <h3 class="theme-color">Balloon sinuplasty</h3>
                       <p>This is a less invasive procedure designed to help patients get relief from chronic sinusitis symptoms. A balloon sinusitis catheter is inserted into the sinus passage.</p>
                       <h3 class="theme-color">Functional endoscopic Sinus Surgery (FESS)</h3>
                       <p>FESS is carried out with the help of an instrument called an endoscope which is an illuminated, thin fiber-optic tube that is inserted in the nasal passage to reach the openings of the sinuses. This produces better drainage, reduces blockages, and flushes out all the infected material.</p>
                       
                      <h2 class="theme-color">Risks and Complications of Sinus Surgery</h2>
                      <p>The complications associated with Sinus surgery involve-</p>
                      <p><b>Bleeding-</b>bleeding tends to happen for at least 24 hours after the sinus surgery and can also happen for a few weeks to months.</p>
                      <p><b>Intracranial complications-</b>the septum attaches to the roof of the nose and a thin layer of bone may be damaged during a sinus infection.</p>
                      <p><b>Damage to the eye or surrounding tissue-</b>as sinuses are close to the eye they can lead to bleeding in the eye as well and this happens when the bone separating the sinus and eye is damaged and vision loss and blindness can be spotted.</p>
                      <p><b>Infection-</b>sinus infection is the main reason; a person undergoes sinus surgery. A person suffering from sinusitis can suffer from infection during surgery in that area.</p>
                      <p><b>Changes in a person’s voice-</b>the sinus affects the resonance of a person’s voice and complications during the sinus surgery can lead to a change in someone’s voice.</p>
                      <p><b>Loss of smell and taste-</b>after sinus surgery, the sense of smell usually improves as the air passages get cleared but due to swelling and infection can lead to a loss of smell and taste temporarily or can be prolonged.</p>
                      <p><b>Nasal issues-</b>sinus surgery usually clears the blockages in the airways but the surgery can worsen it as well. Small scars may develop due to the sinus infection treatment which requires another surgery to be treated.</p>
                      
                      <h2 class="theme-color">Recovery from the sinus infection treatment</h2>
                      <p>After the sinus infection treatment is completed, nasal packing may be used. Nasal packing is the insertion of sterile gauze material into the nasal passage to control bleeding.</p>
                      <p>Recovery periods differ based on the type of sinus surgery done and some other factors such as age and general health. A person may experience mild discomfort, fatigue, nasal congestion, and small amounts of bleeding. The doctor might prescribe pain medications during the recovery from the sinusitis (sinus infection) treatment in Delhi.</p>
                      <h2 class="theme-color">Sinus Surgery Cost In Delhi</h2>
                      <p>At SCI hospital renowned as the best sinus treatment hospital in Delhi, we have an experienced team of doctors who provide the best sinus infection treatment at an affordable sinus surgery cost in Delhi. The cost of the sinus surgery usually depends on the experience of the doctor, the type of sinus infection treatment, and other facilities provided at a hospital.</p>
                        <p>Consult now to get the diagnosis and effective sinus infection treatment at the best sinus surgery cost in Delhi.</p> 
                        <h3 class="theme-color">Septoplasty vs Sinus surgery</h3>
                        <p>Most of the patients get confused between septoplasty and sinus surgery and end up thinking the same. However, both treatment procedures result in the expansion of the nasal cavity. Septoplasty is the procedure to treat the blocked airways caused by a deviated nasal septum while sinus surgery is done to treat chronic sinus infection.</p>
                         <p>Septoplasty requires a cut on one side of the nose which makes it an invasive procedure while our sinus surgery in Delhi is comparatively less invasive with a fast recovery. Get a consultation from the best sinusitis treatment doctors in Delhi at SCI Hospital and live your life without worries.</p>
                         <h4 class="theme-color">Frequently Asked Questions About Sinus</h4>
                         <div class="accordion faq_services" id="accordionExample">
                          <div class="card">
                            <div class="" id="headingOne">
                              <b class="mb-0">
                                <button class="faq_btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                How long does the recovery from sinus surgery take?<i class="fa fa-angle-down float-right"></i>
                                </button>
                              </b>
                            </div>
                        
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                                The patient can resume work in 1-2 weeks while normal activities can be resumed in 3-4 weeks. In some cases, people feel normal in 1-2 months, and generally takes around 3-4 months.
                                </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <b class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Can the sinus grow back after the sinus surgery?    <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </b>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                              <div class="card-body">
                               Research has shown the recurrence of nasal polyp growth after the surgery and recurrence can happen at any point in life.
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree">
                              <b class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Can sinus lead to a brain tumor?   <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </b>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                              <div class="card-body">
                                Sinus and skull-based tumors grow in the area behind the eyes and nose and extend to the base of the skull. Even if they are non-cancerous, they can put pressure on the brain nerves, and blood vessels resulting in some problems.  
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingFour">
                              <b class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                  Is a sinus tumor fatal?   <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </b>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                              <div class="card-body">
                                If the cancer is present only in the nasal cavity or paranasal sinus, then there is a high success rate but as cancer spreads to neighboring tissues and organs, the success rate decreases.  
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingFive">
                              <b class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                 How do you know that the sinus has spread to the brain?    <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </b>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                              <div class="card-body">
                               The common symptoms which tell if the sinus has spread to the brain of the patient involve- 
                               
                               <ul>
                                   <li>Changes in vision </li>
                                   <li>Numbness sensation </li>
                                   <li>Severe headaches </li>
                                   <li>Difficulty in speaking </li>
                               </ul>
                              </div>
                            </div>
                          </div>
                          
                        </div>
                        
                 
                         
                         
                    </div>
                    
                    
                  <div class="row">
                        <div class="col-sm-12 mt-20">
                            <h3 class="theme-color">Best Sinusitis Treatment Doctors In Delhi</h3>

                            <div class="row">
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="doctor_ab">
                                        <img src="{{asset('assets/images/doctors/Dr-Manish-Gupta.png')}}" class="w-100" alt="" />
                                        <h5 class="name_ab_doc">Dr. Manish Gupta</h5>
                                        <p>Sr. ENT Specialist<br/>MBBS, MS - ENT/ Otorhinolaryngologist<br>16 years of experience</p>
                                    </div>
                                </div>
                                <div class="col-sm-12 text-left mt-3">
                                    <a href="https://scihospital.com/DrManishGupta" class="btn"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                                
                                <div class="col-sm-12 text-center mt-3">
                                    <a href="tel:9999446622" class="btn"><i class="icon-right-arrow"></i><span>Call Doctor </span><i class="icon-right-arrow"></i></a>
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
                            <input type="hidden" name="subject" value="sinus-infection-treatment" />
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
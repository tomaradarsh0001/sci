@extends('frontend.layouts.main') @section('main-container') @section('define_robots', 'noindex, nofollow') @section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')
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
                    <a href="{{ route('/') }}">Home</a>
                    <a href="#">Our Specialists</a>
                    <span>Dental implants & Orthodontics</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section pb-70">
        <div class="container services_sec">
            <div class="row">
                <div class="col-md-12 col-lg-12">
                    <div class="title-wrap">
                        <h1 class="theme-color">Best Dental Hospital In Delhi</h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('assets/images/banner/dental-banner.png')}}" class="img-fluid" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>
                            At SCI Hospital, our certified and best orthodontics in Delhi NCR utilize the most recent innovation to give you tastefully and practically immaculate teeth. The group of oral specialists, maxillofacial specialists, implantologists, periodontics, orthodontist, and dental hygienist give great results at a reasonable cost at the best teeth hospital in Delhi. At SCI Dental Hospital our patients discover genuine feelings of serenity since we furnish them with greatness, polished skill, new advances, immediacy, and money-related advantages with a unique regard for hygiene. 
                        </p>
                        <p>
                            The best dental hospital in Delhi, SCI Hospital, has three particular treatment rooms and an activity theatre having the most recent innovation to give you an advanced imaging administration equipped for making optical impressions of crowns and decorates made with regular-looking metal-free earthenware production. All hardware’s affirmed to CE guidelines and we are exceptionally mindful of the conventions of disinfection, Class B autoclaving, and pouched pressing of careful instruments and that’s just the beginning. These focal points permit SCI Hospital experts to isolate an exceptional and proficient degree of administration. Numerous patients from different nations have just picked our SCI Dental department as their favored all-out dental assistance facility. 
                        </p>
                        

                        <div class="mt-3 mt-lg-6"></div>

                        <div class="row servicse_tab_inner">
                            <div class="col-sm-12">
                                <h2 class="theme-color mb-3">Dental Treatment and Procedure</h2>
                            </div>
                            <div class="col-sm-12">
                                 <div class="row">
                        <div class="col-sm-4">
                            <div class="tab_home nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"> Dental Implants</a>
                                <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"> Dental Braces</a>
                                <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"> Dental Aligners</a>
                                <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"> Aesthetics Dentistry</a>
                                
                                <a class="nav-link" data-toggle="pill" href="#tab-F" role="tab"> Root Canal Procedures</a>
                                <a class="nav-link" data-toggle="pill" href="#tab-G" role="tab"> Full Mouth Rehabilitation</a>
                                <a class="nav-link" data-toggle="pill" href="#tab-H" role="tab">  Prosthetics</a>
                                <a class="nav-link" data-toggle="pill" href="#tab-I" role="tab">  Scaling and Gum Treatment</a>
                                <a class="nav-link" data-toggle="pill" href="#tab-E" role="tab"> Pediatric Dentistry </a>
                                <a class="nav-link" data-toggle="pill" href="#tab-J" role="tab"> Pediatric Dentistry for Special needs children</a>
                            </div>
                        </div>
                        <div class="col-sm-8">
                            <div id="tab-content" class="tab-content mt-2">
                            <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12 h-100">
                                        <h3 class="theme-color"><b>Dental Implants</b></h3>
                                        <p>
                                            If you have lost one or more teeth, a dental implant procedure is conducted to replace the missing teeth. It is like an artificial screw-type device that is inserted into the jawbone by a dentist
                                            or a surgeon. The jawbone acts as an anchor for the tooth. Get your dental implants at SCI Hospital by the professionals to secure new teeth and feel the confident in yourself.
                                        </p>
                                        
                                    </div>
                                    <div class="col-sm-12 text-center">
                                         <img src="{{asset('assets/images/img-gallery/dental/Dental-Implants.png')}}" class="img-fluid" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12 h-100">
                                        <h3 class="theme-color"><b>Dental Braces</b></h3>
                                        <p>
                                            Dental braces are used to align the misaligned, crooked or rotated teeth as well as for misaligned jaw alignments. They can be used by people of all age, from kids to teenagers to adults. They are
                                            formed depending on the tooth formation of a person. Avail the best solution for your teeth from the skilled dentists of SCI Hospital.
                                        </p>
                                       
                                    </div>
                                    <div class="col-sm-12 text-center">
                                         <img src="{{asset('assets/images/img-gallery/dental/Dental-Braces.png')}}" class="img-fluid" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12 h-100">
                                        <h3 class="theme-color"><b>Dental Aligners </b></h3>
                                        <p>
                                            Dental Aligners include procedures like root canal treatment, cavity fillings, etc. These procedures are done for two reasons. The primary reason is to restore the basic function of teeth and
                                            the second reason is to restore the appearance of the teeth. Receive the world class facilities and services of the professionals at SCI Hospital.
                                        </p>
                                       
                                    </div>
                                    <div class="col-sm-12 text-center">
                                          <img src="{{asset('assets/images/img-gallery/dental/Dental-Aligners.png')}}" class="img-fluid" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12 h-100">
                                        <h3 class="theme-color"><b>Aesthetics Dentistry</b></h3>
                                        <p>
                                            Aesthetics Dentistry is also known as smile design. It is a mix of cosmetic and dental procedure to improve the imperfections of the teeth. It helps in restoring the appearance and heath of the person.
                                            Over time, our teeth chip down, wear down and the colour changes to yellow. Smile design helps in making your teeth look better. Orthodontists of SCI Hospital helps to develop a better and wider
                                            smile.
                                        </p>
                                        
                                    </div>
                                    <div class="col-sm-12 text-center">
                                          <img src="{{asset('assets/images/img-gallery/dental/Grin-Design.png')}}" class="img-fluid" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div id="tab-E" class="tab-pane fade" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12 h-100">
                                        <h3 class="theme-color"><b>Pediatric Dentistry </b></h3>
                                        <p>Often kids lose teeth while playing or develop an injury or cavity. Pediatric Dentistry for Children are done to replace or restore the missing teeth in children as well as help in removing cavity or curing dental injury. We have many experienced dentists at SCI hospital who have a smooth way to work along with the children.</p>
                                        
                                    </div>
                                    <div class="col-sm-12 text-center">
                                          <img src="{{asset('assets/images/img-gallery/dental/Restorative.png')}}" class="img-fluid" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div id="tab-F" class="tab-pane fade" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12 h-100">
                                        <h3 class="theme-color"><b>Root Canal Procedures  </b></h3>
                                        <p>Root canal procedure or root canal treatment (RCT), also known as endodontic treatment is a surgical procedure used to remove inflamed or infected tissue from inside a tooth. There is a layer beneath the tooth which gets infected and becomes pulp which is treated by disinfecting, then filled and later sealed. We have a team of experienced and skilled Orthodontists at SCI hospital who can perform RCT with ease.    </p>
                                        
                                    </div>
                                     <div class="col-sm-12 text-center">
                                          <img src="{{asset('assets/images/img-gallery/dental/Root-Canal.png')}}" class="img-fluid" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div id="tab-G" class="tab-pane fade" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12 h-100">
                                        <h3 class="theme-color"><b>Dental Surgeries </b></h3>
                                        <p>Dental surgery is a general term collectively used for many dental surgeries which a dentist may perform on the teeth. This can include removing cavities, correct the misalign teeth, applying crown or replace the teeth that are beyond repair etc. They help in bringing back the smile and appearance of the mouth. SCI hospital have many skilled doctors who can perform many dental surgeries easily.  </p>
                                        
                                    </div>
                                    <div class="col-sm-12 text-center">
                                          <img src="{{asset('assets/images/img-gallery/dental/Dental-Surgeries.png')}}" class="img-fluid" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div id="tab-H" class="tab-pane fade" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12 h-100">
                                        <h3 class="theme-color"><b>Prosthetics </b></h3>
                                        <p>A dental prosthetic is an appliance used for dentistry purpose which is used to replace a missing tooth or cover up any infected tooth. These prosthetics can include dentures, veneers, crowns etc. used upon teeth. These appliances can be both temporary and permanent as per the choice of the patient. SCI hospital have many advanced techniques and equipment that can help in developing complicated prosthetics.  </p>
                                        
                                    </div>
                                    <div class="col-sm-12 text-center">
                                         <img src="{{asset('assets/images/img-gallery/dental/Restorative-Services.png')}}" class="img-fluid" alt="" />
                                    </div>
                                </div>
                            </div>
                            <div id="tab-I" class="tab-pane fade" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12 h-100">
                                        <h3 class="theme-color"><b>Scaling and Gum Treatment </b></h3>
                                         <p>The cleaning of the teeth and of the gums through deep cleaning procedures helps in removing the hardened minerals that stick upon the teeth over time. Doctors recommend to get scaling of the teeth done from time to time. This can help in keeping the teeth healthy. Solve your query by speaking with the expert dentists of SCI hospital.   </p>
                                         
                                    </div>
                                    <div class="col-sm-12 text-center">
                                         <img src="{{asset('assets/images/img-gallery/dental/Scaling.png')}}" class="img-fluid" alt="" />
                                    </div>
                                </div>
                            </div>
                            
                            <div id="tab-J" class="tab-pane fade" role="tabpanel">
                                <div class="row">
                                    <div class="col-md-12 h-100">
                                        <h3 class="theme-color"><b>Pediatric Dentistry for Special needs children</b></h3>
                                         <p>SCI Hospital offers specialized Pediatric Dentistry services for special needs children, providing gentle and compassionate dental care and ensuring a positive dental experience. We offer pediatric dentistry with the use of anesthesia when necessary. Using anesthesia allows us to create a safe and controlled environment for children with special needs during dental procedures. </p>
                                         
                                    </div>
                                    <div class="col-sm-12 text-center">
                                         <img src="{{asset('assets/images/img-gallery/dental/Pediatric-Dentistry-for-Special.png')}}" class="img-fluid" alt="" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        
                    </div>
                            </div>
                        </div>
                        <div class="mt-3 mt-lg-6"></div>
                     <h4 class="theme-color text-center mt-3">Best Dental Doctor In Delhi</h4>
                   <div class="  doctor_details_section">
                      
                        <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="doctor_img_detail">
                                <img src="https://scihospital.com/public/assets/images/doctors/Dr-Amit-min-1617x2048.png" class="img-fluid" alt="" />
                                <br><br>
                                 <a href="https://scihospital.com/dr-amit" class="btn"><i class="icon-right-arrow"></i><span>View More</span><i class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr. Amit Parashar</h5>
                            <p class="degree_section">Senior Consultant</p>
                            <ul class="list_details_doc">
                                <li><i class="fa fa-map-marker"></i> M 4, Greater Kailash-1, M Block, part-1, Greater Kailash, New Delhi, Delhi 110048</li>
                                <li><i class="fa fa-phone"></i> Mobile: +91-9999446622</li>
                                <li><i class="fa fa-envelope"></i> Email: info@scihospital.com</li>
                            </ul>
                        </div>
                        
                    </div>
                   
                   </div>
                       
                    </div>
                </div>
                        
                        
     
                <div class="col-md-12 col-lg-12">
                    
                    <div>
                        


                        <div class="mt-3 mt-lg-6"></div>
                        <h3 class="theme-color">Orthodontics | Best Dental Hospital In Delhi</h3>
                        <p>
                            An appealing grin and a developed mental self-view are significant advantages of orthodontic treatment. Slanted teeth without orthodontic treatment, can prompt tooth rot, gum sickness, bone demolition, biting and
                            stomach-related challenges, discourse impedances, tooth misfortune, and other dental issues.
                        </p>
                        <p>
                            Orthodontic treatment can be begun at any age. Any individual of all ages has the desire and option to look wonderful and as it is a restorative treatment, anybody can pull out all the stops. In any case, most
                            issues are simpler to address whenever distinguished at an early age before jaw development has eased back. Some orthodontic cases must be treated with medical procedures too. If you are suffering from any dental
                            issue, then consult the best orthodontics in Delhi NCR at SCI hospital which is trusted by many patients and has been termed as the best teeth hospital in Delhi.
                        </p>
                         
                       
                    </div>
                
                    
                    
                </div>
                
               
                
                 <div class="col-md-12">
                    
                    <div class="">
                       
                         
                        
                        
     
                    <div class="container">
            <div class="mt-3 mt-lg-6"></div>
                <h4 class="theme-color text-center mt-3">Image Gallery</h4>
         <div class="row specialist-carousel js-gallery-carousel index_gallery">
                <div class="col-sm-6 col-md-4 category1">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="#"><img src="{{asset('assets/images/img-gallery/dental/1.png')}}" class="img-fluid" alt="" loading="lazy" /></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="#"><img src="{{asset('assets/images/img-gallery/dental/2.png')}}" class="img-fluid" alt="" loading="lazy" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category1">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="#"><img src="{{asset('assets/images/img-gallery/dental/3.png')}}" class="img-fluid" loading="lazy" alt="" /></a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="#"><img src="{{asset('assets/images/img-gallery/dental/8.png')}}" class="img-fluid" loading="lazy" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="#"><img src="{{asset('assets/images/img-gallery/dental/5.png')}}" loading="lazy" class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="#"><img src="{{asset('assets/images/img-gallery/dental/6.png')}}" loading="lazy" class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
            
            
                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="#"><img src="{{asset('assets/images/img-gallery/dental/7.png')}}" loading="lazy" class="img-fluid" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="mt-3 mt-lg-6"></div>
      <div class="container">
        <div class="row">
            <div class="col-12 text-center">
     
                                <h4 class="theme-color text-center mt-3">Patients Review</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4">
                <img src="{{asset('assets/images/img-gallery/testimonial1.png')}}" loading="lazy" class="img-fluid" alt="" />
            </div>
            <div class="col-sm-4 mt-2 mt-lg-0">
                <img src="{{asset('assets/images/img-gallery/testimonial2.png')}}" loading="lazy" class="img-fluid" alt="" />
            </div>
            <div class="col-sm-4 mt-2 mt-lg-0">
                <img src="{{asset('assets/images/img-gallery/testimonia3.png')}}" loading="lazy" class="img-fluid" alt="" />
            </div>
        </div>
    </div>
            
     
   
    
                        
                        <div class="row">
                            <div class="col-md-8 col-lg-8 mt-3">
                    
                <div class="row">
            <div class="col-12 text-center">
     
                                <h4 class="theme-color text-center mt-3">Doctor’s Video</h4>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme" id="video_youtube">
            <div class="item">
             <div class="YoutubeLazy" data-embed="rggV4ooHVFE">
                                        <span class="YoutubeButton"></span>
                                    </div>
            </div>
            <div class="item">
              <div class="YoutubeLazy" data-embed="Jl0Vp4qsrVc">
                                        <span class="YoutubeButton"></span>
                                    </div>
            </div>
          </div>
        </div>
                    
                    <div class="mt-3 mt-lg-6"></div>
                        <h4 class="theme-color">Frequently Asked Questions About Tooth Treatment</h4>
<div class="accordion faq_services" id="accordionExample">
                            <div class="card">
                                <div class="" id="headingOne">
                                    <p class="mb-0">
                                        <button class="faq_btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            What are the most common dental procedures? <i class="fa fa-angle-down float-right"></i>
                                        </button>
                                    </p>
                                </div>

                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                    <div class="card-body">
                                        The most common dental procedures are dental cleaning, dental whitening, extractions, fillings, braces, root canals, and many more.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingTwo">
                                    <p class="mb-0">
                                        <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            Are dental procedures painful? <i class="fa fa-angle-down float-right"></i>
                                        </button>
                                    </p>
                                </div>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                    <div class="card-body">
                                        There might be swelling when you are healing along with soreness and some discomfort after getting a dental procedure done.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingThree">
                                    <p class="mb-0">
                                        <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            How long do dental fillings last? <i class="fa fa-angle-down float-right"></i>
                                        </button>
                                    </p>
                                </div>
                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                    <div class="card-body">
                                        Generally, amalgam fillings last from 5-25 years, composite fillers from 5-15 years, and gold fillings last for 15-20 years.
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header" id="headingFour">
                                    <p class="mb-0">
                                        <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            Do fillings damage teeth? <i class="fa fa-angle-down float-right"></i>
                                        </button>
                                    </p>
                                </div>
                                <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                    <div class="card-body">
                                        There are two main risks of getting fillings done, which are infection and damage. In some cases, getting a filling led to the shedding of the tooth resulting in a small cavity behind.
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                
                
                <div class="col-md-4 col-lg-4 mt-5 mb-3">
                    
                    <!--services-->
                    @include('frontend.layouts.servicesside')
                    <!--//services-->
                </div>
                        </div>
                       
                    </div>
                
                    
                    
                </div>
                    
        </div>
    </div>
    <!--//section-->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
 $('#video_youtube').owlCarousel({
      margin: 15,
      nav: false,
      dots: true,
      loop:true,
      navText: ["<div class='nav-button owl-prev'>‹</div>", "<div class='nav-button owl-next'>›</div>"],
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items:1
        }
      }
    });

</script>

@endsection

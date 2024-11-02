@extends('gurgaon.frontend.layouts.main') @section('main-container')
 @section('gurgaon.define_robots', 'index, follow') @section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img', 'https://scihospital.com/gurgaon/public/assets/images/sci%20logo.webp')

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
                   
                    <span>Sports Injuries Treatment in Gurgaon   </span>
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
                        <h1 class="theme-color">Sports Injuries Treatment in Gurgaon </h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('public_gurgaon/assets/images/banner/sports-injury-treatment-banner.png')}}" class="img-fluid w-100" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>Sports injuries can be both physically and emotionally challenging for athletes and active individuals. Whether you're a professional athlete or a weekend warrior, injuries can occur unexpectedly and disrupt your active lifestyle. Finding the correct sports injury therapy is essential for a quick recovery. If you're seeking top-notch sports injuries treatment in Gurgaon, look no further than SCI Hospital. If you're in need of expert guidance and personalized care for your sports-related concerns, consulting a qualified sports injury doctors in Gurgaon is a wise choice. </p>

                        <div class="mt-3 mt-lg-6"></div>
                        <div class="row align-items-center">
                            <div class="col-sm-7">
                                <h2 class="theme-color">What are Sports Injuries?  </h2>

                                <p>Sports injuries are common occurrences in athletic activities and can range from minor sprains and strains to more serious fractures, dislocations, and concussions. Some of the most common sports injuries include ankle sprains, knee injuries like anterior cruciate ligament (ACL) tears, shoulder dislocations, tennis elbow, Achilles tendon tears, shin splints, hamstring strains, lower back injuries, stress fractures, and concussions. </p>
                                <p>Factors that contribute to sports injuries include overtraining, lack of conditioning, improper technique, poorly fitting equipment, inadequate warmups and stretching, and playing surfaces like concrete or turf. Preventing sports injuries involves appropriate strength training and flexibility exercises, proper equipment fitting, taping or bracing vulnerable joints, starting activity slowly and gradually increasing duration and intensity, and taking adequate rest and recovery between workouts or competitions. Treating injuries properly with RICE (rest, ice, compression, and elevation), working with athletic trainers and physical therapists, and allowing adequate healing time before returning to activity can help minimize recurrence and further issues. </p>
                            </div>
                            <div class="col-sm-5 p-2">
                                <img src="{{asset('public_gurgaon/assets/images/sport-injury.png')}}" class="img-fluid w-100" alt="" />
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>

                        <div class="row">
                            <div class="col-sm-8">
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Causes Of Sports Injuries  </h2>
                                            <p>Here are few types of piles: </p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            
                                            <p>Sports injuries can result from a variety of factors, including: </p>
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Overtraining muscles or joints without giving them enough time to rest and heal. </li>
                                                <li><i class="fa fa-check"></i> Using sports equipment that doesn't fit well. </li>
                                                <li><i class="fa fa-check"></i> Not enough warm-up before engaging in physical activity. </li>
                                                <li><i class="fa fa-check"></i> Accidents, falls, and sudden hits can happen in sports that involve physical contact. </li>
                                                <li><i class="fa fa-check"></i> Poor diet makes muscles and bones weak. </li>
                                                <li><i class="fa fa-check"></i> Not enough time between training classes to rest and heal. </li>
                                                <li><i class="fa fa-check"></i> Psychological things like worry and distractions make it hard to concentrate. </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-3 mt-lg-6"></div>
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Symptoms of Sports Injuries </h2>
                                            <p>Sports injuries can manifest through various symptoms, including: </p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Pain or discomfort </li>
                                                <li><i class="fa fa-check"></i> Swelling and inflammation </li>
                                                <li><i class="fa fa-check"></i> Limited range of motion </li>
                                                <li><i class="fa fa-check"></i> Muscle weakness </li>
                                                <li><i class="fa fa-check"></i> Bruising or discoloration </li>
                                                <li><i class="fa fa-check"></i> Instability or joint laxity </li>
                                                <li><i class="fa fa-check"></i> Numbness or tingling </li>
                                                <li><i class="fa fa-check"></i> Dizziness or confusion (in the case of head injuries) </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-3 mt-lg-6"></div>
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Risk factors that lead to sports injury </h2>
                                            <p>Here are some common risk factors that can lead to sports injuries:</p>
                                            <p><b>Rapid Increases in Intensity or Load:</b> Unexpectedly increasing the intensity, duration, or weight load of training can overwhelm the body's capacity to adapt, leading to injuries.</p>
                                            <p><b>Not Enough Rest and Recovery:</b> Not allowing the body sufficient time to rest and recover after workouts or competitions can lead to overuse injuries.</p>
                                            <p><b>Improper Technique or Form:</b> Using incorrect technique during sports activities places unnecessary stress on the body's joints, muscles, and ligaments.</p>
                                            <p><b>Age and Physical Maturity:</b> Young athletes who are still growing may have growth plate vulnerabilities, increasing their susceptibility to certain types of injuries.</p>
                                        </div>
                                    </div>
                                </div>

                
                                
                                
                            </div>
                            <div class="col-sm-4">
                                @include('gurgaon.frontend.layouts.servicesside')
                                <div class="mb-5"></div>
                                
                                <div class="row d-flex flex-column flex-sm-row flex-md-column mt-3">
                                        <div class="col-auto col-sm col-md-auto">
                                            <div class="contact-box contact-box-2">
                                                <p class="contact-box-title services-side-heading">Contact Info</p>
                                                <ul class="icn-list">
                                                    <li>
                                                        <i class="icon-telephone"></i>
                                                        <div class="d-flex flex-wrap"><a href="tel: 0124-6948701 "> 0124-6948701  (For Appointment), </a> </div>
                                                    </li>
                                                    <li><i class="icon-placeholder2"></i>Plot No. 7, Golf Course Rd, Sector 43, Gurugram, Haryana 122002</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                <!--//services-->
                            </div>
                        </div>
                        
                        
                        <div class="mt-3 mt-lg-6"></div>
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="theme-color">Sports Injury Treatment Options </h3>
                                    <p>At SCI Hospital, we understand the unique challenges posed by sports injuries. Our specialized team of sports injury doctors in Gurgaon is dedicated to providing comprehensive and personalized treatment plans. SCI, the dedicated sports injury hospital in Gurgaon can provide specialized care tailored to the unique needs of athletes and individuals dealing with sports-related injuries. </p>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="mt-3 mt-lg-6"></div>
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="theme-color">Price Therapy   </h3>
                                    <p>PRICE therapy stands for:  </p>
                                    <p><b>Protection: </b> Protection term refers to the prevention of further injury. doctors will use a sling, splint, or brace to keep the injured area from moving too much.  </p>
                                    <p><b>Rest:</b> Rest is important for getting better, People should avoid doing things that hurt the damaged area or slow or stop the healing process.  </p>
                                    <p><b>Ice:</b> Ice means using cold treatments, Ice is suggested to reduce pain and swelling. The exposure of the ice helps the patient to reduce swollen parts.  </p>
                                    <p><b>Compression: </b>Compression involves using a compression wrap. This compression helps keep swelling down and gives a little bit of support to injury.  </p>
                                    <p><b>Elevation:</b>  Elevation to the heart or above pumps surplus fluid back into the blood vessel system, preventing further swelling. Both upper and lower limb injuries should be elevated to reduce swelling.  </p>
                                    <p>In the first 48 to 72 hours after an accident, the principles of P.R.I.C.E. should be applied. During this time period, it is important to alleviate pain, stop the bleeding, and stop any further injuries. </p>
                                    <p>We have more treatments to treat your sports injuries, which include: </p>
                                    <ul>
                                        <li><b>Physical Therapy or Physiotherapy:</b> Targeted exercises and rehabilitation programs to regain strength, flexibility, and mobility. Physiotherapy helps sports people to recover from injuries by using some exercises, manual therapies, and tips to reduce the risk of further injuries and improve overall function and performance.  </li>
                                        <li><b>Medications:</b> Prescription of pain relievers, anti-inflammatories, or muscle relaxants to manage pain and inflammation. Medications help their body heal faster after training, running, or even getting hurt. </li>
                                        <li><b>Bracing or Splinting:</b> Braces and splints are specially made devices that hold the injured area in the right position and keep it safe while it heals. Braces are made of specific materials that warm and compress the joint and soft tissues that are hurt. </li>
                                        <li><b>Minimally Invasive Procedures:</b> In some cases, minimally invasive procedures or surgeries may be recommended for optimal recovery. The serious injuries like broken bones and dislocations may need surgery to fix. There are different kinds of surgery based on what part of the body is hurt and how bad the injury is.  </li>
                                    </ul>
                                    
                                    <p>When it comes to recovering from sports injuries, seeking expert care from a reputed sports injury hospital in Gurgaon can make a significant difference in your rehabilitation journey. </p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="mt-3 mt-lg-6"></div>
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="theme-color">Why Choose SCI Hospital For Sports Injuries Treatment in Gurgaon </h3>
                                    <p>When you choose SCI Hospital for sports injuries treatment in Gurgaon center, you get a number of benefits. These include specialized expertise from experienced sports injury doctors in Gurgaon, who treat a wide range of sports-related injuries, comprehensive care that spans from diagnosis to recovery and is tailored to your individual needs, and access to state-of-the-art facilities with advanced diagnostic and treatment technologies that make sure you get the best possible results. From fractures to strains, a comprehensive sports injury hospital in Gurgaon offers a range of treatments to address various types of injuries sustained during physical activities.  </p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>

                        <h3 class="theme-color text-center">Sports Injury Doctors In Gurgaon  </h3>
                       

                        <div class="container">
                            <div class="row align-items-center">
                                <div class="owl-carousel" id="doccard_slider">
                                    <div class="post-slide2">
                                        <div class="team_box">
                                            <div class="row align-items-center">
                                                <div class="col-sm-4 col-lg-4">
                                                    <img src="https://scihospital.com/gurgaon/public/assets/images/doctors/Punit.png" alt="" class="img-responsive" loading="lazy" />
                                                </div>
                                                <div class="col-sm-8 col-lg-8">
                                                    <h5 class="doctor-box-name theme-color">Dr. Punit Dilawari</h5>
                                                    <p>
                                                       Orthopaedics & Joint Replacement
                                                    </p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="line_box"></div>
                                                </div>
                                               
                                                <div class="col-sm-12">
                                                    <div class="btn_box_doc">
                                                        <a href="https://scihospital.com/gurgaon/dr-punit-dilawari" class="newbtn btn"><i class="icon-right-arrow"></i><span>View More </span><i class="icon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-slide2">
                                        <div class="team_box">
                                            <div class="row align-items-center">
                                                <div class="col-sm-4 col-lg-4">
                                                    <img src="https://scihospital.com/gurgaon/public/assets/images/doctors/DR-Rajesh-Bawari-200x200.jpg" alt="" class="img-responsive" loading="lazy" />
                                                </div>
                                                <div class="col-sm-8 col-lg-8">
                                                    <h5 class="doctor-box-name theme-color">Dr. Rajesh Bawari</h5>
                                                    <p>
                                                      Senior Consultant (Visiting) Orthopaedics<br>Joint Replacement and Arthroscopy
                                                    </p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="line_box"></div>
                                                </div>
                                               
                                                <div class="col-sm-12">
                                                    <div class="btn_box_doc">
                                                        <a href="https://scihospital.com/gurgaon/dr-rajesh-bawari" class="newbtn btn"><i class="icon-right-arrow"></i><span>View More </span><i class="icon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                    <h4 class="theme-color">Frequently Asked Questions </h4>

                    <div class="accordion faq_services" id="accordionExample">
                        <div class="card">
                            <div class="" id="headingOne">
                                <p class="mb-0">
                                    <button class="faq_btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Q: Do I need a referral to see a sports injury doctors at SCI Hospital?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                   A: No, you can directly schedule an appointment with our sports injury doctors in Gurgaon branch. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q: How long does the recovery process usually take for sports injuries? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    A: The recovery time depends on the injury type and how painful it is. Our doctors will provide you with a personalized recovery timeline. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q: Does SCI Hospital offer rehabilitation services as part of sports injuries treatment in gurgaon center?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                   A: Yes, we offer comprehensive rehabilitation services to aid in your recovery and help you regain optimal functionality. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                      Q: Can I continue to play sports after a severe injury?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    A: Our doctors will look at your injuries and tell you when you can go back to playing sports.  
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading4">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseFour">
                                      Q: Is SCI Hospital equipped to handle emergency sports injury cases?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                                <div class="card-body">
                                   A: Yes, our hospital is equipped to provide immediate care for acute sports injuries. 
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
          items: 2
        }
      }
    });
</script>
    @endsection


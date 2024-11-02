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
                   
                    <span>Best Pediatric Orthopedic Surgery in Gurgaon</span>
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
                        <h1 class="theme-color">Best Pediatric Orthopedic Surgery in Gurgaon</h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('public_gurgaon/assets/images/banner/pediatric-orthopedic-banner.png')}}" class="img-fluid w-100" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>In the changing world of health care, the search for best pediatric orthopedic surgery in gurgaon brings us to SCI Hospital. It will cover a wide range of conditions and treatments, explain the specialized care at the best pediatric orthopedic hospital in Gurgaon, and introduce you to the highly regarded pediatric orthopedic surgeons and doctors who put it at the top of pediatrician orthopedic care. Give yourself permission to believe that we have a good plan for your comfort and healing and the best tools we can get our hands on to make it happen. If you want the best pediatrician in Gurgaon, you should go to SCI Hospital first. For the expert care with best pediatric orthopedic Surgery in gurgaon for your child’s better health.  </p>

                        <div class="mt-3 mt-lg-6"></div>
                        <div class="row align-items-center">
                            <div class="col-sm-7">
                                <h2 class="theme-color">What Is Pediatric Orthopedic? </h2>

                                <p>Pediatric orthopedics is a medical field which specializes in treating the children’s bones. Pediatric orthopedists specially study to treat children with their special techniques, they are doctors who specialize in helping children of all ages who have problems with their bones or joints. In addition to surgery, a pediatric orthopedist, who is sometimes called a juvenile orthopedic surgeon, can treat patients with casts and limb braces. Because children are still growing, their joints, muscles, and bones are very different from those of adults. When a doctor has a problem with a patient, they often send them to a pediatric orthopedist. Parents often misunderstand growing pains because children's bodies change and grow so quickly. So, before you look for a pediatric orthopedist, you should talk to your best pediatrician in gurgaon.   </p>
                            </div>
                            <div class="col-sm-5 p-2">
                                <img src="{{asset('public_gurgaon/assets/images/pediatric-orthopedic.png')}}" class="img-fluid w-100" alt="" />
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>

                        <div class="row">
                            <div class="col-sm-8">
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Orthopedic Conditions</h2>
                                            <p>Here are a few orthopedic conditions that can affect your children's bodies:  </p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> A spine that curves abnormally to the side and uneven shoulders.  </li>
                                                <li><i class="fa fa-check"></i> Clubfoot is an abnormality for a newborn's foot to be rotated inward or downward.  </li>
                                                <li><i class="fa fa-check"></i> A hip joint that grows in the wrong way and can become loose.   </li>
                                                <li><i class="fa fa-check"></i> Broken bones in children can be caused by accidents or falls.  </li>
                                                <li><i class="fa fa-check"></i> Limb Deformities is an  Abnormal appearance of the limb.  </li>
                                                <li><i class="fa fa-check"></i> If you feel frequent joint dislocation, then it represents joint instability.  </li>
                                                <li><i class="fa fa-check"></i> Neuromuscular condition is responsible for  Muscle weakness, difficulty walking, and maintaining posture.   </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-3 mt-lg-6"></div>
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">What Kinds of Issues Do Pediatric Orthopedic Surgeons Treat? </h2>
                                            <p>At SCI Hospital, our pediatric orthopedic doctor in gurgaon are equipped to manage a wide range of conditions, including:   </p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Congenital anomalies like clubfoot, hip dysplasia, and limb deformities.  </li>
                                                <li><i class="fa fa-check"></i> Fractures, dislocated joints and other injuries happen through accidents.  </li>
                                                <li><i class="fa fa-check"></i> Scoliosis and other spinal deformities.  </li>
                                                <li><i class="fa fa-check"></i> Neuromuscular disorders affecting mobility and function.  </li>
                                                <li><i class="fa fa-check"></i> Joint and bone infections requiring specialized care.  </li>
                                            </ul>
                                            <p> It is necessary to search for the best pediatric orthopedic surgery in Gurgaon , which can resolve families' worries through personalized care tailored to their child's specific condition. </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-3 mt-lg-6"></div>
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-sm-12">
                                    <h2 class="theme-color">Treatment Options Available for Pediatric Orthopedic  </h2>
                                    <p>SCI is the best pediatric orthopedic hospital in gurgaon, we are providing our comprehensive treatment options, including:  </p>
                                    <div class="mt-3 mt-lg-6"></div>
                                    <h3 class="theme-color">Non-Surgical Interventions </h3>
                                    <p><b>Physical Therapy:</b> Targeted exercises and therapies help improve strength, flexibility, and mobility while addressing specific orthopedic issues. </p>
                                    <p><b>Bracing:</b> Custom-made braces or orthotics may be used to support, stabilize, or correct certain musculoskeletal problems. </p>
                                    <p><b>Casting:</b> Plaster or fiberglass casts are used to immobilize and support broken bones or correct deformities. </p>
                                    <p><b>Traction: </b>Traction involves applying a controlled pulling force to bones and joints to align them properly. </p>
                                    <p><b>Medications:</b> Pain relievers and anti-inflammatory medications can help manage pain and reduce inflammation associated with orthopedic conditions. </p>
                                
                                    <div class="mt-3 mt-lg-6"></div>
                                    <h3 class="theme-color">Minimally Invasive Procedures: </h3>
                                    <p><b>Arthroscopy:</b> A minimally invasive procedure using a small camera and surgical tools to diagnose and treat joint issues. </p>
                                    <p><b>Growth Plate Surgery:</b> For conditions affecting bone growth, surgery may be performed to correct growth plate abnormalities. </p>
                                
                                    <div class="mt-3 mt-lg-6"></div>
                                    <h3 class="theme-color">Surgical Interventions:</h3>
                                    <p><b>Fracture Repair: </b>Surgical procedures may be required to realign and stabilize fractured bones in children.</p>
                                    <p><b>Limb Lengthening:</b> For children with unequal leg lengths, surgical techniques can help lengthen the shorter limb. </p>
                                    <p><b>Scoliosis Surgery:</b> Complex spinal surgeries can correct severe spinal curvature and prevent further progression. </p>
                                    <p><b>Joint Surgery:</b> Surgical interventions can address conditions like congenital hip dysplasia or other joint abnormalities. </p>
                                    <p><b>Tumor Removal:</b> If benign or malignant tumors affect bones or soft tissues, surgical removal may be necessary. </p>
                                    <p><b>Neuromuscular Surgery:</b> Surgical procedures can correct musculoskeletal issues caused by neuromuscular disorders. </p>
                                    
                                 
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
                                                        <div class="d-flex flex-wrap"><a href="tel: 0124-6948701 "> 0124-6948701  (For Appointment), </a> </div>
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
                                <div class="col-sm-12">
                                    <h2 class="theme-color">Best Pediatric Orthopedic Surgery Hospital In Gurgaon  </h2>
                                    <p>Our best pediatric orthopedic surgery hospital in Gurgaon is providing hope for children and their families. We are helping many patients with our serious care for patients, and our professional doctors make it possible for us. We have modern equipment for diagnosis and treatment, which provide relaxation for our patients. When we take responsibility for your child, we ensure we provide the best treatment for your kid. At SCI Hospital, you don't need to wait in long lines; you can easily meet with our best orthopedic surgeons by making one appointment. You can contact us if you want to treat your kid's joint problem.</p>
                                    
                                 
                                </div>
                            </div>
                        </div>
                        
                        

                        <div class="mt-3 mt-lg-6"></div>

                        <h3 class="theme-color text-center">Pediatric Orthopedic Doctor In Gurgaon  </h3>
                       

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
                                                       Senior Consultant (Visiting) Orthopaedics<br>
Joint Replacement and Arthroscopy
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
                    <h4 class="theme-color">Frequently Asked Questions  </h4>

                    <div class="accordion faq_services" id="accordionExample">
                        <div class="card">
                            <div class="" id="headingOne">
                                <p class="mb-0">
                                    <button class="faq_btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Q: Why choose pediatric orthopedic care at SCI Hospital?    <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                   A: Our best pediatric orthopedic hospital in gurgaon combines expertise , advanced technology, and a patient-centered approach for optimal pediatric orthopedic outcomes.   
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       Q: What qualities set your pediatric orthopedic surgeons apart?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    A: Our surgeons blend technical proficiency with compassion, ensuring the best care for your child. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       Q: Is surgery the only solution for pediatric orthopedic conditions?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                   A: Not necessarily. We offer a range of treatments, tailoring the approach to each child's unique needs. 
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


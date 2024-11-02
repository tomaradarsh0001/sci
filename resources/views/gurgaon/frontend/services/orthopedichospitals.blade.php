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
                   
                    <span>Best Orthopedic Hospitals In Gurgaon</span>
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
                        <h1 class="theme-color">Best Orthopedic Hospitals In Gurgaon</h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('public_gurgaon/assets/images/banner/orthopedic-hospitals-banner.png')}}" class="img-fluid w-100" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>In the dynamic landscape of healthcare, the quest for top-notch orthopedic surgery in gurgaon brings us to SCI Hospital, this is the best orthopedic hospital in gurgaon. It will cover a wide range of conditions and treatments, explain the specialized care at SCI Hospital, and introduce you to the highly regarded orthopedic surgeons and doctors who put it at the top of orthopedic care. Let yourself trust us to give you the best care, the best tools, and a pretty good plan for your comfort and healing. Choose SCI Hospital for orthopedic surgery in gurgaon, if you want the best care and peace of mind. </p>
                        <p>We provide treatments for a range of conditions, including disc replacement, knee replacement, joint replacement, hip replacement, arthritis, osteoporosis, spondylitis, as well as spinal fractures and paralysis. </p>
                        <div class="mt-3 mt-lg-6"></div>
                        <div class="row align-items-center">
                            <div class="col-sm-7">
                                <h2 class="theme-color">What is Orthopedics? </h2>

                                <p>Orthopedics is a surgery which focuses on treating and preventing diseases related to the musculoskeletal system. This system helps the body to move and joints together are made with  bones, joints, ligaments, tendons, muscles, and nerves. Orthopedic professionals find a variety of problems, from fractures and joint injuries to degenerative conditions like arthritis. They use both surgical and non-surgical treatment to prevent pain and recover structure. Orthopedics is a very efficient treatment which affects the overall musculoskeletal health of the body and helps patients to stand up like before. At SCI Hospital in Gurgaon, we understand the value of timely and accurate diagnosis. Orthopedic tests can be assessed by using MRI, Ultrasound, and CT scan machines which can help us determine the best course of treatment plan to convey to the patient. </p>
                            </div>
                            <div class="col-sm-5 p-2">
                                <img src="{{asset('public_gurgaon/assets/images/orthopedic-hospitals.png')}}" class="img-fluid w-100" alt="" />
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>

                        <div class="row">
                            <div class="col-sm-8">
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Orthopedics Conditions</h2>
                                            <p>The general orthopedics conditions are:   </p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <p><b>Osteoarthritis:</b> Osteoarthritis is the most common type of joint disorder. It is also called degenerative joint disorder (DJD). As people get old, they are more likely to get osteoarthritis. Most changes in osteoarthritis happen slowly over a long period of time. </p>
                                            <p><b>Osteoporosis:</b> This is a bone disease that happens when bone bone mineral density and bone mass reduces, when the structure of bone changes. This can cause bones to become less strong, which can make them more likely to break bones (fractures).  </p>
                                            <p><b>Fibromyalgia:</b> Fibromyalgia is a problem that lasts for a long time and causes pain and tenderness all over the body, as well as tiredness and trouble sleeping. This stage of inflammation of soft tissues is defined by pain in the body and muscles and pain in the pelvis. </p>
                                            <p><b>TMJ Dysfunction:</b> TMJ dysfunction (TMD) causes jaw joint, muscle, and ligament pain. Teeth grinding, jaw injuries, arthritis, and wear and tear cause it. TMJ treatment may involve medication, physical therapy, bespoke mouth guards, and jaw surgery. </p>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-3 mt-lg-6"></div>
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Treatment of Orthopedic Conditions</h2>
                                            <p>Many orthopedic diseases are treatable, Nonetheless, there are those who, at this moment, simply cannot be helped. Fortunately, there are treatments that can alleviate symptoms and improve health. </p>
                                            
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <p>The treatments we offer are:  </p>
                                            <p><b>Total Knee and Hip Replacements :</b> Joint replacement surgery replaces damaged knee or hip joints with metal or plastic prosthetics. The patella, tibia, and femur—the three bones that make up a knee joint—can be surgically replaced. A prosthetic hip joint has a stem, ball, and cup, a total knee and hip joint replacement entails replacing worn-out or damaged knee and hip joints with a metal or plastic prosthesis.  </p>
                                            <p><b>Disc Replacement:</b> This is also called a slipped disc or a damaged disc, It causes pain, weakness, or stiffness in the leg or arm by irritating nerves nearby. Herniated discs are usually treated by doing less, getting exercise, or having surgery to fix the disc. </p>
                                            <p><b>Total Joint Replacement:</b> Total joint replacement is a surgery in which broken or arthritic parts of a joint are taken out and replaced with a prosthesis made of metal, plastic, or ceramic. </p>
                                            <p>To provide the most effective care possible, the medical staff at the best orthopedic hospital in gurgaon collaborates with different specialists throughout the course of therapy. </p>
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
                                    <h2 class="theme-color">Why Choose SCI for Best Orthopedics treatment  </h2>
                                    <p>SCI, a leading healthcare institution in Gurgaon, stands out as a premier destination for orthopedics treatment. Our modern facilities, accurate diagnostics, and attention on each patient allow us to make individualized treatment plans that use minimally invasive methods as much as possible. SCI in Gurgaon emerges as a top choice for individuals seeking high-quality orthopedic care. </p>
                                 
                                </div>
                            </div>
                        </div>
                        
                        

                        <div class="mt-3 mt-lg-6"></div>

                        <h3 class="theme-color text-center">Best Orthopedic Doctor In Gurgaon  </h3>
                       

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
                                      Q. What are the benefits of orthopedic hospitals?     <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                  A. Getting treatment from an orthopedic hospital is a huge advantage because they can provide you with a better diagnosis and the best treatment. In addition, they will take care of the patient after treatment. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       Q: What is the goal of orthopedic treatment?   <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    A. The main purpose of the orthopedic treatment is to cure patients bones, joints, ligaments, tendons and muscles. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       Q: What are the most common orthopedic conditions?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                   A: These are the most common orthopedic condition:Osteoarthritis, Osteoporosis, Fibromyalgia, and TMJ Dysfunction 
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


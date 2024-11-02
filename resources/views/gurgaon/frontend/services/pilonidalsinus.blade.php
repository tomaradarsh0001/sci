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

<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" /></noscript>

<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'" />
<noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" /></noscript>
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

                    <span>Pilonidal Sinus Surgery in Gurgaon   </span>
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
                        <h1 class="theme-color">Pilonidal Sinus Surgery in Gurgaon  </h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('public_gurgaon/assets/images/banner/pilonidal-sinus-banner.png')}}" class="img-fluid w-100" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>Are you looking for the newest and most effective way to treat your Pilonidal Sinus? Then you don’t need to go anywhere other than SCI hospital, the best pilonidal sinus hospital in Gurgaon. To assure your quick recovery and long-lasting relief, our specialized Pilonidal Sinus Surgery service is built to offer you complete care while applying cutting-edge treatments, such as Laser treatment. </p>
                        
                        <div class="mt-3 mt-lg-6"></div>
                        <div class="row">
                            <div class="col-sm-7">
                                <h2 class="theme-color">What Is Pilonidal Sinus?  </h2>

                                <p>Pilonidal Sinus is a common condition characterized by the development of a small tunnel or cyst in the skin near the tailbone. It can spread faster, hurt people, and make them feel bad, If you don't treat this disease at the right time. It often starts as a small pit or depression and may become more pronounced over time. This disease occurs with various factors like growth of hairs and local trauma.  which can cause hair and other things to build up in the pit, This may result in inflammation, infection, and the formation of a cyst or abscess, which can cause pain, swelling, tenderness, and the release of pus or fluid. Antibiotics can be used to treat infections, abscesses can be cut open and drained, or the sinus can be removed surgically. To stop a return, you must take care of your wounds and keep yourself clean.  </p>

                            </div>
                            <div class="col-sm-5 p-2">
                                <img src="{{asset('public_gurgaon/assets/images/pilonidal-sinus.png')}}" class="img-fluid w-100" alt="" />
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Causes of Pilonidal Sinus</h2>
                                            <p>There are a few things that cause pilonidal sinus:  </p>
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Skin rubbing from tight clothes  </li>
                                                <li><i class="fa fa-check"></i> An inactive lifestyle involving prolonged sitting  </li>
                                                <li><i class="fa fa-check"></i> Minor trauma or injury to the buttock area  </li>
                                                <li><i class="fa fa-check"></i> Humidity and sweat in the buttock area </li>
                                            </ul>
                                        </div>
                                        
                                       
                                    </div>
                                </div>
                                <div class="mt-3 mt-lg-6"></div>
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Symptoms of Pilonidal Sinus </h2>
                                            <p>Common symptoms of Pilonidal Sinus may include:  </p>
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Pain and tenderness in the affected area </li>
                                                <li><i class="fa fa-check"></i> Swelling and redness </li>
                                                <li><i class="fa fa-check"></i> Drainage of pus or blood </li>
                                                <li><i class="fa fa-check"></i> Itching and discomfort while sitting or standing </li>
                                            </ul>
                                        </div>
                                        
                                       
                                    </div>
                                </div>
                                <div class="mt-3 mt-lg-6"></div>
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Risk Factors For Pilonidal Sinus  </h2>
                                            <p>
                                                Several factors may increase the risk of developing Pilonidal Sinus, including: 
                                            </p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Excess hair growth   </li>
                                                <li><i class="fa fa-check"></i>  Being overweight or obese  </li>
                                                <li><i class="fa fa-check"></i> Prolonged sitting or driving   </li>
                                                <li><i class="fa fa-check"></i>  Bad cleanliness  </li>
                                                <li><i class="fa fa-check"></i>  Family history of the condition  </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-3 mt-lg-6"></div>
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">How are Pilonidal Sinuses Treated?</h2>
                                            <p><b>Laser ablation: </b>SCI Hospital performs modern laser pilonidal sinus surgery in gurgaon. The top pilonidal sinus doctors diagnose and cure. Laser sinus therapy reduces pain, healing, and recurrence.</p>
                                            <p><b>Surgical excision:</b> This is typical treatment for pilonidal sinus. The surgeon will cut the skin to remove the infected region. Staple or suture the wound.</p>
                                            <p><b>Cryotherapy:</b> Cryotherapy uses subzero temperatures for treatment. It reduces pain and inflammation, aiding healing. This new strategy boosts health and the body's natural healing.</p>
                                            <p><b>Electrocautery:</b> Electrocautery slices or breaks down tissue with high-frequency currents. Surgeries use these equipment to halt bleeding, remove tumors, and sculpt tissues.</p>
                                        </div>
                                    </div>
                                </div>

                              

                               
                                
                            </div>
                            <div class="col-sm-4">
                                <!--<div class="question-box mb-3">-->
                                <!--    <p class="theme-color font-heading-bold">Consult Now</p>-->
                                <!--    <form action="{{ url('online-consultation') }}" class="mt-15 forms" id="" method="post" novalidate="novalidate">-->
                                <!--        @csrf-->
                                <!--        <div class="successform">-->
                                <!--            <p>Your message was sent successfully!</p>-->
                                <!--        </div>-->
                                <!--        <div class="errorform">-->
                                <!--            <p>Something went wrong, try refreshing and submitting the form again.</p>-->
                                <!--        </div>-->
                                <!--        <input type="text" class="form-control" name="name" placeholder="Your name*" />-->
                                <!--        <input type="text" class="form-control" name="email" placeholder="E-mail*" />-->
                                <!--        <input type="text" class="form-control" name="phone" placeholder="Phone" />-->
                                <!--        <textarea class="form-control" name="message" placeholder="Question*"></textarea>-->
                                <!--        <input type="hidden" name="subject" value="advanced-laparoscopic-general-surgery" />-->
                                <!--        <button type="submit" class="btn btn-sm btn-hover-fill mt-15">Ask Now <i class="fa fa-spinner fa-spin" style="display: none;"></i></button>-->
                                <!--    </form>-->
                                <!--</div>-->
                                <!--services-->
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
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mt-3 mt-lg-6"></div>
                                <h3 class="theme-color">Why Choose SCI Hospital for Pilonidal Sinus Surgery in Gurgaon</h3>

                                <p>When you opt for pilonidal sinus surgery at SCI Hospital in Gurgaon, you can expect a range of exceptional benefits. Our distinguished team of pilonidal sinus specialists and medical experts has a lot of experience treating this condition successfully. This means that you will get the best care possible. We use the most advanced, cutting-edge tools to give you the best medical care. Our state-of-the-art facilities and comfortable atmosphere make your treatment even better. We look at your health as a whole, from the first diagnosis to the care you get after surgery. Notably, SCI Hospital is known for its skill in laser treatment for Pilonidal Sinus, which helps patients heal faster and has better results. Upholding a patient-centric philosophy, your comfort and satisfaction are our utmost priorities, ensuring a worry-free journey. Embark on the path towards a pain-free life by selecting SCI Hospital's Pilonidal Sinus Surgery in Gurgaon as your first step.  </p>

                                 </div>
                            </div>
                        </div>


                        <div class="mt-3 mt-lg-6"></div>

                        <h3 class="theme-color text-center">Best Doctors for Pilonidal Sinus in Gurgaon  </h3>

                        <div class="container">
                            <div class="row align-items-center">
                               <div class="owl-carousel" id="doccard_slider">
                                    
                                    
                                    <div class="post-slide2">
                                        <div class="team_box">
                                            <div class="row align-items-center">
                                                <div class="col-sm-4 col-lg-4">
                                                    <img src="https://scihospital.com/gurgaon/public/assets/images/doctors/Vikrant.webp" alt="" class="img-responsive" loading="lazy" />
                                                </div>
                                                <div class="col-sm-8 col-lg-8">
                                                    <h5 class="doctor-box-name theme-color">Dr. Vikrant Singh</h5>
                                                    <p>
                                                        Proctology/General Surgeon<br>Piles, Pilonidal Sinus, Fistula Expert
                                                    </p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="line_box"></div>
                                                </div>
                                               
                                                <div class="col-sm-12">
                                                    <div class="btn_box_doc">
                                                        <a href="https://scihospital.com/gurgaon/dr-vikrant-singh" class="newbtn btn"><i class="icon-right-arrow"></i><span>View More </span><i class="icon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="post-slide2">
                                        <div class="team_box">
                                            <div class="row align-items-center">
                                                <div class="col-sm-4 col-lg-4">
                                                    <img src="https://scihospital.com/gurgaon/public/assets/images/doctors/Daipayan.png" alt="" class="img-responsive" loading="lazy" />
                                                </div>
                                                <div class="col-sm-8 col-lg-8">
                                                    <h5 class="doctor-box-name theme-color">Dr. Daipayan Ghosh</h5>
                                                    <p>
                                                       Proctology/General Surgeon<br>Laparoscopic Surgeon, Proctologist, Bariatric Surgeon
                                                    </p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="line_box"></div>
                                                </div>
                                               
                                                <div class="col-sm-12">
                                                    <div class="btn_box_doc">
                                                        <a href="https://scihospital.com/gurgaon/dr-daipayan-ghosh" class="newbtn btn"><i class="icon-right-arrow"></i><span>View More </span><i class="icon-right-arrow"></i></a>
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
                    <h4 class="theme-color">Frequently Asked Questions Pilonisal Sinus Surgery  </h4>

                    <div class="accordion faq_services" id="accordionExample">
                        <div class="card">
                            <div class="" id="headingOne">
                                <p class="mb-0">
                                    <button class="faq_btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                     How is surgery performed for pilonidal sinus? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                The specific procedure depends on the surgeon's approach and the severity of the sinus. Generally, the surgeon will make an incision to access the sinus, remove the affected tissue and debris, and then either close the wound or leave it open, depending on the technique used. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Is pilonidal sinus surgery performed under general anesthesia? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                  Yes, in most cases, pilonidal sinus surgery is performed under general anesthesia to ensure the patient's comfort and to allow the surgeon to work effectively.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Is the surgery an outpatient procedure or will I need to stay in the hospital? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                 Most pilonidal sinus surgeries are outpatient procedures, which means you can go home on the same day after a period of observation. However, this might vary based on the surgical technique used and individual recovery.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       What is the recovery time after pilonidal sinus surgery?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                     Recovery time varies depending on the surgical technique, the extent of the sinus, and the individual's healing response. Generally, patients can return to light activities within a couple of weeks and resume more strenuous activities after a few more weeks.
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header" id="headingfive">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                       Will there be pain after the surgery?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                                <div class="card-body">
                                    Pain is common after pilonidal sinus surgery. Your surgeon will prescribe pain medications to manage discomfort during the initial stages of recovery.
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header" id="headingsix">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                       Are there any risks or complications associated with the surgery?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapsesix" class="collapse" aria-labelledby="headingsix" data-parent="#accordionExample">
                                <div class="card-body">
                                     Like any surgery, pilonidal sinus surgery carries risks such as infection, bleeding, wound healing issues, and recurrence of the sinus. Your surgeon will discuss these risks with you beforehand.
                                </div>
                            </div>
                        </div>
                       <div class="card">
                            <div class="card-header" id="headingseven">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                      How can I reduce the risk of recurrence after surgery?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseseven" class="collapse" aria-labelledby="headingseven" data-parent="#accordionExample">
                                <div class="card-body">
                                    Proper wound care, maintaining good hygiene, avoiding prolonged sitting, and wearing loose-fitting clothing can help reduce the risk of recurrence. Following your surgeon's post-operative instructions is crucial.
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header" id="headingeight">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                      When can I return to work or school after the surgery?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseeight" class="collapse" aria-labelledby="headingeight" data-parent="#accordionExample">
                                <div class="card-body">
                                   The timing of returning to work or school depends on the nature of your job or activities and your recovery progress. Light-duty jobs might be resumed within a couple of weeks, while more physically demanding roles may require a longer recovery period.
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
    $("#doccard_slider").owlCarousel({
        margin: 15,

        dots: true,
        loop: true,
        autoplay: true,

        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 2,
            },
        },
    });
</script>
@endsection

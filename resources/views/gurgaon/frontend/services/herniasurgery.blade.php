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

                    <span>Get The Best Hernia Surgery In Gurgaon </span>
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
                        <h1 class="theme-color">Get The Best Hernia Surgery In Gurgaon</h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('public_gurgaon/assets/images/banner/Hernia-Surgery.jpeg')}}" class="img-fluid w-100" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>
                            Welcome to SCI Hospital, this is the best hernia surgery hospital in Gurgaon, where we are dedicated to providing you with the best hernia surgery in Gurgaon. Here, we recognize the symptoms of a hernia surgery
                            that is performed correctly, as this can affect your general health and wellbeing. We have some of the best specialists and experienced surgeons, who are capable of delivering nice care and successful consequence
                            for every patient. Let yourself believe in us to provide you with the best treatment, caring facilities and a pretty well approach that must for your comfort and recovery. When it comes to hernia surgery, choose
                            SCI Hospital for excellence and peace of mind.
                        </p>

                        <div class="mt-3 mt-lg-6"></div>
                        <div class="row">
                            <div class="col-sm-7">
                                <h2 class="theme-color">What Is Hernia?</h2>

                                <p>
                                    It happens when a weak spot in the surrounding muscle or connective tissue allows an organ or tissue to push through. This can result in a visible bulge or lump, which may be more pronounced when standing
                                    or straining. Hernias can happen in various parts of the body, with the most common types being inguinal (inner groin), femoral (outer groin), umbilical (belly button), and hiatal (upper stomach).
                                </p>

                                <p>
                                    It can happen in many situations like heavy lifting, persistent coughing, obesity, pregnancy, or because of any recent surgery. In many cases hernia doesn’t hurt the person but it can bring you towards
                                    discomfort and complications, if a patient doesn't treat this problem at the right time. Exact cure is necessary, to recognize hernias effectively and prevent any severe complications.
                                </p>
                            </div>
                            <div class="col-sm-5 p-2">
                                <img src="{{asset('public_gurgaon/assets/images/hernia.png')}}" class="img-fluid w-100" alt="" />
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Types Of Hernia</h2>
                                            <p><b>Inguinal Hernia: </b></p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Direct Inguinal Hernia: This occurs when a part of the intestine pushes through a weak spot in the abdominal wall. </li>
                                                <li><i class="fa fa-check"></i> Indirect Inguinal Hernia: it occurs when the small intestine of the bladder pushes through the inguinal canal.   </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="col-12">
                                            <p><b>Femoral Hernia: </b></p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> It occurs when a portion of the intestine or fatty tissue protrudes through the femoral canal, a small opening near the groin.     </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="col-12">
                                            <p><b>Umbilical Hernia: </b></p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Umbilical hernias are often seen in infants and occur when the intestine or abdominal lining pushes through the abdominal wall near the navel.  </li>
                                            </ul>
                                        </div>
                                        
                                        <div class="col-12">
                                            <p><b>Hiatal Hernia: </b></p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Hiatal hernias occur when a portion of the stomach pushes through the diaphragm and into the chest cavity.  </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-3 mt-lg-6"></div>
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Signs & Symptoms Of Hernia</h2>
                                            <p>
                                                Hernias can affect a patient through many signs and symptoms, and understanding these signs is necessary for detection. Here are some signs & symptoms of hernia:
                                            </p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> A visible bulge or lump may be noticeable</li>
                                                <li><i class="fa fa-check"></i> Coughing or straining</li>
                                                <li><i class="fa fa-check"></i> Discomfort at the side of bulge</li>
                                                <li><i class="fa fa-check"></i> A burning sensation</li>
                                                <li><i class="fa fa-check"></i> Pressure or a feeling of fullness over affected area</li>
                                                <li><i class="fa fa-check"></i> Chest pain, heartburn and acid reflux</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 mt-lg-6"></div>

                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Causes Of Hernia</h2>
                                            <p>Here are various causes for hernia, and recognizing these basic factors is crucial for better prevention and management.These typical reasons are listed here:</p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> It can weakens the muscle over affected area</li>
                                                <li><i class="fa fa-check"></i> High pressure on groin or abdominal area</li>
                                                <li><i class="fa fa-check"></i> Family history of hernias</li>
                                                <li><i class="fa fa-check"></i> Age related muscle weakness</li>
                                                <li><i class="fa fa-check"></i> Poor nutrition and smoking</li>
                                            </ul>
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
                        
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mt-3 mt-lg-6"></div>
                                <h3 class="theme-color">How Is A Hernia Diagnosed?</h3>

                                <p>
                                    The task of the diagnostic process is to find the exact location and type of hernia. At SCI Hospital, we take pride in having the best doctors for hernia surgery in Gurgaon who are well-versed in
                                    performing accurate diagnoses.Which is affecting the patient, and it is supporting the medical team for making a customized treatment strategy for every patient. There few steps for diagnosis :
                                </p>

                                <p>
                                    <b>Physical Examination: </b> The first step in diagnosing a hernia involves a thorough physical examination by a qualified healthcare provider. Few following tests before surgery: endoscopy, abdominal
                                    ultrasound, CT scan, X-ray, and MRI scan.
                                </p>

                                <p>
                                    <b>Medical History Examination: </b> This examination is really necessary for those patients, who have already had some issue in the past and they had done any surgery. So that’s why it is necessary to
                                    find the exact details of the patient before hernia surgery.
                                </p>

                                <p><b>Diagnostic Imaging:</b> In some cases, healthcare professionals may utilize diagnostic imaging techniques to confirm the diagnosis and evaluate the hernia's extent.</p>
                                 
                                 </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mt-3 mt-lg-6"></div>

                                    <h3 class="theme-color">Treatment For Hernia Surgery At SCI Hospital</h3>

                                    <p>
                                        At SCI Hospital, we offer advanced and comprehensive hernia surgery treatments. Our skilled surgeons utilize state-of-the-art techniques to provide effective and minimally invasive solutions for
                                        hernias
                                    </p>
                                    <ul class="flexservices_list">
                                        <li>
                                            <i class="fa fa-check"></i> <b>Laparoscopic surgery: </b> Due to its ease of use in treating hernias, this most recent procedure has several benefits for the patient. A laparoscope, a tiny,
                                            flexible tube with a camera that allows surgeons to see inside organs and do surgery, is necessary for this procedure. Laparoscopic surgery has plenty of benefits like: Minimal scarring, reduced
                                            pain, faster recovery, lower risk of infection, less blood loss and one the most important aspect is patient satisfaction.
                                        </li>

                                        <li>
                                            <i class="fa fa-check"></i> <b>Open hernia repair:</b> In this traditional approach, the surgeon makes an incision directly over the hernia, pushes the protruding tissue or organ back into place,
                                            and then strengthens the weakened area by sewing a mesh over the site.
                                        </li>

                                        <li>
                                            <i class="fa fa-check"></i> <b>Robotic surgery for hernia repair:</b> During robotic hernia repair, the surgeon makes small incisions in the abdominal area, similar to traditional laparoscopic
                                            surgery. However, the surgeon uses robotic arms to manipulate the equipment from a computer console.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="mt-3 mt-lg-6"></div>

                                    <h3 class="theme-color">Best Hernia Surgery Hospital In Gurgaon</h3>

                                    <p>
                                        If you are in search of top-notch treatment for the best hernia surgery hospital in Gurgaon, look no further than SCI Hospital. We take pleasure in being one of Gurgaon's top hospitals for hernia
                                        surgery, providing specialized care and a group of highly qualified medical professionals committed to producing excellent results. The modern laparoscopic surgery for hernias we specialize in at SCI
                                        Hospital ensures minimally invasive methods that lead to less post-operative pain and quicker recovery times.
                                    </p>
                                    <p>
                                        With the aid of the latest technologies and methods, our skilled surgeons are among the best hernia surgery in gurgaon, offering precision and top-notch patient care. If you are seeking the best
                                        doctors for hernia surgery in Gurgaon, trust SCI Hospital for unparalleled expertise and a smooth healing journey. We will take care of your hernia with the help of our best doctors for hernia surgery
                                        in gurgaon.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>

                        <h3 class="theme-color text-center">Best Doctors For Hernia Surgery In Gurgaon</h3>

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
                    <h4 class="theme-color">Frequently Asked Questions</h4>

                    <div class="accordion faq_services" id="accordionExample">
                        <div class="card">
                            <div class="" id="headingOne">
                                <p class="mb-0">
                                    <button class="faq_btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                       What kind of hernia occurs most frequently in both men and women?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                   Answer: Umbilical hernias
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       Is it possible to treat a hernia non-surgically?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                   Answer: The answer is yes, It is possible to treat an inguinal hernia without surgery. But you need medications for that. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Do hernia operations hurt?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    Answer: It may hurt mildly, just for a few days after that you feel better. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       How long does it take to recover from hernia surgery?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                   Answer: Following this procedure, the patient can recover in 1 to 2 weeks. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading4">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseFour">
                                       Is hernia surgery required?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                                <div class="card-body">
                                    Answer: Hernia surgery is recommended to prevent complications such as strangulation, where blood supply to the trapped tissue is cut off, leading to tissue damage 
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

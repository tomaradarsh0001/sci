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

                    <span> Anal Fistula Treatment in Gurgaon  </span>
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
                        <h1 class="theme-color">Anal Fistula Treatment in Gurgaon </h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('public_gurgaon/assets/images/banner/fistula-banner.png')}}" class="img-fluid w-100" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>
                            Welcome to SCI Hospital, a leading healthcare institution, committed to providing advanced and modern ways for Anal fistula treatment in Gurgaon. Our experienced team of proctology experts and state-of-the-art facilities make us the preferred destination for patients seeking effective and minimally invasive options for anal fistula treatment. Don't let anal fistula affect your life any longer. Reach out to us today and take the first step toward healing and recovery. 
                        </p>

                        <div class="mt-3 mt-lg-6"></div>
                        <div class="row">
                            <div class="col-sm-7">
                                <h2 class="theme-color">What is Anal Fistula? </h2>

                                <p>
                                    An abnormal tunnel-like tract known as an anal fistula develops between the anus or rectum's interior and the skin surrounding the anal orifice. Usually, an infection or an abscess in the anal glands causes it to manifest. A tunnel linking the diseased gland to the skin's surface close to the anus develops as a result of the infection. 
                                </p>

                                <p>
                                    This illness can be uncomfortable and severe, frequently causing symptoms including swelling, discharge of pus or fluid, and chronic anal pain. Based on where they are located and how complicated they are, anal fistulas can be divided into many categories. 
                                </p>
                            </div>
                            <div class="col-sm-5 p-2">
                                <img src="{{asset('public_gurgaon/assets/images/fistula.png')}}" class="img-fluid w-100" alt="" />
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Types of Anal Fistula </h2>
                                            <p><b>There are different types of anal fistulas, depending on their course and complexity such as: </b></p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Intersphincteric Fistula: This type of anal fistula begins in the anal canal, between the internal and external sphincter muscles. It follows a straight path, extending outward to the skin around the anus.    </li>
                                                <li><i class="fa fa-check"></i>   Transsphincteric Fistula: A transsphincteric fistula originates in the anal canal, but it extends through both the internal and external sphincter muscles. It forms a more extended and curved tunnel that exits in the skin around the anus.  </li>
                                                <li><i class="fa fa-check"></i>   Suprasphincteric Fistula: This type of anal fistula begins in the anal canal and extends upward, passing over the external sphincter muscle. It then descends to the skin around the anus. </li>
                                                <li><i class="fa fa-check"></i>   Extrasphincteric Fistula: Extrasphincteric fistulas are rare and highly complex. They originate in the rectum or anus and extend outside the sphincter muscles, passing through the pelvic floor and surrounding structures.  </li>
                                                <li><i class="fa fa-check"></i>   Horseshoe Fistula: A horseshoe fistula is a variation where the fistula tract extends through both sides of the external sphincter muscle, resembling the shape of a horseshoe.  </li>
                                            </ul>
                                        </div>
                                       
                                    </div>
                                </div>
                                <div class="mt-3 mt-lg-6"></div>
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Symptoms of Anal Fistula </h2>
                                            <p>
                                                Symptoms of an anal fistula can vary depending on the location, complexity, and severity of the condition. Some common symptoms associated with anal fistulas include: 
                                            </p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Persistent Pain and Discomfort</li>
                                                <li><i class="fa fa-check"></i> Recurrent Anal Abscess</li>
                                                <li><i class="fa fa-check"></i> Pus or Blood Drainage</li>
                                                <li><i class="fa fa-check"></i> Swelling and Redness</li>
                                                <li><i class="fa fa-check"></i> Skin Tags or Small Bumps</li>
                                                <li><i class="fa fa-check"></i> Fever and Chills </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 mt-lg-6"></div>

                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Causes of Anal Fistula </h2>
                                            <p>Understanding the causes of anal fistula is essential for its proper management and prevention. Below are some common causes: </p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Anal Abscess </li>
                                                <li><i class="fa fa-check"></i> Inflammatory Bowel Disease (IBD)</li>
                                                <li><i class="fa fa-check"></i> Infection and Trauma</li>
                                                <li><i class="fa fa-check"></i> Perianal Glands Blockage</li>
                                                <li><i class="fa fa-check"></i> Sexually Transmitted Infections (STIs) </li>
                                                <li><i class="fa fa-check"></i> Foreign Objects</li>
                                                <li><i class="fa fa-check"></i> Tuberculosis </li>
                                                <li><i class="fa fa-check"></i> Immunocompromised Conditions</li>
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
                                <h3 class="theme-color">Get Advance Fistula Treatment in Gurgaon at SCI Hospital</h3>

                                <p>
                                    SCI Healthcare is a leading provider of fistula treatment in Gurgaon. We have a team of experienced surgeons who can treat all types of fistulas. We offer both open and laparoscopic surgery for fistula repair.They use both surgical and non-surgical methods to treat the condition. The treatment plan is customized as per the individual needs of the patient. The surgeons also offer guidance on lifestyle changes and dietary modifications that can help in the healing process. SCI Hospital has a state-of-the-art infrastructure and is equipped with the latest medical equipment. The hospital has a team of experienced support staff who provide the best possible care to the patients. The hospital also has a well-stocked pharmacy and a 24-hour ambulance service. 
                                </p>

                                 </div>
                            </div>
                        </div>


                        <div class="mt-3 mt-lg-6"></div>

                        <h3 class="theme-color text-center">Best doctor for Anal Fistula treatment center in Gurgaon </h3>

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
                    <h4 class="theme-color">Frequently Asked Questions About Fistula Surgery </h4>

                    <div class="accordion faq_services" id="accordionExample">
                        <div class="card">
                            <div class="" id="headingOne">
                                <p class="mb-0">
                                    <button class="faq_btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      How is an anal fistula diagnosed?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                  Diagnosis typically involves a physical examination by a proctology specialist, along with the use of imaging studies such as MRI or fistulography to determine the type and complexity of the fistula.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                       What are the treatment options for anal fistula at SCI Hospital?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                   Ans - SCI Hospital offers various treatment options, including minimally invasive procedures such as fistulotomy, fistula plug, and laser fistula closure. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                         Is surgery necessary for all anal fistulas?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                   Ans - Not all anal fistulas require surgery. Some may heal on their own or respond to non-surgical treatments. However, surgery is often necessary for complex or persistent fistulas. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       Will there be a recurrence of the fistula after treatment?   <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                   Ans - While some fistulas may recur, the risk can be minimized with appropriate treatment and post-operative care. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading4">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseFour">
                                       Is anal fistula surgery painful?   <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                                <div class="card-body">
                                    Ans - At SCI Hospital, we use advanced surgical techniques and anesthesia to ensure minimal discomfort during and after the procedure. 
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

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
                   
                    <span>Advanced Piles Treatment in Gurgaon  </span>
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
                        <h1 class="theme-color">Advanced Piles Treatment in Gurgaon </h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('public_gurgaon/assets/images/banner/piles-banner.png')}}" class="img-fluid w-100" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>If you're looking for effective Piles treatment in Gurgaon, SCI Hospital is your best option. SCI Hospital is renowned for its medical expertise and dedication to patient care, making it an ideal location for Piles-related issues. The hospital provides advanced and individualized treatment options thanks to its team of seasoned medical professionals, which includes some of the best piles doctors in Gurgaon. Whether you require non-surgical interventions or surgical procedures, SCI Hospital offers comprehensive health care services. When it comes to piles treatment in Gurgaon, SCI Hospital stands out as a dependable option, providing expert care and a dedication to patient comfort and recovery.</p>

                        <div class="mt-3 mt-lg-6"></div>
                        <div class="row align-items-center">
                            <div class="col-sm-7">
                                <h2 class="theme-color">What Is Piles Treatment </h2>

                                <p>Piles treatment encompasses various medical and lifestyle interventions aimed at managing and alleviating the symptoms of piles, also known as Hemorrhoids. piles are swollen blood vessels located in the anal and rectal area. Treatment approaches include dietary adjustments to ensure softer stools, increased fluid intake to prevent constipation, and the use of over-the-counter creams or ointments to soothe discomfort. In more severe cases, medical procedures such as rubber band ligation, sclerotherapy, or surgical removal might be necessary to address persistent or painful piles. The choice of treatment depends on the severity of the condition and the individual's overall health. Consulting a medical professional is crucial to  

determine the most suitable course of action for effective piles treatment. </p>
                            </div>
                            <div class="col-sm-5 p-2">
                                <img src="{{asset('public_gurgaon/assets/images/piles_img.png')}}" class="img-fluid w-100" alt="" />
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>

                        <div class="row">
                            <div class="col-sm-8">
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Types Of Piles   </h2>
                                            <p>Here are few types of piles: </p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            
                                            <p><b>Internal piles:</b> Retinal hemorrhoids rarely cause pain but may cause bleeding and stool straining. The rectum has no pain nerves, hence deep rectum vein swells are hemorrhoids. Hemorrhoids normally heal on their own and are rarely visible or felt. </p>
                                            <p><b>External piles:</b> Swelling anus hemorrhoids that cause pain, itching, and discomfort. People normally think of external hemorrhoids. This anus-surrounded skin bulge is visible and tactile. They suffer rectum symptoms like internal hemorrhoids. </p>
                                            <p><b>Thrombosed Haemorrhoids:</b> A thrombosed haemorrhoid is either internal or external, in which a blood clot (thrombus) has formed. A thrombosed haemorrhoid is a significant consequence of an untreated hemorrhoid that results in more severe symptoms such extreme pain, burning, itching, redness, and swelling. </p>
                                            <p><b>Prolapsed Haemorrhoids:</b> Hemorrhoids that start inside the body but eventually bulge through the vaginal entrance are called prolapsed hemorrhoids. They may be painful or uncomfortable to varied degrees are categorized into four grades based on their degree of prolapse: </p>
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Grade 1: Small swellings that do not prolapse.</li>
                                                <li><i class="fa fa-check"></i> Grade 2: Prolapse during bowel movements but retract on their own. </li>
                                                <li><i class="fa fa-check"></i> Grade 3: Prolapse during bowel movements and require manual repositioning.</li>
                                                <li><i class="fa fa-check"></i> Grade 4: Permanently prolapsed and cannot be repositioned, potentially leading to complications. </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-3 mt-lg-6"></div>
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Signs and symptoms of Piles </h2>
                                            <p>
                                                Piles can manifest with various signs and symptoms. The severity of these symptoms may vary from person to person. Following are some of the common symptoms are: 
                                            </p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Pain or Discomfort </li>
                                                <li><i class="fa fa-check"></i> Itching and Irritation </li>
                                                <li><i class="fa fa-check"></i> Bleeding</li>
                                                <li><i class="fa fa-check"></i> Swelling and Inflammation </li>
                                                <li><i class="fa fa-check"></i> Mucus Discharge</li>
                                                <li><i class="fa fa-check"></i> Incomplete Bowel Movements </li>
                                                <li><i class="fa fa-check"></i> Hard or Lumpy Stools</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 mt-lg-6"></div>

                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Causes of piles </h2>
                                            <p>Piles can develop when the blood vessels in the anal canal become swollen and inflamed. Several factors can contribute to the development of piles such as: </p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Straining during Bowel Movements</li>
                                                <li><i class="fa fa-check"></i> Chronic Constipation</li>
                                                <li><i class="fa fa-check"></i> Chronic Diarrhea</li>
                                                <li><i class="fa fa-check"></i> Pregnancy</li>
                                                <li><i class="fa fa-check"></i> Obesity</li>
                                                <li><i class="fa fa-check"></i> Anal Intercourse</li>
                                                <li><i class="fa fa-check"></i> Low-Fiber Diet</li>
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
                         <div class="mt-3 mt-lg-6"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h3 class="theme-color">Advance Piles Treatment and Diagnosis with SCI Hospital </h3>

                                <p>SCI Hospital offers advanced piles treatment in Gurgaon, providing patients with comprehensive care and cutting-edge medical solutions to address their piles-related concerns. Our team of skilled urologists and proctology experts is committed to delivering personalized treatment plans, ensuring effective management and relief for those suffering from piles. With state-of-the-art technology and a compassionate approach, we aim to enhance the quality of life for our patients dealing with this condition. Trust SCI Hospital for your pile’s treatment and experience exceptional medical care and support on your journey to recovery. </p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>

                        <h3 class="theme-color text-center">Best Piles Doctor in Gurgaon </h3>
                       

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
                <!--<h3 class="theme-color">Gallbladder Stone Surgery Cost In Gurgaon</h3>-->
                <!--<p>-->
                <!--    SCI Hospital is one of the leading healthcare centers for Gallbladder Surgeries. Under the guidance of Dr. Daipayan Ghosh and Dr. Mir Asif, we offer advanced surgical treatment for Gallstones by Laparoscopic surgery. We-->
                <!--    ensure that the patient with gallstones is discharged on the same day or the next day, depending on the condition and severity of the surgery. It is essential for individuals with gallstones to discuss their options with-->
                <!--    a healthcare professional to determine the most suitable treatment plan tailored to their specific conditions and needs. Gallstone surgeries cost can vary from location to location. The surgery cost in India usually-->
                <!--    ranges between Rs 40,000 to 60,000.-->
                <!--</p>-->

                <!--<div class="mt-3 mt-lg-6"></div>-->

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
                                        How can I determine if I have piles? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    Ans - Common signs of piles include pain or discomfort during bowel movements, itching and irritation around the anus, rectal bleeding, and the presence of lumps or swelling in the anal area. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Can piles be treated without surgery? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    Ans - Yes, many cases of piles can be effectively managed without surgery. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        What is the recovery period after piles treatment? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                   Ans - Non-surgical and minimally invasive treatments typically have shorter recovery times, while surgical interventions may require a longer recovery period. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       Is piles treatment painful?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    Ans - Surgical treatments may involve some post-operative discomfort, but pain management techniques are employed to ensure your comfort. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading4">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse4" aria-expanded="false" aria-controls="collapseFour">
                                       Is SCI Hospital equipped with advanced piles treatment in Gurgaon? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapse4" class="collapse" aria-labelledby="heading4" data-parent="#accordionExample">
                                <div class="card-body">
                                   Ans - Yes, SCI Hospital in Gurgaon is equipped with state-of-the-art technology and modern medical facilities to provide the latest advancements in piles treatment. 
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


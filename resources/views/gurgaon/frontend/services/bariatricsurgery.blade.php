@extends('gurgaon.frontend.layouts.main') @section('main-container')
 @section('gurgaon.define_robots', 'index, follow') @section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img',
'https://scihospital.com/gurgaon/public/assets/images/banner/Best-Bariatric-Surgery-in-Gurgaon.webp')

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

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "FAQPage",
        "mainEntity": [
            {
                "@type": "Question",
                "name": "What are the advantages of bariatric surgery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Bariatric surgery provides excellent advantages, such as long-term weight loss, betterment of obesity-related health concerns, improved overall well-being, and a longer life expectancy. For tailored details, seek guidance from a healthcare expert."
                }
            },
            {
                "@type": "Question",
                "name": "What is the life expectancy after bariatric surgery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Life expectancy after bariatric surgery varies, but many experience improved health and increased longevity. The surgery helps reduce risks associated with obesity, leading to a potentially longer and healthier life."
                }
            },
            {
                "@type": "Question",
                "name": "Is bariatric surgery painful?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Bariatric surgery involves some discomfort during the recovery period, but pain is typically managed with medications. The long-term benefits often outweigh temporary discomfort, leading to improved health and lifestyle."
                }
            },
            {
                "@type": "Question",
                "name": "What organ is removed in bariatric surgery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "In bariatric surgery, a significant part of the stomach is removed, creating a narrow \"sleeve.\" This reduction limits calorie intake and diminishes hunger signals, aiding those with clinically severe obesity in achieving lasting weight loss."
                }
            },
            {
                "@type": "Question",
                "name": "How can I determine if I am experiencing obesity?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "Consider your BMI, waist circumference, and health to determine obesity. Consult a healthcare professional for personalized guidance and accurate evaluation."
                }
            },
            {
                "@type": "Question",
                "name": "What is the duration of the surgery?",
                "acceptedAnswer": {
                    "@type": "Answer",
                    "text": "The duration of surgery varies according to the specific procedure. Connect with your surgeon for accurate details. Factors like complexity and individual health can impact the overall time required."
                }
            }
        ]
    }
</script>


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

                    <span>Bariatric Surgery In Gurgaon </span>
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
                        <h1 class="theme-color">Bariatric Surgery In Gurgaon</h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('public_gurgaon/assets/images/banner/Best-Bariatric-Surgery-in-Gurgaon.webp')}}" class="img-fluid w-100" alt="Bariatric Surgery in Gurgaon: Transformative Weight Loss" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>
                            Bariatric surgery is an operative procedure that helps patients lose weight making certain changes to the digestive system. Some bariatric surgery types actually reduce the size of the stomach, so the person can
                            eat and drink less and feel full more quickly. Other bariatric surgery types can also make changes to the small intestine that absorbs nutrients and calories from food items.
                        </p>
                        <p>
                            Our premier hospital for bariatric surgery in Gurgaon is the preferred option for individuals facing severe obesity. It's also an excellent choice for those who struggle to lose excess weight or continue gaining
                            despite adopting a healthy lifestyle. Our comprehensive approach ensures effective and lasting solutions for weight management.
                        </p>

                        <div class="row align-items-center">
                            <div class="col-sm-7">
                                <h2 class="theme-color">What is Bariatric Surgery?</h2>
                                <p>
                                    Bariatric surgery, often referred to as "weight loss surgery," comprises a set of procedures aimed at aiding individuals struggling with excess weight. When traditional weight loss methods prove
                                    ineffective, and the health risks associated with obesity outweigh alternative options, getting bariatric surgery is a good way to lose weight quickly and effectively. The surgery involves alterations to
                                    your digestive system, typically targeting the stomach or occasionally the small intestine. This modification regulates calorie intake and can curb hunger signals to the brain. It serves as a
                                    transformative approach for those seeking lasting weight loss solutions when conventional efforts fall short.
                                </p>
                            </div>
                            <div class="col-sm-5 p-2">
                                <img src="{{asset('public_gurgaon/assets/images/Bariatric-Surgery.webp')}}" class="img-fluid w-100" alt="Types Of Bariatric Surgery" />
                            </div>
                        </div>

                        <h2 class="theme-color">Why Does Someone Need Bariatric Surgery?</h2>
                        <p>In general, bariatric surgery is a choice for obese people if:</p>
                        <p>
                            Their body mass index is 40 or more, which means they are very fat. Their BMI is between 35 and 39.9, which means they are obese. They also have major health problems caused by their weight, such as high blood
                            pressure, type 2 diabetes, or severe sleep apnea. In some cases, bariatric surgery is also suggested for people with a BMI between 30 and 34 and a serious health problem caused by their weight.
                        </p>
                        <div class="row align-items-center">
                            <div class="col-sm-7">
                                <h2 class="theme-color">Types of Bariatric Surgery</h2>
                                <p>
                                    Roux-en-Y (Gastric Bypass Surgery): This surgery is done to reduce the amount of food a person can eat in one go and reduce the absorption of nutrients. Biliopancreatic diversion with duodenal switch:
                                    This treatment goes around most of the intestine by connecting the end of the small intestine to the duodenum around the stomach. This is why it is called the duodenal switch and biliopancreatic
                                    diversion.
                                </p>
                                <p>
                                    Laparoscopic adjustable gastric banding (LAGB): LAGB re-positions the inflatable stomach band around the topmost part of the stomach. This band works like a belt to squeeze and tighten the stomach when
                                    expanded. This band can also be changed so that you eat less. Sleeve gastrectomy: Also called vertical sleeve gastrectomy, this new weight-loss surgery changes the shape of the stomach so that it looks
                                    like a tube. This makes it harder for the body to absorb calories.
                                </p>
                            </div>
                            <div class="col-sm-5 p-2">
                                <img src="{{asset('public_gurgaon/assets/images/banner/Types-of-Bariatric-Surgery.webp')}}" class="img-fluid w-100" alt="Types Of Bariatric Surgery" />
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>

                        <div class="row">
                            <div class="col-sm-8">
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Benefits of Weight Loss Surgery</h2>
                                            <p>Bariatric surgery helps people lose weight, which is better for their health than staying overweight.</p>
                                            <p>Surgery to help you lose weight not only makes you look and feel better but it also makes sure you live a healthy life.</p>
                                            <p>When overweight people lose weight, their health and way of life get better.</p>
                                            <p>If you've tried a lot of exercises and diet plans to lose weight but haven't seen the results you want, bariatric surgery is the best way to lose weight quickly and for good.</p>
                                            <p>With reduced weight, the energy level of people increases automatically, enabling them to move around conveniently with improved quality of life.</p>
                                            <p>Successful bariatric surgery also improves emotional health and prevents depression in people suffering from social stigma and poor body image issues.</p>
                                            <p>People with sleep apnea can sleep without their CPAP machine if they get to and stay at a normal weight.</p>
                                        </div>
                                    </div>
                                </div>

                                <div class="mt-3 mt-lg-6"></div>

                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">What are the risks associated with weight loss surgery?</h2>
                                            <p>Just like any big surgery, bariatric surgery, and other weight-loss surgeries can have both short-term and long-term health risks.</p>
                                            <p>The bariatric surgery process has the following short-term risks:</p>
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Excessive bleeding</li>
                                                <li><i class="fa fa-check"></i> Blood clots</li>
                                                <li><i class="fa fa-check"></i> Infection</li>
                                                <li><i class="fa fa-check"></i> Acid reflux</li>
                                                <li><i class="fa fa-check"></i> Dilation of oesophagus</li>
                                                <li><i class="fa fa-check"></i> Chronic vomiting or nausea</li>
                                                <li><i class="fa fa-check"></i> Anaesthesia-related risks</li>
                                                <li><i class="fa fa-check"></i> Inability to have certain foods</li>
                                                <li><i class="fa fa-check"></i> Obstruction of stomach</li>
                                                <li><i class="fa fa-check"></i> Breathing or lung problems</li>
                                                <li><i class="fa fa-check"></i> Weight gain or inability to lose weight</li>
                                                <li><i class="fa fa-check"></i> Adverse reactions to anaesthesia</li>
                                                <li><i class="fa fa-check"></i> Leaks in the gastrointestinal system</li>
                                                <li><i class="fa fa-check"></i> Death (rare)</li>
                                            </ul>

                                            <p>On the other hand, long-term complications and risks of undergoing weight-loss surgery may vary as per the type of surgery. Some of these risk factors include:</p>
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Hernias</li>
                                                <li><i class="fa fa-check"></i> Ulcers</li>
                                                <li><i class="fa fa-check"></i> Gallstones</li>
                                                <li><i class="fa fa-check"></i> Bowel obstruction</li>
                                                <li><i class="fa fa-check"></i> Malnutrition</li>
                                                <li><i class="fa fa-check"></i> Low blood sugar (hypoglycaemia)</li>
                                                <li><i class="fa fa-check"></i> Vomiting</li>
                                                <li><i class="fa fa-check"></i> Stomach perforation</li>
                                                <li><i class="fa fa-check"></i> Dumping syndrome, leading to nausea, diarrhoea or vomiting</li>
                                                <li><i class="fa fa-check"></i> Death (rare)</li>
                                            </ul>
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
                                <div class="col-12">
                                    <h3 class="theme-color">Best Bariatric Surgery Hospital In Gurgaon</h3>
                                    <p>
                                        SCI Hospital is the best bariatric surgery hospital in Gurgaon and a top destination for quality and advanced patient care. Our medically supervised treatments include nutrition therapy,
                                        pharmacotherapy, and behavior modification, as well as bariatric surgery. Roux-en-y gastric bypass, laparoscopic adjustable gastric band, and sleeve gastrectomy are the most popular weight-loss
                                        surgeries we do.
                                    </p>
                                    <p>
                                        Our doctors work together to make the best bariatric treatment plans as per the patient's needs. Our team consists of professionals in Internal Medicine, Endocrinology, General Surgery, Psychology,
                                        Psychiatry, Dietetics and more.
                                    </p>
                                    <p>People who want to learn more about surgery and other medical options offered at SCI Hospital's Bariatric Program can attend one of our regular informational seminars.</p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="theme-color">Best Bariatric Surgeon In Gurgaon</h3>
                                    <p>
                                        Our best bariatric surgeon in Gurgaon is highly trained and experienced at the best medical institutions in the world. Our doctors have been treating obesity for many years and have done thousands of
                                        weight loss treatments with the help of paramedics and nurses who run the surgical unit around the clock.
                                    </p>
                                    <p>
                                        The Qualifications of Our Obesity Surgeons include:
                                    </p>
                                    <ul>
                                        <li>MS in General Surgery</li>
                                        <li>DNB/FRCS/MRCS from International Hospitals and Colleges</li>
                                        <li>International Training Programs</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>

                        <!--<h2 class="theme-color text-center">Best Bariatric Surgeon In Gurgaon</h2>-->

                        <!--<div class="container">-->
                        <!--    <div class="row align-items-center">-->
                        <!--        <div class="owl-carousel" id="doccard_slider">-->
                        <!--            <div class="post-slide2">-->
                        <!--                <div class="team_box">-->
                        <!--                    <div class="row align-items-center">-->
                        <!--                        <div class="col-sm-4 col-lg-4">-->
                        <!--                            <img src="https://scihospital.com/gurgaon/public/assets/images/doctors/Mir-Asif.png" alt="" class="img-responsive" loading="lazy" />-->
                        <!--                        </div>-->
                        <!--                        <div class="col-sm-8 col-lg-8">-->
                        <!--                            <h5 class="doctor-box-name theme-color">Dr. Mir Asif</h5>-->
                        <!--                            <p>-->
                        <!--                                Proctology/General Surgeon-->
                        <!--                            </p>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-sm-12">-->
                        <!--                            <div class="line_box"></div>-->
                        <!--                        </div>-->

                        <!--                        <div class="col-sm-12">-->
                        <!--                            <div class="btn_box_doc">-->
                        <!--                                <a href="https://scihospital.com/gurgaon/dr-mir-asif" class="newbtn btn"><i class="icon-right-arrow"></i><span>View More </span><i class="icon-right-arrow"></i></a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--            <div class="post-slide2">-->
                        <!--                <div class="team_box">-->
                        <!--                    <div class="row align-items-center">-->
                        <!--                        <div class="col-sm-4 col-lg-4">-->
                        <!--                            <img src="https://scihospital.com/gurgaon/public/assets/images/doctors/Daipayan.png" alt="" class="img-responsive" loading="lazy" />-->
                        <!--                        </div>-->
                        <!--                        <div class="col-sm-8 col-lg-8">-->
                        <!--                            <h5 class="doctor-box-name theme-color">Dr. Daipayan Ghosh</h5>-->
                        <!--                            <p>-->
                        <!--                                Proctology/General Surgeon-->
                        <!--                            </p>-->
                        <!--                        </div>-->
                        <!--                        <div class="col-sm-12">-->
                        <!--                            <div class="line_box"></div>-->
                        <!--                        </div>-->

                        <!--                        <div class="col-sm-12">-->
                        <!--                            <div class="btn_box_doc">-->
                        <!--                                <a href="https://scihospital.com/gurgaon/dr-daipayan-ghosh" class="newbtn btn"><i class="icon-right-arrow"></i><span>View More </span><i class="icon-right-arrow"></i></a>-->
                        <!--                            </div>-->
                        <!--                        </div>-->
                        <!--                    </div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <!--<div class="mt-3 mt-lg-4"></div>-->
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
                    <h3 class="theme-color">Frequently Asked Questions</h3>

                    <div class="accordion faq_services" id="accordionExample">
                        <div class="card">
                            <div class="" id="headingOne">
                                <h4 class="mb-0">
                                    <button class="faq_btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Q. What are the advantages of bariatric surgery? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </h4>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                    A. Bariatric surgery provides excellent advantages, such as long-term weight loss, betterment of obesity-related health concerns, improved overall well-being, and a longer life expectancy. For tailored
                                    details, seek guidance from a healthcare expert.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h4 class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Q. What is the life expectancy after bariatric surgery? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    A. Life expectancy after bariatric surgery varies, but many experience improved health and increased longevity. The surgery helps reduce risks associated with obesity, leading to a potentially longer and
                                    healthier life.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h4 class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        Q. Is bariatric surgery painful? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </h4>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                    A. Bariatric surgery involves some discomfort during the recovery period, but pain is typically managed with medications. The long-term benefits often outweigh temporary discomfort, leading to improved
                                    health and lifestyle.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h4 class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                        Q. What organ is removed in bariatric surgery? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </h4>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                    A. In bariatric surgery, a significant part of the stomach is removed, creating a narrow "sleeve." This reduction limits calorie intake and diminishes hunger signals, aiding those with clinically severe
                                    obesity in achieving lasting weight loss.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h4 class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                        Q. How can I determine if I am experiencing obesity? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </h4>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                                <div class="card-body">
                                    A. Consider your BMI, waist circumference, and health to determine obesity. Consult a healthcare professional for personalized guidance and accurate evaluation.
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h4 class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                        Q. What is the duration of the surgery? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </h4>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                                <div class="card-body">
                                    A. The duration of surgery varies according to the specific procedure. Connect with your surgeon for accurate details. Factors like complexity and individual health can impact the overall time required.
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

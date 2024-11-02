@extends('gurgaon.frontend.layouts.main') 
@section('main-container') 
<meta property="og:image" content=https://scihospital.com/public/assets/images/sci%20logo.webp>

<script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "CommunityHealth",
        "name": "SCI International Hospital",
        "image": "https://scihospital.com/public/assets/images/sci%20logo.webp",
        "@id": "https://scihospital.com/public/assets/images/sci%20logo.webp",
        "url": "https://scihospital.com/",
        "telephone": "99994 46622",
        "address": { "@type": "PostalAddress", "streetAddress": "Hansraj Gupta Rd, Greater Kailash-1, M Block, Greater Kailash I, Greater Kailash", "addressLocality": "New Delhi", "postalCode": "110048", "addressCountry": "IN" },
        "openingHoursSpecification": { "@type": "OpeningHoursSpecification", "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"], "opens": "00:00", "closes": "23:59" },
        "sameAs": "https://scihospital.com/",
        "department": { "@type": "Gynecologic", "name": "Maternity Care & Pregnancy Hospital", "image": "https://scihospital.com/public/assets/images/banner/mother-and-child-care.jpg", "telephone": "081788 79594" }
    }
</script>
</head>
<body>
<div class="page-content">
    <!--section slider-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" style="padding: 0;">
                <div class="row home-page-carousel">
                    <div class="col-sm-12">
                        <img src="{{asset('public_gurgaon/assets/images/banner1.webp')}}" alt="" width="100%" class="img-fluid" />
                    </div>
                    <div class="col-sm-12">
                        <img src="{{asset('public_gurgaon/assets/images/banner2.webp')}}" alt="" width="100%" class="img-fluid" />
                    </div>
                    <div class="col-sm-12">
                        <img src="{{asset('public_gurgaon/assets/images/slider3.webp')}}" alt="" width="100%" class="img-fluid" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section slider-->

    <div class="need_section bg_marron">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-6 col-md-8">
                    <div class="heading_need">
                        <h2 class="text-white">One Call Away To Help You</h2>
                    </div>
                </div>
                <div class="col-6 col-md-4">
                    <div class="btn_need">
                        <a href="tel:9999446622"> +91-9999446622 For Appointment</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container pt-5 pb-5">
        <div class="row">
            <div class="col-sm-6">
                <div class="title-wrap text-center">
                    <h2 class="h1 double-title double-title--white double-title--center double-title--vcenter"><span>Our Achievements</span></h2>
                    <div class="h-decor mb-4"></div>
                </div>
                <div class="row justify-content-center prices-carousel js-prices-carousel box_slider">
                    <div class="col-sm-6 col-md-4">
                        <div class="prices-box prices-box--style2 prices-box--special">
                            <p class="prices-box-title number_price">55+</p>
                            <br />
                            <div class="prices-box-text">Happy Patients from 55+ Countries</div>

                            <div class="prices-box-row"><a href="{{ route('gurgaon.international-patients') }}">International Medical Service</a></div>
                            <!--<div class="prices-box-row">Quick Links</div>-->
                            <div class="prices-box-row"><a href="#" data-toggle="modal" data-target="#modalBookingForm">Book an Appointment</a> | <a href="#" data-toggle="modal" data-target="#modalQuestionForm">Make An Enquiry</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="prices-box prices-box--style2 prices-box--special">
                            <p class="prices-box-title number_price">100+</p>
                            <br />
                            <div class="prices-box-text">Doctors</div>

                            <div class="prices-box-row"><a href="{{ route('gurgaon.our-doctors') }}">Meet The Team</a></div>
                            <!--<div class="prices-box-row">Quick Links</div>-->
                            <div class="prices-box-row"><a href="#" data-toggle="modal" data-target="#modalBookingForm">Book an Appointment</a> | <a href="#" data-toggle="modal" data-target="#modalQuestionForm">Make An Enquiry</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="prices-box prices-box--style2 prices-box--special">
                            <p class="prices-box-title number_price">10+</p>
                            <br />
                            <div class="prices-box-text">Experience</div>

                            <div class="prices-box-row"><a href="{{ route('gurgaon.about-us') }}">Our Specialties</a></div>
                            <!-- <div class="prices-box-row">Quick Links</div>-->
                            <div class="prices-box-row"><a href="#" data-toggle="modal" data-target="#modalBookingForm">Book an Appointment</a> | <a href="#" data-toggle="modal" data-target="#modalQuestionForm">Make An Enquiry</a></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                 <div class="display_mobile text-center"><a href="#" data-toggle="modal" data-target="#modalBookingForm" class="btn">Book an Appointment</a></div>
                <div class="form_side_app modal-form display_desktop">
                    <p class="h3 text-center">Book an Appointment</p>
                    <!--bookingForm-->
                    <form action="{{ url('book-an-appointment') }}" class="mt-15 forms" id="" method="post" novalidate="novalidate">
                        @csrf
                        <div class="input-group">
                            <span>
                                <i class="icon-user"></i>
                            </span>
                            <input type="text" name="name" class="form-control" autocomplete="off" placeholder="Your Name*" />
                        </div>
                        <div class="row row-xs-space mt-1">
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span>
                                        <i class="icon-email2"></i>
                                    </span>
                                    <input type="text" name="email" class="form-control" autocomplete="off" placeholder="Your Email*" />
                                </div>
                            </div>
                            <div class="col-sm-6 mt-1 mt-sm-0">
                                <div class="input-group">
                                    <span>
                                        <i class="icon-smartphone"></i>
                                    </span>
                                    <input type="number" name="phone" class="form-control" autocomplete="off" placeholder="Your Phone" />
                                </div>
                            </div>
                        </div>
                        <div class="row row-xs-space mt-1">
                            <div class="col-sm-6">
                                <div class="input-group">
                                    <span>
                                        <i class="icon-birthday"></i>
                                    </span>
                                    <input type="number" name="age" class="form-control" autocomplete="off" placeholder="Your age" />
                                </div>
                            </div>
                            <div class="col-sm-6  mt-1 mt-sm-0">
                                <div class="input-group">
                                    <span>
                                        <i class="icon-clock"></i>
                                    </span>
                                    <div class="datepicker-wrap">
                                        <input name="time" type="text" class="form-control timepicker" placeholder="Time" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="input-group">
                            <span>
                                <i class="icon-micro"></i>
                            </span>
                            <input type="text" name="service" class="form-control" autocomplete="off" placeholder="Service" />
                        </div>
                        <div class="input-group flex-nowrap mt-1">
                            <span>
                                <i class="icon-calendar2"></i>
                            </span>
                            <div class="datepicker-wrap">
                                <input name="date" type="text" class="form-control datetimepicker" placeholder="Date" id="datepicker" readonly />
                            </div>
                        </div>
                        
                        <div class="">
                            <select name="centername" class="form-control centernamecss" required>
                                <option>Select Center</option>
                                <option value="Gurgaon">Gurgaon</option>
                                <option value="Delhi">Delhi</option>
                            </select>
                        </div>

                        <textarea name="message" class="form-control" placeholder="Your comment"></textarea>
                        <div class="text-center mt-2">
                            <input type="hidden" name="subject" value="Book an Appointment" />
                            <button type="submit" class="btn btn-sm btn-hover-fill">Book now <i class="fa fa-spinner fa-spin" style="display: none;"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--section-->
    <div class="section bg-grey mt-3 mt-lg-6">
        <div class="container">
            <div class="title-wrap text-center">
                <h2 class="h1 double-title double-title--white double-title--center double-title--vcenter" data-title="Our Services"><span>Our Services</span></h2>
                <div class="h-decor"></div>
            </div>

            <div class="display_desktop">
                <div class="row row-cols-5 row-cols-sm-2 row-cols-lg-5">
                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/urology.png')}}" alt=""><span>ADVANCED UROLOGY & ANDROLOGY</span></div>
                    </div>
                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/prostate-surgeries.png')}}" alt=""><span> LASER STONE AND PROSTATE SURGERIES</span></div>
                    </div>
                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/IVF-infertility.png')}}" alt=""><span> IVF AND INFERTILITY TREATMENTS</span></div>
                    </div>
                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/laparoscopy-Laser.png')}}" alt=""><span>ADVANCED LAPAROSCOPY & LASER PROCEDURES</span></div>
                    </div>
                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/general-and-minimally-invasive-surgery.png')}}" alt=""><span>GENERAL & MINIMALLY INVASIVE SURGERY</span></div>
                    </div>
                </div>
                <div class="row row-cols-5 row-cols-sm-2 row-cols-lg-5">
                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/ortho.png')}}" alt=""><span> ORTHOPEDICS & SPORTS INJURY</span></div>
                    </div>

                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/Ent.png')}}" alt=""> <span>ENT - COCHLEAR IMPLANT, HEAD & NECK SURGERY</span></div>
                    </div>

                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/bariatic & weightloss.png')}}" alt=""><span>BARIATRIC SURGERY & WEIGHT LOSS PROCEDURES</span></div>
                    </div>

                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/Dermatology&cosmetology.png')}}" alt=""><span> DERMATOLOGY & COSMETOLOGY</span></div>
                    </div>

                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/plastic & cosmetic.png')}}" alt=""> <span> PLASTIC & COSMETIC SURGERY</span></div>
                    </div>
                </div>
            </div>

            <div class="display_mobile">
                <div class="row row-cols-5 row-cols-sm-2 row-cols-lg-5">
                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/urology.png')}}" alt=""><span>ADVANCED UROLOGY & ANDROLOGY</span></div>
                    </div>
                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/prostate-surgeries.png')}}" alt=""><span> LASER STONE AND PROSTATE SURGERIES</span></div>
                    </div>
                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/IVF-infertility.png')}}" alt=""><span> IVF AND INFERTILITY TREATMENTS</span></div>
                    </div>
                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/laparoscopy-Laser.png')}}" alt=""><span>ADVANCED LAPAROSCOPY & LASER PROCEDURES</span></div>
                    </div>
                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/general-and-minimally-invasive-surgery.png')}}" alt=""><span>GENERAL & MINIMALLY INVASIVE SURGERY</span></div>
                    </div>

                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/ortho.png')}}" alt=""><span> ORTHOPEDICS & SPORTS INJURY</span></div>
                    </div>

                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/Ent.png')}}" alt=""> <span>ENT - COCHLEAR IMPLANT, HEAD & NECK SURGERY</span></div>
                    </div>

                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/bariatic & weightloss.png')}}" alt=""><span>BARIATRIC SURGERY & WEIGHT LOSS PROCEDURES</span></div>
                    </div>

                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/Dermatology&cosmetology.png')}}" alt=""><span> DERMATOLOGY & COSMETOLOGY</span></div>
                    </div>

                    <div class="col mb-3">
                        <div class="icon_services_box"><img src="{{asset('public_gurgaon/assets/images/plastic & cosmetic.png')}}" alt=""> <span> PLASTIC & COSMETIC SURGERY</span></div>
                    </div>
                </div>
            </div>

            <!--<div class="tab_home nav nav-pills-icons js-nav-pills-carousel serv_Slder" role="tablist">-->

            <!--    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="icon-testtube2"></i><span>GYNECOLOGY CARE</span></a>-->
            <!--    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="icon-micro"></i><span>MOTHER & CHILD CARE </span></a>-->
            <!--    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="icon-testtube"></i><span>IVF & FERTILITY TREATMENTS</span></a>-->
            <!--    <a class="nav-link" data-toggle="pill" href="#tab-E" role="tab"><i class="icon-chromosome"></i><span>ORTHOPAEDICS, JOINT REPLACEMENT, & SPINE SURGERY</span></a>-->
            <!--    <a class="nav-link" data-toggle="pill" href="#tab-F" role="tab"><i class="icon-dropper"></i><span>ENT, HEAD & NECK</span></a>-->
            <!--    <a class="nav-link" data-toggle="pill" href="#tab-H" role="tab"><i class="icon-molecular"></i><span>COCHLEAR IMPLANTS</span></a>-->
            <!--    <a class="nav-link" data-toggle="pill" href="#tab-I" role="tab"><i class="icon-testtube2"></i><span>NEONATOLOGY & PAEDIATRIC</span></a>-->
            <!--    <a class="nav-link" data-toggle="pill" href="#tab-J" role="tab"><i class="icon-micro"></i><span>VACCINATION PROGRAMS</span></a>-->
            <!--    <a class="nav-link" data-toggle="pill" href="#tab-K" role="tab"><i class="icon-testtube"></i><span>REGENERATIVE & STEM CELL </span></a>-->
            <!--</div>-->
        </div>
    </div>
    <!--//section-->

    <div class="section bg-norepeat bg-right bg-md-none section-top-padding">
        <div class="container">
            <div class="title-wrap text-center">
                <h3 class="h1 double-title double-title--center double-title--vcenter"><span>Our Specialist </span></h3>
                <div class="h-decor"></div>
            </div>
            <div class="row justify-content-center js-doc-pills-carousel doc_arrow_slider">
                
                
                
                 
                <div class="col-sm-6 col-md-4">
                    <div class="doctor-box text-center">
                        <div class="">
                            <a href="{{ route('gurgaon.dr-shivanisachdevgour') }}"><img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Shivani-Sachdev-Gour.png')}}" class="img-fluid" alt="" /></a>
                        </div>
                        <h5 class="doctor-box-name"><a href="{{ route('gurgaon.dr-shivanisachdevgour') }}">Dr. Shivani Sachdev Gour</a></h5>
                        <div class="doctor-box-position">Senior Consultant</div>
                        <div class="doctor-box-text doctor_des_height_equal">
                            <p>IVF & Surrogacy Specialist</p>
                        </div>
                        <div class="doctor-box-bottom">
                            <a href="{{ route('gurgaon.dr-shivanisachdevgour') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 text-center mt-5">
                <a href="{{ route('gurgaon.our-doctors') }}" class="btn"><i class="icon-right-arrow"></i><span>View More</span><i class="icon-right-arrow"></i></a>
            </div>
        </div>
    </div>

    <!--section specialists-->
    <div class="section bg-norepeat bg-right bg-md-none section-top-padding mt-5">
        <div class="container">
            <div class="title-wrap text-center">
                <h3 class="h1 double-title double-title--center double-title--vcenter" data-title="Gallery"><span>Breakthrough cases</span></h3>
                <div class="h-decor"></div>
            </div>

            <div class="row">
               
                <div class="col-sm-6 col-md-4 mb-2">
                    <div class="services_img">
                        <img src="{{asset('public_gurgaon/assets/images/ser2.webp')}}" class="img-responsive" /><br />
                        <p class="h3">Successfully treated Deafness of 2 Years Child</p>
                        <br />
                        <a href="{{ route('gurgaon.our-doctors') }}" class="btn"><i class="icon-right-arrow"></i>By Dr. Shomeshwar Singh</a>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 mb-2">
                    <div class="services_img">
                        <img src="{{asset('public_gurgaon/assets/images/premature-baby-calming-nicunarrow.webp')}}" class="img-responsive" /><br />
                        <p class="h3">Immature baby of 25 weeks treated & discharged healthy.</p>
                        <br />
                        <a href="{{ route('gurgaon.our-doctors') }}" class="btn"><i class="icon-right-arrow"></i>By Dr. Ashwini Kumar</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--//section specialists-->

    <!--section testimonials-->
    <div class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-5">
                    <div class="reviews-style4-wrap">
                        <div class="reviews-style4">
                            <div class="title-wrap">
                                <div class="h-sub">Patient Testimonials</div>
                                <p class="h1 double-title double-title--white double-title--right" data-title="">
                                    <span>
                                        What Our <br class="d-sm-none" />
                                        Patients Are Saying
                                    </span>
                                </p>
                            </div>
                            <div class="js-reviews-carousel2 reviews-carousel">
                                <div class="review">
                                    <p class="review-text">
                                       I am so very thankful to SCI International Hospital for this amazing journey of becoming a mother. Everything was so smooth and perfect here. Doctors, staff, nurses—everyone was so helpful and professional. It feels like home. I strongly recommend SCI Hospital and especially Dr. Dhwani if you are dreaming of having a baby. She is so professional, humble, and a doctor always with a smile who gives you the best advice, treatment, and positivity. Thank you so much
                                    </p>
                                    <p>
                                        <span class="review-author">- Shreya Sen</span>
                                    </p>
                                </div>
                                <div class="review">
                                    <p class="review-text">It was a great experience, and I'm really happy that I chose SCI Hospital. The doctors are very good, and all the staff are very kind. First experience at SCI International Hospital. The cleanliness was top-notch, and the services were great. I'll recommend this hospital to all my friends and relatives.</p>
                                    <p>
                                        <span class="review-author">- Udey Pratap Singh</span>
                                    </p>
                                </div>
                                <div class="review">
                                    <p class="review-text">I really appreciate all the staff's cooperation during the treatment. Doctor Shivani is so nice and the best doctor I have ever seen in my life.. and all staff members are very polite and easily accessible. I appreciate all the staff of this hospital. Thank you to all the doctors and staff for being so polite.</p>
                                    <p>
                                        <span class="review-author">- Manya</span>
                                    </p>
                                </div>
                                <div class="review">
                                    <p class="review-text">My Mother went for surgery in SCI hospital and we have had the best experience in regards of consulting, diagnosis and surgery. They offer you the best services and efficient doctors and highly trained staff that makes you feel at home. Miss Usha specifically has been very helpful and supportive in all the instances.</p>
                                    <p>
                                        <span class="review-author">- Ravi Kumar</span>
                                    </p>
                                </div>
                                <div class="review">
                                    <p class="review-text">I am so very thankful to SCI International Hospital for this amazing journey of becoming a mother. Everything was so smooth and perfect here. Doctors, staff, nurses—everyone was so helpful and professional. It feels like home. I strongly recommend SCI Hospital and especially Dr. Dhwani if you are dreaming of having a baby.</p>
                                    <p>
                                        <span class="review-author">- Suman Kumari</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row specialist-carousel js-specialist-carousel index_gallery">
                        <div class="col-sm-6 col-md-4 category1">
                            <div class="text-center">
                                <div class="youtube_video">
                                    <div class="YoutubeLazy" data-embed="LxK3eGTFCkI">
                                        <span class="YoutubeButton"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 category1">
                            <div class="text-center">
                                <div class="youtube_video">
                                    <div class="YoutubeLazy" data-embed="6s88TYGcdV4">
                                        <span class="YoutubeButton"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 category1">
                            <div class="text-center">
                                <div class="youtube_video">
                                    <div class="YoutubeLazy" data-embed="YInCM4066X0">
                                        <span class="YoutubeButton"></span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-md-4 category1">
                            <div class="text-center">
                                <div class="youtube_video">
                                    <div class="YoutubeLazy" data-embed="ywZi-WN-XQI">
                                        <span class="YoutubeButton"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-4 category1">
                            <div class="text-center">
                                <div class="youtube_video">
                                    <div class="YoutubeLazy" data-embed="n94NOkt8AWI">
                                        <span class="YoutubeButton"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-4 category1">
                            <div class="text-center">
                                <div class="youtube_video">
                                    <div class="YoutubeLazy" data-embed="5N1twN3X-lA">
                                        <span class="YoutubeButton"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 text-center mt-5 mb-3">
                <a href="{{ route('gurgaon.our-gallery') }}" class="btn"><i class="icon-right-arrow"></i><span>View More</span><i class="icon-right-arrow"></i></a>
            </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    
    <!--//section testimonials-->

    <!--section departments-->
    <div class="section bg-bottom bg-right bg-norepeat bg-md-none bg-fixed section-bottom-padding section-top-padding" style="background-image: url(public/assets/images/bg-bottom-right.webp);">
        <div class="container">
            <div class="row mt-lg-4">
                <div class="col-md-6 col-xl-6">
                    <div class="department-tabs2">
                        <img src="{{asset('public_gurgaon/assets/images/building.webp')}}" loading="lazy" />
                    </div>
                    <div class="department-tabs2-bg"><img src="{{asset('public_gurgaon/assets/images/bg-department.webp')}}" alt="" loading="lazy" /></div>
                </div>
                <div class="col-md-6 col-xl-6">
                    <div class="department-carousel2">
                        <div class="department-item">
                            <!-- <div class="h-sub theme-color">About us</div> -->
                            <h1>OUR STORY - SURGICAL CENTRE OF <span class="theme-color">INDIA</span></h1>
                            <p>
                                SCI Hospital was established in 2014 with an aim to develop a super speciality surgical centre with the latest equipment and facilities focused on Urology, Gynaecology & Obstetrics, Neonatology, Advanced
                                Laparoscopic & General Surgery along with Joint and Spine, ENT and Cosmetic Surgeries.
                            </p>
                            <p>All surgeries & treatments are carried out by highly motivated and internationally trained doctors.</p>
                            <a href="{{ route('gurgaon.about-us') }}" class="btn"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                            <ul class="marker-list-md">
                                <li>Clinic Tour</li>
                                <li>Insurance / TPA</li>
                                <li>EMI option</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section  departments-->

    <!--section specialists-->
    <div class="section bg-norepeat bg-right bg-md-none section-top-padding" style="background-image: url(public/assets/images/bg-top-right.webp);">
        <div class="container">
            <div class="title-wrap text-center">
                <div class="h-sub theme-color">Gallery</div>
                <h3 class="h1 double-title double-title--center double-title--vcenter" data-title="Gallery"><span>Image Gallery</span></h3>
                <div class="h-decor"></div>
            </div>

            <div class="row specialist-carousel js-gallery-carousel index_gallery">
                <div class="col-sm-6 col-md-4 category1">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('public_gurgaon/assets/images/img-gallery/Recovery-Area-min-768x512.webp')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('public_gurgaon/assets/images/img-gallery/Recovery-Area-min-768x512.webp')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('public_gurgaon/assets/images/img-gallery/M1-min-768x509.webp')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('public_gurgaon/assets/images/img-gallery/M1-min-768x509.webp')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category1">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('public_gurgaon/assets/images/img-gallery/nicu3-.webp')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('public_gurgaon/assets/images/img-gallery/nicu3-.webp')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('public_gurgaon/assets/images/img-gallery/nicu.jpg')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('public_gurgaon/assets/images/img-gallery/nicu.jpg')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('public_gurgaon/assets/images/img-gallery/Deluxe-Room-min-3-768x512.webp')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('public_gurgaon/assets/images/img-gallery/Deluxe-Room-min-3-768x512.webp')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('public_gurgaon/assets/images/img-gallery/MODULAR-OT..-min-768x512.webp')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('public_gurgaon/assets/images/img-gallery/MODULAR-OT..-min-768x512.webp')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('public_gurgaon/assets/images/img-gallery/OT...-min-768x512.webp')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('public_gurgaon/assets/images/img-gallery/OT...-min-768x512.webp')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('public_gurgaon/assets/images/img-gallery/1K1A4900-min-768x512.webp')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('public_gurgaon/assets/images/img-gallery/1K1A4900-min-768x512.webp')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category1">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('public_gurgaon/assets/images/img-gallery/NICU-Staff-2.webp')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('public_gurgaon/assets/images/img-gallery/NICU-Staff-2.webp')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 text-center mt-4">
                <a href="{{ route('gurgaon.our-gallery') }}" class="btn"><i class="icon-right-arrow"></i><span>View More</span><i class="icon-right-arrow"></i></a>
            </div>
        </div>
    </div>
    <!--//section specialists-->
    
    <!--section specialists-->
    <div class="section bg-norepeat bg-right bg-md-none section-top-padding" style="background-image: url(public/assets/images/bg-top-right.webp);">
        <div class="container">
            <div class="title-wrap text-center">
                <div class="h-sub theme-color">Doctors Talk </div>
                <h3 class="h1 double-title double-title--center double-title--vcenter"><span>Doctors Talk </span></h3>
                <div class="h-decor"></div>
            </div>

            <div class="row specialist-carousel js-gallery-carousel index_gallery">
                <div class="col-sm-6 col-md-4 category1">
                   <div class="youtube_video">
                                    <div class="YoutubeLazy" data-embed="SSLEE1ggkKc">
                                        <span class="YoutubeButton"></span>
                                    </div>
                                </div>
                </div>

                <div class="col-sm-6 col-md-4 category2">
                    <div class="youtube_video">
                                    <div class="YoutubeLazy" data-embed="heyU_vo_Kfw">
                                        <span class="YoutubeButton"></span>
                                    </div>
                                </div>
                </div>
                <div class="col-sm-6 col-md-4 category1">
                    <div class="youtube_video">
                                    <div class="YoutubeLazy" data-embed="PwnFRQIBrZ4">
                                        <span class="YoutubeButton"></span>
                                    </div>
                                </div>
                </div>

                <div class="col-sm-6 col-md-4 category2">
                    <div class="youtube_video">
                                    <div class="YoutubeLazy" data-embed="RHj3T2tx7ZU">
                                        <span class="YoutubeButton"></span>
                                    </div>
                                </div>
                </div>
                <div class="col-sm-6 col-md-4 category2">
                    <div class="youtube_video">
                                    <div class="YoutubeLazy" data-embed="VmZfDZYrulc">
                                        <span class="YoutubeButton"></span>
                                    </div>
                                </div>
                </div>
                <div class="col-sm-6 col-md-4 category2">
                   <div class="youtube_video">
                                    <div class="YoutubeLazy" data-embed="GFdGEHU38OQ">
                                        <span class="YoutubeButton"></span>
                                    </div>
                                </div>
                </div>
               
            </div>
<div class="col-sm-12 text-center mt-4">
                <a href="{{ route('gurgaon.our-gallery') }}" class="btn"><i class="icon-right-arrow"></i><span>View More</span><i class="icon-right-arrow"></i></a>
            </div>
        </div>
    </div>
    <!--//section specialists-->

    <!--section news & achieved-->
    <div class="bg-grey mt-4">
        <div class="container ">
        <div class="row">
            <div class="col-lg-6 ">
                <div class=""> 
                    <div class="title-wrap">
                        <h4 class="double-title double-title--white double-title--vcenter" data-title="News"><span>Blogs</span></h4>
                    </div>
                    
                    
                   
                  
                   
                </div>
            </div>
            
            
        </div>
    </div>
    </div>
    <!--//section news & achieved-->
    <!--section contact-->
    <div class="section bg-norepeat bg-bottom bg-left bg-md-none pt-0 mt-0" style="background-image: url(public/assets/images/website-banner-min.webp); background-size: 100%; background-position: center;">
        <div class="banner-appointment-form">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-sm-5 col-lg-5 order-2 order-sm-2 mt-3 mt-md-0 text-center">
                        <img src="{{asset('public_gurgaon/assets/images/content/banner-appointment.png')}}" alt="" class="banner-appointment-form-image" />
                    </div>
                    <div class="col-sm-7 col-lg-7 order-1 order-sm-1 d-flex">
                        <div class="pt-2 pt-lg-6 px-lg-3 text-center app_form_style mt-3 mb-3">
                            <div class="title-wrap-alt">
                                <h4 class="double-title double-title--vcenter double-title--center" data-title="Appointment">
                                    <span>Make an <span class="theme-color">Appointment</span></span>
                                </h4>
                            </div>
                            <p><strong>Early diagnosis and proper treatment can help with quick recovery. Consult the experts TODAY!</strong></p>
                            <form action="{{ url('contact-form') }}" class="contact-form forms" id="" method="post" novalidate="novalidate">
                                @csrf
                                <div>
                                    <input type="text" class="form-control" name="name" placeholder="Your name*" />
                                </div>
                                <div class="row row-sm-space mt-15">
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control" name="phone" placeholder="Your Phone" />
                                    </div>
                                    <div class="col-sm-6 mt-15 mt-sm-0">
                                        <input type="text" class="form-control" name="email" placeholder="Email*" />
                                    </div>
                                </div>
                                <div class=" mt-15">
                                    <select name="centername" class="form-control centernamecss" required>
                                        <option>Select Center</option>
                                        <option value="Gurgaon">Gurgaon</option>
                                        <option value="Delhi">Delhi</option>
                                    </select>
                                </div>
                                <div class="mt-15">
                                    <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                </div>
                                <div class="mt-2 mt-lg-4">
                                    <input type="hidden" name="subject" value="Contact Inquiry" />
                                    <button type="submit" class="btn"><i class="icon-right-arrow"></i><span>Book Now</span><i class="fa fa-spinner fa-spin" style="display: none;"></i><i class="icon-right-arrow"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section contact-->
</div>

@endsection

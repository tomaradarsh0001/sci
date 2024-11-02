@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "Patient Shares his success story after getting Hypospadias Treatment by Dr. Gautam Banga",
  "description": "You can also contact me for appointment",
  "thumbnailUrl": "https://i3.ytimg.com/vi/8DCoZ9kqFWg/maxresdefault.jpg",
  "uploadDate": "2023-10-30",
  "duration": "PT0M58S",
  "contentUrl": "https://www.youtube.com/watch?v=8DCoZ9kqFWg"
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "VideoObject",
  "name": "A Patient's Ureteric Reimplantation Story | Dr. Gautam Banga | SCI Hospital",
  "description": "International Patient Left Ureteric Reimplantation | Dr. Gautam Banga | SCI Hospital",
  "thumbnailUrl": "https://i3.ytimg.com/vi/_QItowpOym0/maxresdefault.jpg",
  "uploadDate": "2023-10-27",
  "duration": "PT2M31S",
  "contentUrl": "https://www.youtube.com/watch?v=_QItowpOym0"
}
</script>
<script type="application/ld+json">{  "@context": "https://schema.org",  "@type": "CommunityHealth",  "name": "SCI International Hospital",  "image": "https://scihospital.com/public/assets/images/sci%20logo.webp",  "@id": "https://scihospital.com/public/assets/images/sci%20logo.webp",  "url": "https://scihospital.com/",  "telephone": "99994 46622",  "address": {    "@type": "PostalAddress",    "streetAddress": "Hansraj Gupta Rd, Greater Kailash-1, M Block, Greater Kailash I, Greater Kailash",    "addressLocality": "New Delhi",    "postalCode": "110048",    "addressCountry": "IN"  },  "openingHoursSpecification": {    "@type": "OpeningHoursSpecification",    "dayOfWeek": [      "Monday",      "Tuesday",      "Wednesday",      "Thursday",      "Friday",      "Saturday",      "Sunday"    ],    "opens": "00:00",    "closes": "23:59"  },  "sameAs": "https://scihospital.com/",  "department": {    "@type": "Gynecologic",    "name": "Maternity Care & Pregnancy Hospital",    "image": "https://scihospital.com/public/assets/images/banner/mother-and-child-care.jpg",    "telephone": "081788 79594"   }}</script>
</head>
<body>
	<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MV3X3C7"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

    <!-- Google Tag Manager (noscript) --> 
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MV3X3C7" 
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript> 
<!-- End Google Tag Manager (noscript) --> 

<div class="page-content">
    <!--section slider-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12" style="padding: 0;">
                <div class="row home-page-carousel">
                    <div class="col-sm-12">
                        <a href="https://scihospital.com/gurgaon/" target="_blank"><img src="{{asset('assets/images/banner2.webp')}}" alt="" width="100%" class="img-fluid" /></a>
                    </div>
                    
                    <div class="col-sm-12">
                        <img src="{{asset('assets/images/banner1.webp')}}" alt="" width="100%" class="img-fluid" />
                    </div>
                    
                    <div class="col-sm-12">
                        <img src="{{asset('assets/images/slider3.webp')}}" alt="" width="100%" class="img-fluid" />
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
                        <a href="tel:9354471022 "> +91-9354471022  For Appointment</a>
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

                            <div class="prices-box-row"><a href="{{ route('international-patients') }}">International Medical Service</a></div>
                            <!--<div class="prices-box-row">Quick Links</div>-->
                            <div class="prices-box-row"><a href="#" data-toggle="modal" data-target="#modalBookingForm">Book an Appointment</a> | <a href="#" data-toggle="modal" data-target="#modalQuestionForm">Make An Enquiry</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="prices-box prices-box--style2 prices-box--special">
                            <p class="prices-box-title number_price">100+</p>
                            <br />
                            <div class="prices-box-text">Doctors</div>

                            <div class="prices-box-row"><a href="{{ route('our-doctors') }}">Meet The Team</a></div>
                            <!--<div class="prices-box-row">Quick Links</div>-->
                            <div class="prices-box-row"><a href="#" data-toggle="modal" data-target="#modalBookingForm">Book an Appointment</a> | <a href="#" data-toggle="modal" data-target="#modalQuestionForm">Make An Enquiry</a></div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4">
                        <div class="prices-box prices-box--style2 prices-box--special">
                            <p class="prices-box-title number_price">10+</p>
                            <br />
                            <div class="prices-box-text">Experience</div>

                            <div class="prices-box-row"><a href="{{ route('about-us') }}">Our Specialties</a></div>
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
                        <a href="{{ url('urology-and-andrology') }}"><div class="icon_services_box"><img src="{{asset('assets/images/urology.png')}}" alt=""><span>ADVANCED UROLOGY & ANDROLOGY</span></div></a>
                    </div>
                    <div class="col mb-3">
                        <a href="{{ url('enlarged-prostate') }}"><div class="icon_services_box"><img src="{{asset('assets/images/prostate-surgeries.png')}}" alt=""><span> LASER STONE AND PROSTATE SURGERIES</span></div></a>
                    </div>
                    <div class="col mb-3">
                        <a href="{{ url('male-infertility') }}"><div class="icon_services_box"><img src="{{asset('assets/images/IVF-infertility.png')}}" alt=""><span> IVF AND INFERTILITY TREATMENTS</span></div></a>
                    </div>
                    <div class="col mb-3">
                        <a href="{{ url('advanced-laparoscopic-general-surgery') }}"><div class="icon_services_box"><img src="{{asset('assets/images/laparoscopy-Laser.png')}}" alt=""><span>ADVANCED LAPAROSCOPY & LASER PROCEDURES</span></div></a>
                    </div>
                    <div class="col mb-3">
                        <a href="{{ url('DentalDepartment') }}"><div class="icon_services_box"><img src="{{asset('assets/images/dental.png')}}" alt=""><span>DENTAL TREATMENT AND PROCEDURE</span></div></a>
                    </div>
                </div>
                <div class="row row-cols-5 row-cols-sm-2 row-cols-lg-5">
                    <div class="col mb-3">
                        <a href="{{ url('orthopaedic') }}"><div class="icon_services_box"><img src="{{asset('assets/images/ortho.png')}}" alt=""><span> ORTHOPEDICS & SPORTS INJURY</span></div></a>
                    </div>

                    <div class="col mb-3">
                        <a href="{{ url('best-ent-hospital') }}"><div class="icon_services_box"><img src="{{asset('assets/images/Ent.png')}}" alt=""> <span>ENT - COCHLEAR IMPLANT, HEAD & NECK SURGERY</span></div></a>
                    </div>

                    <div class="col mb-3">
                        <a href="{{ url('bariatric-surgery') }}"><div class="icon_services_box"><img src="{{asset('assets/images/bariatic & weightloss.png')}}" alt=""><span>BARIATRIC SURGERY & WEIGHT LOSS PROCEDURES</span></div></a>
                    </div>

                    <div class="col mb-3">
                        <a href="{{ url('neontology-and-paeds') }}"><div class="icon_services_box"><img src="{{asset('assets/images/neonatology.png')}}" alt=""><span> PEDIATRICS AND NEONATOLOGY SPECIALIST</span></div></a>
                    </div>

                    <div class="col mb-3">
                        <a href="{{ url('DepartmentofDermatologyCosmetologyPlasticSurgery') }}"><div class="icon_services_box"><img src="{{asset('assets/images/plastic & cosmetic.png')}}" alt=""> <span> PLASTIC & COSMETIC SURGERY</span></div></a>
                    </div>
                </div>
            </div>

            <div class="display_mobile">
                <div class="row row-cols-5 row-cols-sm-2 row-cols-lg-5">
                    <div class="col mb-3">
                        <a href="{{ url('urology-and-andrology') }}"><div class="icon_services_box"><img src="{{asset('assets/images/urology.png')}}" alt=""><span>ADVANCED UROLOGY & ANDROLOGY</span></div></a>
                    </div>
                    <div class="col mb-3">
                        <a href="{{ url('enlarged-prostate') }}"><div class="icon_services_box"><img src="{{asset('assets/images/prostate-surgeries.png')}}" alt=""><span> LASER STONE AND PROSTATE SURGERIES</span></div></a>
                    </div>
                    <div class="col mb-3">
                        <a href="{{ url('male-infertility') }}"><div class="icon_services_box"><img src="{{asset('assets/images/IVF-infertility.png')}}" alt=""><span> IVF AND INFERTILITY TREATMENTS</span></div></a>
                    </div>
                    <div class="col mb-3">
                        <a href="{{ url('advanced-laparoscopic-general-surgery') }}"><div class="icon_services_box"><img src="{{asset('assets/images/laparoscopy-Laser.png')}}" alt=""><span>ADVANCED LAPAROSCOPY & LASER PROCEDURES</span></div></a>
                    </div>
                    <div class="col mb-3">
                        <a href="{{ url('DentalDepartment') }}"><div class="icon_services_box"><img src="{{asset('assets/images/dental.png')}}" alt=""><span>DENTAL TREATMENT AND PROCEDURE</span></div></a>
                    </div>

                    <div class="col mb-3">
                        <a href="{{ url('orthopaedic') }}"><div class="icon_services_box"><img src="{{asset('assets/images/ortho.png')}}" alt=""><span> ORTHOPEDICS & SPORTS INJURY</span></div></a>
                    </div>

                    <div class="col mb-3">
                        <a href="{{ url('best-ent-hospital') }}"><div class="icon_services_box"><img src="{{asset('assets/images/Ent.png')}}" alt=""> <span>ENT - COCHLEAR IMPLANT, HEAD & NECK SURGERY</span></div></a>
                    </div>

                    <div class="col mb-3">
                        <a href="{{ url('bariatric-surgery') }}"><div class="icon_services_box"><img src="{{asset('assets/images/bariatic & weightloss.png')}}" alt=""><span>BARIATRIC SURGERY & WEIGHT LOSS PROCEDURES</span></div></a>
                    </div>

                    <div class="col mb-3">
                        <a href="{{ url('neontology-and-paeds') }}"><div class="icon_services_box"><img src="{{asset('assets/images/neonatology.png')}}" alt=""><span> PEDIATRICS AND NEONATOLOGY SPECIALIST</span></div></a>
                    </div>

                    <div class="col mb-3">
                        <a href="{{ url('department-of-dermatology-cosmetology-plastic-surgery') }}"><div class="icon_services_box"><img src="{{asset('assets/images/plastic & cosmetic.png')}}" alt=""> <span> PLASTIC & COSMETIC SURGERY</span></div></a>
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
            <div class="owl-carousel owl-theme" id="home_page_doctor">
            <div class="item">
                <div class="doctor-box text-center">
                        <div class="">
                            <a href="{{ route('dr-gautam-banga') }}"><img src="{{asset('assets/images/doctors/dr-gautam-banga-new.webp')}}" class="img-fluid" alt="" /></a>
                        </div>
                        <h5 class="doctor-box-name"><a href="{{ route('dr-gautam-banga') }}">Dr. Gautam Banga</a></h5>
                        <div class="doctor-box-position">Senior Consultant</div>
                        <div class="doctor-box-text doctor_des_height_equal">
                            <p>Urologist & Andrologist (Specialist of Urethra & Penile Surgeries)</p>
                        </div>
                        <div class="doctor-box-bottom">
                            <a href="{{ route('dr-gautam-banga') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
            </div>
            <div class="item">
                <div class="doctor-box text-center">
                        <div class="">
                            <a href="{{ route('dr-lalit-bafna') }}"><img src="{{asset('assets/images/doctors/Dr-Lalit-Bafna-200x200.jpg')}}" class="img-fluid" alt="" /></a>
                        </div>
                        <h5 class="doctor-box-name"><a href="{{ route('dr-lalit-bafna') }}">Dr. Lalit Bafna</a></h5>
                        <div class="doctor-box-position">Senior Consultant</div>
                        <div class="doctor-box-text doctor_des_height_equal">
                            <p>Orthopedic, Sports & Joint Replacement Surgeon</p>
                        </div>
                        <div class="doctor-box-bottom">
                            <a href="{{ route('dr-lalit-bafna') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
            </div>
         <div class="item" >
                <div class="doctor-box text-center">
                        <div class="">
                            <a href="{{ route('dr-dhwani-mago') }}"><img src="{{asset('assets/images/doctors/Dr-Dhwani-Mago-300x300.jpg')}}" class="img-fluid" alt="" /></a>
                        </div>
                        <h5 class="doctor-box-name"><a href="{{ route('dr-dhwani-mago') }}">Dr. Dhwani Mago</a></h5>
                        <div class="doctor-box-position">Senior Consultant</div>
                        <div class="doctor-box-text doctor_des_height_equal">
                            <p>Gynaecologist & Obstetrics</p>
                        </div>
                        <div class="doctor-box-bottom">
                            <a href="{{ route('dr-dhwani-mago') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
            </div>
            <div class="item">
                <div class="doctor-box text-center">
                        <div class="">
                            <a href="{{ route('dr-sirisha-singh') }}"><img src="{{asset('assets/images/doctors/Dr-Sirisha-Singh.webp')}}" class="img-fluid" alt="dr-shrisha-singh" title="dr shrisha singh"/></a>
                        </div>
                        <h5 class="doctor-box-name"><a href="{{ route('dr-sirisha-singh') }}">Dr. Sirisha Singh</a></h5>
                        <div class="doctor-box-position">Senior Consultant</div>
                        <div class="doctor-box-text doctor_des_height_equal">
                            <p>Dermatologist & Cosmetologist</p>
                        </div>
                        <div class="doctor-box-bottom">
                            <a href="{{ route('dr-sirisha-singh') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
            </div>
            <div class="item">
                <div class="doctor-box text-center">
                        <div class="">
                            <a href="{{ route('dr-niraj-kumar-nikunj') }}"><img src="{{asset('assets/images/doctors/Niraj.jpg')}}" class="img-fluid" alt="" /></a>
                        </div>
                        <h5 class="doctor-box-name"><a href="{{ route('dr-niraj-kumar-nikunj') }}">Dr. Niraj Kumar Nikunj</a></h5>
                        <div class="doctor-box-position">Neonatology & Pediatrics Consultant</div>
                        <div class="doctor-box-text doctor_des_height_equal">
                            <p>MBBS (UCMS, Delhi)</p>
                        </div>
                        <div class="doctor-box-bottom">
                            <a href="{{ route('dr-niraj-kumar-nikunj') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
            </div>
            <div class="item">
                <div class="doctor-box text-center">
                        <div class="">
                            <a href="{{ route('dr-shivanisachdevgour') }}"><img src="{{asset('assets/images/doctors/Dr-Shivani-Sachdev-Gour.webp')}}" class="img-fluid" alt="" /></a>
                        </div>
                        <h5 class="doctor-box-name"><a href="{{ route('dr-shivanisachdevgour') }}">Dr. Shivani Sachdev Gour</a></h5>
                        <div class="doctor-box-position">Senior Consultant</div>
                        <div class="doctor-box-text doctor_des_height_equal">
                            <p>IVF & Surrogacy Specialist</p>
                        </div>
                        <div class="doctor-box-bottom">
                            <a href="{{ route('dr-shivanisachdevgour') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
            </div>
            
            <!--<div class="item">-->
            <!--    <div class="doctor-box top_spacd_bt text-center">-->
            <!--           <div class="col-sm-12 button_box text-center top_btn_Spece">-->
            <!--    <a href="{{ route('our-doctors') }}"><span>View More</span> <br><i class="icon-right-arrow"></i></a>-->
            <!--</div>-->
            <!--        </div>-->
            <!--</div>-->
            
          </div>
          
            
           
            <div class="col-sm-12 text-center">
                <a href="{{ route('our-doctors') }}" class="btn"><i class="icon-right-arrow"></i><span>View More</span><i class="icon-right-arrow"></i></a>
            </div>
        </div>
    </div>

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
                                       I am so very thankful to Dr. Dhwani Mago and SCI international Hospital for this amazing journey of becoming a mother. Everything was so smooth and perfect here. Doctors, Staff, Nurses, everyone was so helpful and professional. It feels like home. I strongly recommend SCI hospital and specially Dr. Dhwani if you are dreaming a baby. As she is so professional, humble and a doc always with a smile who gives you best advice, treatment and positivity. I toh call her angel of my journey. Thank you so much !!!
                                    </p>
                                    <p>
                                        <span class="review-author">- Farha Naz</span>
                                    </p>
                                </div>
                                <div class="review">
                                    <p class="review-text">Experience was very good, doctor know how to make patient comfortable about the treatment. The nursing and house keeping staff very trained.. I'm suffering from last six months and after done my surgery (Urethroplasty)under Dr Gautam Banga he is very professional... I recommend to Dr Gautam Banga for any urological problem and SCI hospital.</p>
                                    <p>
                                        <span class="review-author">- Satish Baghel</span>
                                    </p>
                                </div>
                                <div class="review">
                                    <p class="review-text">My wife surgery (Laparoscopic right Nephro , Ureterectomy +Bladder cuff excision done under Dr.Gautam Banga now she recovered very well and happy with hospital services and doctor...thank you team SCI and specially thanks to Dr Gautam</p>
                                    <p>
                                        <span class="review-author">- Abdurrahman Jabrah</span>
                                    </p>
                                </div>
                                <div class="review">
                                    <p class="review-text">I got my wisdom tooth removal, which was seemless by very efficient doctor Dr Amit Parashar. I am very happy with services here and would definitely recommend him for all dental related cure. Thank you Dr Parashar</p>
                                    <p>
                                        <span class="review-author">- Sadhna Atul</span>
                                    </p>
                                </div>
                                <div class="review">
                                    <p class="review-text">I got a surgery 2nd stage of Urethroplasty under Dr Gautam Banga and my recovery is going very good we are very happy, Thank to all staff & nursing staff, Specially Ms.Gurmeet & sister elcy to help us step by step. Special thanks to Dr. Gautam Banga.</p>
                                    <p>
                                        <span class="review-author">- Muhammad Anas</span>
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

                        <!--<div class="col-sm-6 col-md-4 category1">-->
                        <!--    <div class="text-center">-->
                        <!--        <div class="youtube_video">-->
                        <!--            <div class="YoutubeLazy" data-embed="YInCM4066X0">-->
                        <!--                <span class="YoutubeButton"></span>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </div>-->
                        <!--</div>-->

                        <div class="col-sm-6 col-md-4 category1">
                            <div class="text-center">
                                <div class="youtube_video">
                                    <div class="YoutubeLazy" data-embed="ZqBMHGMtlo0">
                                        <span class="YoutubeButton"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="col-sm-6 col-md-4 category1">
                            <div class="text-center">
                                <div class="youtube_video">
                                    <div class="YoutubeLazy" data-embed="iOiFEmDCBKY">
                                        <span class="YoutubeButton"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-4 category1">
                            <div class="text-center">
                                <div class="youtube_video">
                                    <div class="YoutubeLazy" data-embed="8DCoZ9kqFWg">
                                        <span class="YoutubeButton"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-6 col-md-4 category1">
                            <div class="text-center">
                                <div class="youtube_video">
                                    <div class="YoutubeLazy" data-embed="_QItowpOym0">
                                        <span class="YoutubeButton"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 text-center mt-5 mb-3">
                <a href="{{ route('our-gallery') }}" class="btn"><i class="icon-right-arrow"></i><span>View More</span><i class="icon-right-arrow"></i></a>
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
                        <div class="row specialist-carousel hospital-carousel index_gallery">
                            <div class="col-sm-12">
                                <a href="{{asset('assets/images/hos1.webp')}}" data-fancybox="gallery">
                                    <figure class="ct-hover ct-hover-type11">
                                        <img src="{{asset('assets/images/hos1.webp')}}" alt="" />
                                    </figure>
                                </a>
                            </div>
                            <div class="col-sm-12">
                                <a href="{{asset('assets/images/hos2.webp')}}" data-fancybox="gallery">
                                    <figure class="ct-hover ct-hover-type11">
                                        <img src="{{asset('assets/images/hos2.webp')}}" alt="" />
                                    </figure>
                                </a>
                            </div>
                            <div class="col-sm-12">
                                <a href="{{asset('assets/images/hos3.webp')}}" data-fancybox="gallery">
                                    <figure class="ct-hover ct-hover-type11">
                                        <img src="{{asset('assets/images/hos3.webp')}}" alt="" />
                                    </figure>
                                </a>
                            </div>
                            <div class="col-sm-12">
                                <a href="{{asset('assets/images/hos4.webp')}}" data-fancybox="gallery">
                                    <figure class="ct-hover ct-hover-type11">
                                        <img src="{{asset('assets/images/hos4.webp')}}" alt="" />
                                    </figure>
                                </a>
                            </div>
                        </div>
                        <!--<img src="{{asset('assets/images/building.webp')}}" loading="lazy" />-->
                    </div>
                    <div class="department-tabs2-bg"><img src="{{asset('assets/images/bg-department.webp')}}" alt="" loading="lazy" /></div>
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
                            <a href="{{ route('about-us') }}" class="btn"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
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
                            <a href="{{asset('assets/images/img-gallery/Recovery-Area-min-768x512.webp')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('assets/images/img-gallery/Recovery-Area-min-768x512.webp')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('assets/images/img-gallery/M1-min-768x509.webp')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('assets/images/img-gallery/M1-min-768x509.webp')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category1">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('assets/images/img-gallery/nicu3-.webp')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('assets/images/img-gallery/nicu3-.webp')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('assets/images/img-gallery/nicu.jpg')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('assets/images/img-gallery/nicu.jpg')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('assets/images/img-gallery/Deluxe-Room-min-3-768x512.webp')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('assets/images/img-gallery/Deluxe-Room-min-3-768x512.webp')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('assets/images/img-gallery/MODULAR-OT..-min-768x512.webp')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('assets/images/img-gallery/MODULAR-OT..-min-768x512.webp')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('assets/images/img-gallery/OT...-min-768x512.webp')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('assets/images/img-gallery/OT...-min-768x512.webp')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category2">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('assets/images/img-gallery/1K1A4900-min-768x512.webp')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('assets/images/img-gallery/1K1A4900-min-768x512.webp')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 category1">
                    <div class="doctor-box doctor-box-style3 text-center">
                        <div class="doctor-box-photo">
                            <a href="{{asset('assets/images/img-gallery/NICU-Staff-2.webp')}}" data-fancybox="gallery">
                                <figure class="ct-hover ct-hover-type11">
                                    <img src="{{asset('assets/images/img-gallery/NICU-Staff-2.webp')}}" alt="" width="100%" />
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-sm-12 text-center mt-4">
                <a href="{{ route('our-gallery') }}" class="btn"><i class="icon-right-arrow"></i><span>View More</span><i class="icon-right-arrow"></i></a>
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
                <a href="{{ route('our-gallery') }}" class="btn"><i class="icon-right-arrow"></i><span>View More</span><i class="icon-right-arrow"></i></a>
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
                    
                    <div class="blog-post-sm-vertical mt-3">
                        <div class="blog-post-sm">
                            <div class="blog-post-sm-photo"><img src="{{asset('assets/images/blog/types-of-pregnancy-exercises.webp')}}" alt="" class="img-fluid" loading="lazy" /></div>
                            <div class="blog-post-sm-text">
                                <!--<div class="blog-post-sm-date">Mar 28, 2020</div>-->
                                <div class="blog-post-sm-title"><a href="{{ route('what-types-of-pregnancy-exercises-are-ideal-for-a-woman') }}">What Types of Pregnancy Exercises are Ideal for a Woman</a></div>
                                <!--<a href="#" class="blog-post-sm-readmore">...</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="blog-post-sm-vertical mt-3">
                        <div class="blog-post-sm">
                            <div class="blog-post-sm-photo"><img src="{{asset('assets/images/blog/tips-for-normal-delivery.webp')}}" alt="" class="img-fluid" loading="lazy" /></div>
                            <div class="blog-post-sm-text">
                                <!--<div class="blog-post-sm-date">Mar 28, 2020</div>-->
                                <div class="blog-post-sm-title"><a href="{{ route('tips-for-normal-delivery') }}">Tips for Normal Delivery</a></div>
                                <!--<a href="#" class="blog-post-sm-readmore">...</a>-->
                            </div>
                        </div>
                    </div>
                    <div class="blog-post-sm-vertical mt-3 mb-3">
                        <div class="blog-post-sm">
                            <div class="blog-post-sm-photo"><img src="{{asset('assets/images/blog/620x349-2.webp')}}" alt="" class="img-fluid" loading="lazy" /></div>
                            <div class="blog-post-sm-text">
                                <!--<div class="blog-post-sm-date">Mar 28, 2020</div>-->
                                <div class="blog-post-sm-title">
                                    <a href="{{ route('know-the-correct-sitting-postures-during-1st-trimester-2nd-trimester-and-3rd-trimester-of-pregnancy') }}">
                                        Know the Correct Sitting Postures during Pregnancy: 1st Trimester, 2nd Trimester and 3rd Trimester
                                    </a>
                                </div>
                                <!--<a href="#" class="blog-post-sm-readmore">...</a>-->
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
            <div class="col-lg-6 ">
               <div class="blog_big">
                   <img src="{{asset('assets/images/blog/which-type-of-hypospadias-is-the-most-severe.png')}}" alt="" class="img-fluid" loading="lazy" />
                   <div class="blog-post-sm-title">
                                    <a href="{{ route('which-type-of-hypospadias-is-the-most-severe') }}">
                                      Which type of hypospadias is the most severe?
                                    </a>
                                </div>
                                <p>Hypospadias is a congenital anomaly that affects approximately 1 in every 200 male births. It is a condition where the urethral opening is not located at the tip of the penis but is situated on the underside of the penis. </p>
                 
              <a href="{{ route('which-type-of-hypospadias-is-the-most-severe') }}" style="color:black"><b>Read More</b></a>
                </div>
            </div>
            
            <div class="col-sm-12 text-center mt-4">
                <a href="{{ route('blog') }}" class="btn"><i class="icon-right-arrow"></i><span>View More</span><i class="icon-right-arrow"></i></a>
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
                        <!--<img src="{{asset('assets/images/content/banner-appointment.png')}}" alt="" class="banner-appointment-form-image" />-->
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

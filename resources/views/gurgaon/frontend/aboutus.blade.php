@extends('gurgaon.frontend.layouts.main')
@section('main-container')


</head>
<body>
    
    
    
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('gurgaon.index') }}">Home</a>
                    <span>About Us</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first mt-2">
        <div class="container">
            <div class="text-center mb-2 mb-md-3 mb-lg-4">
                <!--<div class="h-sub theme-color">Duis aute irure dolor in reprehenderit</div>-->
                <h1 class="h2">WHO WE ARE</h1>
                <div class="h-decor"></div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 text-center pr-md-4 doc_about_sec">
                    <img src="{{asset('public_gurgaon/assets/images/SHIVANI.jpg')}}" class="w-100" alt="SHIVANI" />
                    <h4>DR SHIVANI SACHDEV GOUR</h4>
                    <p>Founder & Medical Director At SCI</p>
                </div>
                <div class="col-lg-3 text-center pr-md-4 doc_about_sec">
                    <img src="{{asset('public_gurgaon/assets/images/VISHAL.jpg')}}" class="w-100" alt="VISHAL" />
                    <h4>DR VISHAL DUTT GOUR</h4>
                    <p>Founder & Medical Director At SCI</p>
                </div>
                <div class="col-lg-6 mt-3 mt-lg-0">
                    <p>
                        SCI International Hospital is a 50 beded fully NABH, state-of-the-art super speciality surgical centre, fully devoted to delivering high-quality healthcare. We have highly experienced doctors, surgeons and caretaking
                        staff to attend to the personalized treatment and aftercare needs of every patient. It is a Centre of Excellence for Urology & Andrology,IVF & Fertility, Gynaecology and obstetrics, Advanced Laproscopic Surgeries,
                        Orthopaedics,Joint Replacement & Sports Injury, ENT & Cochlear Implant With Speech Theraphy, Neonatology, Ophthalmology, dentistry & Orthodontics. At SCI, we have the most advanced technology and the latest
                        equipment, as well as reliable facilities and support services available for our international patients.
                    </p>
                    <ul class="marker-list-md">
                        <li>50 beds, out of which 15 are critical care beds</li>
                        <li>4 state of the art modular OTs</li>
                        <li>Medical service provider to numerous embassies in Delhi</li>
                        <li>Fully NABH accredited Hospital</li>
                        <li>Treated more than 50,000 patients from 6 continents.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->

    <!--section-->
    <div class="section bg-grey mt-3">
        <div class="container">
            <!--<div class="title-wrap text-center">
				<div class="h-sub theme-color">dolor in reprehenderit</div>
				<h2 class="h1">Duis aute irure</h2>
				<div class="h-decor"></div>
			</div>-->
            <div class="row js-icn-carousel icn-carousel flex-column flex-sm-row text-center text-sm-left" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}]}'>
                <div class="col-md">
                    <div class="icn-text">
                        <div class="icn-text-simple"><i class="icon-innovation"></i></div>
                        <div>
                            <h5 class="icn-text-title">Mission</h5>
                            <p>To dedicate years of expertise towards helping our patients on the path to a healthy and happy life with highly advanced technologies.</p>
                            <!--<p>Exceptional Care with Compassion</p>-->
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="icn-text">
                        <div class="icn-text-simple"><i class="icon-compassion"></i></div>
                        <div>
                            <h5 class="icn-text-title">Vision</h5>
                            <p>To position the organization as a leader providing Affordable and Quality Healthcare Services based on sound scientific principles. Providing expert care by highly trained professionals along with best hygiene practices.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="icn-text">
                        <div class="icn-text-simple"><i class="icon-integrity"></i></div>
                        <div>
                            <h5 class="icn-text-title">Values</h5>
                            <p>Personalized care at affordable cost Patient centric approach : Committed to patient’s needs Innovation : Continuously improving patients experience Team work : Together Everyone Achieves More</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->

    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="text-center">
                <div class="title-wrap">
                    <h3 class="h3 mb-2">THE PERFECT <span class="theme-color">SPECIALISTS TEAM</span></h3>
                    <div class="h-decor"></div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="doctor_ab">
                        <img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Mamta-Goel-1.png')}}" class="w-100" alt="" />
                        <h5 class="name_ab_doc">Dr. Mamta Goel</h5>
                    </div>
                </div>
                <!--<div class="col-lg-3 col-md-6 text-center">
                    <div class="doctor_ab">
                        <img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Someshwar-Singh-2.png')}}" class="w-100" alt="" />
                        <h5 class="name_ab_doc">Dr. Shomeshwar Singh</h5>
                    </div>
                </div>-->
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="doctor_ab">
                        <img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Gautam-Banga-2.png')}}" class="w-100" alt="" />
                        <h5 class="name_ab_doc">Dr. Gautam Banga</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 text-center">
                    <div class="doctor_ab">
                        <img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Vishal-Dutt-Gour-1.png')}}" class="w-100" alt="" />
                        <h5 class="name_ab_doc">Dr. Vishal Dutt Gour</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section  bg-grey">
        <div class="container px-0">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="mx-lg-auto px-15">
                        <div class="title-wrap text-center">
                            <h3 class="h3 mb-2">Advanced <span class="theme-color">Treatments Available</span></h3>
                            <div class="h-decor"></div>
                        </div>
                        <!--<div class="title-wrap">
                            <h3 class="h3">Advanced <span class="theme-color">Treatments Available</span></h3>
                        </div>-->
                       
                        <div class="row">
                            <div class="col-sm-7">
                                <ul class="marker-list-md">
                                    <li>The first centre in north India with Revolix 200W Thulium laser for Prostate surgery</li>
                                    <li>Advanced bariatric and laparoscopic (keyhole) surgeries with smallest 3mm incisions</li>
                                    <li>Centre of Excellence for reconstructive Urology</li>
                                    <li>Surgeons performing the highest number of urethroplasties in North India annually (>50)</li>
                                    <li>100 watt Holmium laser for kidney stone surgery and Laser Prostate surgery</li>
                                    <li>Men’s Health Clinic specialising in Male Infertility and Erectile Dysfunction</li>
                                    <li>Doing a large number of Penile Implant surgeries for Erectile Dysfunction (ED)</li>
                                    <li>Only NABH Accredited Hospital in Delhi offering Medical Examination of Sailors as Certified by DG Shipping, Govt of India.</li>
                                    <li>Offering latest cell-based Orthbiologics treatment to avoid joint replacement surgeries in Osteoarthritis</li>
                                </ul>
                            </div>
                            <div class="col-sm-5 mt-1 mt-sm-0">
                                <ul class="marker-list-md">
                                    <li>Novel Shockwave Therapy for Erectile Dysfunction (ED)</li>
                                    <li>Among the first dedicated IVF centres in Delhi</li>
                                    <li>Successfully delivered over 5500 babies from over 55 countries</li>
                                    <li>Level III NICU has successfully discharged >100 babies born with birth weight under 800 gms safely</li>
                                    <li>Carl Zeiss Operating Microscope for Microsurgical Procedures</li>
                                    <li>Pioneer in Micro- TESE treatment – have successfully extracted viable sperms from many azoospermic individuals and achieving pregnancy and live births</li>
                                    <li>Dedicated hearing clinic Offering Audiometry BERA, ISIS, ARB and speech Therapy under one roof.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="col-xl-6 banner-left bg-full" style="background-image: url(public/assets/images/content/banner-right-1.jpg);"></div>-->
            </div>
        </div>
    </div>
    <!--//section-->
    

    <!--section-->
 <!--   <div class="section">
        <div class="container-fluid px-0">
            <div class="banner-center bg-cover" style="background-image: url(images/background/about-us.jpg);">
                <div class="banner-center-caption text-center">
                    <div class="banner-center-text1">Duis aute irure dolor in reprehenderit</div>
                    <div class="banner-center-text2">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</div>
                    <a href="#" class="btn btn-white mt-5" data-toggle="modal" data-target="#modalBookingForm"><i class="icon-right-arrow"></i><span>Request an Appointment</span><i class="icon-right-arrow"></i></a>
                </div>
            </div>
        </div>
    </div>-->
    <!--section-->
    <!--section-->
    <div class="section about-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="title-wrap">
                        <h3 class="h3 mb-2">CONTACT US</h3>
                        <div class="h-decor"></div>
                    </div>
                    <form action="{{ url('contact-form') }}" class="contact-form forms" id="" method="post" novalidate="novalidate">
                        @csrf
						<div class="successform">
							<p>Your message was sent successfully!</p>
						</div>
						<div class="errorform">
							<p>Something went wrong, try refreshing and submitting the form again.</p>
						</div>
						<div>
							<input type="text" class="form-control" name="name" placeholder="Your name*">
						</div>
						<div class="mt-15">
							<input type="text" class="form-control" name="email" placeholder="Email*">
						</div>
						<div class="mt-15">
							<input type="text" class="form-control" name="phone" placeholder="Your Phone">
						</div>
						<div class="mt-15">
							<textarea class="form-control" name="message" placeholder="Message"></textarea>
						</div>
						<div class="mt-3">
						    <input type="hidden" name="subject" value="Contact Inquiry">
							<button type="submit" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>Send message</span><i class="icon-right-arrow"></i></button>
						</div>
					</form>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d28037.288409311455!2d77.234013!3d28.549906!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x96728b689c533cc3!2sSCI%20International%20Hospital!5e0!3m2!1sen!2sin!4v1645603623259!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    <!--<div class="slider-gallery">
                        <ul class="slider-gallery-main list-unstyled js-slider-gallery-main">
                            <li><img src="images/content/slider-gallery-00.jpg" alt="" /></li>
                            <li><img src="images/content/slider-gallery-01.jpg" alt="" /></li>
                            <li><img src="images/content/slider-gallery-02.jpg" alt="" /></li>
                            <li><img src="images/content/slider-gallery-03.jpg" alt="" /></li>
                            <li><img src="images/content/slider-gallery-04.jpg" alt="" /></li>
                            <li><img src="images/content/slider-gallery-05.jpg" alt="" /></li>
                        </ul>
                        <ul class="slider-gallery-thumbs list-unstyled js-slider-gallery-thumbs">
                            <li><img src="images/content/slider-gallery-00-sm.jpg" alt="" /></li>
                            <li><img src="images/content/slider-gallery-01-sm.jpg" alt="" /></li>
                            <li><img src="images/content/slider-gallery-02-sm.jpg" alt="" /></li>
                            <li><img src="images/content/slider-gallery-03-sm.jpg" alt="" /></li>
                            <li><img src="images/content/slider-gallery-04-sm.jpg" alt="" /></li>
                            <li><img src="images/content/slider-gallery-05-sm.jpg" alt="" /></li>
                        </ul>
                    </div>-->
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection
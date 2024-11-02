@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')
<link href="https://cdnjs.cloudflare.com/ajax/libs/country-select-js/2.1.0/css/countrySelect.min.css" rel="stylesheet" />
<style>
    .country-select.inside {
    max-width: 100% !IMPORTANT;
    width: 100%;
}
</style>


</head>
<body>
    
    
  

<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('/') }}">Home</a>
                    <span>International Patients</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    
    <!--section-->
    <div class="section page-content-first ">
        <div class="container">
            <h3 class="h2">Why SCI International Hospital?</h3>
            <div class="mt-3 mt-lg-6"></div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <p class="img_content">
                        <img src="{{asset('assets/images/internationalpatients/Fully NABH Hospital (Govt. of India accreditation for Quality Treatments).png')}}" class="img-fluid" alt="" /> Fully NABH Hospital (Govt. of India accreditation for Quality Treatments)
                    </p>
                    <!--<div class="">
                        <ul class="international-list">
                            <li><img src="{{asset('assets/images/internationalpatients/Fully NABH Hospital (Govt. of India accreditation for Quality Treatments).png')}}" class="img-fluid" alt="" /> Fully NABH Hospital (Govt. of India accreditation for Quality Treatments)</li>
                        </ul>
                    </div>-->
                </div>

                <div class="col-md-3 mb-3">
                    <p class="img_content">
                        <img src="{{asset('assets/images/internationalpatients/Internationally Trained Doctors.png')}}" class="img-fluid" alt="" /> Internationally Trained Doctors
                    </p>
                    <!--<div class="marker-list-md">
                        <ul class="international-list marker-list-md">
                            <li>Internationally Trained Doctors</li>
                        </ul>
                    </div>-->
                </div>
                <div class="col-md-3 mb-3">
                    <p class="img_content">
                        <img src="{{asset('assets/images/internationalpatients/Economical Price compared to other Hospital in Delhi.png')}}" class="img-fluid" alt="" /> Economical Price compared to other Hospital in Delhi
                    </p>
                </div>
                <div class="col-md-3 mb-3">
                     <p class="img_content">
                        <img src="{{asset('assets/images/internationalpatients/Latest Technique for Best Treatment Result.png')}}" class="img-fluid" alt="" /> Latest Technique for Best Treatment Result
                    </p>
                </div>
                <div class="col-md-3 mb-3">
                    <p class="img_content">
                        <img src="{{asset('assets/images/internationalpatients/Best Laser & Microscopes.png')}}" class="img-fluid" alt="" /> Best Laser & Microscopes
                    </p>
                </div>
                <div class="col-md-3 mb-3">
                    <p class="img_content">
                        <img src="{{asset('assets/images/internationalpatients/State of the Art Ultra-Modern OT’s.png')}}" class="img-fluid" alt="" /> State of the Art Ultra-Modern OT’s
                    </p>
                </div>
                <div class="col-md-3 mb-3">
                    <p class="img_content">
                        <img src="{{asset('assets/images/internationalpatients/Spacious Private Room & Suites.png')}}" class="img-fluid" alt="" /> Spacious Private Room & Suites
                    </p>
                </div>
                <div class="col-md-3 mb-3">
                    <p class="img_content">
                        <img src="{{asset('assets/images/internationalpatients/Well Trained Medical Staff & Nursing.png')}}" class="img-fluid" alt="" /> Well Trained Medical Staff & Nursing
                    </p>
                </div>
            </div>
        </div>

        <div class="container mt-6">
            <h3>Document Needed</h3>
            <div class="mt-3 mt-lg-6"></div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <p class="img_content">
                        <img src="{{asset('assets/images/internationalpatients/Old Medical reports.png')}}" class="img-fluid" alt="" /> Old Medical reports
                    </p>
                </div>

                <div class="col-md-4 mb-3">
                    <p class="img_content">
                        <img src="{{asset('assets/images/internationalpatients/VISA.png')}}" class="img-fluid" alt="" /> Visa
                    </p>
                </div>
                <div class="col-md-4 mb-3">
                    <p class="img_content">
                        <img src="{{asset('assets/images/internationalpatients/Passport.png')}}" class="img-fluid" alt="" /> Passport
                    </p>
                </div>
                <div class="col-md-4 mb-3">
                    <p class="img_content">
                        <img src="{{asset('assets/images/internationalpatients/Copy of the quotation & treatment plan provided by SCI.png')}}" class="img-fluid" alt="" /> Copy of the quotation & treatment plan provided by SCI
                    </p>
                </div>
                <div class="col-md-4 mb-3">
                    <p class="img_content">
                        <img src="{{asset('assets/images/internationalpatients/Photograph (Passport Size).png')}}" class="img-fluid" alt="" /> Photograph (Passport Size)
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    
    <!--section-->
    <div class="section bg-grey">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="doctor-page-photo text-center">
                        <img src="{{asset('assets/images/services/international.png')}}" class="img-fluid" alt="" />
                    </div>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <div class="international-patient mb-3">
                        <h4 class="mb-0">Why India?</h4>

                        <p>
                            India is well connected with all the major airports in the world. Apart from excellent medical facilities at affordable prices, India has a lot of tourist destinations that should be in anyone’s bucket list. SCI
                            International Hospital is located in Delhi and is close to major hill stations. If you are traveling for your medical needs to India, our expert can help you plan your travel.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    
    <!--section-->
    <div class="section international-center pb-70">
        <div class="container">
            <div class="text-center">
                <div class="title-wrap">
                    <h3 class="h3">Get an Estimate</h3>
                    <div class="h-decor"></div>
                </div>
            </div>
            <div class="mt-lg-6"></div>
            <form class="contact-form forms" action="{{ url('international-patients') }}" method="post" novalidate="novalidate">
                @csrf
                <div class="row">
                    <div class="col-md col-lg-6">
                        <div class="pr-0 pr-lg-8">
                            <div class="successform">
                                <p>Your message was sent successfully!</p>
                            </div>
                            <div class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <div>
                                <input type="text" class="form-control" name="name" placeholder="Name Of Patients*" />
                            </div>
                            <div class="mt-15">
                                <input type="text" class="form-control" name="age" placeholder="Age*" />
                            </div>
                            <div class="mt-15">
                                <select name="gender" class="form-control" aria-invalid="false">
                                    <option value="">Select Gender</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </div>
                            <div class="mt-15">
                                <input type="text" class="form-control" name="phone" placeholder="Your Phone" />
                            </div>
                            <div class="mt-15">
                                <input type="email" class="form-control" name="email" placeholder="Your Email" />
                            </div>
                            <div class="mt-15">
                                <input name="country" type="text" id="country" class="form-control" />
                                <input type="hidden" id="country_code" class="form-control" />
                                <!--<select name="country" class="form-control" aria-invalid="false">-->
                                <!--    <option value="">Select Your Country</option>-->
                                <!--    <option value="Antigua and Barbuda">Antigua and Barbuda</option>-->
                                <!--    <option value="Austria">Austria</option>-->
                                <!--    <option value="India">India</option>-->
                                <!--    <option value="Benin">Benin</option>-->
                                <!--    <option value="Costa Rica">Costa Rica</option>-->
                                <!--    <option value="Cuba">Cuba</option>-->
                                <!--    <option value="Djibouti">Djibouti</option>-->
                                <!--    <option value="El Salvador">El Salvador</option>-->
                                <!--    <option value="Ghana">Ghana</option>-->
                                <!--    <option value="Guinea">Guinea</option>-->
                                <!--    <option value="Jamaica">Jamaica</option>-->
                                <!--    <option value="Kuwait">Kuwait</option>-->
                                <!--    <option value="Luxembourg">Luxembourg</option>-->
                                <!--    <option value="Mauritius">Mauritius</option>-->
                                <!--    <option value="Monaco">Monaco</option>-->
                                <!--    <option value="Nauru">Nauru</option>-->
                                <!--    <option value="Netherlands">Netherlands</option-->
                                <!--    <option value="Oman">Oman</option>-->
                                <!--    <option value="Pakistan">Pakistan</option>-->
                                <!--    <option value="Panama">Panama</option>-->
                                <!--    <option value="Qatar">Qatar</option>-->
                                <!--    <option value="San Marino">San Marino</option>-->
                                <!--    <option value="Senegal">Senegal</option>-->
                                <!--</select>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-md col-lg-6 mt-4 mt-md-0">
                        <div class="successform">
                            <p>Your message was sent successfully!</p>
                        </div>
                        <div class="errorform">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <!--div>
                            <input type="text" class="form-control" name="name" placeholder="Contact No*" />
                        </div-->
                        <div class="mt-15">
                            <label>Select Medical Procedure</label>
                            <input type="file" class="form-control" name="image1" placeholder="Select Medical Procedure*" />
                        </div>
                        <div class="mt-15">
                            <label>Upload your documents/scans etc.</label>
                            <input type="file" class="form-control" name="image2" placeholder="Upload your documents/scans etc." />
                        </div>
                        <div class="mt-15">
                            <label>Upload Last Medical Prescription</label>
                            <input type="file" class="form-control" name="image3" placeholder="Choose file" />
                        </div>
                        <div class="mt-15">
                            <input type="text" class="form-control" name="Comments" placeholder="Comments" />
                        </div>
                        <div class="mt-3">
                            <input type="hidden" name="subject" value="International Patients">
                            <button type="submit" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>Send</span><i class="icon-right-arrow"></i></button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--//section-->
    <div class="section">
        <div class="container">
            <div class="row">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7009.322102327864!2d77.234013!3d28.549906!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x96728b689c533cc3!2sSCI%20International%20Hospital!5e0!3m2!1sen!2sin!4v1634539072099!5m2!1sen!2sin"
                    width="100%"
                    height="400"
                    style="border: 0;"
                    allowfullscreen=""
                    loading="lazy"
                ></iframe>
            </div>
        </div>
    </div>

    <!--section-->
    <div class="section pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md mt-3 col-lg-12">
                    <div class="pr-0 pr-lg-8">
                        <div class="title-wrap">
                            <h3>Facilities for International Patients</h3>
                            <div class="h-decor"></div>
                        </div>
                        
                        <div id="faqAccordion1" class="faq-accordion" data-children=".faq-item">
                        <div class="faq-item">
                            <a><span>1.</span>24×7 Help Desk</a>
                            
                        </div>
                        <div class="faq-item">
                            <a><span>2.</span>All Queries on whatsapp / Mail / Facebook / IMO / Viber</a>
                            
                        </div>
                        <div class="faq-item">
                            <a><span>3.</span>Feedback</a>
                            
                        </div>
                    </div>

                        <div class="doctor-box-bottom top_border_none">
                            <a href="{{ route('make-an-appointment') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Book An Appointment</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p>Our International Patients Team ensures providing you with world class quality of service to make your medical journey hassle free for you and your family.</p>
                    <div class="marker-list-md">
                        <ul class="marker-list-md">
                            <li>Providing detailed medical opinion and tele-consultation with our team of doctors before arrival</li>
                            <li>Assistance with Visa Services</li>
                            <li>Complimentary two way airport transfers</li>
                            <li>A dedicated relationship manager is assigned to each patient to take care of all you needs inside the hospital and to assist you with hospital administrative processes</li>
                            <li>Payments can be done either via cash, credit card or online Transfer</li>
                            <li>International Concierge Desk at dedicated international lounge with help to arrange for a hotel/guest house as per your preference. Translators available for International Patients at Hospital</li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-sm-12">
                    


                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="text-center">
                    <div class="title-wrap">
                        <h3 class="h3">What Our Patients Are Saying</h3>
                        <div class="h-decor"></div>
                    </div>
                </div>
                </div>
                <div class="col-md-3">
                    <div class="youtube_video">
                            <div class="YoutubeLazy" data-embed="O9vH1FuwVa8">
                                <span class="YoutubeButton"></span>
                            </div>
                         </div>
                </div>
                <div class="col-md-3">
                    <div class="youtube_video">
                            <div class="YoutubeLazy" data-embed="M8AXv3SlkQ0">
                                <span class="YoutubeButton"></span>
                            </div>
                         </div>
                </div>
                <div class="col-md-3">
                    <div class="youtube_video">
                            <div class="YoutubeLazy" data-embed="eCPftvsb_Wk">
                                <span class="YoutubeButton"></span>
                            </div>
                         </div>
                </div>
                <div class="col-md-3">
                    <div class="youtube_video">
                            <div class="YoutubeLazy" data-embed="3f0f6jS-8ko">
                                <span class="YoutubeButton"></span>
                            </div>
                         </div>
                </div>
            </div>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-12 mt-20">
                            <h3 class="theme-color">SCI International Hospital Images </h3>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Dr-Asif-in-OT-2.png')}}" class="w-100" alt="" />
                                        <h6 class="name_ab_doc">OT During Surgery</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/LITHOTRIPSY..STONE-MANAGEMENT-WITHOUT-SURGERY.png')}}" class="w-100" alt="" />
                                        <h6 class="name_ab_doc">OT</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Single-Room-SCI-Hopsital.jpg')}}" class="w-100" alt="" />
                                        <h6 class="name_ab_doc">Single Room</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Deluxe-ROOM-1.png')}}" class="w-100" alt="" />
                                        <h6 class="name_ab_doc">Deluxe Room</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Pt-waiting-Area1-1.png')}}" class="w-100" alt="" />
                                        <h6 class="name_ab_doc">Patient Waiting Area</h6>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Pt-Waiting-Area-1.png')}}" class="w-100" alt="" />
                                        <h6 class="name_ab_doc">Patient Waiting Area</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>




@endsection



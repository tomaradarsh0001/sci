@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')

</head>
<body>
    
    
  
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('/') }}">Home</a>
                    <a href="#">Our Specialists</a>
                    <span>Regenerative Medicine & Stem Cell</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section pb-70 services_sec">
        <div class="container">
            <div class="row">
                
                <div class="col-md-8 col-lg-8 mt-md-0">
                    <div class="title-wrap">
                        <h1 class="theme-color">Department of Stem Cell and Regenerative Medicine</h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('assets/images/banner/Stem-Cell-Treatment-at-SCI-Hospital.png')}}" class="img-fluid" alt="" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>We at SCI’s Department of Stem Cells and Regenerative Medicine strive to provide treatments to the people suffering from such diseased conditions for which the conventional medicine practice has limitations. The department works hand in hand with the biotechnology researchers and clinicians for the better management of the diseases and is focussed towards bringing the research, from bench side to bedside, by utilizing the potential of the stem cells and autologous cell-based therapies in improving the quality of life for the patients suffering from such diseased conditions.  </p>
                        
                        <p><strong>Conditions where autologous stem cell-based therapies have proved to be beneficial include :</strong></p>
                        <ul class="services_list">
                            <li><i class="fa fa-check"></i> Female Infertility (Thin Endometrium, Poor Ovarian Reserve and Asherman Syndrome)</li>
                            <li><i class="fa fa-check"></i> Male Infertility (Azoospermia, Oligospermia and Erectile Dysfunction)</li>
                            <li><i class="fa fa-check"></i> Orthopedic Conditions and Sports Injuries (Osteoarthritis, Avascular Necrosis, Plantar Fasciitis, and Early Spinal Cord Injuries)</li>
                            <li><i class="fa fa-check"></i> Multiple Sclerosis</li>
                            <li><i class="fa fa-check"></i> Auto-Immune Conditions (Rheumatoid Arthritis and diabetes)</li>
                            <li><i class="fa fa-check"></i> Non-Healing Wounds/Ulcers</li>
                        </ul>
                        
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-12 mt-20">
                            <p class="theme-color font-heading-bold">Our Doctor</p>

                            <div class="row">
                                
                                <div class="col-sm-12 text-center mt-3">
                                    <a href="tel:9999446622" class="btn"><i class="icon-right-arrow"></i><span>Call Doctor </span><i class="icon-right-arrow"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 mt-20">
                            <p class="theme-color font-heading-bold">Image Gallery</p>
                            <div class="row">
                                
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/OT-at-SCI-Hospital.jpg')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">OT</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Single-Room-SCI-Hopsital.jpg')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Single Room</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Deluxe-ROOM-1.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Deluxe Room</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Pt-waiting-Area1-1.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Patient Waiting Area</p>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 text-center">
                                    <div class="images_gallery_ab">
                                        <img src="{{asset('assets/images/img-gallery/Pt-Waiting-Area-1.png')}}" class="w-100" alt="" />
                                        <p class="name_ab_doc">Patient Waiting Area</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        
                        
                    </div>
              
                </div>
                <div class="col-md-4 col-lg-4">
                    <div class="question-box mb-3">
                        <p class="theme-color font-heading-bold">Consult Now</p>
                        <form action="{{ url('online-consultation') }}" class="mt-15 forms" id="" method="post" novalidate="novalidate">
                            @csrf
                            <div class="successform">
                                <p>Your message was sent successfully!</p>
                            </div>
                            <div class="errorform">
                                <p>Something went wrong, try refreshing and submitting the form again.</p>
                            </div>
                            <input type="text" class="form-control" name="name" placeholder="Your name*" />
                            <input type="text" class="form-control" name="email" placeholder="E-mail*" />
                            <input type="text" class="form-control" name="phone" placeholder="Phone" />
                            <textarea class="form-control" name="message" placeholder="Question*"></textarea>
                            <input type="hidden" name="subject" value="stemcellandregenerativemedicine" />
                            <button type="submit" class="btn btn-sm btn-hover-fill mt-15">Ask Now <i class="fa fa-spinner fa-spin" style="display: none;"></i></button>
                    
                            
                        </form>
                    </div>
                    <!--services-->
                    @include('frontend.layouts.servicesside')
                    <!--//services-->
                     <div class="row d-flex flex-column flex-sm-row flex-md-column mt-3">
   
    <div class="col-auto col-sm col-md-auto">
        <div class="contact-box contact-box-2">
            <p class="contact-box-title services-side-heading">Contact Info</p>
            <ul class="icn-list">
                <li>
                    <i class="icon-telephone"></i>
                    <div class="d-flex flex-wrap"><a href="tel:9999446622">+91 9999446622 (For Appointment), </a> <a href="tel:01141675555">011 4167 5555 (For General Queries)</a></div>
                </li>
                <li><i class="icon-placeholder2"></i>M 4, Near M Block Market, Greater Kailash-1, New Delhi, 110048</li>
            </ul>
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


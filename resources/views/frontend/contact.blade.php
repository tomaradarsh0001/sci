@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')
<style>
    input::-webkit-outer-spin-button,
            input::-webkit-inner-spin-button {
                -webkit-appearance: none;
                margin: 0;
            }

            input[type="number"] {
                -moz-appearance: textfield;
            }
            .contact_list li
            {
                display:flex;
            }
            ul.icn-list-lg li > [class*="icon"] {
   
    left: -15px;
    
}
</style>
</head>
<body>
    
    
  
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="contact-map">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7009.320837669845!2d77.234185!3d28.549925!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x96728b689c533cc3!2sSCI%20International%20Hospital!5e0!3m2!1sen!2sin!4v1646374443953!5m2!1sen!2sin"
                allowfullscreen=""
            ></iframe>
        </div>
    </div>
    <!--//section-->

    <!--section-->
    <div class="section">
        <div class="container">
            <div class="row pb-5">
                <div class="col-md col-lg-5">
                    <div class="pr-0 pr-lg-8">
                        <div class="title-wrap">
                            <h2>GET IN TOUCH</h2>
                            <div class="h-decor"></div>
                        </div>
                        <h4>Greater Kailash, Delhi:</h4>
                        <ul class="icn-list-lg mt-2 contact_list">
                            <li><i class="icon-placeholder2"></i> M-4 & M-8, Near M Block, Greater Kailash-1, New Delhi 110048</li>
                            <li><i class="icon-telephone"></i>Phone&nbsp;  :&nbsp;  <span class="theme-color"><span class="text-nowrap"><a href="tel:+91-9999446622">+91-9999446622 </a> (For Appointment) </span> </span></li>
                            <li><span class="theme-color"><span class="text-nowrap"><a href="tel:+91-011-41041131">+91-011-41041131/2/3/4   </a>(For General Queries) </span> </span></li>
                            
                        
                            <li>Fax: &nbsp; <span class="theme-color"><span class="text-nowrap"><a href="tel:011 4167 5555">011 4167 5555 </a>  </span> </span></li>
                           
                            
                        </ul>
                        <h4 class="mt-3">Gurgaon, Haryana:</h4>
                        <ul class="icn-list-lg mt-2 contact_list">
                            <li><i class="icon-placeholder2"></i> Plot No. 7, Golf Course Rd, Sector 43, Gurugram, Haryana 122002</li>
                            <li><i class="icon-telephone"></i>Phone&nbsp;  :&nbsp;  <span class="theme-color"><span class="text-nowrap"><a href="tel:+91-9354471022">+91-9354471022 </a> (For Appointment) </span> </span></li>
                            <li><span class="theme-color"><span class="text-nowrap"><a href="tel:+911246948701">+91-124-6948701   </a> (For General Queries) </span> </span></li>
                            <li><i class="icon-link-symbol"></i><a href="https://scihospital.com/ ">https://scihospital.com/ </a></li>
                        </ul>
                        <div class="mt-2 mt-md-5"></div>
                        <h5>Stay Connected</h5>
                        <div class="content-social mt-15">
                            <a href="https://www.facebook.com/scihospitalofficial" target="_blank" class="hovicon"><i class="fa fa-facebook"></i></a>
                    <a href="https://www.instagram.com/scihospital/" target="_blank" class="hovicon"><i class="fa fa-instagram"></i></a>
                    <a href="https://www.youtube.com/c/SCIHospital" target="_blank" class="hovicon"><i class="fa fa-youtube"></i></a>
                    <a href="https://in.linkedin.com/company/scihospital" target="_blank" class="hovicon"><i class="fa fa-linkedin"></i></a>
                    <a href="https://twitter.com/scihospital_" target="_blank" class="hovicon"><img src="{{asset('assets/images/twitter.webp')}}" width="20" height="20" alt="" class="img-fluid" loading="lazy" /></a>
                        </div>
                    </div>
                </div>
                <div class="col-md col-lg-6 mt-4 mt-md-0">
                    <form action="{{ url('contact-form') }}" class="contact-form forms" id="" method="post" novalidate="novalidate">
                        @csrf
                        <div class="successform">
                            <p>Your message was sent successfully!</p>
                        </div>
                        <div class="errorform">
                            <p>Something went wrong, try refreshing and submitting the form again.</p>
                        </div>
                        <div>
                            <input type="text" class="form-control" name="name" placeholder="Your name*" />
                        </div>
                        <div class="mt-15">
                            <input type="text" class="form-control" name="email" placeholder="Email*" />
                        </div>
                        <div class="mt-15">
                            <input type="number" class="form-control" name="phone" placeholder="Your Phone" />
                        </div>
                        <div class="mt-15">
                            <textarea class="form-control" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="mt-3">
                            <input type="hidden" name="subject" value="Contact Inquiry">
                            <button type="submit" class="btn btn-hover-fill"><span>Send message</span><i class="icon-right-arrow"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

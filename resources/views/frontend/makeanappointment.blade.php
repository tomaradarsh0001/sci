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
</style>
</head>
<body>
    
    
  
<div class="page-content">
    <!--//section-->

    <!--section-->
    <div class="section pb-70">
        <div class="container">
            <div class="row">
                <div class="col-md col-lg-6">
                    <div class="pr-0 pr-lg-8">
                        <div class="title-wrap">
                            <h2>Book An Appointment</h2>
                            <div class="h-decor"></div>
                        </div>
                        <div class="mt-2 mt-lg-4">
                            <p>
                                SCI International Hospital is a 50 beded fully NABH, state-of-the-art super speciality surgical centre, fully devoted to delivering high-quality healthcare. We have highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment and aftercare needs of every patient. 
                            </p>
                            <p class="p-sm"><b>Fields marked with a * are required.</b></p>
                        </div>
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
                    <div class="app_form_style">
                        <form action="{{ url('book-appointment-services') }}" class="contact-form forms" id="" method="post" novalidate="novalidate">
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
                            <select class="form-control" name="services">
                                <option>--Select Service-- </option>
                                <option value="Urology And Andrology">Urology And Andrology</option>
                                <option value="Kidney Stone Treatment">Kidney Stone Treatment</option>
                                <option value="Enlarged Prostate Treatment">Enlarged Prostate Treatment</option>
                                <option value="Hypospadias Surgery and Treatment">Hypospadias Surgery and Treatment</option>
                                <option value="Urethroplasty">Urethroplasty</option>
                                <option value="Penile Curvature">Penile Curvature</option>
                                <option value="Urinary Incontinence">Urinary Incontinence</option>
                                <option value="Male Infertility Treatment">Male Infertility Treatment</option>
                                <option value="Erectile Dysfunction Treatment">Erectile Dysfunction Treatment</option>
                                <option value="Dental implants & Orthodontics">Dental implants & Orthodontics</option>
                                <option value="Internal Medicine & Endocrinology">Internal Medicine & Endocrinology</option>
                                <option value="Laparoscopy surgery">Laparoscopy surgery</option>
                                <option value="Fistula Treatment">Fistula Treatment</option>
                                <option value="Piles Treatment">Piles Treatment</option>
                                <option value="Weight Loss Surgery">Weight Loss Surgery</option>
                                <option value="Full Body Health Check up">Full Body Health Check up</option>
                                <option value="Ophthalmology">Ophthalmology</option>
                                <option value="Obstetrics & Gynecology">Obstetrics & Gynecology</option>
                                <option value="Overian Cyst Treatment">Overian Cyst Treatment</option>
                                <option value="Uterine Fibroid Treatment">Uterine Fibroid Treatment</option>
                                <option value="Endometriosis">Endometriosis</option>
                                <option value="Vaginal Tightening Surgery">Vaginal Tightening Surgery</option>
                                <option value="Hymen repair surgery">Hymen repair surgery</option>
                                <option value="Maternity Care & Pregnancy">Maternity Care & Pregnancy</option>
                                <option value="Neonatology & Pediatrics">Neonatology & Pediatrics</option>
                                <option value="Orthopedic Treatments">Orthopedic Treatments</option>
                                <option value="Pediatric Orthopedics">Pediatric Orthopedics</option>
                                <option value="Sports injury treatment">Sports injury treatment</option>
                                <option value="Cochlear Implants">Cochlear Implants</option>
                                <option value="Sinus Infection Treatment">Sinus Infection Treatment</option>
                             
                                
                            </select>
                        </div>
                        <div class="mt-15">
                            <select name="dname" class="form-control">
                                <option>--Select Doctor-- </option>
                                <option value="DR. SIRISHA SINGH ">DR. SIRISHA SINGH </option>
                                <option value="DR. MANISH GUPTA">DR. MANISH GUPTA</option>
                                <option value="DR. AASHIMA CHOPRA ">DR. AASHIMA CHOPRA </option>
                                <option value="DR. SANJIV GUPTA">DR. SANJIV GUPTA</option>
                                <option value="DR.AMIT PARASHAR ">DR.AMIT PARASHAR </option>
                                <option value="DR. DHWANI MAGO ">DR. DHWANI MAGO </option>
                                <option value="DR. LALIT BAFNA ">DR. LALIT BAFNA </option>
                                <option value="DR. HIMANSHU ">DR. HIMANSHU </option>
                                <option value="Dr.NIRAJ NIKUNJ">Dr.NIRAJ NIKUNJ</option>
                                <option value="Dr. S. SEN GUPTA ">Dr. S. SEN GUPTA </option>
                                <option value="Dr. ANIL KUMAR SHARMA">Dr. ANIL KUMAR SHARMA</option>
                                <option value="Dr. V.K. RAJORIA ">Dr. V.K. RAJORIA </option>
                                <option value="Dr. GAUTAM BANGA ">Dr. GAUTAM BANGA </option>
                                <option value="Dr. GURMEET BANSAL ">Dr. GURMEET BANSAL </option>
                                <option value="Dr. MAMTA GOEL ">Dr. MAMTA GOEL </option>
                                <option value="Dr. VISHAL DUTT">Dr. VISHAL DUTT</option>
                                <option value="DR. HARSH PRIYADHARSHI">DR. HARSH PRIYADHARSHI</option>
                                <option value="DR. HELAI GUPTA">DR. HELAI GUPTA</option>
                                <option value="Dr. ANURADHA KHURANA">Dr. ANURADHA KHURANA</option>
                                <option value="Dr. SHILPI ">Dr. SHILPI </option>
                                <option value="Dr. NIKKY YADAV ">Dr. NIKKY YADAV </option>
                                <option value="Dr. VICKY KULDEEP">Dr. VICKY KULDEEP</option>
                                <option value="Dr. SUSHANT WADHERA">Dr. SUSHANT WADHERA</option>
                                <option value="Dr. BHUPENDRA PRASAD ">Dr. BHUPENDRA PRASAD </option>
                                <option value="Dr. SUMEET SHAH ">Dr. SUMEET SHAH </option>
                                <option value="Dr. RAJESH BAWARI ">Dr. RAJESH BAWARI </option>
                                <option value="Dr. NABANITA CHATTERJEE">Dr. NABANITA CHATTERJEE</option>
                                <option value="Dr. ROHIT KRISHNA ">Dr. ROHIT KRISHNA </option>
                                <option value="Dr. NISHANT SONI">Dr. NISHANT SONI</option>
                                <option value="Dr. LOKESH HANDA ">Dr. LOKESH HANDA </option>
                                <option value="Dr. AJAY SINHA">Dr. AJAY SINHA</option>
                                <option value="Dr. ASHUTOSH MISHRA">Dr. ASHUTOSH MISHRA</option>
                                <option value="DR. JUHEE JAIN">DR. JUHEE JAIN</option>
                                <option value="Dr. Sukhbir Singh">Dr. Sukhbir Singh</option>
                                <option value="Dr. Salsabeel Syed">Dr. Salsabeel Syed</option>
                                <option value="Dr. Naveen Gambhir">Dr. Naveen Gambhir</option>
                                <option value="Dr. Arvind Kumar">Dr. Arvind Kumar</option>
                                <option value="Dr. Raj Kumar">Dr. Raj Kumar</option>
                                <option value="Dr. Ruchi Tandon">Dr. Ruchi Tandon</option>
                                <option value="Dr. Vishakha Munjal">Dr. Vishakha Munjal</option>
                                <option value=" Dr. Rajat Goel"> Dr. Rajat Goel</option>
                            </select>
                            
                        </div>
                        <div class="mt-15">
                            <textarea class="form-control" name="message" placeholder="Message"></textarea>
                        </div>
                        <div class="mt-3">
                            <input type="hidden" name="subject" value="Book An Appointment">
                            <button type="submit" class="btn btn-hover-fill"><i class="icon-right-arrow"></i><span>Send message</span><i class="icon-right-arrow"></i></button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

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
                    <a href="index.php">Home</a>
                    <span>Services</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->

    <!--section-->
    <div class="section page-content-first mt-3">
        <div class="container">
            <h3>Gynecology</h3>
            <div class="h-decor"></div>
            
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="services_box">
                        <a href="{{ route('endometriosis-treatment') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Endometriosis Treatment</h5>
                                <p>Endometriosis is an irrecoverable, but a manageable gynaecological medical condition. It happens when endometrial implants, comprising...</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="services_box">
                        <a href="{{ route('fibroid-treatment') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Uterine Fibroid Treatment</h5>
                                <p>Uterine fibroids are benign (noncancerous) growths in the womb or uterus of women. These are also known as myomas or leiomyomas...</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="services_box">
                        <a href="{{ route('ovarian-cryst-treatment') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Ovarian Cyst Treatment</h5>
                                <p>The ovaries are an essential part of a female reproductive system. These are present inside the lower abdomen on either side of the uterus...</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="services_box">
                        <a href="{{ route('obstetricsand-gynecology') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Obstetrics and Gynecology</h5>
                                <p>Obstetrics and gynecology deal with the care of pregnant women, the unborn child in the womb and ...</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container pt-5">
            <h3>Cosmetic Gynecology</h3>
            <div class="h-decor"></div>
            
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="services_box">
                        <a href="{{ route('vaginal-tightening-surgery') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Vaginal Tightening Surgery</h5>
                                <p>Vaginal tightening is the procedure that is done to treat loose vaginas as vaginas are elastic and tend to get stretched....</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="services_box">
                        <a href="{{ route('hymen-repair-surgery') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Hymen Repair Surgery</h5>
                                <p>Hymen repair also known as hymenoplasty is a cosmetic surgery to repair, restore, or construct a women’s hymen. Hymen ...</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <h3>Urology</h3>
            <div class="h-decor"></div>
            
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="services_box">
                        <a href="{{ route('kidney-stones') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>KIDNEY STONES</h5>
                                <p>Kidney stones are hard deposits of salts and minerals that can develop a small portion of the kidney, known as the renal pelvis. The stones...</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="services_box">
                        <a href="{{ route('enlarged-prostate') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Enlarged prostate</h5>
                                <p>The prostate is a tiny muscular gland in the male reproductive system. The muscular action of the prostate helps propel the semen and...</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="services_box">
                        <a href="{{ route('hypospadias') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Hypospadias Surgery</h5>
                                <p>Hypospadias is a medical condition when the meatus (hole) is not present at the tip of a penis. This is a common birth defect in up to one...</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="services_box">
                        <a href="{{ route('male-infertility') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Male Infertility</h5>
                                <p>Male infertility occurs due to problems affecting either sperm transport or sperm production in men. Around two-thirds of men with...</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="services_box">
                        <a href="{{ route('urology-and-andrology') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Prostate Laser Surgery</h5>
                                <p>Enlargement of the prostate gland due to age factor is known as benign prostatic hyperplasia (BPH). The prostate gland is present</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="services_box">
                        <a href="{{ route('urology-and-andrology') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Overview Urology and Andrology</h5>
                                <p>Andrology is a medical speciality to deal specifically with male health. The main focus is to treat problems related to the male...</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container pt-5">
            <h3>General surgery</h3>
            <div class="h-decor"></div>
            
            <div class="row">
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="services_box">
                        <a href="{{ route('fistula-treatment') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Fistula Treatment</h5>
                                <p>An anal fistula is a medical term for a small tunnel that forms between the skin around the anus and the muscular opening at the end of...</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="services_box">
                        <a href="{{ route('bariatric-surgery') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Bariatric Surgery</h5>
                                <p>Bariatric surgery is an operative procedure that helps patients’ to lose weight making certain changes to the digestive system. Some...</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="services_box">
                        <a href="{{ route('piles-treatment') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Piles Treatment</h5>
                                <p>Piles, also known as haemorrhoids, are the lumps or swollen veins formed inside and around the anus. These swollen veins within the...</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 mb-3">
                    <div class="services_box">
                        <a href="{{ route('advanced-laparoscopic-general-surgery') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Advanced Laparoscopic</h5>
                                <p>The general surgery is one of the broadest healthcare specialities in medicine. Specialized general surgeons can diagnose and treat...</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        
        
        
        
        
        <div class="container pt-5">
            <h3>Orthopedic</h3>
            <div class="h-decor"></div>
            
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="services_box">
                        <a href="{{ route('orthopaedic') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Best Orthopaedic</h5>
                                <p>SCI Hospital is a multi-disciplinary healthcare centre, offering the best medical care facilities to patients suffering from various health...</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="services_box">
                        <a href="{{ route('paeds-orthopaedics') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Pediatric Orthopedic</h5>
                                <p>Since 2014, Surgical Centre of India (SCI) is a mid-size super-specialty surgical treatment center located in Greater Kailash Part 1...</p>
                            </div>
                        </a>
                    </div>
                </div>
                
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="services_box">
                        <a href="{{ route('sports-injury-treatment') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Sports Injury Treatment</h5>
                                <p>Exercises and physical activities are good for the human body but people often get hurt while doing so. A sports injury can involve ... </p>
                            </div>
                        </a>
                    </div>
                </div>
                
            </div>
        </div>
        
        
        <div class="container pt-5">
            <h3>Weight Loss Surgery</h3>
            <div class="h-decor"></div>
            
            <div class="row">
                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="services_box">
                        <a href="{{ route('bariatric-surgery') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Bariatric Surgery</h5>
                                <p>Bariatric surgery is an operative procedure that helps patients’ to lose weight making certain changes to the digestive system. </p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 mb-3">
                    <div class="services_box">
                        <a href="{{ route('allurion-balloon-surgery') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Allurion Balloon Surgery</h5>
                                <p>The Allurion Balloon, originally the Elipse Balloon, is a novel weight loss strategy created to help you cut back on your calorie intake.</p>
                            </div>
                        </a>
                    </div>
                </div>
                
                
            </div>
        </div>
        
        
        <div class="container pt-5">
            
            <div class="services_box">
                        <a href="{{ route('neontology-and-paeds') }}" class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Paediatrics and Neonatology</h5>
                                <p>Paediatrics is a medical speciality to manage various medical conditions affecting children, babies and young people. On the other hand, neonatology is a paediatrics’ subspecialty consisting of the medical care of infants, particularly premature or ill new-born infants. This is a hospital-based speciality, which is practised in special neonatal intensive care units (NICUs).</p>
                            </div>
                        </a>
                    </div>
                    
        </div>
        <div class="container pt-5">
            <div class="services_box">
                        <a class="d-flex" href="{{ route('/') }}">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Introduction about SCI</h5>
                                <p>SCI Hospital works with the best medical professionals to offer top-notch facilities to both the mother and child. We offer our patients the most advanced and quality treatment in India in various medical facilities, including Pediatrics, Gynecology, Neonatology, Mother and Child Care, etc. All these medical facilities are supported by our highly qualified specialists.</p>
                            </div>
                        </a>
                    </div>
            </div>
            
            <div class="container pt-5">
            <div class="services_box">
                        <a class="d-flex">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Best ENT Hospital</h5>
                                <p>Otolaryngology is a medical specialtyconcerning conditions and disorders related to the ear, nose and throat (ENT) areas of the human body. If anyone’s having a problem in any of these areas, they need to see an ENT specialist or otolaryngologist.</p>
                            </div>
                        </a>
                    </div>
            </div>
            
            <div class="container pt-5 pb-5">
            <div class="services_box">
                        <a class="d-flex" href="{{ route('health-check-up') }}">
                            <div class="icon_box">
                                <i class="fa fa-thumbs-o-up"></i>
                            </div>
                            <div class="content_box_service">
                                <h5>Full Body Checkup in Delhi</h5>
                                <p>People visit hospitals and medical clinics for various reasons. It could be due to some illness or any uncertain health condition. Some even visit for their routine full-body checkupregularly.</p>
                            </div>
                        </a>
                    </div>
            </div>
            
    </div>
    <!--//section-->
 

</div>

@endsection

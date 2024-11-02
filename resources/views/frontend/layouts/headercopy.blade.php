<!DOCTYPE html>
<html lang="en">
    <head>
        <title>{{ $pageTitle ? $pageTitle : '' }}</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
        <meta name="description" content="{{ $pageDescription ? $pageDescription : '' }}" />
        <meta name="author" content="" />
        <meta name="format-detection" content="telephone=no" />

        <!-- Stylesheets -->
        <link href="{{asset('assets/vendor/slick/slick.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/vendor/animate/animate.min.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/icons/style.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/css/newstyle.css')}}" rel="stylesheet" />
        <link href="{{asset('assets/color/color.css')}}" rel="stylesheet" />
        
        <link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
        <!--Favicon-->
        <link rel="icon" href="{{asset('assets/images/sci-favicon.png')}}" type="image/x-icon" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet" />
        <link href="{{ url('public/assets/toastr/css/toastr.min.css?v='.time()) }}" rel="stylesheet" type="text/css" />
    </head>

    <body class="shop-page layout-medlab">
        <header class="header">
            <div class="header-quickLinks js-header-quickLinks d-lg-none">
                <div class="quickLinks-top js-quickLinks-top"></div>
                <div class="js-quickLinks-wrap-m"></div>
            </div>
            <div class="header-topline d-lg-flex">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="align-items-center social_headre">
                            <div class="header-phone"><i class="icon-telephone"></i><a href="tel:9999446622">+91 9999446622 (For Appointment)</a>, <a href="tel:01141675555">011 4167 5555 (For General Queries)</a></div>
                            <div class="header-info"><i class="icon-placeholder2"></i> M 4, Near M Block Market, Greater Kailash-1, New Delhi, 110048</div>
                        </div>
                        <div class=" ml-auto d-flex align-items-center social_headre">
                            <span class="header-social">
                                <a href="https://twitter.com/scihospital" target="_blank" class="hovicon icon-"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.youtube.com/channel/UC24dc2RFFD6UjaT-AJ_khhg" target="_blank" class="hovicon icon-"><i class="fa fa-youtube"></i></a>
                                <a href="https://www.facebook.com/scihospitaloffical" target="_blank" class="hovicon icon-"><i class="fa fa-facebook"></i></a>
                                <a href="https://in.linkedin.com/company/scihospital" target="_blank" class="hovicon icon-"><i class="fa fa-linkedin"></i></a>
                                <a href="https://www.instagram.com/scihospital/" target="_blank" class="hovicon icon-"><i class="fa fa-instagram"></i></a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-content">
                <div class="container">
                    <div class="row align-items-lg-center">
                        <button class="navbar-toggler collapsed" data-toggle="collapse" data-target="#navbarNavDropdown">
                            <span class="icon-menu"></span>
                        </button>
                        <div class="col-lg-auto col-lg-2 d-flex align-items-lg-center">
                            <a href="{{ route('/') }}" class="header-logo"><img src="{{asset('assets/images/sci logo.png')}}" alt="" class="img-fluid" /></a>
                        </div>
                        <div class="col-lg ml-auto header-nav-wrap">
                            <div class="header-nav js-header-nav">
                                <nav class="navbar navbar-expand-lg btco-hover-menu">
                                    <div class="collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
                                        <ul class="navbar-nav">
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('/') }}">Home</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('about-us') }}"><i class="fa fa-hospital-o"></i> About Us</a>
                                            </li>
                                            <li class="nav-item">
                                                <a href="{{ route('our-doctors') }}" class="nav-link"><i class="fa fa-user-md"></i> Our Doctors</a>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown"><i class="fa fa-stethoscope" aria-hidden="true"></i> Specialists  <i class="fa fa-angle-down icon_menu"></i></a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item icon dropdown-toggle" href="#"  data-toggle="dropdown">Urology </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="{{ route('urology-and-andrology') }}">Urology And Andrology</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('kidney-stones') }}">Kidney Stone Treatment</a></li>
                                                            <li><a class="dropdown-item" href="#">Laser Prostate Treatment</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('enlarged-prostate') }}">Enlarged Prostate Treatment</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item icon dropdown-toggle" href="#"  data-toggle="dropdown">Andrology</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="{{ route('male-infertility') }}">Men Infertility</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('urology-erectile-dysfunction') }}">Erectile Dysfunction Treatment</a></li>
                                                            <li><a class="dropdown-item" href="#">Penile Prosthesis/Implant</a></li>
                                                            <li><a class="dropdown-item" href="#">Shockwave Therapy</a></li>
                                                            <li><a class="dropdown-item" href="#">Micro Tese</a></li>
                                                            <li><a class="dropdown-item" href="#">Cystoscopy</a></li>
                                                            <li><a class="dropdown-item" href="#">Circumcision</a></li>
                                                            <li><a class="dropdown-item" href="#">MicroSurgical Varicocelectomy</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item  dropdown-toggle" href="#"  data-toggle="dropdown">Reconstructive Urology</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="{{ route('hypospadias') }}">Hypospadias Surgery and Treatment</a></li>
                                                            <li><a class="dropdown-item" href="#">Urethroplasty</a></li>
                                                            <li><a class="dropdown-item" href="#">Penile Curvature</a></li>
                                                            <li><a class="dropdown-item" href="#">Urinary Incontinence</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item  dropdown-toggle" href="#"  data-toggle="dropdown">Obstetrics & Gynecology</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="{{ route('obstetricsand-gynecology') }}">Obstetrics & Gynecology</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('ovarian-cryst-treatment') }}">Overian Cyst Treatment</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('fibroid-treatment') }}">Uterine Fibroid Treatment</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('endometriosis-treatment') }}">Endometriosis</a></li>
                                                            <li><a class="dropdown-item" href="#">Menopause</a></li>
                                                            <li><a class="dropdown-item" href="#">Abnormal Menstrual Bleeding</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="dropdown-item" href="{{ route('mother-and-child-care') }}">Mother and Child Care</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('infertilitytreatment') }}">IVF & Fertility Treatments</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('bariatric-surgery') }}">Bariatric Surgery / Weight Loss Surgery</a></li>
                                                    <li>
                                                        <a class="dropdown-item dropdown-toggle" href="#"  data-toggle="dropdown">General Surgery</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="{{ route('advanced-laparoscopic-general-surgery') }}">General Surgery & Advanced Laproscopy Surgery</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('fistula-treatment') }}">Fistula Treatment</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('piles-treatment') }}">Piles Treatment</a></li>
                                                            <li><a class="dropdown-item" href="#">Appendix</a></li>
                                                            <li><a class="dropdown-item" href="#">Gall Bladder Stone Surgery</a></li>
                                                            <li><a class="dropdown-item" href="#">All type of hernia surgery</a></li>
                                                            <li><a class="dropdown-item" href="#">Thyroid Surgery</a></li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item  dropdown-toggle" href="#"  data-toggle="dropdown">Orthopaedics & Spine Surgery</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="{{ route('orthopaedic') }}">Orthopedic Treatments</a></li>
                                                            <li><a class="dropdown-item" href="{{ route('paeds-orthopaedics') }}">Pediatric Orthopedics</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="dropdown-item" href="{{ route('neontology-and-paeds') }}">Neonatology & Paediatric</a></li>
                                                    <li>
                                                        <a class="dropdown-item icon dropdown-toggle" href="{{ route('best-ent-hospital') }}"  data-toggle="dropdown">ENT</a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item" href="#">Rhinoplasty </a></li>
                                                            <li><a class="dropdown-item" href="#">Fess- Sinus Surgery</a></li>
                                                            <li><a class="dropdown-item" href="#">Tonsil & Adenoid Surgery</a></li>
                                                            <li><a class="dropdown-item" href="#">Sinuplasty</a></li>
                                                            <li><a class="dropdown-item" href="#">Microlaryngeal Surgery</a></li>
                                                            <li><a class="dropdown-item" href="#">Tympanoplasty & Ossiculplasty</a></li>
                                                            <li><a class="dropdown-item" href="#">Thyroid & Submandibular Gland Surgery</a></li>
                                                            <li><a class="dropdown-item" href="#">Copchlear Implants Surgery</a></li>
                                                            <li><a class="dropdown-item" href="#">Bera & Assr</a></li>
                                                            <li><a class="dropdown-item" href="#">Allergy, Testing & Immunotherpy</a></li>
                                                            <li><a class="dropdown-item" href="#">Hearing Speech & Therapy</a></li>
                                                            <li><a class="dropdown-item" href="#">ENT Endoscopic Evaluation</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a class="dropdown-item" href="{{ route('cochlear-implants') }}">Cochlear Implants</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('stemcellandregenerativemedicine') }}">Regenerative Medicine & Stem Cell</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('DepartmentofDermatologyCosmetologyPlasticSurgery') }}">Cosmetic & Plastic Surgery</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('InternalMedicineEndocrinology') }}">Internal Medicine & Endocrinology</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('DepartmentofOphthalmology') }}">Opthalmology</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('DentalDepartment') }}">Dental implants & Orthodontics</a></li>
                                                    <li><a class="dropdown-item" href="{{ route('health-check-up') }}">Health Check up</a></li>
                                                </ul>
                                            </li>

                                            <li class="nav-item dropdown">
                                                <a href="{{ route('make-an-appointment') }}" class="nav-link"><i class="fa fa-calendar"></i> Book Appointments</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('international-patients') }}"><i class="fa fa-users"></i> International Patients</a>
                                            </li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>

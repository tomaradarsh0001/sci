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
<p class="theme-color font-heading-bold display_desktop">Our Services</p>

<ul class="services-nav flex-column flex-nowrap">
    <li class="nav-item">
        <p class="main_Services_menu"><a href="#submenu1" data-toggle="collapse" data-target="#submenu1">Urology <i class="fa fa-angle-down float-right"></i></a></p>
        <div class="collapse show" id="submenu1">
            <div class="services_menu">
                <p><a href="{{ route('urology-and-andrology') }}"><i class="fa fa-long-arrow-right"></i> Urology And Andrology</a></p>
                <p><a href="{{ route('kidney-stones') }}"><i class="fa fa-long-arrow-right"></i> Kidney Stone Treatment</a></p>
                <p><a href="{{ route('enlarged-prostate') }}"><i class="fa fa-long-arrow-right"></i> Enlarged Prostate Treatment</a></p>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <p class="main_Services_menu"><a href="#submenu2" data-toggle="collapse" data-target="#submenu2">Andrology <i class="fa fa-angle-down float-right"></i></a></p>
        <div class="collapse" id="submenu2">
            <div class="services_menu">
                <p><a href="{{ route('male-infertility') }}"><i class="fa fa-long-arrow-right"></i> Men Infertility</a></p>
                <p><a href="{{ route('urology-erectile-dysfunction') }}"><i class="fa fa-long-arrow-right"></i> Erectile Dysfunction Treatment</a></p>
                <!--<p><a href="#"><i class="fa fa-long-arrow-right"></i> Penile Prosthesis/Implant</a></p>
                <p><a href="#"><i class="fa fa-long-arrow-right"></i> Shockwave Therapy</a></p>
                <p><a href="#"><i class="fa fa-long-arrow-right"></i> Micro Tese</a></p>
                <p><a href="#"><i class="fa fa-long-arrow-right"></i> Cystoscopy</a></p>
                <p><a href="#"><i class="fa fa-long-arrow-right"></i> Circumcision</a></p>
                <p><a href="#"><i class="fa fa-long-arrow-right"></i> MicroSurgical Varicocelectomy</a></p>-->
            </div>
        </div>
    </li>
    <li class="nav-item">
        <p class="main_Services_menu"><a href="#submenu3" data-toggle="collapse" data-target="#submenu3">Reconstructive Urology <i class="fa fa-angle-down float-right"></i></a></p>
        <div class="collapse" id="submenu3">
            <div class="services_menu">
                <p><a href="{{ route('hypospadias') }}"><i class="fa fa-long-arrow-right"></i> Hypospadias Surgery and Treatment</a></p>
                <p><a href="{{ route('penile-enlargement-surgery') }}"><i class="fa fa-long-arrow-right"></i>  Penile Enlargement Surgery</a></p>
               <!-- <p><a href="#"><i class="fa fa-long-arrow-right"></i> Urethroplasty</a></p>
                <p><a href="#"><i class="fa fa-long-arrow-right"></i> Penile Curvature</a></p>
                <p><a href="#"><i class="fa fa-long-arrow-right"></i> Urinary Incontinence</a></p>-->
            </div>
        </div>
    </li>

    <li class="nav-item">
        <p class="main_Services_menu"><a href="#submenu4" data-toggle="collapse" data-target="#submenu4">Obstetrics & Gynecology <i class="fa fa-angle-down float-right"></i></a></p>
        <div class="collapse" id="submenu4">
            <div class="services_menu">
                <p><a href="{{ route('obstetricsand-gynecology') }}"><i class="fa fa-long-arrow-right"></i> Obstetrics & Gynecology</a></p>
                <p><a href="{{ route('ovarian-cryst-treatment') }}"><i class="fa fa-long-arrow-right"></i> Overian Cyst Treatment</a></p>
                <p><a href="{{ route('fibroid-treatment') }}"><i class="fa fa-long-arrow-right"></i> Uterine Fibroid Treatment</a></p>
                <p><a href="{{ route('endometriosis-treatment') }}"><i class="fa fa-long-arrow-right"></i> Endometriosis</a></p>
                <!--<p><a href="#"><i class="fa fa-long-arrow-right"></i> Menopause</a></p>
                <p><a href="#"><i class="fa fa-long-arrow-right"></i> Abnormal Menstrual Bleeding</a></p>-->
            </div>
        </div>
    </li>
    
    <li class="nav-item">
        <p class="main_Services_menu"><a href="#submenu14" data-toggle="collapse" data-target="#submenu14">Cosmetic Gynecology <i class="fa fa-angle-down float-right"></i></a></p>
        <div class="collapse" id="submenu14">
            <div class="services_menu">
                <p><a href="{{ route('vaginal-tightening-surgery') }}"><i class="fa fa-long-arrow-right"></i> Vaginal Tightening Surgery</a></p>
                <p><a href="{{ route('hymen-repair-surgery') }}"><i class="fa fa-long-arrow-right"></i> Hymen repair surgery</a></p>
            </div>
        </div>
    </li>

    <li class="nav-item"><p class="main_Services_menu"><a href="{{ route('mother-and-child-care') }}">Mother and Child Care</a></p></li>
    <li class="nav-item"><p class="main_Services_menu"><a href="{{ route('infertilitytreatment') }}">IVF & Fertility Treatments</a></p></li>
    <li class="nav-item">
        <p class="main_Services_menu"><a href="#submenu15" data-toggle="collapse" data-target="#submenu15">Weight Loss Surgery <i class="fa fa-angle-down float-right"></i></a></p>
        <div class="collapse" id="submenu15">
            <div class="services_menu">
                <p><a href="{{ route('bariatric-surgery') }}"><i class="fa fa-long-arrow-right"></i> Bariatric Surgery</a></p>
                <p><a href="{{ route('allurion-balloon-surgery') }}"><i class="fa fa-long-arrow-right"></i> Allurion Balloon Surgery</a></p>
            </div>
        </div>
    </li>
    
    
  
    <li class="nav-item">
        <p class="main_Services_menu"><a href="#submenu5" data-toggle="collapse" data-target="#submenu5">General Surgery <i class="fa fa-angle-down float-right"></i></a></p>
        <div class="collapse" id="submenu5">
            <div class="services_menu">
                <p><a href="{{ route('advanced-laparoscopic-general-surgery') }}"><i class="fa fa-long-arrow-right"></i> General Surgery & Advanced Laproscopy Surgery</a></p>
                <p><a href="{{ route('fistula-treatment') }}"><i class="fa fa-long-arrow-right"></i> Fistula Treatment</a></p>
                <p><a href="{{ route('piles-treatment') }}"><i class="fa fa-long-arrow-right"></i> Piles Treatment</a></p>
                <p><a href="#"><i class="fa fa-long-arrow-right"></i> Appendix</a></p>
                <!--<p><a href="#"><i class="fa fa-long-arrow-right"></i> Gall Bladder Stone Surgery</a></p>
                <p><a href="#"><i class="fa fa-long-arrow-right"></i> All type of hernia surgery</a></p>
                <p><a href="#"><i class="fa fa-long-arrow-right"></i> Thyroid Surgery</a></p>-->
            </div>
        </div>
    </li>
    <li class="nav-item">
        <p class="main_Services_menu"><a href="#submenu6" data-toggle="collapse" data-target="#submenu6">Orthopaedics & Spine Surgery <i class="fa fa-angle-down float-right"></i></a></p>
        <div class="collapse" id="submenu6">
            <div class="services_menu">
                <p><a href="{{ route('orthopaedic') }}"><i class="fa fa-long-arrow-right"></i> Orthopedic Treatments</a></p>
                <p><a href="{{ route('paeds-orthopaedics') }}"><i class="fa fa-long-arrow-right"></i> Pediatric Orthopedics</a></p>
                <p><a href="{{ route('sports-injury-treatment') }}"><i class="fa fa-long-arrow-right"></i>  Sports injury treatment</a></p>
            </div>
        </div>
    </li>
    
    
    <li class="nav-item"><p class="main_Services_menu"><a href="{{ route('neontology-and-paeds') }}">Neonatology & Paediatric</a></p></li>
    <li class="nav-item"><p class="main_Services_menu"><a href="{{ route('cochlear-implants') }}">Cochlear Implants</a></p></li>
    <li class="nav-item">
        <p class="main_Services_menu"><a href="#" data-toggle="collapse" data-target="#submenu7">ENT (Ear, Nose and Throat) <i class="fa fa-angle-down float-right"></i></a></p>
        <div class="collapse" id="submenu7">
            <div class="services_menu">
                <p><a href="{{ route('best-ent-hospital') }}"><i class="fa fa-long-arrow-right"></i>  ENT Specialist</a></p>
                <p><a href="{{ route('sinus-infection-treatment') }}"><i class="fa fa-long-arrow-right"></i>  Sinus Infection Treatment</a></p>
            </div>
        </div>
    </li>
    
    <li class="nav-item"><p class="main_Services_menu"><a href="{{ route('stemcellandregenerativemedicine') }}">Regenerative Medicine & Stem Cell</a></p></li>
    {{-- 
<li class="nav-item"><p class="main_Services_menu"><a href="{{ route('DepartmentofDermatologyCosmetologyPlasticSurgery') }}">Cosmetic & Plastic Surgery</a></p></li>
<li class="nav-item"><p class="main_Services_menu"><a href="{{ route('InternalMedicineEndocrinology') }}">Internal Medicine & Endocrinology</a></p></li>
<li class="nav-item"><p class="main_Services_menu"><a href="{{ route('DepartmentofOphthalmology') }}">Opthalmology</a></p></li>
<li class="nav-item"><p class="main_Services_menu"><a href="{{ route('DentalDepartment') }}">Dental implants & Orthodontics</a></p></li>
<li class="nav-item"><p class="main_Services_menu"><a href="{{ route('health-check-up') }}">Health Check up</a></p></li>
--}}

</ul>
<div class="row d-flex flex-column flex-sm-row flex-md-column mt-3">
    <!--<div class="col-auto col-sm col-md-auto">
        <div class="contact-box contact-box-1">
            <h5 class="contact-box-title">Working Time</h5>
            <ul class="icn-list">
                <li>
                    <i class="icon-clock"></i>Mon-Thu 08:00 - 20:00 <br />
                    Friday 07:00 - 22:00 <br />
                    Saturday 08:00 - 18:00
                </li>
            </ul>
        </div>
    </div>-->
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


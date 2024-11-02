@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')

<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. ShivaniSachdevGour",
  "url": "https://scihospital.com/dr-shivanisachdevgour",
  "image": "https://scihospital.com/public/assets/images/doctors/Dr-Shivani-Sachdev-Gour.png",
  "sameAs": "https://scihospital.com/",
  "jobTitle": "Founder and director of SCI Hospital",
  "worksFor": {
    "@type": "Organization",
    "name": "SCI International Hospital"
  }  
}
</script>


</head>
<body>
    
    
  
<div class="page-content">
   
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('/') }}">Home</a>
                    <a href="{{ route('our-doctors') }}">Our Doctors</a>
                    <span>Dr. Shivani Sachdev Gour</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first pb-70">
        <div class="container mt-6">
            <div class="row">
                <div class="container doctor_details_section">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3">
                            <div class="doctor_img_detail">
                                <img src="{{asset('assets/images/doctors/Dr-Shivani-Sachdev-Gour.png')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h5 class="doctor-box-name mb-2  theme-color">Dr. Shivani Sachdev Gour</h5>
                            <p class="degree_section">MBBS, DNB, MD</p>
                            <ul class="list_details_doc">
                                <li><i class="fa fa-map-marker"></i> M 4, Greater Kailash-1, M Block, part-1, Greater Kailash, New Delhi, Delhi 110048</li>
                                <li><i class="fa fa-phone"></i> Mobile: +91-9999446622</li>
                                <li><i class="fa fa-envelope"></i> Email: info@scihospital.com</li>
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <div class="call_box">
                                <p><i class="fa fa-phone"></i></p>
                                <p class="app_doc">For Appointment, call us on</p>
                                <p><a href="tel:9999446622">+91-9999446622</a></p>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="tab_doctors">
                                <div class="tab_home row nav nav-pills-icons js-doc-carousel" role="tablist">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-sticky-note-o"></i> ABOUT</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-university"></i> EDUCATION</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-trophy"></i> ACHIEVEMENTS</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-users"></i> LIFE MEMBER OF</a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Shivani Sachdev Gour is the founder and director of SCI Healthcare and Multispecialty Centre and consultant fertility specialist. Dr. Shivani Sachdev Gour has practiced as an obstetrician and gynaecologist, and infertility specialist for the past ten years. She has completed her medical and obstetrical qualifications in Mumbai in 2000 and was involved with treating the first cases of legal surrogacy in India. Dr. Shivani Sachdev Gour spent four years in the United Kingdom as an IVF clinical research fellow at the prestigious Hammersmith Hospital, and practiced as a gynecologist and obstetrician at Royal Infirmary of Edinburgh. She gained membership of the Royal College of Obstetricians and Gynaecologists (UK) in May, 2005. In 2007 Dr. Shivani Sachdev Gour returned to Delhi to consult as an IVF specialist with Delhi’s premier infertility treatment centres. She now leads the SCI Healthcare and IVF programs. Dr. Shivani Sachdev Gour’s distinguished work has brought local and international attention to SCI Healthcare’s IVF programs. Through her medical expertise and dedication to excellence, hundreds of couples from around the world are now parents.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>
                                                    MBBS, DNB, MD</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Secretary Delhi State Chapter of ISAR, Secretary Delhi State Chapter of ISPAT, General Secretary INSTAR, Vice President Delhi Gynae Forum South, Assistant Secretary IMA South Delhi</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Member of Editorial Board of International Journal of Reproduction, Contraception, Obstetrics and Gynaecology (IJRCOG). | Dr. Shivani Sachdev Gour has been awarded with Rashtra Gaurav Samman-2015 from Dr. GVG Krishnamurthy, former Election Commissioner of India in a meeting organised by an NGO- Jansanskriti. | Dr. Shivani’s name has been accomplished in Limca Book of records for participating in surrogacy walk organised by Indian Society for Third Party Assisted Reproduction. | Dr. Shivani Sachdev Gour has been awarded with Healthcare Achievers Award- 2015 in a meeting organised by an NGO- Jansanskriti. | Dr. Shivani Sachdev Gour has been selected as the member of Advisory Board of several media portals and Scientific journals and has presented & published articles in National & International Conferences & Journals. | Widely Quoted in National & International Media</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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

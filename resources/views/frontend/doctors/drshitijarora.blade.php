@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/doctors/dr-shitij-arora.webp')
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Shitij Arora",
  "url": "https://scihospital.com/dr-shitij-arora",
  "image": "https://scihospital.com/dr-shitij-arora",
  "jobTitle": "MBBS, MS - General Surgery General Surgeon",
  "worksFor": {
    "@type": "Organization",
    "name": "scihospital"
  }  
}
</script>

</head>
<body>
    
    
  
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="container-fluid">
            <div class="row">
                 <img src="{{asset('assets/images/doctors/SCI-Doctors.jpg')}}" class="img-fluid" alt="" />
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('/') }}">Home</a>
                    <a href="https://scihospital.com/our-doctors">Our Doctors</a>
                    <span>Dr. Shitij Arora </span>
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
                                <img src="{{asset('assets/images/doctors/dr-shitij-arora.webp')}}" class="img-fluid" alt="Dr. Shitij Arora General Surgeon" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h1 class="doctor-box-name mb-2  theme-color">Dr. Shitij Arora</h1>
                            <p class="degree_section">MBBS, MS - General Surgery<br>General Surgeon </p>
                            <ul class="list_details_doc">
                                <li><i class="fa fa-map-marker"></i> Plot No. 7, Golf Course Rd, Sector 43, Gurugram, Haryana 122002</li>
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
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-sticky-note-o"></i> EDUCATION</a>
                                    
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-trophy"></i> AWARDS AND ACHIEVEMENTS</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-university"></i> PUBLICATIONS</a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <p>Dr. Shijit Arora is a seasoned general and laparoscopic surgeon with a wealth of 8 years of experience. Currently serving as a general surgeon at SCI Hospital, Dr. Arora specializes in tackling abdominal issues like gallbladder stones, appendix, hernia, and colo-rectal problems such as hemorrhoids (piles). Beyond that,  he's the best doctor to provide expert care in treating thyroid and breast disorders, along with various benign growths like lipomas and cysts. Trust in his expertise for your health needs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <ul>
                                                    <li>Fellowship in Minimal Access Surgery (2021)</li>
                                                    <li>Diploma in Minimal Access Surgery (2021)</li>
                                                    <li>Netaji Subhash Chandra Bose Subharti Medical College, Meerut, UP - MS GENERAL SURGERY (2017-2020).</li>
                                                    <li>Saraswathi Institute of Medical Sciences, Hapur, UP – M.B.B.S (2011-2016).</li>
                                                    <li>V.V.D.A.V Public School, New Delhi -110018 (2009-2011).</li>
                                                    <li>Bal Bharti Public School, Dwarka, New Delhi (1996-2009).</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <ul>
                                                    <li>Dr Sandeep Kansal. “Associated Injuries in Maxillofacial Trauma.” IOSR Journal of Dental and Medical Sciences (IOSR-JDMS), vol. 18, no. 10, 2019, pp 05-08. – Associated Injuries In Maxillofacial Trauma - IOSR (2019).</li>
                                                    <li>Agarwal VK, Kansal S, Dhanesh, et al. Evaluation of maxillofacial injuries and its management. J. Evolution Med. Dent. Sci. 2018;7(42):4566-4570, DOI: 10.14260/jemds/2018/1018 - Evaluation of Maxillofacial injuries and its management - JEMDS (2018). </li>
                                                    <li>Sumit Garg et al., BMI vs. Cardiac Output and Peripheral Blood Flow in Young Adult Males Influence of BMI on Cardiac Output and Peripheral Blood Flow in Young Adult Males – JCDR (2017).</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <ul>
                                                    <li>Till Date: Performed more than 1000+ Surgeries in the past 3 years i.e., from 2020-2023.</li>
                                                    <li>2023: International Business Award along with Best Laparoscopic Award</li>
                                                    <li>2019: MAMC update</li>
                                                    <li>2018: Regional refresher course, Dehradun, HIMS.</li>
                                                    <li>2016: Presented paper at the 26th scientific meeting of the International Society of Hypertension held in Seoul, South Korea.  </li>
                                                    <li>2016: Osmecon conference, Andhra Pradesh. </li>
                                                    <li>Passed with an aggregate of 65% in MBBS.</li>
                                                </ul>
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

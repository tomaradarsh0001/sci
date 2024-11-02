@extends('gurgaon.frontend.layouts.main')
@section('main-container')

@section('gurgaon.define_robots', 'index, follow')
@section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img', 'https://scihospital.com/gurgaon/public/assets/images/sci%20logo.webp')
<script type="application/ld+json"> 
{ 
  "@context": "https://schema.org/", 
  "@type": "Person", 
  "name": "Dr. H J Nirdesh", 
  "url": "https://scihospital.com/gurgaon/dr-h-j-nirdesh-orthopedist", 
  "image": "", 
  "jobTitle": "MBBS, MS - Orthopaedics", 
  "worksFor": { 
	"@type": "Organization", 
	"name": "Sci Hospital Gurugram" 
  }   
} 
</script> 


</head>
<body>
    
    
  
<div class="page-content">
    
    <!--//section-->
    
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('gurgaon.index') }}">Home</a>
                    <a href="{{ route('gurgaon.our-doctors') }}">Our Doctors</a>
                    <span>Dr. H J Nirdesh</span>
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
                                <img src="{{asset('public_gurgaon/assets/images/doctors/Dr.-H-J-Nirdesh.webp')}}" class="img-fluid" alt="" />
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <h1 class="doctor-box-name mb-2 theme-color">Dr. H J Nirdesh</h1>
                            <p class="degree_section">MBBS, MS(Ortho), DNB(Ortho), FNB(Spine surgery), AO Asia Pacific Spine Fellow, AO International Spine Fellow (South Korea)</p>
                            <!--<p class="degree_section">MBBS, MS - Orthopaedics <br>Orthopedic surgeon, Spine Surgeon</p>-->
                            <ul class="list_details_doc">
                                <li><i class="fa fa-map-marker"></i> Plot No. 7, Golf Course Rd, Sector 43, Gurugram, Haryana 122002</li>
                                <li><i class="fa fa-phone"></i> Mobile:  +91-9354471022</li>
                                <!--<li><i class="fa fa-envelope"></i> Email: info@scihospital.com</li>-->
                            </ul>
                        </div>
                        <div class="col-lg-3 col-md-3 text-center">
                            <div class="call_box">
                                <p><i class="fa fa-phone"></i></p>
                                <p class="app_doc">For Appointment, call us on</p>
                                <p><a href="tel:9354471022">+91-9354471022</a></p>
                            </div>
                        </div>
                    </div>
                    <hr />
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="tab_doctors">
                                <div class="tab_home row nav nav-pills-icons js-doc-carousel" role="tablist">
                                    <a class="nav-link active" data-toggle="pill" href="#tab-A" role="tab"><i class="fa fa-sticky-note-o"></i> ABOUT</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-B" role="tab"><i class="fa fa-university"></i> EXPERIENCE</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-C" role="tab"><i class="fa fa-trophy"></i> ACHIEVEMENTS / ACCOMPLISHMENTS</a>
                                    <a class="nav-link" data-toggle="pill" href="#tab-D" role="tab"><i class="fa fa-trophy"></i> PROFESSIONAL MEMBERSHIPS</a>
                                </div>
                                <div id="tab-content" class="tab-content mt-2">
                                    <div id="tab-A" class="tab-pane fade in active" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <h3>About Dr. H J Nirdesh</h3>
                                                <p>Dr. H J Nirdesh is an accomplished Fellowship-trained Orthopedic Spine Surgeon at SCI Hospital with a distinguished career that spans clinical excellence, research, and academic leadership. With a strong foundation in spine surgery, Dr. Nirdesh has demonstrated a multifaceted commitment to advancing patient care, contributing to groundbreaking clinical research, and serving as a respected faculty member at both national and international spine conferences.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-B" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <h3>Experience</h3>
                                                <!--<p>Dr. H J Nirdesh, a 2014 MBBS graduate from Rajiv Gandhi University, expanded his orthopedic knowledge with a 2018 MS in Orthopaedics and further enhanced his expertise with a 2021 FNB in Spine Surgery from the DNB board in New Delhi.</p>-->
                                                <p>Dr. Nirdesh has over 4.5 years of dedicated service in India's leading tertiary spine care corporate hospital, showcasing proven leadership in a corporate healthcare setup. Currently working in SCI Hospital, Dr. Nirdesh specializes in Robotic Spine Surgery, Minimally Invasive Spine Surgery, Complex Spine Surgery, Navigation-Assisted Spine Surgery, Deformity Correction, and Spinal Pain Management Procedures, combining expertise with compassion to provide the best care possible for patients.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-C" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <h3>Achievements</h3>
                                                <p>Dr. Nirdesh has achieved significant academic milestones, including standing 32nd in the state-level medical college entrance exam, achieving an AIR 93 in the national-level postgraduate entrance exam, and securing the 14th rank in the national-level board-certified fellowship entrance exam in spine surgery. These accomplishments reflect Dr. Nirdesh's dedication to excellence in the field.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="tab-D" class="tab-pane fade" role="tabpanel">
                                        <div class="row">
                                            <div class="col-md-12 h-100">
                                                <h3>Professional Memberships</h3>
                                                <p>Dr. Nirdesh is a member of several professional societies, such as the Karnataka Orthopedic Society, Bengaluru Orthopedic Society, Association Of Spine Surgeons Of India (ASSI), AO Spine International, Bengaluru Spine Society, Asia Pacific Spine Society, and Asia Pacific Orthopedic Trauma Society. These memberships highlight Dr. Nirdesh's commitment to staying updated with the latest advancements in spine surgery and contributing to the global medical community.</p>
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
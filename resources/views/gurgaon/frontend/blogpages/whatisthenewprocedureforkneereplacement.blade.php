@extends('gurgaon.frontend.layouts.main') @section('main-container')


</head>
<body>
    
    
  
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('gurgaon.index') }}">Home</a>
                    <a href="{{ route('gurgaon.blog') }}">Blog</a>
                    <span>What is the New Procedure for Knee Replacement? </span>
                </div>
            </div>
        </div>
    </div>

    <!--section-->
    <div class="section page-content-first">
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-9 mb-4">
                    <div class="blog-card-details">
                        <img src="{{asset('public_gurgaon/assets/images/blog/620x349.png')}}" alt="Orthopedic Doctor talking to patient" class="img-fluid mb-3" />
                        <h1 class="blog_title">What is the New Procedure for Knee Replacement? </h1>
                         <h2>Partial knee replacement or unicondylar knee replacement</h2>
                        <p>This procedure involves replacing only one part of the knee i.e inner (medial) part of the knee joint to alleviate the pain from the joint. </p>
                        <p>The implants used are extremely high quality & involve very limited bone resection from the native knee which helps in early rehabilitation & the patient goes home early.</p>
                        
                        
                        <h2>Enhanced Recovery Pathway for knee replacement:</h2>
                        <p>At SCI, we are working on par with NHS standards & we are offering fast track rehabilitation to our total knee & partial knee replacement patients as per Enhanced recovery pathway protocol followed in National health service (NHS) hospitals of England.</p>
                        <h2>High tibial osteotomy</h2>
                        <p>This treatment is a substitute to knee replacement in a selected group of patients where a wedge of bone is removed from the leg bone(tibia) to correct the alignment of the knee joint & thus offloading the knee joint by changing the weight-bearing axis. This procedure helps in relieving the pain of arthritis without having to undergo knee replacement.</p>
                        
                        
                       
                        <h2>Fibular osteotomy  </h2>
                        <p>This procedure is again used for a selected group of patients who have knee arthritis but do not wish to undergo complete knee replacement. In this procedure, a segment of the side bone of the leg (fibula) is removed which helps in decompressing the knee joint & thus alleviating pain from the arthritic knee.</p>
                        <p>This procedure has shown promising results for patients who are not candidates for knee joint replacement either due to financial reasons or medically unfit for a big procedure or as a personal choice of patients.</p>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="related_post">
                        <p class="heading_Ser">Related Services</p>
                        <ul class="side_Serv_related">
                            <li><a href="https://scihospital.com/orthopaedic"><i class="fa fa-long-arrow-right"></i> Orthopaedic treatment </a></li>
                            <li><a href="https://scihospital.com/sports-injury-treatment"><i class="fa fa-long-arrow-right"></i> Sports injury treatment </a></li>
                            <li><a href="https://scihospital.com/paeds-orthopaedics"><i class="fa fa-long-arrow-right"></i> Pediatric Orthopedic Specialist </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

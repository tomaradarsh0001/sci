@extends('frontend.layouts.main')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')
<style>
.team-img img {
    aspect-ratio: 1 / 1;
    border-radius: 50%;
    margin-bottom: 20px;
    object-fit: cover;
    border: 1px solid #cccccc57;
    object-position: top;
}

</style>
</head>
<body>
    
    
  
<div class="page-content">
   <!--section-->
   <div class="section pb-70" >
      <div class="container">
         <div class="title-wrap text-center">
            <h2 class="h1">Know Our Team</h2>
            <div class="h-decor"></div>
         </div>
      </div>
   </div>
   <!--section-->
   <!--section-->
   <div class="section pb-70" >
      <div class="container">
         <div class="title-wrap text-center">
            <h3 class="h1">Our Founders</h3>
            <div class="h-decor"></div>
         </div>
         <div class="row justify-content-center">
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="{{ route('dr-shivanisachdevgour') }}">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Dr-Shivani-Sachdev-Gour.png')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="{{ route('dr-shivanisachdevgour') }}">Dr Shivani Sachdev Gour</a></h5>
                  <div class="doctor-box-position">Founder & Director</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="{{ route('dr-vishal-dutt-gour') }}">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Dr-Vishal-Dutt-Gour-1.png')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="{{ route('dr-vishal-dutt-gour') }}">Dr Vishal Dutt Gour</a></h5>
                  <div class="doctor-box-position">Founder & Director</div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--section-->
   <!--section-->
   <div class="section pb-70" >
      <div class="container">
         <div class="title-wrap text-center">
            <h3 class="h1">Our Top Management</h3>
            <div class="h-decor"></div>
         </div>
         <div class="row justify-content-center">
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="{{ route('dr-shivanisachdevgour') }}">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Dr-Shivani-Sachdev-Gour.png')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="{{ route('dr-shivanisachdevgour') }}">Dr Shivani Sachdev Gour</a></h5>
                  <div class="doctor-box-position">Founder & Director</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="{{ route('dr-vishal-dutt-gour') }}">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Dr-Vishal-Dutt-Gour-1.png')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="{{ route('dr-vishal-dutt-gour') }}">Dr Vishal Dutt Gour</a></h5>
                  <div class="doctor-box-position">Founder & Director</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="{{ route('dr-himanshu-shekhar') }}">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Dr-Himanshu-Shekhar.png')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="{{ route('dr-himanshu-shekhar') }}">Dr Himanshu Shekhar</a></h5>
                  <div class="doctor-box-position">Medical Director</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Gaurav Rathi.jpeg')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="">CA Gourav Rathi</a></h5>
                  <div class="doctor-box-position">GM - Finance</div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--section-->
   <!--section-->
   <div class="section pb-70">
      <div class="container">
         <div class="title-wrap text-center">
            <h3 class="h1">Our Team Leaders</h3>
            <div class="h-decor"></div>
         </div>
         <div class="row justify-content-center">
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Rahul Kukreja.JPG')}}" class="img-fluid" alt="Rahul Kukreja" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="">Rahul Kukreja</a></h5>
                  <div class="doctor-box-position">Unit Head - Delhi</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Jai Kumar.jpeg')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="">Jai Kumar</a></h5>
                  <div class="doctor-box-position">Unit Head - Noida</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Manuj Soni.jpeg')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="">Manuj Soni</a></h5>
                  <div class="doctor-box-position">Unit Head - Gurgaon</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Mithilesh Hembrom.jpeg')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="">Mithileshwar Hembrom</a></h5>
                  <div class="doctor-box-position">GM - Operations & Quality</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Dr Rashi Dogra.jpg')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="">Dr Rashi Dogra</a></h5>
                  <div class="doctor-box-position">GM - Growth (Gurgaon)</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Lalit Verma.jpeg')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="">Lalit Verma</a></h5>
                  <div class="doctor-box-position">AGM & Program Head – IVF (Gurgaon)</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Jyoti Kapoor.jpeg')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="">Jyoti Kapoor</a></h5>
                  <div class="doctor-box-position">Senior Manager – Admin</div>
               </div>
            </div>
            
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Davender.jpg')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="">Davender Kumar</a></h5>
                  <div class="doctor-box-position">Senior Embryologist</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Sheemol Saji.JPG')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="">Sheemol Saji</a></h5>
                  <div class="doctor-box-position">Nursing Superintendent</div>
               </div>
            </div>
            
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Mohan Prakash Agarwal.JPG')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="">Mohan Prakash Agarwal</a></h5>
                  <div class="doctor-box-position">Manager - Accounts</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Prince Kumar.JPG')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="">Prince Kumar</a></h5>
                  <div class="doctor-box-position">Manager - Accounts</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Navneet Kaur.JPG')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="">Navneet Kaur</a></h5>
                  <div class="doctor-box-position">Manager - HR</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Smriti Rana.jpg')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="">Smriti Rana</a></h5>
                  <div class="doctor-box-position">Manager - Digital</div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--section-->
    <!--section-->
   <div class="section pb-70">
      <div class="container">
         <div class="title-wrap text-center">
            <h3 class="h1">Our International Patients Team</h3>
            <div class="h-decor"></div>
         </div>
         <div class="row justify-content-center">
            <div class="col-sm-6 col-md-3 mb-3 d-none">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Smriti Rana.jpg')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="javascript:void(0)">Kartik Kalra</a></h5>
                  <div class="doctor-box-position">AGM - International Patient Services</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Yousuf.jpeg')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="javascript:void(0)">Yousuf Alam</a></h5>
                  <div class="doctor-box-position">Sr. Manager - International Patient Services (Centre Head - Bangladesh)</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Shahanwaj Alam.DNG')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="javascript:void(0)">Shahanwaj Alam</a></h5>
                  <div class="doctor-box-position">Sr. Manager - International Patient Services</div>
               </div>
            </div>
            <div class="col-sm-6 col-md-3 mb-3">
               <div class="our-team text-center">
                  <a href="javascript:void(0)">
                     <div class="team-img"><img src="{{asset('assets/images/doctors/Zishan.jpeg')}}" class="img-fluid" alt="" /></div>
                  </a>
                  <h5 class="doctor-box-name"><a href="javascript:void(0)">Zishan Haider</a></h5>
                  <div class="doctor-box-position">Manager - International Patient Services</div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!--section-->
</div>

@endsection

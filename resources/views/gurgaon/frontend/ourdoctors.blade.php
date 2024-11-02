@extends('gurgaon.frontend.layouts.main')

@section('main-container')




</head>

<body>

    

    

  

<div class="page-content">

    <!--section-->

    <div class="section mt-0">

        <div class="container-fluid">

            <div class="row">

                <img src="{{asset('public_gurgaon/assets/images/doctors/SCI-Doctors.webp')}}" class="img-fluid" alt="" />

            </div>

        </div>

    </div>

    <!--//section-->

    <!--section-->

    <div class="section mt-0">

        <div class="breadcrumbs-wrap">

            <div class="container">

                <div class="breadcrumbs">

                    <a href="{{ route('gurgaon.index') }}">Home</a>

                    <span>Our Doctors</span>

                </div>

            </div>

        </div>

    </div>

    <!--//section-->

    <!--section-->



    <div class="section pb-70" >

        <div class="container">

            <div class="title-wrap text-center">

                <h2 class="h1">Our Doctors</h2>

                <div class="h-decor"></div>

            </div>

            <div class="row">

			<div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('gurgaon.dr-shambhav-chandra') }}"><img src="{{asset('public_gurgaon/assets/images/doctors/Dr_Shambhav.jpg')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('gurgaon.dr-shambhav-chandra') }}">Dr Shambhav Chandra</a></h5>

                            

                            <div class="doctor-box-text">

                               <p>General Surgeon, Bariatric Surgeon, Laparoscopic Surgeon</p>

                           

                            </div>

                            <div class="doctor-box-position"></div>

                            <div class="doctor-box-text">

                                <p></p>

                                <p></p>

                                <p></p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('gurgaon.dr-shambhav-chandra') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

               <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('gurgaon.dr-yash-bhatia') }}"><img src="{{asset('public_gurgaon/assets/images/doctors/dr-yesh.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('gurgaon.dr-vineet-kaul') }}">Dr Yash Bhatia</a></h5>

                            

                            <div class="doctor-box-text">

                                <p>MBBS</p>

                                <p>MS Orthopaedics, MCh Orthopaedics</p>

                            </div>

                            <div class="doctor-box-position"></div>

                            <div class="doctor-box-text">

                                <p></p>

                                <p></p>

                                <p></p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('gurgaon.dr-yash-bhatia') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('gurgaon.dr-pawan-sharma') }}"><img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Pawan.jpg')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('gurgaon.dr-vineet-kaul') }}">Dr. Pawan Sharma</a></h5>

                            

                            <div class="doctor-box-text">

                                <p>MBBS</p>

                                <p>MD - General Medicine</p>

                            </div>

                            <div class="doctor-box-position"></div>

                            <div class="doctor-box-text">

                                <p></p>

                                <p></p>

                                <p></p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('gurgaon.dr-pawan-sharma') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

               

                 <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('gurgaon.dr-vineet-kaul') }}"><img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Vineet-Kaul.jpg')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('gurgaon.dr-vineet-kaul') }}">Dr Vineet Kaul</a></h5>

                            <div class="doctor-box-position"></div>

                            <div class="doctor-box-text">

                                <p></p>

                                <p></p>

                                <p></p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('gurgaon.dr-vineet-kaul') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('gurgaon.dr-vishal-dutt-gour') }}"><img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Vishal-Dutt-Gour-1.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('gurgaon.dr-vishal-dutt-gour') }}">Dr. Vishal Dutt Gour</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text">

                                <p>Urologist & Andrologist (Expert of Male Infertility)</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('gurgaon.dr-vishal-dutt-gour') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

               

               

                

                

                

                

                

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('gurgaon.dr-shivanisachdevgour') }}"><img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Shivani-Sachdev-Gour.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('gurgaon.dr-shivanisachdevgour') }}">Dr. Shivani Sachdev Gour</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text">

                                <p>IVF & Surrogacy Specialist</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('gurgaon.dr-shivanisachdevgour') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                

               

                

               

                

               

               

                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="equal_height_doctor">
                        <div class="doctor-box text-center">
                            <div class="">
                                <a href="{{ route('gurgaon.dr-himanshu-shekhar') }}"><img src="{{asset('public_gurgaon/assets/images/doctors/Dr-Himanshu-Shekhar.png')}}" class="img-fluid" alt="" /></a>
                            </div>
                            <h5 class="doctor-box-name"><a href="{{ route('gurgaon.dr-himanshu-shekhar') }}">Dr. Himanshu Shekhar</a></h5>
                            <div class="doctor-box-position"> MBBS</div>
                            <div class="doctor-box-text">
                                <p>MD Internal Medicine</p>
                            </div>
                            <div class="doctor-box-bottom">
                                <a href="{{ route('gurgaon.dr-himanshu-shekhar') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                </div>


                
                

                

               

                

                <!--<div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="#"><img src="{{asset('public_gurgaon/assets/images/doctors/Varshney-300x300.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="#">Dr. S Varshney</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text">

                                <p>Anaesthesia</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="#" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>-->

                

               <!-- <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="#"><img src="{{asset('public_gurgaon/assets/images/doctors/user.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="#">Dr. Vinay</a></h5>

                            <div class="doctor-box-position"> Consultant</div>

                            <div class="doctor-box-text">

                                <p>Neonatologist & Paediatrics</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="#" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>-->

               

                

               

                

                

                <!--<div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="#"><img src="{{asset('public_gurgaon/assets/images/doctors/user.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="#">Dr. Nabanita Chatterjee</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text doctor_des_height_equal">

                                <p>General Surgeon,Proctologist & Laparoscopic Surgeon</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="#" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>-->

                

                

               

                

               

                

                

                

                

                

                

                

                

                

                

                

                

              

                

                

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('gurgaon.dr-nalini-gupta') }}"><img src="{{asset('public_gurgaon/assets/images/doctors/Nalini.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('gurgaon.dr-nalini-gupta') }}">Dr. Nalini Gupta</a></h5>

                            <div class="doctor-box-position">IVF/Fertility Specialist</div>

                            <!--<div class="doctor-box-text doctor_des_height_equal">-->

                            <!--    <p>MS - General Surgery</p>-->

                            <!--</div>-->

                            <div class="doctor-box-bottom">

                                <a href="{{ route('gurgaon.dr-nalini-gupta') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('gurgaon.dr-itishree-gupta') }}"><img src="{{asset('public_gurgaon/assets/images/doctors/Itishree.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('gurgaon.dr-itishree-gupta') }}">Dr. Itishree Gupta</a></h5>

                            <div class="doctor-box-position">Reconstructive & Plastic Surgery</div>

                            <!--<div class="doctor-box-text doctor_des_height_equal">-->

                            <!--    <p>MS - General Surgery</p>-->

                            <!--</div>-->

                            <div class="doctor-box-bottom">

                                <a href="{{ route('gurgaon.dr-itishree-gupta') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('gurgaon.dr-punit-dilawari') }}"><img src="{{asset('public_gurgaon/assets/images/doctors/Punit.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('gurgaon.dr-punit-dilawari') }}">Dr. Punit Dilawari</a></h5>

                            <div class="doctor-box-position">Orthopaedics & Joint Replacement</div>

                            <!--<div class="doctor-box-text doctor_des_height_equal">-->

                            <!--    <p>MS - General Surgery</p>-->

                            <!--</div>-->

                            <div class="doctor-box-bottom">

                                <a href="{{ route('gurgaon.dr-punit-dilawari') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

               

                

                

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('gurgaon.dr-ankita-mittal') }}"><img src="{{asset('public_gurgaon/assets/images/doctors/Ankita.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('gurgaon.dr-ankita-mittal') }}">Dr. Ankita Mittal</a></h5>

                            <div class="doctor-box-position">Obs/Gynecology</div>

                            <!--<div class="doctor-box-text doctor_des_height_equal">-->

                            <!--    <p>MS - General Surgery</p>-->

                            <!--</div>-->

                            <div class="doctor-box-bottom">

                                <a href="{{ route('gurgaon.dr-ankita-mittal') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('gurgaon.dr-nisha-ohri') }}"><img src="{{asset('public_gurgaon/assets/images/doctors/Nisha.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('gurgaon.dr-nisha-ohri') }}">Dr. Nisha Ohri</a></h5>

                            <div class="doctor-box-position">Obs/Gynecology</div>

                            <!--<div class="doctor-box-text doctor_des_height_equal">-->

                            <!--    <p>MS - General Surgery</p>-->

                            <!--</div>-->

                            <div class="doctor-box-bottom">

                                <a href="{{ route('gurgaon.dr-nisha-ohri') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                
                @foreach($doctors as $doctor)
                <div class="col-sm-6 col-md-4 mb-3">
                    <div class="equal_height_doctor">
                        <div class="doctor-box text-center">
                            <div class="">
                                <a href="{{ route('doctors.gurgaonshow', $doctor->slug) }}">
                                    <img src="{{ asset('storage/' . $doctor->photo_path) }}" alt="{{ $doctor->name }}'s Profile" class="img-fluid">
                                </a>
                            </div>
                            <h5 class="doctor-box-name">
                                <a href="{{ route('doctors.gurgaonshow', $doctor->slug) }}">{{ $doctor->name }}</a>
                            </h5>
                            <div class="doctor-box-position">{{ $doctor->degree_section }}</div>
                            <div class="doctor-box-text">
                                <p>{{ $doctor->speciality }}</p>
                            </div>
                            <div class="doctor-box-bottom">
                                <a href="{{ route('doctors.gurgaonshow', $doctor->slug) }}" class="btn btn-sm btn-hover-fill">
                                    <i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

                

                

            </div>

        </div>

    </div>

</div>

@endsection


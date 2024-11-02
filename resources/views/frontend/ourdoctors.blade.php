@extends('frontend.layouts.main')

@section('main-container')

@section('define_robots', 'index, follow')

@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')

<style>

    .doctor-box-text {

    height: 50px;

}

</style>

</head>

<body>

    

    

  

<div class="page-content">

    <!--section-->

    <div class="section mt-0">

        <div class="container-fluid">

            <div class="row">

                <img src="{{asset('assets/images/doctors/SCI-Doctors.webp')}}" class="img-fluid" alt="" />

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

                

                <div class="col-sm-6 col-md-4 mb-3" style="display:none;">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-vineet-kaul') }}"><img src="{{asset('assets/images/doctors/Dr-Vineet-Kaul.jpg')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-vineet-kaul') }}">Dr Vineet Kaul</a></h5>

                            <div class="doctor-box-position"></div>

                            <div class="doctor-box-text">

                                <p></p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-vineet-kaul') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-guruditta-khurana') }}"><img src="{{asset('assets/images/doctors/Dr-Guruditta.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-guruditta-khurana') }}">Dr Guruditta Khurana</a></h5>

                            <div class="doctor-box-position"></div>

                            <div class="doctor-box-text">

                                <p></p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-guruditta-khurana') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                 <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-subi-singh') }}"><img src="{{asset('assets/images/doctors/Dr-Subi-Singh.jpeg')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-subi-singh') }}">Dr Subi Singh</a></h5>

                            <div class="doctor-box-position">BDS | MDS</div>

                            <div class="doctor-box-text">

                                <p>Orthodontist</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-subi-singh') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-saurabh-kapoor') }}"><img src="{{asset('assets/images/doctors/Dr-Saurabh-Kapoor.jpeg')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-saurabh-kapoor') }}">Dr Saurabh Kapoor</a></h5>

                            <div class="doctor-box-position">Senior Consultant – Spine Surgery</div>

                            <div class="doctor-box-text">

                                <p>Spine Surgery Specialist</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-saurabh-kapoor') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-gautam-banga') }}"><img src="{{asset('assets/images/doctors/dr-gautam-banga-new.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-gautam-banga') }}">Dr. Gautam Banga</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text">

                                <p>Urologist & Andrologist (Specialist of Urethra & Penile Surgeries)</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-gautam-banga') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-vishal-dutt-gour') }}"><img src="{{asset('assets/images/doctors/Dr-Vishal-Dutt-Gour-1.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-vishal-dutt-gour') }}">Dr. Vishal Dutt Gour</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text">

                                <p>Urologist & Andrologist (Expert of Male Infertility)</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-vishal-dutt-gour') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

               

                

                

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-manish-gupta') }}"><img src="{{asset('assets/images/doctors/Dr-Manish-Gupta.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-manish-gupta') }}">Dr. Manish Gupta</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text">

                                <p>ENT & Head,Neck Surgeon</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-manish-gupta') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-lalit-bafna') }}"><img src="{{asset('assets/images/doctors/Dr-Lalit-Bafna-200x200.jpg')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-lalit-bafna') }}">Dr. Lalit Bafna</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text doctor_des_height_equal">

                                <p>Orthopedic, Sports & Joint Replacement Surgeon</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-lalit-bafna') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-nishant-soni') }}"><img src="{{asset('assets/images/doctors/nisant-200x200.jpg')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-nishant-soni') }}">Dr. Nishant Soni</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text doctor_des_height_equal">

                                <p>Peripheral Nerve & Orthopedic surgeon</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-nishant-soni') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

               

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-shivanisachdevgour') }}"><img src="{{asset('assets/images/doctors/Dr-Shivani-Sachdev-Gour.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-shivanisachdevgour') }}">Dr. Shivani Sachdev Gour</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text">

                                <p>IVF & Surrogacy Specialist</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-shivanisachdevgour') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-dhwani-mago') }}"><img src="{{asset('assets/images/doctors/Dr-Dhwani-Mago-300x300.jpg')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-dhwani-mago') }}">Dr. Dhwani Mago</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text">

                                <p>Gynaecologist & Obstetrics</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-dhwani-mago') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-mamta-goel') }}"><img src="{{asset('assets/images/doctors/Dr-Mamta-Goel-1.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name dr_name_height_equal"><a href="{{ route('dr-mamta-goel') }}">Dr. Mamta Goel</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text">

                                <p>Gynaecologist & Obstetrics</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-mamta-goel') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('drsumeetshah') }}"><img src="{{asset('assets/images/doctors/WhatsApp-Image-2020-11-12-at-4.21.36-PM-1-200x200.jpeg')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name dr_name_height_equal"><a href="{{ route('drsumeetshah') }}">Dr. Sumeet Shah</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text">

                                <p>Laparoscopic Surgeon & Bariatric Surgeon</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('drsumeetshah') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-amit') }}"><img src="{{asset('assets/images/doctors/Dr-Amit-min-1617x2048.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name dr_name_height_equal"><a href="{{ route('dr-amit') }}">Dr. Amit Parashar</a></h5>

                            <div class="doctor-box-position"> Senior Consultant</div>

                            <div class="doctor-box-text">

                                <p>BDS, MDS <br>Dental Surgeon</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-amit') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

               

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-sirisha-singh') }}"><img src="{{asset('assets/images/doctors/Dr-Sirisha-Singh.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name dr_name_height_equal"><a href="{{ route('dr-sirisha-singh') }}">Dr. Sirisha Singh (The SKIN CENTRE)</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text">

                                <p>Dermatologist & Cosmetologist</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-sirisha-singh') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-sukhbir-singh') }}"><img src="{{asset('assets/images/doctors/Dr-Sukhbir-Singh.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name dr_name_height_equal"><a href="{{ route('dr-sukhbir-singh') }}">Dr. Sukhbir Singh</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text">

                                <p>Plastic & Cosmetic Surgeon</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-sukhbir-singh') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-himanshu-shekhar') }}"><img src="{{asset('assets/images/doctors/Dr-Himanshu-Shekhar.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name dr_name_height_equal"><a href="{{ route('dr-himanshu-shekhar') }}">Dr. Himanshu Shekhar</a></h5>

                            <div class="doctor-box-position"> MBBS</div>

                            <div class="doctor-box-text">

                                <p>MD Internal Medicine</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-himanshu-shekhar') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-sanjiv-gupta') }}"><img src="{{asset('assets/images/doctors/Dr-Sanjiv-Gupta.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-sanjiv-gupta') }}">Dr. Sanjiv Gupta</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text">

                                <p>Ophthalmologist</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-sanjiv-gupta') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-salsabeel-syed') }}"><img src="{{asset('assets/images/doctors/Dr-Salsabeel-Syed.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-salsabeel-syed') }}">Dr. Salsabeel Syed</a></h5>

                            <div class="doctor-box-position"> Consultant</div>

                            <div class="doctor-box-text">

                                <p>Radiologist</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-salsabeel-syed') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                <!--<div class="col-sm-6 col-md-4 mb-3">-->

                <!--    <div class="equal_height_doctor">-->

                <!--        <div class="doctor-box text-center">-->

                <!--            <div class="">-->

                <!--                <a href=""><img src="{{asset('assets/images/doctors/Dr-Arvind-1-300x300.png')}}" class="img-fluid" alt="" /></a>-->

                <!--            </div>-->

                <!--            <h5 class="doctor-box-name"><a href="">Dr. Arvind Kumar</a></h5>-->

                <!--            <div class="doctor-box-position">Senior Consultant</div>-->

                <!--            <div class="doctor-box-text">-->

                <!--                <p>General Surgeon & LaparoscopicSurgeon</p>-->

                <!--            </div>-->

                <!--            <div class="doctor-box-bottom">-->

                <!--                <a href="" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>-->

                <!--            </div>-->

                <!--        </div>-->

                <!--    </div>-->

                <!--</div>-->

                <!--<div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="#"><img src="{{asset('assets/images/doctors/Varshney-300x300.png')}}" class="img-fluid" alt="" /></a>

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

                                <a href="#"><img src="{{asset('assets/images/doctors/user.png')}}" class="img-fluid" alt="" /></a>

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



                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('drvishakhamunjal') }}"><img src="{{asset('assets/images/doctors/Dr-vishakha.jpg')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('drvishakhamunjal') }}">Dr. Vishakha Munjal</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text">

                                <p>Gynaecologist & Obstetrics</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('drvishakhamunjal') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                <!--<div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="#"><img src="{{asset('assets/images/doctors/user.png')}}" class="img-fluid" alt="" /></a>

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

                                <a href="{{ route('dr-niraj-kumar-nikunj') }}"><img src="{{asset('assets/images/doctors/Niraj.jpg')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-niraj-kumar-nikunj') }}">Dr. Niraj Kumar Nikunj</a></h5>

                            <div class="doctor-box-position">Neonatology & Pediatrics Consultant</div>

                            <div class="doctor-box-text doctor_des_height_equal">

                                <p>MBBS (UCMS, Delhi)</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-niraj-kumar-nikunj') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-shilpi-singh') }}"><img src="{{asset('assets/images/doctors/Shilpi.jpg')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-shilpi-singh') }}">Dr. Shilpi Singh</a></h5>

                            <div class="doctor-box-position">Consultant Obstetrician and Gynaecologist</div>

                            <div class="doctor-box-text doctor_des_height_equal">

                                <p>M.B.B.S, D.G.O</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-shilpi-singh') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-ruchi-tandon') }}"><img src="{{asset('assets/images/doctors/Dr-Ruchi-Tandon.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-ruchi-tandon') }}">Dr. Ruchi Tandon</a></h5>

                            <div class="doctor-box-position">Gynecologist & Obstetrician</div>

                            <div class="doctor-box-text doctor_des_height_equal">

                                <p>MD,FICMCH, FICOG, FOGSI fellow ART</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-ruchi-tandon') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                

                

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="https://scihospital.com/gurgaon/dr-daipayan-ghosh"><img src="{{asset('assets/images/doctors/Daipayan.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="https://scihospital.com/gurgaon/dr-daipayan-ghosh">Dr. Daipayan Ghosh  </a></h5>

                            <div class="doctor-box-position">General Surgery  </div>

                            <div class="doctor-box-text doctor_des_height_equal">

                                <p>Laparoscopic Surgeon, Proctologist, Bariatric Surgeon</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="https://scihospital.com/gurgaon/dr-daipayan-ghosh" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                

               

                

                <div class="col-sm-6 col-md-4 mb-3" style="display:none;">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-vicky-kuldeep') }}"><img src="{{asset('assets/images/doctors/Dr-Vicky-Kuldeep.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-vicky-kuldeep') }}">Dr. Vicky Kuldeep</a></h5>

                            <div class="doctor-box-position ">General Surgeon</div>

                           

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-vicky-kuldeep') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="#"><img src="{{asset('assets/images/doctors/dr_raj.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="#">Dr. Raj Kumar Singh</a></h5>

                            <div class="doctor-box-position">Laparoscopic General Surgeon </div>

                            <!--<div class="doctor-box-text doctor_des_height_equal">-->

                            <!--    <p>MS - General Surgery</p>-->

                            <!--</div>-->

                            <div class="doctor-box-bottom">

                                <a href="#" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                

             

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="https://scihospital.com/gurgaon/dr-itishree-gupta"><img src="{{asset('assets/images/doctors/Itishree.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="https://scihospital.com/gurgaon/dr-itishree-gupta">Dr. Itishree Gupta</a></h5>

                            <div class="doctor-box-position">Reconstructive & Plastic Surgery</div>

                            <!--<div class="doctor-box-text doctor_des_height_equal">-->

                            <!--    <p>MS - General Surgery</p>-->

                            <!--</div>-->

                            <div class="doctor-box-bottom">

                                <a href="https://scihospital.com/gurgaon/dr-itishree-gupta" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="https://scihospital.com/gurgaon/dr-punit-dilawari"><img src="{{asset('assets/images/doctors/Punit.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="https://scihospital.com/gurgaon/dr-punit-dilawari">Dr. Punit Dilawari</a></h5>

                            <div class="doctor-box-position">Orthopaedics & Joint Replacement</div>

                            <!--<div class="doctor-box-text doctor_des_height_equal">-->

                            <!--    <p>MS - General Surgery</p>-->

                            <!--</div>-->

                            <div class="doctor-box-bottom">

                                <a href="https://scihospital.com/gurgaon/dr-punit-dilawari" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

               

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="https://scihospital.com/gurgaon/dr-akansha-saxena"><img src="{{asset('assets/images/doctors/Akansha.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="https://scihospital.com/gurgaon/dr-akansha-saxena">Dr. Akansha Saxena</a></h5>

                            <div class="doctor-box-position">ENT Specialist</div>

                            <!--<div class="doctor-box-text doctor_des_height_equal">-->

                            <!--    <p>MS - General Surgery</p>-->

                            <!--</div>-->

                            <div class="doctor-box-bottom">

                                <a href="https://scihospital.com/gurgaon/dr-akansha-saxena" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="https://scihospital.com/gurgaon/dr-ankita-mittal"><img src="{{asset('assets/images/doctors/Ankita.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="https://scihospital.com/gurgaon/dr-ankita-mittal">Dr. Ankita Mittal</a></h5>

                            <div class="doctor-box-position">Obstetrics & Gynecology</div>

                            <!--<div class="doctor-box-text doctor_des_height_equal">-->

                            <!--    <p>MS - General Surgery</p>-->

                            <!--</div>-->

                            <div class="doctor-box-bottom">

                                <a href="https://scihospital.com/gurgaon/dr-ankita-mittal" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="https://scihospital.com/gurgaon/dr-nisha-ohri"><img src="{{asset('assets/images/doctors/Nisha.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="https://scihospital.com/gurgaon/dr-nisha-ohri">Dr. Nisha Ohri</a></h5>

                            <div class="doctor-box-position">Obstetrics & Gynecology</div>

                            <!--<div class="doctor-box-text doctor_des_height_equal">-->

                            <!--    <p>MS - General Surgery</p>-->

                            <!--</div>-->

                            <div class="doctor-box-bottom">

                                <a href="https://scihospital.com/gurgaon/dr-nisha-ohri" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="https://scihospital.com/gurgaon/dr-vikrant-singh"><img src="{{asset('assets/images/doctors/Vikrant.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="https://scihospital.com/gurgaon/dr-vikrant-singh">Dr. Vikrant Singh </a></h5>

                            <div class="doctor-box-position">Ayurvedic General Surgery </div>

                            <div class="doctor-box-bottom">

                                <a href="https://scihospital.com/gurgaon/dr-vikrant-singh" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                

                

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-lokesh-handa') }}"><img src="{{asset('assets/images/doctors/Handa.webp')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-lokesh-handa') }}">Dr. Lokesh Handa</a></h5>

                            <div class="doctor-box-position">MS,Mch (Plastic surgeon) </div>

                            <!--<div class="doctor-box-text doctor_des_height_equal">-->

                            <!--    <p>MS - General Surgery</p>-->

                            <!--</div>-->

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-lokesh-handa') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                

                

                 <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-ashutosh-misra') }}"><img src="{{asset('assets/images/doctors/Ashutosh.webp')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-ashutosh-misra') }}">Dr. Ashutosh Misra</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-ashutosh-misra') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="https://scihospital.com/gurgaon/dr-shweta-nawal"><img src="{{asset('assets/images/doctors/Shweta-Nawal.jpg')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name "><a href="https://scihospital.com/gurgaon/dr-shweta-nawal">Dr. Shweta Nawal</a></h5>

                            <div class="doctor-box-position">Senior Dental Consultant</div>

                            <div class="doctor-box-bottom">

                                <a href="https://scihospital.com/gurgaon/dr-shweta-nawal" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-s-sen-gupta') }}"><img src="{{asset('assets/images/doctors/user.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-s-sen-gupta') }}">Dr. S. Sen Gupta  </a></h5>

                            <div class="doctor-box-position">MD MEDICINE </div>

                          

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-s-sen-gupta') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-aashima-chopra') }}"><img src="{{asset('assets/images/doctors/user.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-aashima-chopra') }}">Dr. Aashima Chopra </a></h5>

                            <div class="doctor-box-position">ENT</div>

                            <!--<div class="doctor-box-text doctor_des_height_equal">-->

                            <!--    <p>MBBS, DNB - ENT</p>-->

                            <!--</div>-->

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-aashima-chopra') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                

                

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-gurmeet-bansal') }}"><img src="{{asset('assets/images/doctors/user.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-gurmeet-bansal') }}">Dr. Gurmeet Bansal  </a></h5>

                            <div class="doctor-box-position">GYNE  </div>

                            <div class="doctor-box-text doctor_des_height_equal">

                                <p>Gynecologist & Obstetrician </p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-gurmeet-bansal') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-harsh-priyadharshi') }}"><img src="{{asset('assets/images/doctors/user.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-harsh-priyadharshi') }}">Dr. Harsh Priyadharshi </a></h5>

                            <div class="doctor-box-position">Orthopedic Spine Specialist </div>

                            <div class="doctor-box-text doctor_des_height_equal">

                                <p>MBBS, MS - Orthopaedics</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-harsh-priyadharshi') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

               

                

                

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-nabanita-chatterjee') }}"><img src="{{asset('assets/images/doctors/user.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-nabanita-chatterjee') }}">Dr. Nabanita Chatterjee </a></h5>

                            <div class="doctor-box-position">General surgeon </div>

                            <div class="doctor-box-text doctor_des_height_equal">

                                <p>MS - General Surgery</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-nabanita-chatterjee') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-rohit-krishna') }}"><img src="{{asset('assets/images/doctors/user.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-rohit-krishna') }}">Dr. Rohit Krishna</a></h5>

                            <div class="doctor-box-position">MBBS,MS,Mch (Plastic surgeon) </div>

                            <!--<div class="doctor-box-text doctor_des_height_equal">-->

                            <!--    <p>MS - General Surgery</p>-->

                            <!--</div>-->

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-rohit-krishna') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                

                

                

               

                

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-ajay-sinha') }}"><img src="{{asset('assets/images/doctors/user.png')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-ajay-sinha') }}">Dr. Ajay Sinha</a></h5>

                            <div class="doctor-box-position">Senior Consultant</div>

                            <div class="doctor-box-text">

                                <p>Internal Medicine & Diabetology</p>

                            </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-ajay-sinha') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

               

                

                

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-shitij-arora') }}"><img src="{{asset('assets/images/doctors/dr-shitij-arora.webp')}}" class="img-fluid" alt="Dr. Shitij Arora General Surgeon" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-shitij-arora') }}">Dr. Shitij Arora</a></h5>

                            <div class="doctor-box-position">MBBS, MS - General Surgery</div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-shitij-arora') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-gayatri-bala-juneja') }}"><img src="{{asset('assets/images/doctors/dr-gayatri-bala-juneja.webp')}}" class="img-fluid" alt="" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-gayatri-bala-juneja') }}">Dr. Gayatri Bala Juneja</a></h5>

                            <div class="doctor-box-position">Obstetrics & Gynecology </div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-gayatri-bala-juneja') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="https://scihospital.com/gurgaon/dr-kashmiri-lal-kathuria"><img src="https://scihospital.com/gurgaon/public/assets/images/doctors/Dr. Kashmiri Lal Kathuria.webp" class="img-fluid" alt="Dr Kashmiri Lal kathuria" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="https://scihospital.com/gurgaon/dr-kashmiri-lal-kathuria">Dr. Kashmiri Lal Kathuria</a></h5>

                            <div class="doctor-box-position">MBBS, MD - General Medicine</div>

                            <div class="doctor-box-bottom">

                                <a href="https://scihospital.com/gurgaon/dr-kashmiri-lal-kathuria" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                

                

                <div class="col-sm-6 col-md-4 mb-3" style="display:none;">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="https://scihospital.com/gurgaon/dr-shivam-sharma"><img src="https://scihospital.com/gurgaon/public/assets/images/doctors/Dr-Shivam-Sharma.webp" class="img-fluid" alt="Dr Shivam Sharma General Physician" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="https://scihospital.com/gurgaon/dr-shivam-sharma">Dr. Shivam Sharma</a></h5>

                            <div class="doctor-box-position">MBBS, MD - General Medicine</div>

                            <div class="doctor-box-bottom">

                                <a href="https://scihospital.com/gurgaon/dr-shivam-sharma" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-hena-kausar') }}"><img src="https://scihospital.com/public/assets/images/doctors/dr-hena-kausar.webp" class="img-fluid" alt="Dr. H. Kausar Laparoscopic Surgeon (Obs & Gyn)" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-hena-kausar') }}">Dr. H. Kausar</a></h5>

                            <div class="doctor-box-position">Obstetrics & Gynaecology</div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-hena-kausar') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

                            </div>

                        </div>

                    </div>

                </div>

                 <div class="col-sm-6 col-md-4 mb-3">

                    <div class="equal_height_doctor">

                        <div class="doctor-box text-center">

                            <div class="">

                                <a href="{{ route('dr-sanjeev-gupta') }}"><img src="{{asset('assets/images/doctors/dr-sanjeev-gupta.jpeg')}}" class="img-fluid" alt="Dr-Rakesh Kumar General Surgeon" /></a>

                            </div>

                            <h5 class="doctor-box-name"><a href="{{ route('dr-sanjeev-gupta') }}">Dr. Sanjeev Gupta</a></h5>

                            <div class="doctor-box-position">Consultant - General Surgery</div>

                            <div class="doctor-box-bottom">

                                <a href="{{ route('dr-sanjeev-gupta') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>View Profile</span><i class="icon-right-arrow"></i></a>

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


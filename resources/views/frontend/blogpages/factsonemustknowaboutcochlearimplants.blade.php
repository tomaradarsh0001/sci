@extends('frontend.layouts.main') @section('main-container') 
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')

</head>
<body>
    
    
  
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('/') }}">Home</a>
                    <a href="{{ route('blog') }}">Blog</a>
                    <span>Facts you Must Know about Cochlear Implants  </span>
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
                        <img src="{{asset('assets/images/blog/Facts-one-must-know-about-Cochlear-Implants.png')}}" alt="" class="img-fluid mb-3" />
                        <h1 class="blog_title">Facts you Must Know about Cochlear Implants  </h1>
                        <p>Even though scientists developed the idea of a device that helps sound vibrations bypass the injured areas </p>
                       <p>Cochlear implants of the ear, it was around 1980 when such a device started to become available for everyone.</p>
                        <p>From children to old people, everyone is eligible to have cochlear implant surgery. If you are thinking about getting such an implant for yourself, here are some surprising facts that you should know about cochlear implants.  </p>
                        <h2>1. It is not an Implanted Hearing Aid  </h2>
                        <p>There is a huge difference between hearing aids and cochlear implants. While hearing aids only amplify sound, cochlear implants change sound vibrations into signals so that they can bypass the injured areas of your ear. If a hearing aid is not helping you enough, you must find out if you may be a Cochlear Implant candidate.  </p>
                        
                        <h2>2. It Is not connected Through Your skull  </h2>
                        <p>As most people can only see the external processor of the implant, they have this wrong notion. The truth is, you will require surgery to insert the receiver part of the cochlear implants and the electrodes.</p>
                        
                        <h3>3. You Can Go Swimming  </h3>
                        <p>Do you understand the difference between water resistance and water-proof? Then you will know whether the cochlear implants you are choosing is good for swimming or not. You can wear a water-resistant device while swimming or taking part in different water sports. However, if your machine is water-resistant, you just have to remove the external device before going into the water.  </p>
                        
                        <h3>4. You Can Play Sports  </h3>
                        <p>For sports that require you to wear a helmet, you have to wear protective headgear to protect the external device. Otherwise, you do not even have to wear any headgear for protecting the device. From doing gym to playing sports like football and basketball, you can do everything while wearing the cochlear implants.  </p>
                        
                        <h3>5. Age Does Not Matter  </h3>
                        <p>Although we mostly see children getting cochlear implants, babies, as well as people in their 90s, can have such implants as well. The only cause of getting such an implant is that you have to be healthy to undergo the surgery. The infants who get the implant earlier in their life benefit from picking up the language earlier than the children who get the implant later.</p>
                        
                        <h3>6. No Replacements  </h3>
                        <p>Unless the internal electrodes malfunction or break, or the wire gets damaged, there is no need for you to replace the cochlear implants. These implants are designed to last for years. Also, children do not outgrow the implants. That means they do not require any replacements of their implants as they grow.  </p>
                         
                        <h5>7. Cochlear Implants Can Be Costly  </h5>
                        <p>The cochlear implants cost varies depending on the facility & type of Implant selected.</p>
                        <p>This are only a handful of information about cochlear implants. You can know more about them by conducting a little research. The more you gather knowledge, the easier it will be for you to make a knowledgeable decision. </p>
                        
                        
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="related_post">
                        <p class="heading_Ser">Related Services</p>
                        <ul class="side_Serv_related">
                            <li><a href="https://scihospital.com/best-ent-hospital"><i class="fa fa-long-arrow-right"></i> ENT Hospital in Delhi </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

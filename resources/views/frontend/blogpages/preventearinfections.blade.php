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
                    <span>Ear Infections: How to Prevent It During Monsoon?</span>
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
                        <img src="{{asset('assets/images/blog/sci-blog-Ear-Infection.png')}}" alt="" class="img-fluid mb-3" />
                        <h3 class="blog_title">Ear Infections: How to Prevent It During Monsoon?</h3>
                        <p>Monsoon is here finally. The monsoon gives us the much-needed respite from the scorching heat of the summer; however, at the same time, it brings a lot of ailment, such as waterborne diseases, infections, and more.</p>
                        <h5>Ear Infection</h5>
                        <p>Well, ear infections are common among the young and the adults, during the monsoon. Stopping the infection is very important to avoid earaches or ear discharge from the infected ear. However, to stop the infection, one should try to understand the cause. Only then it would be able to lower the chance of the infection from spreading further</p>
                        
                        <h5>Why Do We Get Ear Infection?</h5>
                        <p>Infections can affect any part of the ear, such as the external ear, middle ear, and rarely the inner ear. Well, the cause of infection is pretty simple. During the rainy season, there is an increase in the humidity level. This is the perfect condition for bacteria and fungus to grow. Debris etc in the ear or minor bruises from earbuds etc can start these.</p>
                        <p>Other causes of infection are cold or flu and allergies. These conditions lead to congestion and swelling in the nasal passage and middle ear along with the throat. When fluids start to build-up in the middle ear, it causes ear infection. In short, one gets to see two-types of infection, bacterial infection, and fungal infection. It’s better to consult an ENT specialist to know about the type of infection one is suffering from</p>
                        
                        <h5>Know  Some Common Symptoms  </h5>
                        <p>Whether the infection is on the inner, outer, or middle portion of the ear; some common symptoms are:</p>
                        
                        <ul class="list_blog">
                            <li>Severe pain in the infected ear</li>
                            <li>Discharge from the infected ear</li>
                            <li>Fever can be a sign of infection</li>
                            <li>Severe headache along with pain</li>
                            <li>Reduced hearing and also dizziness</li>
                        </ul>
                        
                        
                        <p>These are common signs of an ear infection. However, there are several ways to prevent infection during monsoon. Want to know how? Read on.</p>
                        <h5>Right Way to Prevent It    </h5>
                        <p>During the monsoon, the middle ear gets badly affected by a bacterial infection, which starts from the throat. To prevent any kind of ear infection, certain things must be kept in mind. Take a look:</p>
                        
                        <ul class="list_blog">
                            <li>Don’t drink too much of cold drinks or cold food that might trouble the throat. Instead, one can take coffee or soup.</li>
                            <li>Do salt-water gargle as it would prevent any kind of throat infection.</li>
                            <li>Keep your ear clean. However, for cleaning the ear, you shouldn’t put inside anything as it can cause injury to the eardrums.</li>
                            <li>Clean the outer part of the ear with a clean cloth after a shower.</li>
                            <li>Clean the earphones and Bluetooth devices with a disinfectant. This would prevent any infection of the ear canal.</li>
                            <li>The moment you suffer from pain or any kind of discomfort, go and talk to a doctor. An ENT specialist will provide the necessary medicines to cure the infection.</li>
                            <li>Apply the ear drops as recommended by the doctor. These drops can help and prevent any ear infection.</li>
                        </ul>
                        
                        <p>Follow these tips to prevent ear infection easily. Seek medical help if it seems necessary.</p>
                        
                        
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="related_post">
                        <p class="heading_Ser">Related Services</p>
                        <ul class="side_Serv_related">
                            <li><a href="https://scihospital.com/sinus-infection-treatment"><i class="fa fa-long-arrow-right"></i> Sinus Infection TreatmenT </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

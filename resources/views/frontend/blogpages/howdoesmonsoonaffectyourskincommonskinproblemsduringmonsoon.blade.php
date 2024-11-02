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
                    <span>HOW DOES MONSOON AFFECT YOUR SKIN? COMMON SKIN PROBLEMS DURING MONSOON?</span>
                </div>
            </div>
        </div>
    </div>

    <!--section-->
    <div class="section page-content-first">
        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="blog-card-details">
                        <img src="{{asset('assets/images/blog/how-does-monsoon-affect-your-skin.png')}}" alt="" class="img-fluid mb-3" />
                        <h1 class="blog_title">HOW DOES MONSOON AFFECT YOUR SKIN? COMMON SKIN PROBLEMS DURING MONSOON? </h1>
                        <h2>Introduction</h2>
                        <p>Monsoon brings relief from the sweltering dry summer heat. It brings in joy and freshness to the air. The high ambient humidity and excessive sweating can however present a fresh set of skin problems. The high humidity also causes frizzy hair and bad hair days for a vast majority.</p>
                      
                       
                        <h3>Problems associated with monsoon </h3>
                        
                        <ol class="list_blog">
                            <li>The high humidity causes excessive sweating of the skibn</li>
                            <li>The skin becomes more oily which can cause problems in people with oily skin</li>
                            <li>Several people notice excessive hair loss</li>
                            <li>The hair becomes dry, frizzy and generally unmanageable.</li>
                        </ol>
                        
                       
                        <h3>Common Skin and Hair problems in monsoon</h3>
                        <ol class="list_blog">
                            <li><b>Fungal skin infections: </b>Fungal infections tend to become very common in people during monsoon. Fungi generally thrive in hot and humid conditions. This is very common during monsoon. The high temperature with increased sweating causes ringworm in body folds like the groin areas, beneath the breasts and between the toes. This is more common in people with an underlying condition like diabetes. To prevent this, wera loose cotton clothes, avoid wearing undergarments at night, avoid collection of sweat in body folds and keep the body folds dry.</li>
                            <li><b>Sweat rash:</b> this is medically known as miliaria. It appears as red itchy rash mainly on the torso. It is more common when a person also has an underlying fever. This happens due to a block in the sweat glands. It usually settles down spontaneously when the person moves to a cool, well ventilated room. It can be prevented by wearing loose cotton clothes and staying in a cool environment.</li>
                            <li><b>Smelly underarms:</b> The increased sweating tends to cause smelly underarms. To counter this, people use more deodourants which can cause an allergic rash. To avoid this, wear loose cotton clothes to prevent sweat accumulation.</li>
                            <li><b>Acne:</b> People with intrinsically oily skin tend to have more break-outs during the monsoon season. This will need to be managed by a dermatologist.</li>
                            <li><b>Eczema :</b> The high humidity and excessive sweating tends to make the skin dry increasing the chances of eczema. It can present as a itchy red rash and often in people who are known to have eczema in the past.</li>
                            <li><b>Dull and frizzy hair: </b>The high humidity tends the hair to go dry, frizzy and iunmanageable. This tends to be more common in people who use hot water to shampoo their hair or who use a hair brush on wet hair. This needs to be managed by using sulphate free shampoos, cold water for shampooing,</li>
                        </ol>
                        <h4>CONCLUSION</h4>
                        <p>Monsoon does increase the chances of certain skin and hair issues. Most issues can be sorted out by good skin care and hygiene. However, some will need the help of a dermatologist.</p>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

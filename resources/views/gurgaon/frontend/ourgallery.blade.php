
@extends('gurgaon.frontend.layouts.main')
@section('main-container')


</head>
<body>
    
    
  
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="index.php">Home</a>
                    <span>Our Gallery</span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section page-content-first">
        <div class="container">
            <div class="text-center mb-2 mb-md-3 mb-lg-4">
                <h1>Our Gallery</h1>
                <div class="h-decor"></div>
            </div>
        </div>
        <div class="container">
            <div class="filters-by-category mb-2 mb-lg-4">
                <ul class="option-set justify-content-center" data-option-key="filter">
                    <li><a href="#filter" data-option-value="*" class="selected">All</a></li>
                    <li><a href="#filter" data-option-value=".category1">Reception/Waiting Area</a></li>
                    <li><a href="#filter" data-option-value=".category2">Rooms</a></li>
                    <li><a href="#filter" data-option-value=".category3">OT and LDR</a></li>
                    <li><a href="#filter" data-option-value=".category4">OPD</a></li>
                    <li><a href="#filter" data-option-value=".category5">Patient Diaries</a></li>
                </ul>
            </div>
            <div class="gallery-wrap">
                <div class="loading-content">
                    <div class="inner-circles-loader"></div>
                </div>
                <div class="gallery-smiles gallery-isotope" id="gallery">
                    <div class="gallery-item category1">
                        <div class="twentytwenty-container">
                            <img src="{{asset('public_gurgaon/assets/images/gallery/1K1A4900-min-768x512.jpg')}}" alt="" />
                        </div>
                    </div>
                    <div class="gallery-item category1">
                        <div class="twentytwenty-container">
                            <img src="{{asset('public_gurgaon/assets/images/gallery/corridor-768x336.jpg')}}" alt="" />
                        </div>
                    </div>
                    <div class="gallery-item category2">
                        <div class="twentytwenty-container">
                            <img src="{{asset('public_gurgaon/assets/images/gallery/Deluxe-Room-min-3-768x512.jpg')}}" alt="" />
                        </div>
                    </div>
                    <div class="gallery-item category2">
                        <div class="twentytwenty-container">
                            <img src="{{asset('public_gurgaon/assets/images/gallery/M1-min-768x509.jpg')}}" alt="" />
                        </div>
                    </div>
                    <div class="gallery-item category3">
                        <div class="twentytwenty-container">
                            <img src="{{asset('public_gurgaon/assets/images/gallery/OT...-min-768x512.jpg')}}" alt="" />
                        </div>
                    </div>
                    <div class="gallery-item category3">
                        <div class="twentytwenty-container">
                            <img src="{{asset('public_gurgaon/assets/images/gallery/Recovery-Area-min-768x512.jpg')}}" alt="" />
                        </div>
                    </div>
                    <div class="gallery-item category5">
                        <div class="twentytwenty-container">
                            <div class="embed-responsive embed-responsive-16by9 mt-10">
                                <iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/YPklyv3wsNg"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen
                                ></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item category5">
                        <div class="twentytwenty-container">
                            <div class="embed-responsive embed-responsive-16by9 mt-10">
                                <iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/Ju3wWVZIv8o"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen
                                ></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item category5">
                        <div class="twentytwenty-container">
                            <div class="embed-responsive embed-responsive-16by9 mt-10">
                                <iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/SXT39VjymTM"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen
                                ></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item category5">
                        <div class="twentytwenty-container">
                            <div class="embed-responsive embed-responsive-16by9 mt-10">
                                <iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/zTWnNGyPeHE"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen
                                ></iframe>
                            </div>
                        </div>
                    </div>
                    <div class="gallery-item category5">
                        <div class="twentytwenty-container">
                            <div class="embed-responsive embed-responsive-16by9 mt-10">
                                <iframe
                                    class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/M8AXv3SlkQ0"
                                    title="YouTube video player"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen
                                ></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <!--//section-->

</div>

@endsection

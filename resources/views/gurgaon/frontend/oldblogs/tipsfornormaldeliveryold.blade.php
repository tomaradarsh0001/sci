@extends('gurgaon.frontend.layouts.main') @section('main-container')

<meta http-equiv="refresh" content="0;https://scihospital.com/blog/tips-for-normal-delivery">

<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('gurgaon.index') }}">Home</a>
                    <a href="{{ route('gurgaon.blog') }}">Blog</a>
                    <span>Tips for Normal Delivery</span>
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
                        <img src="{{asset('public_gurgaon/assets/images/blog/620x349-3.png')}}" alt="" class="img-fluid mb-3" />
                        <h3 class="blog_title">Tips for Normal Delivery</h3>
                        
                        <p><b>Trust yourself and trust your doctor –</b> Have confidence that you are strong enough to have a normal delivery. </p>
                        
                        <p><b>Labour room support – </b>Have a birth Partner who is supportive and encourages you for normal delivery. This could be your partner/ a relative/friend/ a trained labour room nurse who encourages you at every step. This person should also be well versed about labour room techniques to combat labour pain like breathing techniques, massage, bouncing on the ball etc.</p>
                        
                        <p><b>Diet –</b> Following the right diet and not gaining too much weight is crucial for normal delivery.</p>
                        
                        <p><b>Exercise–</b> to build up your stamina by simple walk and some exercises for about half an hour per day. These exercises you may learn through antenatal classes if you wish to</p>
                        
                        <p>Remember your best chance of having normal delivery is if you go in spontaneous labour.  Please do not be in any hurry to interfere if there is no valid medical indication and wait for pains to start on their own. </p>
                        
                       
                      </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

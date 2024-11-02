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
                    <span>How Does the Nuchal Cord Affect The Baby?</span>
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
                        <img src="{{asset('assets/images/blog/Nuchal-Cord.png')}}" alt="" class="img-fluid mb-3" />
                        <h3 class="blog_title">How Does the Nuchal Cord Affect The Baby?</h3>
                        <p>The term nuchal cord is used by the medical practitioners when the umbilical cord is wrapped around the neck of a baby. Sometimes associated with perinatal mortality.</p>
                        
                        <h5>What is a Nuchal Cord?</h5>
                        <p>It is also referred to as tCAN syndrome (tight Cord around the Neck Syndrome). tCAN is a type of nuchal cord rather than an uncommon type. It is seen that clusters of cardiorespiratory and neurological signs and symptoms are associated with the unique physical features that tighten the cord-around-the neck. The nuchal cord may have long term effects on infants.</p>
                        <p>This type of consequence occurs during the time of pregnancy. The umbilical cord forms the baby’s lifeline inside the womb. The umbilical cord runs from the baby’s abdomen to the placenta. It supplies the baby with oxygen, blood, and nutrients.</p>
                        <p>The umbilical cord contains three blood vessels and it is approximately 21 inches long. The majority of the nuchal cords are not dangerous but in some cases, it may vary. They are generally born healthy with the cord wrapped around their neck in a 360 degrees pattern. It advances quite fast in the 24th week it can be 12% and in the 26th week, it can reach 37%.</p>
                        
                        
                        <h5>What causes a Nuchal Cord?</h5>
                        <p>Well!!! During pregnancy, the baby moves around the womb. The baby’s acrobatic behavior might end up with a nuchal cord but the doctors consider some other factors as well.</p>
                         <ul class="list_blog">
                            <li>The healthy cords are being protected by gelatinous and soft filling known as Wharton’s Jelly. It makes the cord knot-free and thus keeps the baby safe. It helps the baby to flip and wriggle themselves in the womb. It becomes scary when there is insufficient Wharton’ jelly and then the nuchal cord gets affected.</li>
                            <li>The excessive amniotic fluid causes danger.</li>
                            <li>The cord is long but the structure is not up to the mark.</li>
                            <li>When there are twins and due to space crunch, resulting in wrapping the cord around the neck.</li>
                        </ul>
                        
                       
                        <p>A study states that one in the 2000 babies, the knot causes risks. The tightened knot might be dangerous since it might cut the blood flow and threaten the life of a baby.</p>
                        
                        
                        <h5>What happens during delivery?   </h5>
                        <p>A routine check might help in detecting this problem. The nuchal cord is loose and it can slip over the baby’s head or it can be too tight. At the time of delivery, the doctor will cut the cord before the baby’s shoulder is delivered. It keeps the cord intact and it does not tear down from the placenta until the delivery is completed.</p>
                        
                        <h5>How can it be diagnosed?</h5>
                        <p>It can be done through the ultrasound technique. It helps in identifying the nuchal cord but it cannot determine the amount of risk associated with it. The doctor can provide extra monitoring to avoid complications during delivery. The mother needs to keep calm and cooperate with the doctor. </p>
                        <p>Well, the nuchal cord is quite normal and it cannot be prevented. The healthcare team is well equipped to handle complicated cases. In a rare case, it may lead to decreased fetal movement. To avoid any complication it is better to discuss the matter with the doctor.</p>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

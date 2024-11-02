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
                    <span>Prostate Cancer Know the Symptoms and Treatment</span>
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
                        <img src="{{asset('assets/images/blog/Prostate-Cancer-Causes-Symptoms-Treatment-Options.png')}}" alt="" class="img-fluid mb-3" />
                        <h1 class="blog_title">Know the Symptoms and Prostate Cancer Treatment </h1>
                        <p>The prostate is a small walnut-shaped gland located next to the bladder. It is in the pelvis of the man and can be examined through the proper cancer diagnosis for prostate cancer treatment. The prostate weighs around one ounce. Prostate cancer develops in this part of the gland. The cancer cells can spread by breaking away from the prostate tumor. As per the doctors, its growth in the prostate can be benign or malignant.  </p>
                        
                        <h2> Benign Prostatic Hyperplasia  (BPH):</h2>
                        <ul class="list_blog">
                            <li>It does not spread to other parts of the body nor does it evade other tissues.  </li>
                            <li>It can be easily removed and it’s rarely a threat to life.  </li>
                        </ul>
                        
                        <h3><b>Malignant: </b>  </h3>
                        <ul class="list_blog">
                            <li>It can spread to lymph nodes, bones, bladder, and rectum.  </li>
                            <li>It can often be removed and sometimes it tends to grow back.  </li>
                        </ul>
                        
                        <h3><b>Prostate cancer Symptoms </b></h3>
                        <p>Some of the prostate cancer symptoms known after the cancer diagnosis are discussed below- </p>
                        <ul class="list_blog">
                            <li>Difficulty while urinating or emptying the bladder.  </li>
                            <li>A weak flow of urine.  </li>
                            <li>Frequent urinating or dribbling urine after you are done with it.</li>
                            <li>Blood in urine or semen  </li>
                            <li>Painful ejaculation.  </li>
                            <li>Pain in the lower pelvic area.</li>
                            <li>Loss of appetite and weight.  </li>
                            <li>You may experience pain in the back, thigh, pelvis, or hips.</li>
                            
                        </ul>
                        
                       
                        <h3><b>Get to Know the Causes of enlarged prostate </b> </h3>
                        <p><b>Age:</b> It is a risk factor and is found in men whose age is more than 40. The damage to the genetic material (DNA) of prostate cells can be seen in men above the age of 55. The damage or abnormal prostate can be out of control and form tumors.  </p>
                        
                        <p><b>Ethnicity:</b> African American men are more likely to get the disease at an earlier age and develop aggressive tumors that can spread quickly and cause death. </p>
                        
                        <p><b>Family History:</b> Men are likely to get the disease if their father or brother has it. The risk gets increased when the number of relatives is diagnosed with the disease. </p>
                        
                        <p><b>Geographic Location:</b>  Death from prostate cancer is higher in North America or Europe. It may be due to screening procedures, lack of exercise habits, and environmental exposures. </p>
                        
                        <p><b>Smoking:</b>  A study says that smoking increases the chance of prostate cancer. Well. Within 10 years of quitting smoking, the risk of prostate cancer goes down.  </p>
                         
                        <p><b>Diet:</b> The excessive intake of animal fats and refined sugar can fetch your poor health. Proper exercise and intake of a sufficient number of fruits and vegetables are mandatory. </p>
                        
                        <h3><b>Learn About the Prostate cancer  <a href="https://scihospital.com/enlarged-prostate"><b>Treatment</b></a> Options </b> </h3>
                        <p>The prostate cancer treatment depends on the stage and it can be screened in two ways: -  </p>
                        <ul class="list_blog">
                            <li>The prostate-specific antigen (PSA) blood test.  </li>
                            <li>Digital Rectal Examination (DRE)  </li>
                        </ul>
                        
                        <p>After screening, the available prostate cancer treatment therapies are: -  </p>
                        
                        
                        <h4><b>Surgery for prostate cancer treatment </b> </h4>
                        <p>The entire prostate gland is removed through surgery and it is known as radical prostatectomy.  </p>
                        
                        <h4><b>Chemotherapy prostate cancer treatment</b>  </h4>
                        <p>The goal is to prevent cancer from spreading to other sites.  </p>
                        
                        <h4><b>Radiation prostate cancer treatment </b>  </h4>
                        <p>It is an effective way to damage the cancer cell's DNA and they die without replicating themselves.  </p>
                        
                        <h4><b>Hormone prostate cancer Treatment </b>   </h4>
                        <p>It is called androgen deprivation therapy (ADT) which is designed to stop testosterone from being produced by blocking it from acting on the prostate cancer cells.</p>
                        <p>It is advisable to consult a doctor who will be able to design a prostate cancer treatment plan to maintain a healthy life.  </p>
                        
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="related_post">
                        <p class="heading_Ser">Related Services</p>
                        <ul class="side_Serv_related">
                            <li><a href="https://scihospital.com/enlarged-prostate"><i class="fa fa-long-arrow-right"></i>  Enlarged Prostate Treatment </a></li>
                            <li><a href="https://scihospital.com/urology-and-andrology"><i class="fa fa-long-arrow-right"></i> Urology and Andrology </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

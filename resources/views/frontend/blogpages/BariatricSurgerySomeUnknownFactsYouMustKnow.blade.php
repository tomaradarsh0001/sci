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
                    <span>Bariatric Surgery Some Unknown Facts You Must Know</span>
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
                        <img src="{{asset('assets/images/blog/sci-blog-Bariatric-Surgery.png')}}" alt="" class="img-fluid mb-3" />
                        <h3 class="blog_title">Bariatric Surgery Some Unknown Facts You Must Know</h3>
                        <p>Obesity is on the rise. Morbid Obese people find it difficult to lose their weight through exercises and diet plans. Studies showed that obese people suffer from depression as they are not able to cut the extra flab from their bodies. They overeat, which leads to more health problems, such as diabetes, high blood pressure, heart disease, and so on. </p>
                        <p>In case, you are obese and worried about your body weight, you don’t need to worry. With the help of bariatric surgery, obese people can easily get rid of the unwanted and excess fat from their body. In fact, through Bariatric surgery, obese people can start to lead a healthy and normal life.</p>
                        <h5>Busting the Myths Is Important</h5>
                        <p>Although this surgery has made some improvements over a period of time; still, there are some misconceptions about the surgery. For this reason, many people hesitate to go for this surgical procedure. </p>
                        <p>Don’t worry! If you have any doubts regarding this surgery, this post will help you out.</p>
                        <p>Misconceptions which need to be cleared.</p>
                        
                        
                        <h5>1. Bariatric Surgery is Risky </h5>
                        <p>One needs to know that every surgery carries some degree of risk depending upon the condition of the patient at the time of surgery and associated comorbidities. However, advancements in the field of surgery, especially laparoscopic surgery has reduced the risks. Before opting for this surgery, one can always talk to a bariatric surgeon.</p>
                        <h5>2. The Only Benefit of Bariatric Surgery is Weight Loss</h5>
                        <p>Yes. Bariatric Surgery helps with weight loss. However, this surgery offers a lot of other benefits as well. It helps to deal with other conditions, such as diabetes, sleep apnea, acid reflux, heart diseases, etc that are associated with obesity.</p>
                        <h5>3. Bariatric Surgery Is known as Stomach Stapling Technique</h5>
                        <p>Bariatric procedures are either restrictive or malabsorptive or a combination of both and the type of surgery done depends on BMI, comorbidities, and eating habits of the patients.</p>
                        <p>However, the majority of the procedures are restrictive in which the size of the stomach is reduced. with the help of staplers</p>
                        <h5>4. People Gain Weight Even After This Surgery</h5>
                        <p>Patients who undergo this surgery can maintain their body weight. The bariatric surgeon provides a proper diet chart, which if followed can prevent weight gain.</p>
                        <p>Some Interesting Facts</p>
                        <p>Here are some interesting unknown facts about this bariatric surgery. Let’s take a look.</p>
                         <ul class="list_blog">
                            <li>If a person is diagnosed with type-2 diabetes, they may not need to take insulin shots, if they have undergone bariatric surgery.</li>
                            <li>won’t leave a big scar. Any procedures would just involve small incisions measuring 5 to 12 mm long.</li>
                            <li>Recovery from this surgical procedure is fast. You can resume work within days.</li>
                            <li>The risk of bariatric surgery is lower in comparison to the risk posed by obesity.</li>
                            <li>Patients are given psychological and nutritional support before they go for the surgery. After all, bariatric surgery is an emotional experience.</li>
                        </ul>
                        
                       
                        <p>These are some interesting unknown facts about bariatric surgery. Do you know more interesting facts? Feel free to share it with us.</p>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

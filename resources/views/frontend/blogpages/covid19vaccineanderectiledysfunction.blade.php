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
                    <span>COVID-19 Vaccine and Erectile Dysfunction</span>
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
                        <h1 class="blog_title">COVID-19 Vaccine and Erectile Dysfunction</h1>
                        <img src="{{asset('assets/images/blog/covid-virus-3d-modeling.png')}}" alt="" class="img-fluid mb-3" />
                        
                        <p>At a time when the world is battling the COVID-19 pandemic, there are health concerns in all regards. People are not just worried about post-COVID-1 9 complications but many are also concerned about the aftermath of taking the COVID-19 vaccine. A common concern that has gripped a few have resulted from reports suggesting a possible link between COVID-19 vaccination and erectile dysfunction.</p>
                        <h2>What is Erectile Dysfunction?</h2>
                        <p>Erectile Dysfunction (ED) or impotence can be categorised as a physical or psychological condition, wherein a patient can’t get and/or keep an erection firm enough for sexual intercourse. The possible causes for the said condition can range from stress to underlying physical issues including heart diseases, high cholesterol, and diabetes. Sometimes, a combination of physical and psychological issues can also lead to dysfunction.</p>
                        <h2>Reported link between COVID-19 vaccine and erectile dysfunction</h2>
                        <p>A few reports and social media posts suggesting a link between COVID-19 vaccination and erectile dysfunction have become a cause of concern. A few other reports suggest that COVID-19 itself can increase the risk of erectile dysfunction. As per a report in Daily Mail, the researchers in Rome have claimed that the men who contract COVID-19 increase the risk of developing ED threefold. Another study in China, published in Clinical Medicine of The Lancet, claimed that SARS-CoV-2, a virus causing COVID-19 might lead to a low sperm count. Yet another social media post suggesting a similar link between the vaccine and ED had earlier gone viral in India. The post, however, was debunked later.</p>
                        <h3>What experts are saying about COVID-19 vaccine and erectile dysfunction</h3>
                        <p>The Drug Authority of India and the World Health Organisation have refuted the claims. VG Somani, chief of the Drug Authority of India, had earlier termed such claims “absolute rubbish”.  As per a report in news agency ANI, Somani had said, “We’ll never approve anything if there’s slightest of safety concern. Vaccines are 110 % safe. Some side effects like mild fever, pain & allergy are common for every vaccine. It (that people may get impotent) is absolute rubbish,” he had said. In another update on news agency AFP, the regional officer of the WHO in South East Asia said that there is no scientific evidence to link the vaccine to impotency or infertility. The spokesperson for Indonesia’s COVID-19 vaccine program, Siti Nadia Tarmizi, in another AFP Fact Check, had assured that “vaccines do not affect the genitals” and had termed the claim “hoax”.</p>
                        <p>It is to be noted that as per reports, none of the leading worldwide manufacturers of COVID-19 vaccine including Pfizer and Oxford have mentioned issues pertaining to erectile dysfunction in their clinical trials. In India, the possible side effects of the two approved vaccines – Covidshield and Covaxin include fever, nausea, and arm pain, but no issue linked to sexual health is listed.</p>
                        <h4>Conclusion:</h4>
                        <p>Most experts and researchers have debunked any link between COVID-19 vaccination and erectile dysfunction.</p>
                        <h4>Links for studies, claims:</h4>
                        <p>AFP fact check: <a href="https://factcheck.afp.com/covid-19-vaccine-does-not-cause-impotence-health-experts-say-0" target="_blank">https://factcheck.afp.com/covid-19-vaccine-does-not-cause-impotence-health-experts-say-0</a></p>
                        <p>VG Somani’s statement:  <a href="https://twitter.com/ANI/status/1345612111762735104" target="_blank">https://twitter.com/ANI/status/1345612111762735104</a></p>
                        <p>Daily Mail report on link between COVID-19 and ED:   <a href="https://www.dailymail.co.uk/health/article-9415735/How-defuse-male-fertility-timebomb.html" target="_blank">https://www.dailymail.co.uk/health/article-9415735/How-defuse-male-fertility-timebomb.html</a></p>
                        <p>Study linking COVID-19 to decreased sperm count:   <a href="https://www.thelancet.com/journals/eclinm/article/PIIS2589-5370(20)30348-5/fulltext " target="_blank">https://www.thelancet.com/journals/eclinm/article/PIIS2589-5370(20)30348-5/fulltext </a></p>
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="related_post">
                        <p class="heading_Ser">Related Services</p>
                        <ul class="side_Serv_related">
                            <li><a href="https://scihospital.com/enlarged-prostate"><i class="fa fa-long-arrow-right"></i> Enlarged Prostate Treatment</a></li>
                            <li><a href="https://scihospital.com/urology-erectile-dysfunction"><i class="fa fa-long-arrow-right"></i> Erectile Dysfunction Treatment</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

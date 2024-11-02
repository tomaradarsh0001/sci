@extends('frontend.layouts.main') @section('main-container') 
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')

<script type="application/ld+json"> 

{ 

  "@context": "https://schema.org", 

  "@type": "FAQPage", 

  "mainEntity": [{ 

    "@type": "Question", 

    "name": "What are the risks of COVID-19 if you are pregnant?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "Coronavirus has a high risk involved in the case of pregnant women as it increases the risk of developing preterm (earlier than 37 weeks and stillborn infants." 

    } 

  },{ 

    "@type": "Question", 

    "name": "Does COVID-19 increase the chances of miscarriage?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "According to the pieces of evidence, there is no result found that coronavirus increases the chances of miscarriage in women." 

    } 

  },{ 

    "@type": "Question", 

    "name": "Do COVID cause birth defects?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "There are still very fewer pieces of evidence available about the consequences of COVID-19 during pregnancy but it has been observed that high fevers during the first trimester increase the risks of the child suffering from birth defects." 

    } 

  },{ 

    "@type": "Question", 

    "name": "How to deal with COVID-19 while pregnant?", 

    "acceptedAnswer": { 

      "@type": "Answer", 

      "text": "There are some tips that pregnant women should follow if suffering from COVID-19    

  

Rest as much as possible   

Intake of fluids    

Take paracetamol to ease the symptoms observed by the infected patient" 

    } 

  }] 

} 

</script> 

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
                    <span>Everything you Need to Know about Covid and Pregnancy</span>
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
                        <h1 class="blog_title">Everything you Need to Know about Covid and Pregnancy</h1>
                        <img src="https://scihospital.com/public/assets/images/blog/What risks-coronavirus-brings.png" alt="" class="img-fluid mb-3" />
                        <p>Pregnancy in itself is a very beautiful journey for any woman and her complete family but the coronavirus brings great risks to women during pregnancy.   </p>
                        <p>Coronavirus disease 2019 is a respiratory illness that is caused by a virus called severe acute respiratory syndrome coronavirus 2 (SARS-CoV-2). There are pieces of evidence that show that pregnant women who are diabetic or suffering from any kind of heart condition are prone to get infected with the coronavirus. The risk of Covid during pregnancy such as preterm labor, the birth of a premature newborn child, or preeclampsia may be increased if symptoms are moderate or severe. Pregnant patients are at a 70% increased risk of death as compared to non-pregnant patients.   </p>
                        
                        <h2>Symptoms of COVID-19 during pregnancy</h2>
                        <p>Most people experience mild or no symptoms when affected by COVID-19 but in some cases, people get severely ill and die. Symptoms include cold, cough, fever, and shortness of breath. The first symptom usually observed in infected people is loss of smell or taste. There is no evidence of any specific symptoms observed in pregnant women but this has been observed that women with a heart condition or diabetes will face severe illness and require hospitalization, extensive care, and/or a ventilator.   </p>
                        
                        <h2>Prevention of COVID-19 during pregnancy</h2>
                        <p>It is difficult to take precautions if the person isn’t able to know whether he/she is infected or not. It is advised to get a thorough checkup done during pregnancy and after the delivery, if the mother is infected, it is advised to keep the baby and women separate to keep the baby away from the coronavirus infection.   </p>
                        <p>Some preventive measures for COVID-19 during and after pregnancy  </p>
                        
                        <h3>COVID-19 vaccine  </h3>
                        <p>It has been recommended for anyone above 5 years to get the vaccination including pregnant women, breastfeeding mothers, one who has delivered, or anyone who might be pregnant in the future. The safety and effectiveness of the COVID-19 vaccine are enhancing and progressing with research. The vaccination helps pregnant women build antibodies that will protect the baby from getting infected.   </p>
                        <p><b>Also Read : <a href="https://scihospital.com/blog/know-the-correct-sitting-postures-during-1st-trimester-2nd-trimester-and-3rd-trimester-of-pregnancy">sitting positions to avoid during pregnancy</a></b></p>
                        <h3>Breastfeeding </h3>
                        <p>The risk of transferring the virus through breast milk from mother to baby is very low or not possible but still proper pieces of evidence are required to be sure about this. So, there are some preventive measures that any breastfeeding mother needs to follow including-  </p>
                        <ul class="list_blog">
                            <li>Wash your hands properly before going to breastfeed or before touching the breast pump or bottle   </li>
                            <li>Milk needs to be taken and fed by someone who is not infected  </li>
                            <li>Clean the breast pump and other bottles after use  </li>
                            <li>Clean the pumping area properly</li>
                            <li>If the mother chooses to breastfeed herself, then she should wear a mask and wash her hands properly before every feeding session  </li>
                        </ul>
                    
                    </div>
                </div>
                <div class="col-lg-3 mb-4">
                    <div class="related_post">
                        <p class="heading_Ser">Related Services</p>
                        <ul class="side_Serv_related">
                            <li><a href="https://scihospital.com/mother-and-child-care"><i class="fa fa-long-arrow-right"></i> Maternity Treatment </a></li>
                            <li><a href="https://scihospital.com/obstetricsand-gynecology"><i class="fa fa-long-arrow-right"></i> Obstetrics and Gynecology Treatment</a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-sm-12">
                   
                        <h4 class="theme-color">Frequently asked questions about Pregnancy and Covid-19 </h4>
                         
                         <div class="accordion faq_services" id="accordionExample">
                          <div class="card">
                            <div class="" id="headingOne">
                              <p class="mb-0">
                                <button class="faq_btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                What are the risks of COVID-19 if you are pregnant?    <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                        
                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                              <div class="card-body">
                               Coronavirus has a high risk involved in the case of pregnant women as it increases the risk of developing preterm (earlier than 37 weeks and stillborn infants.   
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingTwo">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                               Does COVID-19 increase the chances of miscarriage?   <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                              <div class="card-body">
                                According to the pieces of evidence, there is no result found that coronavirus increases the chances of miscarriage in women.  
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingThree">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Do COVID cause birth defects?   <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                              <div class="card-body">
                               There are still very fewer pieces of evidence available about the consequences of COVID-19 during pregnancy but it has been observed that high fevers during the first trimester increase the risks of the child suffering from birth defects.   
                              </div>
                            </div>
                          </div>
                          <div class="card">
                            <div class="card-header" id="headingFour">
                              <p class="mb-0">
                                <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                How to deal with COVID-19 while pregnant? <i class="fa fa-angle-down float-right"></i>
                                </button>
                              </p>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                              <div class="card-body">
                               There are some tips that pregnant women should follow if suffering from COVID-19
                               
                               <ul class="list_blog">
                                   <li>Rest as much as possible  </li>
                                   <li>Intake of fluids</li>
                                   <li>Take paracetamol to ease the symptoms observed by the infected patient </li>
                               </ul>
                              </div>
                            </div>
                          </div>
                          <div class="mt-3 mt-lg-6"></div>
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

@extends('gurgaon.frontend.layouts.main') @section('main-container')
 @section('gurgaon.define_robots', 'index, follow') @section('gurgaon.define_urltype', 'website') @section('gurgaon.ob_img', 'https://scihospital.com/gurgaon/public/assets/images/sci%20logo.webp')
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Deepanshu Gupta",
  "url": "https://scihospital.com/gurgaon/dr-deepanshu-gupta",
  "image": "https://scihospital.com/gurgaon/public/assets/images/doctors/dr-deepanshu-gupta.webp",
  "jobTitle": "Urologist And Andrologist",
  "worksFor": {
    "@type": "Organization",
    "name": "Sci Hospital"
  }  
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Vishal Dutt Gour",
  "url": "https://scihospital.com/dr-vishal-dutt-gour",
  "image": "https://scihospital.com/public/assets/images/doctors/Dr-Vishal-Dutt-Gour-1.png",
  "sameAs": "https://scihospital.com/",
  "jobTitle": "Urologist and Andrologist",
  "worksFor": {
    "@type": "Organization",
    "name": "SCI Hospital"
  }  
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org/",
  "@type": "Person",
  "name": "Dr. Inder Nath Verma",
  "url": "https://scihospital.com/gurgaon/dr-indernath-verma-urologist",
  "image": "https://scihospital.com/gurgaon/dr-indernath-verma-urologist",
  "jobTitle": "Urologist And Andrologist",
  "worksFor": {
    "@type": "Organization",
    "name": "Sci Hospital"
  }  
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [{
    "@type": "Question",
    "name": "Which problem is treated by a urologist?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "A urologist is a medical specialist who treats problems related to the urinary system and male reproductive system. This includes conditions affecting the kidneys, bladder, ureters (tubes that connect the kidneys to the bladder), urethra (the tube through which urine exits the body), and male reproductive organs such as the prostate, testes, and penis."
    }
  },{
    "@type": "Question",
    "name": "What are the 5 diseases of the urinary system?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "There are numerous diseases and conditions that can affect the urinary system, but here are five common ones: Urinary Tract Infections (UTIs): Infections that can occur in any part of the urinary system, including the bladder (cystitis) and kidneys (pyelonephritis). Kidney Stones: Hard deposits of minerals and salts that form in the kidneys and can cause severe pain when they pass through the urinary tract. Bladder Infections: Infections specifically affecting the bladder, also known as cystitis. Benign Prostatic Hyperplasia (BPH): Enlargement of the prostate gland, which can lead to urinary problems in men, such as difficulty urinating. Urinary Incontinence: The involuntary loss of urine, which can occur due to various underlying causes, such as weak pelvic muscles or nerve damage."
    }
  },{
    "@type": "Question",
    "name": "What does the urologist do?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "urologist is a medical doctor who specializes in diagnosing and treating conditions related to the urinary tract and male reproductive system. Their responsibilities include: Conducting medical evaluations and diagnostic tests to identify urinary and reproductive system disorders. Developing treatment plans, which may involve medications, surgery, or other interventions. Performing surgical procedures, such as kidney stone removal, prostate surgery, and bladder reconstruction. Managing and providing care for patients with conditions like urinary tract infections, urinary incontinence, and urological cancers. Providing guidance and education on maintaining urological health."
    }
  },{
    "@type": "Question",
    "name": "Why do you see a urologist?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "You might see a urologist for various reasons, including: Frequent or painful urination Blood in the urine Difficulty urinating Kidney stones Enlarged prostate (in men) Urinary tract infections Male infertility or reproductive health concerns Urological cancers (e.g., bladder, kidney, prostate) Incontinence (loss of bladder or bowel control)"
    }
  },{
    "@type": "Question",
    "name": "What is a common urology problem?",
    "acceptedAnswer": {
      "@type": "Answer",
      "text": "One of the common urological problems is urinary tract infections (UTIs). UTIs can affect people of all ages and genders and can cause symptoms like frequent urination, a burning sensation during urination, and cloudy or bloody urine. They are typically caused by bacteria entering the urinary tract and can often be treated with antibiotics prescribed by a urologist or primary care physician. UTIs are more common in women but can also occur in men."
    }
  }]
}
</script>
<style>
    
    .newbtn {
        font-size: 14px !important;
        line-height: 22px !important;
        padding: 5px 20px !important;
        font-weight: 500 !important;
        color: #fff !important;
        background: #c0333d !important;
        border: 1px solid transparent;
        box-shadow: none !important;
    }
</style>

<link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"></noscript>
        
        <link rel="preload" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
        <noscript><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"></noscript>
</head>
<body>
<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('gurgaon.index') }}">Home</a>
                    <a href="#">Our Specialists</a>
                   
                    <span>Best Urology Hospital In Gurgaon </span>
                </div>
            </div>
        </div>
    </div>
    <!--//section-->
    <!--section-->
    <div class="section services_sec">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-lg-12 mt-md-0">
                    <div class="title-wrap">
                        <h1 class="theme-color">Best Urology Hospital In Gurgaon </h1>
                    </div>
                    <div class="service-img">
                        <img src="{{asset('public_gurgaon/assets/images/urology-banner.webp')}}" class="img-fluid w-100" alt="Best Urology Hospital In Gurgaon" />
                    </div>
                    <div class="pt-2 pt-md-4">
                        <p>Urology is the medical field concerned with male and female reproductive organs. The urinary tract is responsible for making, storing, and getting rid of Urine. The urethra, bladder, and ureters are all part of this system. When you urinate, you expel Urine, which is a byproduct of metabolism. When it comes to urology, SCI Hospital is the best urology hospital in Gurgaon, among the most trusted facilities in all of Gurgaon. The male and female reproductive systems are both covered by our team of best urologist in Gurgaon.  </p>
                        <div class="mt-3 mt-lg-6"></div>
                        <div class="row align-items-center">
                            <div class="col-sm-7">
                                <h2 class="theme-color">What Is Urology?  </h2>
                                <p>The part of healthcare known as "urology" focuses on treating conditions affecting the kidneys, ureters, bladder, and urethra of both sexes. Penis, testes, scrotum, prostate, etc., all refer to reproductive organs in men. Everyone should pay attention to their urologic health because problems with these areas are common.</p>
                                <p>Urology is typically associated with the surgical field. The urologist deals with a diverse set of medical issues every day. Basically a urologist diagnoses and treats the conditions related to the ureter, kidneys, bladder, and urethra. In male, they treat problems related to the prostate gland and the male reproductive system. If you are also facing any problem related to urological conditions, then you can consult with our best urologist in Gurgaon to cure your disease at the right time. </p>

                            </div>
                            <div class="col-sm-5 p-2">
                                <img src="{{asset('public_gurgaon/assets/images/urology-treatment.webp')}}" class="img-fluid w-100" alt="" />
                            </div>
                        </div>

                        <div class="mt-3 mt-lg-6"></div>

                        <div class="row">
                            <div class="col-sm-8">
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Urologic Conditions</h2>
                                            <p>Many diseases and ailments affecting the urinary tract can strike people of any age or gender. The following are some of the most prevalent urologic conditions:  </p>
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <div class="services_list space_0">
                                                <p><b>Urinary Tract Infections (UTIs):</b> Common bacterial infections in the urinary system often causing painful urination. </p>
                                                <p><b>Kidney Stones:</b> Hard mineral and salt deposits that form in the kidneys and can lead to severe pain when they pass through the urinary tract. </p>
                                                <p><b>Benign Prostatic Hyperplasia (BPH):</b> Enlargement of the prostate gland in aging men, leading to urinary symptoms such as frequent urination and difficulty in starting and stopping the flow. </p>
                                                <p><b>Urinary Incontinence:</b> Involuntary leakage of urine, which can result from weakened pelvic floor muscles or other underlying conditions. </p>
                                                <p><b>Erectile Dysfunction (ED):</b> The inability to achieve or maintain an erection sufficient for sexual intercourse, often linked to various physical and psychological factors. </p>
                                                <p><b>Prostatitis:</b> Inflammation of the prostate gland, which can be caused by infection or other factors, leading to pain and urinary symptoms. </p>
                                                <p>Pelvic Organ Prolapse: Weakening of pelvic floor muscles causing organs like the bladder, uterus, or rectum to drop or prolapse into the vaginal canal. </p>
                                                <p></p>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mt-3 mt-lg-6"></div>
                                
                                <div class="blue_shadow">
                                    <div class="row">
                                        <div class="col-12">
                                            <h2 class="theme-color">Treatment And Diagnosis</h2>
                                            <p>If you are finding the best urologist in Gurgaon location, then SCI may help you to provide relief in your long term urologic problem.  </p>
                                            <p>Urologic diseases are usually diagnosed and screened through urine and blood testing. Imaging procedures including pyelogram, cystography, kidney CT scan or ultrasound, prostate/rectal ultrasonography, and renal angiography examine blockages, tumors, and other abnormalities in the urinary tract. Cystometry and urine flow testing let doctors evaluate urinary function.  </p>
                                            <p>We aim at improving patients health using various urology treatments in Gurgaon center that performed by our best urology doctor in Gurgaon hospital, such as:  </p>
                                            
                                        </div>
                                        <div class="col-lg-12 mt-2">
                                            <ul class="services_list space_0">
                                                <li><i class="fa fa-check"></i> Cystectomy  </li>
                                                <li><i class="fa fa-check"></i> Penile Prosthesis  </li>
                                                <li><i class="fa fa-check"></i> Urethroplasty  </li>
                                                <li><i class="fa fa-check"></i> Laparoscopic Urology </li>
                                                <li><i class="fa fa-check"></i> Robotic Urology  </li>
                                                <li><i class="fa fa-check"></i> Prostate Surgery  </li>
                                                <li><i class="fa fa-check"></i> Ureteroscopy  </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                

                
                                
                                
                            </div>
                            <div class="col-sm-4">
                                @include('gurgaon.frontend.layouts.servicesside')
                                <div class="mb-5"></div>
                                <!--//services-->
                                
                                <div class="row d-flex flex-column flex-sm-row flex-md-column mt-3">
                                        <div class="col-auto col-sm col-md-auto">
                                            <div class="contact-box contact-box-2">
                                                <p class="contact-box-title services-side-heading">Contact Info</p>
                                                <ul class="icn-list">
                                                    <li>
                                                        <i class="icon-telephone"></i>
                                                        <div class="d-flex flex-wrap"><a href="tel: 0124-6948701 "> 0124-6948701  (For Appointment), </a> </div>
                                                    </li>
                                                    <li><i class="icon-placeholder2"></i>Plot No. 7, Golf Course Rd, Sector 43, Gurugram, Haryana 122002</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    
                            </div>
                        </div>
                         <div class="mt-3 mt-lg-6"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-sm-12">
                                    <h2 class="theme-color">Advantage With The Best Urology Hospital In Gurgaon</h2>
                                    <p>SCI provides various advantages for its patients, and the primary advantage of considering the right healthcare hospital for patients is the best urologist in Gurgaon center. Here are a few more advantages of choosing SCI for your urologic conditions:  </p>
                                    <p>Our medical center is proud of how reliable and thorough the care we provide to our patients. As soon as you walk into our clinic, it is clean, comfortable, and well-kept, making sure that you are safe and relaxed. We care a lot about being on time, so you won't have to wait too long. With a team of medical specialists and modern tools and technology, we ensure your health and happiness by giving you the best care and information possible. We care as much about how you feel and how well you heal after surgery as we do about the operation itself. 

Post-surgery care is just as important to us as the surgery itself, and we want you to feel good and fully heal.  </p>
                                 
                                </div>
                            </div>
                        </div>
                        
                       
                        
                        

                        <div class="mt-3 mt-lg-6"></div>

                        <h3 class="theme-color text-center">Best Urologist In Gurgaon  </h3>
                       

                        <div class="container">
                            <div class="row align-items-center">
                                
                                <div class="col-sm-12">
                                    <div class="owl-carousel" id="doccard_slider">
                                    
                                    <div class="post-slide2">
                                        <div class="team_box">
                                            <div class="row align-items-center">
                                                <div class="col-sm-4 col-lg-4">
                                                    <img src="https://scihospital.com/gurgaon/public/assets/images/doctors/Dr-Vishal-Dutt-Gour-1.png" alt="" class="img-responsive" loading="lazy" />
                                                </div>
                                                <div class="col-sm-8 col-lg-8">
                                                    <h5 class="doctor-box-name theme-color">Dr. Vishal Dutt Gour</h5>
                                                    <p>
                                                       Senior Consultant<br>Urologist & Andrologist
                                                    </p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="line_box"></div>
                                                </div>
                                               
                                                <div class="col-sm-12">
                                                    <div class="btn_box_doc">
                                                        <a href="https://scihospital.com/gurgaon/dr-vishal-dutt-gour" class="newbtn btn"><i class="icon-right-arrow"></i><span>View More </span><i class="icon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-slide2">
                                        <div class="team_box">
                                            <div class="row align-items-center">
                                                <div class="col-sm-4 col-lg-4">
                                                    <img src="https://scihospital.com/gurgaon/public/assets/images/doctors/dr-deepanshu-gupta.webp" alt="" class="img-responsive" loading="lazy" />
                                                </div>
                                                <div class="col-sm-8 col-lg-8">
                                                    <h5 class="doctor-box-name theme-color">Dr. Deepanshu Gupta</h5>
                                                    <p>
                                                      Senior Consultant<br>Urologist & Andrologist
                                                    </p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="line_box"></div>
                                                </div>
                                               
                                                <div class="col-sm-12">
                                                    <div class="btn_box_doc">
                                                        <a href="https://scihospital.com/gurgaon/dr-deepanshu-gupta" class="newbtn btn"><i class="icon-right-arrow"></i><span>View More </span><i class="icon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="post-slide2">
                                        <div class="team_box">
                                            <div class="row align-items-center">
                                                <div class="col-sm-4 col-lg-4">
                                                    <img src="https://scihospital.com/gurgaon/public/assets/images/doctors/Dr-Indernath-Verma.webp" alt="" class="img-responsive" loading="lazy" />
                                                </div>
                                                <div class="col-sm-8 col-lg-8">
                                                    <h5 class="doctor-box-name theme-color">Dr. Inder Nath Verma</h5>
                                                    <p>
                                                      Urologist And Andrologist
                                                    </p>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="line_box"></div>
                                                </div>
                                               
                                                <div class="col-sm-12">
                                                    <div class="btn_box_doc">
                                                        <a href="https://scihospital.com/gurgaon/dr-indernath-verma-urologist" class="newbtn btn"><i class="icon-right-arrow"></i><span>View More </span><i class="icon-right-arrow"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                                <div class="col-sm-6"></div>
                            </div>
                        </div>
                        

                        <div class="mt-3 mt-lg-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-12">
             

                <div class="row">
                    <div class="col-sm-12 text-center">
                        <h4 class="theme-color">Image Gallery</h4>
                    </div>
                </div>
                @include('gurgaon.frontend.layouts.gallery')

                <div class="container">
                    <div class="mt-3 mt-lg-6"></div>
                    <div class="mt-3 mt-lg-6"></div>
                    <div class="mt-3 mt-lg-6"></div>
                    <h4 class="theme-color">Frequently Asked Questions  </h4>

                    <div class="accordion faq_services" id="accordionExample">
                        <div class="card">
                            <div class="" id="headingOne">
                                <p class="mb-0">
                                    <button class="faq_btn text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                      Q. Which problem is treated by a urologist?     <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                <div class="card-body">
                                 A. A urologist is a medical specialist who treats problems related to the urinary system and male reproductive system. This includes conditions affecting the kidneys, bladder, ureters (tubes that connect the kidneys to the bladder), urethra (the tube through which urine exits the body), and male reproductive organs such as the prostate, testes, and penis. 
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                      Q. What are the 5 diseases of the urinary system?  <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                <div class="card-body">
                                    A. There are numerous diseases and conditions that can affect the urinary system, but here are five common ones:  
                                    
                                    <ul>
                                        <li>Urinary Tract Infections (UTIs): Infections that can occur in any part of the urinary system, including the bladder (cystitis) and kidneys (pyelonephritis). </li>
                                        <li> Kidney Stones: Hard deposits of minerals and salts that form in the kidneys and can cause severe pain when they pass through the urinary tract.</li>
                                        <li> Bladder Infections: Infections specifically affecting the bladder, also known as cystitis. </li>
                                        <li> Benign Prostatic Hyperplasia (BPH): Enlargement of the prostate gland, which can lead to urinary problems in men, such as difficulty urinating.</li>
                                        <li>Urinary Incontinence: The involuntary loss of urine, which can occur due to various underlying causes, such as weak pelvic muscles or nerve damage. </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                       Q. What does the urologist do? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                <div class="card-body">
                                  A. urologist is a medical doctor who specializes in diagnosing and treating conditions related to the urinary tract and male reproductive system. Their responsibilities include:
                                
                                  <ul>
                                      <li>Conducting medical evaluations and diagnostic tests to identify urinary and reproductive system disorders. </li>
                                      <li>Developing treatment plans, which may involve medications, surgery, or other interventions. </li>
                                      <li>Performing surgical procedures, such as kidney stone removal, prostate surgery, and bladder reconstruction. </li>
                                      <li>Managing and providing care for patients with conditions like urinary tract infections, urinary incontinence, and urological cancers. </li>
                                      <li>Providing guidance and education on maintaining urological health. </li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                       Q. Why do you see a urologist? <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                                <div class="card-body">
                                  A. You might see a urologist for various reasons, including: 
                                  <ul>
                                      <li>Frequent or painful urination  </li>
                                      <li>Blood in the urine  </li>
                                      <li>Difficulty urinating  </li>
                                      <li>Kidney stones  </li>
                                      <li>Enlarged prostate (in men)  </li>
                                      <li>Urinary tract infections  </li>
                                      <li>Male infertility or reproductive health concerns </li>
                                      <li>Urological cancers (e.g., bladder, kidney, prostate)  </li>
                                      <li>Incontinence (loss of bladder or bowel control)  </li>
                                  </ul>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card">
                            <div class="card-header" id="headingfive">
                                <p class="mb-0">
                                    <button class="faq_btn text-left collapsed" type="button" data-toggle="collapse" data-target="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                       Q.  What is a common urology problem?   <i class="fa fa-angle-down float-right"></i>
                                    </button>
                                </p>
                            </div>
                            <div id="collapsefive" class="collapse" aria-labelledby="headingfive" data-parent="#accordionExample">
                                <div class="card-body">
                                  A. One of the common urological problems is urinary tract infections (UTIs). UTIs can affect people of all ages and genders and can cause symptoms like frequent urination, a burning sensation during urination, and cloudy or bloody urine. They are typically caused by bacteria entering the urinary tract and can often be treated with antibiotics prescribed by a urologist or primary care physician. UTIs are more common in women but can also occur in men. 
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>

                <div class="mt-3 mt-lg-6"></div>
                <div class="mt-3 mt-lg-6"></div>
            </div>

            
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
 
            
             $('#doccard_slider').owlCarousel({
      margin: 15,
      
      dots: true,
      loop:true,
      autoplay: true,
     
      responsive: {
        0: {
          items: 1
        },
        600: {
          items: 1
        },
        1000: {
          items: 2
        }
      }
    });
</script>
    @endsection


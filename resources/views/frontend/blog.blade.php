@extends('frontend.layouts.main')
@section('main-container')
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
                    <span>Blog</span>
                </div>
            </div>
        </div>
    </div>

    <!--section-->
    
    <div class="section page-content-first">
        <div class="container mt-3 pb-70">
            <div class="row">
			<div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/Urology Blog Image-01.webp')}}" alt="UTI in Children" class="img-fluid" />
                        <h3 class="blog_title">Best Urology Doctors At Sci Hospitals Delhi</h3>
                        <p>In today’s fast-paced world, the importance of seeking medical attention for urological issues cannot be overstated. Reputed urology hospitals...</p>
                        <div class="blog_button">
                            <a href="{{ route('best-urology-hospitals') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
			<div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/Blog 1.webp')}}" alt="UTI in Children" class="img-fluid" />
                        <h3 class="blog_title">Nerve Pain In Palm Of Hand</h3>
                        <p>Nerve pain in the hand can be debilitating, affecting daily activities and overall quality of life. Characterized by sharp, burning sensations or numbness...</p>
                        <div class="blog_button">
                            <a href="{{ route('relieve-nerve-pain-hand') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/iStock-1182627519.jpg')}}" alt="UTI in Children" class="img-fluid" />
                        <h3 class="blog_title">Shoulder Injury In Sports | Expert Advice</h3>
                        <p>Shoulder injury is a common occurrence in the world of sports, impacting athletes of all levels and disciplines Whether it's a sudden trauma or the result of repetitive...</p>
                        <div class="blog_button">
                            <a href="{{ route('shoulder-injury-in-sports') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/Hypospadias.png')}}" alt="UTI in Children" class="img-fluid" />
                        <h3 class="blog_title">Hypospadias Repair Time and Recovery</h3>
                        <p>Hypospadias, a congenital condition affecting male infants, calls for surgical intervention to correct the abnormal positioning of the urethral opening...</p>
                        <div class="blog_button">
                            <a href="{{ route('hypospadias-surgery-repair-time') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/Blog-Topic-2-SCI Hospital.png')}}" alt="UTI in Children" class="img-fluid" />
                        <h3 class="blog_title">Latest Innovations In Kidney Stone Treatments​</h3>
                        <p>Kidney stones treatment has evolved significantly over the years, offering patients a range of options for managing this painful condition. From traditional surgery to cutting-edge techniques...</p>
                        <div class="blog_button">
                            <a href="{{ route('latest-innovations-kidney') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/Blog-topic-1-SCI-Hospital.png')}}" alt="UTI in Children" class="img-fluid" />
                        <h3 class="blog_title">SCI Hospital | Bariatric Surgery</h3>
                        <p>Bariatric surgerya surgical procedure aimed at aiding weight loss, has emerged as a revolutionary solution for individuals battling obesity and its associated health complications Bariatric surgery encompasses various procedures tailored...</p>
                        <div class="blog_button">
                            <a href="{{ route('bariatric-surgery-impact') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div> 
                 <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/UTI in Children.webp')}}" alt="UTI in Children" class="img-fluid" />
                        <h3 class="blog_title">All You Need To Know About Bladder Infection UTI In Children</h3>
                        <p>Discover essential information on bladder infection (UTI) in children: causes, symptoms, treatment, and prevention. Learn how to safeguard your child's health...</p>
                        <div class="blog_button">
                            <a href="{{ route('uti-in-children') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div> 
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/understandingenlargedprostate.webp')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Everything You Need To Know About Enlarged Prostate</h3>
                        <p>As we grow older, our bodies go through various changes, and unfortunately, one of the serious conditions that can arise as aging is an enlarged prostate. This condition significantly impacts .. </p>
                        <div class="blog_button">
                            <a href="{{ route('understanding-enlarged-prostate') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div> 
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/dental-implant-types.webp')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">3 Types of Dental Implants (Which One Is Best for You?)</h3>
                        <p>Patients can explore various tooth replacement choices offered by dentists, but dental implants stand out as a superior option. Recognized for their strength comparable to natural teeth,  </p>
                        <div class="blog_button">
                            <a href="{{ route('dental-implant-types') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div> 
               
               <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/Advantages-of-Urethroplasty-Surgery.webp')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">7 Major Advantages of Urethroplasty Surgery </h3>
                        <p>Urethroplasty is a surgical procedure that repairs and reconstructs the urethra, the tube that carries urine from the bladder. It is performed to treat urethral strictures, usually caused</p>
                        <div class="blog_button">
                            <a href="{{ route('advantages-urethroplasty-surgery') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/benefits-wisdom-teeth-removal.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Why is it important to have a wisdom tooth extracted? </h3>
                        <p>The last set of molars in the back of the mouth are called wisdom teeth.Most of the time, they show up between the ages of 17 and 25, which is often called the "age of wisdom" or maturity.</p>
                        <div class="blog_button">
                            <a href="{{ route('benefits-wisdom-teeth-removal') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/robotic-surgery-in-urology.webp')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">What Is Robotic Surgery In Urology? </h3>
                        <p>Urology is mostly about the surgical treatment of problems with the urinary tracts and male reproductive organs, such as Adrenal tumors, urinary stones, testicular cancer, and benign prostatic hyperplasia.  And robotic surgery is </p>
                        <div class="blog_button">
                            <a href="{{ route('robotic-surgery-in-urology') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/benefits-of-penile-implants.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">What Are The Benefits Of Penile Implants?</h3>
                        <p>Medical science has developed a lot, because many of the new technologies have been invented in the previous decade. Even with the help of medical science, surgeons can treat any big disease and ‘penile implants’ is one of them. </p>
                        <div class="blog_button">
                            <a href="{{ route('benefits-of-penile-implants') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/peyronies-disease.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Peyronie's Disease </h3>
                        <p>When it comes to men's health, there are many diseases that can affect not just their physical health but also their emotional and mental health. One of these is Peyronie's disease, which is not very common but can affect the way the penis curves when a man has an erection.</p>
                        <div class="blog_button">
                            <a href="{{ route('peyronies-disease') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/your-children-need-hypospadias-surgery.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Signs That Your Children Need Hypospadias Surgery</h3>
                        <p>Life is full of challenges when it comes to parenting, sometimes some unreliable things happen during parenting. And hypospadias is one of them, the biggest unknown troubles for your kids....  </p>
                        <div class="blog_button">
                            <a href="{{ route('your-children-need-hypospadias-surgery') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/indications-you-need-urethroplasty.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">What Are The Indications You Need Urethroplasty? </h3>
                        <p>Urethroplasty is a surgical process which is used for treating narrowing inside the urethra, this is a condition which can cause severe urinary difficulties and discomfort, preventing...  </p>
                        <div class="blog_button">
                            <a href="{{ route('indications-you-need-urethroplasty') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                   <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/benefits-of-plastic-surgery-procedure.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">The Benefits of Plastic Surgery Procedure </h3>
                        <p>Plastic surgery refers to a specialized branch of medical science that focuses on enhancing or reconstructing various parts of the body through surgical procedures. It involves modifying, ..   </p>
                        <div class="blog_button">
                            <a href="{{ route('benefits-of-plastic-surgery-procedure') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                
                
                   <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/reasons-to-see-a-urologist.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">8 Reasons To See A Urologist </h3>
                        <p>Maintaining optimal urological health is crucial for men's overall well-being. The study, diagnosis, and treatment of the problems and diseases related to the urinary tract and the male reproductive system of ..   </p>
                        <div class="blog_button">
                            <a href="{{ route('reasons-to-see-a-urologist') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                
                
                
                
                   <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/pros-and-cons-of-penile-enlargement-surgery.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Pros and Cons of Penile Enlargement Surgery</h3>
                        <p>Penile enlargement surgery, also known as penile augmentation or phalloplasty, is a surgical procedure designed to increase the size or improve the appearance of the penis.   </p>
                        <div class="blog_button">
                            <a href="{{ route('pros-and-cons-of-penile-enlargement-surgery') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                
                
                   <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/premature-birth-risk-and-complications.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Premature Birth: Risk And Complications </h3>
                        <p>Premature birth, also known as preterm birth, refers to the delivery of a baby before the completion of 37 weeks of gestation. A full-term pregnancy is typically   </p>
                        <div class="blog_button">
                            <a href="{{ route('premature-birth-risk-and-complications') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/can-endometriosis-get-worse-as-you-get-older.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Can Endometriosis Get Worse as You Get Older? </h3>
                        <p>The chronic condition of endometriosis affects millions of women worldwide. It can be identified by the presence of tissue that resembles endometrium outside of the uterus,  </p>
                        <div class="blog_button">
                            <a href="{{ route('can-endometriosis-get-worse-as-you-get-older') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                
                 <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/what-are-uterine-fibroids.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">What are Uterine Fibroids? </h3>
                        <p>Uterine fibroids, otherwise called leiomyomas or essentially fibroids, are noncancerous developments that occur in the uterus. These harmless cancers are very common among ladies of conceptive age   </p>
                        <div class="blog_button">
                            <a href="{{ route('what-are-uterine-fibroids') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                 <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/do-penile-enlargement-surgeries-work.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Do Penile Enlargement Surgeries Work? </h3>
                        <p>Penile enlargement surgeries, also known as phalloplasty or penoplasty, are procedures aimed at increasing the size or girth of the penis. These surgeries have gained popularity due to societal   </p>
                        <div class="blog_button">
                            <a href="{{ route('do-penile-enlargement-surgeries-work') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                 <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/what-is-urethral-stricture-disease.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">What is Urethral Stricture Disease? </h3>
                        <p>Urethral stricture disease is a medical condition that affects the urethra, which is the tube that carries urine out of the body. It is caused by the narrowing of the urethra, which can result in   difficulty urinating, pain,   </p>
                        <div class="blog_button">
                            <a href="{{ route('what-is-urethral-stricture-disease') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/things-should-consider-when-looking-for-a-hospital-for-your-pregnancy.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Things should consider when looking for a hospital for your pregnancy</h3>
                        <p>Pregnancy is an exciting and transformative time in a woman's life. It's essential to choose the right hospital for your pregnancy care    </p>
                        <div class="blog_button">
                            <a href="{{ route('things-should-consider-when-looking-for-a-hospital-for-your-pregnancy') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/which-type-of-hypospadias-is-the-most-severe.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Which type of hypospadias is the most severe?</h3>
                        <p>Hypospadias is a congenital anomaly that affects approximately 1 in every 200 male births. It is a condition where the urethral opening is not located at the tip    </p>
                        <div class="blog_button">
                            <a href="{{ route('which-type-of-hypospadias-is-the-most-severe') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/is-hypospadias-surgery-painful-for-kids.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Is Hypospadias Surgery Painful for kids?</h3>
                        <p>Hypospadias is a congenital condition in which the opening of the urethra is located on the underside of the penis instead of the tip. This can cause difficulties with urination and sexual function  </p>
                        <div class="blog_button">
                            <a href="{{ route('is-hypospadias-surgery-painful-for-kids') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/types-of-pregnancy-exercises.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">What Types of Pregnancy Exercises are Ideal for a Woman</h3>
                        <p>The most significant moment of a woman's life is when she gives birth. A woman's body changes a great deal as she goes through the multiple stages of</p>
                        <div class="blog_button">
                            <a href="{{ route('what-types-of-pregnancy-exercises-are-ideal-for-a-woman') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/tips-for-normal-delivery.png')}}" alt="tips-for-normal-delivery" class="img-fluid" />
                        <h3 class="blog_title">Tips for Normal Delivery</h3>
                        <p>Trust yourself and trust your doctor – Have confidence that you are strong enough to have a normal delivery. Labour room support – Have a birth Partner who is supportive and encourages you for normal delivery. This</p>
                        <div class="blog_button">
                            <a href="{{ route('tips-for-normal-delivery') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/What risks-coronavirus-brings.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Everything you Need to Know about Covid and Pregnancy </h3>
                        <p>Pregnancy in itself is a very beautiful journey for any woman and her complete family but the coronavirus brings great risks to women during pregnancy. Coronavirus disease 2019 is a respiratory illness that is caused by a    </p>
                        <div class="blog_button">
                            <a href="{{ route('everything-you-need-to-know-about-covid-and-pregnancy') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/Rules for a Healthy Vagina.png')}}" alt="10 Rules for a Healthy Vagina" class="img-fluid" />
                        <h3 class="blog_title">10 Rules for a Healthy Vagina</h3>
                        <p>Vagina- There usually exists much stigma around this word. It is considered taboo, and so many girls and women go about their lives without knowing how to care for them properly. The vagina is a susceptible area prone to infections, itching, and various other problems </p>
                        <div class="blog_button">
                            <a href="{{ route('10-rules-for-a-healthy-vagina') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/Facts-one-must-know-about-Cochlear-Implants.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Facts One Must Know about Cochlear Implants</h3>
                        <p>Even though scientists developed the idea of a device that helps sound vibrations bypass the injured areas of the ear, it was around 1980 when such a device started to become available for everyone.</p>
                        <div class="blog_button">
                            <a href="{{ route('facts-one-must-know-about-cochlear-implants') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/Valuable-tips-to-follow-before-the-air-pollution-hits-your-throat.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">10 Valuable Tips to Follow Before the Air Pollution Hits Your Throat</h3>
                        <p>As the winds have started to become chilly, the worry about air pollution has also started to come up in the minds of people. The polluted air not only makes people cough but it also causes  …</p>
                        <div class="blog_button">
                            <a href="{{ route('10-valuable-tips-to-follow-before-the-air-pollution-hits-your-throat') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/Important-Signs-of-Labor-Pain.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">10 Important Signs of Labor Pains</h3>
                        <p>For every person, the signs of labor are different. There are no hard and fast rules that can tell you when your baby is arriving and whether or not the labor has started. While the following 10 signs of labor may give you some context..</p>
                        <div class="blog_button">
                            <a href="{{ route('10-important-signs-of-labor-pains') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/sci-blog-Reasons-for-Ovarian.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">10 Reasons for Ovarian Cancer and Treatment Options from Our Experts</h3>
                        <p>Ovarian cancer is a form of cancer that affects one or both of the ovaries of women. When the DNA in a cell of your ovary stops working properly, it creates abnormal cell growth. This is what Ovarian cancer is. …</p>
                        <div class="blog_button">
                            <a href="{{ route('reasons-for-ovarian-cancer-and-treatment-options-from-our-experts') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/sci-blog-4.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Ten Surprisingly Common things that Causes Male Infertility</h3>
                        <p>Are you trying unsuccessfully to father a child for sometimes now? You are not alone. Studies have shown that men are increasingly suffering from fertility issues.  With every 1 in 6 couples affected, infertility is on the rise. Studies show that male infertility..</p>
                        <div class="blog_button">
                            <a href="{{ route('ten-surprisingly-common-things-that-causes-male-infertility') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/The-movement-of-your-developing-baby-Third-Trimester.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">The Movement of Your Developing baby: The Third Trimester</h3>
                        <p>Feeling the first movement of your baby is definitely one of the most delightful and amazing experiences for every mother. It is also one of the most important signs that tell you about the health and well being of your baby. Understanding the movements </p>
                        <div class="blog_button">
                            <a href="{{ route('the-third-trimester') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/sci-blog-Deafness-Causes-Diagnosis-Treatment-Options.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Deafness Awareness Week – Deafness Causes, Diagnosis and Treatment Options</h3>
                        <p>Difficulty in hearing is a not so uncommon problem that we all need to know more about. It can affect us at any age from birth to old age and the good news is that it is a totally …</p>
                        <div class="blog_button">
                            <a href="{{ route('deafness-causes-treatment-options') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/Struggling-with-Male-Infertility.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Tips for Men Struggling With Male Infertility</h3>
                        <p>In our society, infertility is a serious issue. When speaking about infertility, most people consider it a woman’s issue. However, this is not true always. According to the American Society of Reproductive Medicine…</p>
                        <div class="blog_button">
                            <a href="{{ route('tips-for-men-struggling-with-male-infertility') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/Prostate-Cancer-Causes-Symptoms-Treatment-Options.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Prostate Cancer Know the Symptoms and Treatment</h3>
                        <p>The prostate is a small walnut-shaped gland located next to the bladder. It is in the pelvis of the man and can be examined through the proper process. The prostate weighs around one ounce. Prostate cancer develops in this …</p>
                        <div class="blog_button">
                            <a href="{{ route('prostate-cancer-know-the-symptoms-and-treatment') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/sci-blog-Important-Prenatal-nutrition-tips.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Check Out Some Important Prenatal Nutrition Tips for World Nutrition Day</h3>
                        <p>Pregnancy is considered to be a beautiful moment for would-be-mothers. However, during pregnancy, mothers-to-be go through many ups and downs. To ensure a …</p>
                        <div class="blog_button">
                            <a href="{{ route('prenatal-nutrition-tips') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/sci-blog-Ear-Infection.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Ear Infections: How to Prevent It During Monsoon?</h3>
                        <p>Monsoon is here finally. The monsoon gives us the much-needed respite from the scorching heat of the summer; however, at the same time, it brings a lot of ailment, such as waterborne diseases, infections, and more...</p>
                        <div class="blog_button">
                            <a href="{{ route('prevent-ear-infections') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/sci-blog-gallbladder-surgery.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Laparoscopic Gallbladder Surgery Post-Operative Care and Food to Be Consumed</h3>
                        <p>Do you have any idea of laparoscopic gallbladder surgery? No. Don’t worry; this post will guide you on this surgery and also with aftercare tips...</p>
                        <div class="blog_button">
                            <a href="{{ route('laparoscopic-gallbladder-surgery') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/Nuchal-Cord.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">How Does the Nuchal Cord Affect The Baby?</h3>
                        <p>The term nuchal cord is used by the medical practitioners when the umbilical cord is wrapped around the neck of a baby. Sometimes associated with perinatal mortality. …</p>
                        <div class="blog_button">
                            <a href="{{ route('how-does-the-nuchal-cord-affect-the-baby') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/kidney-stones-blog.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Kidney Stones: Early Warning Signs and Symptoms</h3>
                        <p>Are you suffering from kidney stones? If you said yes, it’s nothing new. Since ancient times, stone diseases, like kidney stones, have been used to afflict …..</p>
                        <div class="blog_button">
                            <a href="{{ route('kidney-stones-signs-symptoms') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/sci-blog-Diabetes.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Gestational Diabetes: How to Control It with Diet, Exercise, and More?</h3>
                        <p>Gestational Diabetes during pregnancy is a condition during which the blood sugar level becomes very high. This kind of …</p>
                        <div class="blog_button">
                            <a href="{{ route('gestational-diabetes-how-to-control-it-with-diet-exercise-and-more') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/sci-blog-Bariatric-Surgery.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Bariatric Surgery Some Unknown Facts You Must Know</h3>
                        <p>Obesity is on the rise. Morbid Obese people find it difficult to lose their weight through exercises and diet plans. Studies showed that obese people suffer from depression as …</p>
                        <div class="blog_button">
                            <a href="{{ route('bariatric-surgery-some-unknown-facts-you-must-know') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/sci-blog-2-breech-babies.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Breech Babies: Causes and Complications Which You Must Know</h3>
                        <p>Do you have any idea about a breech baby? Most of you would say – No. The term ‘Breech Baby’ might be new…</p>
                        <div class="blog_button">
                            <a href="{{ route('breech-babies-causes-and-complications') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/620x349.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">What is the New Procedure for Knee Replacement? </h3>
                        <p>This procedure involves replacing only one part of the knee i.e inner (medial) part of the knee joint to alleviate the pain from the joint. The implants used are  …</p>
                        <div class="blog_button">
                            <a href="{{ route('what-is-the-new-procedure-for-knee-replacement') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/620x349-2.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Know the Correct Sitting Postures during 1st Trimester, 2nd Trimester and 3rd Trimester of Pregnancy </h3>
                        <p>Congrats! You are going to be a mother soon and you must be pretty excited about this fact. You will be looking forward to a  …</p>
                        <div class="blog_button">
                            <a href="{{ route('know-the-correct-sitting-postures-during-1st-trimester-2nd-trimester-and-3rd-trimester-of-pregnancy') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/620x349-4.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Interview By Dr. Vinay Aggarwal</h3>
                        <p>Q. What is Ortho-biologics? A. Simply said, Orthobiologics is utilizing natural substances in one’s own body, processing them to promote healing in various orthopaedic problems related  …</p>
                        <div class="blog_button">
                            <a href="{{ route('interview-dr-vinay-aggarwal') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/covid-virus-3d-modeling.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">COVID-19 Vaccine and Erectile Dysfunction</h3>
                        <p>At a time when the world is battling the COVID-19 pandemic, there are health concerns in all regards. People are not just worried about post-COVID-19 </p>
                        <div class="blog_button">
                            <a href="{{ route('covid-19-vaccine-and-erectile-dysfunction') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/Ovarian-Cyst-SCI-Hospital.png')}}" alt="" class="img-fluid" />
                        <h3 class="blog_title">Ovarian Cyst And Pregnancy: Could An Ovarian Cyst Cause Infertility?</h3>
                        <p>Ovarian cysts form inside your ovaries. They are typically sacs filled with fluid and not cancerous in nature. Ovarian cysts can be diagnosed via ultrasound</p>
                        <div class="blog_button">
                            <a href="{{ route('ovarian-cyst-and-pregnancy-could-an-ovarian-cyst-cause-infertility') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/ENT-Problems-During-Monsoon.png')}}" alt="" class="img-fluid mb-3" />
                        <h3 class="blog_title">Common ENT Problems During Monsoon and How to Prevent It?</h3>
                        <p>Come on. Everybody looks forward to the monsoons, don’t they? Rains wash out the summer heat and make for a lazy couple of months before </p>
                        <div class="blog_button">
                            <a href="{{ route('common-ent-problems-during-monsoon-and-how-to-prevent-it') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/what-is-hysterectomy-purpose-and-procedure.png')}}" alt="" class="img-fluid mb-3" />
                        <h3 class="blog_title">What is Hysterectomy? Purpose And Procedure</h3>
                        <p>Hysterectomy is a kind of operation that is done for removing the uterus. The uterus is the womb that helps develop the baby during a woman’s pregnancy. </p>
                        <div class="blog_button">
                            <a href="{{ route('what-is-hysterectomy-purpose-and-procedure') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/tips-for-breast-feeding-things-that-new-moms-should-know.png')}}" alt="" class="img-fluid mb-3" />
                        <h3 class="blog_title">Tips for Breast-feeding- Things that new moms should know</h3>
                        <p>The journey from pregnancy to motherhood can be a tough ride. Once the baby is born, the new parents are happy and nervous of the new journey ahead</p>
                        <div class="blog_button">
                            <a href="{{ route('tips-for-breast-feeding-things-that-new-moms-should-know') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/how-does-monsoon-affect-your-skin.png')}}" alt="" class="img-fluid mb-3" />
                        <h3 class="blog_title">HOW DOES MONSOON AFFECT YOUR SKIN?....</h3>
                        <p>Monsoon brings relief from the sweltering dry summer heat. It brings in joy and freshness to the air. The high ambient humidity and excessive sweating can however present a fresh set of skin problems. The </p>
                        <div class="blog_button">
                            <a href="{{ route('how-does-monsoon-affect-your-skin-common-skin-problems-during-monsoon') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/varicocele-common-cause-of-male-infertility-and-its-treatment.png')}}" alt="" class="img-fluid mb-3" />
                        <h3 class="blog_title">Varicocele: Common Cause of Male Infertility & its Treatment</h3>
                        <p>About 25% of male factors are responsible for infertility in Indian Couples. Male infertility has become a major concern in recent years. With it being considered a taboo topic in society, it was difficult to …</p>
                        <div class="blog_button">
                            <a href="{{ route('varicocele-comman-cause-of-male-infertility-its-treatments') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/dental.png')}}" alt="" class="img-fluid mb-3" />
                        <h3 class="blog_title">All About Dental Crowns: Uses and Benefits</h3>
                        <p>Damaged teeth can be very painful. Recently, there has been an extensive range of inventions in the world of dentistry. Earlier, it was very difficult to help with tooth problems. With the …</p>
                        <div class="blog_button">
                            <a href="{{ route('all-about-dental-crowns-uses-and-benefits') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/7-signs-you-should-make-an-appointment-with-your-gynaecologist.png')}}" alt="" class="img-fluid mb-3" />
                        <h3 class="blog_title">7 Signs You Should Make An Appointment With Your Gynaecologist</h3>
                        <p>Reproductive health is always played out as a taboo subject. There has been minimal awareness around such topics. As a result, the dangers </p>
                        <div class="blog_button">
                            <a href="{{ route('7-signs-you-should-make-an-appointment-with-your-gynaecologist') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/common-gallbladder-problems-and-its-prevention.png')}}" alt="" class="img-fluid mb-3" />
                        <h3 class="blog_title">Common Gallbladder problems and its prevention</h3>
                        <p>An unhealthy lifestyle can lead to external as well as internal risks in our body. Many times, we ignore our internal health. We focus on the diseases that are visible to our naked …</p>
                        <div class="blog_button">
                            <a href="{{ route('common-gallbladder-problems-and-its-prevention') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/how-to-get-rid-of-hemorrhoids.png')}}" alt="" class="img-fluid mb-3" />
                        <h3 class="blog_title">How to get rid of Hemorrhoids (Piles)? – Symptoms & Treatment</h3>
                        <p>Hemorrhoids,commonly known as Piles, are swollen veins in the anus and the lowest part of the rectum. This causes painful discomforts and rectal bleeding. Hemorrhoids have …</p>
                        <div class="blog_button">
                            <a href="{{ route('how-to-get-rid-of-hemorrhoids-piles-symptoms-treatment') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center">
                    <div class="blog-card">
                        <img src="{{asset('assets/images/blog/some-common-dental-infections-and-how-to-prevent-them.png')}}" alt="" class="img-fluid mb-3" />
                        <h3 class="blog_title">Some Common Dental Infections and How to Prevent Them?</h3>
                        <p>Oral care is as important as taking care of any other body part and should be an important part of our daily routine. But it is majorly neglected by most. Oral  …</p>
                        <div class="blog_button">
                            <a href="{{ route('common-dental-infections') }}" class="btn btn-sm btn-hover-fill"><i class="icon-right-arrow"></i><span>Read More</span><i class="icon-right-arrow"></i></a>
                        </div>
                    </div>
                </div>
                
                
                
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

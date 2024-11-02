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
                    <span>Deafness Awareness Week – Deafness Causes, Diagnosis and Treatment Options</span>
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
                        <img src="{{asset('assets/images/blog/sci-blog-Deafness-Causes-Diagnosis-Treatment-Options.png')}}" alt="" class="img-fluid mb-3" />
                        <h3 class="blog_title">Deafness Awareness Week – Deafness Causes, Diagnosis and Treatment Options</h3>
                        <p>Difficulty in hearing is a not so uncommon problem that we all need to know more about. It can affect us at any age from birth to old age and the good news is that it is a totally treatable condition. Whatever may be the cause and severity of deafness, modern medicine and technology can restore our hearing back to normal !!</p>
                        
                        <h5>How Common is Deafness? </h5>
                        <p>1 in 12 i.e. 8% of the population has some degree of deafness. 1 in 1000 children is born with significant deafness that does not allow normal development of hearing and speech. If untreated, these children grow up into deaf and consequently dumb adults. It is very important to diagnose and treat these children early, within the first few years.</p>
                        
                        <h5>What is the cause of deafness?</h5>
                        <p>Deafness can either be:</p>
                        <p><b>Genetic – </b> Typically, children born with deafness. This is more common in parents who have had consanguineous marriage but can happen otherwise as well. People with a family history of hearing loss can suffer from hearing loss in adulthood due to an inherited condition called Otosclerosis, which affects the tiny bones inside your ear.</p>
                        <p><b>Acquired –</b>  Infections can cause damage to eardrums, ossicles (tiny bones in your ear), or inner ear resulting in temporary or permanent damage to hearing. Trauma such as major road traffic accidents can fracture the hearing organs. Serious infections like meningitis can cause permanent loss of hearing.</p>
                        <p><b>Old Age –</b>    Over the age of 65, many people suffer from hearing loss typically involving high-frequency sounds. This is not due to any illness but a weakness that sets in with age much like the use of spectacles for reading at old age.</p>
                        <p>Very often, no definite cause of hearing loss can be identified. Rarely, adults can lose complete hearing usually in one ear within hours, a condition called Sudden sensorineural hearing loss. This condition is thought to be due to either a viral illness or a miny stroke-like condition that causes temporary loss of blood supply to the inner ear.</p>
                        
                        <h5>How does one diagnose deafness?</h5>
                        <p>In adults and older children, we do a simple hearing test called Pure Tone Audiometry (PTA). This involves playing sounds of different frequencies at varying levels and identifying the minimum level at which one could detect the sound at the specific frequency being tested. This is a very accurate and reliable test in most situations.</p>
                        <p>In newborn babies and small children, we can do a test called Otoacoustic emissions (OAE) which involves detection of very weak emissions coming from the normal ear using a probe inside the ear canal. If normal, this test usually rules out any hearing loss in the child.</p>
                        <p>A more detailed hearing assessment is carried out typically in children using a test called BERA – Brain Stem Evoked Response Audiometry. This involves sending sound signals into the ears through headphones and recording brain wave activity using electrodes placed on the scalp. The child needs to sleep or stay very still during the test. Along with a similar test called ASSR, this test can give us a very reliable estimate of the child’s hearing levels. All these tests are carried out by a team of ENT Surgeons and Audiologists, who specialize in the diagnosis and treatment of hearing loss in children and adults.</p>
                        
                        <h4>How can hearing loss be treated?</h4>
                        <h5>Medicines and Surgery </h5>
                        <p>Simple infections of the ear causing temporary loss of hearing in children and adults can be treated with medicines like antibiotics and decongestants. More chronic infections that result in damage to the eardrums or ear ossicles can be treated by Micro ear surgery with very good permanent results. Surgery not only corrects the hearing problems but also arrests the disease from progressing further. Some chronic ear infections involving the spread of infection to the bones surrounding the ear can only be treated by surgery and in these specific patients, one should institute surgical treatment as soon as possible. Micro ear surgery also works very well for patients suffering from Otosclerosis (See above for details), wherein one of the tiny bones affected by the disease is replaced by an artificial one (Stapedectomy) by micro ear surgery.</p>
                        
                        <h5>Hearing Aids</h5>
                        <p>When hearing loss is not correctable by medicines or surgery, or when deafness is due to a weakness of the inner ear or its nerves such as in old age, the best option is an amplification device called a hearing aid. When worn, hearing aids work like magic to restore hearing in the child or adult. There are several types of hearing aid devices. Some are worn behind the ear and others are very tiny and are worn inside the ear canal, where they sit virtually invisible to an onlooker.</p>
                        <p>Hearing aids are typically used by children and adults with mild to moderate hearing loss with no other active infections etc. Senior people who lose their hearing due to the advancement of age, typically older than 65, also benefit hugely by hearing aids. Hearing aids are however not effective when hearing loss falls in the severe to profound category. These patients need to look at other options like BAHA and Cochlear Implants. (see the section on Cochlear implants and Baha for more details)</p>
                        
                        <h5>Dr. Shomeshwar Singh MS DLO FRCS MD </h5>
                        <p>4S Medical Research P Ltd</p>
                        <p>www.seesoundlive.com</p>
                        <p>SCI International Hospital</p>
                        <p>www.scihospital.com</p>
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

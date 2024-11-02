@extends('gurgaon.frontend.layouts.main') @section('main-container')


<div class="page-content">
    <!--section-->
    <div class="section mt-0">
        <div class="breadcrumbs-wrap">
            <div class="container">
                <div class="breadcrumbs">
                    <a href="{{ route('gurgaon.index') }}">Home</a>
                    <a href="{{ route('gurgaon.blog') }}">Blog</a>
                    <span>Laparoscopic Gallbladder Surgery Post-Operative Care and Food to Be Consumed</span>
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
                        <img src="{{asset('public_gurgaon/assets/images/blog/sci-blog-gallbladder-surgery.png')}}" alt="" class="img-fluid mb-3" />
                        <h3 class="blog_title">Laparoscopic Gallbladder Surgery Post-Operative Care and Food to Be Consumed</h3>
                        <p>Do you have any idea of laparoscopic gallbladder surgery? No. Don’t worry; this post will guide you on this surgery and also with aftercare tips.</p>
                        <h5> Laparoscopic Gallbladder Surgery</h5>
                        <p>In this surgical procedure, the surgeon makes small incisions on the belly. Once the incisions are made, a harmless gas is pumped so that the surgeon can see the organs. Through one of the incisions, a long tube fitted with a camera at one end is made to pass inside. The camera records a video of the abdomen, which is transmitted on a computer screen. Based on the video, the surgeon uses surgical tools to remove the gallbladder.</p>
                        <p>Once the gallbladder is taken out, the incision is sutured and small white tapes are applied. The dressing is done over the incision. The whole procedure takes less than an hour. The patient is kept in the hospital for a day for observation.</p>
                        <p>However, even after one gets discharged, one will need to follow some home-care instructions as offered by the hospital.</p>
                        
                        <h5>Post-Operative Care</h5>
                        <p>Recovering from laparoscopic surgery might take a few days. However, patients should always follow the advice of their doctor for homecare.</p>
                        
                        <ul class="list_blog">
                            <li>For the first few days after surgery, practice deep breathing.</li>
                            <li>For the next 3-5 days, patients should go for short walks inside the room. This is to improve blood flow and reduce blood clots and the soreness of the muscles.</li>
                            <li>One should take bath/shower only when the doctor will advise. Usually, one can take a bath the next day.</li>
                            <li>In case of any infection on the incision site, consult your doctor immediately. The white tapes on the incision site shouldn’t be touched by the patient. During the follow-up visit, the doctor would take off the tape and the stitches.</li>
                            <li>Don’t do any physical exercise or any heavy lifting for the first 7 days of the surgery.</li>
                            <li>For pain management, patients should take pain killers as instructed by their doctor.</li>
                            <li>Go for follow-up after 1 week of the surgery and follow the diet as mentioned by the doctor.</li>
                        </ul>
                        
                        
                        <h5>Diet </h5>
                        <p>As a patient recovers from the surgery, one might face bloating and diarrhea if they consume fatty foods. Hence, here are some diets tips that one would need to follow.</p>
                        
                        <ul class="list_blog">
                            <li>Patients are recommended to eat high-fiber food. In fact, on day 1 patients should consume broths and liquid food. Slowly they should add solids in their diet.</li>
                            <li>One should drink 8-10 glasses of water so that the movement of the bowel becomes easy.</li>
                            <li>Don’t take any fried foods after surgery as it can cause gas formation. Avoiding such food would help to get rid of gastrointestinal discomfort.</li>
                            <li>Digesting fat-foods can be a bit of a problem; hence, adding low-fat food to the diet could be helpful.</li>
                            <li>Food items like cereals or nuts or Brussel sprouts should be added to the diet in small amounts.</li>
                           
                        </ul>
                        
                        <p>After surgery, following these basic tips would help a patient to recover fast. For more details, get in touch with your doctor today.</p>
                        
                        
                    </div>
                </div>
                
            </div>
        </div>
    </div>
    <!--//section-->
</div>
@endsection

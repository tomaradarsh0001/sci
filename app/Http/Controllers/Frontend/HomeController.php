<?php

namespace App\Http\Controllers\Frontend;

use File;
use Mail;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;


class HomeController extends Controller
{
    
    public function index(Request $request){  
    	$pageTitle = 'Multispeciality Hospital in Delhi';
        $pageDescription = 'SCI International Hospital is a Multispeciality and Surgical hospital in Delhi. Providing advanced healthcare services in over 15 specialties.';
        $keywords = 'super speciality Hospital,best surgical hospital in india,best surgeon in india,best urology surgeon in india ,gynae surgeon,gynae surgeon in Delhi, surgical hospital, multispeciality hospital delhi';
        return view('frontend.index',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function landingpage(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.landingpage',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function hipreplacementsurgery(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.hipreplacementsurgery',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function kneereplacementsurgery(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.kneereplacementsurgery',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function acltearsurgery(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.acltearsurgery',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function gallstonesurgery(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.gallstonesurgery',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function urethralstricture(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.urethralstricture',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function peyroniedisease(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.peyroniedisease',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function maleinfertilitylp(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.maleinfertilitylp',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function generalorthopedic(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.generalorthopedic',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function penileimplant(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.penileimplant',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function andrologyerectile(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.andrologyerectile',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function urology(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.urology',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function maternity(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.maternity',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function generalsurgery(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.generalsurgery',compact('pageTitle','pageDescription','keywords'));
    	
    }
   
    public function kidneystone(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.kidneystone',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function ourteam(Request $request){  
    	$pageTitle = 'Our Team';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.ourteam',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function thankyou2(Request $request){  
    	$pageTitle = 'Thank You';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.thankyou2',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function aboutus(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('frontend.aboutus',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function ourdoctors(Request $request){  
    	$pageTitle = 'Experienced Doctors in Greater Kailash | SCI International Hospital';
        $pageDescription = 'SCI has experienced doctors, surgeons and caretaking staff to attend to the personalized treatment and aftercare needs of every patient.';
        $keywords = '';
        $doctors = Doctor::where('city', 'Delhi')->get();
        return view('frontend.ourdoctors',compact('pageTitle','pageDescription','keywords', 'doctors'));
    	
    }
    public function makeanappointment(Request $request){  
        $pageTitle = 'Book An Appointment - SCI International Hospital';
        $pageDescription = 'Book An Appointment using our online form for your consultation at SCI International Hospitals which is located in Greater Kailash, South Delhi.';
        $keywords = '';
        return view('frontend.makeanappointment',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function internationalpatients(Request $request){  
        if($request->ajax()){
            //Start Validation
            $messages = [
                'name.required'                     => 'Name field is required.',
                'age.required'                      => 'Age field is required.',
                'gender.required'                   => 'Gender field is required.',
                'phone.required'                    => 'Phone field is required.',
                'email.required'                    => 'Email field is required.',
                'country.required'                  => 'Country field is required.',
                'image1.required'        => 'Medical procedure field is required.',
                'image2.required'                    => 'Upload your documents/scans field is required.',
                'image3.required'   => 'Upload Last Medical Prescription field is required.',
                'Comments.required'                 => 'Comments field is required.',
            ];
            $validator = Validator::make($request->all(), [
                'Comments'                  => 'required',
                'image3'    => 'required',
                'image2'             => 'required',
                'image1' => 'required',
                'country'           => 'required',
                'email'             => 'required',
                'phone'             => 'required',
                'gender'            => 'required',
                'age'               => 'required',
                'name'              => 'required',
            ],$messages);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }
            //end Validation

            $data['name']                   = $request->name;
            $data['age']                    = $request->age;
            $data['gender']                 = $request->gender;
            $data['phone']                  = $request->phone;
            $data['email']                  = $request->email;
            $data['country']                = $request->country;
            
            if ($request->hasFile('image1')) {
				$image = $request->file('image1');
				$name = 'img1_'.rand(4444,5555).time().'.'.$image->getClientOriginalExtension();
				$destinationPath = public_path('/images');
				if (! File::exists( $destinationPath ) ) {
					File::makeDirectory( $destinationPath );
				}
				$image->move( $destinationPath, $name );
				
				$data['image1'] = '/images/'.$name;
			}
			if ($request->hasFile('image2')) {
				$image = $request->file('image2');
				$name = 'img2_'.rand(4444,5555).time().'.'.$image->getClientOriginalExtension();
				$destinationPath = public_path('/images');
				if (! File::exists( $destinationPath ) ) {
					File::makeDirectory( $destinationPath );
				}
				$image->move( $destinationPath, $name );
				
				$data['image2'] = '/images/'.$name;
			}
			if ($request->hasFile('image3')) {
				$image = $request->file('image3');
				$name = 'img3_'.rand(4444,5555).time().'.'.$image->getClientOriginalExtension();
				$destinationPath = public_path('/images');
				if (! File::exists( $destinationPath ) ) {
					File::makeDirectory( $destinationPath );
				}
				$image->move( $destinationPath, $name );
				
				$data['image3'] = '/images/'.$name;
			}
            
            $data['Comments']               = $request->Comments;
            $subject                        = $request->subject;

            Mail::send('emails.internationalpatientMail', array('data' => $data), function($message) use($subject){
                $message->to('scihospital.official@gmail.com')->subject($subject);
                $message->bcc('digeesell.leads@gmail.com')->subject($subject);
                
            });

            return response()->json([
                'success'   => true,
                'message'   => 'Thank you!  Your message has been successfully sent. We will contact you very soon!',
            ]);
        }
        $pageTitle = 'Treatment for Internatioanl Patients SCI International Hospital';
        $pageDescription = 'SCI Internatonal Hospital treated many International Hospitals, SCI is also famous in treating International patients with utmost care.';
        $keywords = '';
        return view('frontend.internationalpatients',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function contact(Request $request){  
        $pageTitle = 'Contact - SCI International Hospital';
        $pageDescription = 'SCI Hospital is one of the best healthcare centre in Greater Kailash, South Delhi.';
        $keywords = '';
        return view('frontend.contact',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function insuranceandtpa(Request $request){  
        $pageTitle = 'Insurance and TPA - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.insuranceandtpa',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function career(Request $request){  
        $pageTitle = 'Career at SCI International Hospital South Delhi';
        $pageDescription = 'SCI International Hospital gives the best career opportunities gives opportunities for all kinds of roles like junior doctors, senior doctors, nurses, cleaning staff, etc.';
        $keywords = '';
        return view('frontend.career',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function services(Request $request){  
        $pageTitle = 'Health Services at SCI International Hospital';
        $pageDescription = 'Explore SCI International Hospital located at Greater Kailash website for number of Health Services we provide which gives clear idea.';
        $keywords = '';
        return view('frontend.services',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function ourgallery(Request $request){  
        $pageTitle = 'Our Gallery - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.ourgallery',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function blog(Request $request){  
        $pageTitle = 'Blog - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blog',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function errorpage(Request $request){  
        $pageTitle = 'Not Found - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.errorpage',compact('pageTitle','pageDescription','keywords'));
        
    }
    /*oldblogs*/
    
    public function SomeCommonDentalInfectionsandHowtoPreventThemold(Request $request){  
        $pageTitle = 'Let’s know about some common dental infections';
        $pageDescription = 'Bad Breath, also referred to as halitosis, is a very common oral problem. This results from poor dental hygiene and unhealthy lifestyle. Different kinds of food like garlic, spices, soda, tobacco and alcohol can also contribute to bad breath.';
        $keywords = '';
        return view('frontend.oldblogs.SomeCommonDentalInfectionsandHowtoPreventThemold',compact('pageTitle','pageDescription','keywords'));
    }
    
    public function howtogetridofhemorrhoidspilessymptomstreatmentold(Request $request){  
        $pageTitle = 'How to get rid of Hemorrhoids (Piles)? – Symptoms & Treatment  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.howtogetridofhemorrhoidspilessymptomstreatmentold',compact('pageTitle','pageDescription','keywords'));
    }
    public function commongallbladderproblemsanditspreventionold(Request $request){  
        $pageTitle = 'Common Gallbladder problems and its prevention  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.commongallbladderproblemsanditspreventionold',compact('pageTitle','pageDescription','keywords'));
    }
    public function signsyoushouldmakeanappointmentwithyourgynaecologistold(Request $request){  
        $pageTitle = '7 Signs You Should Make An Appointment With Your Gynaecologist  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.signsyoushouldmakeanappointmentwithyourgynaecologistold',compact('pageTitle','pageDescription','keywords'));
    }
    public function allaboutdentalcrownsusesandbenefitsold(Request $request){  
        $pageTitle = 'All About Dental Crowns: Uses and Benefits  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.allaboutdentalcrownsusesandbenefitsold',compact('pageTitle','pageDescription','keywords'));
    }
    public function varicocelecommancauseofmaleinfertilityitstreatmentsold(Request $request){  
        $pageTitle = 'Varicocele: Common Cause of Male Infertility & its Treatment  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.varicocelecommancauseofmaleinfertilityitstreatmentsold',compact('pageTitle','pageDescription','keywords'));
    }
    public function howdoesmonsoonaffectyourskincommonskinproblemsduringmonsoonold(Request $request){  
        $pageTitle = 'HOW DOES MONSOON AFFECT YOUR SKIN? COMMON SKIN PROBLEMS DURING MONSOON?  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.howdoesmonsoonaffectyourskincommonskinproblemsduringmonsoonold',compact('pageTitle','pageDescription','keywords'));
    }
    public function covid19vaccineanderectiledysfunctionold(Request $request){  
        $pageTitle = 'COVID-19 Vaccine and Erectile Dysfunction  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.covid19vaccineanderectiledysfunctionold',compact('pageTitle','pageDescription','keywords'));
    }
    public function tipsforbreastfeedingthingsthatnewmomsshouldknowold(Request $request){  
        $pageTitle = 'Tips for Breast-feeding- Things that new moms should know  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.tipsforbreastfeedingthingsthatnewmomsshouldknowold',compact('pageTitle','pageDescription','keywords'));
    }
    public function whatishysterectomypurposeandprocedureold(Request $request){  
        $pageTitle = 'What is Hysterectomy? Purpose And Procedure  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.whatishysterectomypurposeandprocedureold',compact('pageTitle','pageDescription','keywords'));
    }
    public function ovariancystandpregnancycouldanovariancystcauseinfertilityold(Request $request){  
        $pageTitle = 'Ovarian Cyst And Pregnancy: Could An Ovarian Cyst Cause Infertility?  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.ovariancystandpregnancycouldanovariancystcauseinfertilityold',compact('pageTitle','pageDescription','keywords'));
    }
    public function commonentproblemsduringmonsoonandhowtopreventitold(Request $request){  
        $pageTitle = 'Common ENT Problems During Monsoon and How to Prevent It?  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.commonentproblemsduringmonsoonandhowtopreventitold',compact('pageTitle','pageDescription','keywords'));
    }
    public function interviewdrvinayaggarwalold(Request $request){  
        $pageTitle = 'Interview By Dr. Vinay Aggarwal  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.interviewdrvinayaggarwalold',compact('pageTitle','pageDescription','keywords'));
    }
    public function tipsfornormaldeliveryold(Request $request){  
        $pageTitle = 'Tips for Normal Delivery  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.tipsfornormaldeliveryold',compact('pageTitle','pageDescription','keywords'));
    }
    public function knowthecorrectsittingposturesduring1sttrimester2ndtrimesterand3rdtrimesterofpregnancyold(Request $request){  
        $pageTitle = 'Know the Correct Sitting Postures during 1st Trimester, 2nd Trimester and 3rd Trimester of Pregnancy  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.knowthecorrectsittingposturesduring1sttrimester2ndtrimesterand3rdtrimesterofpregnancyold',compact('pageTitle','pageDescription','keywords'));
    }
    public function whatisthenewprocedureforkneereplacementold(Request $request){  
        $pageTitle = 'Breech Babies: Causes and Complications Which You Must Know - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.whatisthenewprocedureforkneereplacementold',compact('pageTitle','pageDescription','keywords'));
    }
    public function BreechBabiesCausesandComplicationsold(Request $request){  
        $pageTitle = 'Breech Babies: Causes and Complications Which You Must Know - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.BreechBabiesCausesandComplicationsold',compact('pageTitle','pageDescription','keywords'));
    }
    public function BariatricSurgerySomeUnknownFactsYouMustKnowold(Request $request){  
        $pageTitle = 'Bariatric Surgery Some Unknown Facts You Must Know - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.BariatricSurgerySomeUnknownFactsYouMustKnowold',compact('pageTitle','pageDescription','keywords'));
    }
    public function gestationaldiabeteshowtocontrolitwithdietexerciseandmoreold(Request $request){  
        $pageTitle = 'Gestational Diabetes: How to Control It with Diet, Exercise, and More? - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.gestationaldiabeteshowtocontrolitwithdietexerciseandmoreold',compact('pageTitle','pageDescription','keywords'));
    }
     public function kidneystonessignssymptomsold(Request $request){  
        $pageTitle = 'Kidney Stones: Early Warning Signs and Symptoms - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.kidneystonessignssymptomsold',compact('pageTitle','pageDescription','keywords'));
    }
    public function HowDoestheNuchalCordAffectTheBabyold(Request $request){  
        $pageTitle = 'How Does the Nuchal Cord Affect The Baby? - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.HowDoestheNuchalCordAffectTheBabyold',compact('pageTitle','pageDescription','keywords'));
    }
    public function laparoscopicgallbladdersurgeryold(Request $request){  
        $pageTitle = 'Laparoscopic Gallbladder Surgery Post-Operative Care and Food to Be Consumed - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.laparoscopicgallbladdersurgeryold',compact('pageTitle','pageDescription','keywords'));
    }
    public function preventearinfectionsold(Request $request){  
        $pageTitle = 'Ear Infections: How to Prevent It During Monsoon? - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.preventearinfectionsold',compact('pageTitle','pageDescription','keywords'));
    }
    public function PrenatalNutritionTipsold(Request $request){  
        $pageTitle = 'Check Out Some Important Prenatal Nutrition Tips for World Nutrition Day - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.PrenatalNutritionTipsold',compact('pageTitle','pageDescription','keywords'));
    }
    public function prostatecancerknowthesymptomsandtreatmentold(Request $request){  
        $pageTitle = 'Prostate Cancer Know the Symptoms and Treatment - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.prostatecancerknowthesymptomsandtreatmentold',compact('pageTitle','pageDescription','keywords'));
    }
    public function tipsformenstrugglingwithmaleinfertilityold(Request $request){  
        $pageTitle = 'Tips for Men Struggling With Male Infertility - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.tipsformenstrugglingwithmaleinfertilityold',compact('pageTitle','pageDescription','keywords'));
    }
     public function DeafnessCausesTreatmentOptionsold(Request $request){  
        $pageTitle = 'Deafness Awareness Week – Deafness Causes, Diagnosis and Treatment Options - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.DeafnessCausesTreatmentOptionsold',compact('pageTitle','pageDescription','keywords'));
    }
    public function thethirdtrimesterold(Request $request){  
        $pageTitle = 'The Movement of Your Developing baby: The Third Trimester - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.thethirdtrimesterold',compact('pageTitle','pageDescription','keywords'));
    }
    public function tensurprisinglycommonthingsthatcausesmaleinfertilityold(Request $request){  
        $pageTitle = 'Ten Surprisingly Common things that Causes Male Infertility - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.tensurprisinglycommonthingsthatcausesmaleinfertilityold',compact('pageTitle','pageDescription','keywords'));
    }
    public function reasonsforovariancancerandtreatmentoptionsfromourexpertsold(Request $request){  
        $pageTitle = '10 Reasons for Ovarian Cancer and Treatment Options from Our Experts - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.reasonsforovariancancerandtreatmentoptionsfromourexpertsold',compact('pageTitle','pageDescription','keywords'));
    }
    public function importantsignsoflaborpainsold(Request $request){  
        $pageTitle = '10 Important Signs of Labor Pains - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.importantsignsoflaborpainsold',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function valuabletipstofollowbeforetheairpollutionhitsyourthroatold(Request $request){  
        $pageTitle = '10 Valuable Tips to Follow Before the Air Pollution Hits Your Throat - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.valuabletipstofollowbeforetheairpollutionhitsyourthroatold',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function factsonemustknowaboutcochlearimplantsold(Request $request){  
        $pageTitle = 'Facts One Must Know about Cochlear Implants - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.oldblogs.factsonemustknowaboutcochlearimplantsold',compact('pageTitle','pageDescription','keywords'));
        
    }
    /*oldblogs*/
    
    
    public function commondentalinfections(Request $request){  
        $pageTitle = '5 Most Common Dental Infections and Their Prevention';
        $pageDescription = 'Explore common dental infections, from bad breath to cavities, and find important tips for oral hygiene. Learn how to prevent dental issues for a healthy, confident smile.';
        $keywords = 'Common Dental Infections,  symptoms of cavities, prevent Dental Infections';
        return view('frontend.blogpages.commondentalinfections',compact('pageTitle','pageDescription','keywords'));
    }
    
    public function factsonemustknowaboutcochlearimplants(Request $request){  
        $pageTitle = 'Facts One Must Know about Cochlear Implants - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.factsonemustknowaboutcochlearimplants',compact('pageTitle','pageDescription','keywords'));
        
    }
      public function dopenileenlargementsurgerieswork(Request $request){  
        $pageTitle = 'Do Penile Enlargement Surgeries Work';
        $pageDescription = 'Know the facts on Penis enlargement surgery effectiveness, risks, side effects, and outcomes to increase the length or girth of the penis';
        $keywords = 'penile enlargement, penile enlargement surgeries, penile enlargement treatment, penile extender, penile lengthening surgery, increase penile girth, different types of penile enlargement surgery, penuma side effects, penile enlargement risks';
        return view('frontend.blogpages.dopenileenlargementsurgerieswork',compact('pageTitle','pageDescription','keywords'));
        
    }
     public function whatareuterinefibroids(Request $request){  
        $pageTitle = 'What are Uterine Fibroids?';
        $pageDescription = 'Learn about uterine fibroids: causes, symptoms, and treatment. Understand how fibroids affect pregnancy and discover effective strategies to manage uterine fibroid.';
        $keywords = 'what are uterine fibroids, what are fibroids, uterine fibroids, fibroids, myomectomy, uterine fibroid treatments, fibroids treatment, best treatment for fibroids, uterine fibroids symptoms, what causes fibroids, what is myoma,  what causes uterine fibroids, what happens when fibroids shrink';
        return view('frontend.blogpages.whatareuterinefibroids',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function valuabletipstofollowbeforetheairpollutionhitsyourthroat(Request $request){  
        $pageTitle = '10 Valuable Tips to Follow Before the Air Pollution Hits Your Throat - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.valuabletipstofollowbeforetheairpollutionhitsyourthroat',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function importantsignsoflaborpains(Request $request){  
        $pageTitle = '10 Important Signs of Labor Pains - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.importantsignsoflaborpains',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function reasonsforovariancancerandtreatmentoptionsfromourexperts(Request $request){  
        $pageTitle = '10 Reasons for Ovarian Cancer and Treatment Options from Our Experts - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.reasonsforovariancancerandtreatmentoptionsfromourexperts',compact('pageTitle','pageDescription','keywords'));
    }
    public function tensurprisinglycommonthingsthatcausesmaleinfertility(Request $request){  
        $pageTitle = 'Ten Surprisingly Common things that Causes Male Infertility - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.tensurprisinglycommonthingsthatcausesmaleinfertility',compact('pageTitle','pageDescription','keywords'));
    }
    public function thethirdtrimester(Request $request){  
        $pageTitle = 'The Movement of Your Developing baby: The Third Trimester - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.thethirdtrimester',compact('pageTitle','pageDescription','keywords'));
    }
    public function DeafnessCausesTreatmentOptions(Request $request){  
        $pageTitle = 'Deafness Awareness Week – Deafness Causes, Diagnosis and Treatment Options - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.DeafnessCausesTreatmentOptions',compact('pageTitle','pageDescription','keywords'));
    }
    public function tipsformenstrugglingwithmaleinfertility(Request $request){  
        $pageTitle = 'Tips for Men Struggling With Male Infertility - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.tipsformenstrugglingwithmaleinfertility',compact('pageTitle','pageDescription','keywords'));
    }
    public function prostatecancerknowthesymptomsandtreatment(Request $request){  
        $pageTitle = 'Prostate Cancer Know the Symptoms and Treatment - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.prostatecancerknowthesymptomsandtreatment',compact('pageTitle','pageDescription','keywords'));
    }
    public function PrenatalNutritionTips(Request $request){  
        $pageTitle = 'Check Out Some Important Prenatal Nutrition Tips for World Nutrition Day - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.PrenatalNutritionTips',compact('pageTitle','pageDescription','keywords'));
    }
    public function preventearinfections(Request $request){  
        $pageTitle = 'Ear Infections: How to Prevent It During Monsoon? - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.preventearinfections',compact('pageTitle','pageDescription','keywords'));
    }
    public function laparoscopicgallbladdersurgery(Request $request){  
        $pageTitle = 'Laparoscopic Gallbladder Surgery Post-Operative Care and Food to Be Consumed - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.laparoscopicgallbladdersurgery',compact('pageTitle','pageDescription','keywords'));
    }
    public function HowDoestheNuchalCordAffectTheBaby(Request $request){  
        $pageTitle = 'How Does the Nuchal Cord Affect The Baby? - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.HowDoestheNuchalCordAffectTheBaby',compact('pageTitle','pageDescription','keywords'));
    }
    public function kidneystonessignssymptoms(Request $request){  
        $pageTitle = 'Kidney Stones: Early Warning Signs and Symptoms';
        $pageDescription = 'Are you suffering from kidney stones? If you said Yes, with advancements in the field of medical science, treatment for kidney stones is easily available.';
        $keywords = 'early signs of kidney stones,kidney stones treatment,kidney stones causes,passing a kidney stone,signs of kidney stones,urinary stones';
        return view('frontend.blogpages.kidneystonessignssymptoms',compact('pageTitle','pageDescription','keywords'));
    }
    public function gestationaldiabeteshowtocontrolitwithdietexerciseandmore(Request $request){  
        $pageTitle = 'Gestational Diabetes: How to Control It with Diet, Exercise, and More? - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.gestationaldiabeteshowtocontrolitwithdietexerciseandmore',compact('pageTitle','pageDescription','keywords'));
    }
    public function BariatricSurgerySomeUnknownFactsYouMustKnow(Request $request){  
        $pageTitle = 'Bariatric Surgery Some Unknown Facts You Must Know - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.BariatricSurgerySomeUnknownFactsYouMustKnow',compact('pageTitle','pageDescription','keywords'));
    }
    public function BreechBabiesCausesandComplications(Request $request){  
        $pageTitle = 'Breech Babies: Causes and Complications Which You Must Know - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.BreechBabiesCausesandComplications',compact('pageTitle','pageDescription','keywords'));
    }
    public function whatisthenewprocedureforkneereplacement(Request $request){  
        $pageTitle = 'Latest treatment for knee replacement Surgery';
        $pageDescription = 'Learn about latest treatment for knee replacement including reasons for knee replacement, risks, and what to expect before, during and after surgery';
        $keywords = 'knee replacement surgery,partial knee replacement,latest technology in knee replacement surgery in india,Knee Replacement Surgery Procedure';
        return view('frontend.blogpages.whatisthenewprocedureforkneereplacement',compact('pageTitle','pageDescription','keywords'));
    }
    public function knowthecorrectsittingposturesduring1sttrimester2ndtrimesterand3rdtrimesterofpregnancy(Request $request){  
        $pageTitle = 'Avoid Sitting positions during Pregnancy: Pregnancy Health Blog';
        $pageDescription = 'Maintaining posture in pregnancy can be achieved with exercises,Let’s take a look at the tips for maintaining the correct postures during pregnancy';
        $keywords = 'healthshots, pregnancy positions, mothers slouching, how can slouching affect the foetus, pregnancy tips, how            to take care of foetus during pregnancy,sleeping position in pregnancy,pregnancy,good posture during pregnancy,pregnancy exercises,pregnancy posture,using seatbelt during pregnancy';
        return view('frontend.blogpages.knowthecorrectsittingposturesduring1sttrimester2ndtrimesterand3rdtrimesterofpregnancy',compact('pageTitle','pageDescription','keywords'));
    }
    public function tipsfornormaldelivery(Request $request){  
        $pageTitle = 'Tips for Easy Normal Delivery';
        $pageDescription = 'These easy-to-follow normal delivery tips will give you the confidence to birth your baby.  Maintain an exercise routine and keep your body active.';
        $keywords = 'tips for easy normal delivery,avoid cesarean,how to avoid c section delivery,prevent c section';
        return view('frontend.blogpages.tipsfornormaldelivery',compact('pageTitle','pageDescription','keywords'));
    }
    public function interviewdrvinayaggarwal(Request $request){  
        $pageTitle = 'Interview By Dr. Vinay Aggarwal  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.interviewdrvinayaggarwal',compact('pageTitle','pageDescription','keywords'));
    }
    public function varicocelecommancauseofmaleinfertilityitstreatments(Request $request){  
        $pageTitle = 'Varicocele: Common Cause of Male Infertility & its Treatment  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.varicocelecommancauseofmaleinfertilityitstreatments',compact('pageTitle','pageDescription','keywords'));
    }
    public function allaboutdentalcrownsusesandbenefits(Request $request){  
        $pageTitle = 'All About Dental Crowns ';
        $pageDescription = 'Damaged teeth can now be saved with various methodologies. Let’s understand what dental crowns are and how they can be helpful to you! ';
        $keywords = 'dentist near me, dental service, dental implants in Delhi cost, Uses of Dental Crowns, taking care of dental crowns, Dental Crowns ';
        return view('frontend.blogpages.allaboutdentalcrownsusesandbenefits',compact('pageTitle','pageDescription','keywords'));
    }
    public function signsyoushouldmakeanappointmentwithyourgynaecologist(Request $request){  
        $pageTitle = '7 Signs You Should Make an Appointment with Your Gynecologist ';
        $pageDescription = 'To understand which problems can a gynecologist help you with. Especially with limited awareness about such conditions. Here are some common gynecology-related situations that you should never ignore';
        $keywords = '';
        return view('frontend.blogpages.signsyoushouldmakeanappointmentwithyourgynaecologist',compact('pageTitle','pageDescription','keywords'));
    }
    public function commongallbladderproblemsanditsprevention(Request $request){  
        $pageTitle = 'Get to know everything about the gallbladder disorder  ';
        $pageDescription = 'When it comes to the gallbladder, we often miss out on signs that can indicate severe complications. Later, these slowly damage our bladder and complicate our health.';
        $keywords = '';
        return view('frontend.blogpages.commongallbladderproblemsanditsprevention',compact('pageTitle','pageDescription','keywords'));
    }
    public function howtogetridofhemorrhoidspilessymptomstreatment(Request $request){  
        $pageTitle = 'Piles Symptoms & Treatment ';
        $pageDescription = 'Hemorrhoids, commonly known as Piles, are swollen veins in the anus and the lowest part of the rectum. This causes painful discomfort and rectal bleeding. Hemorrhoids have become very common in adults.  ';
        $keywords = '';
        return view('frontend.blogpages.howtogetridofhemorrhoidspilessymptomstreatment',compact('pageTitle','pageDescription','keywords'));
    }
    public function SomeCommonDentalInfectionsandHowtoPreventThem(Request $request){  
        $pageTitle = 'Let’s know about some common dental infections';
        $pageDescription = 'Bad Breath, also referred to as halitosis, is a very common oral problem. This results from poor dental hygiene and unhealthy lifestyle. Different kinds of food like garlic, spices, soda, tobacco and alcohol can also contribute to bad breath.';
        $keywords = '';
        return view('frontend.blogpages.SomeCommonDentalInfectionsandHowtoPreventThem',compact('pageTitle','pageDescription','keywords'));
    }
    public function tipsforbreastfeedingthingsthatnewmomsshouldknow(Request $request){  
        $pageTitle = 'Tips for Breast-feeding- Things that new moms should know  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.tipsforbreastfeedingthingsthatnewmomsshouldknow',compact('pageTitle','pageDescription','keywords'));
    }
    public function covid19vaccineanderectiledysfunction(Request $request){  
        $pageTitle = 'COVID-19 Vaccine and Erectile Dysfunction';
        $pageDescription = 'Reported link between COVID-19 vaccine and erectile dysfunction.';
        $keywords = 'Erectile Dysfunction,COVID-19,Crona, COVID-19 vaccination,erectile dysfunction risk in crona';
        return view('frontend.blogpages.covid19vaccineanderectiledysfunction',compact('pageTitle','pageDescription','keywords'));
    }
    public function howdoesmonsoonaffectyourskincommonskinproblemsduringmonsoon(Request $request){  
        $pageTitle = 'HOW DOES MONSOON AFFECT YOUR SKIN? COMMON SKIN PROBLEMS DURING MONSOON?  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.howdoesmonsoonaffectyourskincommonskinproblemsduringmonsoon',compact('pageTitle','pageDescription','keywords'));
    }
    public function commonentproblemsduringmonsoonandhowtopreventit(Request $request){  
        $pageTitle = 'Common ENT Problems During Monsoon and How to Prevent It?  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.commonentproblemsduringmonsoonandhowtopreventit',compact('pageTitle','pageDescription','keywords'));
    }
    public function ovariancystandpregnancycouldanovariancystcauseinfertility(Request $request){  
        $pageTitle = 'Ovarian Cyst and Infertility in women';
        $pageDescription = 'Everything you need to know about ovarian cysts from the signs, treatment and whether you should worry if they will cause infertility.';
        $keywords = 'can i get pregnant with ovarian cyst,how soon after ovarian cyst removal can i get pregnant,cyst on ovary can you get pregnant,cyst on ovary can i get pregnant,can i conceive with ovarian cyst,ovary pregnant,Infertility in women,Ovarian Cyst Treatment,Ovarian Cysts Causes';
        return view('frontend.blogpages.ovariancystandpregnancycouldanovariancystcauseinfertility',compact('pageTitle','pageDescription','keywords'));
    }
    public function whatishysterectomypurposeandprocedure(Request $request){  
        $pageTitle = 'What is Hysterectomy? Purpose And Procedure  - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('frontend.blogpages.whatishysterectomypurposeandprocedure',compact('pageTitle','pageDescription','keywords'));
    }
    public function hypospadiassymptomstypesandtreatment(Request $request){  
        $pageTitle = 'HYPOSPADIAS: Symptoms, Types and Treatment   - SCI International Hospital';
        $pageDescription = 'Hypospadias is a medical condition where the meatus (hole) is not present on the penis of the males.';
        $keywords = '';
        return view('frontend.blogpages.hypospadiassymptomstypesandtreatment',compact('pageTitle','pageDescription','keywords'));
    }
    public function bestgynecologisthospitalindelhi(Request $request){  
        $pageTitle = ' Looking for the best Gynecologist in Delhi | SCI hospital';
        $pageDescription = 'Looking for the best Gynecologist in Delhi to comfortably discuss the changes in your hectic life and not able to understand whom to talk to? Your search and confusion comes to an end here, consult the SCI Hospital, the best Gynecologist Hospital in Delhi';
        $keywords = '';
        return view('frontend.blogpages.bestgynecologisthospitalindelhi',compact('pageTitle','pageDescription','keywords'));
    }
    public function bestjointreplacementsurgeonindelhi(Request $request){  
        $pageTitle = 'Best joint replacement surgeon in Delhi ';
        $pageDescription = 'If you are bearing the same pain and looking for the best joint replacement surgeon in Delhi, in this article we will discuss the best joint replacement surgeon in Delhi. First, let us understand some other factors of knee replacement. Based on the condition of the knee degeneration and its location, there are two types of knee surgery conducted.';
        $keywords = '';
        return view('frontend.blogpages.bestjointreplacementsurgeonindelhi',compact('pageTitle','pageDescription','keywords'));
    }
    public function rulesforahealthyvagina(Request $request){  
        $pageTitle = '10 Rules for a Healthy Vagina | SCI International Hospital ';
        $pageDescription = 'Maintaining vaginal health is crucial. The female anatomy is quite different from that of males, and the vaginal area is prone to infections. Read blog! ';
        $keywords = 'vaginal health, vaginal itching remedies ';
        return view('frontend.blogpages.rulesforahealthyvagina',compact('pageTitle','pageDescription','keywords'));
    }
    public function everythingyouneedtoknowaboutcovidandpregnancy(Request $request){  
        $pageTitle = 'Know about Covid and Pregnancy';
        $pageDescription = 'There is evidence that shows pregnant women who are suffering from any kind of heart condition are prone to get infected with the coronavirus.';
        $keywords = 'Pregnancy, risk, expecting, Pregnant, Women, infants, Coronavirus, COVID, Pregnancy & Breastfeeding, Coronavirus [CoV]';
        return view('frontend.blogpages.everythingyouneedtoknowaboutcovidandpregnancy',compact('pageTitle','pageDescription','keywords'));
    }
    public function whattypesofpregnancyexercisesareidealforawoman(Request $request){  
        $pageTitle = 'The Best Pregnancy Workouts and Exercises';
        $pageDescription = 'Try these safe pregnancy workouts when you’re expecting to improve your health and your baby’s. The best pregnancy exercises will build strength.';
        $keywords = 'exercise for pregnant women,postpartum workout,pregnancy exercises at home,working out while pregnant,pregnancy exercise for normal delivery';
        return view('frontend.blogpages.whattypesofpregnancyexercisesareidealforawoman',compact('pageTitle','pageDescription','keywords'));
    }
    public function ishypospadiassurgerypainfulforkids(Request $request){  
        $pageTitle = 'Is Hypospadias Surgery Painful for kids?';
        $pageDescription = 'Find out the truth about hypospadias surgery pain in kids. Expert insights on pain levels before, during, and after surgery, and recovery time. Learn more!';
        $keywords = 'hypospadias surgery, hypospadias surgery pain in kids, recovery time of hypospadias surgery';
        return view('frontend.blogpages.ishypospadiassurgerypainfulforkids',compact('pageTitle','pageDescription','keywords'));
    }
    /*public function howtoavoidpregnancynaturally(Request $request){  
        $pageTitle = 'How to Avoid Pregnancy Naturally?';
        $pageDescription = 'Apart from medical contraceptives, there also exist many natural ways to avoid pregnancy. Lets Read about some.';
        $keywords = 'home remedies to prevent pregnancy,avoid pregnancy naturally,natural ways to avoid pregnancy,calendar method to avoid pregnancy,natural food to avoid pregnancy,natural ways to stop pregnancy';
        return view('frontend.blogpages.howtoavoidpregnancynaturally',compact('pageTitle','pageDescription','keywords'));
    }*/
    public function whichtypeofhypospadiasisthemostsevere(Request $request){  
        $pageTitle = 'Which type of hypospadias is the most severe.  ';
        $pageDescription = 'Learn about the different types of hypospadias and discover why proximal hypospadias is considered the most severe and requires the most complex surgical treatment. ';
        $keywords = 'hypospadias surgery, treatment health, care diagnosis, hypospadias treatment hypospadias symptoms, diagnosis and treatment, no symptoms, hypospadias meaning, common symptoms, epispadias and hypospadias, symptoms diagnosis, health diagnosis diagnosis treatment, hypospadias cause, health care diagnosis.';
        return view('frontend.blogpages.whichtypeofhypospadiasisthemostsevere',compact('pageTitle','pageDescription','keywords'));
    }
    
     public function thingsshouldconsiderwhenlookingforahospitalforyourpregnancy(Request $request){  
        $pageTitle = 'Things should consider when looking for a hospital for your pregnancy. ';
        $pageDescription = 'Find the ideal hospital for your pregnancy. From expert staff to modern facilities, ensure a safe and nurturing environment. Discover more today.';
        $keywords = 'hospital for pregnancy, maternity hospital near me, maternity hospital,  best maternity hospital near me, pregnancy hospital near me, pregnancy hospital, labor hospital.';
        return view('frontend.blogpages.thingsshouldconsiderwhenlookingforahospitalforyourpregnancy',compact('pageTitle','pageDescription','keywords'));
    }
    public function whatisurethralstricturedisease(Request $request){  
        $pageTitle = ' What is Urethral Stricture Disease?  ';
        $pageDescription = 'Learn about Urethral Stricture Disease: causes, symptoms, diagnosis, and treatment options. Expert insights to manage this condition effectively.';
        $keywords = 'stricture urethra, urethral stricture disease, stricture urethra treatment, urethral symptom, urethritis symptoms, urethral syndrome, urethrotomy, urethral treatment, urethral stricture treatment at home, stricture urethra icd 10.';
        return view('frontend.blogpages.whatisurethralstricturedisease',compact('pageTitle','pageDescription','keywords'));
    }
    public function canendometriosisgetworseasyougetolder(Request $request){  
        $pageTitle = 'Can Endometriosis Get Worse as You Get Older? ';
        $pageDescription = 'Learn about endometriosis, a condition afflicting women with pain and potential infertility. know the treatment options and seek guidance for effective management';
        $keywords = 'endometriosis, endometriosis treatments, endometrioma, endometriosis surgery, endometriosis diagnosis, endometriosis pain, endometriotic cyst, endometrioma cyst, endometriosis laparoscopic surgery, endometriosis specialist, endometriosis symptoms, endometriosis causes, pain from endometriosis, menstrual cramps, does endometriosis get worse with age, period cramps, period pain relief';
        return view('frontend.blogpages.canendometriosisgetworseasyougetolder',compact('pageTitle','pageDescription','keywords'));
    }
    public function prematurebirthriskandcomplications(Request $request){  
        $pageTitle = 'Premature Birth: Risk And Complications ';
        $pageDescription = "Here's everything you need to know about taking care of a premature baby. Learn about the causes, risks, and complications of premature birth. ";
        $keywords = ' ';
        return view('frontend.blogpages.prematurebirthriskandcomplications',compact('pageTitle','pageDescription','keywords'));
    }
    
    public function prosandconsofpenileenlargementsurgery(Request $request){  
        $pageTitle = ' Pros and Cons of Penile Enlargement Surgery ';
        $pageDescription = " Pros and Cons of Penile Enlargement Surgery - Learn about the risk and benefits of this procedure before making a decision.";
        $keywords = ' ';
        return view('frontend.blogpages.prosandconsofpenileenlargementsurgery',compact('pageTitle','pageDescription','keywords'));
    }
    public function reasonstoseeaurologist(Request $request){  
        $pageTitle = '8 Reasons To See A Urologist';
        $pageDescription = "Learn about the 8 most compelling reasons to see a urologist. Expert health insights that could be the key to your well-being and peace of mind.";
        $keywords = 'reasons to see a urologist, reasons to see urologist';
        return view('frontend.blogpages.reasonstoseeaurologist',compact('pageTitle','pageDescription','keywords'));
    }
    public function benefitsofplasticsurgeryprocedure(Request $request){  
        $pageTitle = ' The Benefits of Plastic Surgery Procedure ';
        $pageDescription = "Explore the transforming benefits of plastic surgery procedures. With expert advice, you can boost your confidence, improve your looks, and improve your health.";
        $keywords = 'benefits of plastic surgery procedures, plastic surgery procedures, plastic surgery benefits';
        return view('frontend.blogpages.benefitsofplasticsurgeryprocedure',compact('pageTitle','pageDescription','keywords'));
    }
    public function indicationsyouneedurethroplasty(Request $request){  
        $pageTitle = 'Some Indications You Need Urethroplasty';
        $pageDescription = "Recognize the important indications you need urethroplasty. You can experience life-changing relief from urinary stricture difficulties.";
        $keywords = 'indications you need urethroplasty, urethroplasty, reseaons to see urethroplasty ';
        return view('frontend.blogpages.indicationsyouneedurethroplasty',compact('pageTitle','pageDescription','keywords'));
    }
    public function yourchildrenneedhypospadiassurgery(Request $request){  
        $pageTitle = 'Signs that your children need Hypospadias surgery';
        $pageDescription = "Find out the key signs that your child may need surgery for Hypospadias. A complete guide to understanding this common illness in children.";
        $keywords = 'hypospadias surgery, when your children need hypospadias surgery, signs that your children need hypospadias surgery ';
        return view('frontend.blogpages.yourchildrenneedhypospadiassurgery',compact('pageTitle','pageDescription','keywords'));
    }
    public function peyroniesdisease(Request $request){  
        $pageTitle = "Peyronie's Disease: Causes, Symptoms, Diagnosis & Treatment";
        $pageDescription = "Know everything about Peyronie's Disease, including its causes, symptoms, diagnostic approaches, and the most recent treatment choices.";
        $keywords = "peyronie's disease, symptoms of peyronie’s disease, peyronie’s disease diagnosis, symptoms of peyronie’s disease, treatment for peyronie’s disease";
        return view('frontend.blogpages.peyroniesdisease',compact('pageTitle','pageDescription','keywords'));
    }
    public function benefitsofpenileimplants(Request $request){  
        $pageTitle = "Know About The Benefits Of Penile Implants";
        $pageDescription = "Know about the benefits of penile implants, prove your sexual function, feel more satisfied, and get your confidence back in your relationship.";
        $keywords = "benefits of penile implants";
        return view('frontend.blogpages.benefitsofpenileimplants',compact('pageTitle','pageDescription','keywords'));
    }
    public function roboticsurgeryinurology(Request $request){  
        $pageTitle = "Robotic Surgery In Urology: All You Need To Know";
        $pageDescription = " Explore advanced Robotic Surgery in Urology, which is changing the treatment of kidney and prostate diseases. Accept the healthcare industry's future.";
        $keywords = "robotic surgery in urology";
        return view('frontend.blogpages.roboticsurgeryinurology',compact('pageTitle','pageDescription','keywords'));
    }
    public function benefitswisdomteethremoval(Request $request){  
        $pageTitle = "What are the Advantages of wisdom teeth removal?";
        $pageDescription = "Wisdom teeth removal brings relief from pain, prevents dental problems, and ensures a healthier smile. Learn its advantages now";
        $keywords = "wisdom tooth extracted,Advantages of wisdom teeth removal,benefits of wisdom teeth removal";
        return view('frontend.blogpages.benefitswisdomteethremoval',compact('pageTitle','pageDescription','keywords'));
    }
    public function advantagesurethroplastysurgery(Request $request){  
        $pageTitle = "7 Major Advantages of Urethroplasty Surgery";
        $pageDescription = "Learn about the 7 benefits of urethroplasty surgery, a highly effective procedure for treating urethral issues and Reduced risk of infection of the testicles.";
        $keywords = "Advantages of Urethroplasty Surgery,  Benefits of Urethroplasty Surgery, Urethroplasty benefits, Benefits of urethral reconstruction surgery, Urethral reconstruction advantages";
        return view('frontend.blogpages.advantagesurethroplastysurgery',compact('pageTitle','pageDescription','keywords'));
    }
    public function dentalimplanttypes(Request $request){  
        $pageTitle = "3 Types of Dental Implants and Which One is Best for You?";
        $pageDescription = "Explore the three types of dental implants and find the best one for you. Learn about implant options for a confident and healthy smile.";
        $keywords = "types of dental implants, benefits of dental implants, best dental implants in gurgaon, dental implant types, dental implant types and cost";
        return view('frontend.blogpages.dentalimplanttypes',compact('pageTitle','pageDescription','keywords'));
    }
    public function understandingenlargedprostate(Request $request){  
        $pageTitle = "Everything You Need To Know About Enlarged Prostate";
        $pageDescription = "Benign prostatic hyperplasia (BPH) is when the enlarged prostate may cause problems with urinating. Learn about the symptoms of Enlarged Prostate.";
        $keywords = "Enlarged Prostate, symptoms of Enlarged Prostate, Signs Of Enlarged Prostate, Causes of Enlarged Prostate, Benign prostatic hyperplasia (BPH), Diagnosis for Enlarged Prostate";
        return view('frontend.blogpages.understandingenlargedprostate',compact('pageTitle','pageDescription','keywords'));
    }
    public function utiinchildren(Request $request){  
        $pageTitle = "All You Need To Know About Bladder Infection UTI In Children";
        $pageDescription = "Discover essential information on bladder infection (UTI) in children: causes, symptoms, treatment, and prevention. Learn how to safeguard your child's health.";
        $keywords = "bladder infection, UTI, children, pediatric UTI, urinary tract infection, symptoms, treatment, prevention, pediatric health, childhood illness";
        return view('frontend.blogpages.utiinchildren',compact('pageTitle','pageDescription','keywords'));
    }
    
    public function bariatricsurgeryimpact(Request $request){  
        $pageTitle = "Bariatric Surgery Impact on Type 2 Diabetes And Weight Loss";
        $pageDescription = "Discover the profound impact of Bariatric Surgery on Type 2 Diabetes & Weight Loss outcomes through SCI Hospital's insightful blog. Explore best expert insights.";
        $keywords = "";
        return view('frontend.blogpages.BariatricSurgeryImpact',compact('pageTitle','pageDescription','keywords'));
    }
    public function latestinnovationskidney(Request $request){  
        $pageTitle = "Kidney Stone Treatment New Innovations & Variety of Treatments";
        $pageDescription = "Stay informed about the latest innovations in Kidney Stone Treatment with SCI Hospital. Discover advancements in treatment options and healthcare technologies.";
        $keywords = "";
        return view('frontend.blogpages.Latestinnovationskidney',compact('pageTitle','pageDescription','keywords'));
    }
    
    public function hypospadiassurgeryrepairtime(Request $request){  
        $pageTitle = "Hypospadias Surgery Repair Time & Recovery | SCI Hospital Blog";
        $pageDescription = "Understanding essential information about Hypospadias Surgery repair time, including recovery tips & post-surgery care. Read expert advice from SCI Hospital Delhi.";
        $keywords = "";
        return view('frontend.blogpages.hypospadiassurgeryrepairtime',compact('pageTitle','pageDescription','keywords'));
    }
    
    public function shoulderinjuryinsports(Request $request){  
        $pageTitle = "Shoulder Injuries in Sports Prevention & Treatment Strategies";
        $pageDescription = "Common shoulder injuries in sports, their symptoms, & recovery methods. Get expert advice on how to diagnose, & treat shoulder injuries effectively for athletes.";
        $keywords = "";
        return view('frontend.blogpages.shoulderinjuryinsports',compact('pageTitle','pageDescription','keywords'));
    }
    public function relievenervepainhand(Request $request){  
        $pageTitle = "How to Relieve Nerve Pain in the Hand | SCI Hospital Insights";
        $pageDescription = "Understanding the effective strategies on how to relieve nerve pain in the hand. Discover expert tips and treatments to manage and reduce nerve pain in the hand.";
        $keywords = "";
        return view('frontend.blogpages.relievenervepainhand',compact('pageTitle','pageDescription','keywords'));
    }
	public function besturologyhospitals(Request $request){  
        $pageTitle = "Best Urology Hospitals In India | Advanced Treatments at SCI Hospital";
        $pageDescription = "Advanced urology treatments at SCI Hospital Delhi. Get expert care for prostate cancer, kidney stones, urinary tract infections, and erectile dysfunction (ED).";
        $keywords = "";
        return view('frontend.blogpages.besturologyhospitals',compact('pageTitle','pageDescription','keywords'));
    }
	
    
     public function urologyandandrology(Request $request){  
        $pageTitle = 'Best Urology Hospital In Delhi | Urology and Andrology Hospital';
        $pageDescription = 'SCI Hospital is one of the best urology hospital which offers the best treatment facilities for Urology Related problems and reconstructive urology surgery.';
        $keywords = 'Best Andrologist In Delhi,Best Urology Hospital In Delhi,Urologist Delhi,Reconstructive Urology,Best Andrologist in Delhi, Urologist in south delhi';
        return view('frontend.urologyandandrology',compact('pageTitle','pageDescription','keywords'));
        
    }
     public function handsnerve(Request $request){  
        $pageTitle = 'Best Urology Hospital In Delhi | Urology and Andrology Hospital';
        $pageDescription = 'SCI Hospital is one of the best urology hospital which offers the best treatment facilities for Urology Related problems and reconstructive urology surgery.';
        $keywords = 'Best Andrologist In Delhi,Best Urology Hospital In Delhi,Urologist Delhi,Reconstructive Urology,Best Andrologist in Delhi, Urologist in south delhi';
        return view('frontend.handsnerve',compact('pageTitle','pageDescription','keywords'));
        
    }
     public function urologyhypospadias(Request $request){  
        $pageTitle = 'Best Urology Hospital In Delhi | Urology and Andrology Hospital';
        $pageDescription = 'SCI Hospital is one of the best urology hospital which offers the best treatment facilities for Urology Related problems and reconstructive urology surgery.';
        $keywords = 'Best Andrologist In Delhi,Best Urology Hospital In Delhi,Urologist Delhi,Reconstructive Urology,Best Andrologist in Delhi, Urologist in south delhi';
        return view('frontend.urologyhypospadias',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function kidneystones(Request $request){  
        $pageTitle = 'Get Laser Kidney Stone Treatment in Delhi at the Lowest Cost';
        $pageDescription = 'Get kidney Stone Treatment in Delhi with SCI Hospital. The best hospital for treating kidney stones in Delhi and has highly experienced Kidney Stone Specialist.';
        $keywords = 'kidney stone treatment in delhi, kidney stone surgery, kidney stone operation cost delhi, kidney stone operation cost, pathri ka operation, laser operation for kidney stone, kidney stone removal surgery cost, types of kidney stones';
        return view('frontend.kidneystones',compact('pageTitle','pageDescription','keywords'));
    }
    public function enlargedprostate(Request $request){  
        $pageTitle = 'Enlarged Prostate Treatment in Delhi with Painless Proceadure';
        $pageDescription = 'Get Laser treatment for your enlarged prostate provided by the SCI hospital in Delhi. SCI has a team of the best doctors for enlarged prostate treatment in delhi. ';
        $keywords = 'enlarged prostate treatment in delhi, enlarged prostate, bph treatment, prostate treatment, prostate gland, prostate stones, enlarged prostate treatment, enlarged prostate surgery, holep surgery, symptoms of prostate enlargement, bph causes';
        return view('frontend.enlargedprostate',compact('pageTitle','pageDescription','keywords'));
    }
    public function vaginaltighteningsurgery(Request $request){  
        $pageTitle = 'Vaginal tightening Surgery In Delhi';
        $pageDescription = 'The vaginal tightening procedure is also known as vaginoplasty and it improves urine incontinence, improves moisture for the vaginal canal';
        $keywords = ' vaginal tightening procedure, vagina tightening medicine, vaginal rejuvenation treatment, laser vaginal tightening near me, labia skin tightening';
        return view('frontend.vaginaltighteningsurgery',compact('pageTitle','pageDescription','keywords'));
    }
    public function maleinfertility(Request $request){  
        $pageTitle = 'Male Infertility Treatment in Delhi | SCI International Hospital ';
        $pageDescription = 'SCI is one of the leading male infertility treatment hospitals in Delhi. We have a team of specialists who deal with this widespread problem in males   ';
        $keywords = 'male infertility treatment, male infertility treatment in Delhi, male fertility doctor, male infertility treatment in India ';
        return view('frontend.maleinfertility',compact('pageTitle','pageDescription','keywords'));
    }
    public function urologyerectiledysfunction(Request $request){  
        $pageTitle = 'Erectile Dysfunction Treatment | SCI International Hospital';
        $pageDescription = 'Learn how you and your doctor can treat the underlying cause of your erectile dysfunction. Get Best Erectile Dysfunction Treatment in Delhi';
        $keywords = 'erectile dysfunction doctors near me,weak erection treatment,Complications of Erectile Dysfunction,Diagnosis of Erectile Dysfunction,erectile dysfunction treatment options,Erectile Dysfunction Treatment Centre in Delhi,best doctors for erectile dysfunction';
        return view('frontend.urologyerectiledysfunction',compact('pageTitle','pageDescription','keywords'));
    }
    public function hypospadias(Request $request){  
        $pageTitle = 'Best Hypospadias Surgery Hospital in Delhi';
        $pageDescription = 'Get the best hypospadias surgery in Delhi. Sci Hospital offers low-cost hypospadias treatment and Dr. Banga is Best Hypospadias Surgeon in Delhi';
        $keywords = 'Hypospadias Surgery, Hypospadias Treatment, treatment of hypospadias, hypospadias surgery cost, hypospadias surgery age, hypospadias surgery name, hypospadias repair surgery, hypospadias after surgery, hypospadias surgery in hindi, hypospadias surgeon, surgery of hypospadias, hypospadias surgery cost in india, best hospital for hypospadias surgery in india, best hypospadias surgeon in delhi, hypospadias treatment cost';
        return view('frontend.hypospadias',compact('pageTitle','pageDescription','keywords'));
    }
    public function obstetricsandgynecology(Request $request){  
        $pageTitle = 'Best gynecologist hospital in Delhi | SCI Hospital';
        $pageDescription = 'Known to be the best Gynaecology hospital in New Delhi, we provide the best team of gynaecologists in the city.';
        $keywords = 'Highest Risk In Pregnancy, Antenatal Care During Pregnancy,Infertility Treatment For Female,Infertility treatment for female,Best Gynecologist in Delhi for Pregnancy and Delivery,Best Gynecology Hospital In India,gynecologist in south delhi.';
        return view('frontend.obstetricsandgynecology',compact('pageTitle','pageDescription','keywords'));
    }
    public function ovariancrysttreatment(Request $request){  
        $pageTitle = ' Best Hospital for Ovarian Cyst Treatment in South Delhi | SCI International Hospital ';
        $pageDescription = 'SCI Hospital is a leading hospital in Delhi for ovarian cysts treatment through advanced techniques. ';
        $keywords = 'ovarian cyst surgery, best doctor for ovarian cancer in delhi, ovarian cancer treatment in delhi, treatment for ovarian cencer in delhi, complex ovarian cyst treatment ';
        return view('frontend.ovariancrysttreatment',compact('pageTitle','pageDescription','keywords'));
    } 
    public function ovariancysttreatment(Request $request){  
        $pageTitle = ' Best Hospital for Ovarian Cyst Treatment in South Delhi | SCI International Hospital ';
        $pageDescription = 'SCI Hospital is a leading hospital in Delhi for ovarian cysts treatment through advanced techniques. ';
        $keywords = 'ovarian cyst surgery, best doctor for ovarian cancer in delhi, ovarian cancer treatment in delhi, treatment for ovarian cencer in delhi, complex ovarian cyst treatment ';
        return view('frontend.ovariancysttreatment',compact('pageTitle','pageDescription','keywords'));
    }
    public function fibroidtreatment(Request $request){  
        $pageTitle = 'Best Uterine fibroids treatment In Delhi | SCI International Hospital ';
        $pageDescription = 'Specialists at SCI have the experience to diagnose the condition and also offer the best treatment for uterine fibroids. ';
        $keywords = 'fibroid surgery cost in delhi, best treatment for fibroids, treatment for fibroids, fibroid surgery, best hospital for fibroid surgery, uterine fibroids treatment ';
        return view('frontend.fibroidtreatment',compact('pageTitle','pageDescription','keywords'));
    }
    public function endometriosistreatment(Request $request){  
        $pageTitle = 'Best Endometriosis Treatment in Delhi | Endometriosis Specialist In Delhi';
        $pageDescription = 'Endometriosis usually develops in the pelvic region. Consult the Best endometriosis Specialist In Delhi at SCI Hospital';
        $keywords = '';
        return view('frontend.endometriosistreatment',compact('pageTitle','pageDescription','keywords'));
    }
    public function motherandchildcare(Request $request){  
        $pageTitle = 'Best Maternity Hospital in Delhi | SCI International Hospital';
        $pageDescription = 'The best maternity hospital in Delhi, we ensure that you get the best support from our gynecologists and nurses will guide you during your labor and after birth ';
        $keywords = 'Best Maternity Hospital In Delhi, a maternity hospital in Delhi, Best Hospital For Delivery In Delhi, the best hospital for normal delivery in Delhi, the best maternity hospital in south Delhi, a maternity hospital in south Delhi';
        return view('frontend.motherandchildcare',compact('pageTitle','pageDescription','keywords'));
    }
    public function infertilitytreatment(Request $request){  
        $pageTitle = 'Best IVF Centre In Delhi | #1 IVF Treatment Cost In Delhi';
        $pageDescription = 'Looking for the Best Doctor For Male Infertility In Delhi? SCI hospital offers Best IVF Centre In Delhi. Male infertility occurs due to problems affecting either sperm transport or sperm production in men. To know more about IVF Treatment Cost In Delhi, Contact Now!!';
        $keywords = '';
        return view('frontend.infertilitytreatment',compact('pageTitle','pageDescription','keywords'));
    }
    public function bariatricsurgery(Request $request){  
        $pageTitle = 'Best Bariatric Surgeon In Delhi | Bariatric surgery cost in Delhi';
        $pageDescription = 'SCI Hospital offering quality and Best Bariatric Surgeon In Delhi. To know about Bariatric surgery cost in Delhi, Book an online appointment Now.';
        $keywords = 'bariatric surgery cost in delhi,best bariatric surgeon in delhi,weight loss surgery in delhi,gastric sleeve surgery in delhi,weight loss surgeon in delhi,weight loss clinic in delhi,bariatric surgery cost in delhi';
        return view('frontend.bariatricsurgery',compact('pageTitle','pageDescription','keywords'));
    }
    public function advancedlaparoscopicgeneralsurgery(Request $request){  
        $pageTitle = 'Laparoscopic Surgery Cost In Delhi | SCI International Hospital';
        $pageDescription = 'Laparoscopic surgery is a minimally invasive procedure where small incisions are made into
the cavity. Find in detail the cost of laparoscopic surgery in Delhi.';
        $keywords = 'Laparoscopic Surgery, Treatment, Cost, India';
        return view('frontend.advancedlaparoscopicgeneralsurgery',compact('pageTitle','pageDescription','keywords'));
    }
    public function fistulatreatment(Request $request){  
        $pageTitle = 'Best Anal Fistula Treatment Center in Delhi.';
        $pageDescription = 'Discover the best anal fistula treatment in Delhi. SCI Hospital has the best fistula surgery doctors in delhi at affordable cost.';
        $keywords = 'anal fistula treatment in delhi, anal fistula, fistula surgery, fistula treatment,  anal fistula symptoms, anal fistula surgery, anal fistula treatment, fistula perianal, best treatment for fistula, Laser Fistula Surgery.';
        return view('frontend.fistulatreatment',compact('pageTitle','pageDescription','keywords'));
    }
    public function pilestreatment(Request $request){  
        $pageTitle = 'Best Piles Treatment Hospital in Delhi | Best Piles Doctors.';
        $pageDescription = 'Consult with the best piles treatment doctors in Delhi. SCI Hospital is one of the leading healthcare centers for piles (hemorrhoids) Surgery In Delhi.';
        $keywords = ' piles treatment in delhi, best piles doctor in delhi, piles doctor near me, best piles treatment, laser treatment for piles in delhi, piles doctor in delhi, best hospital for piles treatment in delhi, piles specialist doctor in delhi, hemorrhoids, piles symptoms, ,hemorrhoids treatment, best piles hospital near me, pile surgery, hemorrhoids surgery.';
        return view('frontend.pilestreatment',compact('pageTitle','pageDescription','keywords'));
    }
    public function orthopaedic(Request $request){  
        $pageTitle = 'Consult Best orthopedic doctor in Delhi | SCI International Hospital';
        $pageDescription = 'SCI is one of the top orthopedic hospitals in Delhi and also well-equipped with many specialties, ranging from Paediatric orthopaedic services and Sports Medicines.';
        $keywords = 'orthopedic doctor in delhi, best orthopedic doctor in delhi, best knee replacement surgeon in delhi, best knee replacement surgeon in delhincr, bone specialist in delhi, best ortho surgeon in delhi';
        return view('frontend.orthopaedic',compact('pageTitle','pageDescription','keywords'));
    }
    public function paedsorthopaedics(Request $request){  
        $pageTitle = 'Best Pediatric Orthopedic Doctor In Delhi | Pediatric Hospital In Delhi';
        $pageDescription = 'Pediatric Hospital In Delhi is a medical speciality focused on treating deformities of bone, joint, back or muscle in a child, SCI Hospital in South Delhi has the Best Pediatric Orthopedic Doctor In Delhi.';
        $keywords = '';
        return view('frontend.paedsorthopaedics',compact('pageTitle','pageDescription','keywords'));
    }
    public function neontologyandpaeds(Request $request){  
        $pageTitle = 'Visit best hospital for neonatology ';
        $pageDescription = 'SCI offers superior healthcare care services to both new mothers and newborns. Many would-be parents choose SCI hospital for the best neonatology and pediatric facilities. ';
        $keywords = 'child specialist and neonatologist, best hospital for neonatology, best child specialist hospital in delhi, new born care services in delhi ncr, paediatrician and neonatologist ';
        return view('frontend.neontologyandpaeds',compact('pageTitle','pageDescription','keywords'));
    }
    public function bestenthospital(Request $request){  
        $pageTitle = 'Best Ent Hospital In Delhi | Ent Specialists In Delhi';
        $pageDescription = 'ENT problems can impact the normal functioning of the ear, nose, and throat. Consult the best ENT specialist in Delhi.';
        $keywords = '';
        return view('frontend.bestenthospital',compact('pageTitle','pageDescription','keywords'));
    }
    public function cochlearimplants(Request $request){  
        $pageTitle = 'Best Cochlear Implant Surgery Hospital In Delhi';
        $pageDescription = 'SCI Hospital is the leading Cochlear Implant Surgery Hospital in Delhi. We provide Eardrum Surgery at
Affordable Cost In Delhi.';
        $keywords = 'hearing implants cost, cochlear implant surgery cost, cochlear implant cost, best hospital for
cochlear implant in india,';
        return view('frontend.cochlearimplants',compact('pageTitle','pageDescription','keywords'));
    }
    public function stemcellandregenerativemedicine(Request $request){  
        $pageTitle = 'High Rated Stem Cell Hospital In Delhi';
        $pageDescription = 'SCI Hospital is the best Stem Cell Hospital In Delhi. We provide cell-based therapies in improving the quality of life for the patients suffering from such diseased conditions';
        $keywords = '';
        return view('frontend.stemcellandregenerativemedicine',compact('pageTitle','pageDescription','keywords'));
    }
    public function DepartmentofDermatologyCosmetologyPlasticSurgery(Request $request){  
        $pageTitle = 'Best Skin Hospital In Delhi | Cosmetic Surgeon In Delhi';
        $pageDescription = 'SCI Hospital is the Finest Cosmetic Surgeon In Delhi, SCI is also the best for Cosmetology and Plastic Surgery. Get more information about Best Skin Hospital In Delhi.';
        $keywords = 'skin surgeon in delhi, ear lobe repair in delhi, butt enlargement surgery delhi,  breast lift surgery in delhi';
        return view('frontend.DepartmentofDermatologyCosmetologyPlasticSurgery',compact('pageTitle','pageDescription','keywords'));
    }
    public function InternalMedicineEndocrinology(Request $request){  
        $pageTitle = 'Best Endocrinologist Doctors In Delhi | Top Endocrinologist In Delhi ';
        $pageDescription = 'SCI Hospital has the Best Endocrinologist Doctors In Delhi who attend to all kinds of medical needs, it is the Top Endocrinologist In Delhi. ';
        $keywords = '';
        return view('frontend.InternalMedicineEndocrinology',compact('pageTitle','pageDescription','keywords'));
    }
    public function DepartmentofOphthalmology(Request $request){  
        $pageTitle = 'Ophthalmologist in Delhi | Eye specialist ';
        $pageDescription = 'If you are looking for the best eye specialist near you, doctors at SCI International Hospital will be your preferred choice. ';
        $keywords = 'eye specialist hospital in delhi,ophthalmologist in delhi,best eye specialist in delhi,eye care hospital in delhi,best child eye specialist in delhi,best squint specialist in delhi,best glaucoma hospital in delhi,best cataract hospital in delhi';
        return view('frontend.DepartmentofOphthalmology',compact('pageTitle','pageDescription','keywords'));
    }
    public function DentalDepartment(Request $request){  
        $pageTitle = 'Best Dental Hospital In Delhi | Dental clinic in Delhi';
        $pageDescription = 'SCI Hospital is the best dental hospital in Delhi. Top dental clinic with experienced dentists providing orthodontics, root canal treatment & dental surgery.';
        $keywords = 'best/top dental doctor in south delhi, best/top dentist in Delhi, best dental clinic in Delhi';
        return view('frontend.DentalDepartment',compact('pageTitle','pageDescription','keywords'));
    }
    public function healthcheckup(Request $request){  
        $pageTitle = 'Full Body Checkup in Delhi | SCI Hospital';
        $pageDescription = 'Sci Hospital provides you with a full body checkup in Delhi at affordable prices. Doctors diagnose diseases before they can prove fatal to your health.';
        $keywords = 'body health check up,full body checkup price in delhi,full body checkup near me,full medical check up,full body checkup in delhi';
        return view('frontend.healthcheckup',compact('pageTitle','pageDescription','keywords'));
    }
     public function drgautambanga(Request $request){  
        $pageTitle = 'Best Urologist in Greater Kailash SCI International Hospital';
        $pageDescription = 'Dr. Gautam Banga is a Consultant at SCI Hospital in Greater Kailash, he is one of the best Urologist, Andrologist, Urethra &amp; Penile Reconstructive Surgeon.';
        $keywords = '';
        return view('frontend.drgautambanga',compact('pageTitle','pageDescription','keywords'));
    }
     public function drsaurabhkapoor(Request $request){  
        $pageTitle = 'Dr Saurabh Kapoor-  Senior Consultant – Spine Surgery';
        $pageDescription = 'Dr. Gautam Banga is a Consultant at SCI Hospital in Greater Kailash, he is one of the best Urologist, Andrologist, Urethra &amp; Penile Reconstructive Surgeon.';
       $keywords = '';
        return view('frontend.drsaurabhkapoor',compact('pageTitle','pageDescription','keywords'));
    }
    
    public function drsubisingh(Request $request){
        $pageTitle = 'DR. SUBI SINGH BDS | MDS Orthodontist';
        $pageDescription = 'Dr Saurabh Kapoor is a Consultant at SCI Hospital in Greater Kailash, he is one of the best Urologist, Andrologist, Urethra &amp; Penile Reconstructive Surgeon.';
        $keywords = '';
        return view('frontend.drsubisingh',compact('pageTitle','pageDescription','keywords'));
    }

    public function drnamanaggarwal(Request $request){
        $pageTitle = 'DR. NAMAN AGGARWAL | Urologist';
        $pageDescription = 'Dr. Naman Aggarwal is a highly skilled urologist with extensive training and expertise in urology and renal transplant.';
        $keywords = '';
        return view('frontend.drnamanaggarwal',compact('pageTitle','pageDescription','keywords'));
    }
    public function drsanjeevgupta(Request $request){  
        $pageTitle = 'DR. SANJEEV GUPTA | Consultant - General Surgery';
        $pageDescription = 'Dr. Sanjeev Gupta is an experienced General Surgeon, Laparoscopic Surgeon and Proctologist with an experience of 25 years, and specialises in Proctology, Urology, and Laparoscopy.';
        $keywords = '';
        return view('frontend.drsanjeevgupta',compact('pageTitle','pageDescription','keywords'));
    }
    public function drvineetkaul(Request $request){  
        $pageTitle = 'Dr vineet Kaul ';
        $pageDescription = 'Dr vineet Kaul is a Consultant at SCI Hospital in Greater Kailash, he is one of the best Urologist, Andrologist, Urethra &amp; Penile Reconstructive Surgeon.';
        $keywords = '';
        return view('frontend.drvineetkaul',compact('pageTitle','pageDescription','keywords'));
    }
    
    public function drgurudittakhurana(Request $request){   
        $pageTitle = 'Dr Guruditta Khurana ';
        $pageDescription = 'Dr Guruditta Khurana is a Consultant at SCI Hospital in Greater Kailash, he is one of the best Urologist, Andrologist, Urethra &amp; Penile Reconstructive Surgeon.';
        $keywords = '';
        return view('frontend.drgurudittakhurana',compact('pageTitle','pageDescription','keywords'));
    }
    
    //  public function drrajkumarsingh(Request $request){  
    //     $pageTitle = 'Best Laparoscopic Surgeon in SCI International Hospital';
    //     $pageDescription = 'Dr. Raj Kumar Singh is the best consultant and Laparoscopic General Surgeon in Greater Kailash (Delhi), he has great work experience in laparoscopic surgeries.';
    //     $keywords = '';
    //     return view('frontend.drrajkumarsingh',compact('pageTitle','pageDescription','keywords'));
    // }
     public function drsahilsingla(Request $request){  
        $pageTitle = 'Best Plastic Surgeon in Delhi | SCI International Hospital';
        $pageDescription = 'Dr. Sahil Singla is the best Surgeon in Delhi. He has 14 years of experience in plastic surgery and lipoma removal and worked as an expert plastic surgeon.';
        $keywords = '';
        return view('frontend.drsahilsingla',compact('pageTitle','pageDescription','keywords'));
    }
    
     public function drvishalduttgour(Request $request){  
        $pageTitle = 'Best Urology Specialist in Greater Kailash SCI International Hospital';
        $pageDescription = 'Dr. Vishal Dutt Gour is the Consultant Urology and Male Fertility Specialist at SCI Healthcare with experience of 14 years.';
        $keywords = '';
        return view('frontend.drvishalduttgour',compact('pageTitle','pageDescription','keywords'));
    }
    // public function drnikhilnarain(Request $request){  
    //     $pageTitle = 'Best Urologist in Greater Kailash SCI International Hospital';
    //     $pageDescription = 'Dr. Nikhil Narain is a Consultant at SCI Hospital in Greater Kailash, he is one of the best Urologist, Andrologist, Urethra &amp; Penile Reconstructive Surgeon.';
    //     return view('frontend.drnikhilnarain',compact('pageTitle','pageDescription'));
    // }
   
    /*public function DrShomeshwarSingh(Request $request){  
        $pageTitle = 'Dr. Shomeshwar Singh ENT Specialist In Greater Kailash SCI International Hospital';
        $pageDescription = 'Dr. Shomeshwar Singh is best ENT Specialist In Greater Kailash , He is senior doctor in SCI International Hospital, Delhi.';
        $keywords = '';
        return view('frontend.DrShomeshwarSingh',compact('pageTitle','pageDescription','keywords'));
    }*/
    public function DrManishGupta(Request $request){  
        $pageTitle = 'ENT Specialist in Greater Kailash - SCI International Hospital';
        $pageDescription = 'Dr. Manish Gupta is a Senior ENT Specialist in Greater Kailash, He has rich &amp; working experience of working with top &amp; reputed hospitals of Delhi-NCR';
        $keywords = '';
        return view('frontend.DrManishGupta',compact('pageTitle','pageDescription','keywords'));
    }
    public function drlalitbafna(Request $request){  
        $pageTitle = 'Dr. Lalit Bafna Best Orthopedic Surgeon & Sports Medicine SCI Hospital';
        $pageDescription = 'Meet Dr. Lalit Bafna, MS (Ortho), DNB (Ortho), FNB (Sports Medicine), MNAMS at SCI Hospital. Specializing in advanced orthopedic and sports medicine treatments.';
        $keywords = '';
        return view('frontend.drlalitbafna',compact('pageTitle','pageDescription','keywords'));
    }
    public function drnishantsoni(Request $request){  
        $pageTitle = 'Dr. Nishant Soni Expert Peripheral Nerve & Orthopedic Surgeon at SCI Hospital';
        $pageDescription = 'Dr. Nishant Soni is the best Peripheral Nerve & Orthopedic Surgeon at SCI Hospital. Expertise in advanced nerve & orthopedic surgeries, & innovative treatments.';
        $keywords = '';
        return view('frontend.drnishantsoni',compact('pageTitle','pageDescription','keywords'));
    }
   
    public function drshivanisachdevgour(Request $request){  
        $pageTitle = 'Fertility Specialist in Greater Kailash SCI International Hospital';
        $pageDescription = 'Dr. Shivani Sachdev Gour is the founder and director of SCI Healthcare and Multispecialty Centre and consultant fertility specialist.';
        $keywords = '';
        return view('frontend.drshivanisachdevgour',compact('pageTitle','pageDescription','keywords'));
    }
   /* public function DrDhwaniMago(Request $request){  
        $pageTitle = 'Best Obstetrician and Gynaeclogist in Greater Kailash - SCI International Hospital';
        $pageDescription = 'Dr. Dhwani Mago is best Obstetrician and Gynaecologist with an experience of 13 years at Greater Kailash. She specializes in all female related problems and committed to giving women the best in Gynae care.';
        $keywords = '';
        return view('frontend.DrDhwaniMago',compact('pageTitle','pageDescription','keywords'));
    }*/
    public function DrMamtaGoel(Request $request){  
        $pageTitle = 'Best Gynecologist in Greater Kailash - SCI International Hospital';
        $pageDescription = 'Dr. Mamta Goel is best Gynecologist in Greater Kailash, trained in Bombay and in Army Hospital, Delhi. She has 12 years of working experience';
        $keywords = '';
        return view('frontend.DrMamtaGoel',compact('pageTitle','pageDescription','keywords'));
    }
    public function drsumeetshah(Request $request){  
        $pageTitle = 'Dr. Sumeet Shah - SCI International Hospital';
        $pageDescription = 'Dr Sumeet Shah MBBS, MRCGP (INT), DMS. M 4, Greater Kailash-1, M Block, part-1, Greater Kailash, New Delhi, Delhi 110048 Mobile: +91-9999446622 Email: info@scihopital.com For Appointment, call us on +91-9999446622 EDUCATION Fellowship Achievements/ Accomplishments Membership Publication MBBS, MS DNB, MNAMS, FIAGES, FALS (Bariatric), FALS (Hernia) Advanced training in Gastro-Intestinal Surgery-AIIMS,New DelhiFellowship in M.A.M.B.S from Sir [&hellip;]';
        $keywords = '';
        return view('frontend.drsumeetshah',compact('pageTitle','pageDescription','keywords'));
    }
    public function dramit(Request $request){  
        $pageTitle = 'Best Dental Surgeon in Greater Kailash SCI International Hospital';
        $pageDescription = 'Find the best Dental Surgeons in South Delhi & make an appointment online instantly! View consultation cost & address of specialist in Delhi';
        $keywords = '';
        return view('frontend.dramit',compact('pageTitle','pageDescription','keywords'));
    }
    // public function DrAshwiniKumar(Request $request){  
    //     $pageTitle = 'Child Specialist in Greater Kailash SCI International Hospital';
    //     $pageDescription = 'Doctor Ashwini Kumar is a Child specialist with a work experience of more than 10 years. He has done his graduation (MBBS) from Delhi University College of Medical Sciences and GTB Hospital';
    //     return view('frontend.DrAshwiniKumar',compact('pageTitle','pageDescription'));
    // }
    public function DrSirishaSingh(Request $request){  
        $pageTitle = 'Dermatologist and Cosmetologist in Greater Kailash - SCI International Hospital';
        $pageDescription = 'Dr. Sirisha Singh is a renowned Dermatologist and Cosmetologist. She leads the Dermatology and Cosmetology services at SCI International Hospital.Greater Kailash';
        $keywords = '';
        return view('frontend.DrSirishaSingh',compact('pageTitle','pageDescription','keywords'));
    }
    public function DrSukhbirSingh(Request $request){  
        $pageTitle = 'Plastic and Cosmetic Surgeon in Greater Kailash - SCI International Hospital';
        $pageDescription = 'Dr. Sukhbir Singh is a Plastic and Cosmetic Surgeon in Greater Kailash. He has done MBBS, MS (General Surgery), DNB (Plastic Surgery)';
        $keywords = '';
        return view('frontend.DrSukhbirSingh',compact('pageTitle','pageDescription','keywords'));
    }
    public function drhimanshushekhar(Request $request){  
        $pageTitle = 'Dr. Himanshu Shekhar Medical Director SCI International Hospital';
        $pageDescription = 'Medical Director with his unflinching quest to expand the super - specialty hospital chain of SCI International Hospital, New Delhi.';
        $keywords = '';
        return view('frontend.drhimanshushekhar',compact('pageTitle','pageDescription','keywords'));
    }
    public function DrSanjivGupta(Request $request){  
        $pageTitle = 'Famous Ophthalmologist in Greater Kailash.SCI International Hospital';
        $pageDescription = 'Dr. Sanjiv Gupta is famous Ophthalmologist in Greater Kailash has been performing phaco-emulsification surgeries for more than a decade now. He has performed over 9000 phacoemulsification (Cataract) surgery and over 4000 refractive &amp; LASIK surgery (removal of glasses).';
        $keywords = '';
        return view('frontend.DrSanjivGupta',compact('pageTitle','pageDescription','keywords'));
    }
    public function DrSalsabeelSyed(Request $request){  
        $pageTitle = 'Dr. Salsabeel Syed Best Radiologist in Greater Kailash, Delhi';
        $pageDescription = 'Dr. Salsabeel Syed is the best Radiologist in Greater Kailash, Delhi. He works at SCI International Hospital which is a famous multispeciality hospital in Delhi.';
        $keywords = '';
        return view('frontend.DrSalsabeelSyed',compact('pageTitle','pageDescription','keywords'));
    }
    // public function DrNaveenGambhir(Request $request){  
    //     $pageTitle = 'Dr. Naveen Gambhir - SCI International Hospital';
    //     $pageDescription = 'Dr. Naveen Gambhir MBBS, DA M 4, Greater Kailash-1, M Block, part-1, Greater Kailash, New Delhi, Delhi 110048 Mobile: +91-9999446622 Email: info@scihopital.com For Appointment, call us on +91-9999446622';
    //     $keywords = '';
    //     return view('frontend.DrNaveenGambhir',compact('pageTitle','pageDescription','keywords'));
    // }
    // public function DrArvindKumar(Request $request){  
    //     $pageTitle = 'Top Laparoscopic Surgeon in Greater Kailash.SCI International Hospital';
    //     $pageDescription = 'Dr Arvind is one of the top Laparoscopic Onco-surgeons in Greater Kailash with more than a decade of experience in advanced laparoscopic surgeries.';
    //     $keywords = '';
    //     return view('frontend.DrArvindKumar',compact('pageTitle','pageDescription','keywords'));
    // }
    public function drrajkumar(Request $request){  
        $pageTitle = 'Dr. Raj Kumar - SCI International Hospital';
        $pageDescription = 'Dr Raj Kumar Pulmonologist M 4, Greater Kailash-1, M Block, part-1, Greater Kailash, New Delhi, Delhi 110048 Mobile: +91-9999446622 Email: info@scihopital.com For Appointment, call us on +91-9999446622 EDUCATION Membership MBBS, BJ Medical College, AhmedabadMD, Chest Medicine, BJ Mediocal College, AhmedabadFCICM- College of Intense Care Medicine Australia &amp; New Zealand ANIZCSISCCMAHPRA, AUSTRALIACritical care Research group Prince [&hellip;]';
        $keywords = '';
        return view('frontend.drrajkumar',compact('pageTitle','pageDescription','keywords'));
    }
    // public function DrManniHingorani(Request $request){  
    //     $pageTitle = 'ENT Surgeon in Greater Kailash - SCI International Hospital';
    //     $pageDescription = 'Dr. Manni Hingorani is best ENT Surgeon in Greater Kailash. SCI International Hospital has best ENT surgeons which is located in South Delhi.';
    //     $keywords = '';
    //     return view('frontend.DrManniHingorani',compact('pageTitle','pageDescription','keywords'));
    // }
    public function DrAjaySinha(Request $request){  
        $pageTitle = 'Dr. Ajay Sinha - SCI International Hospital';
        $pageDescription = 'Dr. Ajay Sinha MBBS, MD/MS M 4, Greater Kailash-1, M Block, part-1, Greater Kailash, New Delhi, Delhi 110048 Mobile: +91-9999446622 Email: info@scihopital.com For Appointment, call us on +91-9999446622 EDUCATION MBBS, MD';
        $keywords = '';
        return view('frontend.DrAjaySinha',compact('pageTitle','pageDescription','keywords'));
    }
    public function drvishakhamunjal(Request $request){  
        $pageTitle = 'Dr. Vishakha Munjal - SCI International Hospital';
        $pageDescription = 'Dr Vishakha Munjal MD – Obstetrics &amp; Gynaecology – All India Institute of Medical Sciences, New Delhi, 1992 M 4, Greater Kailash-1, M Block, part-1, Greater Kailash, New Delhi, Delhi 110048 Mobile: +91-9999446622 Email: info@scihopital.com For Appointment, call us on +91-9999446622 EDUCATION Achievements/ Accomplishments MBBS from B.J. Medical College, University of Pune, Maharashtra Master of [&hellip;]';
        $keywords = '';
        return view('frontend.drvishakhamunjal',compact('pageTitle','pageDescription','keywords'));
    }
    public function drnirajkumarnikunj(Request $request){  
        $pageTitle = 'Dr. Niraj Kumar Nikunj Neonatology & Pediatrics  SCI Hospital';
        $pageDescription = 'Meet Dr. Niraj Kumar Nikunj at SCI Hospital, an esteemed Neonatology & Pediatrics Consultant offering expert diagnosis for child care. Book your appointment now!';
        $keywords = '';
        return view('frontend.drnirajkumarnikunj',compact('pageTitle','pageDescription','keywords'));
    }
    public function drshilpisingh(Request $request){  
        $pageTitle = 'Best Gynaecologist Expert Dr. Shilpi Singh | SCI Hospital Delhi ';
        $pageDescription = "Visit Dr. Shilpi Singh at SCI Hospital, a specialist Gynecologist providing compassionate care for women's health concerns in Delhi. Schedule your consultation.";
        $keywords = '';
        return view('frontend.drshilpisingh',compact('pageTitle','pageDescription','keywords'));
    }
    /*public function drnikkyyadav(Request $request){  
        $pageTitle = 'Dr. Nikky Yadav - SCI International Hospital';
        $pageDescription = '';
        $keywords = '';
        return view('frontend.drnikkyyadav',compact('pageTitle','pageDescription','keywords'));
    }*/
    public function drruchitandon(Request $request){  
        $pageTitle = 'Dr. Ruchi Tandon - SCI International Hospital';
        $pageDescription = ''; 
        $keywords = '';
        return view('frontend.drruchitandon',compact('pageTitle','pageDescription','keywords'));
    }
    public function drvickykuldeep(Request $request){  
        $pageTitle = 'Meet Dr. Vicky Kuldeep General Surgeon at SCI Hospital Delhi';
        $pageDescription = 'Dr. Vicky Kuldeep is an experienced General Surgeon offering expert diagnosis & the best-personalized treatment for neurological disorders at SCI Hospital Delhi.';
        $keywords = '';
        return view('frontend.drvickykuldeep',compact('pageTitle','pageDescription','keywords'));
    }
    public function draashimachopra(Request $request){  
        $pageTitle = 'Dr. Aashima Chopra | Experienced Dermatologist at SCI Hospital';
        $pageDescription = 'Get to know Dr. Aashima Chopra, an experienced dermatologist at SCI Hospital. Explore her qualifications, dermatology services, and commitment to healthy skin.';
        $keywords = '';
        return view('frontend.draashimachopra',compact('pageTitle','pageDescription','keywords'));
    }
    public function drssengupta(Request $request){  
        $pageTitle = 'Dr. S. Sen Gupta   - SCI International Hospital';
        $pageDescription = '';
        $keywords = '';
        return view('frontend.drssengupta',compact('pageTitle','pageDescription','keywords'));
    }
    public function drrajatgoel(Request $request){  
        $pageTitle = 'Dr. Rajat Goel    - SCI International Hospital';
        $pageDescription = '';
        $keywords = '';
        return view('frontend.drrajatgoel',compact('pageTitle','pageDescription','keywords'));
    }
   
    
    public function drgurmeetbansal(Request $request){  
        $pageTitle = 'Dr. Gurmeet Bansal  - SCI International Hospital';
        $pageDescription = '';
        $keywords = '';
        return view('frontend.drgurmeetbansal',compact('pageTitle','pageDescription','keywords'));
    }
    public function drharshpriyadharshi(Request $request){  
        $pageTitle = 'Dr. Harsh Priyadharshi  - SCI International Hospital';
        $pageDescription = '';
        $keywords = '';
        return view('frontend.drharshpriyadharshi',compact('pageTitle','pageDescription','keywords'));
    }
   
   
   
    public function drnabanitachatterjee(Request $request){  
        $pageTitle = 'Dr. Nabanita Chatterjee Skilled General surgeon SCI Hospital';
        $pageDescription = 'Meet Dr. Nabanita Chatterjee, MS in General Surgery, at SCI Hospital. Specialized surgical skills, comprehensive patient care, and advanced treatment techniques.';
        $keywords = '';
        return view('frontend.drnabanitachatterjee',compact('pageTitle','pageDescription','keywords'));
    }
     public function drrohitkrishna(Request $request){  
        $pageTitle = 'Dr. Rohit Krishna Plastic Surgeon & Cosmetic Expert SCI Hospital';
        $pageDescription = 'Visit Dr. Rohit Krishna a plastic surgeon and cosmetic specialist at SCI Hospital. Expertise in plastic surgery, aesthetic procedures, and patient-focused care.';
        $keywords = '';
        return view('frontend.drrohitkrishna',compact('pageTitle','pageDescription','keywords'));
    }
    public function drlokeshhanda(Request $request){  
        $pageTitle = 'Dr. Lokesh Handa  | Renowned Plastic Surgeon at SCI Hospital';
        $pageDescription = 'Consult Best Dr. Lokesh Handa, a renowned Plastic Surgeon offering advanced technology & surgical expertise at SCI Hospital. Trust your vision to our specialist.';
        $keywords = '';
        return view('frontend.drlokeshhanda',compact('pageTitle','pageDescription','keywords'));
    }
    public function drashutoshmisra(Request $request){  
        $pageTitle = 'Dr. Ashutosh Misra Best Plastic & Cosmetic Surgeon at SCI Hospital';
        $pageDescription = 'Visit Dr. Ashutosh Misra the Best Plastic & Cosmetic Surgeon at SCI Hospital providing comprehensive care for the patient in Delhi NCR. Book an appointment Today.';
        $keywords = '';
        return view('frontend.drashutoshmisra',compact('pageTitle','pageDescription','keywords'));
    }
    
    public function drgayatribalajuneja(Request $request){  
        $pageTitle = 'Best Gynecologist & Obstetrician In Gurgaon';
        $pageDescription = "Dr. Gayatri Bala Juneja is the best gynecologist & obstetrician in Gurgaon. She is renowned for her expert care and treatment of women's health.";
        $keywords = ' dr. gayatri bala juneja, best gynecologist & obstetrician in Gurgaon';
        return view('frontend.doctors.drgayatribalajuneja',compact('pageTitle','pageDescription','keywords'));
    }
   
    public function drshitijarora(Request $request){  
        $pageTitle = 'Dr. Shitij Arora - General Surgeon at SCI Healthcare';
        $pageDescription = 'Meet Dr. Shitij Arora, a skilled General Surgeon at SCI Healthcare. Experience expert surgical care and personalized treatment for optimal health outcomes';
        $keywords = '';
        return view('frontend.doctors.drshitijarora',compact('pageTitle','pageDescription','keywords'));
    }
    public function drhenakausar(Request $request){  
        $pageTitle = 'Dr. H. Kausar: Laparoscopic Surgeon (Obs & Gyn) at SCI Hospital';
        $pageDescription = "Experience advanced care with Dr. H. Kausar, a leading Laparoscopic Surgeon (Obs & Gyn) at SCI Hospital, delivering expertise in women's health.";
        $keywords = 'Laparoscopic Surgeon in Delhi, Obstetrics & Gynaecology, Gynaecologist in Delhi';
        return view('frontend.doctors.drhenakausar',compact('pageTitle','pageDescription','keywords'));
    }
    public function drrakeshkumargeneralsurgeon(Request $request){  
        $pageTitle = 'Book Online Appointment with Dr. Rakesh Kumar, General Surgeon at SCI International Hospital Delhi';
        $pageDescription = "Secure your appointment with Dr. Rakesh Kumar, a skilled General Surgeon at SCI International Hospital Delhi. Convenient online booking for expert surgical care";
        $keywords = 'Dr. Rakesh Kumar, General Surgeon, appointment, online booking, SCI International Hospital Delhi, surgical care';
        return view('frontend.doctors.drrakeshkumargeneralsurgeon',compact('pageTitle','pageDescription','keywords'));
    }
    
    public function sportsinjurytreatment(Request $request){  
        $pageTitle = 'Sports Injury Treatment In Delhi | SCI International Hospital';
        $pageDescription = 'Have a sports injury? Consult experienced doctors at the SCI hospital for proper diagnosis and the best sports injury treatment in Delhi.';
        $keywords = 'Sports Injury treatment, Sports Injury treatment in Delhi, Sports Injury treatment hospitals, Best Sports Injury treatment hospitals, Sports Injury treatment in India, Best Sports Injury treatment in India, Sports Injury treatment specialist in India, SCI Hospital';
        return view('frontend.sportsinjurytreatment',compact('pageTitle','pageDescription','keywords'));
    }
    public function sinusinfectiontreatment(Request $request){  
        $pageTitle = 'Get the Best Sinus Infection Treatment In Delhi';
        $pageDescription = 'Get the best sinus infection treatment in Delhi at Sci International Hospital. Expert care for sinus issues. Book an appointment now.';
        $keywords = 'how to treat sinus infection, sinus infection treatment, Sinusitis (Sinus Infection) Treatment in Delhi, Best Sinusitis Treatment Doctors In Delhi, Best Sinus treatment Hospital in Delhi, Sinus Surgery in Delhi, Sinus surgery cost in Delhi, symptoms of sinusitis, causes of sinus infections';
        return view('frontend.sinusinfectiontreatment',compact('pageTitle','pageDescription','keywords'));
    }
    public function hymenrepairsurgery(Request $request){  
        $pageTitle = 'Best Hymen Surgery in Delhi | SCI International Hospital';
        $pageDescription = 'Hymenoplasty is a cosmetic surgery to repair, restore, or construct a women’s hymen. Contact Delhi Best Super surgical center.';
        $keywords = '';
        return view('frontend.hymenrepairsurgery',compact('pageTitle','pageDescription','keywords'));
    }
    public function allurionballoonsurgery(Request $request){  
        $pageTitle = 'Allurion Balloon Surgery (Gastric Balloon Surgery)';
        $pageDescription = ' The Allurion Balloon is the first gastric balloon that may be ingested and naturally eliminated months later.';
        $keywords = 'allurion balloon,gastric balloon,weight loss balloon,allurion balloon cost in india,obesity surgery';
        return view('frontend.allurionballoonsurgery',compact('pageTitle','pageDescription','keywords'));
    }
    public function penileenlargementsurgery(Request $request){  
        $pageTitle = 'Visit for penile lengthening surgery | SCI International Hospital';
        $pageDescription = 'Best penile enlargement surgery in Delhi with SCI Hospital. Our skilled surgeons perform safe and effective procedures to boost confidence and satisfaction.';
        $keywords = 'pennis enlarge procedure, penile enlargement transplant, testicular enlargement surgery,Penis Surgery ';
        return view('frontend.penileenlargementsurgery',compact('pageTitle','pageDescription','keywords'));
    }
    // Doctors Page

    public function drvishalduttgoururologist(Request $request){  
        $pageTitle = 'Best Urology Specialist in Greater Kailash SCI International Hospital';
        $pageDescription = 'Dr. Vishal Dutt Gour is the Consultant Urology and Male Fertility Specialist at SCI Healthcare with experience of 14 years.';
        $keywords = '';
        return view('frontend.delhi.doctor.drvishalduttgoururologist',compact('pageTitle','pageDescription','keywords'));
    }

    public function thankyou(Request $request){  
        $pageTitle = 'Thank You';
        $pageDescription = '';
        $keywords = '';
        return view('frontend.thankyou',compact('pageTitle','pageDescription','keywords'));
    }
    
    
    public function demodental(Request $request){  
        $pageTitle = '';
        $pageDescription = '';
        $keywords = '';
        return view('frontend.demodental',compact('pageTitle','pageDescription','keywords'));
    }
    
    public function contactForm(Request $request){
        if($request->ajax()) {
            
            //Start Validation
            $messages = [
                'name.required'                 => 'Name field is required.',
                'email.required'                => 'Email field is required.',
                'phone.required'                => 'Phone field is required.',
                'message.required'              => 'Message field is required.',
            ];
            $validator = Validator::make($request->all(), [
                'message'           => 'required',
                'phone'             => 'required',
                'email'             => 'required',
                'name'              => 'required',
            ],$messages);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }
            //end Validation

            $data['name']               = $request->name;
            $data['email']              = $request->email;
            $data['phone']              = $request->phone;
            $data['message']            = $request->message;
            $subject                    = $request->subject;

            Mail::send('emails.contactMail', array('data' => $data), function($message) use($subject){
                $message->to('scihospital.official@gmail.com')->subject($subject);
                $message->bcc('digeesell.leads@gmail.com')->subject($subject);
                
            });

            return response()->json([
                'success'   => true,
                'message'   => 'Thank you!  Your message has been successfully sent. We will contact you very soon!',
                'redirect_url' => url('thank-you'),
                'reload' => false
            ]);
        }  
    }
    
    public function bookappointmentServices(Request $request){
        if($request->ajax()) {
            
            //Start Validation
            $messages = [
                'name.required'                 => 'Name field is required.',
                'email.required'                => 'Email field is required.',
                'phone.required'                => 'Phone field is required.',
                'message.required'              => 'Message field is required.',
            ];
            $validator = Validator::make($request->all(), [
                'message'           => 'required',
                'phone'             => 'required',
                'email'             => 'required',
                'name'              => 'required',
            ],$messages);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }
            //end Validation

            $data['name']               = $request->name;
            $data['email']              = $request->email;
            $data['phone']              = $request->phone;
            $data['services']              = $request->services;
            $data['dname']               = $request->dname;
            $data['message']            = $request->message;
            $subject                    = $request->subject;

            Mail::send('emails.bookappointmentServices', array('data' => $data), function($message) use($subject){
                $message->to('scihospital.official@gmail.com')->subject($subject);
                $message->bcc('digeesell.leads@gmail.com')->subject($subject);
                
            });

            return response()->json([
                'success'   => true,
                'message'   => 'Thank you!  Your message has been successfully sent. We will contact you very soon!',
                'redirect_url' => url('thank-you'),
                'reload' => false
            ]);
        }  
    }
    
    public function onlineConsultation(Request $request){
        if($request->ajax()) {
            
            //Start Validation
            $messages = [
                'name.required'                 => 'Name field is required.',
                'phone.required'                => 'Phone field is required.',
                'email.required'                => 'Email field is required.',
            ];
            $validator = Validator::make($request->all(), [
                'phone'             => 'required',
                'name'              => 'required',
                'email'              => 'required',
            ],$messages);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }
            //end Validation

            $data['name']               = $request->name;
            $data['email']              = $request->email;
             $data['phone']              = $request->phone;
            $data['message']            = $request->message;
            $subject                    = $request->subject;

            Mail::send('emails.onlineConsultation', array('data' => $data), function($message) use($subject){
                $message->to('scihospital.official@gmail.com')->subject($subject);
                $message->bcc('digeesell.leads@gmail.com')->subject($subject);
                
            });

            return response()->json([
                'success'   => true,
                'message'   => 'Thank you!  Your message has been successfully sent. We will contact you very soon!',
                'redirect_url' => url('thank-you'),
                'reload' => false
            ]);
        }  
    }
    
    public function bookAnAppointment(Request $request){
        if($request->ajax()) {
            
            //Start Validation
            $messages = [
                'name.required'         => 'Name field is required.',
                'email.required'        => 'Email field is required.',
                'phone.required'        => 'Phone field is required.',
                'age.required'          => 'Age field is required.',
                'time.required'         => 'Time field is required.',
                'service.required'      => 'Service field is required.',
                'date.required'         => 'Date field is required.',
                'message.required'      => 'Message field is required.',
            ];
            $validator = Validator::make($request->all(), [
                'message'       => 'required',
                'date'          => 'required',
                'service'       => 'required',
                'time'          => 'required',
                'age'           => 'required',
                'phone'         => 'required',
                'email'         => 'required',
                'name'          => 'required',
            ],$messages);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }
            //end Validation

            $data['name']               = $request->name;
            $data['email']              = $request->email;
            $data['phone']              = $request->phone;
            $data['age']              = $request->age;
            $data['time']              = $request->time;
            $data['service']              = $request->service;
            $data['date']              = $request->date;
            $data['message']            = $request->message;
            $subject                    = $request->subject;

            Mail::send('emails.bookAnAppointment', array('data' => $data), function($message) use($subject){
                $message->to('scihospital.official@gmail.com')->subject($subject);
                $message->bcc('digeesell.leads@gmail.com')->subject($subject);
              
            });

            return response()->json([
                'success'   => true,
                'message'   => 'Thank you!  Your message has been successfully sent. We will contact you very soon!',
                'redirect_url' => url('thank-you'),
                'reload' => false
            ]);
        }  
    }
    
    public function sendMailThreegurgaon(Request $request){
            if($request->ajax()) {
                $pageSlug   = str_replace(url('/').'/', '', url()->previous());
                $slug       = explode('?',$pageSlug);
        
                $data['name']       = $request->name;
                $data['phone']      = $request->phone;
                $data['message']    = $request->message;
                $subject            = $request->subject;
        
                Mail::send('emails.sendMailThreegurgaon', array('data' => $data), function($message) use($subject){
                    $message->to('scihospital.gurgaon@gmail.com')->subject($subject);
                    $message->bcc('digeesell.leads@gmail.com')->subject($subject);
                   
                });
        
                return response()->json([
                    'success'       => true,
                    'message'       => 'Thank you!  Your message has been successfully sent. We will contact you very soon!',
                    'redirect_url'  => url('thank-you-lp'),
                    'reload'        => false
                ]);
            }
        }

    
    public function sendMailTwogurgaon(Request $request){
        if($request->ajax()) {
            $data['name']       = $request->name;
            $data['phone']      = $request->phone;
            $subject            = $request->subject;
    
            Mail::send('emails.sendMailTwogurgaon', array('data' => $data), function($message) use($subject){
                $message->to('scihospital.gurgaon@gmail.com')->subject($subject);
                /*$message->cc('digeesell.leads@gmail.com')->subject($subject);*/
                $message->bcc('digeesell.leads@gmail.com')->subject($subject);
                
            });
    
            return response()->json([
                'success'       => true,
                'message'       => 'Thank you!  Your message has been successfully sent. We will contact you very soon!',
                'redirect_url'  => url('thank-you-lp'),
                'reload'        => false
            ]);
        }
    }
    public function sendMailTwo(Request $request){
        if($request->ajax()) {
            $data['name']       = $request->name;
            $data['phone']      = $request->phone;
            $subject            = $request->subject;
    
            Mail::send('emails.sendMailTwo', array('data' => $data), function($message) use($subject){
                $message->to('scihospital.official@gmail.com')->subject($subject);
                /*$message->cc('digeesell.leads@gmail.com')->subject($subject);*/
                $message->bcc('digeesell.leads@gmail.com')->subject($subject);
            
            });
    
            return response()->json([
                'success'       => true,
                'message'       => 'Thank you!  Your message has been successfully sent. We will contact you very soon!',
                'redirect_url'  => url('thank-you-lp'),
                'reload'        => false
            ]);
        }
    }
    public function sendMailThree(Request $request){
        if($request->ajax()) {
            $data['name']       = $request->name;
            $data['phone']      = $request->phone;
            $subject            = $request->subject;
    
            Mail::send('emails.sendMailThree', array('data' => $data), function($message) use($subject){
                $message->to('scihospital.official@gmail.com')->subject($subject);
                /*$message->cc('digeesell.leads@gmail.com')->subject($subject);*/
                $message->bcc('digeesell.leads@gmail.com')->subject($subject);
             
            });
    
            return response()->json([
                'success'       => true,
                'message'       => 'Thank you!  Your message has been successfully sent. We will contact you very soon!',
                'redirect_url'  => url('thank-you-lp'),
                'reload'        => false
            ]);
        }
    }
    
    
    
    public function thankyoulp(){
        return view('frontend.ads.thankyoulp'); 
    }
    public function fistulasurgeryingurgaonh(){
        return view('frontend.ads.fistulasurgeryingurgaonh.index'); 
    }
    public function pilestreatmentcostingurgaon(){
        return view('frontend.ads.pilestreatmentcostingurgaon.index'); 
    }
    public function bestdoctorforpilestreatmentingurgaon(){
        return view('frontend.ads.bestdoctorforpilestreatmentingurgaon.index'); 
    }
    public function pilessurgerycostingurgaonh(){
        return view('frontend.ads.pilessurgerycostingurgaonh.index'); 
    }
    public function penisenlargementindelhi(){
        return view('frontend.ads.penisenlargementindelhi.index'); 
    }
    public function brachialplexus(){
        return view('frontend.ads.brachialplexus.index'); 
    }
    public function handandnerve(){
        return view('frontend.ads.handandnerve.index'); 
    }
}

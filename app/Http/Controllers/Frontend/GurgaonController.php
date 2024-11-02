<?php

namespace App\Http\Controllers\Frontend;

use File;
use Mail;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;


class GurgaonController extends Controller
{
    
    public function index(Request $request)
    {
        $pageTitle = 'Best Multispeciality Hospital in Gurgaon';
        $pageDescription = 'SCI International Hospital is a Multispeciality and Surgical hospital in gurgaon. Providing advanced healthcare services in over 15 specialties.';
        $keywords = 'super speciality Hospital, best surgical hospital in gurgaon, best surgeon in gurgaon, best urology surgeon in gurgaon, gynae surgeon,gynae surgeon in gurgaon, surgical hospital, multispeciality hospital in gurgaon';
        
        // Fetch all doctors (or apply filters as needed)

        // Pass the doctors to the view
        return view('gurgaon.frontend.index', compact('pageTitle', 'pageDescription', 'keywords'));
    }
    public function aboutus(Request $request){  
    	$pageTitle = 'Super Speciality Hospital in Greater Kailash - SCI International Hospital';
        $pageDescription = 'SCI International Hospital is the best hospital in Greater Kailash, South Delhi, has highly experienced doctors, surgeons and caretaking staff to attend to the personalized treatment.';
        $keywords = '';
        return view('gurgaon.frontend.aboutus',compact('pageTitle','pageDescription','keywords'));
    	
    }
    public function ourdoctors(Request $request){  
    	$pageTitle = 'Experienced Doctors In Gurgaon | SCI Hospital Gurugram';
        $pageDescription = "SCI offers skilled doctors, surgeons, and caring staff to respond to each patient's unique treatment and aftercare needs.";
        $keywords = '';
        $doctors = Doctor::where('city', 'Gurgaon')->get();

        return view('gurgaon.frontend.ourdoctors',compact('pageTitle','pageDescription','keywords', 'doctors'));
    	
    }
    public function makeanappointment(Request $request){  
        $pageTitle = 'Book An Appointment - SCI International Hospital';
        $pageDescription = 'Book An Appointment using our online form for your consultation at SCI International Hospitals which is located in Greater Kailash, South Delhi.';
        $keywords = '';
        return view('gurgaon.frontend.makeanappointment',compact('pageTitle','pageDescription','keywords'));
        
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
                $message->bcc('priyanka.codingclave@gmail.com')->subject($subject);
            });

            return response()->json([
                'success'   => true,
                'message'   => 'Thank you!  Your message has been successfully sent. We will contact you very soon!',
            ]);
        }
        $pageTitle = 'Treatment for Internatioanl Patients SCI International Hospital';
        $pageDescription = 'SCI Internatonal Hospital treated many International Hospitals, SCI is also famous in treating International patients with utmost care.';
        $keywords = '';
        return view('gurgaon.frontend.internationalpatients',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function contact(Request $request){  
        $pageTitle = 'Contact - SCI International Hospital';
        $pageDescription = 'SCI Hospital is one of the best healthcare centre in Greater Kailash, South Delhi.';
        $keywords = '';
        return view('gurgaon.frontend.contact',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function insuranceandtpa(Request $request){  
        $pageTitle = 'Insurance and TPA - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('gurgaon.frontend.insuranceandtpa',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function errorpage(Request $request){  
        $pageTitle = 'Not Found - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('gurgaon.frontend.errorpage',compact('pageTitle','pageDescription','keywords'));
        
    }
    
    public function career(Request $request){  
        $pageTitle = 'Career at SCI International Hospital South Delhi';
        $pageDescription = 'SCI International Hospital gives the best career opportunities gives opportunities for all kinds of roles like junior doctors, senior doctors, nurses, cleaning staff, etc.';
        $keywords = '';
        return view('gurgaon.frontend.career',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function services(Request $request){  
        $pageTitle = 'Health Services at SCI International Hospital';
        $pageDescription = 'Explore SCI International Hospital located at Greater Kailash website for number of Health Services we provide which gives clear idea.';
        $keywords = '';
        return view('gurgaon.frontend.services',compact('pageTitle','pageDescription','keywords'));
        
    }
    public function ourgallery(Request $request){  
        $pageTitle = 'Our Gallery - SCI International Hospital';
        $pageDescription = 'SCI International Hospital';
        $keywords = '';
        return view('gurgaon.frontend.ourgallery',compact('pageTitle','pageDescription','keywords'));
        
    }

    
    public function gallstone(Request $request){  
        $pageTitle = 'Best Gallbladder Stone Treatment in Gurgaon';
        $pageDescription = 'Get the best Gallbladder stone treatment in Gurgaon from our qualified team of surgeons. Get relief from your Gallbladder pain now with SCI Hospital.';
        $keywords = 'Gallbladder stone treatment in gugaon, Gallbladder stones symptoms, best Gallbladder surgeon in gurgaon, Gallbladder stone surgery cost in gurgaon, Gallbladder stones causes';
        return view('gurgaon.frontend.services.gallstone',compact('pageTitle','pageDescription','keywords'));
    }
    public function herniasurgery(Request $request){  
        $pageTitle = 'Best Hernia Surgery In Gurgaon  ';
        $pageDescription = 'Get the best hernia surgery in Gurgaon from experienced surgeons in the best hernia surgery hospital in Gurgaon. Get the best health care services.';
        $keywords = 'pilonidal sinus surgery in gurgaon, best pilonidal sinus doctors in gurgaon, best pilonidal sinus hospital in gurgaon, Best Doctors for Pilonidal Sinus in Gurgaon';
        return view('gurgaon.frontend.services.herniasurgery',compact('pageTitle','pageDescription','keywords'));
    }
    public function pilestreatment(Request $request){  
        $pageTitle = 'Get the Best Piles Treatment in Gurgaon';
        $pageDescription = 'Get the best Piles Treatment in Gurgaon from our experienced team of specialists. We offer the latest treatments, proven methods, and personalized care. ';
        $keywords = 'Piles Treatment in Gurgaon, Best Piles Doctor in Gurgaon, best hospital for piles ';
        return view('gurgaon.frontend.services.pilestreatment',compact('pageTitle','pageDescription','keywords'));
    }
    public function fistulatreatment(Request $request){  
        $pageTitle = 'Get The Best Anal Fistula Treatment In Gurgaon';
        $pageDescription = 'Get best anal fistula treatment in Gurgaon from experienced surgeons. Our team is committed to providing high-quality, personalized care with minimal downtime. ';
        $keywords = 'fistula treatment in gurgaon, Best Doctors for Fistula Treatment in gurgaon, Fistula Treatment cost in gurgaon, Anal Fistula surgery in gurgaon, anal fistula treatment center in gurgaon';
        return view('gurgaon.frontend.services.fistulatreatment',compact('pageTitle','pageDescription','keywords'));
    }
    public function fissuresurgery(Request $request){  
        $pageTitle = 'Get The Best Anal Fissure Surgery In Gurgaon';
        $pageDescription = 'Get expert advice and the best Anal Fissure Surgery In Gurgaon. Our specialized team of surgeons provides safe and successful treatments.';
        $keywords = 'Best Fissure Doctor In Gurgaon , Anal Fissure surgery in Gurgaon, Anal Fissure surgery';
        return view('gurgaon.frontend.services.fissuresurgery',compact('pageTitle','pageDescription','keywords'));
    }
    public function pilonidalsinus(Request $request){  
        $pageTitle = 'Best Pilonidal Sinus Surgery in Gurgaon';
        $pageDescription = 'Get high-quality pilonidal sinus surgery in gurgaon. Skilled surgeons, cutting-edge technology, and minimally invasive procedures help patients recover quickly.';
        $keywords = 'pilonidal sinus surgery in Gurgaon, best pilonidal sinus doctors in Gurgaon , best pilonidal sinus hospital in Gurgaon, Best Doctors for Pilonidal Sinus in Gurgaon';
        return view('gurgaon.frontend.services.pilonidalsinus',compact('pageTitle','pageDescription','keywords'));
    }
    public function sportsinjurytreatment(Request $request){  
        $pageTitle = 'Get The Best Sports Injuries Treatment in Gurgaon';
        $pageDescription = 'Effective and individualized sports injury treatment in Gurgaon. Our sports injury doctors in Gurgaon will help you heal faster. Regain life and fitness.';
        $keywords = 'sports injury doctors in gurgaon, sports injuries treatment in gurgaon, sports injury hospital in gurgaon ';
        return view('gurgaon.frontend.services.sportsinjurytreatment',compact('pageTitle','pageDescription','keywords'));
    }
    public function pediatricorthopedic(Request $request){  
        $pageTitle = 'Get Expert Care With Pediatric Orthopedic Doctor In Gurgaon ';
        $pageDescription = "Experience superior care with top pediatric orthopedic doctor in Gurgaon. Let our experts handle your child's bone health. Book an appointment today. ";
        $keywords = 'best pediatric orthopedic Surgery in gurgaon, pediatric orthopedic doctor in gurgaon, best pediatric orthopedic hospital in gurgaon, best pediatrician in gurgaon';
        return view('gurgaon.frontend.services.pediatricorthopedic',compact('pageTitle','pageDescription','keywords')); 
    }
    public function orthopedichospitals(Request $request){  
        $pageTitle = 'Best Orthopedic Hospitals In Gurgaon';
        $pageDescription = " Find the best orthopedic hospitals in Gurgaon. The top orthopedic specialist in Gurgaon can provide skilled treatment for bone, joint, and spine issues.";
        $keywords = 'best orthopedic hospital in gurgaon, best orthopedic doctor in gurgaon, orthopedic surgery in gurgaon ';
        return view('gurgaon.frontend.services.orthopedichospitals',compact('pageTitle','pageDescription','keywords')); 
    }
    public function vaginaltightening(Request $request){  
        $pageTitle = 'Vaginal tightening treatments in Gurgaon';
        $pageDescription = "Vaginal tightening treatments in Gurgaon are safe and effective. Improve intimacy and confidence. Make an appointment for your consultation today.";
        $keywords = 'vaginal tightening surgery, vaginal tightening procedure, vaginal tightening treatment in gurgaon, best Vaginal Tightening hospitals in gurgaon, best doctors for laser vaginal tightening in gurgaon ';
        return view('gurgaon.frontend.services.vaginaltightening',compact('pageTitle','pageDescription','keywords')); 
    }
    public function urologytreatment(Request $request){  
        $pageTitle = 'Best Urology Hospital In Gurgaon ';
        $pageDescription = "The best urology hospital in Gurgaon offers world-class urological care. Expert treatment for kidney, bladder, and prostate disorders with excellent urologists.";
        $keywords = 'best urologist in Gurgaon, best urology hospital in Gurgaon, best urology doctor in Gurgaon, urology treatments in Gurgaon ';
        return view('gurgaon.frontend.services.urologytreatment',compact('pageTitle','pageDescription','keywords')); 
    }
    public function andrologytreatment(Request $request){  
        $pageTitle = 'Best Andrology treatment in Gurgaon';
        $pageDescription = "Get the best andrology treatment in Gurgaon. Providing innovative solutions and expert care for male reproductive health issues. Change your life today. ";
        $keywords = 'Best Andrologist In gurgaon, andrology treatment in gugaon, best andrology hospital in gurgaon';
        return view('gurgaon.frontend.services.andrologytreatment',compact('pageTitle','pageDescription','keywords')); 
    }
    public function hymenoplastysurgery(Request $request){  
        $pageTitle = 'Hymenoplasty Surgery in Gurgaon';
        $pageDescription = "Get safe and private Hymenoplasty Surgery in Gurgaon. Experienced surgeons, first-rate treatment. Regain your self-esteem and live life on your terms.";
        $keywords = 'hymenoplasty surgery in gurgaon, hymenoplasty doctor in Gurgaon, Best Hymenoplasty Hospital in gurgaon  ';
        return view('gurgaon.frontend.services.hymenoplastysurgery',compact('pageTitle','pageDescription','keywords')); 
    }
    public function kidneystonetreatment(Request $request){  
        $pageTitle = 'Kidney Stone Treatment In Gurgaon ';
        $pageDescription = "Get effective kidney stone treatment in Gurgaon! Leading experts provide top-notch care & advanced treatment options. Say goodbye to kidney stone pain now.";
        $keywords = 'kidney specialist in gurgaon, kidney stone treatment in gurgaon, kidney stone treatment, kidney stone doctor in gurgaon';
        return view('gurgaon.frontend.services.kidneystonetreatment',compact('pageTitle','pageDescription','keywords')); 
    }
    public function hypospadiassurgery(Request $request){  
        $pageTitle = 'Best Hypospadias Doctors In Gurgaon';
        $pageDescription = "Get surgery for hypospadias from the best hypospadias doctors in Gurgaon. Expert, caring care will help you get the best results. Schedule an appointment today.";
        $keywords = 'hypospadias surgery in gurgaon, hypospadias surgery cost, best hypospadias doctors in gurgaon, best hypospadias hospital in gurgaon ';
        return view('gurgaon.frontend.services.hypospadiassurgery',compact('pageTitle','pageDescription','keywords')); 
    }
    public function enlargedprostate(Request $request){  
        $pageTitle = 'Enlarged Prostate Treatment In Gurgaon';
        $pageDescription = "Get effective, advanced enlarged prostate treatment in Gurgaon. Our expert urologists provide effective and individualized treatment for lasting relief.";
        $keywords = 'enlarged prostate treatment in gurgaon, best doctors for enlarged prostate treatment, Enlarged Prostate Treatment, best enlarged prostate hospital in gurgaon ';
        return view('gurgaon.frontend.services.enlargedprostate',compact('pageTitle','pageDescription','keywords')); 
    }
    public function maleinfertilitytreatment(Request $request){  
        $pageTitle = 'Male Infertility Treatment in Gurgaon';
        $pageDescription = "Find the best male infertility treatment in Gurgaon with expert treatment options. Secure your future family today. High success rates & utmost care.";
        $keywords = 'Male Infertility Treatment in Gurgaon, Hospital for Male Infertility Treatment in Gurgaon, male infertility specialist in gurgaon, Best Doctors For Male Infertility in Gurgaon ';
        return view('gurgaon.frontend.services.maleinfertilitytreatment',compact('pageTitle','pageDescription','keywords')); 
    }
    public function erectiledysfunctiontreatment(Request $request){  
        $pageTitle = 'Erectile Dysfunction Treatment In Gurgaon';
        $pageDescription = "Get proven erectile dysfunction treatment in Gurgaon. Trust our experts to restore your confidence & enhance your relationships. Effective, private & safe.";
        $keywords = 'erectile dysfunction treatment in gurgaon, erectile dysfunction doctor in gurgaon, erectile dysfunction hospital in gurugram';
        return view('gurgaon.frontend.services.erectiledysfunctiontreatment',compact('pageTitle','pageDescription','keywords')); 
    }
    public function dentalimplants(Request $request){  
        $pageTitle = 'Best Dental Implants In Gurgaon';
        $pageDescription = "Get the best dental implants in Gurgaon from specialists. Enhance your smile and increase your self-assurance with our safe, long-lasting solutions.";
        $keywords = 'Best Dental Implants In Gurgaon, Dental Implants In Gurgaon, Best Dental Hospital In Gurgaon, Best Dental Doctor In Gurgaon ';
        return view('gurgaon.frontend.services.dentalimplants',compact('pageTitle','pageDescription','keywords')); 
    }
    public function bariatricsurgery(Request $request){  
        $pageTitle = 'Get The Best Bariatric Surgery in Gurgaon';
        $pageDescription = "Expert bariatric surgery in Gurgaon can help you live a safer, healthier life. With the help of our highly qualified surgeons, you may transform your lifestyle.";
        $keywords = 'best bariatric surgeon in Gurgaon, best hospital for bariatric surgery in Gurgaon, best bariatric surgery hospital in Gurgaon, Bariatric Surgery in Gurgaon';
        return view('gurgaon.frontend.services.bariatricsurgery',compact('pageTitle','pageDescription','keywords')); 
    }
    public function penileenlargementsurgery(Request $request){  
        $pageTitle = 'Get The Best Penile Enlargement Surgery In Gurgaon';
        $pageDescription = "Get the best in penile enlargement surgery in gurgaon. upgrade your confidence and enhance your performance with safe & effective methods";
        $keywords = 'best penile enlargement surgery hospital in gurgaon,penile enlargement surgery in gurgaon,specialist for penile enlargement surgery in gurgaon,penile enlargement surgeon in gurgaon,penile enlargement doctor in gurgaon ';
        return view('gurgaon.frontend.services.penileenlargementsurgery',compact('pageTitle','pageDescription','keywords')); 
    }
    public function cosmeticandplasticsurgery(Request $request){  
        $pageTitle = 'Get The Best Cosmetology & Plastic Surgery In Gurgaon ';
        $pageDescription = "Discover transformative Cosmetology & Plastic Surgery in Gurgaon with Sci Healthcare. Our expert team offers advanced aesthetic solutions for a radiant and confident you.";
        $keywords = 'best plastic surgeon in gurgaon, best cosmetic surgeon in gurgaon, best plastic surgery hospital in gurgaon, cost of plastic surgery, best plastic surgeons in gurgaon,Plastic Surgeries Doctors In Gurgaon';
        return view('gurgaon.frontend.services.cosmeticandplasticsurgery',compact('pageTitle','pageDescription','keywords')); 
    }
    
    public function allurionballoonsurgery(Request $request){  
        $pageTitle = 'Advanced Gastric Balloon surgery in Gurgaon at affordable Cost';
        $pageDescription = " Get the best Gastric Balloon surgery in Gurgaon with advanced Technology at an affordable cost.";
        $keywords = 'gastric balloon surgery in Gurgaon, gastric balloon surgery doctors in Gurgaon, best gastric ballooning hospitals in Gurgaon, gastric ballooning cost in Gurgaon, Allurion Balloon Surgery';
        return view('gurgaon.frontend.services.allurionballoonsurgery',compact('pageTitle','pageDescription','keywords')); 
    }
    public function ovariancysttreatment(Request $request){  
        $pageTitle = 'Get The Best Ovarian Cyst Treatment In Gurgaon';
        $pageDescription = "SCI Has one of the best ovarian cyst removal doctors in Gurgaon. Book an appointment to get the ovarian cyst treatment in Gurgaon at an affordable cost.";
        $keywords = 'Ovarian Cyst Treatment In Gurgaon, Best Doctors For Ovarian Cyst Treatment In Gurgaon, Ovarian Cyst Treatment Cost In Gurgaon, Ovarian Cyst Surgery In Gurgaon';
        return view('gurgaon.frontend.services.ovariancysttreatment',compact('pageTitle','pageDescription','keywords')); 
    }
    public function uterinefibroidtreatment(Request $request){  
        $pageTitle = 'Get The Best uterine fibroid treatment in Gurgaon ';
        $pageDescription = "SCI Has one of the best doctors for Uterine Fibroids in Gurgaon. Book an appointment to get uterine fibroid treatment in Gurgaon at an affordable cost.";
        $keywords = 'uterine fibroid treatment in Gurgaon, Top uterine fibroid treatment Hospital in Gurugram, Doctors for Uterine Fibroids in Gurgaon, Uterine fibroid treatment cost in Gurgaon, Best Uterine Fibroid Treatment Doctors In Gurgaon';
        return view('gurgaon.frontend.services.uterinefibroidtreatment',compact('pageTitle','pageDescription','keywords')); 
    }
    public function endometriosistreatment(Request $request){  
        $pageTitle = 'Get The Best Endometriosis Treatment in Gurgaon';
        $pageDescription = "SCI has one of the best Endometriosis Treatment Doctors In Gurgaon. Book an appointment to get the endometriosis treatment surgery in Gurgaon at an affordable cost.";
        $keywords = 'endometriosis treatment in gurgaon, endometriosis treatment surgery in gurgaon, endometriosis treatment doctors in gurgaon, best endometriosis treatment doctors in gurgaon,best endometriosis treatment hospital in gurugram ';
        return view('gurgaon.frontend.services.endometriosistreatment',compact('pageTitle','pageDescription','keywords')); 
    }
    public function healthcheckup(Request $request){  
        $pageTitle = 'Full Body Checkup In Gurgaon at Affordable Price';
        $pageDescription = "Sci Hospital Offers you a full body checkup in Gurgaon at affordable prices. Doctors diagnose diseases before they can prove fatal to your health.";
        $keywords = 'full body checkup price in Gurgaon, full body checkup in Gurgaon, best hospital for full body checkup in Gurgaon,   full body checkup cost in Gurgaon   ';
        return view('gurgaon.frontend.services.healthcheckup',compact('pageTitle','pageDescription','keywords')); 
    }
    public function handandnervesurgery(Request $request){  
        $pageTitle = 'Hand And Nerve Surgery In Gurgaon';
        $pageDescription = "Experience advanced Hand and Nerve Surgery in Gurgaon at Sci Hospital. Book an appointment with the best Hand Pain Treatment Doctors in Gurgaon for expert care.";
        $keywords = 'Hand And Nerve surgery in Gurgaon, Hand And Nerve surgery cost in Gurgaon, hand nerve surgery recovery time, Hand nerve repair surgery, Best Hospital For Hand And Nerve Surgery In Gurgaon, Best Hand Pain Treatment Doctors In Gurgaon';
        return view('gurgaon.frontend.services.handandnervesurgery',compact('pageTitle','pageDescription','keywords')); 
    }
    public function sinusinfectiontreatment(Request $request){  
        $pageTitle = 'Get the Best Sinus Infection Treatment In Gurgaon';
        $pageDescription = "Discover top-notch sinus infection treatment in Gurgaon. Find relief with expert care and advanced solutions. Your path to sinus wellness starts here";
        $keywords = 'Sinus Infection Treatment in Gurgaon, Best Sinus Doctors in Gurgaon, Sinus Treatment in Gurgaon, Best Sinus Surgery in Gurgaon, FESS Surgery in Gurgaon';
        return view('gurgaon.frontend.services.sinusinfectiontreatment',compact('pageTitle','pageDescription','keywords')); 
    }
    public function earnosethroatentspecialist(Request $request){  
        $pageTitle = 'ENT Specialist: Best ENT Hospital in Gurgaon Haryana';
        $pageDescription = "Discover exceptional ENT care at Sci Healthcare, the Best ENT hospital in Gurgaon. Consult the top ENT specialist for expert solutions.";
        $keywords = 'Best ENT Hospital in Gurgaon, Best ENT specialist in Gurgaon, Best Ear Nose Throat Ent Specialists In Gurgaon, Top ENT Hospital in Gurgaon, Best ENT Doctors in Gurgaon';
        return view('gurgaon.frontend.services.earnosethroatentspecialist',compact('pageTitle','pageDescription','keywords')); 
    }
    public function cochlearimplants(Request $request){  
        $pageTitle = 'Get The Best Cochlear Implant in Gurgaon';
        $pageDescription = "Discover the best Cochlear Implant in Gurgaon at Sci Hospital with top-notch doctors. Transform your hearing with advanced technology and expert care";
        $keywords = 'Cochlear Implant Surgery Hospital in Gurgaon, Best Cochlear Implant Doctors In Gurgaon,Cochlear Implant in Gurgaon, Best Cochlear implant surgery Hospital in Gurugram,Best Cochlear implant Hospital in Gurugram,Best Cochlear Implant Surgeons in Gurgaon,Cochlear Implant Cost in Gurgaon';
        return view('gurgaon.frontend.services.cochlearimplants',compact('pageTitle','pageDescription','keywords')); 
    }
    public function obstetricsandgynecology(Request $request){  
        $pageTitle = 'Best Gynecologist Hospital in Gurgaon | SCI Hospital ';
        $pageDescription = " Experience top-notch care at Sci Hospital, the best Gynecologist Hospital in Gurgaon, featuring leading Obstetrics and Gynaecologists. Your health, our priority.";
        $keywords = 'gynecologist in Gurgaon,best gynecologist in Gurgaon, top gynecologist in Gurgaon, best gynecology hospital in Gurgaon, obstetrics and gynecology hospital in Gurgaon, best gynecologist obstetricians in Gurgaon, obstetrics and gynecology specialists in Gurgaon';
        return view('gurgaon.frontend.services.obstetricsandgynecology',compact('pageTitle','pageDescription','keywords')); 
    }
    
     public function drvishalduttgour(Request $request){  
        $pageTitle = 'Best Urology Specialist in Greater Kailash SCI International Hospital';
        $pageDescription = 'Dr. Vishal Dutt Gour is the Consultant Urology and Male Fertility Specialist at SCI Healthcare with experience of 14 years.';
        $keywords = '';
        return view('gurgaon.frontend.doctors.drvishalduttgour',compact('pageTitle','pageDescription','keywords'));
    }
    
  
  
    public function drnalinigupta(Request $request){  
        $pageTitle = 'Dr. Nalini Gupta   - SCI International Hospital';
        $pageDescription = '';
        $keywords = '';
        return view('gurgaon.frontend.doctors.drnalinigupta',compact('pageTitle','pageDescription','keywords'));
    }
    public function dritishreegupta(Request $request){  
        $pageTitle = 'Expert Plastic Surgeon at SCI Hospital Gurgaon';
        $pageDescription = 'Meet Dr. Itishree Gupta, MBBS, DNB - Plastic Surgery, a skilled plastic surgeon at SCI Hospital Gurgaon. Transform your appearance with advanced cosmetic procedures';
        $keywords = 'Dr. Itishree Gupta, Plastic Surgeon, SCI Hospital Gurgaon, Cosmetic Surgery, MBBS, DNB, Expert Plastic Surgeon';
        return view('gurgaon.frontend.doctors.dritishreegupta',compact('pageTitle','pageDescription','keywords'));
    }
    public function drpunitdilawari(Request $request){  
        $pageTitle = 'Dr. Punit Dilawari   - SCI International Hospital';
        $pageDescription = '';
        $keywords = '';
        return view('gurgaon.frontend.doctors.drpunitdilawari',compact('pageTitle','pageDescription','keywords'));
    }
    public function drmirasif(Request $request){  
        $pageTitle = 'Dr. Mir Asif   - SCI International Hospital';
        $pageDescription = '';
        $keywords = '';
        return view('gurgaon.frontend.doctors.drmirasif',compact('pageTitle','pageDescription','keywords'));
    }
   
   
    public function drankitamittal(Request $request){  
        $pageTitle = 'Dr. Ankita Mittal   - SCI International Hospital';
        $pageDescription = '';
        $keywords = '';
        return view('gurgaon.frontend.doctors.drankitamittal',compact('pageTitle','pageDescription','keywords'));
    }
    public function drnishaohri(Request $request){  
        $pageTitle = 'Dr. Nisha Ohri   - SCI International Hospital';
        $pageDescription = '';
        $keywords = '';
        return view('gurgaon.frontend.doctors.drnishaohri',compact('pageTitle','pageDescription','keywords'));
    }
    public function drvikrantsingh(Request $request){  
        $pageTitle = 'Dr. Vikrant Singh | Proctologist & Surgeon - SCI Hospital';
        $pageDescription = 'Meet Dr. Vikrant Singh, a skilled proctologist and surgeon at SCI International Hospital. Find expert care for your needs today';
        $keywords = '';
        return view('gurgaon.frontend.doctors.drvikrantsingh',compact('pageTitle','pageDescription','keywords'));
    }
    public function drdaipayanghosh(Request $request){  
        $pageTitle = 'Dr. Daipayan Ghosh   - SCI International Hospital';
        $pageDescription = '';
        $keywords = '';
        return view('gurgaon.frontend.doctors.drdaipayanghosh',compact('pageTitle','pageDescription','keywords'));
    }
    public function drshwetanawal(Request $request){  
        $pageTitle = 'Dr. Shweta Nawal   - SCI International Hospital';
        $pageDescription = '';
        $keywords = '';
        return view('gurgaon.frontend.doctors.drshwetanawal',compact('pageTitle','pageDescription','keywords'));
    }
   
    public function drshivanisachdevgour(Request $request){  
        $pageTitle = 'Best Fertility Specialist in Gurgaon';
        $pageDescription = 'Dr. Shivani Sachdev Gour is the founder and director of SCI Healthcare and Multispecialty Centre and the best fertility specialist in Gurgaon.';
        $keywords = 'dr. shivani sachdev gour, best fertility specialist in Gurgaon';
        return view('gurgaon.frontend.doctors.drshivanisachdevgour',compact('pageTitle','pageDescription','keywords'));
    }
    public function drgayatribalajuneja(Request $request){  
        $pageTitle = 'Best Gynecologist & Obstetrician In Gurgaon';
        $pageDescription = "Dr. Gayatri Bala Juneja is the best gynecologist & obstetrician in Gurgaon. She is renowned for her expert care and treatment of women's health.";
        $keywords = ' dr. gayatri bala juneja, best gynecologist & obstetrician in Gurgaon';
        return view('gurgaon.frontend.doctors.drgayatribalajuneja',compact('pageTitle','pageDescription','keywords'));
    }
    public function drrajivgaur(Request $request){  
        $pageTitle = 'Best Internal Medicine Specialist In Gurgaon';
        $pageDescription = 'Dr. Rajiv Gaur is the Best Internal Medicine Specialist in Gurgaon. Experience expert diagnosis, and tailored treatment plans for your well-being.';
        $keywords = 'Best Internal Medicine Specialist In Gurgaon,  Dr. Rajiv Gaur';
        return view('gurgaon.frontend.doctors.drrajivgaur',compact('pageTitle','pageDescription','keywords'));
    }
    public function drhimanshushekhar(Request $request){  
        $pageTitle = 'Dr. Himanshu Shekhar Medical Director SCI Hospital Gurugram';
        $pageDescription = ' Dr. Himanshu Shekhar, MBBS, MD Internal Medicine - Medical Director at SCI Hospital Gurugram. Expert care for your health and well-being';
        $keywords = '';
        return view('gurgaon.frontend.doctors.drhimanshushekhar',compact('pageTitle','pageDescription','keywords'));
    }
   
    public function drkashmirilalkathuria(Request $request){  
        $pageTitle = 'Dr. Kashmiri Lal Kathuria Consultant Physician at SCI Hospital  ';
        $pageDescription = 'Consultant Physician, Dr. Kashmiri Lal Kathuria, provides expert medical care at SCI Hospital. Your health is our priority.';
        $keywords = '';
        return view('gurgaon.frontend.doctors.drkashmirilalkathuria',compact('pageTitle','pageDescription','keywords'));
    }
    public function drhjnirdeshorthopedist(Request $request){  
        $pageTitle = 'Dr. H J Nirdesh - Orthopedic Surgeon at SCI Hospital Gurugram ';
        $pageDescription = 'Meet Dr. H J Nirdesh, Orthopedic Surgeon at SCI Hospital Gurugram for expert care and solutions for your orthopedic needs.';
        $keywords = '';
        return view('gurgaon.frontend.doctors.drhjnirdeshorthopedist',compact('pageTitle','pageDescription','keywords'));
    }
    
    public function drshivamsharma(Request $request){  
        $pageTitle = 'Dr. Shivam Sharma - General Physician at SCI Hospital Gurugram';
        $pageDescription = 'Dr. Shivam Sharma - Your dedicated General Physician at SCI Hospital Gurugram, providing expert care for your well-being';
        $keywords = '';
        return view('gurgaon.frontend.doctors.drshivamsharma',compact('pageTitle','pageDescription','keywords'));
    }
	
	public function drshambhavchandra(Request $request){  
        $pageTitle = 'Dr Shambhav Chandra';
        $pageDescription = 'Dr Shambhav Chandra is a Consultant at SCI Hospital in Greater Kailash, he is one of the best Urologist, Andrologist, Urethra &amp; Penile Reconstructive Surgeon.';
        $keywords = '';
        return view('gurgaon.frontend.drshambhavchandra',compact('pageTitle','pageDescription','keywords'));
    }
    public function dryashbhatia(Request $request){  
        $pageTitle = 'Dr vineet Kaul ';
        $pageDescription = 'Dr vineet Kaul is a Consultant at SCI Hospital in Greater Kailash, he is one of the best Urologist, Andrologist, Urethra &amp; Penile Reconstructive Surgeon.';
        $keywords = '';
        return view('gurgaon.frontend.dryashbhatia',compact('pageTitle','pageDescription','keywords'));
    }
    public function drpawansharma(Request $request){  
        $pageTitle = 'Dr vineet Kaul ';
        $pageDescription = 'Dr vineet Kaul is a Consultant at SCI Hospital in Greater Kailash, he is one of the best Urologist, Andrologist, Urethra &amp; Penile Reconstructive Surgeon.';
        $keywords = '';
        return view('gurgaon.frontend.drpawansharma',compact('pageTitle','pageDescription','keywords'));
    }
    public function drsnehatiwari(Request $request){  
        $pageTitle = 'Dr vineet Kaul ';
        $pageDescription = 'Dr vineet Kaul is a Consultant at SCI Hospital in Greater Kailash, he is one of the best Urologist, Andrologist, Urethra &amp; Penile Reconstructive Surgeon.';
        $keywords = '';
        return view('gurgaon.frontend.drsnehatiwari',compact('pageTitle','pageDescription','keywords'));
    }
    public function drvineetkaul(Request $request){  
        $pageTitle = 'Dr vineet Kaul ';
        $pageDescription = 'Dr vineet Kaul is a Consultant at SCI Hospital in Greater Kailash, he is one of the best Urologist, Andrologist, Urethra &amp; Penile Reconstructive Surgeon.';
        $keywords = '';
        return view('gurgaon.frontend.drvineetkaul',compact('pageTitle','pageDescription','keywords'));
    }
    public function drindernathvermaurologist(Request $request){  
        $pageTitle = 'Dr. Inder Nath Verma: Expert Urologist at SCI Hospital, Gurgaon';
        $pageDescription = 'Meet Dr. Inder Nath Verma, renowned Urologist at SCI Hospital, Gurgaon. Specializing in advanced urological care for a healthier life. Book an appointment today';
        $keywords = 'Urologist in Gurgaon. Best Urologist in Gurgaon, Top urologist in Gurgaon';
        return view('gurgaon.frontend.doctors.drindernathvermaurologist',compact('pageTitle','pageDescription','keywords'));
    }
    
    public function drmayankgargurologist(Request $request){  
        $pageTitle = 'Dr. Mayank Garg | Urologist & General Surgeon at SCI Gurgaon';
        $pageDescription = 'Meet Dr. Mayank Garg, a skilled urologist and general surgeon at SCI Gurgaon. Expertise in advanced surgical procedures. Book an appointment today';
        $keywords = ' Urologist in gurgaon, Andrologist in gurgaon';
        return view('gurgaon.frontend.doctors.drmayankgargurologist',compact('pageTitle','pageDescription','keywords'));
    }
   
    public function thankyou(Request $request){  
        $pageTitle = 'Thank You';
        $pageDescription = '';
        $keywords = '';
        return view('gurgaon.frontend.thankyou',compact('pageTitle','pageDescription','keywords'));
    }
    
    public function contactForm(Request $request){
        if($request->ajax()) {
            
            //Start Validation
            $messages = [
                'name.required'                 => 'Name field is required.',
                'email.required'                => 'Email field is required.',
                'phone.required'                => 'Phone field is required.',
                'centername.required'              => 'Center Name field is required.',
                'message.required'              => 'Message field is required.',
            ];
            $validator = Validator::make($request->all(), [
                'message'           => 'required',
                'phone'             => 'required',
                'email'             => 'required',
                'name'              => 'required',
                'centername'              => 'required',
            ],$messages);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }
            //end Validation

            $data['name']               = $request->name;
            $data['email']              = $request->email;
            $data['phone']              = $request->phone;
            $data['centername']               = $request->centername;
            $data['message']            = $request->message;
            $subject                    = $request->subject;

            Mail::send('emails.contactMail', array('data' => $data), function($message) use($subject){
                $message->to('scihospital.official@gmail.com')->subject($subject);
                $message->bcc('digeesell.leads@gmail.com')->subject($subject);
                $message->bcc('priyanka.codingclave@gmail.com')->subject($subject);
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
                'centername.required'                => 'Center Name field is required.',
                'message.required'              => 'Message field is required.',
            ];
            $validator = Validator::make($request->all(), [
                'message'           => 'required',
                'phone'             => 'required',
                'email'             => 'required',
                'name'              => 'required',
                'centername'              => 'required',
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
            $data['centername']            = $request->centername;
            $data['message']            = $request->message;
            $subject                    = $request->subject;

            Mail::send('emails.bookappointmentServices', array('data' => $data), function($message) use($subject){
                $message->to('scihospital.official@gmail.com')->subject($subject);
                $message->bcc('digeesell.leads@gmail.com')->subject($subject);
                $message->bcc('priyanka.codingclave@gmail.com')->subject($subject);
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
                'centername.required'                => 'Center Name field is required.',
            ];
            $validator = Validator::make($request->all(), [
                'phone'             => 'required',
                'name'              => 'required',
                'centername'              => 'required',
            ],$messages);
            if ($validator->fails()) {
                return response()->json(['error'=>$validator->errors()], 401);
            }
            //end Validation

            $data['name']               = $request->name;
            $data['email']              = $request->email;
             $data['phone']              = $request->phone;
             $data['centername']            = $request->centername;
            $data['message']            = $request->message;
            $subject                    = $request->subject;

            Mail::send('emails.onlineConsultation', array('data' => $data), function($message) use($subject){
                $message->to('scihospital.official@gmail.com')->subject($subject);
                $message->bcc('digeesell.leads@gmail.com')->subject($subject);
                $message->bcc('priyanka.codingclave@gmail.com')->subject($subject);
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
                'centername.required'         => 'Center Name field is required.',
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
                'centername'          => 'required',
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
            $data['centername']            = $request->centername;
            $data['message']            = $request->message;
            $subject                    = $request->subject;

            Mail::send('emails.bookAnAppointment', array('data' => $data), function($message) use($subject){
                $message->to('scihospital.official@gmail.com')->subject($subject);
                $message->bcc('digeesell.leads@gmail.com')->subject($subject);
                $message->bcc('priyanka.codingclave@gmail.com')->subject($subject);
            });

            return response()->json([
                'success'   => true,
                'message'   => 'Thank you!  Your message has been successfully sent. We will contact you very soon!',
                'redirect_url' => url('thank-you'),
                'reload' => false
            ]);
        }  
    }
    
    

}

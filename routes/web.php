<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\GurgaonController;
use App\Http\Controllers\Frontend\AdminPanelController;
use App\Http\Controllers\Frontend\BlogSitemapXmlController;
use App\Http\Controllers\Frontend\DoctorController;
use Illuminate\Support\Facades\Redirect;


Route::get('/dashboard', [AdminPanelController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/doctors', [DoctorController::class, 'index'])->name('doctors.index');
    Route::get('/doctors/create', [DoctorController::class, 'create'])->name('doctors.create');
    Route::post('/doctors', [DoctorController::class, 'store'])->name('doctors.store');
    Route::get('/doctors/{doctor}/edit', [DoctorController::class, 'edit'])->name('doctors.edit');
    Route::put('/doctors/{doctor}', [DoctorController::class, 'update'])->name('doctors.update');
    Route::delete('/doctors/{doctor}', [DoctorController::class, 'destroy'])->name('doctors.destroy');
    
});
Route::get('our-doctors/delhi/dr-{slug}', [DoctorController::class, 'show'])->name('doctors.show');
Route::get('our-doctors/gurgaon/dr-{slug}', [DoctorController::class, 'gurgaonshow'])->name('doctors.gurgaonshow');


require __DIR__.'/auth.php';

Route::get('/clear-cache', function() {
   $exitCode    = Artisan::call('cache:clear');
   $config      = Artisan::call('config:cache');
   $view        = Artisan::call('view:clear');
   return "Cache is cleared";
});

// Redirections 


Route::get('/DepartmentofDermatologyCosmetologyPlasticSurgery', function () {
    return Redirect::to('/department-of-dermatology-cosmetology-plastic-surgery', 301);
});

Route::get('/DentalDepartment', function () {
    return Redirect::to('/dental-department', 301);   
});
Route::get('/Dental-Department', function () {
    return Redirect::to('/dental-department', 301);   
});
Route::get('/DrSirishaSingh', function () {
    return Redirect::to('/dr-sirisha-singh', 301);
});
Route::get('/DepartmentofOphthalmology', function () {
    return Redirect::to('/department-of-ophthalmology', 301);
});
Route::get('/DrDhwaniMago', function () {
    return Redirect::to('/dr-dhwani-mago', 301);
});
Route::get('/DrSanjivGupta', function () {
    return Redirect::to('/dr-sanjiv-gupta', 301);
});

Route::get('/blog/PrenatalNutritionTips', function () {
    return Redirect::to('/blog/prenatal-nutrition-tips', 301);
});

Route::get('/DrManishGupta', function () {
    return Redirect::to('/dr-manish-gupta', 301);
});

Route::get('/DrMamtaGoel', function () {
    return Redirect::to('/dr-mamta-goel', 301);
});

Route::get('/DrAjaySinha', function () {
    return Redirect::to('/dr-ajay-sinha', 301);
});

Route::get('/DrSukhbirSingh', function () {
    return Redirect::to('/dr-sukhbir-singh', 301);
});
Route::get('/InternalMedicineEndocrinology', function () {
    return Redirect::to('/internal-medicine-endocrinology', 301);
});
Route::get('/DrSalsabeelSyed', function () {
    return Redirect::to('/dr-salsabeel-syed', 301);
});

Route::get('/blog/Breech-Babies-Causes-and-Complications', function () {
    return Redirect::to('/blog/breech-babies-causes-and-complications', 301);
});
Route::get('/blog/Deafness-Causes-Treatment-Options', function () {
    return Redirect::to('/blog/deafness-causes-treatment-options', 301);
});
Route::get('/blog/How-Does-the-Nuchal-Cord-Affect-The-Baby', function () {
    return Redirect::to('/blog/how-does-the-nuchal-cord-affect-the-baby', 301);
});
Route::get('/blog/Bariatric-Surgery-Some-Unknown-Facts-You-Must-Know', function () {
    return Redirect::to('/blog/bariatric-surgery-some-unknown-facts-you-must-know', 301);
});


Route::namespace('Frontend')->group(function(){
    
Route::get('blog/sitemap.xml', [BlogSitemapXmlController::class, 'sitemap'])->name('sitemap'); 
Route::get('/', [HomeController::class, 'index'])->name('/');

Route::get('about-us', [HomeController::class], 'aboutus')->name('about-us');
Route::get('landing-page', [HomeController::class, 'landingpage'])->name('landing-page');
Route::get('hip-replacement-surgery', [HomeController::class, 'hipreplacementsurgery'])->name('hip-replacement-surgery');
Route::get('knee-replacement-surgery', [HomeController::class, 'kneereplacementsurgery'])->name('knee-replacement-surgery');
Route::get('acl-tear-surgery', [HomeController::class, 'acltearsurgery'])->name('acl-tear-surgery');
Route::get('gallstone-surgery', [HomeController::class, 'gallstonesurgery'])->name('gallstone-surgery');
Route::get('peyronie-disease', [HomeController::class, 'peyroniedisease'])->name('peyronie-disease');
Route::get('male-infertility-lp', [HomeController::class, 'maleinfertilitylp'])->name('male-infertility-lp');
Route::get('urethral-stricture', [HomeController::class, 'urethralstricture'])->name('urethral-stricture');
Route::get('general-orthopedic', [HomeController::class, 'generalorthopedic'])->name('general-orthopedic');
Route::get('penile-implant', [HomeController::class, 'penileimplant'])->name('penile-implant');
Route::get('andrology-erectile', [HomeController::class, 'andrologyerectile'])->name('andrology-erectile');
Route::get('urology', [HomeController::class, 'urology'])->name('urology');
Route::get('maternity', [HomeController::class, 'maternity'])->name('maternity');
Route::get('general-surgery', [HomeController::class, 'generalsurgery'])->name('general-surgery');
Route::get('kidney-stone', [HomeController::class, 'kidneystone'])->name('kidney-stone');


Route::get('our-doctors', [HomeController::class, 'ourdoctors'])->name('our-doctors');
Route::get('make-an-appointment', [HomeController::class, 'makeanappointment'])->name('make-an-appointment');
Route::any('international-patients', [HomeController::class, 'internationalpatients'])->name('international-patients');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('insurance-and-tpa', [HomeController::class, 'insuranceandtpa'])->name('insurance-and-tpa');
Route::get('career', [HomeController::class, 'career'])->name('career');
Route::get('services', [HomeController::class, 'services'])->name('services');
Route::get('our-gallery', [HomeController::class, 'ourgallery'])->name('our-gallery');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
Route::get('errorpage', [HomeController::class, 'errorpage'])->name('errorpage');


Route::get('blog/facts-one-must-know-about-cochlear-implants', [HomeController::class, 'factsonemustknowaboutcochlearimplants'])->name('facts-one-must-know-about-cochlear-implants');
Route::get('blog/10-valuable-tips-to-follow-before-the-air-pollution-hits-your-throat', [HomeController::class, 'valuabletipstofollowbeforetheairpollutionhitsyourthroat'])->name('10-valuable-tips-to-follow-before-the-air-pollution-hits-your-throat');
Route::get('blog/10-important-signs-of-labor-pains', [HomeController::class, 'importantsignsoflaborpains'])->name('10-important-signs-of-labor-pains');
Route::get('blog/reasons-for-ovarian-cancer-and-treatment-options-from-our-experts', [HomeController::class, 'reasonsforovariancancerandtreatmentoptionsfromourexperts'])->name('reasons-for-ovarian-cancer-and-treatment-options-from-our-experts');
Route::get('blog/ten-surprisingly-common-things-that-causes-male-infertility', [HomeController::class, 'tensurprisinglycommonthingsthatcausesmaleinfertility'])->name('ten-surprisingly-common-things-that-causes-male-infertility');
Route::get('blog/the-third-trimester', [HomeController::class, 'thethirdtrimester'])->name('the-third-trimester');
Route::get('blog/deafness-causes-treatment-options', [HomeController::class, 'DeafnessCausesTreatmentOptions'])->name('deafness-causes-treatment-options');
Route::get('blog/tips-for-men-struggling-with-male-infertility', [HomeController::class, 'tipsformenstrugglingwithmaleinfertility'])->name('tips-for-men-struggling-with-male-infertility');
Route::get('blog/prostate-cancer-know-the-symptoms-and-treatment', [HomeController::class, 'prostatecancerknowthesymptomsandtreatment'])->name('prostate-cancer-know-the-symptoms-and-treatment');
Route::get('blog/prenatal-nutrition-tips', [HomeController::class, 'PrenatalNutritionTips'])->name('prenatal-nutrition-tips');
Route::get('blog/prevent-ear-infections', [HomeController::class, 'preventearinfections'])->name('prevent-ear-infections');
Route::get('blog/laparoscopic-gallbladder-surgery', [HomeController::class, 'laparoscopicgallbladdersurgery'])->name('laparoscopic-gallbladder-surgery');
Route::get('blog/how-does-the-nuchal-cord-affect-the-baby', [HomeController::class, 'HowDoestheNuchalCordAffectTheBaby'])->name('how-does-the-nuchal-cord-affect-the-baby');
Route::get('blog/kidney-stones-signs-symptoms', [HomeController::class, 'kidneystonessignssymptoms'])->name('kidney-stones-signs-symptoms');
Route::get('blog/gestational-diabetes-how-to-control-it-with-diet-exercise-and-more', [HomeController::class, 'gestationaldiabeteshowtocontrolitwithdietexerciseandmore'])->name('gestational-diabetes-how-to-control-it-with-diet-exercise-and-more');
Route::get('blog/bariatric-surgery-some-unknown-facts-you-must-know', [HomeController::class, 'BariatricSurgerySomeUnknownFactsYouMustKnow'])->name('bariatric-surgery-some-unknown-facts-you-must-know');
Route::get('blog/breech-babies-causes-and-complications', [HomeController::class, 'BreechBabiesCausesandComplications'])->name('breech-babies-causes-and-complications');
Route::get('blog/what-is-the-new-procedure-for-knee-replacement', [HomeController::class, 'whatisthenewprocedureforkneereplacement'])->name('what-is-the-new-procedure-for-knee-replacement');
Route::get('blog/know-the-correct-sitting-postures-during-1st-trimester-2nd-trimester-and-3rd-trimester-of-pregnancy', [HomeController::class, 'knowthecorrectsittingposturesduring1sttrimester2ndtrimesterand3rdtrimesterofpregnancy'])->name('know-the-correct-sitting-postures-during-1st-trimester-2nd-trimester-and-3rd-trimester-of-pregnancy');
Route::get('blog/tips-for-normal-delivery', [HomeController::class, 'tipsfornormaldelivery'])->name('tips-for-normal-delivery');
Route::get('blog/interview-dr-vinay-aggarwal', [HomeController::class, 'interviewdrvinayaggarwal'])->name('interview-dr-vinay-aggarwal');
Route::get('blog/varicocele-comman-cause-of-male-infertility-its-treatments', [HomeController::class, 'varicocelecommancauseofmaleinfertilityitstreatments'])->name('varicocele-comman-cause-of-male-infertility-its-treatments');
Route::get('blog/all-about-dental-crowns-uses-and-benefits', [HomeController::class, 'allaboutdentalcrownsusesandbenefits'])->name('all-about-dental-crowns-uses-and-benefits');
Route::get('blog/7-signs-you-should-make-an-appointment-with-your-gynaecologist', [HomeController::class, 'signsyoushouldmakeanappointmentwithyourgynaecologist'])->name('7-signs-you-should-make-an-appointment-with-your-gynaecologist');
Route::get('blog/common-gallbladder-problems-and-its-prevention', [HomeController::class, 'commongallbladderproblemsanditsprevention'])->name('common-gallbladder-problems-and-its-prevention');
Route::get('blog/how-to-get-rid-of-hemorrhoids-piles-symptoms-treatment', [HomeController::class, 'howtogetridofhemorrhoidspilessymptomstreatment'])->name('how-to-get-rid-of-hemorrhoids-piles-symptoms-treatment');
Route::get('blog/Some-Common-Dental-Infections-and-How-to-Prevent-Them', [HomeController::class, 'SomeCommonDentalInfectionsandHowtoPreventThem'])->name('Some-Common-Dental-Infections-and-How-to-Prevent-Them');
Route::get('blog/tips-for-breast-feeding-things-that-new-moms-should-know', [HomeController::class, 'tipsforbreastfeedingthingsthatnewmomsshouldknow'])->name('tips-for-breast-feeding-things-that-new-moms-should-know');
Route::get('blog/covid-19-vaccine-and-erectile-dysfunction', [HomeController::class, 'covid19vaccineanderectiledysfunction'])->name('covid-19-vaccine-and-erectile-dysfunction');
Route::get('blog/how-does-monsoon-affect-your-skin-common-skin-problems-during-monsoon', [HomeController::class, 'howdoesmonsoonaffectyourskincommonskinproblemsduringmonsoon'])->name('how-does-monsoon-affect-your-skin-common-skin-problems-during-monsoon');
Route::get('blog/common-ent-problems-during-monsoon-and-how-to-prevent-it', [HomeController::class, 'commonentproblemsduringmonsoonandhowtopreventit'])->name('common-ent-problems-during-monsoon-and-how-to-prevent-it');
Route::get('blog/ovarian-cyst-and-pregnancy-could-an-ovarian-cyst-cause-infertility', [HomeController::class, 'ovariancystandpregnancycouldanovariancystcauseinfertility'])->name('ovarian-cyst-and-pregnancy-could-an-ovarian-cyst-cause-infertility');
Route::get('blog/what-is-hysterectomy-purpose-and-procedure', [HomeController::class, 'whatishysterectomypurposeandprocedure'])->name('what-is-hysterectomy-purpose-and-procedure');
Route::get('blog/hypospadias-symptoms-types-and-treatment', [HomeController::class, 'hypospadiassymptomstypesandtreatment'])->name('hypospadias-symptoms-types-and-treatment');
Route::get('blog/best-gynecologist-hospital-in-delhi', [HomeController::class, 'bestgynecologisthospitalindelhi'])->name('best-gynecologist-hospital-in-delhi');
Route::get('blog/best-joint-replacement-surgeon-in-delhi', [HomeController::class, 'bestjointreplacementsurgeonindelhi'])->name('best-joint-replacement-surgeon-in-delhi');
Route::get('blog/rules-for-a-healthy-vagina', [HomeController::class, 'rulesforahealthyvagina'])->name('10-rules-for-a-healthy-vagina');
Route::get('blog/everything-you-need-to-know-about-covid-and-pregnancy', [HomeController::class, 'everythingyouneedtoknowaboutcovidandpregnancy'])->name('everything-you-need-to-know-about-covid-and-pregnancy');
Route::get('blog/what-types-of-pregnancy-exercises-are-ideal-for-a-woman', [HomeController::class, 'whattypesofpregnancyexercisesareidealforawoman'])->name('what-types-of-pregnancy-exercises-are-ideal-for-a-woman');
Route::get('blog/is-hypospadias-surgery-painful-for-kids', [HomeController::class, 'ishypospadiassurgerypainfulforkids'])->name('is-hypospadias-surgery-painful-for-kids');
Route::get('blog/which-type-of-hypospadias-is-the-most-severe', [HomeController::class, 'whichtypeofhypospadiasisthemostsevere'])->name('which-type-of-hypospadias-is-the-most-severe');
Route::get('blog/things-should-consider-when-looking-for-a-hospital-for-your-pregnancy', [HomeController::class, 'thingsshouldconsiderwhenlookingforahospitalforyourpregnancy'])->name('things-should-consider-when-looking-for-a-hospital-for-your-pregnancy');
Route::get('blog/what-is-urethral-stricture-disease', [HomeController::class, 'whatisurethralstricturedisease'])->name('what-is-urethral-stricture-disease');
Route::get('blog/do-penile-enlargement-surgeries-work', [HomeController::class, 'dopenileenlargementsurgerieswork'])->name('do-penile-enlargement-surgeries-work');
Route::get('blog/what-are-uterine-fibroids', [HomeController::class, 'whatareuterinefibroids'])->name('what-are-uterine-fibroids');
Route::get('blog/can-endometriosis-get-worse-as-you-get-older', [HomeController::class, 'canendometriosisgetworseasyougetolder'])->name('can-endometriosis-get-worse-as-you-get-older');
Route::get('blog/premature-birth-risk-and-complications', [HomeController::class, 'prematurebirthriskandcomplications'])->name('premature-birth-risk-and-complications');
Route::get('blog/pros-and-cons-of-penile-enlargement-surgery', [HomeController::class, 'prosandconsofpenileenlargementsurgery'])->name('pros-and-cons-of-penile-enlargement-surgery');
Route::get('blog/reasons-to-see-a-urologist', [HomeController::class, 'reasonstoseeaurologist'])->name('reasons-to-see-a-urologist');
Route::get('blog/benefits-of-plastic-surgery-procedure', [HomeController::class, 'benefitsofplasticsurgeryprocedure'])->name('benefits-of-plastic-surgery-procedure');
Route::get('blog/indications-you-need-urethroplasty', [HomeController::class, 'indicationsyouneedurethroplasty'])->name('indications-you-need-urethroplasty');
Route::get('blog/your-children-need-hypospadias-surgery', [HomeController::class, 'yourchildrenneedhypospadiassurgery'])->name('your-children-need-hypospadias-surgery');
Route::get('blog/peyronies-disease', [HomeController::class, 'peyroniesdisease'])->name('peyronies-disease');
Route::get('blog/benefits-of-penile-implants', [HomeController::class, 'benefitsofpenileimplants'])->name('benefits-of-penile-implants');
Route::get('blog/robotic-surgery-in-urology', [HomeController::class, 'roboticsurgeryinurology'])->name('robotic-surgery-in-urology');
Route::get('blog/benefits-wisdom-teeth-removal', [HomeController::class, 'benefitswisdomteethremoval'])->name('benefits-wisdom-teeth-removal');
Route::get('blog/advantages-urethroplasty-surgery', [HomeController::class, 'advantagesurethroplastysurgery'])->name('advantages-urethroplasty-surgery');
Route::get('blog/dental-implant-types', [HomeController::class, 'dentalimplanttypes'])->name('dental-implant-types');
Route::get('blog/understanding-enlarged-prostate', [HomeController::class, 'understandingenlargedprostate'])->name('understanding-enlarged-prostate');
Route::get('blog/common-dental-infections', [HomeController::class, 'commondentalinfections'])->name('common-dental-infections');
Route::get('blog/uti-in-children', [HomeController::class, 'utiinchildren'])->name('uti-in-children');
Route::get('blog/bariatric-surgery-impact', [HomeController::class, 'bariatricsurgeryimpact'])->name('bariatric-surgery-impact');
Route::get('blog/latest-innovations-kidney', [HomeController::class, 'latestinnovationskidney'])->name('latest-innovations-kidney');
Route::get('blog/hypospadias-surgery-repair-time', [HomeController::class, 'hypospadiassurgeryrepairtime'])->name('hypospadias-surgery-repair-time');
Route::get('blog/shoulder-injury-in-sports', [HomeController::class, 'shoulderinjuryinsports'])->name('shoulder-injury-in-sports');
Route::get('blog/relieve-nerve-pain-hand', [HomeController::class, 'relievenervepainhand'])->name('relieve-nerve-pain-hand');
Route::get('blog/best-urology-hospitals', [HomeController::class, 'besturologyhospitals'])->name('best-urology-hospitals');



Route::get('demo-dental', [HomeController::class, 'demodental'])->name('demo-dental');
Route::get('hands-and-nerve', [HomeController::class, 'handsnerve'])->name('hands-and-nerve');
Route::get('urology-hypospadias', [HomeController::class, 'urologyhypospadias'])->name('urology-hypospadias');
Route::get('urology-and-andrology', [HomeController::class, 'urologyandandrology'])->name('urology-and-andrology');
Route::get('kidney-stones', [HomeController::class, 'kidneystones'])->name('kidney-stones');
Route::get('enlarged-prostate', [HomeController::class, 'enlargedprostate'])->name('enlarged-prostate');
Route::get('male-infertility', [HomeController::class, 'maleinfertility'])->name('male-infertility');
Route::get('urology-erectile-dysfunction', [HomeController::class, 'urologyerectiledysfunction'])->name('urology-erectile-dysfunction');
Route::get('hypospadias', [HomeController::class, 'hypospadias'])->name('hypospadias');
Route::get('obstetricsand-gynecology', [HomeController::class, 'obstetricsandgynecology'])->name('obstetricsand-gynecology');
Route::get('ovarian-cryst-treatment', [HomeController::class, 'ovariancrysttreatment'])->name('ovarian-cryst-treatment');
Route::get('ovarian-cyst-treatment', [HomeController::class, 'ovariancysttreatment'])->name('ovarian-cyst-treatment');
Route::get('fibroid-treatment', [HomeController::class, 'fibroidtreatment'])->name('fibroid-treatment');
Route::get('endometriosis-treatment', [HomeController::class, 'endometriosistreatment'])->name('endometriosis-treatment');
Route::get('mother-and-child-care', [HomeController::class, 'motherandchildcare'])->name('mother-and-child-care');
Route::get('infertilitytreatment', [HomeController::class, 'infertilitytreatment'])->name('infertilitytreatment');
Route::get('bariatric-surgery', [HomeController::class, 'bariatricsurgery'])->name('bariatric-surgery');
Route::get('advanced-laparoscopic-general-surgery', [HomeController::class, 'advancedlaparoscopicgeneralsurgery'])->name('advanced-laparoscopic-general-surgery');
Route::get('fistula-treatment', [HomeController::class, 'fistulatreatment'])->name('fistula-treatment');
Route::get('piles-treatment', [HomeController::class, 'pilestreatment'])->name('piles-treatment');
Route::get('orthopaedic', [HomeController::class, 'orthopaedic'])->name('orthopaedic');
Route::get('paeds-orthopaedics', [HomeController::class, 'paedsorthopaedics'])->name('paeds-orthopaedics');
Route::get('neontology-and-paeds', [HomeController::class, 'neontologyandpaeds'])->name('neontology-and-paeds');
Route::get('best-ent-hospital', [HomeController::class, 'bestenthospital'])->name('best-ent-hospital');
Route::get('cochlear-implants', [HomeController::class, 'cochlearimplants'])->name('cochlear-implants');
Route::get('stemcellandregenerativemedicine', [HomeController::class, 'stemcellandregenerativemedicine'])->name('stemcellandregenerativemedicine');
Route::get('department-of-dermatology-cosmetology-plastic-surgery', [HomeController::class, 'DepartmentofDermatologyCosmetologyPlasticSurgery'])->name('department-of-dermatology-cosmetology-plastic-surgery');
Route::get('internal-medicine-endocrinology', [HomeController::class, 'InternalMedicineEndocrinology'])->name('internal-medicine-endocrinology');
Route::get('department-of-ophthalmology', [HomeController::class, 'DepartmentofOphthalmology'])->name('department-of-ophthalmology');
Route::get('dental-department', [HomeController::class, 'DentalDepartment'])->name('dental-department');
Route::get('health-check-up', [HomeController::class, 'healthcheckup'])->name('health-check-up');
Route::get('vaginal-tightening-surgery', [HomeController::class, 'vaginaltighteningsurgery'])->name('vaginal-tightening-surgery');
Route::get('sports-injury-treatment', [HomeController::class, 'sportsinjurytreatment'])->name('sports-injury-treatment');
Route::get('sinus-infection-treatment', [HomeController::class, 'sinusinfectiontreatment'])->name('sinus-infection-treatment');
Route::get('hymen-repair-surgery', [HomeController::class, 'hymenrepairsurgery'])->name('hymen-repair-surgery');
Route::get('allurion-balloon-surgery', [HomeController::class, 'allurionballoonsurgery'])->name('allurion-balloon-surgery');
Route::get('penile-enlargement-surgery', [HomeController::class, 'penileenlargementsurgery'])->name('penile-enlargement-surgery');




Route::get('dr-guruditta-khurana', [HomeController::class, 'drgurudittakhurana'])->name('dr-guruditta-khurana');
Route::get('dr-vineet-kaul', [HomeController::class, 'drvineetkaul'])->name('dr-vineet-kaul');
Route::get('dr-subi-singh', [HomeController::class, 'drsubisingh'])->name('dr-subi-singh');
Route::get('dr-naman-aggarwal', [HomeController::class, 'drnamanaggarwal'])->name('dr-naman-aggarwal');
Route::get('dr-sanjeev-gupta', [HomeController::class, 'drsanjeevgupta'])->name('dr-sanjeev-gupta');
Route::get('dr-saurabh-kapoor', [HomeController::class, 'drsaurabhkapoor'])->name('dr-saurabh-kapoor');
Route::get('dr-gautam-banga', [HomeController::class, 'drgautambanga'])->name('dr-gautam-banga');
Route::get('dr-raj-kumar-singh', [HomeController::class, 'drrajkumarsingh'])->name('dr-raj-kumar-singh');
Route::get('dr-sahil-singla', [HomeController::class, 'drsahilsingla'])->name('dr-sahil-singla');
Route::get('dr-vishal-dutt-gour', [HomeController::class, 'drvishalduttgour'])->name('dr-vishal-dutt-gour');
Route::get('delhi/doctor/vishal-dutt-gour-urologist', [HomeController::class, 'drvishalduttgoururologist'])->name('dr-vishal-dutt-goururologist');
Route::get('dr-manish-gupta', [HomeController::class, 'DrManishGupta'])->name('dr-manish-gupta');
Route::get('dr-lalit-bafna', [HomeController::class, 'drlalitbafna'])->name('dr-lalit-bafna');
Route::get('dr-nishant-soni', [HomeController::class, 'drnishantsoni'])->name('dr-nishant-soni');
Route::get('dr-shivanisachdevgour', [HomeController::class, 'drshivanisachdevgour'])->name('dr-shivanisachdevgour');
Route::get('dr-dhwani-mago', [HomeController::class, 'DrDhwaniMago'])->name('dr-dhwani-mago');
Route::get('dr-mamta-goel', [HomeController::class, 'DrMamtaGoel'])->name('dr-mamta-goel');
Route::get('drsumeetshah', [HomeController::class, 'drsumeetshah'])->name('drsumeetshah');
Route::get('dr-amit', [HomeController::class, 'dramit'])->name('dr-amit');
Route::get('dr-sirisha-singh', [HomeController::class, 'DrSirishaSingh'])->name('dr-sirisha-singh');
Route::get('dr-sukhbir-singh', [HomeController::class, 'DrSukhbirSingh'])->name('dr-sukhbir-singh');
Route::get('dr-himanshu-shekhar', [HomeController::class, 'drhimanshushekhar'])->name('dr-himanshu-shekhar');
Route::get('dr-sanjiv-gupta', [HomeController::class, 'DrSanjivGupta'])->name('dr-sanjiv-gupta');
Route::get('dr-salsabeel-syed', [HomeController::class, 'DrSalsabeelSyed'])->name('dr-salsabeel-syed');
Route::get('dr-ajay-sinha', [HomeController::class, 'DrAjaySinha'])->name('dr-ajay-sinha');
Route::get('drvishakhamunjal', [HomeController::class, 'drvishakhamunjal'])->name('drvishakhamunjal');
Route::get('dr-niraj-kumar-nikunj', [HomeController::class, 'drnirajkumarnikunj'])->name('dr-niraj-kumar-nikunj');
Route::get('dr-shilpi-singh', [HomeController::class, 'drshilpisingh'])->name('dr-shilpi-singh');
Route::get('dr-ruchi-tandon', [HomeController::class, 'drruchitandon'])->name('dr-ruchi-tandon');
Route::get('dr-vicky-kuldeep', [HomeController::class, 'drvickykuldeep'])->name('dr-vicky-kuldeep');
Route::get('dr-aashima-chopra', [HomeController::class, 'draashimachopra'])->name('dr-aashima-chopra');
Route::get('dr-s-sen-gupta', [HomeController::class, 'drssengupta'])->name('dr-s-sen-gupta');
Route::get('dr-gurmeet-bansal', [HomeController::class, 'drgurmeetbansal'])->name('dr-gurmeet-bansal');
Route::get('dr-harsh-priyadharshi', [HomeController::class, 'drharshpriyadharshi'])->name('dr-harsh-priyadharshi');
Route::get('dr-nabanita-chatterjee', [HomeController::class, 'drnabanitachatterjee'])->name('dr-nabanita-chatterjee');
Route::get('dr-rohit-krishna', [HomeController::class, 'drrohitkrishna'])->name('dr-rohit-krishna');
Route::get('dr-lokesh-handa', [HomeController::class, 'drlokeshhanda'])->name('dr-lokesh-handa');
Route::get('dr-ashutosh-misra', [HomeController::class, 'drashutoshmisra'])->name('dr-ashutosh-misra');
Route::get('dr-gayatri-bala-juneja', [HomeController::class, 'drgayatribalajuneja'])->name('dr-gayatri-bala-juneja');
Route::get('dr-shitij-arora', [HomeController::class, 'drshitijarora'])->name('dr-shitij-arora');
Route::get('dr-hena-kausar', [HomeController::class, 'drhenakausar'])->name('dr-hena-kausar');
Route::get('dr-rakesh-kumar-general-surgeon', [HomeController::class, 'drrakeshkumargeneralsurgeon'])->name('dr-rakesh-kumar-general-surgeon');



Route::post('contact-form', [HomeController::class, 'contactForm']);
Route::post('online-consultation', [HomeController::class, 'onlineConsultation']);
Route::post('book-an-appointment', [HomeController::class, 'bookAnAppointment']);
Route::post('book-appointment-services', [HomeController::class, 'bookappointmentServices'])->name('book-appointment-services');
Route::get('thank-you', [HomeController::class, 'thankyou'])->name('thank-you');
Route::get('thankyou', [HomeController::class, 'thankyou2'])->name('thankyou');
Route::get('our-team', [HomeController::class, 'ourteam'])->name('our-team');

//gorgaon


Route::get('gurgaon/', [GurgaonController::class, 'index'])->name('gurgaon.index');
Route::get('gurgaon/about-us', [GurgaonController::class, 'aboutus'])->name('gurgaon.about-us');
Route::get('gurgaon/our-doctors', [GurgaonController::class, 'ourdoctors'])->name('gurgaon.our-doctors');

Route::get('gurgaon/make-an-appointment', [GurgaonController::class, 'makeanappointment'])->name('gurgaon.make-an-appointment');

Route::any('gurgaon/international-patients', [GurgaonController::class, 'internationalpatients'])->name('gurgaon.international-patients');
Route::get('gurgaon/contact', [GurgaonController::class, 'contact'])->name('gurgaon.contact');
Route::get('gurgaon/insurance-and-tpa', [GurgaonController::class, 'insuranceandtpa'])->name('gurgaon.insurance-and-tpa');
Route::get('gurgaon/career', [GurgaonController::class, 'career'])->name('gurgaon.career');
Route::get('gurgaon/services', [GurgaonController::class, 'services'])->name('gurgaon.services');
Route::get('gurgaon/our-gallery', [GurgaonController::class, 'ourgallery'])->name('gurgaon.our-gallery');
Route::get('gurgaon/errorpage', [GurgaonController::class, 'errorpage'])->name('gurgaon.errorpage');

Route::get('gurgaon/gallstone', [GurgaonController::class, 'gallstone'])->name('gurgaon.gallstone');
Route::get('gurgaon/hernia-surgery', [GurgaonController::class, 'herniasurgery'])->name('gurgaon.hernia-surgery');
Route::get('gurgaon/piles-treatment', [GurgaonController::class, 'pilestreatment'])->name('gurgaon.piles-treatment');
Route::get('gurgaon/fistula-treatment', [GurgaonController::class, 'fistulatreatment'])->name('gurgaon.fistula-treatment');
Route::get('gurgaon/fissure-surgery', [GurgaonController::class, 'fissuresurgery'])->name('gurgaon.fissure-surgery');
Route::get('gurgaon/pilonidal-sinus', [GurgaonController::class, 'pilonidalsinus'])->name('gurgaon.pilonidal-sinus');
Route::get('gurgaon/sports-injury-treatment', [GurgaonController::class, 'sportsinjurytreatment'])->name('gurgaon.sports-injury-treatment');
Route::get('gurgaon/pediatric-orthopedic', [GurgaonController::class, 'pediatricorthopedic'])->name('gurgaon.pediatric-orthopedic');
Route::get('gurgaon/orthopedic-hospitals', [GurgaonController::class, 'orthopedichospitals'])->name('gurgaon.orthopedic-hospitals');
Route::get('gurgaon/vaginal-tightening', [GurgaonController::class, 'vaginaltightening'])->name('gurgaon.vaginal-tightening');
Route::get('gurgaon/urology-treatment', [GurgaonController::class, 'urologytreatment'])->name('gurgaon.urology-treatment');
Route::get('gurgaon/andrology-treatment', [GurgaonController::class, 'andrologytreatment'])->name('gurgaon.andrology-treatment');
Route::get('gurgaon/hymenoplasty-surgery', [GurgaonController::class, 'hymenoplastysurgery'])->name('gurgaon.hymenoplasty-surgery');
Route::get('gurgaon/kidney-stone-treatment', [GurgaonController::class, 'kidneystonetreatment'])->name('gurgaon.kidney-stone-treatment');
Route::get('gurgaon/hypospadias-surgery', [GurgaonController::class, 'hypospadiassurgery'])->name('gurgaon.hypospadias-surgery');
Route::get('gurgaon/enlarged-prostate', [GurgaonController::class, 'enlargedprostate'])->name('gurgaon.enlarged-prostate');
Route::get('gurgaon/male-infertility-treatment', [GurgaonController::class, 'maleinfertilitytreatment'])->name('gurgaon.male-infertility-treatment');
Route::get('gurgaon/erectile-dysfunction-treatment', [GurgaonController::class, 'erectiledysfunctiontreatment'])->name('gurgaon.erectile-dysfunction-treatment');
Route::get('gurgaon/dental-implants', [GurgaonController::class, 'dentalimplants'])->name('gurgaon.dental-implants');
Route::get('gurgaon/bariatric-surgery', [GurgaonController::class, 'bariatricsurgery'])->name('gurgaon.bariatric-surgery');
Route::get('gurgaon/penile-enlargement-surgery', [GurgaonController::class, 'penileenlargementsurgery'])->name('gurgaon.penile-enlargement-surgery');
Route::get('gurgaon/cosmetic-and-plastic-surgery', [GurgaonController::class, 'cosmeticandplasticsurgery'])->name('gurgaon.cosmetic-and-plastic-surgery');
Route::get('gurgaon/allurion-balloon-surgery', [GurgaonController::class, 'allurionballoonsurgery'])->name('gurgaon.allurion-balloon-surgery');
Route::get('gurgaon/ovarian-cyst-treatment', [GurgaonController::class, 'ovariancysttreatment'])->name('gurgaon.ovarian-cyst-treatment');
Route::get('gurgaon/uterine-fibroid-treatment', [GurgaonController::class, 'uterinefibroidtreatment'])->name('gurgaon.uterine-fibroid-treatment');
Route::get('gurgaon/endometriosis-treatment', [GurgaonController::class, 'endometriosistreatment'])->name('gurgaon.endometriosis-treatment');
Route::get('gurgaon/health-check-up', [GurgaonController::class, 'healthcheckup'])->name('gurgaon.health-check-up');
Route::get('gurgaon/hand-and-nerve-surgery', [GurgaonController::class, 'handandnervesurgery'])->name('gurgaon.hand-and-nerve-surgery');
Route::get('gurgaon/sinus-infection-treatment', [GurgaonController::class, 'sinusinfectiontreatment'])->name('gurgaon.sinus-infection-treatment');
Route::get('gurgaon/ear-nose-throat-ent-specialist', [GurgaonController::class, 'earnosethroatentspecialist'])->name('gurgaon.ear-nose-throat-ent-specialist');
Route::get('gurgaon/cochlear-implants', [GurgaonController::class, 'cochlearimplants'])->name('gurgaon.cochlear-implants');
Route::get('gurgaon/obstetrics-and-gynecology', [GurgaonController::class, 'obstetricsandgynecology'])->name('gurgaon.obstetrics-and-gynecology');
Route::get('gurgaon/dr-shambhav-chandra', [GurgaonController::class, 'drshambhavchandra'])->name('gurgaon.dr-shambhav-chandra');
Route::get('gurgaon/dr-yash-bhatia', [GurgaonController::class, 'dryashbhatia'])->name('gurgaon.dr-yash-bhatia');
Route::get('gurgaon/dr-pawan-sharma', [GurgaonController::class, 'drpawansharma'])->name('gurgaon.dr-pawan-sharma');



Route::get('gurgaon/dr-vineet-kaul', [GurgaonController::class, 'drvineetkaul'])->name('gurgaon.dr-vineet-kaul');
//Route::get('dr-rajesh-bawari', [GurgaonController::class, 'drrajeshbawari'])->name('dr-rajesh-bawari');
Route::get('gurgaon/dr-vishal-dutt-gour', [GurgaonController::class, 'drvishalduttgour'])->name('gurgaon.dr-vishal-dutt-gour');
//Route::get('dr-juhee-jain', [GurgaonController::class, 'drjuheejain'])->name('dr-juhee-jain');
Route::get('gurgaon/dr-nalini-gupta', [GurgaonController::class, 'drnalinigupta'])->name('gurgaon.dr-nalini-gupta');
Route::get('gurgaon/dr-itishree-gupta', [GurgaonController::class, 'dritishreegupta'])->name('gurgaon.dr-itishree-gupta');
Route::get('gurgaon/dr-punit-dilawari', [GurgaonController::class, 'drpunitdilawari'])->name('gurgaon.dr-punit-dilawari');
// Route::get('dr-mir-asif', [GurgaonController::class, 'drmirasif'])->name('dr-mir-asif');
//Route::get('dr-akansha-saxena', [GurgaonController::class, 'drakanshasaxena'])->name('dr-akansha-saxena');
Route::get('gurgaon/dr-ankita-mittal', [GurgaonController::class, 'drankitamittal'])->name('gurgaon.dr-ankita-mittal');
Route::get('gurgaon/dr-nisha-ohri', [GurgaonController::class, 'drnishaohri'])->name('gurgaon.dr-nisha-ohri');
Route::get('gurgaon/dr-vikrant-singh', [GurgaonController::class, 'drvikrantsingh'])->name('gurgaon.dr-vikrant-singh');
Route::get('gurgaon/dr-daipayan-ghosh', [GurgaonController::class, 'drdaipayanghosh'])->name('gurgaon.dr-daipayan-ghosh');
Route::get('gurgaon/dr-shweta-nawal', [GurgaonController::class, 'drshwetanawal'])->name('gurgaon.dr-shweta-nawal');
//Route::get('dr-deepanshu-gupta', [GurgaonController::class, 'drdeepanshugupta'])->name('dr-deepanshu-gupta');
Route::get('gurgaon/dr-shivanisachdevgour', [GurgaonController::class, 'drshivanisachdevgour'])->name('gurgaon.dr-shivanisachdevgour');
Route::get('gurgaon/dr-gayatri-bala-juneja', [GurgaonController::class, 'drgayatribalajuneja'])->name('gurgaon.dr-gayatri-bala-juneja');
Route::get('gurgaon/dr-rajiv-gaur', [GurgaonController::class, 'drrajivgaur'])->name('gurgaon.dr-rajiv-gaur');
Route::get('gurgaon/dr-himanshu-shekhar', [GurgaonController::class, 'drhimanshushekhar'])->name('gurgaon.dr-himanshu-shekhar');
//Route::get('dr-mayank-chugh', [GurgaonController::class, 'drmayankchugh'])->name('dr-mayank-chugh');
Route::get('gurgaon/dr-kashmiri-lal-kathuria', [GurgaonController::class, 'drkashmirilalkathuria'])->name('gurgaon.dr-kashmiri-lal-kathuria');
Route::get('gurgaon/dr-h-j-nirdesh-orthopedist', [GurgaonController::class, 'drhjnirdeshorthopedist'])->name('gurgaon.dr-h-j-nirdesh-orthopedist');
//Route::get('dr-h-j-nirdesh-orthopedic', [GurgaonController::class, 'drhjnirdeshorthopedic'])->name('dr-h-j-nirdesh-orthopedic');
// Route::get('dr-shivam-sharma', [GurgaonController::class, 'drshivamsharma'])->name('dr-shivam-sharma');
Route::get('gurgaon/dr-indernath-verma-urologist', [GurgaonController::class, 'drindernathvermaurologist'])->name('gurgaon.dr-indernath-verma-urologist');
//Route::get('dr-rohit-jain-plastic-surgeon', [GurgaonController::class, 'drrohitjainplasticsurgeon'])->name('dr-rohit-jain-plastic-surgeon');
Route::get('gurgaon/dr-mayank-garg-urologist', [GurgaonController::class, 'drmayankgargurologist'])->name('gurgaon.dr-mayank-garg-urologist');


Route::post('gurgaon/contact-form', [GurgaonController::class, 'contactForm']);
Route::post('gurgaon/online-consultation', [GurgaonController::class, 'onlineConsultation']);
Route::post('gurgaon/book-an-appointment', [GurgaonController::class, 'bookAnAppointment']);
Route::post('gurgaon/book-appointment-services', [GurgaonController::class, 'bookappointmentServices'])->name('gurgaon.book-appointment-services');

Route::get('gurgaon/thank-you', [GurgaonController::class, 'thankyou'])->name('gurgaon.thank-you');
Route::get('gurgaon/blog', [GurgaonController::class, 'blog'])->name('gurgaon.blog');


Route::post('sendMailTwo', [HomeController::class, 'sendMailTwo']);
Route::post('sendMailThree', [HomeController::class, 'sendMailThree']);
Route::post('sendMailTwogurgaon', [HomeController::class, 'sendMailTwogurgaon']);
Route::post('sendMailThreegurgaon', [HomeController::class, 'sendMailThreegurgaon']);
Route::get('thank-you-lp', [HomeController::class, 'thankyoulp'])->name('thank-you-lp');
Route::get('fistula-surgery-in-gurgaon-h', [HomeController::class, 'fistulasurgeryingurgaonh'])->name('fistula-surgery-in-gurgaon-h');
Route::get('piles-treatment-cost-in-gurgaon', [HomeController::class, 'pilestreatmentcostingurgaon'])->name('piles-treatment-cost-in-gurgaon');
Route::get('best-doctor-for-piles-treatment-in-gurgaon', [HomeController::class, 'bestdoctorforpilestreatmentingurgaon'])->name('best-doctor-for-piles-treatment-in-gurgaon');
Route::get('piles-surgery-cost-in-gurgaon-h', [HomeController::class, 'pilessurgerycostingurgaonh'])->name('piles-surgery-cost-in-gurgaon-h');
Route::get('penis-enlargement-in-delhi', [HomeController::class, 'penisenlargementindelhi'])->name('penis-enlargement-in-delhi');
Route::get('brachial-plexus', [HomeController::class, 'brachialplexus'])->name('brachial-plexus');
Route::get('hand-and-nerve', [HomeController::class, 'handandnerve'])->name('hand-and-nerve');



});
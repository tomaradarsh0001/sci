@extends('frontend.layouts.main')

@section('main-container')

@section('define_robots', 'index, follow')

@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')



</head>

<style>

    #faq .card .btn-link:before{

        background: url('public/assets/images/arrow-down-circle.png');

    }

    .about-tab-text ul li:before {

        background: url('public/assets/images/check.png');

        background-size: cover;

    }

    table, th, td {

      border:1px solid black;

      padding:5px 10px;  

    }

</style>

<body>

    

<div class="bottom-sticky-contact">
    <a href="https://wa.me/+919354471030" target="_blank" class="whatsapp_btn"><i class="fa fa-whatsapp"></i> Get Cost on Whatsapp</a>
    <a href="tel:+919354471030" class="bottom-phone"><i class="fa fa-phone"></i> Phone</a>
  </div>

                <div id="fixed-social" class="float">

    <div class="icon_fixed">

        <a href="https://wa.me/+919354471030" class="fixed-whatsapp" target="_blank"><i class="fa fa-whatsapp"></i> <span>Whatsapp</span></a>

    </div>

    <div class="icon_fixed red_contact">

        <a href="tel:+919354471030" class="fixed-phone"><i class="fa fa-phone"></i> <span>Phone</span></a>

    </div>

</div>



<div class="page-content">

    <!--Hero section-->

    <div class="section mt-0 position-relative" id="form">

        <div class="hero-wrap">

            <div class="container">

                <div class="row">

                    <div class="col-md-3"></div>

                    <div class="col-md-5 d-flex align-items-center">

                        <div class="hero-text">

                            <h1>Latest Hands & Nerve Surgical Treatments</h1>

                            <ul class="stats-list">

                                <li class="stats-item">

                                    <div class="stats-box">

                                        <img src="{{asset('assets/images/check.png')}}" alt="" width="100%" class="img-fluid" />Highly Experienced and skilled surgeons

                                    </div>

                                </li>

                                <li class="stats-item">

                                    <div class="stats-box">

                                        <img src="{{asset('assets/images/check.png')}}" alt="" width="100%" class="img-fluid" />Affordable Packages & High Quality Implants

                                    </div>

                                </li>

                                <li class="stats-item">

                                    <div class="stats-box">

                                        <img src="{{asset('assets/images/check.png')}}" alt="" width="100%" class="img-fluid" />All Major insurance and No Cost EMI 

                                    </div>

                                </li>

                               

                                

                            </ul>

                        </div>

                    </div>

                    <div class="col-md-4">

                    <div id='crmWebToEntityForm' class='zcwf_lblLeft crmWebToEntityForm' style='background-color: white;color: black;'>

  <meta name='viewport' content='width=device-width, initial-scale=1.0'>

   <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>

   <h3>Consult Now</h3>

<form id='webform665927000000872029' action='https://crm.zoho.in/crm/WebToLeadForm' name=WebToLeads665927000000872029 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory665927000000872029()' accept-charset='UTF-8'>

 <input type='text' style='display:none;' name='xnQsjsdp' value='8cd546331f8b1e84e8a6a4ab71191e29830abae8c067b737154af47a8cc9e734'></input> 

 <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>

 <input type='text' style='display:none;' name='xmIwtLD' value='77d817c16bf8e0f1fabf280094645c0c801a3b1bba16bcecbc9cd6a551c27b672acd01d37224a43cfede0354814861be'></input> 

 <input type='text'  style='display:none;' name='actionType' value='TGVhZHM='></input>

 <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;scihospital.com&#x2f;thank-you' > </input>

	 

<div class='zcwf_title' style='color: black; font-family:Arial;'></div><div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='Last_Name'>Name<span style='color:red;'>*</span></label></div><div class='zcwf_col_fld'><input type='text' placeholder="Full Name" id='Last_Name' name='Last Name' maxlength='80'></input><div class='zcwf_col_help'></div></div></div><div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='LEADCF15'>Phone Number</label></div><div class='zcwf_col_fld'><input type='text' placeholder="Mobile" id='LEADCF15' name='LEADCF15' maxlength='30'></input><div class='zcwf_col_help'></div></div></div><div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='LEADCF11'>Location</label></div><div class='zcwf_col_fld'><select class='zcwf_col_fld_slt' id='LEADCF11' name='LEADCF11'  >

			<option value='-None-'>Location</option>

			<option value='Gurgaon'>Gurgaon</option>

			<option value='Greater&#x20;Kailash,&#x20;Delhi'>Greater Kailash, Delhi</option>

			<!--<option value='Noida'>Noida</option>-->

		</select><div class='zcwf_col_help'></div></div></div><div class='zcwf_row'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='LEADCF4'>Tell us your query</label></div><div class='zcwf_col_fld'><textarea id='Description' type='text'  placeholder="Tell us your Symptoms" id='LEADCF4' name='LEADCF4' maxlength='255'></textarea><div class='zcwf_col_help'></div></div></div><div class='zcwf_row wfrm_fld_dpNn'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='LEADCF13'>Speciality Type</label></div><div class='zcwf_col_fld'><input type='text' style="display:none;" id='LEADCF13' name='LEADCF13' maxlength='255' value='Other'></input><div class='zcwf_col_help'></div></div></div><div class='zcwf_row wfrm_fld_dpNn'><div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label for='LEADCF12'>Landing Page URL</label></div><div class='zcwf_col_fld'><input type='text' id='LEADCF12' name='LEADCF12' style="display:none;" maxlength='450' value='https&#x3a;&#x2f;&#x2f;scihospital.com&#x2f;'></input><div class='zcwf_col_help'></div></div></div><div class='zcwf_row'><div class='zcwf_col_lab'></div><div class='zcwf_col_fld'><input type='submit' id='formsubmit' class='formsubmit zcwf_button' value='Book Appointment' title='Submit'><input type='reset' class='zcwf_button' name='reset' value='Reset' title='Reset'></div></div>

	<script>



 	  function checkMandatory665927000000872029() {

		var mndFileds = new Array('Last Name');

		var fldLangVal = new Array('Name');

		for(i=0;i<mndFileds.length;i++) {

		  var fieldObj=document.forms['WebToLeads665927000000872029'][mndFileds[i]];

		  if(fieldObj) {

			if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {

			 if(fieldObj.type =='file')

				{ 

				 alert('Please select a file to upload.'); 

				 fieldObj.focus(); 

				 return false;

				} 

			alert(fldLangVal[i] +' cannot be empty.'); 

   	   	  	  fieldObj.focus();

   	   	  	  return false;

			}  else if(fieldObj.nodeName=='SELECT') {

  	   	   	 if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {

				alert(fldLangVal[i] +' cannot be none.'); 

				fieldObj.focus();

				return false;

			   }

			} else if(fieldObj.type =='checkbox'){

 	 	 	 if(fieldObj.checked == false){

				alert('Please accept  '+fldLangVal[i]);

				fieldObj.focus();

				return false;

			   } 

			 } 

			 try {

			     if(fieldObj.name == 'Last Name') {

				name = fieldObj.value;

 	 	 	    }

			} catch (e) {}

		    }

		}

	var urlparams = new URLSearchParams( window.location.search);

	if(urlparams.has('service') && (urlparams.get('service')==='smarturl')){

		var webform = document.getElementById('webform665927000000872029');

		 var service =  urlparams.get('service'); 

		var smarturlfield = document.createElement('input');

		smarturlfield.setAttribute('type','hidden');

		smarturlfield.setAttribute('value',service);

		smarturlfield.setAttribute('name','service');

		webform.appendChild(smarturlfield); 

	}

	

	var phoneNumberField = document.getElementById('LEADCF15').value;

if(phoneNumberField.length < 10 || phoneNumberField.length > 15) {

alert('Please enter a valid phone number..');

return false;

}

	var location = document.getElementById('LEADCF11').value;

if(location=="-None-") {

alert('Please select location');

return false;

}

		var last_name = document.getElementById('Last_Name').value;

    var pageurl = window.location.href;

    var location = document.getElementById('LEADCF11').value; 

    var Description = document.getElementById('Description').value;

    $.ajax({

        url: 'https://scihospital.com/insert_data.php',

        type: 'POST',

        data: { phone: phoneNumberField, last_name:last_name, pageurl:pageurl, location: location, Description:Description },

        success: function(response) {

            console.log('Success:', response);

            //alert('Form submitted successfully.');

        },

        error: function(xhr, status, error) {

            console.error('Error:', error);

            //alert('Failed to submit the form.');

        }

    });	

	 

document.querySelector('.crmWebToEntityForm .formsubmit').setAttribute('disabled', true);



	}



function tooltipShow665927000000872029(el){

	var tooltip = el.nextElementSibling;

	var tooltipDisplay = tooltip.style.display;

	if(tooltipDisplay == 'none'){

		var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');

		for(i=0; i<allTooltip.length; i++){

			allTooltip[i].style.display='none';

		}

		tooltip.style.display = 'block';

	}else{

		tooltip.style.display='none';

	}

}

</script>

	</form></div>



















	

                    







                    </div>

                </div>

            </div>

        </div>

        <div class="hero-img">

            <img src="{{asset('assets/images/Hand & Nerve Banner_BG_Desktop -1440x635 (1).png')}}" alt="" width="100%" class="img-fluid d-none d-md-block" />

            <img src="{{asset('assets/images/Hand & Nerve Banner_BG_Mobile - 415x1064 (1).png')}}" alt="" width="100%" class="img-fluid d-block d-md-none" />

        </div>

    </div>

    <!--Hero section End-->

    

    

    <!--Stats section-->

    <div class="section main-stats-wrapper mt-0">

        <div class="container">

            <div class="row">

                <div class="col-lg-3 col-6">

                    <div class="main-sbox">

                        <div class="sbox-img">

                            <img src="{{asset('assets/images/01.png')}}" alt="" width="100%" class="img-fluid" />

                        </div>

                        <div class="sbox-text">

                            <h3>25000+ </h3>

                            <p>Surgeries</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-6">

                    <div class="main-sbox">

                        <div class="sbox-img">

                            <img src="{{asset('assets/images/02.png')}}" alt="" width="100%" class="img-fluid" />

                        </div>

                        <div class="sbox-text">

                            <h3>11+ </h3>

                            <p>Years</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-6">

                    <div class="main-sbox">

                        <div class="sbox-img">

                            <img src="{{asset('assets/images/03.png')}}" alt="" width="100%" class="img-fluid" />

                        </div>

                        <div class="sbox-text">

                            <p class="m-0">Patients from</p>

                            <h3>55+</h3>

                            <p> Nations</p>

                        </div>

                    </div>

                </div>

                <div class="col-lg-3 col-6">

                    <div class="main-sbox">

                        <div class="sbox-img">

                            <img src="{{asset('assets/images/04.png')}}" alt="" width="100%" class="img-fluid" />

                        </div>

                        <div class="sbox-text">

                            <h3>50,000+</h3>

                            <p>Happy Patients</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        

    </div>

    <!--//section-->



    <!--About  section-->

    <div class="section mt-0 about-us-section" id="about">

        <div class="container">

            <div class="title-wrap why-us-wrap text-center">

				<div class="h-sub">ABOUT</div>

				<h2 class="h1">About <span>Hands Nerve</span></h2>

				<div class="h-text">

				    <p>Our surgery experts specialize in treating hand and nerve injuries, including wrist cuts, nerve damage, and hand reconstruction, offering innovative diagnosis and treatment for common and complex conditions.</p>

				   

				</div>

			</div>

            <div class="row">

                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                  <li class="nav-item active" role="presentation">

                    <div class="nav-link" id="Symptoms-tab" data-toggle="pill" data-target="#Symptoms" role="tab" aria-controls="Symptoms" aria-selected="true">Our World Class Hand & Nerve Surgeries: Features & Attributes</div>

                  </li>

                  <li class="nav-item" role="presentation">

                    <div class="nav-link" id="Treatment-tab" data-toggle="pill" data-target="#Treatment" role="tab" aria-controls="Treatment" aria-selected="false">What Treatments Do We Offer?</div>

                  </li>

                  <li class="nav-item" role="presentation">

                    <div class="nav-link" id="Benefits-tab" data-toggle="pill" data-target="#Benefits" role="tab" aria-controls="Benefits" aria-selected="false">Hand & Nerve Surgery Costs</div>

                  </li>

                  

                  

                  

                  

                  



                </ul>

                <div class="tab-content" id="pills-tabContent">

                  <div class="tab-pane fade active in" id="Symptoms" role="tabpanel" aria-labelledby="Symptoms-tab">

                      <div class="about-tab-box">

                          <div class="about-tab-img"><img src="{{asset('assets/images/about.png')}}" alt="" width="100%" class="img-fluid" /></div>

                          <div class="about-tab-text">

                              <h3>Our World Class Hand & Nerve Surgeries: <span>Features & Attributes</span></h3>

                              <!--<p> </p>-->

                            <!---  <h6>The common signs & symptoms of Hypospadias are:</h6>-->

                              <ul>

                              <li>Highly Experienced and skilled surgeons</li>

                              <li>Small surgical incisions</li>

                              <li>Quick recovery</li>

                              <li>High quality implants</li>

                              <li>Personalized treatment plan</li>

                               <li>International Standard operation theaters</li>

                              </ul>

                             <!--- <p>If your child shows any of these symptoms, surgery may be needed</p> -->

                              

                              <a href="#form" class="btn">Consult Doctor</a>

                          </div>

                      </div>

                  </div>

                  <div class="tab-pane fade" id="Treatment" role="tabpanel" aria-labelledby="Treatment-tab">

                      <div class="about-tab-box">

                          <div class="about-tab-img"><img src="{{asset('assets/images/about.png')}}" alt="" width="100%" class="img-fluid" /></div>

                          <div class="about-tab-text">

                            <h3>What Treatments <span>Do We Offer?</span></h3>

                              <p>Gain health and vitality over nerve and hand injuries. Our technology-driven approach sets new standards in nerve and hand care, emphasizing early mobilization for swift recovery and restored functionality.</p>

                            <!--  <h6>The primary triggers behind hip joint damage are: </h6>-->

                              <ul><li>Nerve injury: Comprehensive evaluation and surgical repair using advanced techniques such as nerve grafting or nerve transfers to restore function and sensation in the affected area of the hand.</li>

                              <li>Wrist Cut Injury / Self Wrist Cut: Immediate surgical intervention to repair damaged structures, including nerves, tendons, and blood vessels, aiming for functional restoration and scar management.</li>

                              <li>Microsurgery: Utilization of high-powered microscopes and precision instruments to perform intricate procedures like nerve repair or tissue transplantation for optimal functional outcomes.</li>

                              <li>Nerve transfers: Surgical technique involving transferring a healthy nerve to restore function in a paralyzed or injured nerve, enhancing motor and sensory recovery in the hand.</li>

                              <li>Median nerve to Radial nerve transfer: Specific nerve transfer procedure to improve hand function by rerouting nerves, particularly beneficial for restoring grip strength and finger extension capabilities.</li>

                             <li>Intra-fascicular nerve grafts: Surgical approach involving grafting nerve tissue within the protective fascicles, promoting nerve regeneration and functional recovery, particularly effective for complex nerve injuries.</li>

                              </ul>

                              <!-- <p>You must opt for timely gallbladder laparoscopic surgery to avoid these unwanted complications.</p>-->

                              <a href="#form" class="btn">Consult Doctor</a>

                          </div>

                      </div>

                  </div>

                  <div class="tab-pane fade" id="Benefits" role="tabpanel" aria-labelledby="Benefits-tab">

                      <div class="about-tab-box">

                          <div class="about-tab-img"><img src="{{asset('assets/images/about.png')}}" alt="" width="100%" class="img-fluid" /></div>

                          <div class="about-tab-text">

                              <h3>Hand & Nerve <span>Surgery Costs</span></h3>

                              <p>The cost of Hand And Nerve surgery varies based on the procedure and room category chosen. Insurance coverage may vary. SCI Hospital offers 0% EMI options for patients.</p>

                             <!-- <h6>The benefits of gallstone surgery are:</h6>-->

                              

                              

                              <a href="#form" class="btn">Call us for cost enquiry</a>

                          </div>

                      </div>

                  </div>

                  



                

                  

                  



                </div>

            </div>

        </div>

    </div>

    <!--About section-->



    <!--Why us section-->

    <div class="section why-us-container mt-0" id="services">

        <div class="container">

            <div class="title-wrap why-us-wrap text-center">

				<div class="h-sub">WHY US?</div>

				<h2 class="h1">Why choose <span>SCI Hospital?</span></h2>

				<div class="h-text"><p>SCI International Hospital, an established and trusted name in Delhi NCR for Speciality Surgeons with 50,000+ happy patients and 25,000+ procedures performed, with 100+ skilled doctors & 11+ years of experience. Specializing in multidisciplinary speciality surgeries, we at SCI, prioritize patient-centric care and advanced technology for optimal outcomes each time.</p></div>

			<div class="h-text"><p>Advanced Equipment  Experienced Doctors   State-of-the-art Infrastructure Trained Staff</p></div>

			

			</div>

            <div class="row">

                <div class="col-md-3 col-6">

                    <div class="why-us-box text-center">

                        <div class="wbox-img text-center">

                            <img src="{{asset('assets/images/LP_Icons-01.png')}}" alt="" width="100%" class="img-fluid" />

                        </div>

                        <h4>50,000+</h4>

                        <p>Patients Experience</p>

                    </div>

                </div>

                <div class="col-md-3 col-6">

                    <div class="why-us-box text-center">

                        <div class="wbox-img text-center">

                            <img src="{{asset('assets/images/LP_Icons-02.png')}}" alt="" width="100%" class="img-fluid" />

                        </div>

                        <h4>25,000+</h4>

                        <p>Procedures</p>

                    </div>

                </div>

                <div class="col-md-3 col-6">

                    <div class="why-us-box text-center">

                        <div class="wbox-img text-center">

                            <img src="{{asset('assets/images/LP_Icons-03.png')}}" alt="" width="100%" class="img-fluid" />

                        </div>

                        <h4>55+</h4>

                        <p>Countries</p>

                    </div>

                </div>

                <div class="col-md-3 col-6">

                    <div class="why-us-box text-center">

                        <div class="wbox-img text-center">

                            <img src="{{asset('assets/images/LP_Icons-04.png')}}" alt="" width="100%" class="img-fluid" />

                        </div>

                        <h4>Insurance</h4>

                        <p>All Major Insurances Accepted</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--//section-->

    

	 <!-- cost estimate section -->

    <section class="cost-estimate-sec">

        <div class="container">

            <div class="cost-estimate-box">

                <h3>Check <span>Surgery Cost</span></h3>

                <p>We believe in transparency. You can enquire about the Surgery Cost and we will help you with complete detailed treatment process till your recovery.</p>

                <!-- <a href="#crmWebToEntityForm" class="btn">Get Cost Estimate</a> -->
                <a href="https://wa.me/+919354471030" class="whatsapp_btn" style="border-radius: 50px; padding: 10px;"><i class="fa fa-whatsapp"></i> Get Cost on WhatsApp</a>

            </div>

        </div>

    </section>

    <!-- cost estimate section -->

	

    <!--our Team section-->

    <div class="section our-team-container mt-0" id="team">

        <div class="container">

            <div class="title-wrap why-us-wrap text-center">

				<div class="h-sub">OUR TEAM</div>

				<h2 class="h1">Meet Our Top Hand & Nerve <span>Surgery Specialists</span></h2>

				<div class="h-text"><p>Our internationally-trained surgeons have an experience of 25, 000+ surgeries. Get in touch today!</p></div>

			</div>

            <div class="owl-carousel owl-theme" id="lp_page_doctor">

                <div class="col-md">

                    <div class="our-team-box">

                        <div class="our-team-img"><img src="{{asset('assets/images/doctors/nisant-200x200.jpg')}}" alt="" width="100%" class="img-fluid" /></div>

                        <div class="our-team-text">

                            <h3>Dr. Nishant S.</h3>

                            <h5>Senior Consultant</h5>

                            <p>Peripheral Nerve & Orthopedic surgeon</p>

                           <!-- <a href="{{ route('dr-nishant-soni') }}" class="view-all-link">View Full Profile</a>-->

                            <a href="#form" class="btn">Consult Doctor</a>

                        </div>

                    </div>

                </div>

                

                

            </div>

        </div>

    </div>

    <!--//section-->

    

    <!--Teastimonial section-->

    <div class="section testimonial-container mt-0">

        <div class="container">

            <div class="title-wrap why-us-wrap text-center">

				<div class="h-sub">TESTIMONIALS</div>

				<h2 class="h1">Verified <span>Testimonials</span></h2>

				<div class="h-text"><p>What Are Our Happy Patients Saying About The Treatment They Received?</p></div>

				

			</div>

            <div class="row  owl-carousel owl-theme text-center text-sm-left" id="home_page_doctor">

                <div class="col-md">

                    <div class="testimonial-box">

                        <div class="testimonial-head">

                            <!-- <div class="testimonial-img"><img src="{{asset('assets/images/testi-1.png')}}" alt="" width="100%" class="img-fluid" /></div> -->

                            <div class="testi-info"><img src="{{asset('assets/images/rating.png')}}" alt="" width="100%" class="img-fluid rating" /><span> 3 months ago</span><h5>P.N</h5></div>

                        </div>

                        <div class="testimonial-body">

                           I recently had the privilege of receiving care at SCI International Hospital, and I must say that my experience exceeded all expectations. From the moment I walked in, I was greeted by a warm and welcoming staff who made me feel like a valued individual, not just a patient. The medical team at SCI International Hospital exhibited a remarkable level of expertise and professionalism. They took the time to listen to my concerns, answer all my questions, and ensure that I was comfortable and well-informed throughout my treatment. Their dedication to providing personalized care truly sets them apart.

                        </div>

                    </div>

					</div>

                <div class="col-md">

                    <div class="testimonial-box">

                        <div class="testimonial-head">

                            <!-- <div class="testimonial-img"><img src="{{asset('assets/images/testi-2.png')}}" alt="" width="100%" class="img-fluid" /></div> -->

                            <div class="testi-info"><img src="{{asset('assets/images/rating.png')}}" alt="" width="100%" class="img-fluid rating" /><span>9 months ago </span><h5>Vidya Nair</h5></div>

                        </div>

                        <div class="testimonial-body">

                            SCI International Hospital provides excellent medical care with a skilled staff and modern facilities. Patients consistently report positive experiences, highlighting the hospital's commitment to quality healthcare.

                         </div>

                   

                   

                    </div>

                </div>

                <div class="col-md">

                    <div class="testimonial-box">

                        <div class="testimonial-head">

                            <!-- <div class="testimonial-img"><img src="{{asset('assets/images/testi-1.png')}}" alt="" width="100%" class="img-fluid" /></div> -->

                            <div class="testi-info"><img src="{{asset('assets/images/rating.png')}}" alt="" width="100%" class="img-fluid rating" /><span>7 months ago</span><h5>Ramesh Mohan</h5></div>

                        </div>

                        <div class="testimonial-body">

                           Choosing SCI Hospital of Delhi NCR for my nerve transfer surgery was the best decision I made. The skilled surgeons and caring staff provided exceptional care, ensuring a smooth recovery. Thanks to their expertise and support, I'm now pain-free and back to my active lifestyle. Grateful for their outstanding service and professionalism. Thanks SCI!

                        </div>

                    </div>

                </div>

                

                

            </div>

        </div>

    </div>

    <!--//section-->

    

    <!-- section faq -->

     <div class="section faq-container mt-0">

        <div class="container">

            <div class="title-wrap why-us-wrap text-center">

				<div class="h-sub">FAQ</div>

				<h2 class="h1">Frequently Asked Questions About <span>Hand & Nerve Surgery</span></h2>

				<div class="h-text"><p>For any queries regarding the treatment, go through this FAQ section</p></div>

			</div>

            <div class="">

                <div class="accordion" id="faq">

                   <div class="card">

                      <div class="card-header" id="headingOne">

                         <div class="btn-link btn-block text-left"  data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">

                        How does nerve transfer surgery work?

                         </div>

                      </div>

                      <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#faq">

                         <div class="card-body">

                          Nerve transfer surgery redirects healthy nerves to restore function in damaged ones, facilitating recovery and improving hand mobility.

                         </div>

                      </div>

                   </div>

                   <div class="card">

                      <div class="card-header" id="headingTwo">

                         <div class="btn-link btn-block text-left collapsed"  data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">

                            What are the common types of hand and nerve surgeries?

                         </div>

                      </div>

                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#faq">

                         <div class="card-body">

                           Common procedures include nerve repair, carpal tunnel release, tendon repair, and hand or finger reconstruction to restore function and mobility.

                         </div>

                      </div>

                   </div>

                   <div class="card">

                      <div class="card-header" id="headingThree">

                         <div class="btn-link btn-block text-left collapsed"  data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">

                           How long does recovery take after hand surgery?

                         </div>

                      </div>

                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#faq">

                         <div class="card-body">

                          Recovery time varies but typically ranges from several weeks to months depending on the procedure and individual healing.

                         </div>

                      </div>

                   </div>

                   <div class="card">

                      <div class="card-header" id="headingFour">

                         <div class="btn-link btn-block text-left collapsed"  data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">

                           Will I regain full function after nerve surgery?

                         </div>

                      </div>

                      <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#faq">

                         <div class="card-body">

                         Full function restoration depends on the severity of injury and rehabilitation efforts, with some patients achieving near-complete recovery.

                         </div>

                      </div>

                   </div>

                    <div class="card">

                      <div class="card-header" id="headingFive">

                         <div class="btn-link btn-block text-left collapsed"  data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">

                           Are there risks associated with hand surgeries?

                         </div>

                      </div>

                      <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#faq">

                         <div class="card-body">

                          Risks include infection, nerve damage, and stiffness, but complications are rare with proper surgical technique and postoperative care.

                         </div>

                      </div>

                   </div>

                     <div class="card">

                      <div class="card-header" id="headingSix">

                         <div class="btn-link btn-block text-left collapsed"  data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">

                           What type of anesthesia is used for hand surgeries?

                         </div>

                      </div>

                      <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#faq">

                         <div class="card-body">

                          Local, regional, or general anesthesia may be used depending on the procedure's complexity and patient's medical history and preferences.

                         </div>

                      </div>

                   </div>

                   

                </div>

                

            </div>

        </div>

    </div>

    <!--section faq-->

    

    <!--section specialists-->

    <div class="section section-media bg-norepeat bg-right bg-md-none section-top-padding mb-3">
    
        <div class="container">
    
            <div class="title-wrap why-us-wrap text-center">
    
                <div class="h-sub">PHOTOS</div>
    
                <h2 class="h1">Centre of Excellence</h2>
    
                <ul class="nav nav-pills mb-3" id="pills-tab1" role="tablist1">
    
                  <li class="nav-item active" role="presentation">
    
                    <div class="nav-link" id="Delhi-tab" data-toggle="pill" data-target="#Delhi" role="tab" aria-controls="Delhi" aria-selected="true">Delhi</div>
    
                  </li>
    
                  <li class="nav-item" role="presentation">
    
                    <div class="nav-link" id="Gurgaon-tab" data-toggle="pill" data-target="#Gurgaon" role="tab" aria-controls="Gurgaon" aria-selected="false">Gurgaon </div>
    
                  </li>
    
                </ul>
    
                
    
                
    
            </div>
    
            <div class="tab-content" id="pills-tabContent">
    
                <div class="tab-pane fade active in" id="Delhi" role="tabpanel" aria-labelledby="Delhi-tab">
    
                  
    
                       <div class="row owl-carousel owl-theme" id="delhi1">
    
                          <div class="col-lg-12">
                            <section class="hospital-gallery-delhi slider">
                                <div class="slide"><img src="https://scihospital.com/public/assets/images/img-gallery/Recovery-Area-min-768x512.webp" alt="Gallery 1"></div>
                                <div class="slide"><img src="https://scihospital.com/public/assets/images/img-gallery/M1-min-768x509.webp" alt="Gallery 2"></div>
                                <div class="slide"><img src="https://scihospital.com/public/assets/images/img-gallery/nicu3-.webp" alt="Gallery 3"></div>
                                <div class="slide"><img src="https://scihospital.com/public/assets/images/img-gallery/nicu.jpg" alt="Gallery 4"></div>
                                <div class="slide"><img src="https://scihospital.com/public/assets/images/img-gallery/Deluxe-Room-min-3-768x512.webp" alt="Gallery 5"></div>
                                <div class="slide"><img src="https://scihospital.com/public/assets/images/img-gallery/MODULAR-OT..-min-768x512.webp" alt="Gallery 6"></div>
                                <div class="slide"><img src="https://scihospital.com/public/assets/images/img-gallery/OT...-min-768x512.webp" alt="Gallery 7"></div>
                                <div class="slide"><img src="https://scihospital.com/public/assets/images/img-gallery/1K1A4900-min-768x512.webp" alt="Gallery 8"></div>
                             </section>
                          </div>
    
                      </div>
    
                    
    
                </div>
    
                <div class="tab-pane fade" id="Gurgaon" role="tabpanel" aria-labelledby="Gurgaon-tab">
    
                    
    
                        <div class="row owl-carousel owl-theme" id="delhi2">
    
                          <div class="col-lg-12">
                            <section class="hospital-gallery-gurugram slider">
                                <div class="slide"><img src="https://scihospital.com/public/assets/images/img-gallery/Recovery-Area-min-768x512.webp" alt="Gallery 1"></div>
                                <div class="slide"><img src="https://scihospital.com/public/assets/images/img-gallery/M1-min-768x509.webp" alt="Gallery 2"></div>
                                <div class="slide"><img src="https://scihospital.com/public/assets/images/img-gallery/nicu3-.webp" alt="Gallery 3"></div>
                                <div class="slide"><img src="https://scihospital.com/public/assets/images/guru-1.JPG" alt="Gallery 4"></div>
                                <div class="slide"><img src="https://scihospital.com/public/assets/images/guru-2.JPG" alt="Gallery 5"></div>
                                <div class="slide"><img src="https://scihospital.com/public/assets/images/guru-3.JPG" alt="Gallery 6"></div>
                                <div class="slide"><img src="https://scihospital.com/public/assets/images/guru-4.JPG" alt="Gallery 7"></div>
                                <div class="slide"><img src="https://scihospital.com/public/assets/images/guru-5.JPG" alt="Gallery 8"></div>
                             </section>
                          </div>
    
    
                      </div>
    
                    
    
                </div>
    
              </div>
    
            
    
    
    
          
    
        </div>
    
    </div>

    <!--//section specialists-->

    

    <!--section book-appointment-->

    <div class="section book-appointment" id="contact">

        <div class="container">

            <div class="row">

                <div class="col-md-12">

                    <div class="book-appoinetment-box" style="background-image: url(public/assets/images/book-appointment-design.png);">

                        <h2>Book an Appointment Today!</h2>

                         <p>Get rid of painful hand & nerve issues with our surgical excellence</p>

                        <!--Form Start-->

                        

                        <div id='crmWebToEntityForm' class='zcwf_lblLeft crmWebToEntityForm' style='background-color: white;color: black;'>

                          <meta name='viewport' content='width=device-width, initial-scale=1.0'>

                           <META HTTP-EQUIV ='content-type' CONTENT='text/html;charset=UTF-8'>

                           

                        <form id='webform665927000000433032' action='https://crm.zoho.in/crm/WebToLeadForm' name=WebToLeads665927000000433032 method='POST' onSubmit='javascript:document.charset="UTF-8"; return checkMandatory665927000000433032()' accept-charset='UTF-8'>

                         <input type='text' style='display:none;' name='xnQsjsdp' value='d54aa6fe5151e702fb2b9e9455908fa8e816bc9b23705aabab507db4d95c26be'></input> 

                         <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>

                         <input type='text' style='display:none;' name='xmIwtLD' value='8193840938330ea21094e0ae68d6c11ce5c4ba5d2f876468e3982a56f3604020d179951caf777a89f876ac16fb15260f'></input> 

                         <input type='text'  style='display:none;' name='actionType' value='TGVhZHM='></input>

                         <input type='text' style='display:none;' name='returnURL' value='https&#x3a;&#x2f;&#x2f;scihospital.com&#x2f;thank-you' > </input>

                        <div class="row">

                        <div class='zcwf_row col-md-4'><div class='zcwf_col_lab' style='font-size:13px; font-family: Serif;'><label for='Last_Name'>Name<span style='color:red;'>*</span></label></div><div class='zcwf_col_fld'><input type='text' id='Last_Name' placeholder="Name" name='Last Name' maxlength='80'></input><div class='zcwf_col_help'></div></div></div>

                        <div class='zcwf_row col-md-4'><div class='zcwf_col_lab' style='font-size:13px; font-family: Serif;'><label for='Mobile'>Mobile<span style='color:red;'>*</span></label></div><div class='zcwf_col_fld'><input type='text' id='Mobile' placeholder="Mobile" name='Mobile' maxlength='30'></input><div class='zcwf_col_help'></div></div></div>

                        <div class='zcwf_row col-md-4'><div class='zcwf_col_lab'></div><div class='zcwf_col_fld'><input type='submit' id='formsubmit' class='formsubmit zcwf_button' value='Request&#x20;a&#x20;Call&#x20;Back' title='Request&#x20;a&#x20;Call&#x20;Back'><input type='reset' class='zcwf_button' name='reset' value='Reset' title='Reset'></div></div>

                        </div>

                        	<script>

                        

                         	  function checkMandatory665927000000433032() {

                        		var mndFileds = new Array('Last Name','Mobile');

                        		var fldLangVal = new Array('Name','Mobile');

                        		for(i=0;i<mndFileds.length;i++) {

                        		  var fieldObj=document.forms['WebToLeads665927000000433032'][mndFileds[i]];

                        		  if(fieldObj) {

                        			if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length==0) {

                        			 if(fieldObj.type =='file')

                        				{ 

                        				 alert('Please select a file to upload.'); 

                        				 fieldObj.focus(); 

                        				 return false;

                        				} 

                        			alert(fldLangVal[i] +' cannot be empty.'); 

                           	   	  	  fieldObj.focus();

                           	   	  	  return false;

                        			}  else if(fieldObj.nodeName=='SELECT') {

                          	   	   	 if(fieldObj.options[fieldObj.selectedIndex].value=='-None-') {

                        				alert(fldLangVal[i] +' cannot be none.'); 

                        				fieldObj.focus();

                        				return false;

                        			   }

                        			} else if(fieldObj.type =='checkbox'){

                         	 	 	 if(fieldObj.checked == false){

                        				alert('Please accept  '+fldLangVal[i]);

                        				fieldObj.focus();

                        				return false;

                        			   } 

                        			 } 

                        			 try {

                        			     if(fieldObj.name == 'Last Name') {

                        				name = fieldObj.value;

                         	 	 	    }

                        			} catch (e) {}

                        		    }

                        		}

                        	var urlparams = new URLSearchParams( window.location.search);

                        	if(urlparams.has('service') && (urlparams.get('service')==='smarturl')){

                        		var webform = document.getElementById('webform665927000000433032');

                        		 var service =  urlparams.get('service'); 

                        		var smarturlfield = document.createElement('input');

                        		smarturlfield.setAttribute('type','hidden');

                        		smarturlfield.setAttribute('value',service);

                        		smarturlfield.setAttribute('name','service');

                        		webform.appendChild(smarturlfield); 

                        	}

                        document.querySelector('.crmWebToEntityForm .formsubmit').setAttribute('disabled', true);

                        	}

                        

                        function tooltipShow665927000000433032(el){

                        	var tooltip = el.nextElementSibling;

                        	var tooltipDisplay = tooltip.style.display;

                        	if(tooltipDisplay == 'none'){

                        		var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');

                        		for(i=0; i<allTooltip.length; i++){

                        			allTooltip[i].style.display='none';

                        		}

                        		tooltip.style.display = 'block';

                        	}else{

                        		tooltip.style.display='none';

                        	}

                        }

                        </script>

                        	<!-- Do not remove this --- Analytics Tracking code starts --><script id='wf_anal' src='https://crm.zohopublic.in/crm/WebFormAnalyticsServeServlet?rid=ceffada6d3932dd64d8141a94f4f95672106aec0e9fe86465c7cc5ee224cdd337ae6b0eaf2dc47286bd868e663e6ff76gid904c68eef090c5dd23c7ddde0718929f488e9327c688bad326d753671c305d04gid03bd260f9ddd87da3bfd15388b5ad8e520648c8b2ba3486274e0691e7bfe4befgid33b4c3b63598951fc55b50095425984c67cba1f434e77202d0f2624419087b3a&tw=6d0a0a98515bbd4b89af0d1186fee4850c23dd759ea701366a706af96c16f190'></script><!-- Do not remove this --- Analytics Tracking code ends. --></form>

                        </div>







                        <!--form End-->

                    </div>

                </div>

            </div>

        </div>

    </div>

    <!--section book-appointment-->



   

<script>

// Function to set landing page URL field with current page URL

/*function setLandingPageURL() {

    var landingPageURLField = document.getElementById('LEADCF12');

    if (landingPageURLField) {

        // Get current page URL

        var currentPageURL = window.location.href;

        // Set the value of the landing page URL field

        landingPageURLField.value = currentPageURL;

    }

}



// Call the function when the page finishes loading

window.addEventListener('load', setLandingPageURL);

*/

</script>  

<script>



 function getSubdirectoryFromURL() {

    var currentPageUrl = window.location.href;

    var url = new URL(currentPageUrl);

    var pathname = url.pathname;

    var pathParts = pathname.split('/').filter(Boolean); // Filter out empty parts



    if (pathParts.length > 0) {

      return pathParts[0]; // Return the first non-empty part (subdirectory)

    }



    return '';

  }



  // Function to populate Zoho CRM form fields with subdirectory

  function populateZohoCRMFormFields() {

    var subdirectory = getSubdirectoryFromURL();



    // Check if Zoho CRM form fields exist

    var landingPageUrlField = document.querySelector('input[name="LEADCF12"]');

    var specialtyTypeField = document.querySelector('input[name="LEADCF13"]');



    if (landingPageUrlField && specialtyTypeField) {

      landingPageUrlField.value = window.location.href; // Populate Landing Page URL

      specialtyTypeField.value = subdirectory; // Populate Specialty Type (subdirectory)

    }

  }



  // Call the function to populate form fields when the page loads

  window.addEventListener('load', function() {

    populateZohoCRMFormFields();

  });



</script>

<script>

		document.addEventListener('DOMContentLoaded', function() {

    var telInput = document.getElementById('LEADCF15');

    telInput.addEventListener('input', function() {

        this.value = this.value.replace(/\D/g, '').slice(0, 15);

    });

});



</script>

</div>

@endsection
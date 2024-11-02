@extends('admin.layouts.app')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')
<title>Dr. {{ $doctor->name }}</title>

    <section class="sub-menu sp-top-10 sp-bottom-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <a href="#">Home</a>
                    <span>></span>
                    <a href="#">Delhi</a>
                    <span>></span>
                    <a href="#">Dr. {{ $doctor->name }}</a>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="dr-profile">
                <div class="row">
                    <div class="col-md-3 col-lg-3 col-sm-12">
                    @if($doctor->photo_path)
            <img src="{{ asset('storage/' . $doctor->photo_path) }}" alt="{{ $doctor->name }}'s Profile" class="img-fluid">
        @else
            <img src="{{ asset('/temp/img/Dr-Vishal-Dutt-Gour-1.png') }}" alt="Default Profile" class="img-fluid">
        @endif                    </div>
                    <div class="col-md-9 col-lg-9 col-sm-12">
                        <div>
                            <h1 class="poppins-semibold">Dr. {{ $doctor->name }}
                                <span class="float-end">
                                    <i class="fa-brands fa-facebook me-2 fa-icon"></i>
                                    <i class="fa-brands fa-square-instagram me-2 fa-icon"></i>
                                    <i class="fa-brands fa-youtube me-2 fa-icon"></i>
                                    <i class="fa-brands fa-linkedin fa-icon"></i>
                                </span>
                            </h1>
                            <p>{{ $doctor->degree_section }}</p>
                            <p>{{ $doctor->speciality }}</p>
                            <p>{{ $doctor->experience }}</p>
                            <p>{{ $doctor->degree_year }}</p>
                            <p>{{ $doctor->review }}</p>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="sp-top-10"><a href="tel:+91{{ $doctor->appointment_number }}" class="btn-brown"><i
                                                class="bi bi-telephone-fill"></i> Book Appointment</a></div>

                                </div>
                                <div class="col-md-6 text-end">
                                    <div class="sp-top-10"><a href="{{ $doctor->map_direction }}" class="btn-white-1"><i
                                                class="fa-solid fa-location-dot"></i> <span
                                                class="ms-2 poppins-semibold">Get Directions</span></a></div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <div class="container sp-top-20 sp-bottom-20">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="faq-section horizontal-scrollbar">
                    <a href="#heading-1" class="active-btn">Doctor Info</a>
                    <a href="#heading-2" class="btn-brown-type">Service Offered</a>
                    <a href="#heading-3" class="btn-brown-type">Education</a>
                    <a href="#heading-4" class="btn-brown-type">Experience</a>
                    <a href="#heading-5" class="btn-brown-type">Achievement & Awards</a>
                    <a href="#heading-6" class="btn-brown-type">Specializations</a>
                    <a href="#heading-7" class="btn-brown-type">FAQ</a>

                </div>
            </div>
        </div>
    </div>

    <section class="doctor-info">
        <div class="container">
            <div class="box-shadow">
                <div class="row">
                    <div class="col-md-12">
                        <div>
                            <h2 class="text-blue poppins-bold" id="heading-1">
                                Doctor <span class="text-brown">Info</span>
                            </h2>
                            <p>{{ $doctor->bio_info }}</p>
                        </div>
                    </div>
                    <div class="row">
    <div class="col-md-4 col-sm-12">
        <p>{{ $doctor->address }}</p>
        <p class="text-brown">{{ $doctor->hospital_name }}</p>
        <p>{{ $doctor->rating }} <span>
            @for ($i = 0; $i < 5; $i++)
                <i class="bi bi-star-fill {{ $i < $doctor->rating ? 'text-orange' : 'text-gray' }}"></i>
            @endfor
        </span></p>
        <p>{{ $doctor->landmark }}</p>
    </div>
    <!-- Availability Section -->
    <div class="col-md-5 col-sm-12">
            <div>
                @foreach($doctor->availability as $availability)
                    <p class="poppins-semibold">{{ $availability->day }}</p>
                    <p>{{ $availability->time }}</p>
                @endforeach
            </div>
</div>
    <div class="col-md-3 col-sm-12">
        <div class="full-btn-brown mb-3"><a href="tel:{{ $doctor->phone }}" class="link-text">
                <span class="poppins-semibold">Call Now</span></a></div>
        <div class="full-btn-brown"><a href="tel:{{ $doctor->phone }}" class="link-text">
                <span class="ms-2 poppins-semibold">Book Appointment</span></a></div>
    </div>
</div>


                </div>
            </div>
        </div>
    </section>

    
    <!-- -----------------end------------------ -->
    <div class="container hero-wrap sp-top-10 sp-bottom-20 qna-section">
        <div class="row">
            <div class="col-md-8 col-sm-12">


                <div class="service-offered box-shadow">
                    <div class="row">
                        <div class="col-md-12">
                            <h2 class="text-blue poppins-bold" id="heading-2">
                                Service <span class="text-brown">Offered</span>
                            </h2>
                            <p>{{ $doctor->service_heading }}</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="service-list">
                                        <ul>
                                     @if(!empty($doctor->services) && is_array(json_decode($doctor->services)))
                                       @foreach(json_decode($doctor->services) as $service)
                                       <li>{{ $service }}</li>
                                      @endforeach
                                         @else
                                             <li>No services available</li>
                                         @endif
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="education mt-3 box-shadow">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <h2 class="text-blue poppins-bold" id="heading-3">
                Education
            </h2>
            <div>
                <ul>
                    @if($doctor->education)
                        @foreach(json_decode($doctor->education) as $edu)
                            <li>{{ $edu->degree }} - {{ $edu->institution }}, {{ $edu->year }}</li>
                        @endforeach
                    @else
                        <li>No education information available.</li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>
                <div class="experience mt-3 box-shadow">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <h2 class="text-blue poppins-bold" id="heading-4">
                                Experience
                            </h2>
                            <div>
                            <ul>
                           @if($doctor->doctor_experience)
                          @foreach(json_decode($doctor->doctor_experience) as $exp)
                            <li>{{ $exp->years }}: {{ $exp->title }} at {{ $exp->institution1 }}</li>
                           @endforeach
                          @else
                             <li>No experience information available.</li>
                          @endif
                            </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="achievement-awards mt-3 box-shadow">
                    <div class="row">
                    <div class="col-md-12 col-sm-12">
                  <h2 class="text-blue poppins-bold" id="heading-5">
                          Achievements & <span class="text-brown">Awards</span>
                     </h2>
                        <div>
                            <ul>
                            @if($doctor->achievements)
                            @foreach(json_decode($doctor->achievements) as $achievement)
                              <li>{{ $achievement }}</li>
                              @endforeach
                                 @else
                               <li>No achievements available.</li>
                              @endif
                            </ul>
                         </div>
                        </div>
                    </div>
                </div>


                <div class="specialisations mt-3 box-shadow">
                    <div class="row">
                    <div class="col-md-12 col-sm-12">
    <h2 class="text-blue poppins-bold" id="heading-6">
        Specialisations
    </h2>
    <div>
        <ul>
            @if($doctor->specialisations)
                @foreach(json_decode($doctor->specialisations) as $specialisation)
                    <li>{{ $specialisation }}</li>
                @endforeach
            @else
                <li>No specialisations available.</li>
            @endif
        </ul>
    </div>
</div>
</div>
</div>

                <!-- FAQs-->

                <div class="faq-section-card mt-3 box-shadow">
                    <div class="row">
                        <div class="col-md-12 col-sm-12">
                            <div>
                                <h2 class="text-blue poppins-bold sp-bottom-10" id="heading-7">
                                    FAQs
                                </h2>
                            </div>
                            <div>
                            @php
                              $conditions = json_decode($doctor->conditions);
                            @endphp

                            <div class="accordion" id="accordionExample">
            @if(is_array($conditions) && count($conditions) > 0)
        @foreach($conditions as $index => $condition)
                    <div class="accordion-item">
                        <h3 class="accordion-header" id="heading{{ $index }}">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse{{ $index }}" aria-expanded="true"
                                    aria-controls="collapse{{ $index }}">
                                {{ $condition->question ?? 'No question provided' }}
                            </button>
                        </h3>
                        <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}"
                             aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>{{ $condition->answer ?? 'No answer provided' }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <p>No conditions available.</p>
        @endif
    </div>







                        </div>
                    </div>
                </div>
                <!-- ------end----------- -->

            </div>
            <!-- sticky------form--section-------- -->
            <div class="col-md-4 col-sm-12">
                <div class="position-sticky top-0 sp-top-20 sp-bottom-20 ">
                    <div id='crmWebToEntityForm' class='zcwf_lblLeft crmWebToEntityForm'
                        style='background-color: white;color: black;'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <META HTTP-EQUIV='content-type' CONTENT='text/html;charset=UTF-8'>
                        <p style="margin-top: 0;" class="poppins-semibold">Consult Now</p>
                        <form id='webform665927000000872029' action='https://crm.zoho.in/crm/WebToLeadForm'
                            name=WebToLeads665927000000872029 method='POST'
                            onSubmit='javascript:document.charset="UTF-8"; return checkMandatory665927000000872029()'
                            accept-charset='UTF-8'>
                            <input type='text' style='display:none;' name='xnQsjsdp'
                                value='8cd546331f8b1e84e8a6a4ab71191e29830abae8c067b737154af47a8cc9e734'></input>
                            <input type='hidden' name='zc_gad' id='zc_gad' value=''></input>
                            <input type='text' style='display:none;' name='xmIwtLD'
                                value='77d817c16bf8e0f1fabf280094645c0c801a3b1bba16bcecbc9cd6a551c27b672acd01d37224a43cfede0354814861be'></input>
                            <input type='text' style='display:none;' name='actionType' value='TGVhZHM='></input>
                            <input type='text' style='display:none;' name='returnURL'
                                value='https&#x3a;&#x2f;&#x2f;scihospital.com&#x2f;thank-you'> </input>

                            <div class='zcwf_title' style='color: black; font-family:Arial;'></div>
                            <div class='zcwf_row'>
                                <div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label
                                        for='Last_Name'>Name<span style='color:red;'>*</span></label></div>
                                <div class='zcwf_col_fld'><input type='text' placeholder="Full Name" id='Last_Name'
                                        name='Last Name' maxlength='80'></input>
                                    <div class='zcwf_col_help'></div>
                                </div>
                            </div>
                            <div class='zcwf_row'>
                                <div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label
                                        for='LEADCF15'>Phone Number</label></div>
                                <div class='zcwf_col_fld'><input type='text' placeholder="Mobile" id='LEADCF15'
                                        name='LEADCF15' maxlength='30'></input>
                                    <div class='zcwf_col_help'></div>
                                </div>
                            </div>
                            <div class='zcwf_row'>
                                <div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label
                                        for='LEADCF11'>Location</label></div>
                                <div class='zcwf_col_fld'><select class='zcwf_col_fld_slt' id='LEADCF11'
                                        name='LEADCF11'>
                                        <option value='-None-'>Location</option>
                                        <option value='Gurgaon'>Gurgaon</option>
                                        <option value='Greater&#x20;Kailash,&#x20;Delhi'>Greater Kailash, Delhi
                                        </option>

                                    </select>
                                    <div class='zcwf_col_help'></div>
                                </div>
                            </div>
                            <div class='zcwf_row'>
                                <div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label
                                        for='LEADCF4'>Tell us your query</label></div>
                                <div class='zcwf_col_fld'><textarea id='Description' type='text'
                                        placeholder="Tell us your Symptoms" id='LEADCF4' name='LEADCF4'
                                        maxlength='255'></textarea>
                                    <div class='zcwf_col_help'></div>
                                </div>
                            </div>
                            <div class='zcwf_row wfrm_fld_dpNn'>
                                <div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label
                                        for='LEADCF13'>Speciality Type</label></div>
                                <div class='zcwf_col_fld'><input type='text' style="display:none;" id='LEADCF13'
                                        name='LEADCF13' maxlength='255' value='Other'></input>
                                    <div class='zcwf_col_help'></div>
                                </div>
                            </div>
                            <div class='zcwf_row wfrm_fld_dpNn'>
                                <div class='zcwf_col_lab' style='font-size:12px; font-family: Arial;'><label
                                        for='LEADCF12'>Landing Page URL</label></div>
                                <div class='zcwf_col_fld'><input type='text' id='LEADCF12' name='LEADCF12'
                                        style="display:none;" maxlength='450'
                                        value='https&#x3a;&#x2f;&#x2f;scihospital.com&#x2f;'></input>
                                    <div class='zcwf_col_help'></div>
                                </div>
                            </div>
                            <div class='zcwf_row'>
                                <div class='zcwf_col_lab'></div>
                                <div class='zcwf_col_fld'><input type='submit' id='formsubmit'
                                        class='formsubmit zcwf_button' value='Ask Now' title='Submit'><input
                                        type='reset' class='zcwf_button' name='reset' value='Reset' title='Reset'></div>
                            </div>
                            <script>

                                function checkMandatory665927000000872029() {
                                    var mndFileds = new Array('Last Name');
                                    var fldLangVal = new Array('Name');
                                    for (i = 0; i < mndFileds.length; i++) {
                                        var fieldObj = document.forms['WebToLeads665927000000872029'][mndFileds[i]];
                                        if (fieldObj) {
                                            if (((fieldObj.value).replace(/^\s+|\s+$/g, '')).length == 0) {
                                                if (fieldObj.type == 'file') {
                                                    alert('Please select a file to upload.');
                                                    fieldObj.focus();
                                                    return false;
                                                }
                                                alert(fldLangVal[i] + ' cannot be empty.');
                                                fieldObj.focus();
                                                return false;
                                            } else if (fieldObj.nodeName == 'SELECT') {
                                                if (fieldObj.options[fieldObj.selectedIndex].value == '-None-') {
                                                    alert(fldLangVal[i] + ' cannot be none.');
                                                    fieldObj.focus();
                                                    return false;
                                                }
                                            } else if (fieldObj.type == 'checkbox') {
                                                if (fieldObj.checked == false) {
                                                    alert('Please accept  ' + fldLangVal[i]);
                                                    fieldObj.focus();
                                                    return false;
                                                }
                                            }
                                            try {
                                                if (fieldObj.name == 'Last Name') {
                                                    name = fieldObj.value;
                                                }
                                            } catch (e) { }
                                        }
                                    }
                                    var urlparams = new URLSearchParams(window.location.search);
                                    if (urlparams.has('service') && (urlparams.get('service') === 'smarturl')) {
                                        var webform = document.getElementById('webform665927000000872029');
                                        var service = urlparams.get('service');
                                        var smarturlfield = document.createElement('input');
                                        smarturlfield.setAttribute('type', 'hidden');
                                        smarturlfield.setAttribute('value', service);
                                        smarturlfield.setAttribute('name', 'service');
                                        webform.appendChild(smarturlfield);
                                    }

                                    var phoneNumberField = document.getElementById('LEADCF15').value;
                                    if (phoneNumberField.length < 10 || phoneNumberField.length > 15) {
                                        alert('Please enter a valid phone number..');
                                        return false;
                                    }
                                    var location = document.getElementById('LEADCF11').value;
                                    if (location == "-None-") {
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
                                        data: { phone: phoneNumberField, last_name: last_name, pageurl: pageurl, location: location, Description: Description },
                                        success: function (response) {
                                            console.log('Success:', response);
                                            //alert('Form submitted successfully.');
                                        },
                                        error: function (xhr, status, error) {
                                            console.error('Error:', error);
                                            //alert('Failed to submit the form.');
                                        }
                                    });

                                    document.querySelector('.crmWebToEntityForm .formsubmit').setAttribute('disabled', true);
                                }

                                function tooltipShow665927000000872029(el) {
                                    var tooltip = el.nextElementSibling;
                                    var tooltipDisplay = tooltip.style.display;
                                    if (tooltipDisplay == 'none') {
                                        var allTooltip = document.getElementsByClassName('zcwf_tooltip_over');
                                        for (i = 0; i < allTooltip.length; i++) {
                                            allTooltip[i].style.display = 'none';
                                        }
                                        tooltip.style.display = 'block';
                                    } else {
                                        tooltip.style.display = 'none';
                                    }
                                }
                            </script>
                        </form>

                    </div>
                </div>
            </div>

            <!-- ----------end------------- -->
        </div>

        <!-- ----------our--patient-rating----- -->
        <div class="row sp-top-30">
            <div class="col-md-12 col-sm-12 sp-bottom-30">
                <h2 class="text-blue poppins-bold line-between">
                    Our Patient <span class="text-brown">Love Us</span>
                </h2>
            </div>

            <div class="col-md-4 col-sm-12 sp-bottom-10">
                <div class="rating-value">
                    <p class="fs-small"> 3 months ago</p>
                    <p>Arun Khokhar</p>
                    <p>
                        <span>
                            <i class="bi bi-star-fill text-brown"></i>
                            <i class="bi bi-star-fill text-brown"></i>
                            <i class="bi bi-star-fill text-brown"></i>
                            <i class="bi bi-star-fill text-brown"></i>
                            <i class="bi bi-star-fill text-brown"></i>
                        </span>
                    </p>
                    <p class="fs-small sp-top-10">A deep appreciation for the amazing care I received from Dr. Gautam
                        Banga and his great team of fellows for my Kidney stone procedure. Really impressed with the
                        level of care from nurses, assistants, food service, housekeeping and more. The overall
                        atmosphere at SCI Hospital is very comforting and relaxing. If I had to be hospitalized, I'm
                        grateful that I was in such good hands throughout. Thank you to all who played a part in my
                        recovery.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 sp-bottom-10">
                <div class="rating-value">
                    <p class="fs-small">7 months ago</p>
                    <p>Amrit Patel</p>
                    <p>
                        <span>
                            <i class="bi bi-star-fill text-brown"></i>
                            <i class="bi bi-star-fill text-brown"></i>
                            <i class="bi bi-star-fill text-brown"></i>
                            <i class="bi bi-star-fill text-brown"></i>
                            <i class="bi bi-star-fill text-brown"></i>
                        </span>
                    </p>
                    <p class="fs-small sp-top-10">SCI Hospital's laser kidney stone removal transformed my life. The
                        procedure, expertly conducted by their team, was remarkably smooth and painless. Thanks to their
                        care, I swiftly recovered, resuming my daily activities without hindrance. SCI's exceptional
                        expertise and support were instrumental, and I am deeply appreciative of their commitment to my
                        well-being.</p>
                </div>
            </div>
            <div class="col-md-4 col-sm-12 sp-bottom-10">
                <div class="rating-value">
                    <p class="fs-small">9 months ago </p>
                    <p>Akash Singh</p>
                    <p>
                        <span>
                            <i class="bi bi-star-fill text-brown"></i>
                            <i class="bi bi-star-fill text-brown"></i>
                            <i class="bi bi-star-fill text-brown"></i>
                            <i class="bi bi-star-fill text-brown"></i>
                            <i class="bi bi-star-fill text-brown"></i>
                        </span>
                    </p>
                    <p class="fs-small sp-top-10">Very good hospital with all the latest amenities and facilities. Went
                        here for my stone operation and Dr. Gautam Banga is a very well experienced surgeon and he
                        completed the surgery with good ease. The nursing staff is also too trained and well cultured.
                    </p>
                </div>
            </div>
        </div>
        <!-- ------------end---------------- -->
    </div>
@endsection
@extends('admin.index')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')

<style>
    .btn-danger, .btn-secondary, .btn-success{
        color: #ffffff !important;
    }
</style>

<div class="container">
<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Edit Doctor</h3>
                    <p class="card-description"> Please Update the details for Dr. {{ old('name', $doctor->name) }} </p>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('doctors.update', $doctor->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
    <label for="city" class="form-label">City</label>
    <select name="city" id="city" class="form-select" required>
        <option value="">Select a city</option>
        <option value="Delhi" {{ (old('city', $doctor->city) == 'Delhi') ? 'selected' : '' }}>Delhi</option>
        <option value="Gurgaon" {{ (old('city', $doctor->city) == 'Gurgaon') ? 'selected' : '' }}>Gurgaon</option>
    </select>
</div>

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $doctor->name) }}" required>
        </div>

        <div class="mb-3">
            <label for="degree_section" class="form-label">Degree Section</label>
            <input type="text" class="form-control" name="degree_section" value="{{ old('degree_section', $doctor->degree_section) }}">
        </div>

        <div class="mb-3">
            <label for="speciality" class="form-label">Speciality</label>
            <input type="text" class="form-control" name="speciality" value="{{ old('speciality', $doctor->speciality) }}">
        </div>

        <div class="mb-3">
            <label for="experience" class="form-label">Experience</label>
            <input type="text" class="form-control" name="experience" value="{{ old('experience', $doctor->experience) }}">
        </div>

        <div class="mb-3">
            <label for="degree_year" class="form-label">Degree Year</label>
            <input type="text" class="form-control" name="degree_year" value="{{ old('degree_year', $doctor->degree_year) }}">
        </div>

        <div class="mb-3">
            <label for="review" class="form-label">Review</label>
            <input type="text" class="form-control" name="review" value="{{ old('review', $doctor->review) }}">
        </div>

        <div class="mb-3">
            <label for="appointment_number" class="form-label">Appointment Number</label>
            <input type="text" class="form-control" name="appointment_number" value="{{ old('appointment_number', $doctor->appointment_number) }}">
        </div>

        <div class="mb-3">
            <label for="map_direction" class="form-label">Map Direction</label>
            <input type="text" class="form-control" name="map_direction" value="{{ old('map_direction', $doctor->map_direction) }}">
        </div>

        <div class="mb-3">
            <label for="bio_info" class="form-label">Bio Info</label>
            <textarea class="form-control" name="bio_info">{{ old('bio_info', $doctor->bio_info) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control" name="address" value="{{ old('address', $doctor->address) }}">
        </div>

        <div class="mb-3">
            <label for="hospital_name" class="form-label">Hospital Name</label>
            <input type="text" class="form-control" name="hospital_name" value="{{ old('hospital_name', $doctor->hospital_name) }}">
        </div>

        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" name="phone" value="{{ old('phone', $doctor->phone) }}">
        </div>


        <div class="d-flex mb-3 w-100">
    <div class="d-flex flex-column me-3" style="flex: 1;">
        <label for="rating" class="form-label">Rating (1-5)</label>
        <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" step="0.1" value="{{ old('rating', $doctor->rating) }}" required>
        <div id="rating-error" class="text-danger mt-1" style="display: none; white-space: nowrap;">Please enter a rating between 1 and 5.</div>
    </div>
    
    <div class="d-flex flex-column" style="flex: 2;">
        <label for="landmark" class="form-label">Landmark</label>
        <input type="text" name="landmark" id="landmark" value="{{ old('landmark', $doctor->landmark) }}" class="form-control" required>
    </div>
</div>
<br>
<br>
<br>
<hr>
<br>
<br>
<br>

        <div id="availability-section">
    <h3>Availability</h3>
    @foreach($doctor->availability as $availability)
        <div class="availability-item">
            <div class="mb-3">
                <label for="days[]" class="form-label">Day</label>
                <input type="text" name="days[]" class="form-control" required placeholder="e.g., Mon, Tue, Wed" value="{{ $availability->day }}">
            </div>
            <div class="mb-3">
                <label for="times[]" class="form-label">Time</label>
                <input type="text" name="times[]" class="form-control" required placeholder="e.g., 12:00 PM - 06:00 PM" value="{{ $availability->time }}">
            </div>
        </div>
    @endforeach
    </div>

 
<br>
<br>
<br>
<hr>
<br>
<br>
<br>

        <div id="services-section">
    <h3>Services</h3>
    <div class="mb-3">
            <label for="service_heading" class="form-label">Service Heading</label>
            <input type="text" class="form-control" name="service_heading" value="{{ old('service_heading', $doctor->service_heading) }}">
        </div>
        <label for="services[]" class="form-label">Service</label>
    @foreach(json_decode($doctor->services) as $service)
        <div class="service-item mb-3 d-flex align-items-center">
            <div class="flex-grow-1">
                <input type="text" name="services[]" class="form-control" placeholder="Service name" required value="{{ $service }}">
            </div>
            <button type="button" class="btn btn-danger remove-service ms-2">Remove</button>
        </div>
    @endforeach
  
    <button type="button" id="add-service" class="btn btn-primary mt-3">Add Service</button>
</div>
<br>
<br>
<br>
<hr>
<br>
<br>
<br>
<div id="education-section">
    <h3>Education</h3>
    @foreach(json_decode($doctor->education) as $education)
        <div class="education-item mb-3 d-flex align-items-center">
            <div class="flex-grow-1">
                <label for="degree[]" class="form-label">Degree</label>
                <input type="text" name="degree[]" class="form-control" required value="{{ $education->degree }}">
            </div>
            <div class="flex-grow-1">
                <label for="institution[]" class="form-label">Institution</label>
                <input type="text" name="institution[]" class="form-control" required value="{{ $education->institution }}">
            </div>
            <div class="flex-grow-1">
                <label for="year[]" class="form-label">Year</label>
                <input type="text" name="year[]" class="form-control" required value="{{ $education->year }}">
            </div>
            <button type="button" class="btn btn-danger remove-education ms-2">Remove</button>
        </div>
    @endforeach

    <button type="button" id="add-education" class="btn btn-primary mt-3">Add Education</button>
</div>
<br>
<br>
<br>
<hr>
<br>
<br>
<br>
<div class="experience mt-3 box-shadow">
    <h3 class="text-blue poppins-bold">Experience</h3>
    <div id="experience-section">
        @foreach(json_decode($doctor->doctor_experience) as $experience)
            <div class="experience-item mb-3 d-flex align-items-center">
                <div class="flex-grow-1">
                    <label for="job_title[]" class="form-label">Job Title</label>
                    <input type="text" name="job_title[]" class="form-control" required value="{{ $experience->title }}">
                </div>
                <div class="flex-grow-1">
                    <label for="years[]" class="form-label">Years</label>
                    <input type="text" name="years[]" class="form-control" required value="{{ $experience->years }}">
                </div>
                <div class="flex-grow-1">
                    <label for="institution1[]" class="form-label">Institution</label>
                    <input type="text" name="institution1[]" class="form-control" required value="{{ $experience->institution1 }}">
                </div>
                <button type="button" class="btn btn-danger remove-experience ms-2">Remove</button>
            </div>
        @endforeach
        
    <button type="button" id="add-experience" class="btn btn-primary mt-3">Add Experience</button>
</div>
<br>
<br>
<br>
<hr>
<br>
<br>
<br>
<div class="achievements mt-3 box-shadow">
    <h3 class="text-blue poppins-bold" id="heading-5">
        Achievements & <span class="text-brown">Awards</span>
    </h3>
    <div id="achievements-section">
        @if(isset($doctor->achievements))
            @foreach(json_decode($doctor->achievements) as $achievement)
                <div class="achievement-item mb-3 d-flex align-items-center">
                    <input type="text" name="achievements[]" class="form-control" placeholder="Achievement" required value="{{ $achievement }}">
                    <button type="button" class="btn btn-danger remove-achievement ms-2">Remove</button>
                </div>
            @endforeach
        @endif

    </div>
    <button type="button" id="add-achievement" class="btn btn-primary mt-3">Add Achievement</button>
</div>
<br>
<br>
<br>
<hr>
<br>
<br>
<br>
<div class="specialisations mt-3 box-shadow">
    <h3 class="text-blue poppins-bold" id="heading-6">
        Specialisations
    </h3>
    <div id="specialisations-section">
        @if(isset($doctor->specialisations))
            @foreach(json_decode($doctor->specialisations) as $specialisation)
                <div class="specialisation-item mb-3 d-flex align-items-center">
                    <input type="text" name="specialisations[]" class="form-control" placeholder="Specialisation" required value="{{ $specialisation }}">
                    <button type="button" class="btn btn-danger remove-specialisation ms-2">Remove</button>
                </div>
            @endforeach
        @endif

    <button type="button" id="add-specialisation" class="btn btn-primary mt-3">Add Specialisation</button>
</div>
<br>
<br>
<br>
<hr>
<br>
<br>
<br>
<div id="conditions-container">
    <h3 class="text-blue poppins-bold">FAQs</h3>
    @if(isset($doctor->conditions))
        @foreach(json_decode($doctor->conditions) as $index => $condition)
        <div class="condition-item mb-3 d-flex align-items-start">
    <div class="d-flex flex-column me-3" style="flex: 1;">
        <label class="form-label">Question:</label>
        <input type="text" name="conditions[{{ $index }}][question]" class="form-control" value="{{ $condition->question }}" required>
    </div>

    <div class="d-flex flex-column me-3" style="flex: 2;">
        <label class="form-label">Answer:</label>
        <textarea name="conditions[{{ $index }}][answer]" class="form-control" required>{{ $condition->answer }}</textarea>
    </div>

    <button type="button" class="btn btn-danger remove-condition mt-4">Remove</button>
</div>

        @endforeach
    @endif
    
    <button type="button" id="add-condition" class="btn btn-primary mt-2">Add FAQs</button>
</div>

<br>
<br>
<br>
<hr>
<br>
<br>
<br>
        <div class="mb-3">
            <label for="photo_path" class="form-label">Photo</label>
            <input type="file" class="form-control" name="photo_path">
            @if($doctor->photo_path)
                <img src="{{ asset('storage/' . $doctor->photo_path) }}" alt="Doctor Photo" width="100">
            @endif
        </div>

     
        <button type="submit" class="btn btn-success">Update Doctor</button>
    </form>
</div>
</div>
</div>
</div>
<script>
    document.getElementById('add-availability').addEventListener('click', function() {
        const availabilitySection = document.getElementById('availability-section');
        const availabilityItems = availabilitySection.getElementsByClassName('availability-item');
        if (availabilityItems.length >= 2) {
            alert('Only two availability entries are allowed.');
            return;
        }
        const newAvailability = availabilityItems[0].cloneNode(true);
        newAvailability.querySelectorAll('input').forEach(input => input.value = '');
        availabilitySection.insertBefore(newAvailability, document.getElementById('add-availability'));
        if (availabilityItems.length >= 2) {
            document.getElementById('add-availability').disabled = true;
        }
    });
</script>
<script>
    document.getElementById('add-service').addEventListener('click', function() {
        const serviceSection = document.getElementById('services-section');
        const newService = document.createElement('div');
        newService.className = 'service-item mb-3 d-flex align-items-center';
        newService.innerHTML = `
            <div class="flex-grow-1">
                <label for="services[]" class="form-label">Service</label>
                <input type="text" name="services[]" class="form-control" placeholder="Service name" required>
            </div>
            <button type="button" class="btn btn-danger remove-service ms-2">Remove</button>
        `;
        serviceSection.insertBefore(newService, document.getElementById('add-service'));
    });

    // Remove service functionality
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-service')) {
            const serviceItem = event.target.closest('.service-item');
            if (serviceItem) {
                serviceItem.remove();
            }
        }
    });
</script>
<script>
    document.getElementById('add-education').addEventListener('click', function() {
        const educationSection = document.getElementById('education-section');
        const educationItems = educationSection.getElementsByClassName('education-item');
        
        // Clone the first education item
        const newEducation = educationItems[0].cloneNode(true);
        
        // Clear the input values in the cloned item
        const inputs = newEducation.querySelectorAll('input');
        inputs.forEach(input => input.value = '');
        
        // Append the new education item to the education section
        educationSection.appendChild(newEducation);
    });

    // Remove education functionality
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-education')) {
            const educationItem = event.target.closest('.education-item');
            if (educationItem) {
                educationItem.remove();
            }
        }
    });
</script>
<script>
    document.getElementById('add-experience').addEventListener('click', function() {
        const experienceSection = document.getElementById('experience-section');
        const experienceItems = experienceSection.getElementsByClassName('experience-item');
        
        // Clone the first experience item
        const newExperience = experienceItems[0].cloneNode(true);
        
        // Clear the input values in the cloned item
        const inputs = newExperience.querySelectorAll('input');
        inputs.forEach(input => input.value = '');
        
        // Append the new experience item to the experience section
        experienceSection.appendChild(newExperience);
    });

    // Remove experience functionality
    document.addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-experience')) {
            const experienceItem = event.target.closest('.experience-item');
            if (experienceItem) {
                experienceItem.remove();
            }
        }
    });
</script>
<script>
    document.getElementById('add-achievement').addEventListener('click', function() {
        const achievementsSection = document.getElementById('achievements-section');
        const newAchievement = document.createElement('div');
        newAchievement.classList.add('achievement-item', 'mb-3', 'd-flex', 'align-items-center');
        newAchievement.innerHTML = `
            <input type="text" name="achievements[]" class="form-control" placeholder="Achievement" required>
            <button type="button" class="btn btn-danger remove-achievement ms-2">Remove</button>
        `;
        achievementsSection.appendChild(newAchievement);
    });

    // Add functionality to remove an achievement
    document.getElementById('achievements-section').addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-achievement')) {
            event.target.closest('.achievement-item').remove();
        }
    });
</script>
<script>
    document.getElementById('add-specialisation').addEventListener('click', function() {
        const specialisationsSection = document.getElementById('specialisations-section');
        const newSpecialisation = document.createElement('div');
        newSpecialisation.classList.add('specialisation-item', 'mb-3', 'd-flex', 'align-items-center');
        newSpecialisation.innerHTML = `
            <input type="text" name="specialisations[]" class="form-control" placeholder="Specialisation" required>
            <button type="button" class="btn btn-danger remove-specialisation ms-2">Remove</button>
        `;
        specialisationsSection.appendChild(newSpecialisation);
    });

    // Add functionality to remove a specialisation
    document.getElementById('specialisations-section').addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-specialisation')) {
            event.target.closest('.specialisation-item').remove();
        }
    });
</script>
<script>
    document.getElementById('add-condition').addEventListener('click', function() {
        let container = document.getElementById('conditions-container');
        let conditionCount = container.querySelectorAll('.condition-item').length;

        // Limit the number of conditions to, for example, 5
        if (conditionCount >= 5) {
            alert('You can only add up to 5 conditions.');
            return;
        }

        let newCondition = document.createElement('div');
        newCondition.classList.add('condition-item', 'mt-3');

        newCondition.innerHTML = `
            <label>Question:</label>
            <input type="text" name="conditions[${conditionCount}][question]" class="form-control" required>
            <label>Answer:</label>
            <textarea name="conditions[${conditionCount}][answer]" class="form-control" required></textarea>
            <button type="button" class="btn btn-danger remove-condition mt-2">Remove</button>
        `;
        container.appendChild(newCondition);
    });

    document.getElementById('conditions-container').addEventListener('click', function(event) {
        if (event.target.classList.contains('remove-condition')) {
            event.target.parentElement.remove();
        }
    });
</script>
<script>
    const ratingInput = document.getElementById('rating');
    const errorDiv = document.getElementById('rating-error');
    const submitButton = document.getElementById('submit');

    ratingInput.addEventListener('input', function () {
        const ratingValue = parseFloat(ratingInput.value);
        
        if (ratingValue < 0 || ratingValue > 5) {
            errorDiv.style.display = 'block';  
            submitButton.disabled = true;     
        } else {
            errorDiv.style.display = 'none';  
            submitButton.disabled = false;     
        }
    });
</script>
@endsection


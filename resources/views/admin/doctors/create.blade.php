@extends('admin.index')
@section('main-container')
@section('define_robots', 'index, follow')
@section('define_urltype', 'website') @section('ob_img', 'https://scihospital.com/public/assets/images/sci%20logo.webp')
<div class="container">

<div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h3 class="card-title">Add Doctor</h3>
                    <p class="card-description"> Please fill the details to add a new doctor </p>
    <form action="{{ route('doctors.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="mb-3">
    <label for="city" class="form-label">City</label>
    <select name="city" id="city" class="form-select" required>
        <option value="">Select a city</option>
        <option value="Delhi">Delhi</option>
        <option value="Gurgaon">Gurgaon</option>
    </select>
</div>
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        
        <div class="mb-3">
            <label for="degree_section" class="form-label">Degree Section</label>
            <input type="text" name="degree_section" id="degree_section" class="form-control">
        </div>

        <div class="mb-3">
            <label for="speciality" class="form-label">Speciality</label>
            <input type="text" name="speciality" id="speciality" class="form-control">
        </div>

        <div class="mb-3">
            <label for="experience" class="form-label">Experience</label>
            <input type="text" name="experience" id="experience" class="form-control">
        </div>

        <div class="mb-3">
            <label for="degree_year" class="form-label">Degree Year</label>
            <input type="text" name="degree_year" id="degree_year" class="form-control">
        </div>

        <div class="mb-3">
            <label for="review" class="form-label">Review</label>
            <input type="text" name="review" id="review" class="form-control">
        </div>

        <div class="mb-3">
            <label for="appointment_number" class="form-label">Appointment Number</label>
            <input type="text" name="appointment_number" id="appointment_number" class="form-control">
        </div>

        <div class="mb-3">
            <label for="photo_path" class="form-label">Photo</label>
            <input type="file" name="photo_path" id="photo_path" class="form-control" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="map_direction" class="form-label">Map Direction</label>
            <input type="text" name="map_direction" id="map_direction" class="form-control">
        </div>

        <div class="mb-3">
            <label for="bio_info" class="form-label">Bio</label>
            <textarea name="bio_info" id="bio_info" class="form-control"></textarea>
        </div>

        <div class="mb-3">
                    <label for="address" class="form-label">Address</label>
                    <input type="text" name="address" id="address" class="form-control" required>
        </div>

        <div class="mb-3">
                    <label for="hospital_name" class="form-label">Hospital Name</label>
                    <input type="text" name="hospital_name" id="hospital_name" class="form-control" required>
        </div>
        <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" name="phone" id="phone" class="form-control" required>
         </div>

        <div class="d-flex mb-3 w-100">
    <div class="d-flex flex-column me-3" style="flex: 1;">
        <label for="rating" class="form-label">Rating (1-5)</label>
        <input type="number" name="rating" id="rating" class="form-control" min="1" max="5" step="0.1" required>
        <div id="rating-error" class="text-danger mt-1" style="display: none; white-space: nowrap;">Please enter a rating between 1 and 5.</div>
    </div>
    
    <div class="d-flex flex-column" style="flex: 2;">
        <label for="landmark" class="form-label">Landmark</label>
        <input type="text" name="landmark" id="landmark" class="form-control" required>
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
    <div class="availability-item">
        <div class="mb-3">
            <label for="days[]" class="form-label">Day</label>
            <input type="text" name="days[]" class="form-control" required placeholder="e.g., Mon, Tue, Wed">
        </div>
        <div class="mb-3">
            <label for="times[]" class="form-label">Time</label>
            <input type="text" name="times[]" class="form-control" required placeholder="e.g., 12:00 PM - 06:00 PM">
        </div>
    </div>
    <button type="button" id="add-availability" class="btn btn-primary mt-3">Add Availability</button>
</div>
<br>
<br>
<br>
<hr>
<br>
<br>
<br>

     
         <div id="availability-section">
                <h3>Service Offered</h3>
                <div class="mb-3">
                    <label for="service_heading" class="form-label">Service Heading</label>
                    <input type="text" name="service_heading" id="service_heading" class="form-control" required>
                </div>
          <div id="services-section">
             <div class="service-item mb-3">
               <label for="services[]" class="form-label">Service</label>
                <input type="text" name="services[]" class="form-control" placeholder="Service name" required>
              </div>
          <button type="button" id="add-service" class="btn btn-primary mt-3">Add Service</button>
          </div>
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
    <div class="education-item">
        <div class="mb-3">
            <label for="degree[]" class="form-label">Degree</label>
            <input type="text" name="degree[]" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="institution[]" class="form-label">Institution</label>
            <input type="text" name="institution[]" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="year[]" class="form-label">Year</label>
            <input type="text" name="year[]" class="form-control" required>
        </div>
    </div>
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
        <div class="experience-item">
            <div class="mb-3">
                <label for="job_title[]" class="form-label">Job Title</label>
                <input type="text" name="job_title[]" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="years[]" class="form-label">Years</label>
                <input type="text" name="years[]" class="form-control" required placeholder="e.g., 1999 - 2001">
            </div>
            <div class="mb-3">
                <label for="institution1[]" class="form-label">Institution</label>
                <input type="text" name="institution1[]" class="form-control" required>
            </div>
        </div>
    </div>
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
        <div class="achievement-item mb-3">
            <input type="text" name="achievements[]" class="form-control" placeholder="Achievement" required>
        </div>
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
        <div class="specialisation-item mb-3">
            <input type="text" name="specialisations[]" class="form-control" placeholder="Specialisation" required>
        </div>
    </div>
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
    <div class="condition-item">
    <h3 class="text-blue poppins-bold">FAQs</h3>
        <label>Question:</label>
        <input type="text" name="conditions[0][question]" class="form-control">
        <label>Answer:</label>
        <textarea name="conditions[0][answer]" class="form-control"></textarea>
    </div>
    <button type="button" id="add-condition" class="btn btn-primary mt-2">Add Condition</button>
</div>
<br>
<br>
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{ route('doctors.index') }}" class="btn btn-secondary">Back to List</a>
    </form>
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
        availabilitySection.insertBefore(newAvailability, document.getElementById('add-availability-button'));
        if (availabilityItems.length >= 2) {
            document.getElementById('add-availability').disabled = true;
        }
    });
</script>
<script>
    document.getElementById('add-service').addEventListener('click', function() {
    const serviceSection = document.getElementById('services-section');
    const newService = document.createElement('div');
    newService.className = 'service-item mb-3';
    newService.innerHTML = `
        <label for="services[]" class="form-label">Service</label>
        <input type="text" name="services[]" class="form-control" placeholder="Service name" required>
    `;
    serviceSection.insertBefore(newService, document.getElementById('add-service'));
});

</script>
<script>
    document.getElementById('add-education').addEventListener('click', function() {
        const educationSection = document.getElementById('education-section');
        const educationItems = educationSection.getElementsByClassName('education-item');
        const newEducation = educationItems[0].cloneNode(true);
        const inputs = newEducation.querySelectorAll('input');
        inputs.forEach(input => input.value = '');
        educationSection.appendChild(newEducation);
    });
</script>
<script>
    document.getElementById('add-experience').addEventListener('click', function() {
        const experienceSection = document.getElementById('experience-section');
        const experienceItems = experienceSection.getElementsByClassName('experience-item');
        const newExperience = experienceItems[0].cloneNode(true);
        const inputs = newExperience.querySelectorAll('input');
        inputs.forEach(input => input.value = '');
        experienceSection.appendChild(newExperience);
    });
</script>
<script>
    document.getElementById('add-achievement').addEventListener('click', function() {
        const achievementsSection = document.getElementById('achievements-section');
        const newAchievement = document.createElement('div');
        newAchievement.classList.add('achievement-item', 'mb-3');
        newAchievement.innerHTML = '<input type="text" name="achievements[]" class="form-control" placeholder="Achievement" required>';
        achievementsSection.appendChild(newAchievement);
    });
</script>
<script>
    document.getElementById('add-specialisation').addEventListener('click', function() {
        const specialisationsSection = document.getElementById('specialisations-section');
        const newSpecialisation = document.createElement('div');
        newSpecialisation.classList.add('specialisation-item', 'mb-3');
        newSpecialisation.innerHTML = '<input type="text" name="specialisations[]" class="form-control" placeholder="Specialisation" required>';
        specialisationsSection.appendChild(newSpecialisation);
    });
</script>
<script>
    document.getElementById('add-condition').addEventListener('click', function() {
        let container = document.getElementById('conditions-container');
        let conditionCount = container.querySelectorAll('.condition-item').length;

        let newCondition = document.createElement('div');
        newCondition.classList.add('condition-item', 'mt-3');

        newCondition.innerHTML = `
            <label>Question:</label>
            <input type="text" name="conditions[${conditionCount}][question]" class="form-control">
            <label>Answer:</label>
            <textarea name="conditions[${conditionCount}][answer]" class="form-control"></textarea>
        `;
        container.appendChild(newCondition);
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
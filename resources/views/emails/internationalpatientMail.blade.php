<div>Name : {{ isset($data['name']) ? $data['name'] : 'N/A' }}</div>
<br>
<div>Age : {{ isset($data['age']) ? $data['age'] : 'N/A' }}</div>
<br>
<div>Gender : {{ isset($data['gender']) ? $data['gender'] : 'N/A' }}</div>
<br>
<div>Phone : {{ isset($data['phone']) ? $data['phone'] : 'N/A' }}</div>
<br>
<div>Email : {{ isset($data['email']) ? $data['email'] : 'N/A' }}</div>
<br>
<div>Country : {{ isset($data['country']) ? $data['country'] : 'N/A' }}</div>
<br>
<div>Medical Procedure : <img src="{{ isset($data['image1']) ? url('public/'.$data['image1']) : 'N/A' }}" with="50"></div>
<br>
<div>Uploaded your documents/scans : <img src="{{ isset($data['image2']) ? url('public/'.$data['image2']) : 'N/A' }}" with="50"></div>
<br>
<div>Last Medical Prescription : <img src="{{ isset($data['image3']) ? url('public/'.$data['image3']) : 'N/A' }}" with="50"></div>
<br>
<div>Comments : {{ isset($data['Comments']) ? $data['Comments'] : 'N/A' }}</div>

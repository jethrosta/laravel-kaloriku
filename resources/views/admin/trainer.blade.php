@extends('layouts.admin')
@section('content')

 <div class="content-wrapper">

     <div class="col-12 grid-margin stretch-card">
         <div class="card">
             <div class="card-body">
                 <h4 class="card-title">Basic form elements</h4>
                 <p class="card-description">
                     Basic form elements
                 </p>
                 <form action="{{-- route('add-trainer') --}}" method="POST" enctype="multipart/form-data">
                     @csrf
                     <div class="form-group">
                         <label>File upload</label>
                         <input type="file" name="img[]" class="file-upload-default" onchange="previewImage(event)" style="display:none;">
                         <div class="input-group col-xs-12">
                             <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                             <span class="input-group-append">
      <button class="file-upload-browse btn btn-primary" type="button" onclick="document.querySelector('.file-upload-default').click()">Upload</button>
    </span>
                         </div>
                         <img id="preview" src="#" alt="Preview Image" style="display:none; max-width:200px;">
                     </div>

                     <div class="form-group">
                         <label for="name">Name</label>
                         <input type="text" class="form-control" id="name" name="name" required>
                     </div>

                     <div class="form-group">
                         <label for="email">Email</label>
                         <input type="email" class="form-control" id="email" name="email" required>
                     </div>

                     <div class="form-group">
                         <label for="phone">Phone Number</label>
                         <input type="tel" class="form-control" id="phone" name="phone" required>
                     </div>

                     <div class="form-group">
                         <label for="biography">Biography</label>
                         <textarea class="form-control" id="biography" name="biography" rows="3" required></textarea>
                     </div>

                     <div class="form-group">
                         <label for="profile-picture">Profile Picture</label>
                         <input type="file" class="form-control-file" id="profile-picture" name="profile-picture" required>
                     </div>

                     <div class="form-group">
                         <label for="availability">Availability</label>
                         <input type="text" class="form-control" id="availability" name="availability" required>
                     </div>

                     <div class="form-group">
                         <label for="specializations">Skills and Specializations</label>
                         <input type="text" class="form-control" id="specializations" name="specializations" required>
                     </div>

                     <div class="form-group">
                         <label for="certifications">Certification and Credentials</label>
                         <input type="text" class="form-control" id="certifications" name="certifications" required>
                     </div>

                     <div class="form-group">
                         <label for="compensation">Compensation</label>
                         <input type="number" class="form-control" id="compensation" name="compensation" required>
                     </div>

                     <div class="form-group">
                         <label for="employment-status">Employment Status</label>
                         <select class="form-control" id="employment-status" name="employment-status" required>
                             <option value="contractor">Contractor</option>
                             <option value="employee">Employee</option>
                         </select>
                     </div>

                     <button type="submit" class="btn btn-primary">Submit</button>
                 </form>

             </div>
         </div>
     </div>

 </div>


@endsection
@push('scripts')
    <script>
        function previewImage(event) {
            var preview = document.querySelector('#preview');
            var file = event.target.files[0];
            var reader = new FileReader();

            reader.addEventListener("load", function () {
                preview.src = reader.result;
                preview.style.display = "block";
            }, false);

            if (file) {
                reader.readAsDataURL(file);
            }
        }
    </script>
@endpush

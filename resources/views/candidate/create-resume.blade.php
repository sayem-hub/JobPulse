@extends('layouts.backend.app')
@section('title', 'Profile')
@section('content')

<div class="container">
<div class="card">
    <div class="card-header">
        <h5 class="text-center">Create Resume</h5>
    </div>
        <div class="card-body">
            <form action="{{ route('candidate.resume.store') }}" method="POST">
                @csrf
                <div class="row g-3">

                    <div class="input-group-sm col-md-6">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control" id="first_name" name="first_name">
                    </div>

                    
                    <div class="input-group-sm col-md-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="father_name">Father Name</label>
                        <input type="text" class="form-control" id="father_name" name="father_name">
                    </div>


                    <div class="input-group-sm col-md-6">
                        <label for="mother_name">Mother Name</label>
                        <input type="text" class="form-control" id="mother_name" name="mother_name">
                    </div>


                    <div class="input-group-sm col-md-4">
                        <label for="date_of_birth">Date of Birth</label>
                        <input type="date" class="form-control" id="date_of_birth" name="date_of_birth">
                    </div>

                    <div class="input-group-sm col-md-4">
                        <label for="gender">Gender</label>
                        <select class="form-select" name="gender">
                            <option value="" selected disabled>--Select--</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="input-group-sm col-md-4">
                        <label for="marital_status">Marital Status</label>
                        <select class="form-select" name="marital_status">
                            <option value="" selected disabled>--Select--</option>
                            <option value="Unmarried">Unmarried</option>
                            <option value="Married">Married</option>
                        </select>
                    </div>

                        
                    <div class="input-group-sm col-md-4">
                        <label for="nationality">Nationality</label>
                        <input type="text" class="form-control" id="nationality" name="nationality">
                    </div>

                    <div class="input-group-sm col-md-4">
                        <label for="national_id">National ID No.</label>
                        <input type="text" class="form-control" id="national_id" name="national_id">
                    </div>

                    <div class="input-group-sm col-md-4">
                        <label for="religion">Religion</label>
                        <select class="form-select" name="religion">
                            <option value="" selected disabled>--Select--</option>
                            <option value="Islam">Islam</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Christian">Christian</option>
                            <option value="Buddhist">Buddhist</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>


                    <div class="input-group-sm col-md-6">
                        <label for="contact_phone">Contact Number</label>
                        <input type="text" class="form-control" id="contact_phone" name="contact_phone">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="contact_email">Email</label>
                        <input type="email" class="form-control" id="contact_email" name="contact_email">
                    </div>

                
                    <div class="input-group-sm col-md-6">
                        <label for="present_address">Present Address</label>
                        <input type="text" class="form-control" id="present_address" name="present_address">
                    </div>


                    
                    <div class="input-group-sm col-md-6">
                        <label for="permanent_address">Permanent Address</label>
                        <input type="text" class="form-control" id="permanent_address" name="permanent_address">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="present_salary">Present Salary</label>
                        <input type="number" class="form-control" id="present_salary" name="present_salary">
                    </div>


                    <div class="input-group-sm col-md-6">
                        <label for="expected_salary">Expected Salary</label>
                        <input type="number" class="form-control" id="expected_salary" name="expected_salary">
                    </div>


                    <div class="input-group-sm col-md-6">
                        <label for="career_objective">Career Objectives</label>
                        <textarea class="form-control" id="career_objective" name="career_objective" rows="5"></textarea>
                        
                    </div>



                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary mt-6">Create Resume</button>

                </div>

            </form>
        </div>
</div>
</div>

    @endsection
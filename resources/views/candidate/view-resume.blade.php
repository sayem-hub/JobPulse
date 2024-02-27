@extends('layouts.backend.app')
@section('title', 'Resume View')
@section('content')

<div class="container">
    <div class="card">
        <div class="card-header">
            <h5 class="text-center">View Resume</h5>
        </div>
        <div class="card-body">
            <table class="table table-bordered ">

            <tr>
                <h5>Career Objectives</h5>
                <hr>
                {{-- <p>{{ $resume->career_objective }}</p> --}}
            </tr>

          
                <thead>
                    <tr>
                        <h5 colspan="2">Personal Information</h5>
                    </tr>
                    <tr>
                        <th>First Name</th>
                        <td>{{ $resume->first_name }}</td>
                    </tr>
                    <tr>
                        <th>Last Name</th>
                        <td>{{ $resume->last_name }}</td>
                    </tr>

                    <tr>
                        <th>Father Name</th>
                        <td>{{ $resume->father_name }}</td>
                    </tr>

                    <tr>
                        <th>Mother Name</th>
                        <td>{{ $resume->mother_name }}</td>
                    </tr>

                    <tr>
                        <th>Date of Birth</th>
                        <td>{{ $resume->date_of_birth }}</td>
                    </tr>

                    <tr>
                        <th>Gender</th>
                        <td>{{ $resume->gender }}</td>
                    </tr>

                    <tr>
                        <th>Marital Status</th>
                        <td>{{ $resume->marital_status }}</td>
                    </tr>

                    <tr>
                        <th>Nationality</th>
                        <td>{{ $resume->nationality }}</td>
                    </tr>

                    <tr>
                        <th>National ID</th>
                        <td>{{ $resume->national_id }}</td>
                    </tr>

                    <tr>
                        <th>Religion</th>
                        <td>{{ $resume->religion }}</td>
                    </tr>

                    <tr>
                        <th>Contact Number</th>
                        <td>{{ $resume->contact_phone }}</td>
                    </tr>

                    <tr>
                        <th>Email</th>
                        <td>{{ $resume->contact_email }}</td>
                    </tr>

                    <tr>
                        <th>Present Address</th>
                        <td>{{ $resume->present_address }}</td>
                    </tr>

                    <tr>
                        <th>Permanent Address</th>
                        <td>{{ $resume->permanent_address }}</td>
                    </tr>

                    <tr>
                        <th>Present Salary</th>
                        <td>{{ $resume->present_salary }}</td>
                    </tr>

                    <tr>
                        <th>Expected Salary</th>
                        <td>{{ $resume->expected_salary }}</td>
                    </tr>


                </thead> 
            </table>
        </div>
    </div>
</div>

    @endsection
@extends('layouts.backend.app')

@section('title', 'Create Job')
@section('content')

<div class="container">
   <h3 class="text-center">Create Job</h3>
   <form class="row g-3" action="{{ route('jobs.store') }}" method="POST">
   @csrf
      <div class="input-group-sm col-md-12">
        <label for="company_id" >Company</label>
        <select id="company_id" name="company_id" class="form-select">
          <option value="" selected>--Select--</option>
          @foreach ($loggedInUserCompanyList as $company)
             <option value="{{ $company->id }}">{{ $company->company_name }}</option>
          @endforeach
        </select>
      </div>

      <div class="input-group-sm col-md-3">
        <label for="job_title" >Job Title</label>
        <input type="text" class="form-control" id="job_title" name="job_title">
      </div>

      <div class="input-group-sm col-md-3">
        <label for="vacancy" >Number of Vaccany</label>
        <input type="text" class="form-control" id="vacancy" name="vacancy">
      </div>

      <div class="input-group-sm col-md-3">
         <label for="job_type_id" >Job Type</label>
         <select id="job_type_id" name="job_type_id" class="form-select">
            <option value selected>--Select--</option>
            @foreach ($jobTypeList as $type)
               <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
          </select>
       </div>

      
      <div class="input-group-sm col-md-3">
         <label for="degree_id" >Degree</label>
         <select id="degree_id" name="degree_id" class="form-select">
            <option value="" selected>--Select--</option>
            @foreach ($degreeList as $degree)
               <option value="{{ $degree->id }}">{{ $degree->name }}</option>
            @endforeach
          </select>
       </div>

       <div class="input-group-sm col-md-6">
        <label for="job_category_id" >Job Category</label>
        <select id="job_category_id" name="job_category_id" class="form-select">
           <option value="" selected>--Select--</option>
           @foreach ($categoryList as $category)
              <option value="{{ $category->id }}">{{ $category->name }}</option>
           @endforeach
         </select>
      </div>

       <div class="input-group-sm col-md-6">
         <label for="skills" >Skill</label>
       <select name="skills[]" multiple class="form-select">
         <option value="" selected>--Select--</option>
         @foreach($skills as $skill)
             <option value="{{ $skill->id }}">{{ $skill->skill_name }}</option>
         @endforeach
     </select>
       </div>

       <div class="input-group-sm col-md-8">
        <label for="requirements" >Requirements</label>
        <input type="text" class="form-control" id="requirements" name="requirements">
      </div>

      <div class="input-group-sm col-md-4">
        <label for="experience_level">Experience in Year</label>
        <input type="text" class="form-control" id="experience_level" name="experience_level">
      </div>



       <div class="input-group-sm form-group">
         <label for="responsibilities">Job Description/Responsibilities</label>
         <ul id="responsibilities-list">
           
         </ul>
         <button type="button" id="add-responsibility-btn" class="btn btn-sm btn-info">Add Responsibility</button>
         <input type="hidden" name="responsibilities[]" id="responsibilities-input" value="">
     </div>


      <div class="input-group-sm col-md-12">
        <label for="work_place" >Work Place</label>
        <select class="form-select" name="work_place">
          <option value="" selected>--Select--</option>
          <option value="office">Office</option>
          <option value="hybrid">Hybrid</option>
          <option value="remote">Remote</option>
        
      </select>
      </div>


      <div class="input-group-sm col-md-6">
        <label for="district_id">District</label>
        <select class="form-select" name="district_id">
            <option value="" selected readonly>--Select--</option>
           @foreach ($districts as $district)
               <option value="{{ $district->id }}">{{ $district->name }}</option>
           @endforeach
        </select>
    </div>

    <div class="input-group-sm col-md-6">
        <label for="division_id">Division</label>
        <select class="form-select" name="division_id">
            <option value="" selected readonly>--Select--</option>
           @foreach ($divisions as $division)
               <option value="{{ $division->id }}">{{ $division->division_name }}</option>
           @endforeach
        </select>
    </div>

   

      <div class="input-group-sm col-md-3">
         <label for="salary_range" >Salary Range</label>
         <input type="text" class="form-control" id="salary_range" name="salary_range">
      </div>

      <div class="input-group-sm col-md-6">
        <label for="salary_review">Salary Reveiw</label>
        <select class="form-select" name="salary_review">
            <option value="" selected readonly>--Select--</option>
            <option value="monthly">Monthly</option>
            <option value="yearly">Yearly</option>
            <option value="half-yearly">Half-Yearly</option>
        </select>
    </div>

    <div class="input-group-sm col-md-6">
      <label for="festival_bonus">Festival Bonous</label>
      <select class="form-select" name="festival_bonus">
          <option value="" selected readonly>--Select--</option>
          <option value="1">Yes</option>
          <option value="0">No</option> 
      </select>
  </div>

        <div class="input-group-sm col-md-6">
          <label for="age_range">Age Range</label>
          <select class="form-select" name="age_range">
              <option value="" selected readonly>--Select--</option>
              <option value="20 to 25 Years">20 to 25 Years</option>
              <option value="25 to 30 Years">25 to 30 Years</option>
              <option value="30 to 35 Years">30 to 35 Years</option>
              <option value="35 to 40 Years">35 to 40 Years</option>
              <option value="40 to 50 Years">40 to 50 Years</option>
          </select>
      </div>

            <div class="input-group-sm col-md-6">
              <label for="gender">Gender</label>
              <select class="form-select" name="gender">
                  <option value="" selected readonly>--Select--</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Both">Both</option>
                  <option value="Others">Others</option>
                  <option value="Any">Any</option>
              </select>
            </div>

            <div class="input-group-sm col-md-6">
              <label for="priority">Priority</label>
              <select class="form-select" name="priority">
                  <option value="" selected readonly>--Select--</option>
                  <option value="normal">Normal</option>
                  <option value="urgent">Urgent</option>
              </select>
            </div>

            <div class="input-group-sm col-md-6">
              <label for="is_featured">Do you want to feature list?</label>
              <select class="form-select" name="is_featured">
                  <option value="" selected readonly>--Select--</option>
                  <option value="1">Yes</option>
                  <option value="0">No</option>
              </select>
            </div>


      <div class="input-group-sm col-md-3">
         <label for="deadline" >Application Deadline</label>
         <input type="date" class="form-control" id="deadline" name="deadline">
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Post Job</button>
      </div>
    </form>
   </div>


   <script>
      $(document).ready(function() {
          $('#add-responsibility-btn').click(function() {
              var newResponsibility = prompt("Enter a new responsibility:");
              if (newResponsibility) {
                  $('#responsibilities-list').append('<li>' + newResponsibility + '</li>');
                  updateResponsibilitiesInput();
              }
          });
  
          function updateResponsibilitiesInput() {
              var responsibilities = [];
              $('#responsibilities-list li').each(function() {
                  responsibilities.push($(this).text());
              });
              $('#responsibilities-input').val(JSON.stringify(responsibilities));
          }
      });
  </script>
    @endsection

@extends('layouts.backend.app')

@section('title', 'Edit Job')
@section('content')

<div class="container">
   <h3 class="text-center">Edit Job</h3>
   <form class="row g-3" action="{{ route('jobs.update', $job->id) }}" method="POST">
   @csrf
      <div class="input-group-sm col-md-12">
        <label for="company_id" >Company</label>
        <select id="company_id" name="company_id" class="form-select">
          <option value="" selected>--Select--</option>
          @foreach ($loggedInUserCompanyList as $company)
          <option value="{{ $company->id }}" @if($company->id == $job->company_id) selected @endif>{{ $company->company_name }}</option>
          @endforeach
        </select>
      </div>

          <div class="input-group-sm col-md-3">
            <label for="job_title" >Job Title</label>
            <input type="text" class="form-control" id="job_title" name="job_title" value="{{ $job->job_title }}">
          </div>

          <div class="input-group-sm col-md-3">
            <label for="vacancy" >Number of Vaccany</label>
            <input type="text" class="form-control" id="vacancy" name="vacancy" value="{{ $job->vacancy }}">
          </div>

 
          <div class="input-group-sm col-md-3">
            <label for="job_type_id" >Job Type</label>
            <select id="job_type_id" name="job_type_id" class="form-select">
                <option value selected>--Select--</option>
                @foreach ($jobTypeList as $type)
                    <option value="{{ $type->id }}" @if($type->id == $job->job_type_id) selected @endif>{{ $type->name }}</option>
                @endforeach
              </select>
          </div>

  
            <div class="input-group-sm col-md-3">
              <label for="degree_id" >Degree</label>
              <select id="degree_id" name="degree_id" class="form-select">
                  <option value="" selected>--Select--</option>
                  @foreach ($degreeList as $degree)
                      <option value="{{ $degree->id }}" @if($degree->id == $job->degree_id) selected @endif>{{ $degree->name }}</option>
                  @endforeach
                </select>
            </div>

          <div class="input-group-sm col-md-6">
            <label for="job_category_id" >Job Category</label>
            <select id="job_category_id" name="job_category_id" class="form-select">
              <option value="" selected>--Select--</option>
                    @foreach ($categoryList as $category)
                    <option value="{{ $category->id }}" @if($category->id == $job->job_category_id) selected @endif>{{ $category->name }}</option>
                    @endforeach
            </select>
          </div>
          

            <div class="input-group-sm col-md-6">
              <label for="skills" >Skill</label>
            <select name="skills[]" multiple class="form-select">
              <option value="">--Select--</option>
              @foreach($skills as $skill)
              <option value="{{ $skill->id }}" @if(in_array($skill->id, $job->skills->pluck('id')->toArray())) selected @endif>{{ $skill->skill_name }}</option>
              @endforeach
          </select>
            </div>

              <div class="input-group-sm col-md-8">
                <label for="requirements" >Requirements</label>
                <input type="text" class="form-control" id="requirements" name="requirements" value="{{ $job->requirements }}">
              </div>

              <div class="input-group-sm col-md-4">
                <label for="experience_level">Experience in Year</label>
                <input type="text" class="form-control" id="experience_level" name="experience_level" value="{{ $job->experience_level }}">
              </div>



              <div class="form-group">
                <label for="responsibilities">Job Responsibilities</label>
                <ul id="responsibilities-list">
                  @if ($existingResponsibilities)
                    
                
                    @foreach(json_decode($existingResponsibilities[0]) as $responsibility)
                        <li>{{ $responsibility }}</li>
                    @endforeach
                    @endif
                </ul>
                <button type="button" id="add-responsibility-btn" class="btn btn-sm btn-info">Add Responsibility</button>
                <input type="hidden" name="responsibilities" id="responsibilities-input" value="{{ $existingResponsibilities[0] }}">
            </div>
            


              <div class="input-group-sm col-md-12">
                <label for="work_place" >Work Place</label>
                <select class="form-select" name="work_place">
                  <option value="" selected>--Select--</option>
                  <option value="office" {{ $job->work_place == 'office' ? 'selected' : '' }}>Office</option>
                  <option value="remote" {{ $job->work_place == 'remote' ? 'selected' : '' }}>Remote</option>
                  <option value="hybrid" {{ $job->work_place == 'hybrid' ? 'selected' : '' }}>Hybrid</option>
              </select>
              </div>

         

              <div class="input-group-sm col-md-6">
                <label for="district_id">District</label>
                <select class="form-select" name="district_id">
                    <option value="" selected disabled>--Select--</option>
                  @foreach ($districts as $district)
                      <option value="{{ $district->id }}" @if($district->id == $job->district_id) selected @endif>{{ $district->name }}</option>
                  @endforeach
                </select>
            </div>



              <div class="input-group-sm col-md-6">
                  <label for="division_id">Division</label>
                  <select class="form-select" name="division_id">
                      <option value="" selected disabled>--Select--</option>
                    @foreach ($divisions as $division)
                        <option value="{{ $division->id }}" @if($division->id == $job->division_id) selected @endif>{{ $division->division_name }}</option>
                    @endforeach
                  </select>
              </div>



              <div class="input-group-sm col-md-3">
                <label for="salary_range" >Salary Range</label>
                <input type="text" class="form-control" id="salary_range" name="salary_range" value="{{ $job->salary_range }}">
              </div>

              <div class="input-group-sm col-md-6">
                <label for="salary_review">Salary Reveiw</label>
                <select class="form-select" name="salary_review">
                    <option value="" selected disabled>--Select--</option>
                    <option value="yearly" {{ $job->salary_review == 'yearly' ? 'selected' : '' }}>Yearly</option>
                    <option value="monthly" {{ $job->salary_review == 'monthly' ? 'selected' : '' }}>Monthly</option>
                    <option value="half-yearly" {{ $job->salary_review == 'half-yearly' ? 'selected' : '' }}>Half-Yearly</option>
                </select>
            </div>

            <div class="input-group-sm col-md-6">
              <label for="festival_bonus">Festival Bonous</label>
              <select class="form-select" name="festival_bonus">
                  <option value="" selected disabled>--Select--</option>
                  <option value="1" {{ $job->festival_bonus == '1' ? 'selected' : '' }}>Yes</option>
                  <option value="0" {{ $job->festival_bonus == '0' ? 'selected' : '' }}>No</option>
              </select>
            </div>

          <div class="input-group-sm col-md-6">
            <label for="age_range">Age Range</label>
            <select class="form-select" name="age_range">
                <option value="" selected disabled>--Select--</option>
                <option value="20 to 25 Years" {{ $job->age_range == '20 to 25 Years' ? 'selected' : '' }}>20 to 25 Years</option>
                <option value="25 to 30 Years" {{ $job->age_range == '25 to 30 Years' ? 'selected' : '' }}>25 to 30 Years</option>
                <option value="30 to 35 Years" {{ $job->age_range == '30 to 35 Years' ? 'selected' : '' }}>30 to 35 Years</option>
                <option value="35 to 40 Years" {{ $job->age_range == '35 to 40 Years' ? 'selected' : '' }}>35 to 40 Years</option>
                <option value="40 to 50 Years" {{ $job->age_range == '40 to 50 Years' ? 'selected' : '' }}>40 to 50 Years</option>
            </select>
        </div>

          <div class="input-group-sm col-md-6">
            <label for="gender">Gender</label>
            <select class="form-select" name="gender">
                <option value="" selected disabled>--Select--</option>
                <option value="Male" {{ $job->gender == 'Male' ? 'selected' : '' }}>Male</option>
                <option value="Female" {{ $job->gender == 'Female' ? 'selected' : '' }}>Female</option>
                <option value="Both" {{ $job->gender == 'Both' ? 'selected' : '' }}>Both</option>
                <option value="Other" {{ $job->gender == 'Other' ? 'selected' : '' }}>Other</option>
                <option value="Any" {{ $job->gender == 'Any' ? 'selected' : '' }}>Any</option>
            </select>
          </div>

            <div class="input-group-sm col-md-6">
              <label for="priority">Priority</label>
              <select class="form-select" name="priority">
                  <option value="" selected disabled>--Select--</option>
                  <option value="normal" {{ $job->priority == 'normal' ? 'selected' : '' }}>Normal</option>
                  <option value="urgent" {{ $job->priority == 'urgent' ? 'selected' : '' }}>Urgent</option>
              </select>
            </div>

       


            <div class="input-group-sm col-md-3">
              <label for="deadline" >Application Deadline</label>
              <input type="date" class="form-control" id="deadline" name="deadline" value="{{ $job->deadline }}">
            </div>



           

            <div class="input-group-sm col-md-6">
              <label for="is_featured">Do you want to feature list?</label>
              <select class="form-select" name="is_featured">
                  <option value="" selected disabled>--Select--</option>
                  <option value="1" {{ $job->is_featured == '1' ? 'selected' : '' }}>Yes</option>
                  <option value="0" {{ $job->is_featured == '0' ? 'selected' : '' }}>No</option>
              </select>
            </div>

            <div class="col-12">
              <button type="submit" class="btn btn-primary">Update Job</button>
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

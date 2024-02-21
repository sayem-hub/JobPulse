@extends('layouts.backend.app')

@section('title', 'Edit Job')
@section('content')

<div class="container">
   <h3 class="text-center">Edit Job</h3>
   <form class="row g-3" action="{{ route('jobs.update', $job->id) }}" method="POST">
   @csrf
      <div class="col-md-12">
        <label for="company_id" class="form-label">Company</label>
        <select id="company_id" name="company_id" class="form-select">
          <option selected>--Select--</option>
          @foreach ($loggedInUserCompanyList as $company)
            <option value="{{ $company->id }}" @if($company->id == $job->company_id) selected @endif>{{ $company->company_name }}</option>
          @endforeach
        </select>
      </div>

      <div class="col-md-6">
        <label for="job_title" class="form-label">Job Title</label>
        <input type="text" class="form-control" id="job_title" name="job_title" value="{{ $job->job_title }}">
      </div>

      <div class="col-md-2">
        <label for="vacancy" class="form-label">Number of Post</label>
        <input type="text" class="form-control" id="vacancy" name="vacancy" value="{{ $job->vacancy }}">
      </div>

      <div class="col-md-4">
         <label for="job_type_id" class="form-label">Job Type</label>
         <select id="job_type_id" name="job_type_id" class="form-select">
            <option selected>--Select--</option>
            @foreach ($jobTypeList as $type)
            <option value="{{ $type->id }}" @if($type->id == $job->job_type_id) selected @endif>{{ $type->name }}</option>
            @endforeach
          </select>
       </div>

      
      <div class="col-md-6">
         <label for="degree_id" class="form-label">Degree</label>
         <select id="degree_id" name="degree_id" class="form-select">
            <option selected>--Select--</option>
            @foreach ($degreeList as $degree)
            <option value="{{ $degree->id }}" @if($degree->id == $job->degree_id) selected @endif>{{ $degree->name }}</option>
            @endforeach
          </select>
       </div>


       <div class="col-md-6">
         <label for="job_category_id" class="form-label">Job Category</label>
         <select id="job_category_id" name="job_category_id" class="form-select">
            <option selected>--Select--</option>
            @foreach ($categoryList as $category)
            <option value="{{ $category->id }}" @if($category->id == $job->job_category_id) selected @endif>{{ $category->name }}</option>
            @endforeach
          </select>
       </div>



      <div class="col-12">
         <label for="job_description" class="form-label">Job Description</label>
         <textarea class="form-control" id="job_description" name="job_description" rows="3">{{ $job->job_description }}</textarea>
       </div>


      <div class="col-md-12">
        <label for="job_location" class="form-label">Job Location Address</label>
        <input type="text" class="form-control" id="job_location" name="job_location" value="{{ $job->job_location }}">
      </div>

      <div class="col-md-3">
         <label for="min_salary" class="form-label">Minimum Salary</label>
         <input type="number" class="form-control" id="min_salary" name="min_salary" value="{{ $job->min_salary }}">
      </div>

      <div class="col-md-3">
         <label for="max_salary" class="form-label">Maximum Salary</label>
         <input type="number" class="form-control" id="max_salary" name="max_salary" value="{{ $job->max_salary }}">
      </div>

      <div class="col-md-3">
         <label for="deadline" class="form-label">Application Deadline</label>
         <input type="date" class="form-control" id="deadline" name="deadline" value="{{ $job->deadline }}">
      </div>

     

      <div class="col-6">
        <label for="is_featured" class="form-label">Is featured Job?</label>
        <select class="form-select" name="is_featured" id="is_featured">
          <option value="1" @if($job->is_featured == 1) selected @endif>Yes</option>
          <option value="0" @if($job->is_featured == 0) selected @endif>No</option>
        </select>
      </div>

      <div class="col-6">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" name="status" id="status">
            <option value="pending" @if($job->status == 'pending') selected @endif>Pending</option>
            <option value="active" @if($job->status == 'active') selected @endif>Active</option>
            <option value="expired" @if($job->status == 'expired') selected @endif>Expired</option>
        </select>
      </div>


      <div class="col-12">
        <button type="submit" class="btn btn-primary">Update Job</button>
      </div>

    </form>
   </div>
    @endsection
+
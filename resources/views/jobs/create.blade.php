@extends('layouts.backend.app')

@section('title', 'Create Job')
@section('content')

<div class="container">
   <h3 class="text-center">Create Job</h3>
   <form class="row g-3" action="{{ route('jobs.store') }}" method="POST">
   @csrf
      <div class="col-md-12">
        <label for="company_id" class="form-label">Company</label>
        <select id="company_id" name="company_id" class="form-select">
          <option selected>--Select--</option>
          @foreach ($loggedInUserCompanyList as $company)
             <option value="{{ $company->id }}">{{ $company->company_name }}</option>
          @endforeach
        </select>
      </div>

      <div class="col-md-6">
        <label for="job_title" class="form-label">Job Title</label>
        <input type="text" class="form-control" id="job_title" name="job_title">
      </div>

      <div class="col-md-2">
        <label for="vacancy" class="form-label">Number of Post</label>
        <input type="text" class="form-control" id="vacancy" name="vacancy">
      </div>

      <div class="col-md-4">
         <label for="job_type_id" class="form-label">Job Type</label>
         <select id="job_type_id" name="job_type_id" class="form-select">
            <option selected>--Select--</option>
            @foreach ($jobTypeList as $type)
               <option value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
          </select>
       </div>

      
      <div class="col-md-6">
         <label for="degree_id" class="form-label">Degree</label>
         <select id="degree_id" name="degree_id" class="form-select">
            <option selected>--Select--</option>
            @foreach ($degreeList as $degree)
               <option value="{{ $degree->id }}">{{ $degree->name }}</option>
            @endforeach
          </select>
       </div>


       <div class="col-md-6">
         <label for="job_category_id" class="form-label">Job Category</label>
         <select id="job_category_id" name="job_category_id" class="form-select">
            <option selected>--Select--</option>
            @foreach ($categoryList as $category)
               <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
          </select>
       </div>



      {{-- <div class="col-12">
        <label for="job_description" class="form-label">Job Description</label>
        <input type="text" class="form-control" id="job_description" name="job_description">
      </div> --}}

      <div class="col-12">
         <label for="job_description" class="form-label">Job Description</label>
         <textarea class="form-control" id="job_description" name="job_description" rows="3"></textarea>
       </div>


      <div class="col-md-12">
        <label for="job_location" class="form-label">Job Location Address</label>
        <input type="text" class="form-control" id="job_location" name="job_location">
      </div>

      <div class="col-md-3">
         <label for="min_salary" class="form-label">Minimum Salary</label>
         <input type="number" class="form-control" id="min_salary" name="min_salary">
      </div>

      <div class="col-md-3">
         <label for="max_salary" class="form-label">Maximum Salary</label>
         <input type="number" class="form-control" id="max_salary" name="max_salary">
      </div>

      <div class="col-md-3">
         <label for="deadline" class="form-label">Application Deadline</label>
         <input type="date" class="form-control" id="deadline" name="deadline">
      </div>

      <div class="col-12">
        <button type="submit" class="btn btn-primary">Create Job</button>
      </div>
    </form>
   </div>
    @endsection

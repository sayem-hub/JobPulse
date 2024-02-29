@extends('layouts.backend.app')

@section('title', 'Approve or Reject')
@section('content')
    <div class="container">
        <h4 class="text-center">Application Approval Portal</h4>

        <div class="row">
            <div class="col-md-6">

                <h5 class="text-center">Application ID: {{ $application->id }}</h5>
            </div>

            <div class="col-md-6">

                <h5 class="text-center">Job ID: {{ $application->job_id }}</h5>
            </div>
        </div>

        <div class="row">
          


        <form action="{{ route('application.approval.update', $application->id) }}" method="POST">
            @csrf
            <div class="form-group col-md-6">
                <label for="interview_status">Interview Status</label>
                <select name="interview_status" id="interview_status" class="form-control">
                    <option value="1">Pending</option>
                    <option value="2">Approved</option>
                    <option value="3">Rejected</option>
                </select>
            </div>

            <div class="form-group col-md-6">
                <label for="interview_date">Interview Date</label>
                <input type="date" name="interview_date" id="interview_date" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary mt-3">Update</button>

        </form>
        </div>
    </div>

@endsection
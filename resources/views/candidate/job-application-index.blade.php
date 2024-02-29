@extends('layouts.backend.app')
@section('title', 'Resume View')
@section('content')

<div class="container">
    
    <div class="row">
        <h3 class="text-center">My Job Application Status</h3>
        
        <div class="col-md-12">
            <table class="table table-bordered table-sm text-center small">
                <thead>
                    <tr>
                        <th>SL</th>
                        <th>Company Name</th>
                        <th>Job Title</th>
                        <th>Category</th>
                        <th>Type</th>
                        <th>Vaccancy</th>
                        <th>Job Description</th>
                        <th>Published Date</th>
                        <th>Application Date</th>
                        <th>Deadline</th>
                        <th>Interview Status</th>
                        <th>Interview Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobApplications as $key => $jobApplication)

                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $jobApplication->job->company->company_name }}</td>
                        <td>{{ $jobApplication->job->job_title }}</td>
                        <td>{{ $jobApplication->job->jobCategory->name }}</td>
                        <td>{{ $jobApplication->job->jobType->name }}</td>
                        <td>{{ $jobApplication->job->vacancy }}</td>
                        <td>{{ $jobApplication->job->responsibilities }}</td>
                        <td>{{ $jobApplication->job->published_at }}</td>
                        <td>{{ $jobApplication->created_at }}</td>
                        <td>{{ $jobApplication->job->deadline }}</td>
                        <td>
                            @if ($jobApplication->interview_status == 1)
                            <span class="badge bg-warning badge-warning">Pending</span>
                            @elseif ($jobApplication->interview_status == 2)
                            <span class="badge bg-success badge-success">Accepted</span>
                            @elseif ($jobApplication->interview_status == 0)
                            <span class="badge bg-danger badge-danger">Rejected</span>
                            @endif
                        </td>
                        <td>{{ $jobApplication->interview_date }}</td>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
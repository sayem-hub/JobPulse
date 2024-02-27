@extends('layouts.backend.app')
@section('title', 'Resume View')
@section('content')

<div class="container">
    
    <div class="row">
        <h3 class="text-center">My Job Application Status</h3>
        
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>SN</th>
                        <th>Job Title</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($jobApplications as $key => $jobApplication)

                    <tr>
                        <td>{{ ++$key }}</td>
                        <td>{{ $jobApplication->job->job_title }}</td>
                        <td>
                            @if ($jobApplication->status == 'pending')
                            <span class="badge bg-warning badge-warning">Pending</span>
                            @elseif ($jobApplication->status == 'accepted')
                            <span class="badge bg-success badge-success">Accepted</span>
                            @elseif ($jobApplication->status == 'rejected')
                            <span class="badge bg-danger badge-danger">Rejected</span>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
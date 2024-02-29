@extends('layouts.backend.app')
@section('title', 'Application List')
@section('content')
    <div class="container-fluid">
        <h4 class="text-center">Application List</h4>
        <table class="table table-bordered table-sm small">
            <thead>
                <tr class="text-center">
                    <th>SL</th>
                    <th>Published Date</th>
                    <th>Company Name</th>
                    <th>Job Title</th>
                    <th>Vaccancy</th>
                    <th>Applicant Name</th>
                    <th>Degree</th>
                    <th>Expereience</th>
                    <th>Age</th>
                    <th>Application Date</th>
                    <th>Interview Status</th>
                    <th>Interview Date</th>
                    <th>Job Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            @if (count($applications) == 0)
                <td colspan="14" class="text-center">No Application Found!</td>
            @endif
            <tbody>
                @foreach ($applications as $key => $application)

                    <tr class="text-center">
                        <th>{{ ++$key }}</th>
                        <td>{{ $application->job->published_at }}</td>
                        <td>{{ $application->company->company_name }}</td>
                        <td>{{ $application->job->job_title }}</td>
                        <td>{{ $application->job->vacancy }}</td>
                        <td>{{ $application->candidate->first_name }} {{ $application->candidate->last_name }}</td>
                        <td>{{ $application->candidate->education[0]->degree }}</td>
                        <td>{{ $application->candidate->experience->title }}</td>
                        <td>{{ \Carbon\Carbon::parse($application->candidate->date_of_birth)->diff(\Carbon\Carbon::now())->format('%y Years %m Months %d Days') }}</td>
                        <td>{{ $application->created_at }}</td>
                        <td>
                            @if ($application->interview_status == 1)
                                <span class="badge bg-warning badge-warning">Pending</span>
                            @elseif ($application->interview_status == 2)
                                <span class="badge bg-success badge-success">Accepted</span>
                            @else
                                <span class="badge bg-danger badge-danger">Declined</span>
                            @endif
                        </td>
                        <td>{{ $application->interview_date }}</td>
                        <td>{{ $application->job->status }}</td>
                        <td>
                        <a href="{{ route('candidate.resume.view', $application->candidate->id) }}" class="btn btn-primary btn-sm">View Resume</a>
                        <a href="{{ route('application.approval', $application->id) }}" class="btn btn-info btn-sm">Approve/Reject</a>
                    </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endSection
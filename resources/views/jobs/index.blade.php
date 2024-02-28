@extends('layouts.backend.app')
@section('title', 'Companies')
@section('content')
<div class="container-fluid">

    <h3 class="text-center">Jobs List</h3>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
   
    <a href="{{ route('jobs.create') }}" class="btn btn-success btn-sm">Add New Job</a>
    <table class="table table-bordered table-sm small table-responsive">
        <thead>
            <tr class="text-center">
                <th>SN</th>
                <th>Posting Date</th>
                <th>Published Date</th>
                <th>Company Name</th>
                <th>Designation</th>
                <th>Vaccancy</th>
                <th>Job Category</th>
                <th>Type</th>
                <th>Requirement</th>
                <th>Degree</th>
                <th>Experience</th>
                <th>Salary Range</th>
                <th>Work Place</th>
                <th>Location</th>
                <th>Deadline</th>
                <th>Application Count</th>
                <th>Is Featured</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        @if (count($jobs) == 0)
            <td colspan="15" class="text-center">No Job Found!</td>
        @endif
        <tbody>
            @foreach ($jobs as $key => $job)
                <tr class="text-center">
                    <th>{{ ++$key }}</th>
                    <td>{{ $job->created_at }}</td>
                    <td>{{ $job->published_at }}</td>
                    <td>{{ $job->company->company_name }}</td>
                    <td>{{ $job->job_title }}</td>
                    <td>{{ $job->vacancy }}</td>
                    <td>{{ $job->jobCategory->name }}</td>
                    <td>{{ $job->jobType->name }}</td>
                    <td>{{ $job->requirements }}</td>
                    <td>{{ $job->degrees->name }}</td>
                    <td>{{ $job->experience_level }}</td>
                    <td>{{ $job->salary_range }}</td>
                    <td>{{ $job->work_place }}</td>
                    <td>{{ $job->district->name }}, {{ $job->division->division_name }}</td>
                    <td>{{ $job->deadline }}</td>
                    <td>{{ $job->number_of_applications }}</td>
                    @if ($job->is_featured == 1)
                    <td><span class="badge bg-success badge-success">Yes</span></td>
                    @else
                    <td><span class="badge bg-warning badge-warning">No</span></td>
                    @endif
                    
                    @if ($job->status == 'published')
                    <td><span class="badge bg-success badge-success">Published</span></td>
                    @elseif ($job->status == 'pending')
                    <td><span class="badge bg-warning badge-warning">Pending</span></td>
                    @elseif ($job->status == 'expired')
                    <td><span class="badge bg-danger badge-danger">Expired</span></td>
                    @else
                    <td><span class="badge bg-secondary badge-secondary">Declined</span></td>
                    @endif
                   
                    <td><a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-primary btn-sm">Edit</td>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
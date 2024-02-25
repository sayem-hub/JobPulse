@extends('layouts.backend.app')
@section('title', 'Companies')
@section('content')
<div class="container">

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
                <th>Published Date</th>
                <th>Company Name</th>
                <th>Designation</th>
                <th>Vaccancy</th>
                <th>Job Category</th>
                <th>Type</th>
                <th>Degree</th>
                <th>Min Salary</th>
                <th>Max Salary</th>
                <th>Job Location</th>
                <th>Deadline</th>
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
                    <td>{{ $job->company->company_name }}</td>
                    <td>{{ $job->job_title }}</td>
                    <td>{{ $job->vacancy }}</td>
                    <td>{{ $job->jobCategory->name }}</td>
                    <td>{{ $job->jobType->name }}</td>
                    <td>{{ $job->degrees->name }}</td>
                    <td>{{ $job->min_salary }}</td>
                    <td>{{ $job->max_salary }}</td>
                    <td>{{ $job->job_location }}</td>
                    <td>{{ $job->deadline }}</td>
                    @if ($job->is_featured == 1)
                    <td><span class="badge bg-success badge-success">Yes</span></td>
                    @else
                    <td><span class="badge bg-warning badge-warning">No</span></td>
                    @endif
                    
                    @if ($job->status == 'active')
                    <td><span class="badge bg-success badge-success">Active</span></td>
                    @elseif ($job->status == 'pending')
                    <td><span class="badge bg-warning badge-warning">Pending</span></td>
                    @else
                    <td><span class="badge bg-danger badge-danger">Expired</span></td>
                    @endif
                   
                    <td><a href="{{ route('jobs.edit', $job->id) }}" class="btn btn-primary btn-sm">Edit</td>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
@extends('layouts.backend.app')
@section('title', 'Companies')
@section('content')

    <h3 class="text-center">Jobs List</h3>
   
    <a href="{{ route('jobs.create') }}" class="btn btn-success">Add New Job</a>
    <table class="table table-bordered ">
        <thead>
            <tr class="text-center">
                <th>SN</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Type</th>
                <th>Established Date</th>
                <th>Website</th>
                <th>Country</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobs as $key => $job)
                <tr class="text-center">
                    <th>{{ ++$key }}</th>
                    <td>{{ $job->company_name }}</td>
                    <td>{{ $job->company_email }}</td>
                    <td>{{ $job->company_phone }}</td>
                    <td>{{ $job->company_address }}</td>
                    <td>{{ $job->industry_type }}</td>
                    <td>{{ $job->establishment_date }}</td>
                    <td>{{ $job->website }}</td>
                    <td>{{ $job->company_country }}</td>
                    <td><a href="{{ route('job.edit', $job->id) }}" class="btn btn-primary">Edit</td>
            @endforeach
        </tbody>
    </table>
@endsection
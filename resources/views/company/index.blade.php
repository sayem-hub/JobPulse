@extends('layouts.backend.app')
@section('title', 'Companies')
@section('content')

    <h3 class="text-center">My Company</h3>
   
    <a href="{{ route('company.create') }}" class="btn btn-success">Add New Company</a>
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
            @foreach ($myCompanyList as $key => $company)
                <tr class="text-center">
                    <th>{{ ++$key }}</th>
                    <td>{{ $company->company_name }}</td>
                    <td>{{ $company->company_email }}</td>
                    <td>{{ $company->company_phone }}</td>
                    <td>{{ $company->company_address }}</td>
                    <td>{{ $company->industry_type }}</td>
                    <td>{{ $company->establishment_date }}</td>
                    <td>{{ $company->website }}</td>
                    <td>{{ $company->company_country }}</td>
                    <td><a href="{{ route('company.edit', $company->id) }}" class="btn btn-primary">Edit</td>
            @endforeach
        </tbody>
    </table>
@endsection
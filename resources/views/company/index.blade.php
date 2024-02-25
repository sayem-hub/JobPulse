@extends('layouts.backend.app')
@section('title', 'Companies')
@section('content')

<div class="container">

    <h3 class="text-center">My Company</h3>
   
    <a href="{{ route('company.create') }}" class="btn btn-success btn-sm">Add New Company</a>
    <table class="table table-bordered table-sm">
        <thead>
            <tr class="text-center">
                <th>SN</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Business Type</th>
                <th>Established Date</th>
                <th>Website</th>
                <th>Country</th>
                <th>Action</th>
            </tr>
        </thead>
        @if (count($myCompanyList) == 0)
            <td colspan="10" class="text-center">No Company Found!</td>
            
        @endif
        <tbody>
            @foreach ($myCompanyList as $key => $company)
                <tr class="text-center">
                    <th>{{ ++$key }}</th>
                    <td>{{ $company->company_name }}</td>
                    <td>{{ $company->company_email }}</td>
                    <td>{{ $company->company_phone }}</td>
                    <td>{{ $company->company_address }}</td>
                    <td>{{ $company->company_business }}</td>
                    <td>{{ $company->establishment_date }}</td>
                    <td>{{ $company->website }}</td>
                    <td>{{ $company->company_country }}</td>
                    <td><a href="{{ route('company.edit', $company->id) }}" class="btn btn-primary btn-sm">Edit</td>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
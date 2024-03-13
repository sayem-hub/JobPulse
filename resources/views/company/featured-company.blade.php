@extends('layouts.backend.app')
@section('title', 'Companies')
@section('content')

<div class="container">

    <h4 class="text-center">Featured Company</h3>
   
    
    <table class="table table-bordered table-sm small">
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
                <th>Is Featured</th>
                <th>Action</th>
            </tr>
        </thead>

        @if (count($featuredCompanies) == 0)
            <td colspan="11" class="text-center">No Company Found!</td>
        @endif
        <tbody>
            @foreach ($featuredCompanies as $key => $company)
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
                  
                    <td>
                        @if ($company->is_featured == 1)
                            <span class="badge bg-success">Yes</span>
                        @else
                            <span class="badge bg-danger">No</span>
                        @endif
                    </td>

                    
                   
                    <td><a href="{{ route('company.edit', $company->id) }}" class="btn btn-primary btn-sm">Edit</td>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
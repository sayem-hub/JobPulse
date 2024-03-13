@extends('layouts.backend.app')
@section('title', 'Edit Company')
@section('content')
<div class="container">

<div class="card">
    <div class="card-header">
        <h5 class="text-center">Edit Company</h5>
    </div>
        <div class="card-body">
            <form action="{{ route('company.update', $company->id) }}" method="POST">
                @csrf
                <div class="row g-3">

                    <div class="input-group-sm col-md-6">
                        <label for="company_name">Company Name</label>
                        <input type="text" class="form-control text-primary" id="company_name" name="company_name" value="{{ $company->company_name }}">

                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="company_email">Comany Email</label>
                        <input type="email" class="form-control text-primary" id="company_email" name="company_email" value="{{ $company->company_email }}">
                    </div>

                    
                    <div class="input-group-sm col-md-6">
                        <label for="company_phone">Contact Number</label>
                        <input type="text" class="form-control text-primary" id="company_phone" name="company_phone" value="{{ $company->company_phone }}">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="district_id">District</label>
                        <select class="form-select" name="district_id">
                            <option value="" selected readonly>--Select--</option>
                          
                        </select>
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="division_id">Division</label>
                        <select class="form-select" name="division_id">
                            <option value="" selected readonly>--Select--</option>
                           @foreach ($divisions as $division)
                               <option value="{{ $division->id }}">{{ $division->division_name }}</option>
                           @endforeach
                        </select>
                    </div>


                    <div class="input-group-sm col-md-6">
                        <label for="company_address">Address</label>
                        <input type="text" class="form-control text-primary" id="company_address" name="company_address" value="{{ $company->company_address }}"> 
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="company_country">Country</label>
                        <input type="text" class="form-control text-primary" id="company_country" name="company_country" value="{{ $company->company_country }}">
                    </div>


                    <div class="input-group-sm col-md-6">
                        <label for="industry_type">Company/Industry Type</label>
                        <select class="form-select" name="company_business">
                            <option value="" selected readonly>--Select--</option>
                            <option value="Manufacturer" {{ $company->company_business == 'Manufacturer' ? 'selected' : '' }}>Manufacturer</option>
                            <option value="Supplier" {{ $company->company_business == 'Supplier' ? 'selected' : '' }}>Supplier</option>
                            <option value="Service" {{ $company->company_business == 'Service' ? 'selected' : '' }}>Service</option>
                            <option value="Consultant" {{ $company->company_business == 'Consultant' ? 'selected' : '' }}>Consultant</option>
                            <option value="Importer" {{ $company->company_business == 'Importer' ? 'selected' : '' }}>Importer</option>
                            <option value="Exporter" {{ $company->company_business == 'Exporter' ? 'selected' : '' }}>Exporter</option>
                            <option value="Trader" {{ $company->company_business == 'Trader' ? 'selected' : '' }}>Trader</option>
                            <option value="Wholesaler" {{ $company->company_business == 'Wholesaler' ? 'selected' : '' }}>Wholesaler</option>
                            <option value="Transport" {{ $company->company_business == 'Transport' ? 'selected' : '' }}>Transport</option>
                            <option value="Other" {{ $company->company_business == 'Other' ? 'selected' : '' }}>Other</option>
                        </select>
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="establishment_date">Establishment Date</label>
                        <input type="date" class="form-control text-primary" id="establishment_date" name="establishment_date" value="{{ $company->establishment_date }}">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="company_size">Company Size</label>
                        <input type="text" class="form-control text-primary" id="company_size" name="company_size" value="{{ $company->company_size }}">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="website">Website</label>
                        <input type="text" class="form-control text-primary" id="website" name="website" value="{{ $company->website }}">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="facebook_url">Facebook URL</label>
                        <input type="text" class="form-control text-primary" id="facebook_url" name="facebook_url" value="{{ $company->facebook_url }}">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="twitter_url">Twitter Url</label>
                        <input type="text" class="form-control text-primary" id="twitter_url" name="twitter_url" value="{{ $company->twitter_url }}">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="linkedin_url">Linkedin Url</label>
                        <input type="text" class="form-control text-primary" id="linkedin_url" name="linkedin_url" value="{{ $company->linkedin_url }}">
                    </div>

                    @if (auth()->user()->role == 'admin')
                        <div class="input-group-sm col-md-4">
                            <label for="is_verified">Is Verified</label>
                            <select class="form-select" name="is_verified">
                                <option value="1" {{ $company->is_verified == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ $company->is_verified == 0 ? 'selected' : '' }}>No</option>
                            </select>
                        </div>

                        <div class="input-group-sm col-md-4">
                            <label for="is_featured">Is Featured</label>
                            <select class="form-select" name="is_featured">
                                <option value="1" {{ $company->is_featured == 1 ? 'selected' : '' }}>Yes</option>
                                <option value="0" {{ $company->is_featured == 0 ? 'selected' : '' }}>No</option>
                            </select>
                        </div>

                        <div class="input-group-sm col-md-4">
                            <label for="is_active">Is Active</label>
                            <select class="form-select" name="is_active">
                                <option value="1" {{ $company->is_active == 1 ? 'selected' : '' }}>Active</option>
                                <option value="0" {{ $company->is_active == 0 ? 'selected' : '' }}>Inactive</option>
                            </select>
                        </div>
                    @endif

                    <div class="input-group-sm col-md-6">
                        <label for="logo">Company Logo</label>
                        <input type="file" class="form-control" id="logo" name="logo">
                    </div>



                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary mt-6">Update</button>

                </div>

            </form>
        </div>
</div>

</div>
@endsection
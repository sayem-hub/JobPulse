@extends('layouts.backend.app')
@section('title', 'Profile')
@section('content')


<div class="card">
    <div class="card-header">
        <h5 class="text-center">Create Company</h5>
    </div>
        <div class="card-body">
            <form action="{{ route('company.store') }}" method="POST">
                @csrf
                <div class="row g-3">

                    <div class="input-group-sm col-md-6">
                        <label for="company_name">Company Name</label>
                        <input type="text" class="form-control text-primary" id="company_name" name="company_name">

                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="company_email">Comany Email</label>
                        <input type="email" class="form-control text-primary" id="company_email" name="company_email">
                    </div>

                    
                    <div class="input-group-sm col-md-6">
                        <label for="company_phone">Contact Number</label>
                        <input type="text" class="form-control text-primary" id="company_phone" name="company_phone">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="company_address">Address</label>
                        <input type="text" class="form-control text-primary" id="company_address" name="company_address">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="company_country">Country</label>
                        <input type="text" class="form-control text-primary" id="company_country" name="company_country">
                    </div>


                    <div class="input-group-sm col-md-6">
                        <label for="industry_type">Company/Industry Type</label>
                        <select class="form-select" name="industry_type">
                            <option value="" selected readonly>--Select--</option>
                            <option value="Manufacturer">Manufacturer</option>
                            <option value="Supplier">Supplier</option>
                            <option value="Service">Service</option>
                            <option value="Consultant">Consultant</option>
                            <option value="Importer">Importer</option>
                            <option value="Exporter">Exporter</option>
                            <option value="Trader">Trader</option>
                            <option value="Wholesaler">Wholesaler</option>
                            <option value="Transport">Transport</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="establishment_date">Establishment Date</label>
                        <input type="date" class="form-control text-primary" id="establishment_date" name="establishment_date">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="company_size">Company Size</label>
                        <input type="text" class="form-control text-primary" id="company_size" name="company_size">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="website">Website</label>
                        <input type="text" class="form-control text-primary" id="website" name="website">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="facebook_url">Facebook URL</label>
                        <input type="text" class="form-control text-primary" id="facebook_url" name="facebook_url">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="twitter_url">Twitter Url</label>
                        <input type="text" class="form-control text-primary" id="twitter_url" name="twitter_url">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="linkedin_url">Linkedin Url</label>
                        <input type="text" class="form-control text-primary" id="linkedin_url" name="linkedin_url">
                    </div>


                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary mt-6">Create</button>

                </div>

            </form>
        </div>
</div>


    @endsection
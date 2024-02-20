@extends('layouts.backend.app')
@section('title', 'Profile')
@section('content')


<div class="card">
    <div class="card-header">
        <h5 class="text-center">My Profile</h5>
    </div>
        <div class="card-body">
            <form action="{{ route('profile.update', Auth::user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row g-3">

                    <div class="input-group-sm col-md-6">
                        <label for="first_name">First Name</label>
                        <input type="text" class="form-control text-primary" id="first_name" name="first_name" value="{{ Auth::user()->first_name }}">

                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control text-primary" id="last_name" name="last_name" value="{{ Auth::user()->last_name }}">
                    </div>

                    
                    <div class="input-group-sm col-md-6">
                        <label for="company_namy">Company Name</label>
                        <input type="text" class="form-control text-primary" id="company_namy" name="company_namy" value="{{ Auth::user()->company_namy }}">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="email">Email</label>
                        <input type="text" class="form-control text-primary" id="email" name="email" value="{{ Auth::user()->email }}">
                    </div>

                    <div class="input-group-sm col-md-6">
                        <label for="phone">Phone</label>
                        <input type="text" class="form-control text-primary" id="phone" name="phone" value="{{ Auth::user()->phone }}">
                    </div>


                    <div class="input-group-sm col-md-6">
                        <label for="address">Address</label>
                        <input type="text" class="form-control text-primary" id="address" name="address" value="{{ Auth::user()->address }}">
                    </div>

                </div>
                <div class="d-flex justify-content-end mt-3">
                    <button type="submit" class="btn btn-primary mt-6">Update</button>

                </div>

            </form>
        </div>
</div>


    @endsection
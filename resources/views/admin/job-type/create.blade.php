@extends('layouts.backend.app')

@section('title', 'Create Job Type')
@section('content')
<div class="container">
    <h3 class="text-center">Create Job Type</h3>
    <form action="{{ route('type.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Type Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </div>
@endSection
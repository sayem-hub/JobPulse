@extends('layouts.backend.app')

@section('title', 'Edit Job Type')

@section('content')
    <div class="container">
        <h3 class="text-center">Edit Job Type</h3>
        <form action="{{ route('type.update', $jobType->id) }}" method="POST">
            @csrf           
            <div class="form-group">
                <label for="name">Type Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $jobType->name }}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endSection
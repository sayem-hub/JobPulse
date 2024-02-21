@extends('layouts.backend.app')

@section('title', 'Create Job Category')
@section('content')
<div class="container">
    <h3 class="text-center">Create Job Category</h3>
    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" class="form-control" id="description" name="description">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
    </div>
@endSection
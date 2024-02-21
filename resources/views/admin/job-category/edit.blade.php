@extends('layouts.backend.app')

@section('title', 'Edit Job Category')

@section('content')
    <div class="container">
        <h3 class="text-center">Edit Job Category</h3>
        <form action="{{ route('category.update', $category->id) }}" method="POST">
            @csrf
           
            <div class="form-group">
                <label for="name">Category Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}">
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $category->description }}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endSection
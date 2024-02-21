@extends('layouts.backend.app')

@section('title', 'Edit Job Type')

@section('content')
    <div class="container">
        <h3 class="text-center">Edit Degree</h3>
        <form action="{{ route('degree.update', $degree->id) }}" method="POST">
            @csrf           
            <div class="form-group">
                <label for="name">Degree Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $degree->name }}">
            </div>

            <div class="form-group">
                <label for="name">Description</label>
                <input type="text" class="form-control" id="description" name="description" value="{{ $degree->description }}">
            </div>
            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    </div>
@endSection
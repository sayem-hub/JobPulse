@extends('layouts.backend.app')

@section('title', 'Job Category')

@section('content')
<div class="container">
    <h3 class="text-center">Job Category</h3>
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif
    <a href="{{ route('category.create') }}" class="btn btn-success">Add New Job Category</a>
    <table class="table table-bordered ">
        <thead>
            <tr class="text-center">
                <th>SN</th>
                <th>Category Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key => $jobCategory)
                <tr class="text-center">
                    <th>{{ ++$key }}</th>
                    <td>{{ $jobCategory->name }}</td>
                    <td>{{ $jobCategory->description }}</td>
                    <td>
                        <a href="{{ route('category.edit', $jobCategory->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('category.delete', $jobCategory->id) }}" method="POST"
                            class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endSection
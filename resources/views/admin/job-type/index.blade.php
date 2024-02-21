@extends('layouts.backend.app')

@section('title', 'Job Type')

@section('content')
<div class="container">
    <h3 class="text-center">Job Type</h3>
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
    <a href="{{ route('type.create') }}" class="btn btn-success">Add New Job Type</a>
    <table class="table table-bordered ">
        <thead>
            <tr class="text-center">
                <th>SN</th>
                <th>Type Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($jobTypes as $key => $jobType)
                <tr class="text-center">
                    <th>{{ ++$key }}</th>
                    <td>{{ $jobType->name }}</td>
                    <td>
                        <a href="{{ route('type.edit', $jobType->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('type.delete', $jobType->id) }}" method="POST"
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
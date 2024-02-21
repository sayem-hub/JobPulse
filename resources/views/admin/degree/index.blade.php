@extends('layouts.backend.app')

@section('title', 'Degrees')

@section('content')
<div class="container">
    <h3 class="text-center">Degree List</h3>
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
    <a href="{{ route('degree.create') }}" class="btn btn-success">Add New Degree</a>
    <table class="table table-bordered ">
        <thead>
            <tr class="text-center">
                <th>SN</th>
                <th>Degree Name</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($degrees as $key => $degree)
                <tr class="text-center">
                    <th>{{ ++$key }}</th>
                    <td>{{ $degree->name }}</td>
                    <td>{{ $degree->description }}</td>
                    <td>
                        <a href="{{ route('degree.edit', $degree->id) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('degree.delete', $degree->id) }}" method="POST"
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
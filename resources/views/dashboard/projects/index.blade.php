@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Project List</h2>
    <a href="{{ route('projects.create') }}" class="btn btn-primary">Add Project</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Company</th>
                <th>Project</th>
                <th>Budget</th>
            </tr>
        </thead>
        <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->email }}</td>
                    <td>{{ $project->phone }}</td>
                    <td>{{ $project->company }}</td>
                    <td>{{ $project->project_name }}</td>
                    <td>${{ $project->budget }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
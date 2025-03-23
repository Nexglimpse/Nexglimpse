@extends('layouts.app')

@section('title', 'Home Page')

@section('css')
<style>
    body {
        background-color: #f8f9fa;
    }
    .table-container {
        margin: 50px auto;
        max-width: 95%;
    }
    .card {
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }
</style>
@endsection

@section('js')
    <link href="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/css/tabler.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@tabler/core@latest/dist/js/tabler.min.js"></script>
@endsection

@section('content')
<h2>Google Sheets Data</h2>
<div class="container table-container">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Task List</h3>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                        <tr>
                            @if(!empty($data) && count($data) > 0)
                                @foreach($data[0] as $header)
                                    <th>{{ $header }}</th>
                                @endforeach
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach(array_slice($data, 1) as $row)
                            <tr>
                                @foreach($row as $index => $cell)
                                    <td>
                                        @if($index == 4)  <!-- Assigned To Column -->
                                            <span class="badge text-white badge-lt bg-primary">{{ $cell }}</span>
                                        @elseif($index == 5)  <!-- Priority Column -->
                                            <span class="badge badge-lt text-white
                                                {{ $cell == 'High' ? 'bg-danger' : ($cell == 'Medium' ? 'bg-warning' : 'bg-success') }}">
                                                {{ strtoupper($cell) }}
                                            </span>
                                        @elseif($index == 6)  <!-- Status Column -->
                                            <span class="badge badge-lt  text-white
                                                {{ $cell == 'Completed' ? 'bg-success' : ($cell == 'In Progress' ? 'bg-warning' : 'bg-secondary') }}">
                                                {{ $cell }}
                                            </span>
                                        @else
                                            {{ $cell }}
                                        @endif
                                    </td>
                                @endforeach
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
    <form method="POST" action="{{ route('logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endsection
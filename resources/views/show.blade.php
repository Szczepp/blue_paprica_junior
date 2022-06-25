@extends('layouts.app')
@section('content')
    <div class="container m-lg-3">
        <h1>
            Example Table
        </h1>
        <a href="{{ route('main.home') }}" class="btn btn-secondary">Back</a>
    </div>
    <table class="table table-striped">
        <tr>
            <th> ID</th>
            <th> Name</th>
            <th> Surname</th>
            <th> Image</th>
        </tr>
        @if($examples->isEmpty())
            <tr>
                <td colspan="4"> Nothing to see</td>
            </tr>
        @endempty
        @foreach($examples as $example)
            <tr>
                <td> {{ $example->id  }} </td>
                <td> {{ $example->name  }} </td>
                <td> {{ $example->surname  }} </td>
                <td>
                    <img src="{{ asset('storage/' . $example->path) }}"
                         alt="{{ $example->path ?? "No image provided" }}" width="150" height="150"
                    >
                </td>
            </tr>
        @endforeach
    </table>
@endsection

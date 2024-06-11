@extends('layouts.admin')

@section('content')
    <h2>All Technologies</h2>

    <ul>
        @foreach ($technologies as $technology)
            <li>
                <a href="{{ route('admin.technologies.show', ['technology' => $technology->slug]) }}">
                    {{ $technology->name }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
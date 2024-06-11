@extends('layouts.admin')

@section('content')
    <h2>{{ $technology->name }}</h2>

    <h5 class="mt-4">Progetti</h5>
    @foreach ($technology->projects as $project)
        <div>
            <a href="{{ route('admin.projects.show', ['project' => $project->slug]) }}">
                {{ $project->name }}
            </a>
        </div>
    @endforeach
@endsection
@extends('layouts.admin')

@section('content')
    <h1>{{ $project->name }}</h1>

    <div>
        <h3><strong>ID: </strong> {{ $project->id }}</h3>
    </div>
    
    <div>
        <h3><strong>Slug: </strong> {{ $project->slug }}</h3>
    </div>

    <div>
        <strong>Type</strong>: {{ $project->type ? $project->type->name : 'none' }}
    </div>

    @if ($project->client_name)
        <div>
            <h3><strong>Client name: </strong> {{ $project->client_name ? $project->client_name : 'client name not found'}}</h3>
        </div>        
    @endif

{{--<div>
        <h3><strong>Client name: </strong> {{ $project->client_name ? $project->client_name : 'client name not found'}}</h3>
    </div> --}}

    

    <div>
        <h3><strong>Summary:</strong></h3>
        <p>{{ $project->summary }}</p>
    </div>

    <div>
        <h4><strong>Created at:</strong> {{ $project->created_at }}</h4>
        <h4><strong>Updated at:</strong> {{ $project->updated_at }}</h4>
    </div>

    @if ($project->cover_image)
        <div>
            <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->name }}">
        </div>
    @endif

    <div class="mt-5">
        <h4>Actions</h4>

        <div class="pb-2">
            <a class="btn btn-primary" href="{{ route('admin.projects.edit', ['project' => $project->id]) }}">Edit</a>
        </div>

        <div>
            <form action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}" method="POST">
                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </div>

    </div>
@endsection
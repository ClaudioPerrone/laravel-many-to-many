@extends('layouts.admin')

@section('content')
    <h1>Edit del post: {{ $project->name }}</h1>

    <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $project->name }}">
        </div>

        <div class="mb-3">
            <label for="client_name" class="form-label">Client Name</label>
            <input type="text" class="form-control" id="client_name" name="client_name" value="{{ $project->client_name }}">
        </div>

        <div class="mb-3">
            <label for="cover_image" class="form-label">Choose image</label>
            <input class="form-control" type="file" id="cover_image" name="cover_image">

            @if ($project->cover_image)
                <div>
                    <img src="{{ asset('storage/' . $project->cover_image) }}" alt="{{ $project->name }}">
                </div>
                  
                @else
                    <p>No image</p>
            @endif
        </div>

        <div class="mb-3">
            <label class="form-label" for="type_id">Type</label>
            <select class="form-select" id="type_id" name="type_id">
                <option value="">Select a type</option>
                @foreach ($types as $type)
                    <option @selected($type->id == old('type_id', $project->type_id)) value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="summary" class="form-label">Summary</label>
            <textarea class="form-control" id="summary" name="summary" rows="15">{{ $project->summary }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Save</button>
    </form>
@endsection
@extends('layouts.app')
@section('title')
    Edit
@endsection
@section('content')
    <form method="POST" action="{{ route('posts.update', 1) }}">
        @csrf
        @method('put')

        <!-- Title -->
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name='title' type="text" class="form-control" placeholder="Enter post title">
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name='description' class="form-control" rows="4" placeholder="Enter post description"></textarea>
        </div>

        <!-- Post Creator (Dropdown) -->
        <div class="mb-3">
            <label class="form-label">Post Creator</label>
            <select name='post_creator' class="form-select">
                <option selected disabled>Choose creator</option>
                <option>Ahmed</option>
                <option>Mona</option>
                <option>Youssef</option>
                <option>Sara</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">
            Update
        </button>

    </form>



@endsection
@extends('layouts.app')
@section('title')
    Edit
@endsection
@section('content')
    <form method="POST" action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('put')

        <!-- Title -->
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input name='title' type="text" class="form-control" value={{ $post->title}} placeholder="Enter post title">
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name='description' class="form-control" rows="4"
                placeholder="Enter post description">{{ $post->description }}</textarea>
        </div>

        <!-- Post Creator (Dropdown) -->
        <div class="mb-3">
            <label class="form-label">Post Creator</label>
            <select name='post_creator' class="form-select">
                <option selected disabled>Choose creator</option>

                @foreach ($users as $user)
                    <option @if ($user->id == $post->user_id) selected @endif value={{ $user->id }}>{{ $user->name }}</option>

                @endforeach
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">
            Update
        </button>

    </form>



@endsection
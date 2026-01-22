@extends('layouts.app')
@section('title')
    Create
@endsection
@section('content')
    <form method="post" action="">

        <!-- Title -->
        <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" placeholder="Enter post title">
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control" rows="4" placeholder="Enter post description"></textarea>
        </div>

        <!-- Post Creator (Dropdown) -->
        <div class="mb-3">
            <label class="form-label">Post Creator</label>
            <select class="form-select">
                <option selected disabled>Choose creator</option>
                <option>Ahmed</option>
                <option>Mona</option>
                <option>Youssef</option>
                <option>Sara</option>
            </select>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-success">
            Submit
        </button>

    </form>



@endsection
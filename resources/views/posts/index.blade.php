@extends('layouts.app')
@section('title')
    Index
@endsection
@section('content')


    <div class="text-center my-3">

        <a href="{{ route('posts.create') }}" type="button" class="btn btn-success">Create Post</a>

    </div>
    <table class="table w-75 mx-auto">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Posted By</th>
                <th scope="col">Created At</th>
                <th scope="col">Actions</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{ $post['id'] }}</th>
                    <td>{{ $post['title'] }}</td>
                    <td>{{ $post['posted_by'] }}</td>
                    <td>{{ $post['created_at'] }}</td>
                    <td>
                        <div>

                            <a href='{{ route('posts.show', $post['id']) }}' class="btn btn-info">View</a>
                            <a href="{{ route('posts.edit', $post['id']) }}" class="btn btn-primary">Edit</a>
                            <a class="btn btn-danger">Delete</a>

                        </div>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>
@endsection
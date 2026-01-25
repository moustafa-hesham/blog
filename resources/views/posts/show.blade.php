@extends('layouts.app')
@section('title')
    Show
@endsection
@section('content')


    <div class="card mt-4">
        <div class="card-header">
            Posts Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Title: {{ $post->title }}</h5>
            <p class="card-text">{{ $post->description }}</p>

        </div>
    </div>
    <div class="card mt-4">
        <div class="card-header">
            Post Created Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Name: Mitch</h5>
            <p class="card-text">Email: mitch@info.com</p>
            <p class="card-text">Created At: Friday, 15th of August 1995 03:15:00 AM</p>

        </div>
    </div>
@endsection
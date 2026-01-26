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
            <h5 class="card-title">Name: {{ $post->user?->name ?? 'This post was created by admin' }}</h5>
            <p class="card-text">Email: {{ $post->user?->name ?? 'This post was created by admin' }}</p>
            <p class="card-text">Created At: {{ $post->user?->created_at ?? 'This post was created by admin' }} </p>


        </div>
    </div>
@endsection
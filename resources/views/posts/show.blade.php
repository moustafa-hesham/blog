<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Show Post</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>



</html>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand fw-bold" href="#">Mitch Blog Post</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('posts.show') }}">All Posts</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="container">
    <div class="card mt-4">
        <div class="card-header">
            Posts Info
        </div>
        <div class="card-body">
            <h5 class="card-title">Title: {{ $post['title'] }}</h5>
            <p class="card-text">{{ $post['description'] }}</p>

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
</div>

</div>
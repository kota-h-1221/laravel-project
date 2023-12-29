<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Post</title>
</head>
<body>
    <h1>Edit Post</h1>
    <form method="POST" action="{{ route('posts.update', $post->id) }}">
        @csrf
        @method('PUT')
        <label for="title">Title:</label><br>
        <input type="text" name="title" id="title" value="{{ $post->title }}" required><br>
        <label for="body">Body:</label><br>
        <textarea name="body" id="body" required>{{ $post->body }}</textarea><br>
        <button type="submit">Update</button>
    </form>
    <a href="{{ route('posts.index') }}">Back to all posts</a>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>All Posts</title>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* Internal CSS */
    .btn-container {
        margin-top: 20px;
    }
</style>
</head>
<body>
<div class="container">
    <h1>All Posts</h1>
    @if (session('success'))
     <div class="alert alert-success">
     {{ session('success') }}
     </div>
    @endif
    <table class="table">
     <thead>
     <tr>
     <th>Title</th>
     <th>Content</th>
     <th>Actions</th>
     </tr>
     </thead>
     <tbody>
     @foreach ($posts as $post)
     <tr>
     <td>{{ $post->title }}</td>
     <td>{{ $post->content }}</td>
     <td>
     <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">View</a>
     <a href="{{ route('posts.edit', $post) }}" class="btn btn-secondary">Edit</a>
     <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline-block">
     @csrf
     @method('DELETE')
     <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
     </form>
     </td>
     </tr>
     @endforeach
     </tbody>
    </table>
    {{ $posts->links() }}
</div>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

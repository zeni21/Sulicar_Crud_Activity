<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Edit Post</title>
<!-- Bootstrap CSS -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* Internal CSS */
    .form-control {
        margin-bottom: 10px;
    }
</style>
</head>
<body>
<div class="container">
    <h1>Edit Post</h1>
    @if ($errors->any())
     <div class="alert alert-danger">
     <ul>
     @foreach ($errors->all() as $error)
     <li>{{ $error }}</li>
     @endforeach
     </ul>
     </div>
    @endif
    <form action="{{ route('posts.update', $post) }}" method="POST">
     @csrf
     @method('PUT')
     <div class="form-group">
     <label for="title">Title</label>
     <input type="text" name="title" id="title" class="form-control" value="{{ $post->title }}" required>
     </div>
     <div class="form-group">
     <label for="content">Content</label>
     <textarea name="content" id="content" class="form-control" rows="4" required>{{ $post->content }}</textarea>
     </div>
     <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

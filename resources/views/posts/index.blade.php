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
    
    
    body {
        background-color: #f8f9fa; /
    }
    
    h1 {
        color: #343a40;
        margin-top: 40px; 
    }
    

    .table {
        background-color: #ffffff; 
    }
    
   
    .table th {
        background-color: #f8f9fa; 
        border-top: none; 
    }
    
   
    .btn-primary {
        background-color: #007bff;
        border-color: #007bff; 
    }
    
    .btn-primary:hover {
        background-color: #0056b3; 
        border-color: #0056b3; 
    }
    
    .btn-secondary {
        background-color: #6c757d; 
        border-color: #6c757d; 
    }
    
    .btn-secondary:hover {
        background-color: #5a6268; 
        border-color: #5a6268; 
    }
    
    .btn-danger {
        background-color: #dc3545; 
        border-color: #dc3545;
    }
    
    .btn-danger:hover {
        background-color: #bd2130;
        border-color: #bd2130; 
    }
    
  
    .container {
        border: 2px solid #ff69b4; 
        border-radius: 10px;
        padding: 20px; 
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
    <table class="table table-bordered">
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
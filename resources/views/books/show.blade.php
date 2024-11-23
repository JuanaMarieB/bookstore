<!-- resources/views/books/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #121212;
            color: #ffffff !important;
        }
        .card {
            background-color: #333237;
            border: none;
            color: #ffffff !important;;
        }
        .btn-primary, .btn-secondary {
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .btn-secondary:hover {
            background-color: #6c757d;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
                <h1 class="card-title mb-4">Book Details</h1>
                <p><strong>ID:</strong> {{ $book->id }}</p>
                <p><strong>Name:</strong> {{ $book->name }}</p>
                <p><strong>Quantity:</strong> {{ $book->quantity }}</p>
                <p><strong>Price:</strong> ${{ $book->price }}</p>
                <p><strong>Description:</strong> {{ $book->description }}</p>
                <div class="mt-4">
                    <a href="{{ route('books.index') }}" class="btn btn-secondary">Back to Book List</a>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

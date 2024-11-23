<!-- resources/views/books/show.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book Details</title>
</head>
<body>
    <h1>Book Details</h1>
    <p><strong>ID:</strong> {{ $book->id }}</p>
    <p><strong>Name:</strong> {{ $book->name }}</p>
    <p><strong>Quantity:</strong> {{ $book->quantity }}</p>
    <p><strong>Price:</strong> ${{ $book->price }}</p>
    <p><strong>Description:</strong> {{ $book->description }}</p>
    <a href="{{ route('books.index') }}">Back to Book List</a>
</body>
</html>
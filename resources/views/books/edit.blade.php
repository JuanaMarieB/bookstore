<!-- resources/views/books/edit.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form action="{{ route('books.update', $book->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Name:</label>
        <input type="text" name="name" value="{{ $book->name }}" required>
        <br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" value="{{ $book->quantity }}" required>
        <br>
        <label for="price">Price:</label>
        <input type="text" name="price" value="{{ $book->price }}" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description">{{ $book->description }}</textarea>
        <br>
        <button type="submit">Update Book</button>
    </form>
    <a href="{{ route('books.index') }}">Back to Book List</a>
</body>
</html>
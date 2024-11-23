<!-- resources/views/books/create.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Book</title>
</head>
<body>
    <h1>Add New Book</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" required>
        <br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" required>
        <br>
        <label for="price">Price:</label>
        <input type="text" name="price" required>
        <br>
        <label for="description">Description:</label>
        <textarea name="description"></textarea>
        <br>
        <button type="submit">Add Book</button>
    </form>
    <a href="{{ route('books.index') }}">Back to Book List</a>
</body>
</html>
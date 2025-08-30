<!DOCTYPE html>
<html>
<head>
    <title>Add Category</title>
</head>
<body>
    <div>
        <h2>Add New Category</h2>

       
        <form action="{{ route('categories.store') }}" method="POST">
            @csrf
            <label for="name">Category Name:</label>
            <input type="text" id="name" name="name" required>
            <br><br>
            <button type="submit">Add</button>
        </form>
    </div>
</body>
</html>

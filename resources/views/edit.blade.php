<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
</head>
<body>
    <div>
        <h2>Edit Category</h2>

        @if ($errors->any())
            <div>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <label for="name">Category Name:</label>
            <input type="text" id="name" name="name" value="{{ $category->name }}" required>
            <br><br>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>

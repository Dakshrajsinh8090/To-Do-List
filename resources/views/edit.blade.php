<!DOCTYPE html>
<html>
<head>
    <title>Edit Category</title>
</head>
<body>
    <div>
        <p>qwbhjdjqwdwdiq jenfkejhfkf kbfjk a kn kqe,fkqnflneln flfmleqmfleqn flqn/lf nlnfe mefql mlfqe flqnfq lnfml mqflkqlfmqln   efqew
            fewm;lmw 
            wefwff
        </p>
        <h1>Edit Category</h1>

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

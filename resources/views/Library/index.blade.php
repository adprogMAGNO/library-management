<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">

            </div>
        </div>
    </div>
    <table>
        <thead>
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Description</th>
                <th>Isbn</th>
                <th>Published Year</th>
            </tr>
        </thead>
    </table>
</body>
     @foreach ($students as $students)
     <tr>
        <td>{{ $library->title }}</td>
        <td>{{ $library->author }}</td>
        <td>{{ $library->description }}</td>
        <td>{{ $library->isbn }}</td>
        <td>{{ $library->published year }}</td>
        <td>
            <a href="{{   url('library', '$library->id') }}/edit" class="btn btn-outline-success btn-sm">Edit</a>
            <form action="{{   url('$library', $library->id)}}"method="POST">
                @method('delete')
                @csrf
            </form>
            <button type="submit" class="btn btn-outline-danger btn-sm"onclick="return confirm('delete mo ba talaga?')">delete</button>
        </td>
     </tr>
     @endforeach
</html>
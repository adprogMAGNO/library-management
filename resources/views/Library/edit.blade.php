<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 mx-auto d-grip gap-2">
                <div>

                </div>
            </div>
        </div>
    </div>
    <form action="{{   url('library')}}"method="POST">
        @csrf
        <div class="form-group mb-3">
            <label class="form-label">Title</label>
            <input type="text" name="title" class="form-controller">
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Author</label>
            <input type="text" name="author" class="form-controller">
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Description</label>
            <input type="text" name="description" class="form-controller">
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Isbn</label>
            <input type="text" name="isbn" class="form-controller">
        </div>
        <div class="form-group mb-3">
            <label class="form-label">Published Year</label>
            <input type="text" name="year" class="form-controller">
        </div>
    </form>
                </div>
            </div>
      </div>
</div>
</body>
</html>
<!-- resources/views/tasks/edit.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Task</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</head>
<body>

<div class="container mt-4">
    <h2>Edit Task</h2>
    
    <form method="POST" action="/tasks/{{ $task->id }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Task Name:</label>
            <input type="text" name="name" class="form-control" value="{{ $task->name }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update Task</button>
    </form>
</div>


</body>
</html>

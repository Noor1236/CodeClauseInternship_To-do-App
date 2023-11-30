<!-- resources/views/tasks/index.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>To-Do App</title>
    <!-- Include Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    
</head>
<body>

<div class="container mt-4">
    <table class="table table-dark table-hover">
        <thead>
            <tr>
                <th>ID</th>
                <th>Task</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tasks as $task)
                <tr>
                    <td>{{$task->id}}</td>
                    <td>{{ $task->name }}</td>
                    <td>
                        <a href="/tasks/{{ $task->id }}/edit" class="btn btn-primary btn-sm">Edit</a>
                        <form method="POST" action="/tasks/{{ $task->id }}" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <form method="POST" action="/tasks">
        @csrf
        <div class="form-group">
            <label for="name">New Task:</label>
            <input type="text" name="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success">Add Task</button>
    </form>
</div>


</body>
</html>

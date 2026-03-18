<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Add New Evaluable Activity</h1>
        <form action="{{ route('grades.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="subject" class="form-label">Type of Activity</label>
                <input type="text" name="subject" id="subject" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="activity" class="form-label">Activity Name</label>
                <input type="text" name="activity" id="activity" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="date" class="form-label">Date</label>
                <input type="date" name="date" id="date" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="grade" class="form-label">Grade:</label>
                <input type="number" step="0.01" name="grade" id="grade" class="form-control" min="0" max="100" required>
            </div>
            <button type="submit" class="primary">Add Activity</button>
            <a href="{{ route('grades.index') }}" class="secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Edit Evaluable Activity</h1>
        <form action="{{route('grades.update', $grade->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="subject" class="form-label">Type of Activity</label>
                <input type="text" class="form-control" id="subject" name="subject" value="{{ $grade->subject}}" required>
            </div>

            <div class="form-group">
                <label for="activity" class="form-label">Activity Name</label>
                <input type="text" class="form-control" id="activity" name="activity" value="{{ $grade->activity}}" required>
            </div>

            <div class="form-group">
                <label for="date" class="form-label">Date</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $grade->date}}" required>
            </div>

            <div class="form-group">
                <label for="grade" class="form-label">Grade:</label>
                <input type="number" step="0.01" class="form-control" id="grade" name="grade" value="{{ $grade->grade}}" min="0" max="100" required>
            </div>
            <button type="submit" class="primary">Update Activity</button>
            <a href="{{ route('grades.index') }}" class="secondary">Cancel</a>
        </form>
    </div>
</body>
</html>
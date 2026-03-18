<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="Viewport" content="width=device-width, initial-scale=1.0">
        <title>View Activity</title>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
    </head>
    <body>
        <div class="container">
            <h1>Evaluable Activity Details</h1>
            <div class="card">
                <div class="card-body">
                <h5 class="card-title">Subject: {{ $grade->subject }}</h5>
                <h5 class="card-text">Activity: {{ $grade->activity }}</h5>
                <h5 class="card-text">Date: {{ $grade->date }}</h5>
                <h5 class="card-text">Grade: {{ $grade->grade }}</h5>
                </div>
            </div>
            <a href="{{ route('grades.index') }}" class="secondary">Back</a>
            <a href="{{ route('grades.edit', $grade->id) }}" class="warning">Edit</a>
        </div>
    </body>
</html>
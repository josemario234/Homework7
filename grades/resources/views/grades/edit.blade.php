<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Edit Evaluable Activity</h1>
        <form action="{{route('grades.update', $grade->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class=
        </form>
</html>
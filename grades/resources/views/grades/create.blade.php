<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Activity</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto mt-10">
        <h1 class="text-2xl font-bold mb-5">Add New Activity</h1>
        <form action="{{ route('grades.store') }}" method="POST" class="bg-white p-6 rounded shadow-md">
            @csrf
            <div class="mb-4">
                <label for="subject" class="block text-gray-700">Subject:</label>
                <input type="text" name="subject" id="subject" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="activity" class="block text-gray-700">Activity:</label>
                <input type="text" name="activity" id="activity" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="date" class="block text-gray-700">Date:</label>
                <input type="date" name="date" id="date" class="w-full px-3 py-2 border rounded" required>
            </div>
            <div class="mb-4">
                <label for="grade" class="block text-gray-700">Grade:</label>
                <input type="number" step="0.01" name="grade" id="grade" class="w-full px-3 py-2 border rounded" required>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Add Activity</button>
        </form>
    </div>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-800">

    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4 text-white">Course List</h1>

        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Title</th>
                    <th class="border px-4 py-2">Description</th>
                    <th class="border px-4 py-2">Price</th>
                    <th class="border px-4 py-2">Duration</th>
                    <th class="border px-4 py-2">Teacher</th>
                    <th class="border px-4 py-2">Max Students</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($courses as $course)
                    <tr class="bg-[#D8EED9]">
                        <td class="border px-4 py-2">{{ $course->title }}</td>
                        <td class="border px-4 py-2">{{ $course->description ?? 'N/A' }}</td>
                        <td class="border px-4 py-2">
                            @if ($course->price)
                                {{ number_format($course->price, 2) }}
                            @else
                                N/A
                            @endif
                        </td>
                        <td class="border px-4 py-2">{{ $course->duration ?? 'N/A' }}</td>
                        <td class="border px-4 py-2">{{ $course->teacher->name ?? 'N/A' }}</td>
                        <td class="border px-4 py-2">{{ $course->max_students ?? 'N/A' }}</td>
                    </tr>
                @empty
                    <tr>
                        <td class="border px-4 py-2 text-center" colspan="6">No courses found.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

</body>
</html>
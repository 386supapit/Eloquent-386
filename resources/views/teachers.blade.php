<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teacher List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-800">

    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4 text-white">Teacher List</h1>
        
        <!-- ตารางข้อมูล -->
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Phone</th>
                    <th class="border px-4 py-2">Address</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($teachers as $teacher)
                <tr>
                    <td class="border px-4 py-2">{{ $teacher->id }}</td>
                    <td class="border px-4 py-2">{{ $teacher->name }}</td>
                    <td class="border px-4 py-2">{{ $teacher->email }}</td>
                    <td class="border px-4 py-2">{{ $teacher->phone ?? 'N/A' }}</td>
                    <td class="border px-4 py-2">{{ $teacher->address ?? 'N/A' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>

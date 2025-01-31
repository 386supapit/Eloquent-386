<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-800">

    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4 text-white">Student List</h1>
        
        <!-- ตารางข้อมูล -->
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Email</th>
                    <th class="border px-4 py-2">Phone</th>
                    <th class="border px-4 py-2">Address</th>
                    <th class="border px-4 py-2">Date of Birth</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $student)
                <tr>
                    <td class="border px-4 py-2">{{ $student->id }}</td>
                    <td class="border px-4 py-2">{{ $student->name }}</td>
                    <td class="border px-4 py-2">{{ $student->email }}</td>
                    <td class="border px-4 py-2">{{ $student->phone ?? 'N/A' }}</td>
                    <td class="border px-4 py-2">{{ $student->address ?? 'N/A' }}</td>
                    <td class="border px-4 py-2">{{ $student->date_of_birth ? \Carbon\Carbon::parse($student->date_of_birth)->format('d/m/Y') : 'N/A' }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>

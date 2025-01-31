<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room Type List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-800">

    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4 text-white">Room Type List</h1>
        
        <!-- ตารางข้อมูล -->
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Type</th>
                    <th class="border px-4 py-2">Description</th>
                    <th class="border px-4 py-2">Price</th>
                    <th class="border px-4 py-2">Capacity</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roomTypes as $roomType)
                <tr>
                    <td class="border px-4 py-2">{{ $roomType->id }}</td>
                    <td class="border px-4 py-2">{{ $roomType->type }}</td>
                    <td class="border px-4 py-2">{{ $roomType->description ?? 'N/A' }}</td>
                    <td class="border px-4 py-2">{{ number_format($roomType->price, 2) }}</td>
                    <td class="border px-4 py-2">{{ $roomType->capacity }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>

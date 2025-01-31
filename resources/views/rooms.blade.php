<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Room List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-800">

    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4 text-white">Room List</h1>
        
        <!-- ตารางข้อมูล -->
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Room ID</th>
                    <th class="border px-4 py-2">Room Number</th>
                    <th class="border px-4 py-2">Room Type</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($rooms as $room)
                    <tr>
                        <td class="border px-4 py-2">{{ $room->id }}</td>
                        <td class="border px-4 py-2">{{ $room->number }}</td>
                        <td class="border px-4 py-2">{{ $room->roomType->type }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>

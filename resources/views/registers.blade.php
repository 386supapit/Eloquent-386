<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-800">

    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4 text-white">Register List</h1>
        
        <!-- ตารางข้อมูล -->
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Student Name</th>
                    <th class="border px-4 py-2">Course Title</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($registers as $register)
                <tr>
                    <td class="border px-4 py-2">{{ $register->student->name }}</td>
                    <td class="border px-4 py-2">
                        @if($register->courses)
                            {{ $register->courses->title }}
                        @else
                            ไม่มีข้อมูลคอร์ส
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>

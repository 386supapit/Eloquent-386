<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-800">

    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4 text-white">Order List</h1>
        
        <!-- ตารางข้อมูล -->
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Order ID</th>
                    <th class="border px-4 py-2">Customer ID</th>
                    <th class="border px-4 py-2">Order Date</th>
                    <th class="border px-4 py-2">Status</th>
                    <th class="border px-4 py-2">Total Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td class="border px-4 py-2">{{ $order->id }}</td>
                        <td class="border px-4 py-2">{{ $order->product_customer_id }}</td>
                        <td class="border px-4 py-2">{{ $order->order_date }}</td>
                        <td class="border px-4 py-2">{{ $order->order_status }}</td>
                        <td class="border px-4 py-2">{{ number_format($order->total_amount, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Detail List</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.1.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-green-800">

    <div class="container mx-auto mt-8">
        <h1 class="text-2xl font-bold mb-4 text-white">Order Detail List</h1>
        
        <!-- ตารางข้อมูล -->
        <table class="min-w-full bg-white border border-gray-300">
            <thead>
                <tr>
                    <th class="border px-4 py-2">Order ID</th>
                    <th class="border px-4 py-2">Product ID</th>
                    <th class="border px-4 py-2">Product Name</th> 
                    <th class="border px-4 py-2">Price</th>
                    <th class="border px-4 py-2">Quantity</th> 
                    <th class="border px-4 py-2">Total Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orderDetails as $orderDetail)
                    <tr class="bg-[#D8EED9]">
                        <td class="border px-4 py-2">{{ $orderDetail->order_id }}</td>
                        <td class="border px-4 py-2">{{ $orderDetail->product_id }}</td>
                        <td class="border px-4 py-2">{{ $orderDetail->product->name ?? 'N/A' }}</td> <!-- ชื่อสินค้า -->
                        <td class="border px-4 py-2">
                            @if ($orderDetail->product->price)
                                {{ number_format($orderDetail->product->price, 2) }}
                            @else
                                N/A
                            @endif
                        </td> <!-- ราคาสินค้า -->
                        <td class="border px-4 py-2">{{ $orderDetail->quantity }}</td>
                        <td class="border px-4 py-2">
                            @if ($orderDetail->product->price && $orderDetail->quantity)
                                {{ number_format($orderDetail->product->price * $orderDetail->quantity, 2) }}
                            @else
                                N/A
                            @endif
                        </td> <!-- ยอดรวม -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
</html>

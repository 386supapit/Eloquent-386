<?php

namespace App\Http\Controllers;

use App\Models\RoomCustomer;
use Illuminate\Http\Request;

class RoomCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ดึงข้อมูลลูกค้าห้องพักทั้งหมด
        $roomCustomers = RoomCustomer::all();

        // ส่งข้อมูลในรูปแบบ JSON พร้อมกับสถานะ success
        return response()->json([
            'status' => 'success',
            'data' => $roomCustomers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(RoomCustomer $roomCustomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RoomCustomer $roomCustomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, RoomCustomer $roomCustomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RoomCustomer $roomCustomer)
    {
        //
    }
}

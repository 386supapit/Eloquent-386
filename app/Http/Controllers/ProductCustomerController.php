<?php

namespace App\Http\Controllers;

use App\Models\ProductCustomer;
use Illuminate\Http\Request;

class ProductCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ดึงข้อมูลลูกค้าทั้งหมด
        $customers = ProductCustomer::all();

        // ส่งข้อมูลในรูปแบบ JSON พร้อมกับสถานะ success
        return response()->json([
            'status' => 'success',
            'data' => $customers
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
    public function show(ProductCustomer $productCustomer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductCustomer $productCustomer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductCustomer $productCustomer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductCustomer $productCustomer)
    {
        //
    }
}

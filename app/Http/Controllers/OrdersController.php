<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrdersController extends Controller
{

    public function index()
    {
        return view('orders.index');
    }

    public function create()
    {
        return view('orders.create');
    }

    public function store(Request $request)
    {
        // Validate and store the order
        // $validatedData = $request->validate([
        //     'product_id' => 'required|exists:products,id',
        //     'quantity' => 'required|integer|min:1',
        //     'customer_name' => 'required|string|max:255',
        //     'customer_email' => 'required|email|max:255',
        // ]);

        // Order::create($validatedData);

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    public function show($id)
    {
        // $order = Order::findOrFail($id);
        return view('orders.show'/*, compact('order')*/);
    }

    public function edit($id)
    {
        // $order = Order::findOrFail($id);
        return view('orders.edit'/*, compact('order')*/);
    }
    public function update(Request $request, $id)
    {
        // Validate and update the order
        // $validatedData = $request->validate([
        //     'product_id' => 'required|exists:products,id',
        //     'quantity' => 'required|integer|min:1',
        //     'customer_name' => 'required|string|max:255',
        //     'customer_email' => 'required|email|max:255',
        // ]);

        // $order = Order::findOrFail($id);
        // $order->update($validatedData);

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }
    public function destroy($id)
    {
        // $order = Order::findOrFail($id);
        // $order->delete();

        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}


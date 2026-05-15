<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return response()->json(Order::with('items.product')->get());
    }

    public function store(Request $request)
    {
        $order = Order::create([
            'total' => $request->total,
            'status' => 'completed'
        ]);

        foreach ($request->items as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price']
            ]);

            // reduce stock
            $product = Product::findOrFail($item['product_id']);
            $product->stock -= $item['quantity'];
            $product->save();
        }

        return response()->json($order->load('items.product'), 201);
    }

    public function destroy($id)
    {
        Order::findOrFail($id)->delete();
        return response()->json(['message' => 'Deleted']);
    }

    public function dashboard()
    {
        return response()->json([
            'total_sales' => Order::count(),
            'total_revenue' => Order::sum('total'),
            'total_products' => \App\Models\Product::count(),
            'total_categories' => \App\Models\Category::count(),
        ]);
    }
}
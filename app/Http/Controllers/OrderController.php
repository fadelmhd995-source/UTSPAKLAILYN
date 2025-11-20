<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    /**
     * Store a new order.
     *
     * Validates the incoming request and returns a JSON response.
     * Replace the body with model persistence when an Order model exists.
     */
    public function store(Request $request)
    {
        // Support both API JSON and web form submissions (pesan layanan)
        if ($request->wantsJson() || $request->has('customer_name')) {
            $data = $request->validate([
                'customer_name' => 'required|string|max:255',
                'customer_email' => 'required|email|max:255',
                'items' => 'required|array',
            ]);

            try {
                $order = Order::create([
                    'customer_name' => $data['customer_name'],
                    'customer_email' => $data['customer_email'],
                    'items' => $data['items'],
                ]);

                return response()->json([
                    'message' => 'Order created',
                    'order' => $order,
                ], 201);
            } catch (\Exception $e) {
                Log::error('Order create (API) failed: ' . $e->getMessage(), ['exception' => $e]);
                return response()->json(['message' => 'Failed to create order'], 500);
            }
        }

        // Web form (pesan layanan)
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:50',
            'address' => 'required|string',
            'area' => 'required|integer|min:1',
            'notes' => 'nullable|string',
            'service' => 'nullable|string',
        ]);

        try {
            $order = Order::create([
                'name' => $data['name'],
                'phone' => $data['phone'],
                'address' => $data['address'],
                'area' => $data['area'],
                'notes' => $data['notes'] ?? null,
                'service' => $data['service'] ?? null,
            ]);

            return redirect()->back()->with('success', 'Pesanan berhasil dikirim. Kami akan menghubungi Anda.');
        } catch (\Exception $e) {
            Log::error('Order create (web) failed: ' . $e->getMessage(), ['exception' => $e]);
            return redirect()->back()->with('error', 'Gagal menyimpan pesanan. Silakan coba lagi.');
        }
    }
}

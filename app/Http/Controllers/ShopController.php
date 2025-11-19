<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function recommend(Request $request)
    {
        $area = $request->input('area');
        $service = $request->input('service');
        $recommendation = $this->getRecommendation($area, $service);

        // Kembalikan ke view 'shop' agar hasil tampil di halaman shop.blade.php
        return view('shop', compact('recommendation'));
    }

    public function getRecommendation($area, $service)
    {
        $package = 'Small';
        $staff = 1;
        $price = 50000;

        if ($area > 150) {
            $package = 'Extra';
            $staff = 4;
            $price = 250000;
        } elseif ($area > 100) {
            $package = 'Large';
            $staff = 3;
            $price = 200000;
        } elseif ($area > 50) {
            $package = 'Medium';
            $staff = 2;
            $price = 150000;
        }

        // Penyesuaian harga berdasarkan jenis layanan
        if ($service == 'deepcleaning') $price += 50000;
        if ($service == 'ac') $price += 30000;
        if ($service == 'officecleaning') $price += 40000;

        return [
            'package' => $package,
            'staff' => $staff,
            'price' => $price,
        ];
    }
}

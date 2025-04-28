<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $quantity = $request->query('quantity', 50);

//        We can use this, if database is set up and seeders are executed
//        $products = Product::orderBy('created_at', 'desc')->take(50)->get();
        $products = collect(range(1, $quantity))->map(fn () => Product::generateRandomProduct());

        $perPage = 15;
        $currentPage = LengthAwarePaginator::resolveCurrentPage();
        $pagedData = $products->slice(($currentPage - 1) * $perPage, $perPage)->values();

        $paginator = new LengthAwarePaginator($pagedData, $quantity, $perPage, $currentPage, [
            'path' => url('/api/v1/products'),
            'query' => ['quantity' => $quantity],
        ]);

        return response()->json($paginator);
    }
}

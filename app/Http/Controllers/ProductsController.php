<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index(Request $request)
    {
        $products = Product::inRandomOrder()->where('active', true)->take(16)->get();

        $filteredProducts = Product::query()
            ->when($request->input('search'), function ($query, $search) {
                $query->where('name', 'like', "%{$search}%");
            })
            ->paginate(10)
            ->map(function ($product) {
                return [
                    'id' => $product->id,
                    'name' => $product->name,
                    'description'=>$product->description,
                    'active'=>$product->active,
                    'image'=>$product->image,
                    'price'=>$product->price
                ];
            });

        return inertia('Products/Index', [
            //'products' => $products
            'products' => $filteredProducts,
            'filters' => $request->only(['search']),
        ]);
    }
}

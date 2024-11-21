<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::paginate(5);
        return view('product.index', ['products' => $products]);
    }

    public function create()
    {
        return view('product.create');
    }

    public function store(StoreProductRequest $request)
    {
        $data = $request->validated();
        Product::create($data);

        return redirect()->route('product.index')->with('success', 'Product Created Successfull');
    }


    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('product.edit', ['product' => $product]);
    }


    public function update(StoreProductRequest $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->only(['name', 'price', 'stock', 'description']));

        return redirect()->route('product.index', ['success' => 'The Product was updated']);
    }

    public function show() {}

    public function destroy(string $id)
    {
        Product::destroy($id);
        return redirect()->route('product.index');
    }

    public function pdf()
    {
        $products = Product::all();
        $data = [
            'products' => $products
        ];
        $pdf = Pdf::loadView('pdf', $data);
        return $pdf->download('products.pdf');
    }
}

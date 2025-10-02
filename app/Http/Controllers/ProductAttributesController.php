<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\product_attributes;
use Illuminate\Http\Request;

class ProductAttributesController extends Controller
{
    public function create()
    {
        $products = product::select('id', 'title')->get();
        return view('productAttributes.create', ['products' => $products]);
    }
    public function store(Request $request)
    {
        product_attributes::create($request->all());
        return to_route('productAttribute-index');
    }
    public function index()
    {
        $productAttributes = product_attributes::with('product')->get();
        return view('productAttributes.index', ['proAttrs' => $productAttributes]);
    }
    public function show(product_attributes $productAttribute)
    {
        $productAttribute->product;
        return view('productAttributes.show', ['productAttribute' => $productAttribute]);
    }
    public function edit(product_attributes $productAttribute)
    {
        $productAttribute->product;
        $products = product::select('id', 'title')->get();
        return view('productAttributes.edit', ['products' => $products, 'productAttribute' => $productAttribute]);
    }
    public function update(Request $request)
    {
        $productAttribute = product_attributes::find($request->productAttribute_id);
        $productAttribute->attribute_key = $request->attribute_key;
        $productAttribute->attribute_value = $request->attribute_value;
        $productAttribute->product_id = $request->product_id;
        $productAttribute->save();
        return to_route('productAttribute-index');
    }
    public function delete(product_attributes $productAttribute)
    {
        $productAttribute->delete();
        return to_route('productAttribute-index');
    }
}

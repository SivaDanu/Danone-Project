<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        //$data = Product::all();
        $data = Product::where('name', 'like', '%' . $request->get('search') . '%')
        ->orWhere('code', 'like', '%' . $request->get('search') . '%')
        ->simplePaginate(3);
        return view('product.index', ['data_product' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        $request->image->store('Product', 'public');
        $product = new Product();
        $product->fill($request->all());
        $product->image=$request->image->hashName();
        $product->save();

        return redirect()->route('product.index')->with('success', 'Add A New Product Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('product.show', ['data_product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        $product->fill($request->all());
            if ($request->image)
                {
                    $request->image->store('Product', 'public');
                    $product->image=$request->image->hashName();
                }
            else
                {
                    $product->image=$product->image;
                }
        $product->save();

        return redirect('product')->with('Success', 'Update Product Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect('product')->with('success', 'Product Successfully');
    }
}
